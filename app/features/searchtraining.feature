Feature: Search training on catalogue

Scenario: 
    # Rechercher des formations
    Given I go on "/trainingcatalogue"
    And I press "Rechercher une formation" button
    Then I see all training