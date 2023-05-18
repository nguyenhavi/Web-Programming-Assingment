s<div class="hero-wrap hero-bread" style="background-image: url('https://img.freepik.com/premium-vector/white-background-with-blue-technology-circuit_583398-369.jpg?w=2000&fbclid=IwAR2hMZ-zhPfcsGMcU7DGn4H3D0qFKbbcaP3asusEOObRt9fXstSFAKUBvLc');">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <!-- <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Trang chủ</a></span> <span>Products</span></p> -->
                <h1 class="mb-0 bread">Đổi mật khẩu</h1>
            </div>
        </div>
    </div>
</div>
<div class="container" style="padding-top: 5%; padding-bottom: 5%;">
    <form action="" method="post">
        <div class="form-group" >
            <label for="name">Họ và Tên : </label>
            <span  style="background-color: #c0eef2 !important; border:none;" class="ml-4"><?php echo escape($user->data()->name); ?></span>
        </div>
        <div class="form-group" >
            <label for="username">Tên đăng nhập : </label>
            <span style="background-color: #c0eef2 !important; border:none;"  class="ml-4"> <?php echo escape($user->data()->username); ?>  </span>
        </div>
        <div class="form-group">
            <label for="current_password">Mật khẩu hiện tại : </label>
            <input type="password" class="form-control" id="current_password" placeholder="Nhập mật khẩu hiện tại" name="current_password" required>
        </div>
        <div class="form-group">
            <label for="new_password">Mật khẩu mới :</label>
            <input type="password" class="form-control" id="new_password" placeholder="Nhập mật khẩu mới" name="new_password">
        </div>
        <div class="form-group">
            <label for="confirm_new_password">Xác nhận mật khẩu mới :</label>
            <input type="password" class="form-control" id="confirm_new_password" placeholder="Xác nhận mật khẩu mới" name="confirm_new_password">
        </div>
        <input type="submit" class="btn btn-light mt-2 py-2 px-4" value="Đổi mật khẩu">
    </form>
</div>
