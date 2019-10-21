<?php 

class ChangeLanguageCest
{
    public function _before(AcceptanceTester $I)
    {
	# Navigate to page and wait to load
	$I->amOnPage('/login');
	$I->waitForElementVisible('#react-language-list-container', 10);
        $I->seeInCurrentUrl('/en/login');
    }

    // tests
    public function ChangeLanguage(AcceptanceTester $I)
    {
	# Change to bulgarian and verify the new content
	$I->click('български');
	$I->seeInCurrentUrl('/bg/login');
	$I->see('ВХОД');
    }
}
