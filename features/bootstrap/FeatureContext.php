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

    #[When('eu criar uma formacao com a palavra :formacao')]
    public function euCriarUmaFormacaoComApenasPalavra(string $formacao): void
    {
        throw new PendingException();
    }

    #[Then('eu vou ver a seguinte mensagem de erro :mensagemErro')]
    public function euVouVerASeguinteMensagemDeErro(string $mensagemErro): void
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

    #[Then('se eu buscar no banco, devo encontrar essa formacao')]
    public function seEuBuscarNoBancoDevoEncontrarEssaFormacao(): void
    {
        throw new PendingException();
    }
}
