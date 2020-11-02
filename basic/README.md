# Sistema de Cadastro

Este pequeno sistema faz parte de um teste para verificar o desempenho dos participantes em relação a área de desenvolvimento, principalmente em linguagem PHP.
Trate-se de um sistema de cadastro de médicos e especialidades.

## Começando

### Pré-requisitos (_por questões de facilitação, recomenda-se a instalação do XAMPP mais recente_):

- Apache 2.4.3 (_instalado junto ao XAMPP_)
- PHP 7.4.7 (_instalado junto ao XAMPP_)
- PostgreSQL 13.0.1
- Composer 2.0.4

### Instalação:
_Obs.: o passo-a-passo da instalação está assumindo que a instalação do XAMPP foi feita._

- Após a instalação do XAMPP e PostgreSQL será necessário baixar o repositório do sistema disponível no GitHub (https://github.com/rafael-derner/projetophp).
- Descompacte o arquivo no caminho de sua preferência e faça a criação de um virtual host (https://hcode.com.br/blog/como-configurar-apache-virtual-hosts-no-windows)
- Após a instalação do PostgreSQL, abra o aplicativo pgAdmin, crie um novo Server, crie um novo Database com o nome "banco_projeto_php" e importe o arquivo com extensão .sql, que também está disponível no GitHub (usuário e senha no arquivo db.php em "%systemdrive%\provaphp\basic\config", caso necessário).
- Faça a instalação do Composer (https://getcomposer.org/download/). Vá até a pasta basic, abra o Composer e digite "composer install" 

## Execução:

- Inicie o serviço do Apache através do painel de controle do XAMPP.
- No seu navegador digite localhost ou o endereço do virtual host.

_Obs.:Caso ao acessar a página você se depare com o erro "Database Exception – yii\db\Exception could not find driver" vá até "%systemdrive%\xampp\php", abra o arquivo php.ini e descomente, ou adicione, as linhas "extension=pdo_pgsql" e "extension=pgsql"_ 

### Construído com:

- Sublime Text 3, editor de código-fonte.
- Yii 2 Framework, framework utilizado.

## Autores:

- Rafael Derner de Oliveira, desenvolvimento, documentação e testes

### Agradecimentos:

- João Vitor Araújo Porto
- Josi Minozzo
- Lielison Ramos
- Claudio Gomes Filho
