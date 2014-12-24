<?php
/**
 * User: Tomasz Kunicki
 */
namespace Behat\Context\Assert;

require_once "include.php";

use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;

/**
 * Class JsonFeatureContext
 * @package Behat\Context\Assert
 */
class JsonFeatureContext implements Context, SnippetAcceptingContext
{
    /**
     * @Then Assert the json :arg1 is valid
     * @param $string
     */
    public function assertJson($string)
    {
        assertJson(
            (string)$string,
            sprintf("Assert the json [%s] is valid", $string)
        );
    }

    /**
     * @Then Assert the value json :arg1 is equal to json :arg2
     * @param $expectedJson
     * @param $actualJson
     */
    public function assertJsonStringEqualsJsonString($expectedJson, $actualJson)
    {
        assertJsonStringEqualsJsonString(
            $expectedJson,
            $actualJson,
            sprintf("Assert the json [%s] is equal to json [%s]", $actualJson)
        );
    }

    /**
     * @Then Assert the json :arg1 is not equal to json :arg2
     * @param $expectedJson
     * @param $actualJson
     */
    public function assertJsonStringNotEqualsJsonString($expectedJson, $actualJson)
    {
        assertJsonStringEqualsJsonString(
            $expectedJson,
            $actualJson,
            sprintf("Assert the value json [%s] is not equal to json [%s]", $actualJson)
        );
    }
}
