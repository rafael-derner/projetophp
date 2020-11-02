# Sistema de Cadastro

Este pequeno sistema faz parte de um teste para verificar o desempenho dos participantes em relação a área de desenvolvimento, principalmente em linguagem PHP.
Trate-se de um sistema de cadastro de médicos e especialidades.

## Começando

### Pré-requisitos (_por questões de facilitação, recomenda-se a instalação do XAMPP mais recente_):

- Apache 2.4.3 (_instalado junto ao XAMPP_)
- PHP 7.4.7 (_instalado junto ao XAMPP_)
- PostgreSQL 13.0.1

### Instalação:
_Obs.: o passo-a-passo da instalação está assumindo que a instalação do XAMPP foi feita._

- Após a instalação do XAMPP e PostgreSQL será necessário baixar o repositório do sistema disponível no GitHub (https://github.com/rafael-derner/projetophp).
- Descompacte o arquivo dentro da pasta htdocs (em %systemdrive%\xampp\) **ou** diretamente no caminho de sua preferência (caso seja salvo em outro lugar que não seja a pasta htdocs será necessário a criação de um virtualhost; passo-a-passo ao final desta lista).
- Após a instalação do PostgreSQL, abra o aplicativo pgAdmin e importe o arquivo com extensão .sql, que também está disponível no GitHub (usuário e senha no arquivo db.php no caminho basic\config, caso necessário).

_Para a criação de um virtual host é necessário configurar o arquivo hosts (em %systemdrive%\windows\system32\drivers\etc) adicionando a linha "127.0.0.1  'o seu endereço aqui'". Ir no arquivo httpd-vhosts.conf (em %systemdrive%\xampp\apache\conf\extra) e adicionar as configurações de virtualhost utilizando o mesmo endereço posto no arquivo hosts_.


## Execução:

- Inicie o serviço do Apache através do painel de controle do XAMPP.
- No seu navegador digite localhost ou o endereço do virtual host.

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
