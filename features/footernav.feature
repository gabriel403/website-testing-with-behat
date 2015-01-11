Feature: Footer Navigation
  In order to navigate the website
  As a guest
  Something something

  Rules:
  - Email and Password required
  - Email and Password should be known to the system

  Scenario: Attempting to visit the faq link should take me to the faq page
    Given I am on "/"
    When I follow "FAQ"
    Then I should be on "/faq.php"
      And I should see "FAQ"

  Scenario: Attempting to visit the legal link should take me to the legal page
    Given I am on "/"
    When I follow "legal"
    Then I should be on "/legal.php"
      And I should see "FAQ"

