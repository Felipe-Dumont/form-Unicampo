# Formulario de cadastro

### DESCRIÇÂO :

#### Projeto usando Framework Laravel, com HTML, CSS, JS, JQUERY, BOOTSTRAP.

#### formulario com auto complete do endereço com base no CEP, seleciona o tipo de pessoa com base no CPF/CNPJ digitado e verificação de input vazio no front-end, e verificação da regra de negocio no back-end.

### Campos do formulario

-   nome completo
-   data de nascimento
-   tipo pessoa (Fisica/Juridica)
-   CPF/CNPJ
-   email
-   CEP
-   Rua
-   Numero da rua
-   cidade
-   UF

### PASSOS NECESSARIOS PARA QUE POSSA CLONAR O PROJETO E RODAR NA SUA MAQUINA

#### IMPORTANTE - Baixar e instalar

1. PHP >= 7.2.0 (Eu Recomendo a utilização do XAMPP para facilitar o processo)(será necessario ter o php instalado no path - para verificar se no seu já esta, utilize o comando 'php -version' Para saber se ja esta configurado corretamente).
2. GIT
3. COMPOSER

**Observação - Lembre de ligar o servidor do mysql com o xampp. O do apache não é requerido!**

#### PRIMEIROS PASSOS

1. Navegue em seus diretorios até a pasta que deseja criar o projeto.

2. Com o git instalado na maquina clique com o botão direito em qualquer lugar e selecione `Git Bash Here`.

3. copie o comando a seguir e cole na janela cmd.

```
git clone https://github.com/Felipe-Dumont/form-Unicampo.git
```

4. Espere o download do projeto ser feito e logo apos utilize o camando `cd form-unicampo` para entrar na pasta do porjeto.

5. Depois dentro do projeto, duplique o arquivo `.env.example` e renomeie para `.env` (**Para que seja possivel renomeiar abra o prompt de Comando e utilize o comando "ren .env.example .env"**). Abra ele em seguida com um editor de texto de sua preferencia, para configurar os parametros do banco de dados (Lembrando que o banco de dados usado é o MySql).

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=
```

7. Digite o comando `composer install` no cmd. Ele vai instalar todos os pacotes do projeto.

8. Digite o comando `php artisan key:generate`. Esse vai criar uma chave para sua aplicação, sem isso o Laravel não funciona.

9. Utilize o comando abaixo no cmd aberto para rodas as _migrations_ do projeto (as migrations é onde esta a configuração para criar e configurar todas tabelas no banco de dados).

```
php artisan migrate
```

10. Agora basta utilizar o comando abaixo no cmd para rodar um servidor local na porta _8000_

```
php artisan serve
```

### Segue um script para popular o banco de dados. [Script thirty contacts](https://github.com/Felipe-Dumont/form-Unicampo/blob/master/populacaoBD/thirty_bd_contacts.sql).

## Documentação API

##### usuario

-   `http://127.0.0.1:8000/api/user` - (_VERBO GET_) - Lista todos os usuarios.
-   `http://127.0.0.1:8000/api/user/1` - (_VERBO GET_) - Lista Apenas o usuario com id igual 1.
-   `http://127.0.0.1:8000/api/user?fullname=Nome Completo&birth=2000-02-08&kindperson=fisica&cpf=222.111.111-11&cnpj=--&email=email123@teste.com/` - (_VERBO POST_) - Cria um novo registro de usuario. _Os parametros são: **fullname, birth, kindperson, cpf, cnpj, email**_
-   `http://127.0.0.1:8000/api/user/1?fullname=mudando o nome` - (_VERBO PUT_) - Fazer alterações nos dados do usuario já existente. _**Qualquer parametro pode ser passo e mudado**_.
-   `http://127.0.0.1:8000/api/user/1` - (_VERBO DELETE_) - Deleta o usuario com id igual a 1.

##### Endereço

-   `http://127.0.0.1:8000/api/address` - (_VERBO GET_) - Lista todos os endereços.
-   `http://127.0.0.1:8000/api/address/1` - (_VERBO GET_) - Lista Apenas o endereço com id igual 1.
-   `http://127.0.0.1:8000/api/address?iduser=1&cep=01001001&street=Praça da Sé&number=10&state=SP` - (_VERBO POST_) - Cria um novo registro de endereço. _Os parametros são: **iduser(\*id de um usuario ja existente), cep, street, number, state**_
-   `http://127.0.0.1:8000/api/address/1?street=Dario Veloso` - (_VERBO PUT_) - Fazer alterações nos dados do endereço já existente. _**Qualquer parametro pode ser passo e mudado**_.
-   `http://127.0.0.1:8000/api/address/1` - (_VERBO DELETE_) - Deleta o registro de endereço com id igual a 1.

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
