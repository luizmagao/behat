<?php

use Behat\Step\Given;
use Behat\Step\Then;
use Behat\Step\When;
use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;

/**
 * Defines application features from the specific context.
 */
class FeatureContext implements Context
{
    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
    }

    #[When('eu criar uma formacao com :arg1 palavra')]
    public function euCriarUmaFormacaoComPalavra($arg1): void
    {
        throw new PendingException();
    }

    #[Then('eu vou ver a seguinte mensagem de erro :arg1')]
    public function euVouVerASeguinteMensagemDeErro($arg1): void
    {
        throw new PendingException();
    }

    #[Given('que estou conectado em um banco de dados')]
    public function queEstouConectadoEmUmBancoDeDados(): void
    {
        throw new PendingException();
    }

    #[When('tento criar uma nova formacao valida')]
    public function tentoCriarUmaNovaFormacaoValida(): void
    {
        throw new PendingException();
    }

    #[Then('eu busco no banco, devo encontro essa formacao')]
    public function euBuscoNoBancoDevoEncontroEssaFormacao(): void
    {
        throw new PendingException();
    }
}
