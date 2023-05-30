# Repositorio de teste local
A branch de nome "test_local" tem os testes do codecept para rodar localmente 

# Repositorio no github ations 

A branch de nome "test_com_gitactions" roda o teste no git hub actions


# Exemplo de teste automatizado

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
		$I->amOnPage('/');
		$I->fillField('searchword', 'edital');
		$I->click('Buscar');
		$I->see('resultados encontrados');
    }
}

