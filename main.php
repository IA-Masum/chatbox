<?php require_once 'header.php'?>

<div class="bg-light py-3" >
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
  <a class="navbar-brand" href="#">ChatBox</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="#">Message</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Requests</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Friends</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </div>
  </nav>
  <hr>
<div class="container">
  <div class="row">

    <div class="col-sm-3" style="height: 81vh; overflow: auto">
      <h5>Messages</h5>
      <hr>
      <div class="border rounded border-danger p-2 my-1">
        <h6><img class="mr-3 rounded-circle" width="30px" src="user.jpg">Imran <small>Hello</small></h6>
      </div>
      <div class="border rounded border-danger p-2 my-1">
        <h6><img class="mr-3 rounded-circle" width="30px" src="user.jpg">Imran <small>Hello</small></h6>
      </div>
    </div>
    <div class="col-sm-9" style="height: 81vh; overflow: hidden">
      <div>
        <h5>Imran</h5>
      </div>
      <div class="p-2 rounded message-box">
        <div class="bg-primary rounded p-3 my-2">
          <p>Hello</p>
        </div>
        <div class="bg-secondary text-white rounded p-3 my-2 text-right">
          <p>Hi!!!</p>
        </div>
      </div>
      <div>
        <form class="my-2 mr-1 p-2 my-lg-0">
          <div class="row">
            <div class="col-sm-11">
              <textarea class="form-control mr-2" rows="1" col="100"></textarea>
            </div>
            <div class="col-sm-1">
              <button class="btn btn-sm btn-success my-2 my-sm-0" type="submit">Send</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</div>



<?php require_once 'footer.php'?>