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

<title>Capítulo 4</title>

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

CAPÍTULO 4<br>
Tremores da Terra 

</div>

<div class="personagem">

<?php

if($escolha == "ajudar_eve"){

?>

<img class="omini-man" src="../imagens/atom-eve-mark-grayson.gif.gif">


<?php

}else{

?>

<img src="../imagens/sismicoladia.jpg">

<?php

}

?>

</div>

<section id="box-narrativa">

<div id="nome-personagem">

<?php

if($escolha == "proteger_cidade"){

    echo "NARRADOR";

}else{
     echo "NARRADOR";

}

?>

</div>

<div id="texto-dialogo">

<?php

if($escolha == "proteger_cidade"){

?>

<p>
Enquanto isso, no distrito leste, Eve enfrenta o Doctor Sísmico sozinha.
</p>

<br>

<img src=" ../imagens/eveSozinha.webp">

<p>
Eve:

"Você não vai destruir esta cidade enquanto eu estiver de pé!"
</p>

<br>

<p>
Doctor Sísmico:

"Você é apenas mais uma tentando impedir o inevitável."
</p>

<br>

<img class="omini-man" src="../imagens/velhofeio.jpg">




<p>
Doctor Sísmico:

"Está cansada. Posso sentir sua força diminuindo."
</p>

<br>

<p>
De repente, Mark aparece no ceus e em um pisca de olhos golpeia Doctor Sísmico.
</p>

<br>
<img class="omini-man" src="../imagens/doctorSismico.jpg">

<p>
Cecil:
"Mark! O que você está fazendo? preciso dele vivo, prenda ele e traga pra mim, esse desgraçado vai pagar por todo que já fez !"
</p>

<br>
<img class="omini-man" src="../imagens/agenciaglobal.avif">

<p>
"precisa que Volte para agencia, tenho algo mais importante pra dizer!"
</p>

<br>
<p>
Quando chega ao local, Mark encontra Cecil preocupado.
</p>

<br>

<img class="omini-man" src="../imagens/preCecil.webp">

<br>

<p>
Cecil:
"Mark! tem algo que eu quero te mostra!".
</p>

<br>

<img class="omini-man" src="../imagens/espacoConquist.avif">
<p>
Cecil:
"Está vindo do espaço mas, não sabemos o que é ainda?"
</p>

<br>

<p>
"Com essa velocidade deve ser muito forte, Mark! temos que nós preparar."
</p>

<br>


















<?php

}else{ 
	

?>

<p>
Eve:
"Chegou a tempo, Mark! Ouvi dizer que o Doctor Sísmico cria criaturas esquisitas usando pedras e minerais."
</p>

<br>
<img class="omini-man" src="../imagens/markAndEve.png">
<p>
Mark:
"Criaturas de pedra? Isso parece estranho até para os padrões desta semana que já foi bem complicada."
</p>

<br>

<img class="omini-man" src="../imagens/litemMarrk.webp">

<br>

<p>
Eve:

"Não estou brincando. Algumas delas já destruíram três quarteirões."

Chegando Mark olha para a floresta e ver doctor Sismico sorrindo.
</p>

<br>

<p>
Doctor Sísmico:

"Vocês chegaram exatamente onde eu queria."
</p>

<br>
<img class="omini-man" src="../imagens/sismico.webp">

<p>
Mark:

"Você é o Doctor Sísmico?"
</p>

<br>



<img class="omini-man" src="../imagens/markEve.png">

<p>
Doctor Sísmico:

"Alguns me chamam assim."

"Eu prefiro ser chamado de libertador da Terra."
</p>

<br>
<img class="omini-man" src="../imagens/velhochato.jpg">


<p>
Eve:

"Libertador? Você está destruindo a floresta, vai acabar destruindo a cidade seu louco!"
</p>

<br>

<p>
Doctor Sísmico:

"A humanidade destruiu muito mais."
</p>

<br>

<p>
Mark:

"Não importa qual seja sua desculpa. Pessoas inocentes estão sofrendo."


 </p>


  <br>

<img class="omini-man" src="../imagens/Invincible-siEveSeason-3.jpg">

<br>

<p>
Doctor Sísmico sorri.
</p>
<br>
<img class="omini-man" src="../imagens/velhorinso.webp">

<p>
Doctor Sísmico:

"Então venha me impedir, Invencível."
</p>

<img class="omini-man" src="../imagens/Doc-Seismic.webp">


<br>

<img src=" ../imagens/eveSozinha.webp">

<p>
Eve:

"Você não vai destruir esta cidade enquanto eu estiver de pé!"
</p>

<br>

<p>
Doctor Sísmico:

"Você é apenas mais uma tentando impedir o inevitável."
</p>

<br>

<img class="omini-man" src="../imagens/velhofeio.jpg">




<p>

<br>

<p>
De repente, Mark golpeia Doctor Sísmico.
</p>

<br>
<img class="omini-man" src="../imagens/markLutasismicofinal.jpg">

<p>
Cecil:
"Mark! O que você está fazendo? preciso dele vivo, prenda ele e traga pra mim, esse desgraçado vai pagar por todo que já fez !"
</p>

<br>
<img class="omini-man" src="../imagens/agenciaglobal.avif">

<p>
"precisa que Volte para agencia, tenho algo mais importante pra dizer!"
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
Quando chega ao local, Mark encontra Cecil preocupado.
</p>

<br>

<img class="omini-man" src="../imagens/preCecil.webp">

<br>

<p>
Cecil:
"Mark! tem algo que eu quero te mostra!".
</p>

<br>

<img class="omini-man" src="../imagens/radacecil.gif">
<p>
<p>
Cecil:
"Há poucos minutos nossos satélites detectaram algo vindo do espaço profundo."
</p>

<br>
<p>
Cecil:
"No início pensamos que fosse um meteoro."
</p>

<br>

<p>
"Mas com essa velocidade deve ser muito forte."
</p>

<br>
<p>
Mark:
"Então é alguém?"
</p>
<br>

<img class="omini-man" src="../imagens/markwhos.jpg">

<p>
Cecil:
"É exatamente."
</p>

<br>




<img class="omini-man" src="../imagens/cecilagencia.avif">






<p>
Cecil:
"Então garoto precisamos de você aqui, podemos reunir a tropa jovem e se preparar contra isso"
</p>

<br>

<p>
"É exatamente por isso te chamei, ou pode ir ao espaço investigar antes mesmo desse problema chegar a terra ."
</p>


<p>
Cecil:
"Seja qual for sua escolha, tome cuidado."
</p>
<br>


<p>
Agora ele precisa decidir.
</p>

<br>


Reunir tropa jovem ou ir ao espaço? .
</p>
</div>

</section>


<nav id="container-opcoes">

<a
href="../salvar_escolha_cap4.php?capitulo=3&escolha=ir_espaco"
class="opcao-link">
► Voar para o espaço e interceptar a ameaça

</a>

<a
href="../salvar_escolha_cap4.php?capitulo=3&escolha=tropa_jovem"
class="opcao-link">
► Reunir a Tropa Jovem e defender a Terra


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