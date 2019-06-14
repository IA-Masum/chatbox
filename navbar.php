<?php

  if(isset($_GET['p'])){
    $active = $_GET['p'];
  }else{
    $active = 'profile';
  }

?>

<div class="bg-light py-3" >
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
  <a class="navbar-brand" href="#">ChatBox</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item <?php $active == 'profile'? print 'active': ''?>">
          <a class="nav-link" href="main.php?p=profile">Profile</a>
        </li>
        <li class="nav-item <?php $active == 'message'? print 'active': ''?>">
          <a class="nav-link" href="main.php?p=message">Message</a>
        </li>
        <li class="nav-item <?php $active == 'requests'? print 'active': ''?>">
          <a class="nav-link" href="main.php?p=requests">Requests</a>
        </li>
        <li class="nav-item <?php $active == 'friends'? print 'active': ''?>">
          <a class="nav-link" href="main.php?p=friends">Friends</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>