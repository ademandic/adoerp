<?php
/**
 * Author: Adem Andiç
 * OOP-MVC ERP Uygulaması
 */

ob_start();
session_set_cookie_params(0);
session_start();
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);

require __DIR__ . '/defs.php';
require __DIR__ . '/database.php';
require __DIR__ . '/model.php';
require __DIR__ . '/controller.php';
require __DIR__ . '/route.php';

# Login Kontrolü ve ataması yapılıyor
$login = $_SESSION['login'] ?? false;
$loginInfo = $login ? (object)$_SESSION['userinfo'] : null;

# Route işlemleri logine bağlı yapılıyor
if(!$login)
{
    Route::run('/', 'login/index');
    Route::run('/login/error', 'login/error');
    Route::run('/login', 'login/log_in', 'post');
}
else
{
    Route::run('/', 'home/index');
    Route::run('/home', 'home/index');
    Route::run('/finance', 'finance/index');
    Route::run('/finance/accounts', 'finance/accounts');
    
    Route::run('/logout', function()
    {
        session_destroy();
        header('Location:' . URL_PREFIX . '/');
    });
}

ob_end_flush();
?>