

<?php
$I = new AcceptanceTester($scenario);
$I->wantTo('Verificar se o título da página está correto');
$I->amOnPage('www.ifes.edu.br');
$I->see('Título da página');
