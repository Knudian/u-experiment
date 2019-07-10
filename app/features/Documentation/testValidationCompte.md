# Validation de Compte

Lorsque qu'un utilisateur d'enregistre sur la plateforme, en fonction de l'adresse email utlisée lors de la création de son compte, celui ci vas être automatiquement validé si le domaine auquel l'adresse email est relié et présent dans une liste de domaine authorisé par l'administrateur.

## Test

### Scenario

Le scenario prend en parametre l'adresse email entré par l'utilisateur, puis simule le fais que l'utilisateur valide son entrée, et enfin valide le compte utilisateur si le domaine utilisé par l'adresse est présent dans la liste de domaines fournis a l'initilisation du test. 

```Gherkin
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
```

### Code

La fonction ```isPartOfTheAuthorizedDomains($domain)``` viens ajouter pour chaque test lancer les domaines de test qu'on lui fournis dans le background du scenario.

La fonction ```theEmailAdressProvidedByTheUserIs($email)``` viens valider que l'utilisateur a bien rentrer une adresse email dans le champ adrese email de son inscription.

La fonction ```theUserClickTheButton($button)``` vient simuler le fait que l'utilisateur valide son inscription and appuyant sur le bon bouton.

La fonction ```theUserAccountIsValidatedIfComputeToARecognizedDomain($email)``` réupère l'adresse email utilisée par l'utilisateur, identifie le domaine utilisé et vient vérifier si ce domaine fais partis de la liste de domaine autorisée que l'on as créer a l'instanciation du test. 