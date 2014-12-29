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
class ValueFeatureContext implements Context, SnippetAcceptingContext
{
    /**
     * @Then Assert the value :arg1 is empty
     * @param $actualValue
     */
    public function assertEmpty($actualValue)
    {
        assertEmpty(
            $actualValue,
            sprintf("Assert the [%s] is empty", $actualValue)
        );
    }

    /**
     * @Then Assert the value :arg1 is not empty
     * @param $actualValue
     */
    public function assertNotEmpty($actualValue)
    {
        assertNotEmpty(
            $actualValue,
            sprintf("Assert the value [%s] is not empty", $actualValue)
        );
    }

    /**
     * @Then Assert the value :arg1 is the same :arg2
     * @param $actualValue
     * @param $expectedValue
     */
    public function assertSame($actualValue, $expectedValue)
    {
        assertSame(
            $actualValue,
            $expectedValue,
            sprintf("Assert the value [%s] is the same [%s]: ", $actualValue, $expectedValue)
        );
    }

    /**
     * @Then Assert the value :arg1 is equal :arg2
     * @param $actualValue
     * @param $expectedValue
     */
    public function assertEquals($actualValue, $expectedValue)
    {
        assertEquals(
            $actualValue,
            $expectedValue,
            sprintf("Assert the value [%s] is equal [%s]: ", $actualValue, $expectedValue)
        );
    }

    /**
     * @Then Assert the value :arg1 is not equal :arg2
     * @param $actualValue
     * @param $expectedValue
     */
    public function assertNotEquals($actualValue, $expectedValue)
    {
        assertNotEquals(
            $actualValue,
            $expectedValue,
            sprintf("Assert the value [%s] is not equal [%s]: ", $actualValue, $expectedValue)
        );
    }

    /**
     * @Then Assert the value :arg1 is true
     * @param $condition
     */
    public function assertTrue($condition)
    {
        assertTrue(
            $condition,
            sprintf("Assert the value [%s] is true", $condition)
        );
    }

    /**
     * @Then Assert the value :arg1 is not true
     * @param $condition
     */
    public function assertNotTrue($condition)
    {
        assertNotTrue(
            $condition,
            sprintf("Assert the value [%s] is not true", $condition)
        );
    }

    /**
     * @Then Assert the value :arg1 is not false
     * @param $condition
     */
    public function assertNotFalse($condition)
    {
        assertNotTrue(
            $condition,
            sprintf("Assert the value [%s] is not false", $condition)
        );
    }

    /**
     * @Then Assert the value :arg1 is false
     * @param $condition
     */
    public function assertFalse($condition)
    {
        assertFalse(
            $condition,
            sprintf("Assert the value [%s] is false", $condition)
        );
    }

    /**
     * @Then Assert the value :arg1 is null
     * @param $condition
     */
    public function assertNull($condition)
    {
        assertNull(
            $condition,
            sprintf("Assert the value [%s] is null", $condition)
        );
    }

    /**
     * @Then Assert the value :arg1 is not null
     * @param $condition
     */
    public function assertNotNull($condition)
    {
        assertNotNull(
            $condition,
            sprintf("Assert the value [%s] is not null", $condition)
        );
    }

    /**
     * @Then Assert the value :arg1 is greater than :arg2
     * @param $expected
     * @param $actual
     */
    public function assertGreaterThan($actual, $expected)
    {
        assertGreaterThan(
            $expected,
            $actual,
            sprintf("Assert the value [%s] is greater than [%s]", $actual, $expected)
        );
    }

    /**
     * @Then Assert the value :arg1 is greater than :arg2 or equal
     * @param $expected
     * @param $actual
     */
    public function assertGreaterThanOrEqual($actual, $expected)
    {
        assertGreaterThanOrEqual(
            $expected,
            $actual,
            sprintf("Assert the value [%s] is greater than [%s] or equal", $actual, $expected)
        );
    }

    /**
     * @Then Assert the value :arg1 is less than :arg2
     * @param $expected
     * @param $actual
     */
    public function assertLessThan($actual, $expected)
    {
        assertLessThan(
            $expected,
            $actual,
            sprintf("Assert the value [%s] is less than [%s]", $actual, $expected)
        );
    }

    /**
     * @Then Assert the value :arg1 is less than :arg2 or equal
     * @param $expected
     * @param $actual
     */
    public function assertLessThanOrEqual($actual, $expected)
    {
        assertLessThanOrEqual(
            $expected,
            $actual,
            sprintf("Assert the value [%s] is less than [%s] or equal", $actual, $expected)
        );
    }

    /**
     * @Then Assert the value :arg1 match a given regex :arg2.
     *
     * @param $string
     * @param $pattern
     */
    public function assertRegExp($string, $pattern)
    {
        assertRegExp(
            $pattern,
            $string,
            sprintf("Assert the value [%s] match a given regex [%s]", $string, $pattern)
        );
    }

    /**
     * @Then Assert the value :arg1 does not match a given regex :arg2.
     *
     * @param $string
     * @param $pattern
     */
    public function assertNotRegExp($string, $pattern)
    {
        assertNotRegExp(
            $pattern,
            $string,
            sprintf("Assert the value [%s] does not match a given regex [%s]", $string, $pattern)
        );
    }
}
