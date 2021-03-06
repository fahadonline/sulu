<?php

/*
 * This file is part of the PHPCR Migrations package
 *
 * (c) Daniel Leech <daniel@dantleech.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use PHPCR\Migrations\VersionInterface;
use PHPCR\SessionInterface;

class Version201501011500 implements VersionInterface
{
    public function up(SessionInterface $session)
    {
        $session->getNode('/camel')->addNode('dan');
    }

    public function down(SessionInterface $session)
    {
        $session->getNode('/camel')->getNode('dan')->remove();
    }
}
