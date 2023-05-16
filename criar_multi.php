<!DOCTYPE html>
<html>
<head>
    <title>Criar Perguntas e Respostas de Múltipla escolha</title>
</head>
<body>

  <h1>Criar Perguntas e Respostas de Múltipla escolha</h1>

  <form action="salvar_multi.php" method="POST">
    
    <label for="pergunta">Pergunta:</label>
    <input type="text" name="pergunta" id="pergunta" required>
    
    <br><br>
  
  <label for="resposta_a">
    a) <input type="text" name="resposta_a" id="resposta_a" required>
  </label><br>
  
  <label for="resposta_b">
    b) <input type="text" name="resposta_b" id="resposta_b" required>
  </label><br>
  
  <label for="resposta_c">
    c) <input type="text" name="resposta_c" id="resposta_c" required>
  </label><br>

  <label for="resposta_d">
    d) <input type="text" name="resposta_d" id="resposta_d" required>
  </label><br>

  <label for="resposta_correta">
    Resposta correta: <input type="text" name="resposta_correta" id="resposta_correta" required>
  </label>

    <br>
  <input type="submit" value="Enviar">
</form>



</body>
</html>
