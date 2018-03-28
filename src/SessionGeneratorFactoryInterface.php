<?php

namespace RebelCode\Sessions;

use Dhii\Factory\FactoryInterface;

/**
 * Something that can create new session generator instances.
 *
 * @since [*next-version*]
 */
interface SessionGeneratorFactoryInterface extends FactoryInterface
{
    /**
     * {@inheritdoc}
     *
     * @since [*next-version*]
     *
     * @return SessionGeneratorInterface The created session generator instance.
     */
    public function make($config = null);
}
