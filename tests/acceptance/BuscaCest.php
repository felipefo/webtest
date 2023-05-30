<?php


namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class BuscaCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function buscarResultadosNaPaginaTest(AcceptanceTester $I)
    {
		$I->amOnPage('http://ifes.edu.br');
		$I->fillField('searchword', 'edital');
		$I->click('Buscar');
		$I->see('resultados encontrados');
    }
}
