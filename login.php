<?php require_once 'header.php'?>
<div class="d-flex justify-content-center">
  <div class="box" style="width: 400px;">
    <h1 class="title  text-center">Log In</h1>
    <hr>
    <form autocomplete="off">
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" placeholder="Email">
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" placeholder="password">
      </div>
      <div class="form-check mb-3">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Remember Me</label>
      </div>
      <button type="submit" class="btn btn-block btn-success">Login</button>
    </form>

  </div>
</div>
<?php require_once 'footer.php'?>