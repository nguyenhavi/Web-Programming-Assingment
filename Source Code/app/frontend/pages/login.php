<div class="hero-wrap hero-bread" style="background-image: url('https://img.freepik.com/premium-vector/white-background-with-blue-technology-circuit_583398-369.jpg?w=2000&fbclid=IwAR2hMZ-zhPfcsGMcU7DGn4H3D0qFKbbcaP3asusEOObRt9fXstSFAKUBvLc');">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <!-- <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Trang chủ</a></span> <span>Products</span></p> -->
                <h1 class="mb-0 bread">Đăng nhập</h1>
            </div>
        </div>
    </div>
</div>
<div class="container" style="padding-top: 1%; padding-bottom: 5%;">
    <form name="loginForm" action="" method="post" onsubmit="return validateForm()">
        <div class="form-group">
            <label for="username">Tên đăng nhập :</label>
            <input type="text" class="form-control" id="username" autocomplete placeholder="Nhập tên đăng nhập" name="username">
        </div>
        <div class="form-group">
            <label for="pwd">Mật khẩu:</label>
            <input type="password" class="form-control" id="password" autocomplete placeholder="Nhập mật khẩu" name="password">
        </div>
        <div class="form-group form-check">
            <label for="remember">
                <input type="checkbox" name="remember" id="remember"> Ghi nhớ đăng nhập
            </label>
        </div>
        <input class="btn btn-light" type="submit" value="Đăng nhập">
    </form>
</div>
<script>
    function validateForm() {
        if (document.forms.loginForm.username.value == "") {
            alert("Name must be filled out");
            return false;
        }
        if (document.forms.loginForm.password.value == "") {
            alert("Password must be filled out");
            return false;
        }
    }
</script>