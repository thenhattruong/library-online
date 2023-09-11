<?php 
require_once("include/initialize.php");   
$content='home.php';
$view = (isset($_GET['q']) && $_GET['q'] != '') ? $_GET['q'] : '';
switch ($view) { 
  case 'find':
    $title = "Tìm sách";
    $content = 'filterBooks.php';
   # code...
   break; 
  case 'books':
    $title = "Sách";
    $content = 'book.php'; 
   break;


  case 'bookdetails':
    $title = "Sách";
    $content = 'single-view.php'; 
   break;  

  case 'borrow':
    $title = "Mượn sách";
    $content = 'borrow.php'; 
   break; 


  case 'checkout':
    $title = "Thủ tục thanh toán";
    $content = 'checkout.php'; 
   break; 



  case 'login':
    $title = "Đăng nhập";
    $content = 'login.php'; 
   break; 


  case 'logout':
    $title = "Đăng xuất";
    $content = 'logout.php'; 
   break;

  case 'about':
    $title = "Về chúng tôi";
    $content = 'about.php';
   # code...
   break; 
   
  case 'contact':
    $title = "Liên hệ";
    $content = 'contact.php';
   # code...
   break; 
  default :
    $title = "";
    $content    = 'home.php';
}
require_once("theme/templates.php");
?>