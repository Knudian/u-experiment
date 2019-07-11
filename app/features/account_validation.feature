Feature: tests for account validation
    Account which the email adress belong to a domain appearing on a list of autorised partners. 
    The account that do not appear to be in the list will be reviewed by the administrator.

    Background:
        Given "gmail.com" is part of the authorized domains
        And "thing.fr" is part of the authorized domains

    Scenario Outline: Email validation
        Given The email adress provided by the user is <email> 
        When The user click the "register" button
        Then The user account is validated if <email> compute to a recognized domain

        Examples:
            | email             |
            | "x@gmail.com"     |
            | "some.thing.fr"   |
            | "y@imie.fr"       |