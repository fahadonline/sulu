<?php

/*
 * This file is part of Sulu.
 *
 * (c) MASSIVE ART WebServices GmbH
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Sulu\Bundle\ResourceBundle\Entity;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\NoResultException;

/**
 * Repository for conditions.
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ConditionRepository extends EntityRepository implements ConditionRepositoryInterface
{
    /**
     * {@inheritdoc}
     */
    public function findById($id)
    {
        try {
            $queryBuilder = $this->createQueryBuilder('condition')
                ->andWhere('condition.id = :conditionId')
                ->addSelect('conditionGroup')
                ->leftJoin('condition.conditionGroup', 'conditionGroup')
                ->setParameter('conditionId', $id);

            return $queryBuilder->getQuery()->getSingleResult();
        } catch (NoResultException $exc) {
            return;
        }
    }
}
