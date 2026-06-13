<?php

include("../verificar_login.php");
include("../conexao.php");

$id_usuario = $_SESSION['id'];

$sql = "
SELECT escolha
FROM escolhas
WHERE usuario_id = '$id_usuario'
AND capitulo = 2
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

<title>Capítulo 3</title>

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
width:620px;
height:447px;
max-width:100%;
border-radius:10px;
}



.markvoando{
 width: 421px;
 height: 440px;

}

</style>

</head>

<body>

<div class="logo">

CAPÍTULO 3<br>
Ameaça na Cidade 

</div>

<div class="personagem">

<?php

if($escolha == "ajudar_cidade"){

?>

<img class="omini-man" src="../imagens/invincible.gif">


<?php

}else{

?>

<img src="../imagens/treinba.webp">

<?php

}

?>

</div>

<section id="box-narrativa">

<div id="nome-personagem">

<?php

if($escolha == "continuar_treinando"){

    echo "NARRADOR";

}else{
     echo "NARRADOR";

}

?>

</div>

<div id="texto-dialogo">

<?php

if($escolha == "continuar_treinando"){

?>

<p>
Mark decide permanecer ao lado de Nolan para continuar o treinamento.
</p>

<br>

<img src=" ../imagens/Nolan-and-Mark.png">

<p>
Durante horas, pai e filho cruzam os céus em alta velocidade.
</p>

<br>

<img class="omini-man" src=" ../imagens/flying-nolan-grayson.gif">

<p>
Nolan:
"Você está melhorando, mas ainda hesita demais."
</p>

<br>

<p>
Mark:
"Eu só não quero colocar pessoas em perigo."
</p>

<br>


<img class="omini-man" src=" ../imagens/images.jfif">

<p>
De repente, o comunicador da Agência Global começa a tocar.
</p>

<br>

<p>
Cecil:
"Mark! Onde você está?"
</p>

<br>
<img src="../imagens/Invincible-Cecil-2-Episode-4.webp">

<p>
"Os Gêmeos Mauler estão destruindo parte da cidade!"
</p>

<br>
<p>
Quando chega ao local, encontra carros destruídos e prédios danificados.
</p>

<br>

<img class="omini-man" src="../imagens/hdthanos.png">

<br>

<p>
No meio do caos estava um dos Gêmeos Mauler.
</p>

<br>

<p>
Mauler:
"Então mandaram uma criança para me deter?"
</p>

<br>

<p>
Sem pensar duas vezes, Mark avança para o ataque.
</p>

<br>

<p>
O Mauler o segura pelo peito e o lança contra um caminhão.
</p>

<br>

<p>
Mauler:
"Volte para casa, garoto."
</p>

<br>

<p>
Mark se levanta e revida com toda sua força.
</p>

<br>

<img class="omini-man" src="../imagens/marksocogrande.png">

<br>

<p>
O impacto cria uma poderosa onda de choque que atravessa a avenida.
</p>
<p>
Mesmo ferido, o Mauler sorri.
</p>

<p>
Mauler:
"Finalmente alguém capaz de me divertir."
</p>






<?php

}else{

?>

<p>
Mark atravessa os céus em direção ao centro da cidade.
</p>

<br>

<p>
Quando chega ao local, encontra carros destruídos e prédios danificados.
</p>

<br>

<img class="omini-man" src="../imagens/hdthanos.png">

<br>

<p>
No meio do caos estava um dos Gêmeos Mauler.
</p>

<br>

<p>
Mauler:
"Então mandaram uma criança para me deter?"
</p>

<br>

<p>
Sem pensar duas vezes, Mark avança para o ataque.
</p>

<br>

<p>
O Mauler o segura pelo peito e o lança contra um caminhão.
</p>

<br>

<p>
Mauler:
"Volte para casa, garoto."
</p>

<br>

<p>
Mark se levanta e revida com toda sua força.
</p>

<br>

<img class="omini-man" src="../imagens/marksocogrande.png">

<br>

<p>
O impacto cria uma poderosa onda de choque que atravessa a avenida.
</p>
<p>
Mesmo ferido, o Mauler sorri.
</p>

<p>
Mauler:
"Finalmente alguém capaz de me divertir."
</p>
<?php

}

?>

</div>

</section>

<section id="box-narrativa" style="margin-top:20px;">

<div id="nome-personagem">

NARRADOR

</div>

<div id="texto-dialogo">




<p>
Enquanto avaliava a situação em que estava, o comunicador tocar .
</p>

<img class="omini-man" src="../imagens/tocarEve.png">

<p>
Eve:
"Mark, preciso da sua ajuda."
</p>

<br>

<img class="omini-man" src="../imagens/invincible-atom-eve.webp">

<p>
"Estou escutando uns tremores no distrito leste acho que é o doctor sísmico novamente."
</p>

<br>

<p>
"Posso aguentar por algum tempo, mas não muito."
</p>

<br>

<p>
Mark observa os escombros ao seu redor.
</p>

<br>
<img class="omini-man" src="../imagens/markolhando.jpg">

<p>
Ao mesmo tempo, sabe que Eve está em perigo.
</p>

<br>

<p>
Agora ele precisa decidir.
</p>

<br>


</div>

</section>


<nav id="container-opcoes">

<a
href="../salvar_escolha_cap3.php?capitulo=3&escolha=proteger_cidade"
class="opcao-link">

► Continuar lutando e proteger a cidade

</a>

<a
href="../salvar_escolha_cap3.php?capitulo=3&escolha=ajudar_eve"
class="opcao-link">

► Ir ajudar Eve imediatamente

</a>

</nav>

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