<?php
include("./verificar_login.php");
include("./conexao.php");

$id_usuario = $_SESSION['id'];

// Busca todas as escolhas do jogador
$sql = "
SELECT capitulo, escolha
FROM escolhas
WHERE usuario_id = '$id_usuario'
ORDER BY capitulo ASC
";

$resultado = $conn->query($sql);
$escolhas = [];
while($linha = $resultado->fetch_assoc()){
    $escolhas[$linha['capitulo']] = $linha['escolha'];
}
// Apaga escolhas anteriores
$conn->query("DELETE FROM escolhas WHERE usuario_id = '$id_usuario'");

// Redireciona para o início
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Conquistas do Jogador</title>
<style>
*{margin:0;padding:0;box-sizing:border-box;}
body{
    min-height:100vh;
    background-image:url('./imagens/fundoinvincible.gif');
    background-size:cover;
    background-position:center;
    font-family:Arial, sans-serif;
    display:flex;
    flex-direction:column;
    align-items:center;
    color:white;
}
body::before{
    content:"";
    position:fixed;
    inset:0;
    background:rgba(0,0,0,.5);
    z-index:-1;
}
.logo{
    margin-top:20px;
    text-align:center;
    font-size:40px;
    font-weight:bold;
    color:#ffd700;
    text-shadow:0 0 15px rgba(255,215,0,.6);
}
.conquista-box{
    width:90%;
    max-width:1000px;
    margin-top:20px;
    background:rgba(0,0,0,.85);
    border:2px solid #ff9800;
    border-radius:12px;
    padding:25px;
}
.conquista-box h2{
    color:#ffd700;
    margin-bottom:15px;
}
.conquista-item{
    margin-bottom:15px;
    font-size:20px;
}
#box-narrativa{
     width:90%;
    max-width:1000px;
    margin-top:20px;
    background:rgba(0,0,0,.85);
    border:2px solid #ff9800;
    border-radius:12px;
    padding:25px;

}
#nome-personagem{
    margin-top:20px;
    font-size:20px;
    font-weight:bold;
    color:#ffd700;
    text-shadow:0 0 15px rgba(255,215,0,.6);


}
p{
     margin-top:20px;
    font-size:20px;
    font-weight:bold;
    color:#ffd700;
    text-shadow:0 0 15px rgba(255,215,0,.6);
}
#container-opcoes{

    width:90%;
    max-width:600px;

    margin-top:20px;

    margin-bottom:40px;

    display:flex;
    flex-direction:column;

    gap:15px;
}

.opcao-link{

    text-decoration:none;

    background:rgba(0,0,0,.85);

    border:2px solid #ffd700;

    color:#ffd700;

    padding:15px;

    border-radius:10px;

    text-align:center;

    transition:.3s;
}

.opcao-link:hover{

    background:#ffd700;

    color:black;

    transform:translateY(-3px);
}

</style>
</head>
<body>

<div class="logo">CONQUISTAS DO JOGADOR</div>

<section class="conquista-box">
    <h2>Resumo das Escolhas</h2>

    <div class="conquista-item">
        <strong>Capítulo 1:</strong>
        <?php echo $escolhas[1] ?? "Não escolhido"; ?>
    </div>

    <div class="conquista-item">
        <strong>Capítulo 2:</strong>
        <?php echo $escolhas[2] ?? "Não escolhido"; ?>
    </div>

    <div class="conquista-item">
        <strong>Capítulo 3:</strong>
        <?php echo $escolhas[3] ?? "Não escolhido"; ?>
    </div>

    <div class="conquista-item">
        <strong>Capítulo 4:</strong>
        <?php echo $escolhas[4] ?? "Não escolhido"; ?>
    </div>
</section>
<section id="box-narrativa" style="margin-top:30px;">
    <div id="nome-personagem">
        NARRADOR
    </div>
    <div id="texto-dialogo">
        <p>
            Parabéns por concluir sua jornada!  <?php echo $_SESSION['nome']; ?> 
            Deseja começar novamente e fazer novas escolhas?
        </p>
    </div>
</section>

<nav id="container-opcoes">
  
     <a href="dashboad.php" class="opcao-link">
        ► Jogar Novamente
    </a>
    <a href="logout.php" class="opcao-link">
        ► logout 
    </a>
</nav>


<audio id="bgm" loop>
 <source src="../musica.mp3/final_conquista.aac" type="audio/mpeg">
</audio>

<script>
window.addEventListener("scroll", () => {
    const musica = document.getElementById("bgm");
    musica.volume = 0.8;
    musica.play().catch(() => {});
}, { once:true });
</script>


</body>
</html>
