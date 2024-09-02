<!DOCTYPE html>
<html>
<head>
<title>Informativo via correio convencional</title>
</head>
<body>

<h1>Informativo via correio convencional</h1>

<p>Obs.: É obrigatório o preenchimento de todos os campos.</p>

<form method="post" action="process.php">

  <label for="nome">Nome:</label>
  <input type="text" id="nome" name="nome" required><br><br>

  <label for="email">E-mail:</label>
  <input type="email" id="email" name="email" required><br><br>

  <label for="senha">Senha:</label>
  <input type="password" id="senha" name="senha" required><br><br>

  <label for="estado">Estado:</label>
  <select id="estado" name="estado" required>
    <option value="RS">RS</option>
    </select><br><br>

  <textarea name="sugestao" placeholder="Envie pra gente sua sugestão ou crítica sobre o site"></textarea><br><br>

  <h3>Marque o(s) laboratório(s) que você deseja receber informações:</h3>

  <input type="checkbox" id="lafes" name="laboratorios[]" value="LAFES">
  <label for="lafes">Laboratório de Ferramentas para Desenvolvimento de Sistemas - LAFES</label><br>

  <input type="checkbox" id="lgr" name="laboratorios[]" value="LGR">
  <label for="lgr">Laboratório de Gestão de Redes - LGR</label><br>

  <input type="checkbox" id="lis" name="laboratorios[]" value="LIS">
  <label for="lis">Laboratório de Integração de Sistemas - LIS</label><br>

  <input type="checkbox" id="lqs" name="laboratorios[]" value="LQS">
  <label for="lqs">Laboratório de Qualidade de Software - LQS</label><br><br>

  <h3>Você aceita receber outras informações sobre cursos de extensão da Unisinos?</h3>
  <input type="radio" id="sim" name="extensao" value="sim">
  <label for="sim">Sim</label>
  <input type="radio" id="nao" name="extensao" value="nao">
  <label for="nao">Não</label><br><br>

  <input type="submit" value="Enviar os dados acima">
  <input type="reset" value="Limpar">

</form>

</body>
</html>