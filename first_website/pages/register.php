<form method="post" action="../public/loginAction.php">
  <div class="container__register">
    <h2>Register</h2>
    <p>Please fill in this form to create an account.</p>
    <hr>
    <li class="register__labels">
        <label for="email"><b></b></label>
        <input type="text" placeholder="Enter Email*" name="email" required>
    </li>
    <li class="register__labels">
        <label for="psw"><b></b></label>
        <input type="password" placeholder="Enter Password*" name="psw" required>
    </li>
    <li class="register__labels">
        <label for="psw-repeat"><b></b></label>
        <input type="password" placeholder="Repeat Password*" name="psw-repeat" required>
    </li>
    <p style="color: grey;">Fields with * are required.</p>
    <hr>
    
    <button type="submit" class="registerbtn">Register</button>
  </div>
</form> 