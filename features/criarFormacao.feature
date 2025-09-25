# language: pt

Funcionalidade: Cadastrar funcoes
    Eu, como instrutor
    Quero cadastrar formacoes
    Para organizar meus cursos

    Regras:
    - Formacao precisa ter uma descricao
    - Descricao precisa pelo menos ter 2 palavras

    Cenario: Cadastro de formacao com 1 palavra
        Quando eu criar uma formacao com a palavra "ADS"
        Entao eu vou ver a seguinte mensagem de erro "Descrição precisa pelo menos ter duas palavras"
    
    Cenario: Cadastro de formacao valida deve salvar no banco
        Dado que estou conectado em um banco de dados
        Quando tento criar uma nova formacao valida
        Entao se eu buscar no banco, devo encontrar essa formacao
