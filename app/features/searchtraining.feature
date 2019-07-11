Feature: Search training on catalogue

Scenario: 
    # Rechercher des formations
    Given I go on "/trainingcatalogue"
    And I press "Rechercher une formation" button
    Then I see all training

Scenario: 
    # Rechercher des formations avec des critères
    Given I go on "/trainingcatalogue"
    When I select filters
    And I press "Rechercher" button
    Then I see all training matching with these filterss