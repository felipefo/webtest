
<?php
class ContatoCest
{
    public function verificarTelefoneReitoria(AcceptanceTester $I)
    {
        $I->amOnPage('https://ifes.edu.br/');
        $I->click('Contato');
		//$I->seeCurrentURLEquals('/contato');
		$I->wait(30);
		$I->see('Recepção Gabinete do Reitor');
		$I->see('3357-7500');
		
        //$I->waitForElement('.elementor-widget-container .elementor-accordion-item');
        //$I->click('.elementor-widget-container .elementor-accordion-item');
        //$I->waitForElement('.elementor-widget-container .elementor-accordion-item-content' ,30);
        //$telefone = $I->grabTextFrom('.elementor-widget-container .elementor-accordion-item-content .recepcao .telefone');
        //$I->assertNotEmpty($telefone);
    }
}
