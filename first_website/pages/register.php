<form method="post" action="?register">
  <div class="container__register">
    <h2>Register</h2>
    <p>Fill this form to create new account</p>
    <hr>
    <li class="register__labels">
        <label for="userName"><b></b></label>
        <input type="text" placeholder="Enter Username*" id="userName" name="userName" required>
    </li>
    <li class="register__labels">
        <label for="firstName"><b></b></label>
        <input type="text" placeholder="Enter First name" name="firstName">
    </li>
    <li class="register__labels">
        <label for="lastName"><b></b></label>
        <input type="text" placeholder="Enter Last name" name="lastName">
    </li>
    <li class="register__labels">
        <label for="email"><b></b></label>
        <input type="text" placeholder="Enter Email*" name="email" id="email" required>
    </li>
    <li class="register__labels">
        <label for="psw"><b></b></label>
        <input type="password" placeholder="Enter Password* (at least 6 symbols)" id="psw" name="psw" required>
    </li>
    <li class="register__labels">
        <label for="psw-repeat"><b></b></label>
        <input type="password" placeholder="Repeat Password*" id="psw-repeat" name="psw-repeat" required>
    </li>
    <li class="register__labels">
        <input type="checkbox" id="terms" name="terms" value="Boat" required> I agree with terms and conditions*<br>
    </li>
    <p style="color: grey;">Fields with * are required.</p>
    <hr>
    
    <button type="submit" id="registerbtn" class="registerbtn">Register</button>
  </div>
</form> 