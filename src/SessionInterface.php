<?php

namespace RebelCode\Sessions;

use DateTime;

/**
 * Something that represents a session.
 *
 * @since [*next-version*]
 */
interface SessionInterface
{
    /**
     * Retrieves the start date and time for this session.
     *
     * @since [*next-version*]
     *
     * @return DateTime
     */
    public function getStart();

    /**
     * Retrieves the end date and time for this session.
     *
     * @since [*next-version*]
     *
     * @return DateTime
     */
    public function getEnd();
}
