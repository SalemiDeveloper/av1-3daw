<?php
// Verificando se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
  // Obtendo os valores enviados pelo formulário
  $pergunta = $_POST["pergunta"];
  $respostaCorreta = $_POST["resposta_texto_correta"];
  
  // Montando a string com os dados
  $dados = "Pergunta: " . $pergunta . "\n";
  $dados .= "Resposta correta: " . $respostaCorreta . "\n";
  
  // Salvando os dados no arquivo
  file_put_contents("perguntas_texto.txt", $dados, FILE_APPEND);

  header("Location: index.html");
  exit;
}
?>
