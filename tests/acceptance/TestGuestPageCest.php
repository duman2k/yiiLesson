<?php 

class TestGuestPageCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // pages
    // open the home,join,login pages
    public function tryToTest(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $I->see('Video School', 'h1');

        $I->seeLink('Join', '/site/join');
        $I->seeLink('Login', '/site/login');

        $I->amOnPage('/site/join');
        $I->see('Join us', 'h1');

        $I->amOnPage('/site/login');
        $I->see('Log in', 'h1');
    }
}
