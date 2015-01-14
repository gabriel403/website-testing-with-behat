Feature: Footer Navigation
  In order to navigate the website
  As a guest
  Something something

  Scenario: Attempting to visit the faq link should take me to the faq page
    Given I am on "/"
    When I follow "FAQ"
    Then I should be on "/faq.php"
      And the "title" element should contain "FAQ"

  Scenario: Attempting to visit the legal link should take me to the legal page
    Given I am on "/"
    When I follow "legal"
    Then I should be on "/legal.php"
      And the "title" element should contain "legal"

