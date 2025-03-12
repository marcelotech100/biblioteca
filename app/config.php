<?php
// Cria uma instãncia do dotenv apontando para o diretório onde está o .env
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

// Acessando as variáveis por meio de $_ENV ou pela função getenv()
define('MYSQL_HOST',     $_ENV['MYSQL_HOST']);
define('MYSQL_DATABASE', $_ENV['MYSQL_DATABASE']);
define('MYSQL_USERNAME', $_ENV['MYSQL_USERNAME']);
define('MYSQL_PASSWORD', $_ENV['MYSQL_PASSWORD']);
define('MYSQL_AES_KEY',  $_ENV['MYSQL_AES_KEY']);
define('OPENSSL_KEY',    $_ENV['OPENSSL_KEY']);
define('OPENSSL_IV',     $_ENV['OPENSSL_IV']);