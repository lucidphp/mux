<?php

/*
 * This File is part of the Lucid\Mux package
 *
 * (c) iwyg <mail@thomas-appel.com> 
 *
 * For full copyright and license information, please refer to the LICENSE file
 * that was distributed with this package.
 */

namespace Lucid\Mux\Handler;

use Interop\Container\ContainerInterface;

/**
 * @interface ContainerAwareResolverInterface
 *
 * @package Lucid\Mux
 * @version $Id$
 * @author iwyg <mail@thomas-appel.com>
 */
interface ContainerAwareResolverInterface extends ResolverInterface
{
    /**
     * Sets a container.
     *
     * @param ContainerInterface $container
     *
     * @return void
     */
    public function setContainer(ContainerInterface $container);
}
