<?php
  require 'navigation.php';
 ?>
<main>
  <div class="signup-wrap">
    <h3>Sign up</h3>
    <p class="error-display">
      <?php
      if (isset($_GET['error'])) {
        if ($_GET['error'] === 'emptyfields') {
          echo "* Please fill out all fields";
        } elseif ($_GET['error'] === 'pwdnotmatch') {
          echo "* Passwords do not match";
        } elseif ($_GET['error'] === 'smallpwd') {
          echo "* Passwords is too small (min. 5 chars)";
        }
      }
       ?>
    </p>
    <form action="includes/signup.inc.php" method="post">
      <input type="text" name="uid" placeholder="Username">
      <input type="password" name="pwd" placeholder="Password">
      <input type="password" name="pwdRepeat" placeholder="Repeat password">
      <button type="submit" name="submit">Sign up</button>
    </form>
  </div>
</main>

</body>
</html>
