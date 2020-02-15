#Formulario de cadastro

### DESCRIÇÂO :

#### Projeto usando Framework Laravel, com HTML, CSS, JS, JQUERY, BOOTSTRAP.

#### formulario com verificação de input vazio no front-end, e verificação de padão no back-end

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

#### Baixar e instalar

1. PHP 7.2 ou + (Eu Recomendo a utilização do XAMPP para facilitar o processo)(será necessario ter o php instalado no path - para verificar se no seu já esta, utilize o comando 'php -version' Para saber se ja esta configurado corretamente).
2. GIT
3. COMPOSER

#### PRIMEIROS PASSOS

1. Navegue em seus diretorios até a pasta que deseja criar o projeto.
2. Com o git instalado na maquina clique com o botão direito em qualquer lugar e selecione 'Git Bash Here'
3. copie o comando a seguir e cole na janela cmd

```
git clone https://github.com/Felipe-Dumont/form-Unicampo.git
```

4. Espere o download do projeto ser feito e logo apos utilize o camando 'cd form-unicampo' para entrar na pasta do porjeto
5. Você precisará de um editor de codigo para editar o arquivo .env, para configurar os parametros do banco de dados (Lembrando que o banco de dados usado é o MySql).

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nomeDoBancoDeDados
DB_USERNAME=root
DB_PASSWORD=
```

6.Depois de configurar os parametros para acessar o banco de dados local, Utilize o comando a baixo no cmd aberto para rodas as 'migrations' do projeto (as migrations é onde esta a configuração para criar e configurar todas tabelas no banco de dados).

```
php artisan migration fresh
```

7. Depois utlize o script do link ----- para popular as tabelas do banco de dados com 50 registros.
8. Agora basta utilizar o comando abaixo no cmd para rodar um servidor local na porta '8000'

```
php artisan serve
```

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
