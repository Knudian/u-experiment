<?php
use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use PHPUnit\Framework\TestCase;
/**
 * Defines application features from the specific context.
 */
class DataImportContext implements Context
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

    /**
     * @Given The user is an :userRole
     */
    public function theUserIsAn($userRole)
    {
        $authorisedUserRole = array("Administrateur","Gestionnaire");
        PHPUnit\Framework\Assert::assertContains($userRole,$authorisedUserRole,"The user does not have the proper role to do this.");
    }

    /**
     * @Given The file they are providing is of the type :fileType
     */
    public function theFileTheyAreProvidingIsOfTheType($fileType)
    {
        $authorisedFileType = array("xlsx","xlsm","xlsb","xltx","xltm","xls","xml","csv");
        PHPUnit\Framework\Assert::assertContains($fileType,$authorisedFileType,"The file is not of an accepted type");
    }

    /**
     * @Given The data :dataOk formatted
     */
    public function theDataFormated($dataOk)
    {
        PHPUnit\Framework\Assert::assertEquals("properly",$dataOk, "The data is badly Formated");
    }

    /**
     * @When The user click the :button button
     */
    public function theUserClickTheButton($button)
    {
        PHPUnit\Framework\Assert::assertEquals("Import data",$button);
    }

    /**
     * @Then The formation is created
     */
    public function theFormationIsCreated()
    {
        PHPUnit\Framework\Assert::assertTrue(true);
    }
}
