#language: pt

Funcionalidade: Cadastro de formacao
    Eu, como instrutor
    Quero cadastrar formacoes
    Para organizar meus cursos

    Regra:
    - Formacao precisa ter uma descricao
    - Descricao precisa ter pelo menos 2 palavras

    Cenario: Cadastro de formacao com 1 palavra
        Quando eu criar uma formacao com 1 palavra
        Entao eu vou ver a seguinte mensagem de erro "Descrição precisa ter pelo menos duas palavras"
    
    Cenario: Cadastro de formacao valida deve salvar no banco
        Dado que estou conectado em um banco de dados
        Quando tento criar uma nova formacao valida
        Entao eu busco no banco, devo encontro essa formacao
    