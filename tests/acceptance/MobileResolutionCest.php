<?php 

class MobileResolutionCest
{
    public function _before(AcceptanceTester $I)
    {
	# Ensure the navigation to the right page and wait
	# to load most of the page in Desktop resolution
	$I->amOnPage('/en/login');
	$I->resizeWindow(1280, 800);
	$I->waitForElement('.authentication-sidebar', 10);
    }

    public function _after(AcceptanceTester $I)
    {
	# Try to go back to Desktop resolution
        $I->resizeWindow(1280, 800);
        $I->waitForElement('.authentication-sidebar', 10);
        $I->canSeeElement('.authentication-sidebar');
    }

    // tests
    public function mobileResolution(AcceptanceTester $I)
    {
	# Verify Desktop resolution
	$I->seeElement('.authentication-sidebar');

	# Test the borders just 1px below the min width
	$I->resizeWindow(1119, 800);
	$I->cantSeeElement('.authentication-sidebar');

	# Try iPhone 6,7,8 resolution
	$I->resizeWindow(375, 667);
	$I->cantSeeElement('.authentication-sidebar');
    }
}
