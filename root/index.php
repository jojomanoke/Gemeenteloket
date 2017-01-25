<?php

include'inc/head.php';

include'inc/navbar.php';


if (!empty($_GET['page'])) {
  switch ($_GET['page']) {
    default;
    include('inc/homepage.php');
    break;

    case 'inc/homepage.php';
    include ('inc/homepage.php');
    break;
    
    case'inc/contact.php';
    include('inc/contact.php');
    break;

    case 'inc/about.php';
    include ('inc/about.php');
    break;  

    case 'inc/bedankt.php';
    include ('inc/bedankt.php');
    break;

    case 'inc/kapvergunning.php';
    include ('inc/kapvergunning.php');
    break;

    case 'inc/bedankt.php';
    include ('inc/bedankt.php');
    break;

    case 'inc/bedankt.php';
    include ('inc/bedankt.php');
    break;

    case 'inc/bedankt.php';
    include ('inc/bedankt.php');
    break;

    case 'inc/bedankt.php';
    include ('inc/bedankt.php');
    break;
  }
}
else {
  include ('inc/homepage.php');
}

//include'inc/homepage.php';

include 'inc/footer.php';

?>