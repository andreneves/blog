# Como clonar e instalar o sistema em outra máquina
Você precisa ter uma conta ativa no GitHub (https://github.com/)

## Pré-requisito:

- Xampp (https://www.apachefriends.org/)
- Mysql Workbench (https://dev.mysql.com/downloads/workbench/)
- Git (https://git-scm.com/)
- GitHub Desktop (https://desktop.github.com/)
- Composer (https://getcomposer.org/download/)
- Visual Studio Code (https://code.visualstudio.com/)
- Instalar no Visual Studio Code a extensão Laravel Extension Pack (https://marketplace.visualstudio.com/items?itemName=onecentlin.laravel-extension-pack)
- Instalar no Visual Studio Code a extensão Material Icon Theme (https://marketplace.visualstudio.com/items?itemName=PKief.material-icon-theme)
- Node (https://nodejs.org/)
OBS.: Não esqueça de reiniciar o computador

## 1) Clonar o repositório do GitHub
Vá até o projeto no GitHub que deseja clonar e clique no botão verde escrito "<> Code" em seguida vai abrir um submenu e você deve clicar em "Open with GitHub Desktop".
O GitHub Desktop vai abrir, em sua máquina, perguntando onde deve clonar o repositório. Clone no diretório "c:/xampp/htdocs/"

## 2) Abra o projeto no Visual Studio Code

## 3) Crie o arquivo .env com base no arquivo .env.example
Abra o terminal e execute o código entre aspas "copy .env.example .env"

## 4) Mude o nome do banco no arquivo .env
Altere esta parte do código para ficar igual esta abaixo.
-  DB_CONNECTION=mysql
-  DB_HOST=127.0.0.1
-  DB_PORT=3306
-  DB_DATABASE=blog
-  DB_USERNAME=root
-  DB_PASSWORD=

## 5) Configure o email (Mailpit)
Se você estiver usando o Laragon, o Mailpit já está incluído. Configure as seguintes variáveis no arquivo .env:
-  MAIL_MAILER=smtp
-  MAIL_HOST=127.0.0.1
-  MAIL_PORT=1025
-  MAIL_USERNAME=null
-  MAIL_PASSWORD=null
-  MAIL_ENCRYPTION=null
-  MAIL_FROM_ADDRESS="noreply@blog.local"
-  MAIL_FROM_NAME="${APP_NAME}"

Para acessar o Mailpit e visualizar os emails enviados pelo sistema, acesse: http://localhost:8025

## 6) Instale as depedências
Abra o terminal e execute o código entre aspas "composer install"

## 7) Gere a APP_KEY (chave de criptografia)
Abra o terminal e execute o código entre aspas "php artisan key:generate"

## 8) Rode as migrations (criação das tabelas)
Abra o terminal e execute o código entre aspas "php artisan migrate"

## 9) Rode os SEEDs (inserção dos dados nas tabelas)
Abra o terminal e execute o código entre aspas "php artisan db:seed"

## 10) Testar o Mailpit
Após configurar tudo, você pode testar o envio de emails de várias formas:

### Teste via Navegador (Interface Web)
Acesse: `http://localhost/blog/email-test-form`
- Teste rápido: envio de email predefinido
- Teste personalizado: envio com dados customizados

### Teste via Terminal (Comando Artisan)
```bash
# Teste básico
php artisan email:test

# Teste com email personalizado
php artisan email:test seu@email.com

# Teste com assunto e mensagem personalizados
php artisan email:test seu@email.com --subject="Meu Teste" --message="Minha mensagem personalizada"
```

### Teste via Rota (API)
Acesse diretamente: `http://localhost/blog/email-test`

Todos os emails enviados aparecerão no Mailpit: http://localhost:8025
