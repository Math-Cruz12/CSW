<?php

include("../verificar_login.php");
include("../conexao.php");

$id_usuario = $_SESSION['id'];

$sql = "
SELECT escolha
FROM escolhas
WHERE usuario_id = '$id_usuario'
AND capitulo = 3
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

<title>Capítulo final</title>

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
#texto-dialogo2{
	
	
    font-size:22px;

    line-height:1.8;

    color:white;
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

CAPÍTULO final<br>
A Chegado Do Império Viltrum

</div>

<div class="personagem">

<?php

if($escolha == "tropa_jovem"){

?>

<img src="../imagens/tropaJovem.jpg">


<?php

}else{

?>

<img src="../imagens/invincible-vs-cnquest.gif">

<?php

}

?>

</div>

<section id="box-narrativa">

<div id="nome-personagem">

<?php

if($escolha == "ir_espaco"){

    echo "NARRADOR";

}else{

    echo "NARRADOR";

}

?>

</div>

<div id="texto-dialogo">

<?php

if($escolha == "tropa_jovem"){

?>




<p>
A Tropa Jovem é enviada para proteger a Terra.
</p>

<img class="omini-man" src="../imagens/jovem-teen-team.avif">

<p>
Por alguns minutos tudo parece tranquilo.
</p>

<p>
Então algo cai do céu.
</p>

<img class="omini-man" src="../imagens/caiuconquist.jpg">

<p>
O impacto destrói quarteirões inteiros.
</p>

<p>
Conquista:
"Patético, foi para isso que me enviaram."
</p>

<p>
A Tropa Jovem tenta lutar.
</p>
<br>

<img class="omini-man" src="../imagens/invincible-conquest-vs-mark-invincible-conquest-gif.gif">

<p>
Nenhum golpe sequer afeta o invasor.
</p>

<p>
Um por um, os heróis são derrotados.
</p>

<br>
<img class="omini-man" src="../imagens/invincible-oliver-grayson.gif">

<br>
<p>
Conquista:
Não me atrapalha inseto!
</p>
<br>
<p>
Conquista:
Onde está o filho de Nolan?...
</p>


<p>
Quando tudo parecia perdido...
</p>

<img class="omini-man" src="../imagens/invincible-invincible-season-3.gif">

<p>
Mark surge nos céus.
</p>

<p>
Conquista sorri.
</p>
<br>

<img class="omini-man" src="../imagens/invincible-socovs-conquista.gif">
<p>
"Finalmente encontrei alguém digno."
</p>

<p>
A batalha final começou.
</p>


<br>



<img class="omini-man" src="../imagens/invincible-conquest-fight-comics.avif">

<p>
Conquista:
 "Confesso que esperava mais do filho de Nolan, olha isso e aprenda moleque!."
</p>
<br>

<img class="omini-man" src="../imagens/invincible-conquestMark.gif">

<p>
Conquista:
 "Isso não desista você está se soltando."
</p>
<br>

<p>
"Seu pai conquistou mundos inteiros. Você mal consegue me fazer dar um passo para trás."


</p>

<img class="omini-man" src="../imagens/imageConsquista.webp">

<p>
Conquista:
 "Obrigado, eu estou me divertindo como nunca. Eu não sei nem por que me mandaram a esse planeta, mas eu confesso, eu estou me divertindo muito."
</p>
<br>
<img class="omini-man" src="../imagens/garotoCos.webp">


<?php

}else{

?>





















<p>
Mark atravessa a atmosfera terrestre e segue em direção ao objeto detectado pelos satélites.
</p>

<img class="omini-man" src="../imagens/invincible-s3-blue-blackseason-3.gif">

<p>
Quando finalmente se aproxima, percebe que não era um meteoro.
</p>

<p>
Era um homem.
</p>

<br>

<img class="omini-man" src="../imagens/imcosquest.avif">

<p>
Um guerreiro gigantesco coberto de cicatrizes.
</p>

<p>
Conquista:
"Esteja pronto para a minha chegada, verme,
O Império previu sua resistência e foi por isso que me enviaram."
</p>



<img class="omini-man" src="../imagens/invinciblecomics.avif">


<p>
Mark:
"Quem é você?"
</p>


<br>

<p>
Conquista:
"Eu sou o Conquista e eu sou a última chance para você cumprir o seu dever.."
</p>
<br>


<p>
Conquista:
"Você recebeu ordem, você teve tempo, e mesmo assim, eu encontrei esse planeta despreparado para a chegada do Império Viltrum."
</p>
<p>
<br>
Cecil:
"Quero imagem do satélite agora, precisamos ver com quem Mark está conversando."
</p>
<img class="omini-man" src="../imagens/
agenciaglobal.avif">



<p>
Mark:
"Ha ha, você não entendeu. Sou eu que mando nessa praia."
</p>

<img class="omini-man" src="../imagens/mark.jpg">

<p>
Sem avisar, Mark dispara em velocidade absurda.
</p>

<br>

<img class="omini-man" src="../imagens/invincible-invincible-season-3.gif">

<p>
O choque entre os dois ecoa pelo espaço.
</p>

<p>
Conquista bloqueia facilmente o ataque.
</p>
<br>
<p>
Conquista:
 "É assim que você luta, garoto? Patético."
</p>
<br>

<img class="omini-man" src="../imagens/invincible-conquest.jpg">


<p>
Conquista:
 "Confesso que esperava mais do filho de Nolan, olha isso e aprenda moleque!."
</p>
<br>

<img class="omini-man" src="../imagens/invincible-conquestMark.gif">

<p>
Conquista:
 "Isso não desista você está se soltando."
</p>
<br>

<p>
"Seu pai conquistou mundos inteiros. Você mal consegue me fazer dar um passo para trás."


</p>
<br>

<img class="omini-man" src="../imagens/garotoCos.webp">

<p>
"Que decepção."

</p>




<?php




}

