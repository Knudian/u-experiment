<?php

use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use PHPUnit\Framework\TestCase;

/**
 * Defines application features from the specific context.
 */
class DataExportContext implements Context
{
    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
    }

    public function testDataType($dataType){
        $authorisedDataType = array("JSON","Json","json","XML","Xml","xml");
        PHPUnit\Framework\Assert::assertContains($dataType,$authorisedDataType);
    }

    /**
     * @Given The selected format to export the data in is :dataType
     */
    public function theSelectedFormatToExportTheDataInIs($dataType)
    {
        $this->testDataType($dataType);
    }

    /**
     * @Given the user is :connected
     */
    public function theUserIs($connected)
    {
        PHPUnit\Framework\Assert::assertEquals("connected", $connected);
    }

    /**
     * @When The user click the :button button
     */
    public function theUserClickTheButton($button)
    {
        PHPUnit\Framework\Assert::assertEquals("Export data", $button);
    }

    /**
     * @Then The file in :dataType is downloaded
     */
    public function theFileInIsDownloaded($dataType)
    {
        $this->testDataType($dataType);
    }
}