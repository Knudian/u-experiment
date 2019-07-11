Feature: User register
     to sign up, the user needs to supply :
    - login: in the form of his email adress
    - password: of his choosing and complex
        - >= 8 characters
        - at least a complex character
    - etablissement: the siret number of the organisation they are representing

    Scenario Outline: user register
        Given The user provide the login <userLogin>
        And The user provide the password <password>
        And The user provide the siret <siret>
        When The user click the "Register" button
        Then The User is created

        Examples:
        | userLogin             | password              | siret         |
        | "john.doe@gmail.com"  | "somethingSomething"  | "0102030405"  |
        | "John.doe"            | "somethingSomething"  | "0102030405"  |
        | "john.doe@gmail.com"  | "short"               | "0102030405"  |
        | "john.doe@gmail.com"  | "somethinSomething"   | "010203"      |