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

/**
 * @class TypeMapperInterface
 *
 * @package Lucid\Mux
 * @version $Id$
 * @author iwyg <mail@thomas-appel.com>
 */
interface TypeMapperInterface
{
    /**
     * getType
     *
     * @return string
     */
    public function getType() : string;

    /**
     * getObject
     *
     * @return Object
     */
    public function getObject();
}
