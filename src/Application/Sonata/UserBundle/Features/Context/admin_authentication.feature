Feature: Admin Authentication
  In order to verify admin side of
  a website is safe, I need to try authenticate
# Use @javascript for browser realtime emulation
  @javascript
Scenario: Authenticate with valid information, check if its protected before authentication
  Given I am on "/admin/dashboard"
  Then I should see "Имя пользователя"
    And I should see "Пароль"
    When I fill in "username" with "admin"
    And  I fill in "password" with "password"
    And I press "_submit"
    Then I should be on "/admin/dashboard"