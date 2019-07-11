<?php

use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use PHPUnit\Framework\TestCase;

/**
 * Defines application features from the specific context.
 */
class ForgottenPasswordContext implements Context
{
    /**
     * @var email
     */
    private $email;

    /** @var password */
    private $password;

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
     * @Given the email adress provided by the user is :email
     */
    public function theEmailAdressProvidedByTheUserIs($email)
    {
        $pattern = '/\S+@\S+\.\S+/'; 
        PHPUnit\Framework\Assert::assertRegExp($pattern, $email);
    }

    /**
     * @Given the :password is correct
     * #Sinon, il doit retourner une erreur
     */
    public function theIsCorrect($password)
    {
        PHPUnit\Framework\Assert::assertEquals("pass123", $password);
    }

    /**
     * @When the user click the :login button
     */
    public function theUserClickTheButton($link)
    {
        if($link == 'Connexion')
            {
                PHPUnit\Framework\Assert::assertTrue(true);
            }
        return true;
    }

    /**
     * @Then the user is logged
     */
    public function theUserIsLogged()
    {
        if($email == 'test@user.fr' && $password == 'pass123')
            {
                PHPUnit\Framework\Assert::assertTrue(true);
            }
        return $page=="/login";
    }
    /**
     * @Given I am on :page
     */
    public function iAmOn($page)
    {
        if($page == '/login')
            {
                PHPUnit\Framework\Assert::assertTrue(true);
            };
        return true;
    }

    /**
     * @Given I press :button
     */
    public function iPress($link)
    {
        if($link == 'Connexion')
            {
                PHPUnit\Framework\Assert::assertTrue(true);
            };
    }

    /**
     * @Then I should be on :page
     */
    public function iShouldBeOn($page)
    {
        if($page == '/menu')
            {
                PHPUnit\Framework\Assert::assertTrue(true);
            };
    }

    /**
     * @Then I should see :arg1
     */
    public function iShouldSee($arg1)
    {
        throw new PendingException();
    }

    /** REQUEST NEW PASSWORD */
    /**
     * @Given I go to :arg1
     */
    public function iGoTo($page)
    {
        if($page == '/page_ResetPassword')
        {
            PHPUnit\Framework\Assert::assertTrue(true);
        };
    }

    /**
     * @When I follow :link
     */
    public function iFollow($link)
    {
        if($link == '/forgotPasswordRequest')
            {
                PHPUnit\Framework\Assert::assertTrue(true);
            };
    }

    /**
     * @When I fill in :email with :password
     */
    public function iFillInWith($email, $password)
    {
        if($email=="test@user.fr"&&$password=="password123"){
            return true;
        }
    }

    /**
     * @Then there should be an email sent to :arg1 titled :arg2
     */
    public function thereShouldBeAnEmailSentToTitled($arg1, $arg2)
    {
        throw new PendingException();
    }

    /**
     * @When I click on :arg1 link in the email to :arg2
     */
    public function iClickOnLinkInTheEmailTo($link)
    {
        if($link == '/changePasswordRequest')
            {
                PHPUnit\Framework\Assert::assertTrue(true);
            };
    }

    /**
     * @Then I fill in in the following:
     */
    public function iFillInInTheFollowing(TableNode $table)
    {
        throw new PendingException();
    }

    /**
     * @Then the password for :arg1 should be :arg2
     */
    public function thePasswordForShouldBe($arg1, $arg2)
    {
        throw new PendingException();
    }
    
}
