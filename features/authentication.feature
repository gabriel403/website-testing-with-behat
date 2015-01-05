Feature: Authentication
  In order to access the website
  As a user
  I need to be able to login

  Rules:
  - Email and Password required
  - Email and Password should be known to the system

  Scenario: Attempting to login with correct details should redirect me to the dashboard
    Given I am on "/"
    When I fill in "email" with "me@g403.co"
      And I fill in "password" with "somepassword"
      And I press "Login"
    Then I should be on "/dashboard.php"
      And I should see "Log out"
