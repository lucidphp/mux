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
 * @class ParameterMapper
 *
 * @package Lucid\Mux
 * @version $Id$
 * @author iwyg <mail@thomas-appel.com>
 */
class PassParameterMapper implements ParameterMapperInterface
{
    /**
     * {@inheritdoc}
     */
    public function map(Reflector $handler, array $parameters)
    {
        return array_values($parameters);
    }
}
