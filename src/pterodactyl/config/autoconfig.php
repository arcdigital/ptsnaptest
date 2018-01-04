<?php

$snap_name = getenv('SNAP_NAME');

$data_path = '/var/snap/'.$snap_name.'/current';

$database_password = trim(file_get_contents($data_path . '/mysql/pterodactyl_password'));

$AUTOCONFIG = array(
'directory' => getenv('PTERODACTYL_DATA_DIR'),

'dbtype' => 'mysql',

'dbhost' => 'localhost:'.getenv('MYSQL_SOCKET'),

'dbname' => 'pterodactyl',

'dbuser' => 'pterodactyl',

'dbpass' => $database_password,
);
