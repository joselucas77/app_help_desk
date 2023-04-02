<?php 
session_start();
// -Como cada linha do arquivo é uma entrada (um chamado), você podera deletar um chamado ao deletar uma linha.

// -Para isso voce precisará:

// -Obter acesso de escrita ao arquivo,
$arquivo = fopen("../../app_help_desk/arquivo.txt", "a");

// -Conseguir distinguir cada linha e poder acessá-las de dentro do seu código

// -Criar uma função que apague o conteúdo de uma linha
function apagarLinha() {
    // echo 'oi';
}

// apagarLinha();

// -Receber qual linha deverá ser apagada do arquivo

// -Apagar essa linha por completo (nao deixe uma linha em branco pois pode acabar reconhecendo como sendo uma entrada vazia o que pode ocasionar erros. A linha tem que sumir por completo, é a parte mais dificil do desafio)

// -Salvar e sobreescrever o arquivo com a linha deletada


fclose($arquivo);

?>