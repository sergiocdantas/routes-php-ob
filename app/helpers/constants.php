<?php

// FOLDERS
define('CONTROLLER_PATH', "app\\controllers\\"); // caminho dos controles
define('ROOT', dirname(__FILE__, 3)); // raiz do projeto
define('VIEWS', ROOT . '/app/views/');  // caminho das views

// DATABASE
// Conexão com o Banco de dados 
define('DB_HOST', '162.241.79.62');
define('DB_PORT', '3306');
define('DB_NAME', 'ogeogebr_sistema');
define('DB_USER', 'ogeogebr_sistema');
define('DB_PASSWORD', 'xrta324164');

// Tabelas
define('USER_TABLE', 'opt_cadastro');
define('COLE_TABLE', 'opt_colegiado');
define('DISC_TABLE', 'opt_disciplina');
define('DIST_TABLE', 'opt_distribuicao');
define('FUNC_TABLE', 'opt_funcao');
define('INSC_TABLE', 'opt_inscricao');

// SYSTEM's URL
define('URL_PRODUCTION', 'https://ogeogebra.com.br/teste/');
define('URL_DEVELOPMENT', 'http://localhost/php-pro-ob');