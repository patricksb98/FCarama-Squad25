<h1 align="center"><img src="public/img/Group_25.png"></h1>

<p align="center">Aplicação web desenvolvida para oferecer de forma simples o angendamento para usar os escritórios da FCarama. </p>

<p align="center">
  <a href="#computer-sobre-o-projeto">Sobre o Projeto</a> •
  <a href="#white_check_mark-features">Features</a> •
  <a href="#books-como-executar">Como executar</a> •
  <a href="#tecnologias">Tecnologias</a> •
  <a href="#Equipe">Equipe</a> •
</p>

---

## :computer: Sobre o projeto

Com o ínicio da pandemia, muitas empresas tiveram que adotar o sistema de home office, e não foi diferente na FCamara. 

No cenário atual, já faz sentido a volta controlada aos escritórios, e o Encontro Dos Laranjas surgiu para auxiliar os consultores da FCamara em uma volta segura.

O Encontro dos Laranjas é uma aplicação web que vai auxiliar os consultores a agendarem sua volta ao escritório de forma simples, em menos de 30 segundos a sua estação de trabalho já está reservada, e claro, seguindo todos os protocolos de distanciamento social.

Projeto desenvolvido durante o **PROGRAMA DE FORMAÇÃO SEASON 2** oferecido pelo Grupo FCamara.

---
## :white_check_mark: Features
- [x] Login de usuário
- [x] Reservar uma estação de trabalho
- [x] Visualizar reservas ativas
- [x] Cancelar reservas ativas
---
## :books: Como executar

### :memo: Pré-requisitos

Antes de começar, você vai precisar ter instalado em sua máquina as seguintes ferramentas:
[PHP](https://www.php.net), [MySQL](https://www.mysql.com) (Você pode instalar os dois juntos
utilizando o [XAMPP](https://www.apachefriends.org/pt_br/index.html), [Composer](https://getcomposer.org) (ferramenta de gerenciamento de dependências do PHP).
Além disto é bom ter um editor para trabalhar com o código como [VSCode](https://code.visualstudio.com/)


### 🎲 Rodando o projeto

```bash
# Clone este repositório
$ git clone <https://github.com/patricksb98/FCarama-Squad25>

# Acesse a pasta do projeto no terminal/cmd
$ cd Squad25

# Rodar o composer para baixar as dependências do projeto (pode demorar alguns minutos).
$ composer install

# Digite no terminal
$ copy .env.example .env

# Digite no terminal
$ php artisan key:generate

# Configurando o banco de dados (Arquivo .env)

DB_CONNECTION=mysql
DB_HOST=127.0.0.1 ("Endereço do seu banco de dados")
DB_PORT=3306 ("Porta usada para o banco de dados")
DB_DATABASE=fcamara ("Nome do Schema criado")
DB_USERNAME=root ("Seu usuário)
DB_PASSWORD= ??? ("Sua senha)

# Ainda no arquivo .env colar o bloco abaixo na configuração de e-mail (para poder testar nosso sistema de 
envio de email de confirmação).

MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=encontrodoslaranjas@gmail.com
MAIL_PASSWORD=01015151a
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=teste@teste.com
MAIL_FROM_NAME=EncontroDosLaranjas

# Nós seguimos do principio que estamos desenvolvendo uma aplicação para a FCamara, então não criamos um 
cadastro de usuários, visto que os consultores provavelmente já tem os seus dados de acesso para os sistemas
da FCamara. Então para meios de teste, favor ir no diretório database/seeders e abrir o arquivo
ConsultorSeeder.php e trocar os dados para os seus dados pessoais (principalmente o e-mail para testar o 
sistema de envio de e-mails)

# Após seguir todos os passos acima, digitar o seguinte comando no terminal (para criar as tabelas e
 relacionamentos do DB)
$ php artisan migrate

# Digitar no terminal (para popular as tabelas)
$ php artisan db:seed

# Por fim, digitar no terminal
$ php artisan serve

# O servidor iniciará na porta:8000 - acesse http://localhost:8000
```
---
## 🛠 Tecnologias

As seguintes ferramentas foram usadas na construção do projeto:

- [PHP](https://www.php.net)
- [Laravel](https://laravel.com)
- [HTML5](https://developer.mozilla.org/pt-BR/docs/Web/HTML)
- [CSS3](https://developer.mozilla.org/pt-BR/docs/Web/CSS)
- [JavaScript](https://developer.mozilla.org/pt-BR/docs/Web/JavaScript)
-------





