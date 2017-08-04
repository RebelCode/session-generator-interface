<?php

namespace RebelCode\Sessions;

use DateTimeInterface;

/**
 * Something that generates sessions.
 *
 * @since [*next-version*]
 */
interface SessionGeneratorInterface
{
    /**
     * Generates sessions within a given range.
     *
     * @since [*next-version*]
     *
     * @param DateTimeInterface $start The start of the range
     * @param DateTimeInterface $end   The end of the range.
     */
    public function generate(DateTimeInterface $start, DateTimeInterface $end);
}
