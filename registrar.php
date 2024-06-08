<?php
require_once('bootstrap.php');
?>

<!DOCTYPE html>
<html>
<head>
    <title>Registrar PHP</title>
</head>
<body>
    <h2>Login</h2>
    <form action="" method="POST">
        Nome completo
        <input name="nome" type="text" placeholder="Ex: André Silva" required><br>
        E-mail
        <input name="email" type="email" placeholder="Email (o mesmo da compra)" required><br>
        Senha
        <input name="senha1" type="password" placeholder="6 ou mais dígitos" autocomplete="off" required><br>
        Repita a senha
        <input name="senha2" type="password" placeholder="Confirme sua senha" autocomplete="off" required><br>

        <input type="checkbox" required="" name="termos">Eu li e aceito os termos de serviço<br>

        <button type="submit" class="btn btn-block mt-lg btn-default"><b>Cadastrar</b></button>
    </form>

<?php
if ($_POST) {
    date_default_timezone_set('Brazil/East');

    $nome = htmlspecialchars($_POST['nome'], ENT_QUOTES);
    $email = htmlspecialchars($_POST['email'], ENT_QUOTES);
    $termos = htmlspecialchars($_POST['termos'], ENT_QUOTES);
    $senha1 = htmlspecialchars($_POST['senha1'], ENT_QUOTES);
    $senha2 = htmlspecialchars($_POST['senha2'], ENT_QUOTES);
    $senhacript = hash('sha256', $senha2);
    $data = date("Y-m-d H:i:s");
    $ip = $_SERVER['REMOTE_ADDR'];

    if (empty($email)) {
        echo "<script>window.alert('Digite o e-mail!');</script>";
        echo "<meta http-equiv='refresh' content='0;'>";
        return false;
    }

    $veric = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");
    $verifc = mysqli_num_rows($veric);

    if ($verifc > 0) {
        echo "<script>window.alert('Você já se cadastrou!');</script>";
        echo "<meta http-equiv='refresh' content='0;'>";
        return false;
    }

    if (empty($termos)) {
        echo "<script>window.alert('Concorde com os termos!');</script>";
        echo "<meta http-equiv='refresh' content='0;'>";
        return false;
    }

    if (empty($senha1)) {
        echo "<script>window.alert('Digite uma senha!');window.history.go(-1);</script>";
        return false;
    }

    if (empty($senha2)) {
        echo "<script>window.alert('Digite uma senha!');window.history.go(-1);</script>";
        return false;
    }

    if (strlen($senha1) < 6) {
        echo "<script>window.alert('Sua senha deve conter no mínimo 6 dígitos!');window.history.go(-1);</script>";
        return false;
    }

    if ($senha1 != $senha2) {
        echo "<script>window.alert('As senhas diferem!');</script>";
        echo "<meta http-equiv='refresh' content='0;'>";
        return false;
    }

    echo "<meta http-equiv='refresh' content='0.registrar.php?q=true'>";

    $sql1 = mysqli_query($conn, "INSERT INTO users (nome, email, senha, data, ip) VALUES ('$nome', '$email', '$senhacript', '$data', '$ip')");

    if ($sql1) {
        echo "<script>window.alert('Cadastro realizado com sucesso!');</script>";
    } else {
        echo "<script>window.alert('Erro ao cadastrar!');</script>";
    }
}
?>
</body>
</html>
