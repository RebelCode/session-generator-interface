<?php

namespace RebelCode\Sessions;

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
     * @param int $start The start of the range as a timestamp.
     * @param int $end   The end of the range as a timestamp.
     */
    public function generate($start, $end);
}
