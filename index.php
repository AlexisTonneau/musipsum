<?php

define('URL',str_replace("index.php","",isset($_SERVER['HTTPS']) ? "https" : "http"."://$_SERVER[HTTP_HOST]$_SERVER[PHP_SELF]"));

// Require les 3 routeurs
require_once('francais/controllers/FrRouter.php');
require_once('espanol/controllers/EsRouter.php');
require_once('english/controllers/EnRouter.php');

require_once('english/models/Language.php');

Language::choosePageLanguage();
