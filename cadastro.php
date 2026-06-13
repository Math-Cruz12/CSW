

<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>cadastrar novo jogador</title>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}

body{
    min-height:100vh;
    background:url('./imagens/ChatGPT Image 5 de jun. de 2026, 03_41_46.png');
    background-size:cover;
    background-position:center;
    font-family:Arial, sans-serif;
    color:white;
    display:flex;
    justify-content:center;
    align-items:center;
}

body::before{
    content:"";
    position:fixed;
    inset:0;
    background:rgba(0,0,0,.55);
    z-index:-1;
}

.menu-principal{
    width:100%;
    max-width:1200px;
    display:flex;
    align-items:center;
    justify-content:space-between;
    padding:30px;
}

.lado-esquerdo{
    flex:1;
}

.perfil{
    background:rgba(0,0,0,.75);
    backdrop-filter:blur(10px);
    border-radius:15px;
    padding:20px;
    width:320px;
    margin-bottom:20px;
}

.perfil h2{
    margin-bottom:10px;
}

.personagem{
    text-align:center;
    flex:1;
}

.personagem img{
    max-height:500px;
    animation:flutuar 3s ease-in-out infinite;
}

@keyframes flutuar{
    0%{
        transform:translateY(0);
    }
    50%{
        transform:translateY(-15px);
    }
    100%{
        transform:translateY(0);
    }
}

.acoes{
    width:320px;
    display:flex;
    flex-direction:column;
    gap:12px;
}

.acoes a{
    text-decoration:none;
    color:white;
    text-align:center;
    padding:14px;
    border-radius:12px;
    background:rgba(0,0,0,.75);
    border:2px solid #ffd700;
    transition:.3s;
}

.acoes a:hover{
    background:#ffd700;
    color:black;
    transform:translateY(-3px);
}

input{
    text-decoration:none;
    color:white;
    text-align:center;
    padding:14px;
    border-radius:12px;
    background:rgba(0,0,0,.75);
    border:2px solid #ffd700;
    transition:.3s;
	width:100%;
}

input  a:hover{
    background:#ffd700;
    color:black;
    transform:translateY(-3px);
}

label{
	
	
	padding:14px;
	border-radius:12px;
	tex-decoration:none;
	background:rgba(0,0,0,.75);
	font-size:24px;
	font-family:scale;
}



.logo{
    text-align:center;
    font-size:50px;
    font-weight:bold;
    color:#ffd700;
    text-shadow:0 0 15px rgba(255,215,0,.6);
    margin-bottom:20px;
}





button{
    width:320px;
    display:flex;
    flex-direction:column;
    gap:12px;
}

button {
    text-decoration:none;
    color:white;
    text-align:center;
    padding:14px;
    border-radius:12px;
    background:rgba(0,0,0,.75);
    border:2px solid #ffd700;
    transition:.3s;
}

button :hover{
    background:yellow;
    color:black;
    transform:translateY(-3px);
}

</style>

</head>
<body>

<div class="menu-principal">

    <div class="lado-esquerdo">

        <div class="perfil">
            <h2>Cadastrar Jodador </h2>
            
        </div>

        <div class="acoes">
	
	<form action="salvar_usuarios.php" method="POST">
    <label>Nome:</label><br>
    <input type="text" name="nome" required><br><br>
    <label>Login:</label><br>
    <input type="text" name="login" required><br><br>
    <label>Senha:</label><br>
    <input type="password" name="senha" required><br><br>
    <button type="submit">Cadastrar</button>
</form>
<a href="login.php">Já possuo conta</a>
	

			
			
			
			
			
			
        </div>

    </div>

    <div class="personagem">

        <div class="logo">
            INVINCIBLE
        </div>

        <img src="./imagens/invicible.png" alt="Personagem">

    </div>

</div>

<audio id="bgm" loop>
    <source src="./musica.mp3/Invincible Main Theme  EPIC VERSION_1778734848640.mp3" type="audio/mpeg">
</audio>

<script>

document.addEventListener("click", () => {

    const musica = document.getElementById("bgm");

    musica.volume = 0.8;

    musica.play().catch(() => {});

}, { once:true });

</script>

</body>
</html>
```
