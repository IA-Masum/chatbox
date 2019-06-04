<?php require_once 'header.php'?>
<div class="d-flex justify-content-center">
  <div class="box" style="width: 450px;">
    <h1 class="title  text-center">Register</h1>
    <hr>
    <form autocomplete="off">
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Enter Your Name">
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" placeholder="Email">
      </div>
      <div>
        Gender :
        <div class="form-check ml-5">
          <input class="form-check-input" type="radio" name="gender" id="male" value="Male">
          <label class="form-check-label" for="male">
            Male
          </label>
        </div>
        <div class="form-check ml-5">
          <input class="form-check-input" type="radio" name="gender" id="female" value="Female">
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
        <input type="password" class="form-control" id="password" autocomplete='no' placeholder="Confirme Password">
      </div>
      <div class="form-check mb-3">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Agree With Terms & Conditions</label>
      </div>
      <button type="submit" class="btn btn-primary">Register</button>
    </form>

  </div>
</div>
<?php require_once 'footer.php'?>