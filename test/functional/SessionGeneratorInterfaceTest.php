<?php


namespace RebelCode\Sessions\FuncTest;

use RebelCode\Sessions\SessionGeneratorInterface;
use Xpmock\TestCase;

/**
 * Tests {@see RebelCode\Sessions\SessionGeneratorInterface}.
 *
 * @since [*next-version*]
 */
class SessionGeneratorInterfaceTest extends TestCase
{
    /**
     * The class name of the test subject.
     *
     * @since [*next-version*]
     */
    const TEST_SUBJECT_CLASSNAME = 'RebelCode\\Sessions\\SessionGeneratorInterface';

    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
     *
     * @return SessionGeneratorInterface
     */
    public function createInstance()
    {
        $mock = $this->mock(static::TEST_SUBJECT_CLASSNAME)
            ->generate()
            ->new();

        return $mock;
    }

    /**
     * Tests whether a valid instance of the test subject can be created.
     *
     * @since [*next-version*]
     */
    public function testCanBeCreated()
    {
        $subject = $this->createInstance();

        $this->assertInstanceOf(
            static::TEST_SUBJECT_CLASSNAME, $subject,
            'Subject is not a valid instance'
        );
    }
}
