Feature: tests import données
    If the user account have account type of "Administrateur" or "Gestionnaire"
    they can import an excel file describing the formation they want to add to the database
    The file needs to follow the Lhéo format
    and to only have the data regarding one formation on one table

    Scenario Outline: File import
        Given The user is an <userRole>
        And The file they are providing is of the type <fileType>
        And The data <dataOk> formated
        When The user click the "Import data" button
        Then The formation is created

        Examples:
        | userRole | fileType | dataOk |
        | "Administrateur"  | "xls"  | "properly"  |
        | "Gestionnaire"  | "xls"  | "properly"  |
        | "Partenaire"  | "txt"  | "properly"  |
        | "Partenaire"  | "xls"  | "properly"  |
        | "Gestionnaire"  | "txt"  | "properly"  |
        | "Gestionnaire"  | "xls"  | "badly"  |