Feature: Authenticated Navigation
  In order to navigate the authenticated website
  As a logged in user
  Something something

  Scenario: Attempting to visit the settings link whilst logged in should take me to the settings page
    Given I am logged in as "me@g403.co" with password "somepassword"
    When I follow "Settings"
    Then I should be on "/settings.php"
      And the "title" element should contain "Settings"

  Scenario: Attempting to visit the user admin link whilst logged in should take me to the user admin page
    Given I am logged in as "me@g403.co" with password "somepassword"
    When I follow "User Admin"
    Then I should be on "/users.php"
      And the "title" element should contain "Users"



  Scenario: Navigation should contain User Admin link when authenticated as admin
    Given I am logged in as "me@g403.co" with password "somepassword"
    Then I should see "User Admin"

  Scenario: Attempting to visit the user admin page directly whilst logged in should take me to the user admin page
    Given I am logged in as "me@g403.co" with password "somepassword"
    When I go to "/users.php"
    Then I should be on "/users.php"
      And the "title" element should contain "Users"



  Scenario: Navigation should not contain User Admin link when authenticated as admin
    Given I am logged in as "mu@g403.co" with password "somepassword"
    Then I should not see "User Admin"

  Scenario: Attempting to visit the user admin page directly whilst logged in should redirect and error
    Given I am logged in as "mu@g403.co" with password "somepassword"
    When I go to "/users.php"
    Then I should be on "/dashboard.php"
      And I should see "Not authorised"

