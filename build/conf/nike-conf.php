<?php
// This file generated by Propel 1.7.1 convert-conf target
// from XML runtime conf file /home/mauricio/nike/vendor/bin/modeldata/runtime-conf.xml
$conf = array (
  'datasources' => 
  array (
    'nike' => 
    array (
      'adapter' => 'mysql',
      'connection' => 
      array (
        'dsn' => 'mysql:host=localhost;dbname=nike',
        'user' => 'menleal',
        'password' => 'enelreino11',
      ),
    ),
    'default' => 'nike',
  ),
  'generator_version' => '1.7.1',
);
$conf['classmap'] = include(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'classmap-nike-conf.php');
return $conf;