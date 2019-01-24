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
    include '../pages/home.php';
} else if (isset($_GET['articles'])){
    include '../pages/articles.php';
} else if (isset($_GET['chat'])) {
    include '../pages/chat.php';
} else if (isset($_GET['register'])) {
    include '../pages/register.php';
} else if (isset($_GET['about_us'])) {
    include '../pages/aboutUs.php';
} else if (isset($_GET['article1'])) {
    include '../pages/article1.php';
} else {
    include '../pages/404.php';
}


include '../components/footer.php';
