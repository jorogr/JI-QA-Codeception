<?php

class OpenPageCest
{
    public function _before(AcceptanceTester $I)
    {
	# Navigate to page and wait to load
	$I->amOnPage('login');
        $I->waitForElement('#userIdentifier', 10);
    }

    // tests
    public function successfullyOpenPage(AcceptanceTester $I)
    {
	# Verify components are loaded and visible
	$I->see('LOG IN');
	$I->seeElement('//img[@src="/assets/image/logo/logo.svg"]');
	$I->dontSeeElement('div', ['class' => 'alert']);
	$I->seeInTitle('Log in to your account - Paysera');
	$I->seeInField('#userIdentifier','');
    }
}
