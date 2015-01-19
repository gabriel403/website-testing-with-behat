Feature: Authenticated Navigation
  In order to navigate the authenticated website
  As a logged in user
  Something something

  Scenario: Attempting to visit the settings link whilst logged in should take me to the settings page
    Given I am on "/"
    When I fill in "email" with "me@g403.co"
      And I fill in "password" with "somepassword"
      And I press "Login"
    Then I should be on "/dashboard.php"
      And I should see "Log out"
    When I follow "Settings"
    Then I should be on "/settings.php"
      And the "title" element should contain "Settings"

  Scenario: Attempting to visit the user admin link whilst logged in should take me to the user admin page
    Given I am on "/"
    When I fill in "email" with "me@g403.co"
      And I fill in "password" with "somepassword"
      And I press "Login"
    Then I should be on "/dashboard.php"
      And I should see "Log out"
    When I follow "User Admin"
    Then I should be on "/users.php"
      And the "title" element should contain "Users"

