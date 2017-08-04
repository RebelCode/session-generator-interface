<?php

namespace RebelCode\Sessions;

/**
 * Something that represents a session.
 *
 * @since [*next-version*]
 */
interface SessionInterface
{
    /**
     * Retrieves the start timestamp for this session.
     *
     * @since [*next-version*]
     *
     * @return int
     */
    public function getStart();

    /**
     * Retrieves the end timestamp for this session.
     *
     * @since [*next-version*]
     *
     * @return int
     */
    public function getEnd();
}
