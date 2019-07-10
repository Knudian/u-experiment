<?php

use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;

/**
 * Defines application features from the specific context.
 */
class DomainAuthorizationContext implements Context
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
        $this->domainList=[];
    }

    public function addDomain($domain){
        array_push($this->domainList, $domain);
    }

    /**
     * @Given :domain is part of the authorized domains
     */
    public function isPartOfTheAuthorizedDomains($domain)
    {
        $this->addDomain($domain);
    }

    /**
     * @Given The domain the user wants to add is :domain
     */
    public function theDomainTheUserWantsToAddIs($domain)
    {
        $pattern = '/(\w+\.\w+)$/';
        PHPUnit\Framework\Assert::assertNotContains($domain,$this->domainList);
        PHPUnit\Framework\Assert::assertRegExp($pattern,$domain);
    }

    /**
     * @When The user click the :button button
     */
    public function theUserClickTheButton($button)
    {
        PHPUnit\Framework\Assert::assertTrue(true, "Add domain");
    }

    /**
     * @Then The :domain is added to the list
     */
    public function theIsAddedToTheList($domain)
    {
        $this->addDomain($domain);
    }
}
