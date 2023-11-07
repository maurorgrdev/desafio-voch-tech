<p align="center">
  <a href="" rel="noopener">
 <img width=200px height=200px src="https://i.imgur.com/6wj0hh6.jpg" alt="Project logo"></a>
</p>

<h3 align="center">Desafio Voch Tech - Api</h3>

<div align="center">

[![Status](https://img.shields.io/badge/status-active-success.svg)]()

</div>

---

<p align="center"> Projeto desenvolvido para o desafio da Voch Tech que consiste no cadastro, edição, visualização e exclusão de unidades, colaboradoes e cargos, bem como a geração de relatórios.
    <br> 
</p>

## 📝 Índice

- [Getting Started](#getting_started)
- [Authors](#authors)


## 🏁 Getting Started <a name = "getting_started"></a>

Instruções para ter uma cópia do repositório.

### Pré-requisitos

-   **PHP - Supported Versions:** >= 7.3 <= 8.0
-   **Laravel - 8
-   **Database:** MySQL
-   **Run-time environment:**:  Composer & Laravel Framework

### Instalação

- Clone

O repositório onde se encontra o código fonte da aplicação está na branch **master**. Logo:

```bash
$ git clone https://github.com/maurorgrdev/desafio-voch-tech
$ cd desafio-voch-tech
$ git checkout master
```

É necessário criar a base de dados manualmente por meio do seu MySQL. O nome deverá ser `voch-tech`.

-   **Back-end**

Estas ações devem ser realizadas dentro da pasta /back-end .

- Configuração

Faça uma cópia do arquivo env.example e o renomeie para .env <br>
Em seguida altere as variáveis de acesso ao banco de dados com suas credênciais

```bash
APP_NAME=VochTech

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=voch_tech
DB_USERNAME=root
DB_PASSWORD=root
```

Instale as dependências via composer e gere sua chave: 

```bash
$ composer install
$ php artisan key:generate
```

Ainda no terminal execute:
```bash
$ php artisan optimize:clear
$ php artisan optimize
```

Para gerar as tabelas no banco de dados e povoalo, execute os seguintes comandos:
```bash
$ php artisan migrate
$ php artisan db:seed
```

Será gerado um usuário com as seguintes credênciais:

E por fim inicie a API:
```bash
$ php artisan serve --port=8000
```

Pronto! A API já está funcionando na porta indicada.

Caso queira listar as rotas disponíveis, ainda dentro da pasta /back-end, no terminal de comando digite:
```bash
$ php artisan route:list
```

## ✍️ Authors <a name = "authors"></a>

- [@maurorgrdev](https://github.com/maurorgrdev) - Developer - mauroroger2020@gmail.com
