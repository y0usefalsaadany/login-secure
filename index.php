<?php require 'inc/header.php';?>
<?php
  if (isset($_SESSION['email'])){
    header('location: home.php');
  }
  
  
?> 

  <div class="container">
      <div class="row justify-content-center align-items-center hv-100">
        <div class="col-6">
          <div class="createacc">
          <h1>تسجيل الدخول</h1>

    <form action="inc/login_func.php" method="POST">
        <div class="form-row signup_form">
        <div class="form-group col-md-12">
        <label for="inputEmail4" class="formlabled">البريد الالكتروني</label>
        <div class="d-flex">
        <div class="icon"><i class="fas fa-envelope"></i></div>
        <input type="email" class="form-control" name="email" id="inputEmail4" placeholder="Email" required>

  </div>      
  </div>

    </div>
    <div class="form-group signup_form">
        <label for="inputAddress" class="formlabled">كلمة السر</label>
        <div class="d-flex">
          <div class="icon">
            <i class="fas fa-lock"></i>
            
          </div>
        <input type="password" class="form-control" name="password" id="inputAddress" placeholder="كلمة السر" required>
  
        </div>
      </div>

    <div class="form-group signup_form">
      <div class="mb-3">
        <label class="" for="customControlValidation1">تذكرني</label>
        <input type="checkbox" class="" id="customControlValidation1">
        <input type="hidden" name="token" value="<?php csrf(); ?>">

      </div>
    </div>
<div class="d-flex justify-content-between align-items-center">
<div class="btns">
    <a href="signup.php" class="create_ins">انشاء حساب جديد</a>
</div>
    
  <button type="submit" name="login" class="btn btn-outline-success">تسجيل الدخول</button>

</div>  </form>
</div>
</div>
</div>
</div>
<?php require "inc/footer.php";