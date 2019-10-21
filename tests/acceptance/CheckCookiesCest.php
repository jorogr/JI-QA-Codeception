<?php 

class CheckCookiesCest
{
    public function _before(AcceptanceTester $I)
    {
	# Navigate to page and wait to load
	$I->amOnPage('/en/login');
        $I->waitForElement('#react-language-list-container', 10);
    }

    // tests
    public function CheckCookies(AcceptanceTester $I)
    {
	# Check the general and most common cookies
	$I->seeCookie('PHPSESSID');
	$I->seeCookie('XSRF-TOKEN');
	$I->seeCookie('my_language');
    }
}
