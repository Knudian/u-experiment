Feature: consult training on catalogue

Scenario: 
    # Voir les formations
    Given I go on "/trainingcatalogue"
    And I press "Consulter les formations" button
    Then I see all training