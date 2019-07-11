<?php

use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use PHPUnit\Framework\TestCase;

/**
 * Defines application features from the specific context.
 */
class SearchTrainingCatalogueContext implements Context
{

    /**
    * @Given I go on :arg1
     */
    public function iGoOn($page)
    {
        if($page == '/trainingCatalogue')
            {
                PHPUnit\Framework\Assert::assertTrue(true);
            };
    }

    /**
     * @And I press :link button
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
    
    /**
    * @Given I go on :arg1
     */
    public function iGoOn($page)
    {
        if($page == '/trainingCatalogue')
            {
                PHPUnit\Framework\Assert::assertTrue(true);
            };
    }

    /**
     * @When I select filters
     */
    public function iSelectFilters()
    {
        throw new PendingException();
    }

    /**
     * @And I press :link button
     */
    public function iPressButton($link)
    {
        $this->pressButton($link);
    }

    /**
     * @Then I see all training matching with these filters
     */
    public function iSeeAllTrainingMatchingWithTheseFilters()
    {
        throw new PendingException();
    }
}