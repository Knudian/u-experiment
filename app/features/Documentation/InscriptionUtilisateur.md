# Import de données

Si le rôle de l'utilisateur est "Gestionnaire" ou "Administrateur", il à la possibilité d'importer un fichier excel décrivant une nouvelle formation a ajouter a la base de données.

## Test

### Scenario

```Gherkin
Feature: tests import données
    If the user account have account type of "Administrateur" or "Gestionnaire"
    they can import an excel file describing the formation they want to add to the database
    The file needs to follow the Lhéo format
    and to only have the data regarding one formation on one table

    Scenario Outline: File import
        Given The user is an <userRole>
        And The file they are providing is of the type <fileType>
        And The data <dataOk> formatted
        When The user click the "Import data" button
        Then The formation is created

        Examples:
        | userRole | fileType | dataOk |
        | "Administrateur"  | "xls"  | "properly"  |
        | "Gestionnaire"    | "xls"  | "properly"  |
        | "Partenaire"      | "txt"  | "badly"     |
        | "Partenaire"      | "xls"  | "properly"  |
        | "Gestionnaire"    | "txt"  | "properly"  |
        | "Gestionnaire"    | "xls"  | "badly"     |
```

En fonction du type de rôle de l'utilisateur, du type de fichier étant envoyé et le type de formatage de données, le scenario simule la demande d'import de données, vérifie le fichier et la qualité de celui ci, puis intègre la formation a la base de données.

### Code

La fonction ```theUserIsAn($userRole)``` vérifie que l'utilisateur possède bien le droit d'importer une formation, qu'ils sont donc au moins gestionnaires.

La fonction ```theFileTheyAreProvidingIsOfTheType($typeFile)``` assure que le type du fichier est bien un fichier excel.

La fonction ```theDataFormated($dataOk)``` vérifie la qualité des données envoyées par l'utilisateur dans le fichier fournis et assure quelles sont conforme au format Lhéo.

La formation ```theUserClickTheButton($button)``` Simule l'intéraction de l'utilisateur avec l'UI et représente l'envois du fichier vers le serveur.

La fonction ```theFormationIsCreated()``` simule l'ajout de la formation a la base de données. Elle retourne toujours vrai car elle n'est accésible seulement si les données rentrée dans le fichier sont conformes au format Lhéo.