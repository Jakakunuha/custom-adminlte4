<?php
session_start();

// Unset semua variabel session
$_SESSION = array();

// Jika ingin benar-benar menghapus session, juga hapus cookie session
if (ini_get('session.use_cookies')) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params['path'], $params['domain'],
        $params['secure'], $params['httponly']
    );
}

session_destroy();
header('Location: login.php');
exit();
