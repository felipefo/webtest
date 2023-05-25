
<?php
class ContatoCest
{
    public function verificarTelefoneReitoria(AcceptanceTester $I)
    {
       	$I->amOnPage('www.google.com');
		$I->fillField('q', 'FELIPE FRECHIANI DE OLIVEIRA');
		$I->amOnPage('/search');
		$I->click('Felipe Frechiani de Oliveira - Nemo - Ufesufes.brhttps://nemo.inf.ufes.br › equipe › felipe-oliveira');
		$I->seeCurrentURLEquals('/equipe/felipe-oliveira/');

    }
}
