<?php
//verificar se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
  //Obtém os valores enviados pelo formulário
  $pergunta = $_POST["pergunta"];
  $respostaA = $_POST["resposta_a"];
  $respostaB = $_POST["resposta_b"];
  $respostaC = $_POST["resposta_c"];
  $respostaD = $_POST["resposta_d"];
  $respostaCorreta = $_POST["resposta_correta"];

  // Monta a string com os dados
  $dados = "Pergunta: " . $pergunta . "\n";
  $dados .= "a) " . $respostaA . "\n";
  $dados .= "b) " . $respostaB . "\n";
  $dados .= "c) " . $respostaC . "\n";
  $dados .= "d) " . $respostaD . "\n";
  $dados .= "Resposta correta: " . $respostaCorreta . "\n";

  // Salva os dados no arquivo
  file_put_contents("perguntas_multipla_escolha.txt", $dados, FILE_APPEND);

  header("Location: index.html");
  exit;
}
?>
