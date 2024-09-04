<?php

$nome = '';
$sexo = '';
$senha = '';
$comentario = '';
$etapa = 1;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  if (isset($_POST['nome']) && isset($_POST['sexo'])) {
    $nome = $_POST['nome'];
    $sexo = $_POST['sexo'];
    $etapa = 2;
  }
  elseif (isset($_POST['senha']) && isset($_POST['comentario'])) {
    $nome = $_POST['nome'];
    $sexo = $_POST['sexo'];
    $senha = $_POST['senha'];
    $comentario = $_POST['comentario'];
    $etapa = 3;
  }
}

if ($etapa == 1) {
  ?>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <label for="nome">Nome:</label>
    <input type="text" id="nome" name="nome" required><br><br>
    <label for="sexo">Sexo:</label>
    <input type="radio" id="masculino" name="sexo" value="masculino">
    <label for="masculino">Masculino</label>
    <input type="radio" id="feminino" name="sexo" value="feminino">
    <label for="feminino">Feminino</label><br><br>
    <input type="submit" value="Próximo">
  </form>
  <?php
} elseif ($etapa == 2) {

  ?>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <input type="hidden" name="nome" value="<?php echo $nome; ?>">
    <input type="hidden" name="sexo" value="<?php echo $sexo; ?>">
    <label for="senha">Senha:</label>
    <input type="password" id="senha" name="senha" required minlength="5"><br><br>
    <label for="comentario">Comentário:</label>
    <textarea id="comentario" name="comentario" cols="30" rows="6"></textarea><br><br>
    <input type="submit" value="Finalizar">
  </form>
  <?php
} elseif ($etapa == 3) {
 
  ?>
  <h2>Dados do Cadastro</h2>
  <p>Nome: <?php echo $nome; ?></p>
  <p>Sexo: <?php echo $sexo; ?></p>
  <p>Senha: <?php echo $senha; ?></p>
  <p>Comentário: <?php echo $comentario; ?></p>
  <?php
}
?>

