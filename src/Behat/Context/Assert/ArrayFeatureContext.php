<?php
/**
 * User: Tomasz Kunicki
 */
namespace Behat\Context\Assert;

require_once "include.php";

use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;

/**
 * Class FeatureContext
 * @package Behat\Context\Assert
 */
class ArrayFeatureContext implements Context, SnippetAcceptingContext
{
    /**
     * @Then Assert the array :arg1 count :integer elements
     *
     * @param $haystack
     * @param $expectedCount
     */
    public function assertCount($haystack, $expectedCount)
    {
        $expectedCount = (integer)$expectedCount;
        assertCount(
            $expectedCount,
            $haystack,
            sprintf(
                "Assert the array [%s] don't have [%s] elements, but [%s].",
                print_r($haystack, true),
                $expectedCount,
                count($haystack)
            )
        );
    }

    /**
     * @Then Assert the array :arg1 count :integer elements
     *
     * @param $haystack
     * @param $expectedCount
     */
    public function assertNotCount($haystack, $expectedCount)
    {
        $expectedCount = (integer)$expectedCount;
        assertNotCount(
            $expectedCount,
            $haystack,
            sprintf(
                "Assert the array [%s] don't have [%s] elements, but [%s].",
                print_r($haystack, true),
                $expectedCount,
                count($haystack)
            )
        );
    }

    /**
     * @Then Assert the array :arg1 has key :key
     * @param array $arg1
     * @param string $key
     */
    public function assertArrayHasKey(array $arg1, $key)
    {
        assertArrayHasKey(
            $key,
            $arg1,
            sprintf(
                "Assert the array [%s] have key [%s], but have [%s].",
                print_r($arg1, true),
                $key,
                join(',', array_keys($arg1))
            )
        );
    }

    /**
     * @Then Assert the array :arg1 not has key :key
     * @param array $arg1
     * @param string $key
     */
    public function assertArrayNotHasKey(array $arg1, $key)
    {
        assertArrayNotHasKey(
            $key,
            $arg1,
            sprintf(
                "Assert the array [%s] don't have key [%s], but have [%s].",
                print_r($arg1, true),
                $key,
                join(',', array_keys($arg1))
            )
        );
    }

    /**
     * @Then Asserts the array :arg1 does not contain a :arg2.
     * @param $needle
     * @param $haystack
     */
    public function assertNotContains($haystack, $needle)
    {
        assertNotContains(
            $needle,
            $haystack,
            sprintf(
                "Assert the array [%s] don't contain [%s], but have [%s].",
                print_r($haystack, true),
                $needle,
                join(',', array_keys($haystack))
            )
        );
    }

    /**
     * @Then Assert the array :arg1 is the same size as :arg2
     *
     * @param $expected
     * @param $actual
     */
    public function assertSameSize($actual, $expected)
    {
        assertSameSize(
            $expected,
            $actual,
            sprintf(
                "Assert the array [%s] not the same size as [%s]",
                print_r($actual, true),
                print_r($expected, true)
            )
        );
    }

    /**
     * @Then Assert the array :arg1 is not the same size as :arg2
     *
     * @param $expected
     * @param $actual
     */
    public function assertNotSameSize($actual, $expected)
    {
        assertNotSameSize(
            $expected,
            $actual,
            sprintf(
                "Assert the array [%s] is not the same size as [%s]",
                print_r($actual, true),
                print_r($expected, true)
            )
        );
    }
}
