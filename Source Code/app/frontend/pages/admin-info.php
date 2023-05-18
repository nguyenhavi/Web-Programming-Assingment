<div class="hero-wrap hero-bread" style="background-image: url('https://img.freepik.com/premium-vector/white-background-with-blue-technology-circuit_583398-369.jpg?w=2000&fbclid=IwAR2hMZ-zhPfcsGMcU7DGn4H3D0qFKbbcaP3asusEOObRt9fXstSFAKUBvLc');">
    <div class="container">
    <div class="row no-gutters slider-text align-items-center justify-content-center">
        <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-0 bread">Quản lý thông tin shop</h1>
        </div>
    </div>
    </div>
</div>
<?php
    refreshSetting();
    $address = getSetting('address');;
    $phone = getSetting('phone');
    $email = getSetting('email');
    $website = getSetting('website');
?>
<div class="container" style="padding-top: 5%; padding-bottom: 5%;">
    <h2>Cập nhật thông tin trang web</h2>
    <form action="" method="POST">
        <div class="form-group">
            <label for="address">Địa chỉ :<span style="color: red">*</span></label>
            <input type="text" class="form-control" id="address" placeholder="Nhập địa chỉ" name="address" value="<?php echo $address; ?>" required>
        </div>
        <div class="form-group">
            <label for="phone">Số điện thoại :<span style="color: red">*</span></label>
            <input type="text" class="form-control" id="phone" placeholder="Nhập số điện thoại" name="phone" value="<?php echo $phone; ?>" required>
        </div>
        <div class="form-group">
            <label for="email">Email :<span style="color: red">*</span></label>
            <input type="email" class="form-control" id="email" placeholder="Nhập email" name="email" value="<?php echo $email; ?>" required>
        </div>
        <div class="form-group">
            <label for="website">Website :<span style="color: red">*</span></label>
            <input type="text" class="form-control" id="website" placeholder="Nhập tên miền " name="website" value="<?php echo $website; ?>" required>
        </div>
        <input type="submit" class="btn btn-primary" value="Cập nhật thông tin">
        <a class="btn btn-info" href="/admin-product.php">Trở Lại</a>
    </form>
</div>