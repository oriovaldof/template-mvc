<?php
#Arquivos diretorios raizes
$pastaInterna = "";
define('DIRPAGE',"http://{$_SERVER['HTTP_HOST']}/{$pastaInterna}");


//if(substr($_SERVER['DOCUMENT_ROOT'],-1) == '/'){ define('DIRREQ',"{$_SERVER['DOCUMENT_ROOT']}{$pastaInterna}"); }else{ define('DIRREQ',"{$_SERVER['DOCUMENT_ROOT']}/{$pastaInterna}"); }
$dir = str_replace("\\","/",dirname(__DIR__));
if(substr($dir ,-1) == '/'){ define('DIRREQ',"{$dir}{$pastaInterna}"); }else{ define('DIRREQ',"{$dir}/{$pastaInterna}"); }

//var_dump(dirname(__DIR__));
#diretorios especificos
define('DIRIMG',DIRPAGE."assets/img/");
define('DIRCSS',DIRPAGE."assets/css/");
define('DIRJS',DIRPAGE."assets/js/");

#banco dados
define('HOST', "localhost");
define('DB', "sistema_mvc");
define('USER', "root");
define('PASS', "");