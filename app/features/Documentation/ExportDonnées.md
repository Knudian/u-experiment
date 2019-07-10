# Export de données

Après qu'un utilisateur ai effectuer une recherche de formation en utilisant la plateforme, si celui-ci est connecter a un compte validé, l'utilisateur a la possiblité de télécharger une fiche de formation, ou une collection de fiche de formations, en format XML ou JSON.

## Test

### Scenario

```Gherkin
Feature: tests exports xml and json files
    Once a user has searched the database for formations, 
    As a connected user, 
    I have the possbility to export and download my searches as xml or json files.

    Scenario Outline: Export of data
        Given The selected format to export the data in is <dataType>
        And the user is <userIs> 
        When The user click the "Export data" button
        Then The file in <dataType> is downloaded

        Examples:
            | userIs          | dataType  |
            | "connected"     | "JSON"      |
            | "connected"     | "XML"       |
            | "not connected" | "JSON"      |
            | "not connected" | "XML"       |
```

En fonction du statut de connection de l'utilisateur et du type de donnée que celui veut exporter, le scenario simule la demande d'export par l'utilisateur des données demandés et simule le télécharger des fichiers demandés.

### Code

La fonction ```testDataType()``` prend en parametre le type de données demandées par l'utilisateur et vérifier quelles font parties des types authorisés (variations sur JSON et XML).

La ```theSelectedFormatToExportTheDataInIs()``` fais appel a ```testDataType()```, comme la fonction ```theFileInIsDownloaded()```

La fonction ```theUserIs($connected)``` vérifie si l'utilisateur est connecté, afin de s'assurer qu'il ai l'autorisation d'effectuer l'export.

La fonction ```theUserClickTheButton($button)``` simule l'intraction de l'utilisateur sur le boutton export.