?>










































</div>



<section id="box-narrativa">

    <div id="nome-personagem">
        NARRADOR
    </div>

    <div id="texto-dialogo2">

        <p>
            Conquista domina completamente a batalha.
        </p>
		<br>

        <p>
            Ferido e sem forças para continuar, Mark cai diante do poderoso Viltrumita.
        </p>
		<br>
		<img class="omini-man" src="../imagens/invincible-naodesistavs-conquest (1).gif">

        <p>
            Pela primeira vez, parece que tudo está perdido.
        </p>

        <p>
            Conquista ergue o punho para dar o golpe final.
        </p>
		<br>
		
		<img class="omini-man" src="../imagens/caiuconquist.jpg">

        <p>
            Mas quando toda esperança desaparece, Eve desperta um poder além de seus próprios limites.
        </p>
		<br>
		<img class="omini-man" src="../imagens/thumbEveAtomica.jpg">

        <p>
            Em um instante de pura determinação, ela salva Mark da morte.
        </p>
		<br>
		<img class="omini-man" src="../imagens/maxresdefault.jpg">

        <p>
            Inspirado pela força de Eve, Mark encontra energia para se levantar uma última vez.
        </p>
		<br>
		
		<img class="omini-man" src="../imagens/invincible-conquest-fight-comics.avif">

        <p>
            Juntos, eles derrotam Conquista e salvam a Terra.
        </p>
		<br>
		
		<img class="omini-man" src="../imagens/Invincible-Season-3-Finale-Atom-Eve.webp">
		<br>
		
		
		 <p>
            Mark Finalmente derrotado o Conquista
        </p>
		<br>
		<img class="omini-man" src="../imagens/derrotadocos.webp">

        <p>
            Porém, enquanto observa as estrelas, Mark percebe uma verdade inquietante:
        </p>
		<br>
		<img class="omini-man" src="../imagens/planetaviltrum (1).webp">


        <p>
            Conquista era apenas um soldado.
        </p>

        <p>
            Um império inteiro ainda existe entre as estrelas.
        </p>
		<br>
		<img class="omini-man" src="../imagens/trangs.webp">


        <p>
            E a verdadeira guerra está apenas começando...
        </p>

        <br>

        <h2>FIM</h2>

        <button id="btnFinal" onclick="mostrarVideo()">
            Assistir Cena Final
        </button>

    </div>

</section>

<nav id="container-opcoes">

<a href="../conquistas.php" class="opcao-link">
► Ver minhas conquistas
</a>


</nav>

<div id="videoFinal" style="display:none; text-align:center; margin-top:20px;">

   <video width="800" controls autoplay muted>
    <source src="../video.mp4/treiler.mp4" type="video/mp4">
    Seu navegador não suporta vídeos.
</video>


</div>

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