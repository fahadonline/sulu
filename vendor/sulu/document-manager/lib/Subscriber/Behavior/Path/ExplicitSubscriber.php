<?php

/*
 * This file is part of Sulu.
 *
 * (c) MASSIVE ART WebServices GmbH
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Sulu\Component\DocumentManager\Subscriber\Behavior\Path;

use PHPCR\NodeInterface;
use PHPCR\Util\PathHelper;
use Sulu\Component\DocumentManager\DocumentHelper;
use Sulu\Component\DocumentManager\DocumentStrategyInterface;
use Sulu\Component\DocumentManager\Event\ConfigureOptionsEvent;
use Sulu\Component\DocumentManager\Event\PersistEvent;
use Sulu\Component\DocumentManager\Events;
use Sulu\Component\DocumentManager\Exception\DocumentManagerException;
use Sulu\Component\DocumentManager\NodeManager;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\OptionsResolver\Exception\InvalidOptionsException;

/**
 * Populates or creates the node and/or parent node based on explicit
 * options.
 */
class ExplicitSubscriber implements EventSubscriberInterface
{
    /**
     * @var DocumentStrategyInterface
     */
    private $strategy;

    /**
     * @var NodeManager
     */
    private $nodeManager;

    /**
     * @param DocumentStrategyInterface $strategy
     * @param NodeManager $nodeManager
     */
    public function __construct(
        DocumentStrategyInterface $strategy,
        NodeManager $nodeManager
    ) {
        $this->strategy = $strategy;
        $this->nodeManager = $nodeManager;
    }

    /**
     * {@inheritdoc}
     */
    public static function getSubscribedEvents()
    {
        return [
            Events::PERSIST => ['handlePersist', 485],
            Events::CONFIGURE_OPTIONS => 'configureOptions',
        ];
    }

    /**
     * @param ConfigureOptionsEvent $event
     */
    public function configureOptions(ConfigureOptionsEvent $event)
    {
        $options = $event->getOptions();
        $options->setDefaults([
            'path' => null,
            'node_name' => null,
            'parent_path' => null,
            'auto_create' => false,
        ]);

        $options->setAllowedTypes('path', ['null', 'string']);
        $options->setAllowedTypes('node_name', ['null', 'string']);
        $options->setAllowedTypes('parent_path', ['null', 'string']);
        $options->setAllowedTypes('auto_create', 'bool');
    }

    /**
     * @param PersistEvent $event
     *
     * @throws DocumentManagerException
     */
    public function handlePersist(PersistEvent $event)
    {
        $options = $event->getOptions();
        $this->validateOptions($options);
        $document = $event->getDocument();
        $parentPath = null;
        $nodeName = null;

        if ($options['path']) {
            $parentPath = PathHelper::getParentPath($options['path']);
            $nodeName = PathHelper::getNodeName($options['path']);
        }

        if ($options['parent_path']) {
            $parentPath = $options['parent_path'];
        }

        if ($parentPath) {
            $event->setParentNode(
                $this->resolveParent($parentPath, $options)
            );
        }

        if ($options['node_name']) {
            if (!$event->hasParentNode()) {
                throw new DocumentManagerException(sprintf(
                    'The "node_name" option can only be used either with the "parent_path" option ' .
                    'or when a parent node has been established by a previous subscriber. ' .
                    'When persisting document: %s',
                    DocumentHelper::getDebugTitle($document)
                ));
            }

            $nodeName = $options['node_name'];
        }

        if (!$nodeName) {
            return;
        }

        if ($event->hasNode()) {
            $this->renameNode($event->getNode(), $nodeName);

            return;
        }

        $node = $this->strategy->createNodeForDocument(
            $document,
            $event->getParentNode(),
            $nodeName
        );

        $event->setNode($node);
    }

    private function renameNode(NodeInterface $node, $nodeName)
    {
        if ($node->getName() == $nodeName) {
            return;
        }

        $node->rename($nodeName);
    }

    private function resolveParent($parentPath, array $options)
    {
        $autoCreate = $options['auto_create'];

        if ($autoCreate) {
            return $this->nodeManager->createPath($parentPath);
        }

        return $this->nodeManager->find($parentPath);
    }

    private function validateOptions(array $options)
    {
        if ($options['path'] && $options['node_name']) {
            throw new InvalidOptionsException(
                'Options "path" and "name" are mutually exclusive'
            );
        }

        if ($options['path'] && $options['parent_path']) {
            throw new InvalidOptionsException(
                'Options "path" and "parent_path" are mutually exclusive'
            );
        }
    }
}
