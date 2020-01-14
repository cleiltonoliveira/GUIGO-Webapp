# Guigó WebApp

 Aplicativo web do sistema Guigó

# Organização dos Diretórios

Só explicando cada um dos diretórios do projeto:

* Diretório classes: onde a gente vai ter todas as classes de suporte do nosso projeto

* Diretório config: onde vamos ter as nossas constantes, onde vamos setar o caminho absoluto, o caminho relativo, os dados para acessar o banco de dados

* Diretório controller: que fará as instâncias de todas as nossas classes, de todas as funções do nosso sistema

* Diretório helpers: serão as funções de suporte do nosso sistema
Diretório img: imagens do nosso sistema

* Diretório lib: onde vamos ter o nosso Composer, os nossos Javascripts (stylesheet vai estar aqui também)

* Diretório models: será a interligação com o banco de dados

* Diretório traits: servirão de apoio para as nossas classes

* Diretório views: as página html propriamente ditas

* HTACCESS: para setar as urls amigáveis

* INDEX.PHP: será o nosso dispachante que vai incluir todos os demais arquivos do nosso sistema

# Arquivo HTACCESS

Para fazer a comunicação (reescrita de url com o Apache HTTP Server)

## TraitParseURL
Vai pegar a url digitada, dividi-la pelas barras e vai transforma-la num array, para poder ser trabalhado depois. A TraitParseURL vai servir de apoio para outras classes.

Depois da configuração do arguivo .htaccess, me parece que a aplicação só vai funcionar se todos os diretórios estiverem na pasta raiz (wamp64/www) e não em outro da forma que eu fiz (wamp64/www/guigowebapp)
É isso mesmo, suspeitei desde o princípio 

# Config

Importante parte do sistema: config.php - onde definimos todas as principais constantes do nosso sistema - o que facilita muito a nossa vida. Quando por exemplo temos uma migração do nosso sistema (para um outro domínio) ou outra situação qualquer, com simples alterações no config.php podemos mudar todo o nosso sistema.

caminho da URL: http://;
caminho físico: C:\;

# Classe Despachante 

Esse arquivo dispachante vai pegar o que o usuário digitar na url vai verificar se esse arquivo existe ou se é um diretório e vai acessá-lo e vai incluir dinamicamente este arquivo.

# Classes de Layout

O diretório "views" guarda o front-end do site, para automatizar a escrita dos códigos html dessas páginas, criei a ClassLayout.php com funções que escrevem todo o código do head - mudando apenas as variáveis de título da página, descrição da página e o autor da página, com o meu nome como padrão - e a classe footer - que faz o fechamento das tags "body" e "html".

Para utilizar essas classes nas páginas front-end é preciso colocar em php:

\namespace previamente definido\nome da classe::nomeDaFunção(argumentos);