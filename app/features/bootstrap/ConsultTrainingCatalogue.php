<?php

use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use PHPUnit\Framework\TestCase;

/**
 * Defines application features from the specific context.
 */
class ConsultTrainingCatalogueContext implements Context
{

/**
     * @Given I go on :page
     */
    public function iGoOn($page)
    {
        if($page == '/trainingCatalogue')
            {
                PHPUnit\Framework\Assert::assertTrue(true);
            };
    }

    /**
     * @Given I press :arg1 button
     */
    public function iPressButton($link)
    {
        $this->pressButton($link);
    }

    /**
     * @Then I see all training
     */
    public function iSeeAllTraining()
    {
        throw new PendingException();
    }
}