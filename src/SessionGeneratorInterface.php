<?php

namespace RebelCode\Sessions;

use DateTimeInterface;
use Traversable;

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
     * @param DateTimeInterface     $start   The start of the range
     * @param DateTimeInterface     $end     The end of the range.
     * @param int|array|Traversable $lengths The length or lengths of each session.
     * @param int                   $padding The number of seconds between each session.
     */
    public function generate(DateTimeInterface $start, DateTimeInterface $end, $lengths = [], $padding = 0);
}
