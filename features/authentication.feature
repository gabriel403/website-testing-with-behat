Feature: Authentication
  In order to access the website
  As a user
  I need to be able to login

  Rules:
  - Email and Password required
  - Email and Password should be known to the system

  Scenario: Attempting to login with correct details should redirect me to the dashboard
    Given I am on "/"
    When I press "Login"
      And I fill in "email" with "me@g403.co"
      And I fill in "password" with "somepassword"
      And I press "Login"
    Then I should be on "/dashboard.php"
      And I should see "Log out"

  Scenario: Attempting to login with in-correct password should show an error
    Given I am on "/"
    When I press "Login"
      And I fill in "email" with "me@g403.co"
      And I fill in "password" with "notapassword"
      And I press "Login"
    Then I should be on "/"
      And I should see "Invalid authentication details"

  Scenario: Attempting to login with no details should show an error
    Given I am on "/"
    When I press "Login"
      And I press "Login"
    Then I should be on "/"
      And I should see "email or password not set"

  Scenario: Attempting to visit dashboard without logging in should redirect and show error
    Given I am on "/"
    When I go to "/dashboard.php"
    Then I should be on "/"
      And I should see "You need to login fool"

