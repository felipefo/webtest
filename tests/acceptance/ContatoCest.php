
<?php
class ContatoCest
{
    public function verificarTelefoneReitoria(AcceptanceTester $I)
    {
        $I->amOnPage('https://ifes.edu.br/');
        $I->click('Contato');
        $I->waitForElementVisible('.elementor-widget-container .elementor-accordion-item');
        $I->click('.elementor-widget-container .elementor-accordion-item');
        $I->waitForElementVisible('.elementor-widget-container .elementor-accordion-item-content');
        $telefone = $I->grabTextFrom('.elementor-widget-container .elementor-accordion-item-content .recepcao .telefone');
        $I->assertNotEmpty($telefone);
    }
}
