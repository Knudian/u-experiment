Feature: lost password
    In order to reset my password
    As a user
    I need to be able to request a password reset

Scenario Outline: 
    Given the email adress provided by the user is <email>
    And the <password> is correct 
    When the user click the "login" button
    Then the user is logged
    Examples:
    | email            | password    |
    | "test@user.com"  | "pass123"   |
    
Scenario: Log in with bad credentials
    Given I am on "/login"
    When I fill in "user" with "test@user.com"
    And I fill in "password" with "password123"
    And I press "Login"
    Then I should be on "/login"
    And I should see "Login incorrect"

Scenario: Request a password reset
    Given I go to "/page_ResetPassword"
    When I follow "/forgotPasswordRequest"
    When I fill in "user" with "test@user.com"
    And I fill in "password" with "password123"
    #And I fill in the following:
    #| email         |
    #| test@user.com |
    Then I should see "Envoi du nouveau mot de passe à 'test@user.com'"
    And there should be an email sent to "test@user.com" titled "Reset du mot de passe"

Scenario: Reset password
    When I click on "/changePasswordRequest" link in the email to "test@user.com"
    Then I should see "Nouveau mot de passe: "
    When I fill in "new_password" with "password123"
    And I fill in "confirm_password" with "password123"
    Then the password for "test@user.com" should be "password123"
