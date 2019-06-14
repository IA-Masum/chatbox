<?php require_once 'header.php'?>
<?php require_once 'navbar.php'?>

  <hr>
  <?php 

    switch($active){
      case 'message':
        require_once 'message.php';
      break;
      case 'requests':
        require_once 'requests.php';
      break;
      case 'friends':
        require_once 'friends.php';
      break;
      default:
        require_once 'profile.php';
      break;
    }
  
  ?>
<?php require_once 'footer.php'?>