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

2. Com o git instalado na maquina clique com o botão direito em qualquer lugar e selecione _Git Bash Here_.

3. copie o comando a seguir e cole na janela cmd.

```
git clone https://github.com/Felipe-Dumont/form-Unicampo.git
```

4. Espere o download do projeto ser feito e logo apos utilize o camando _cd form-unicampo_ para entrar na pasta do porjeto.

5. Depois dentro do projeto, duplique o arquivo _.env.example_ e renomeie para _.env_ (**Para que seja possivel renomeiar abra o prompt de Comando e utilize o comando "ren .env.example .env"**). Abra ele em seguida com um editor de texto de sua preferencia, para configurar os parametros do banco de dados (Lembrando que o banco de dados usado é o MySql).

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=
```

7. Digite o comando _composer install_ no cmd. Ele vai instalar todos os pacotes do projeto.

8. Digite o comando _php artisan key:generate_. Esse vai criar uma chave para sua aplicação, sem isso o Laravel não funciona.

9. Utilize o comando abaixo no cmd aberto para rodas as _migrations_ do projeto (as migrations é onde esta a configuração para criar e configurar todas tabelas no banco de dados).

```
php artisan migrate:fresh
```

10. Agora basta utilizar o comando abaixo no cmd para rodar um servidor local na porta _8000_

```
php artisan serve
```

Segue um script para popular o banco de dados.

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
