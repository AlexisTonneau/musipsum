<?php

define('URL',str_replace("index.php","",isset($_SERVER['HTTPS']) ? "https" : "http"."://$_SERVER[HTTP_HOST]$_SERVER[PHP_SELF]"));

// Require les 3 routeurs
require_once('fr/controllers/FrRouter.php');
require_once('es/controllers/EsRouter.php');
require_once('en/controllers/EnRouter.php');

require_once('fr/models/Language.php');

Language::choosePageLanguage();
