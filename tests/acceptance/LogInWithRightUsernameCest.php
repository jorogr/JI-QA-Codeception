<?php 

class LogInWithRightUsernameCest
{
    public function _before(AcceptanceTester $I)
    {
        # Ensure the navigation to the right page and wait
        # to load most of the page
        $I->amOnPage('/en/login');
        $I->waitForElement('#userIdentifier', 10);
    }

    // tests
    public function LogInWithRightUsername(AcceptanceTester $I)
    {
	# Try to input a valid username
	# which should be a valid one
	$I->fillField('userIdentifier', 'joro.gr@gmail.com');
	$I->click('Log in');

	# Check and verify whether the next step is reached
	$I->waitForElement('.login-methods-container', 10);
	$I->amOnPage('auth-methods/');
    }
}
