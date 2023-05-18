<div class="hero-wrap hero-bread" style="background-image: url('https://img.freepik.com/premium-vector/white-background-with-blue-technology-circuit_583398-369.jpg?w=2000&fbclid=IwAR2hMZ-zhPfcsGMcU7DGn4H3D0qFKbbcaP3asusEOObRt9fXstSFAKUBvLc');">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <!-- <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Trang chủ</a></span> <span>Products</span></p> -->
                <h1 class="mb-0 bread">Thanh toán</h1>
            </div>
        </div>
    </div>
</div>
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8 ftco-animate bill-info">
                <form action="" method="POST">
                    <h3 class="mb-4 billing-heading">Thông tin thanh toán</h3>
                    <div class="row align-items-end">
                        <div class="col-md-12">
                            <input type="hidden" id="uid" name="uid" class="form-control" value="<?php echo $user->data()->uid; ?>" required>
                            <div class="form-group">
                                <label for="name">Tên khách hàng :<span style="color: red">*</span></label>
                                <input class="form-control" type="text" id="name" name="name" class="form-control" placeholder="Nhập tên" value="<?php echo $user->data()->name; ?>" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="address">Địa chỉ :<span style="color: red">*</span></label>
                                <input type="text" id="address" name="address" class="form-control" placeholder="Nhập địa chỉ" required value="<?php echo $user->data()->address; ?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="phone">Số điện thoại: <span style="color: red">*</span></label>
                                <input type="text" id="phone" name="phone" class="form-control" placeholder="Nhập số điện thoại" required value="<?php echo $user->data()->phone; ?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email">Email :<span style="color: red">*</span></label>
                                <input type="email" id="email" name="email" class="form-control" placeholder="Nhập email" required value="<?php echo $user->data()->email; ?>">
                            </div>
                        </div>
                        <div class="w-100"></div>
                    </div>
                    <div class="col-md-12 text-center">
                        <div class="cart-detail cart-total">
                            <h3 class="billing-heading">Tổng giỏ hàng</h3>
                            <p class="d-flex">
                                <span>Tổng tiền hàng</span>
                                <span><?php echo($cart->cash($user->data()->uid));?></span>
                            </p>
                            <p class="d-flex">
                                <span>Phí ship</span>
                                <span>0</span>
                            </p>
                            <p class="d-flex">
                                <span>Khuyến mãi</span>
                                <span>0</span>
                            </p>
                            <hr>
                            <p class="d-flex total-price">
                                <span>Tổng cộng</span>
                                <span><?php echo($cart->cash($user->data()->uid));?></span>
                            </p>
                        </div>
                    </div>
                    <div class="w-100"></div>
                    <div class="col-md-12 text-center" style="margin-top: 10px;">
                    <?php  if($cart->amount($user->data()->uid)>0)  : ?>
                    
                        <input type='submit' class="btn btn-light py-2 px-4" value="Đặt hàng">
                        <?php else: ?>
                    <p class="text-center">
                        
                   
                    </p>
                    <?php endif?>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<script>
    function validateData() {
        var cusName = document.getElementById("cusName").value;
        var street = document.getElementById("street").value;
        var town = document.getElementById("town").value;
        var city = document.getElementById("city").value;
        var pNumber = document.getElementById("pNumber").value;
        var email = document.getElementById("email").value;
        var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        var ph = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im;
        if (cusName.replace(/ /g,'').length < 2 || cusName.replace(/ /g,'').length > 30) {
            alert("Tên phải nằm trong khoảng 2 - 30 ký tự");
            return false;
        }
        if (street.replace(/ /g,'').length < 20 || street.replace(/ /g,'').length > 100){
            alert("Địa chỉ phải nằm trong khoảng 20 - 100 ký tự");
            return false;
        }
        if (town.replace(/ /g,'').length < 5 || town.replace(/ /g,'').length > 30){
            alert("Địa chỉ phải nằm trong khoảng 5 - 30 ký tự");
            return false;
        }
        if (city == "none"){
            alert("Vui lòng chọn Tỉnh / Thành phố ");
            return false;
        }
        if (!ph.test(pNumber)){
            alert("Số điện thoại không hợp lệ");
            return false;
        }
        if (!re.test(String(email).toLowerCase())){
            alert("Email không hợp lệ");
            return false;
        }
        alert("Completed!");
        return true;
    }
</script>