<?php 

class LogInWithWrongUsernameCest
{
    public function _before(AcceptanceTester $I)
    {
        # Ensure the navigation to the right page and wait
        # to load most of the page
        $I->amOnPage('/en/login');
        $I->waitForElement('#userIdentifier', 10);
    }

    // tests
    public function LogInWithWrongUsername(AcceptanceTester $I)
    {
	# Try to input '*' as username
	# which could never be a valid one
	$I->fillField('userIdentifier', '*');

	# Try log in with click of the button
	$I->click('Log in');
	$I->waitForElement('.alert-danger', 10);
	$I->see('The specified user could not be found');
    }
}
