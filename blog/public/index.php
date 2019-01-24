<?php

include '../functions.php';

include '../components/header.php';

// $page = isset($_GET['page']) ? $_GET['page'] : '';

// switch ($page){
//     case '':
//         include '../pages/landingPage.php';
//         break;
//     case 'login':
//         include '../pages/login.php';
//         break;
//     default:
//         include '../pages/404.php';
// }

if (empty($_GET)){
    include '../pages/landingPage.php';
} else if (isset($_GET['login'])){
    include '../pages/login.php';
} else if (isset($_GET['about_us'])) {
    include '../pages/aboutUs.php';
} else {
    include '../pages/404.php';
}


include '../components/footer.php';
