<?php

/*

Pastikan server sudah terinstall webserver (apache, PHP, MYSQL);

============Baru Download ====================
buat lah database terserah namanya
setelah itu  pilih import database, import file Newdatabase.sql di folder ini ke databasenya

setelah itu edit file system.config.php menggunakan notpad++ atau editor lain,

setelah berhasil silahkan buka webya melalui web browser

login dengan username admin password admin
jika berhasil login maka anda akan diarahkan ke setting server set up semuanya diisi seluruhnya
jika gagal login berarti tidak dapat terkoneksi dengan database silahkan teliti kembali, setting di file system.config.php


*/
require_once 'system.medoo.php';

$mikbotamdata = new medoo([
    'database_type' => getenv('DB_TYPE') ?: 'mysql',
    'database_name' => getenv('DB_NAME') ?: 'mikbotam',
    'server' => getenv('DB_HOST') ?: 'localhost',
    'username' => getenv('DB_USER') ?: 'root',
    'password' => getenv('DB_PASS') ?: '',
    'charset' => getenv('DB_CHARSET') ?: 'utf8'
]);
