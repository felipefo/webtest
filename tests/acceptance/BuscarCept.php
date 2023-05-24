

<?php
$I = new AcceptanceTester($scenario);
$I->wantTo('Verificar se o título da página está correto');
$I->amOnPage('/');
$I->see('Título da página');
