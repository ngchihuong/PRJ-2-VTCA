<h2>Register</h2>
<form action="./UserController/Create" method="post">
  <div class="mb-3 mt-3">
    <label for="email" class="form-label">Username:</label>
    <input type="text" class="form-control" id="text" placeholder="Enter username" name="username">
  </div>
  <div class="mb-3">
    <label for="pwd" class="form-label">Password:</label>
    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
  </div>
  <div class="mb-3 mt-3">
    <label for="email" class="form-label">Email:</label>
    <input type="email" class="form-control" id="text" placeholder="Enter email" name="email">
  </div>
  <div class="mb-3 mt-3">
    <label for="role" class="form-label">Role:</label>
    <ul>
        <li><input type="radio" name="role" value="1" id="role1">Admin</li>
        <li><input type="radio" name="role" value="0" id="role2">User</li>
    </ul>
    <!-- <input type="number" class="form-control" id="text" placeholder="Enter Role" name="role"> -->
  </div>
  <!-- <div class="form-check mb-3">
    <label class="form-check-label">
      <input class="form-check-input" type="checkbox" name="remember"> Remember me
    </label>
  </div> -->
  <button type="submit" name="btnRegister" class="btn btn-primary">Register</button>
</form>

<?php 
if (isset($data["result"])) { ?>
<h3>
  <?php 
    if ($data["result"]) {
  echo "Suceesful";
  }
else {
  echo "Failed";
}
// header("location:./mvc/views/pages/register.php");
  ?>
</h3>

<?php } ?>