
<?php
class ContatoCest
{
    public function verificarTelefoneReitoria(AcceptanceTester $I)
    {
        $I->amOnPage('https://ifes.edu.br/contato');
		$I->see('Gabinete do Reitor');
		$I->see('3357-7500');

    }
}
