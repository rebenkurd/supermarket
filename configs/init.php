<?php

define('DS',DIRECTORY_SEPARATOR);

define('SITE_ROOT','C:'.DS.'xampp'.DS.'htdocs'.DS.'supermarket');

define('INCLUDES_PATH',SITE_ROOT.DS.'includes');



require_once("constants.php");
require_once("class/db_object.php");
require_once("class/database.php");
require_once("class/user.php");
require_once("class/session.php");
require_once("class/functions.php");

?>