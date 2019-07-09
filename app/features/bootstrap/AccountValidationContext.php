<?php

use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use PHPUnit\Framework\TestCase;

/**
 * Defines application features from the specific context.
 */
class AccountValidationContext implements Context
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
        $this->domainList = [];
    }

    /**
     * @Given The email adress provided by the user is :email
     */
    public function theEmailAdressProvidedByTheUserIs($email)
    {
        $pattern = '/\S+@\S+\.\S+/';

        PHPUnit\Framework\Assert::assertRegExp($pattern, $email);
    }

    /**
     * @When The user click the :button button
     */
    public function theUserClickTheButton($button)
    {
        PHPUnit\Framework\Assert::assertTrue(true, $button == "register");
    }

    /**
     * @Then The user account is validated if :email compute to a recognized domain
     */
    public function theUserAccountIsValidatedIfComputeToARecognizedDomain($email)
    {
        $domain = explode("@", $email);
        PHPUnit\Framework\Assert::assertContains($domain[1], $this->domainList);
    }

    /**
     * @Given :domain is part of the authorized domains
     */
    public function isPartOfTheAuthorizedDomains($domain)
    {
        array_push($this->domainList, $domain);
    }
}
