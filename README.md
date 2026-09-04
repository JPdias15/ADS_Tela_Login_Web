# ADS_Tela_Login_Web

# 🔐 Sistema de Login Web em PHP

Sistema web desenvolvido em **PHP** com autenticação de usuários, controle de sessão e integração com banco de dados **MySQL**.

O projeto foi desenvolvido como prática de **Programação Web**, utilizando uma estrutura simples para demonstrar o funcionamento de um sistema de login, consulta de usuários no banco de dados, cadastro, listagem e encerramento de sessão.

## 📋 Sobre o projeto

A aplicação possui uma tela inicial de login, na qual o usuário informa seu **login** e **senha**. As informações são verificadas no banco de dados e, quando válidas, o usuário é direcionado para o menu principal.

O sistema também conta com:

* 🔑 Autenticação de usuários;
* 👤 Controle de sessão com `$_SESSION`;
* 🚪 Logout;
* 🗄️ Integração com MySQL;
* ➕ Cadastro de novos usuários;
* 📄 Listagem dos usuários cadastrados;
* 🎨 Estilização das páginas com CSS;
* ⚠️ Mensagem de erro para login ou senha incorretos.

## 🛠️ Tecnologias utilizadas

* **PHP**
* **MySQL**
* **HTML**
* **CSS**
* **Apache**
* **XAMPP** (para ambiente local)
* **NetBeans** ou outro editor de código

## 📁 Estrutura do projeto

```text
/
├── index.php
├── menu.php
├── logout.php
├── database.php
├── usuario.php
├── listar.php
├── cadastrar.php
└── login.css
```

### Principais arquivos

| Arquivo         | Função                                          |
| --------------- | ----------------------------------------------- |
| `index.php`     | Página inicial com formulário de login          |
| `menu.php`      | Menu principal após a autenticação              |
| `logout.php`    | Encerra a sessão do usuário                     |
| `database.php`  | Responsável pela conexão com o banco de dados   |
| `usuario.php`   | Classe responsável pelas informações do usuário |
| `listar.php`    | Lista os usuários cadastrados                   |
| `cadastrar.php` | Permite cadastrar novos usuários                |
| `login.css`     | Define a aparência das páginas                  |

## 🗄️ Banco de dados

O projeto utiliza o banco de dados **MySQL**. Para criar a estrutura utilizada pela aplicação, execute:

```sql
CREATE DATABASE pweb;

USE pweb;

CREATE TABLE usuario (
    cod INTEGER PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(50),
    login VARCHAR(20),
    senha VARCHAR(32)
);
```

### Usuário para teste

```sql
INSERT INTO usuario (login, senha, nome)
VALUES ('teste', 'teste', 'Usuário Teste');
```

## 🚀 Como executar

### 1. Instale e configure o ambiente

Instale um ambiente com **Apache e PHP**, como o XAMPP, e tenha o MySQL disponível.

### 2. Configure o projeto

Coloque os arquivos do projeto na pasta do servidor web do Apache.

Exemplo:

```text
C:/xampp/htdocs/LoginWeb/
```

### 3. Crie o banco de dados

Abra o MySQL ou o phpMyAdmin e execute o script apresentado na seção **Banco de dados**.

### 4. Configure a conexão

Verifique o arquivo:

```text
database.php
```

e configure os dados de conexão do MySQL conforme o ambiente utilizado.

### 5. Execute o projeto

Com o Apache e o MySQL em execução, abra:

```text
http://localhost/LoginWeb/
```

### 6. Faça o login

Utilize um dos usuários cadastrados no banco de dados.

Após uma autenticação válida, o sistema deverá direcionar o usuário para o menu principal. Caso as informações estejam incorretas, será apresentada uma mensagem de erro na tela de login.

## 🔄 Funcionamento

```text
┌──────────────┐
│   index.php  │
│    Login     │
└──────┬───────┘
       │
       ▼
┌──────────────────┐
│ Verificação dos  │
│ dados do usuário │
└────────┬─────────┘
         │
    ┌────┴────┐
    │         │
  Válido   Inválido
    │         │
    ▼         ▼
┌─────────┐  ┌──────────────┐
│ menu.php│  │ Mensagem de  │
│         │  │ erro no login│
└────┬────┘  └──────────────┘
     │
     ├───────────────┐
     ▼               ▼
┌────────────┐  ┌─────────────┐
│ cadastrar  │  │   listar    │
│ usuário    │  │  usuários   │
└────────────┘  └─────────────┘
     │
     ▼
┌────────────┐
│ logout.php │
│ Encerrar   │
│ sessão     │
└────────────┘
```

## 🎨 Interface

A aplicação utiliza um arquivo CSS externo, `login.css`, responsável pela padronização visual das páginas do sistema.

O CSS é incluído nas páginas por meio da tag:

```html
<link rel="stylesheet" type="text/css" href="login.css">
```

## 📚 Objetivo acadêmico

Este projeto tem como objetivo colocar em prática conceitos fundamentais de desenvolvimento web, incluindo:

* Desenvolvimento de páginas em PHP;
* Formulários HTML;
* Controle de sessões;
* Autenticação de usuários;
* Comunicação entre PHP e MySQL;
* Operações básicas em banco de dados;
* Organização de arquivos em uma aplicação web;
* Utilização de CSS para estilização.

## ⚠️ Observação

Este projeto possui finalidade **acadêmica e didática**. A estrutura apresentada serve como exemplo de implementação de um sistema de login com PHP e MySQL e pode ser aprimorada para utilização em ambientes reais, especialmente em aspectos relacionados à segurança, como armazenamento seguro de senhas, validação de entradas e proteção contra ataques.

## 👨‍💻 Autor

**João Pedro Dias de Farias**

Projeto desenvolvido para estudos de **Programação Web**.

---

⭐ Se este projeto foi útil para seus estudos, considere deixar uma estrela no repositório!
