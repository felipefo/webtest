# Testes para Sistemas Web
Repository for demonstrate how to use codecept with chatgpt for building automatic user interfaces tests. 

# Plano de testes Manuais

[test_case.md]

# Utilizando o chatgpt para gerar o projeto de TESTE


Crei o codigo do caso de teste no codectp em php que execute teste os seguintes passos:

1)Acesse a url 
2)https://ifes.edu.br/			
3)Clique no link "contato"			
4)0Expandir o item "Reitoria"			
5)Verifique se existe um telefone no item Recepção "Gabinete do Reitor"	

''''
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

