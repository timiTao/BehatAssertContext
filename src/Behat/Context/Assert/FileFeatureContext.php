<?php
/**
 * User: Tomasz Kunicki
 */
namespace Behat\Context\Assert;

require_once "include.php";

use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;

/**
 * Class FileFeatureContext
 * @package Behat\Context\Assert
 */
class FileFeatureContext implements Context, SnippetAcceptingContext
{
    /**
     * @Then Assert the file :arg1 exists local
     * @param $filename
     */
    public function assertFileExists($filename)
    {
        assertFileExists(
            $filename,
            sprintf("Asserting the file [%s] exists local", $filename)
        );
    }

    /**
     * @Then Assert the file :arg1 not exists local
     * @param $filename
     */
    public function assertFileNotExists($filename)
    {
        assertFileNotExists(
            $filename,
            sprintf("Asserting the file [%s] not exists local", $filename)
        );
    }
}
