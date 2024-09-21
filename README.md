# Instalação para Windows usando WSL2

## 1. Abra o cmd em modo administrador e execute:

```shell
wsl --install -d Ubuntu-24.04
```

Abra o Ubuntu instalado e atualize o sistema:

```shell
sudo apt update && sudo apt upgrade -y
```

Siga com o restante da instalação com os passos a seguir.

# Instalação para Linux

## 1. Clone o repositorio:

```shell
git clone https://github.com/rodrigoelias15/SistemaEval.git
```

## 2. Instale o php e seus módulos:

```shell
sudo apt install php php-mysql php-cli php-xml php-curl php-gd
```

## 3. Instale o composer:

```shell
sudo apt install composer
```

## 4. Instale o banco de dados (mysql):

```shell
sudo apt install mysql-server
```

## 5. Ative os módulos do php, acessando o arquivo php,ini. subistitua o trecho "versão_php" pela versão instalada no sistema:

```shell
sudo nano /etc/php/<versão_php>/apache2/php.ini
```

Apague os ";" dos módulos abaixo para ativá-los: \n
;extension=pdo_mysql \n
;extension=pdo_curl \n
;extension=pdo_gd 

## 6. Reinicie o servidor apache:

```shell
sudo systemctl restart apache2
```

## 7. Crie o banco de dados:

Execute os comandos:

```shell
sudo mysql
```

```shell
CREATE DATABASE rodrigo;
```

```shell
ALTER USER 'rodrigo'@'localhost' IDENTIFIED BY '1234';
```

```shell
GRANT ALL PRIVILEGES ON *.* TO 'rodrigo'@'localhost';
```

```shell
flush privileges;
```

```shell
exit;
```

## 8. Baixe o gerenciador de banco de dados:

Baixe o DBEaver clicando <a href="https://dbeaver.io/download/" target="_blank">aqui</a>.

## 9. Configurando o DBEaver

Acesse o menu Database -> New Database Connection -> MySQL -> Next

Acesse a aba "Driver Properties" e altere o valor do parâmetro "allowPublicKeyRetrieval" para TRUE

Retorne para a aba "Main", preencha os campos mostrados abaixo e clique em "Test Connection" (se o programa oferecer para baixar drivers do mysql, basta aceitar para baixá-los):

Database: rodrigo \n
Username: rodrigo \n
Password: 1234

## 10. Iniciando o projeto:

Abra um terminal na pasta do projeto e execute:

```shell
php artisan migrate
```

```shell
php artisan serve
```

Acesse o link mostrado no terminal (algo como http://127.0.0.1:8000)
