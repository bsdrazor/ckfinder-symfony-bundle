<?php
/*
 * This file is a part of the CKFinder bundle for Symfony.
 *
 * Copyright (C) 2016, CKSource - Frederico Knabben. All rights reserved.
 *
 * Licensed under the terms of the MIT license.
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */

namespace CKSource\Bundle\CKFinderBundle\Authentication;
use Symfony\Component\DependencyInjection\ContainerInterface;


class Authentication implements AuthenticationInterface
{
    /**
     * @var ContainerInterface
     */
    protected ContainerInterface $container;


    public function authenticate(): bool
    {
        return false;
    }

    /**
     * Sets the container.
     *
     * @param ContainerInterface|null $container A ContainerInterface instance or null
     */
    public function setContainer(ContainerInterface $container = null): void
    {
        $this->container = $container;
    }
}
