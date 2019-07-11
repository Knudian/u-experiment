Feature: Test for adding the domains
    In order to add domains to the authorized list
    As an Administrateur
    So that the users using using email adress belonging to those domains are automatically validated

    Background: 
        Given "gmail.com" is part of the authorized domains

    Scenario Outline: account authorization
        Given The domain the user wants to add is <domain>
        When The user click the "Add domain" button
        Then The <domain> is added to the list

        Examples:
            | domain      |
            | "gmail.com" |
            | "thi@ng.fr" |
            | "imie.fr"   |