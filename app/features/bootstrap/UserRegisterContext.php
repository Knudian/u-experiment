<?php
use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use PHPUnit\Framework\TestCase;
/**
 * Defines application features from the specific context.
 */
class UserRegisterContext implements Context
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
     * @Given The user provide the login :email
     */
    public function theUserProvideTheLogin($email)
    {
        throw new PendingException();
    }

    /**
     * @Given The user provide the password :passws
     */
    public function theUserProvideThePassword($passwd)
    {
        throw new PendingException();
    }

    /**
     * @Given The user provide the siret :siret
     */
    public function theUserProvideTheSiret($siret)
    {
        throw new PendingException();
    }

    /**
     * @Then The User is created
     */
    public function theUserIsCreated()
    {
        return true;
    }
}
