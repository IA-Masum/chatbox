<?php require_once 'header.php'?>
<div class="d-flex justify-content-center">
  <div class="box" style="width: 450px;">
    <h1 class="title  text-center">Register</h1>
    <hr>
    <form onsubmit="return false;" autocomplete="off">
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" placeholder="Enter Your Name">
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" placeholder="Email">
      </div>
      <div>
        Gender :
        <div class="form-check ml-5">
          <input class="form-check-input" type="radio" id="male" value="Male">
          <label class="form-check-label" for="male">
            Male
          </label>
        </div>
        <div class="form-check ml-5">
          <input class="form-check-input" type="radio" id="female" value="Female">
          <label class="form-check-label" for="female">
            Female
          </label>
        </div>
      </div>

      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" placeholder="password">
      </div>
      <div class="form-group">
        <label for="password">Confirm Password</label>
        <input type="password" class="form-control" id="cpassword" autocomplete='no' placeholder="Confirme Password">
      </div>
      <div class="form-group">
        <label for="name">Sequrity Question</label>
        <input type="text" class="form-control" id="sques" placeholder="Sequrity Question">
      </div>
      <div class="form-group">
        <label for="name">Sequrity Answer</label>
        <input type="text" class="form-control" id="sans" placeholder="Sequrity Answer">
      </div>
      <div class="form-check mb-3">
        <input type="checkbox" class="form-check-input" id="trms">
        <label class="form-check-label" for="trms">Agree With Terms & Conditions</label>
      </div>
      <button id="resigter" class="btn btn-primary">Register</button>
    </form>

  </div>
</div>
<script src="js/register.js"></script>
<?php require_once 'footer.php'?>