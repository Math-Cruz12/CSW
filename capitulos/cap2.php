<?php

include("../verificar_login.php");
include("../conexao.php");

$id_usuario = $_SESSION['id'];

$sql = "
SELECT escolha
FROM escolhas
WHERE usuario_id = '$id_usuario'
AND capitulo = 1
ORDER BY id DESC
LIMIT 1
";

$resultado = $conn->query($sql);

$dados = $resultado->fetch_assoc();

$escolha = $dados['escolha'];

?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Capítulo 2</title>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}

body{

    min-height:100vh;

    background-image:url('../imagens/fundoGPT.png');
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

.personagem{

    margin-top:20px;

    text-align:center;
}

.personagem img{

    width:800px;
    max-width:90%;

    border-radius:15px;

    box-shadow:0 0 20px rgba(0,0,0,.8);
}

#box-narrativa{

    width:90%;
    max-width:1200px;

    margin-top:20px;

    background:rgba(0,0,0,.85);

    border:2px solid #ff9800;

    border-radius:12px;

    padding:25px;

}

#nome-personagem{

    background:#d32f2f;

    display:inline-block;

    padding:8px 15px;

    border-radius:5px;

    margin-bottom:15px;

    font-weight:bold;
}

#texto-dialogo{

    font-size:22px;

    line-height:1.8;

    color:white;
}

#container-opcoes{

    width:90%;
    max-width:1200px;

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
.omini-man{
widht:620px;
height: 447px;



}
.narrador{
    font-size: 19px;
}

</style>

</head>

<body>

<div class="logo">

CAPÍTULO 2<br>
O PRIMEIRO TREINAMENTO

</div>

<div class="personagem">

<?php

if($escolha == "contar"){

?>

<img src="../imagens/contarprime.jpg">


<?php

}else{

?>

<img src="../imagens/markVoando.png">

<?php

}

?>

</div>

<section id="box-narrativa">

<div id="nome-personagem">

<?php

if($escolha == "esconder"){

    echo "NOLAN";

}else{

    echo "NARRADOR";

}

?>

</div>

<div id="texto-dialogo">

<?php

if($escolha == "contar"){

?>

<p>
Nolan sorri ao ouvir a notícia.
</p>

<br>

<p>
"Finalmente, filho. Eu estava esperando por esse dia."
</p>

<br>

<p>
Amanhã vou te levar para treinar um pouco oque voçê acha?.
</p>

<br>

<p>
Mark não conseguindo dormi finalmente testa seu poder de voar.
</p> <br>

<img class="omini-man" src="../imagens/poderes.gif">
<?php

}else{

?>

<p>
Mark decidiu esconder seus poderes.
</p>

<br>

<p>
Durante vários dias ele treinou sozinho.
</p>

<br>

<p>
Enquanto tentava aperfeiçoar seus voos, uma figura aparece no céu.
</p>

<br>

<p>
Era Nolan.
</p>

<br>

<p>
"Então era isso que você estava escondendo de mim?"
</p>

<img class="omini-man" src="../imagens/omini-man.jpg">
<?php

}

?>

</div>

</section>

<section id="box-narrativa" style="margin-top:20px;">

<div  id="nome-personagem">

NARRADOR

</div>

<div id="texto-dialogo">

<p>
Nolan decide que chegou a hora de preparar seu filho para os desafios que estão por vir.
</p>

<br>

<img class="omini-man" src="../imagens/invincibleTreinamento.png">




<p>
Nolan: <br>
"Força sem controle é apenas destruição, Mark. Se quiser proteger as pessoas, primeiro precisa aprender a controlar a si mesmo."
</p>

<br>
<div class="narrador" id="nome-personagem">

NARRADOR

</div>
<p>
Após o treinamento, Mark recebe uma ligação da Agência Global.
</p>
<img class="omini-man" src="../imagens/hdNolantreinar.jpeg"> <br>
<p>
Nolan: "Acho que seria um desafio justo para ver se está preparado ou não".
</p>

</div>

</section>

<nav id="container-opcoes">

<a
href="../salvar_escolha_cap2.php?capitulo=2&escolha=ajudar_cidade"
class="opcao-link">

► Ir ajudar imediatamente

</a>

<a
href="../salvar_escolha_cap2.php?capitulo=2&escolha=continuar_treinando"
class="opcao-link">

► Continuar treinando com Nolan

</a>

</nav>

<audio id="bgm" loop>
 <source src="../musica.mp3/invinciblespic3.aac" type="audio/mpeg">
</audio>

<script>
window.addEventListener("scroll", () => {
    const musica = document.getElementById("bgm");
    musica.volume = 0.9;
    musica.play().catch(() => {});
}, { once:true });

function iniciarMusica() {
    const musica = document.getElementById("bgm");
    musica.volume = 0.8;
    musica.play().catch(() => {});
}

window.addEventListener("scroll", iniciarMusica, { once:true });
document.addEventListener("click", iniciarMusica, { once:true });

window.addEventListener("load", () => {
    const musica = document.getElementById("bgm");
    musica.volume = 0.8;
    musica.play().catch(() => {
        // Alguns navegadores bloqueiam autoplay sem interação
        console.log("Autoplay bloqueado, será necessário interação do usuário.");
    });
});
</script>
</body>
</html>