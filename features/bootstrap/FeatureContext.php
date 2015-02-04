<?php

use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use Behat\MinkExtension\Context\MinkContext;
use Behat\Testwork\Tester\Result\TestResult;

/**
 * Defines application features from the specific context.
 */
class FeatureContext extends MinkContext implements SnippetAcceptingContext
{
    /**
     * @Given I am logged in as ":email" with password ":password"
     */
    public function iAmLoggedInAsWithPassword($email, $password)
    {
        $this->visitPath("/");
        $this->fillField("email", $email);
        $this->fillField("password", $password);
        $this->pressButton("Login");
        $this->assertPageAddress("/dashboard.php");
        $this->assertPageContainsText("Log out");
    }

    /**
     * @AfterStep
     */
    public function afterStep($afterStepScope)
    {
        if ($this->getMinkParameter('browser_name') == 'phantomjs' && $afterStepScope->getTestResult()->getResultCode() === TestResult::FAILED) {
            if (!file_exists('behatscreenshots')) {
                mkdir('behatscreenshots', 0777, true);
            }

            file_put_contents("behatscreenshots/screen_".time().".png", $this->getSession()->getDriver()->getScreenshot(), FILE_APPEND);
            $this->printCurrentUrl();
        }
    }
}
