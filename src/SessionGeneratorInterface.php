<?php

namespace RebelCode\Sessions;

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
     * @param int $start The start of the range as a timestamp.
     * @param int $end   The end of the range as a timestamp.
     *
     * @return array|Traversable A list of generated sessions.
     */
    public function generate($start, $end);
}
