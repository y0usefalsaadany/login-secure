<?php require 'inc/header.php';?>
<div class="container">
<div class="row justify-content-center align-items-center hv-100">
<div class="col-6">
<div class="createacc">
  <h1>انشاء حساب جديد</h1>

  <form action="inc/register.php" method="POST">
    <div class="form-row signup_form">
      <div class="form-group col-md-6">
        <label for="inputEmail4" class="formlabled">الاسم الاول</label>
        <div class="d-flex">
        
        <input type="text" class="form-control" id="inputEmail4" name="name" placeholder="Email" required>

        </div>
      </div>
      <div class="form-group col-md-6">
        <label for="inputPassword4" class="formlabled">الاسم الاخير</label>
        <div class="d-flex">
        
          <input type="text" class="form-control" id="inputPassword4" name="lastname" placeholder="رقم الفون" required>

        </div>
      </div>
    </div>



    <div class="form-row signup_form">
      <div class="form-group col-md-6">
        <label for="inputEmail4" class="formlabled">الايميل</label>
        <div class="d-flex">
          <div class="icon"><i class="fas fa-envelope"></i></div>
        <input type="email" class="form-control" id="inputEmail4" name="mail" placeholder="Email" required>

        </div>
      </div>
      <div class="form-group col-md-6">
        <label for="inputPassword4" class="formlabled">رقم الفون</label>
        <div class="d-flex">
          <div class="icon"><i class="fas fa-phone"></i></div>
          <input type="text" class="form-control" id="inputPassword4" name="phone" placeholder="رقم الفون" required>

        </div>
      </div>
    </div>

    <div class="form-group signup_form">
      <label for="inputAddress" class="formlabled">كلمة السر</label>
<div class="d-flex">
  <div class="icon"><i class="fas fa-lock"></i></div>
  <input type="password" class="form-control" autocomplete="new-password" id="inputAddress" name="password" placeholder="كلمة السر" required>

</div>
    </div>

    <div class="form-group signup_form">
      <div class="mb-3">
        <label class="" for="customControlValidation1">موافق علي الشروط والاحكام</label>
        <input type="checkbox" class="" id="customControlValidation1" required>

      </div>
    </div>
<div class="d-flex justify-content-between align-items-center">
  <a href="index.php" class="create_ins">هل تمتلك حساب ؟</a>
    
  <button type="submit" name="send" class="btn btn-outline-success">انشاء الحساب</button>

</div>  </form>
</div>
</div>
</div>
</div> 
<?php require "inc/footer.php";