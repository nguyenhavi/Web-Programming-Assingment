<div class="hero-wrap hero-bread" style="background-image: url('https://img.freepik.com/premium-vector/white-background-with-blue-technology-circuit_583398-369.jpg?w=2000&fbclid=IwAR2hMZ-zhPfcsGMcU7DGn4H3D0qFKbbcaP3asusEOObRt9fXstSFAKUBvLc');">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <!-- <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Trang chủ</a></span> <span>Products</span></p> -->
                <h1 class="mb-0 bread">Đăng ký thành viên</h1>
            </div>
        </div>
    </div>
</div>
<div class="container" style="padding-top: 5%; padding-bottom: 5%;">
  <form name="registerForm" action="" method="post" onsubmit="return validateRegisterForm()">
    <div class="form-group">
      <label for="name">Họ và Tên:</label>
      <input type="text" class="form-control" id="name" placeholder="Nhập Họ và Tên" name="name" value="<?php echo escape(Input::get('name')); ?>">
    </div>
    <div class="form-group">
      <label for="username">Tên đăng nhập:</label>
      <input type="text" class="form-control" id="username" placeholder="Nhập tên đăng nhập" name="username" value="<?php echo escape(Input::get('username')); ?>">
    </div>
    <div class="form-group">
      <label for="password">Mật khẩu:</label>
      <input type="password" class="form-control" id="password" placeholder="Nhập mật khẩu" name="password">
    </div>
    <div class="form-group">
      <label for="password_again">Xác nhận mật khẩu:</label>
      <input type="password" class="form-control" id="password_again" placeholder="Xác nhận mật khẩu" name="password_again">
    </div>
    <input class="btn btn-light px-4 mt-2" type="submit" value="Đăng ký">
  </form>
</div>
<script>
    function validateRegisterForm() {
        if (document.forms.registerForm.name.value == "") {
            alert("Name must be filled out");
            return false;
        }
        if (document.forms.registerForm.username.value == "") {
            alert("Username must be filled out");
            return false;
        }
        if (document.forms.registerForm.password.value === "") {
            alert("Password must be filled out");
            return false;
        }
        if (document.forms.registerForm.password.value !== document.forms.registerForm.password_again.value) {
            alert("Password not match");
            return false;
        }
    }
</script>