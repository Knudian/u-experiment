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