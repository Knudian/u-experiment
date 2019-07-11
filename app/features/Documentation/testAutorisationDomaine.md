# Autorisation domaine

Afin que le compte des utilisateurs s'enregistrant sur la plateforme soit automatiquement validé si l'adresse qu'ils ont utilisés fais partie d'une liste préremplie, l'administrateur de la plateforme doit avoir la possibilité d'ajouté des domaines a cette liste.

## Test

### Scenario

Le scenario prend en paramètre le domaine entré par l'administrateur voulant ajouté le domaine à la liste, simule la validation de l'utilisateur, vérifie si le domaine est déjà dans la liste et si il correspond bien a un domaine, puis ajoute ce domaine a la liste.

```Gherkin
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
```

### Code

La fonction ```addDomain($domain)``` est utilisé pour ajouté le domaine passé en paramètre a la liste généré à l'instanciation du test.

La fonction ```isPartOfTheAuthorizedDomains($domain)``` est utilisé pour appeller la fonction ```addDomain()``` a l'instanciation de chaque test.

La fonction ```theDomainTheUserWantsToAddIs($domain)``` vient vérifier si le domaine entrer ne fais pas déjà partis de la liste généré, puis vérifier si le domaine correspond a un domaine valide.

La fonction ```theUserClickTheButton($button)``` simule la validation du formulaire d'ajout par l'utilisateur.

La fonction ```theIsAddedToTheList($domain)``` vient appeler la fonction ```addDomain()``` une fois les précédent test passés.