```php
<?php

include("../verificar_login.php");

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Capítulo 1</title>

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

</style>

</head>

<body>

<div class="logo">

CAPÍTULO 1<br>
MARK DESCOBRE SEUS PODERES tem certeza ? 

</div>

<div class="personagem">

<img src="../imagens/Invincible_Season_2_Mark_and_Debbie_sitting_on_roof.jpg">

</div>

<section id="box-narrativa">

<div id="nome-personagem">

MARK E DEBBIE

</div>

<div id="texto-dialogo">

<p>
Mark Grayson finalmente realiza seu sonho ao herdar os poderes de seu pai, o maior super-herói da Terra.
</p>

<br>

<p>
Depois de anos esperando, ele finalmente consegue voar, possui força sobre-humana e reflexos incríveis.
</p>

<br>

<p>
Empolgado e nervoso ao mesmo tempo, Mark decide contar tudo para sua mãe.
</p>

<br>

<p>
<b>Mark:</b><br>
"Mãe... eu finalmente consegui. Eu tenho poderes."
</p>

<br>

<p>
<b>Debbie:</b><br>
"Eu sabia que esse dia chegaria, querido."
</p>

<br>


<br>

<p>
<b>Mark:</b><br>
"Você acha que eu deveria contar para o meu pai agora?, não sei, talvez ele poderia me ajudar a entender tudo isso"
</p>

<br>

<p>
<b>Debbie:</b><br>
"Seu pai sempre esperou por esse momento. Mas essa decisão é sua, Mark. Pense com cuidado."
</p>

</div>

</section>

<nav id="container-opcoes">

<a
href="../salvar_escolha.php?capitulo=1&escolha=contar"
class="opcao-link">

► Contar imediatamente para seu pai

</a>

<a
href="../salvar_escolha.php?capitulo=1&escolha=esconder"
class="opcao-link">

► Guardar segredo por enquanto e aprender sozinho

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
```
