# 🦸 Invincible - Visual Novel

Uma Visual Novel inspirada no universo de **Invincible**, desenvolvida como projeto acadêmico utilizando **PHP**, **HTML**, **CSS**, **JavaScript** e **MySQL**.

O jogador acompanha a jornada de Mark Grayson e toma decisões que alteram o rumo da história, criando diferentes caminhos até o confronto final contra Conquista.

---

# 📸 Demonstração

- Sistema de login
- <img width="1410" height="710" alt="image" src="https://github.com/user-attachments/assets/1a60ddcc-1d96-4aa9-a085-11250ca4dd7a" />

- Sistema de cadastro
- Capítulos com narrativa interativa
- Escolhas que alteram a história
- <img width="430" height="510" alt="invincible" src="https://github.com/user-attachments/assets/02ea25d3-e08b-4bbc-9364-665b78621e14" />

- Sistema de salvamento das escolhas
- Página de conquistas do jogador
- Final baseado nas decisões tomadas

---

# 🛠 Tecnologias utilizadas

- HTML5
- CSS3
- JavaScript
- PHP
- MySQL
- XAMPP

---

# 📁 Estrutura do projeto

```
Projeto/
│
├── capitulos/
├── imagens/
├── musica.mp3/
├── css/
├── js/
├── banco/
├── conexao.php
├── verificar_login.php
├── index.php
└── README.md
```

---

# ⚙️ Como executar o projeto

## 1. Clone o repositório

```bash
git clone https://github.com/math-cruz12/GSW.git
```

ou faça o download em **ZIP**.

---

## 2. Instale o XAMPP

Faça o download em:

https://www.apachefriends.org/

---

## 3. Coloque o projeto na pasta

```
xampp/htdocs/
```

Exemplo:

```
xampp/htdocs/Invincible-Visual-Novel
```

---

## 4. Inicie o Apache e o MySQL

Abra o **XAMPP Control Panel** e inicie:

- Apache
- MySQL

---

## 5. Crie o banco de dados

Abra o navegador:

```
http://localhost/phpmyadmin
```

Crie um banco chamado:

```
invincible
```

Depois importe o arquivo SQL disponível na pasta:

```
/banco/
```

---

## 6. Configure a conexão

Abra o arquivo:

```
conexao.php
```

Configure conforme seu ambiente.

Exemplo:

```php
$conn = new mysqli(
    "localhost",
    "root",
    "",
    "invincible"
);
```

---

## 7. Execute o projeto

Abra o navegador:

```
http://localhost/Invincible-Visual-Novel
```

---

# 🎮 Como jogar

- Faça um cadastro.
- Entre com sua conta.
- Leia cada capítulo.
- Faça suas escolhas.
- Cada decisão altera o desenvolvimento da história.
- Ao finalizar o jogo, uma página mostra todas as escolhas realizadas durante a aventura.

---

# 🌟 Sistema de escolhas

Durante a aventura o jogador poderá decidir entre diferentes caminhos.

## Capítulo 1

- Contar para Nolan sobre seus poderes.
- Esconder seus poderes.

## Capítulo 2

- Ajudar a cidade.
- Continuar treinando com Nolan.

## Capítulo 3

- Proteger a cidade.
- Ir ajudar Eve.

## Capítulo 4

- Reunir a Tropa Jovem.
- Ir ao espaço investigar a ameaça.

Cada decisão influencia os acontecimentos dos capítulos seguintes e modifica a narrativa até o confronto final.

---

# 📚 Objetivo

Este projeto foi desenvolvido para fins educacionais, com o objetivo de praticar:

- Desenvolvimento Web
- PHP
- Banco de Dados
- Manipulação de Sessões
- MySQL
- Lógica de Programação
- Narrativas Interativas

---

# 👨‍💻 Autor

**Matheus Cruz**

GitHub:
https://github.com/SEU-USUARIO

---

# 📄 Licença

Este projeto foi desenvolvido exclusivamente para fins educacionais.

Os personagens, nomes e elementos relacionados a **Invincible** pertencem aos seus respectivos criadores e detentores dos direitos autorais.

Este projeto não possui fins comerciais.
