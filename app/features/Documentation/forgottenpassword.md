# Mot de passe oublié / Demande de nouveau mot de passe



## Test

### Scenario

```Gherkin
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
```

Lorsque l'utilisateur essaie de se connecter et que son identifiant (email "test@user.com) et son mot de passe ("pass123") sont corrects, 
l'authentification est réussie. 

### Code

La fonction ```theEmailAdressProvidedByTheUserIs``` permet de vérifier l'identifiant de l'utilisateur est bien en format email.

La fonction ```theIsCorrect``` permet de vérifier que le mot de passe du compte "test@user.fr" est "pass123".

La fonction ```theUserClickTheButton``` simule la connexion avec l'UI. 

La fonction ```theEmailAdressProvidedByTheUserIs``` permet de diriger l'utilisateur vers la page principale une fois l'authentification est réussie. Sinon il affiche une erreur. 


