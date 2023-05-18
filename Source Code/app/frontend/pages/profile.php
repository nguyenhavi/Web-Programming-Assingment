<div class="hero-wrap hero-bread" style="background-image: url('https://img.freepik.com/premium-vector/white-background-with-blue-technology-circuit_583398-369.jpg?w=2000&fbclid=IwAR2hMZ-zhPfcsGMcU7DGn4H3D0qFKbbcaP3asusEOObRt9fXstSFAKUBvLc');">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <!-- <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Trang chủ</a></span> <span>Products</span></p> -->
                <h1 class="mb-0 bread">Thông tin người dùng</h1>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
            <div class="panel panel-info">
                <div class="panel-body">
                    <div class="row">
                        <div class=" col-md-9 col-lg-9 ">
                            <table class="table table-user-information">
                                <tbody>
                                    <tr>
                                        <td>Họ và Tên :</td>
                                        <td><?php echo escape($data->name); ?></td>
                                    </tr>
                                    <tr>
                                        <td>Tên đăng nhập :</td>
                                        <td><?php echo escape($data->username); ?></td>
                                    </tr>
                                    <tr>
                                        <td>Ngày tham gia :</td>
                                        <td><?php echo escape($data->joined); ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class='col-12 mb-4 d-flex justify-content-end' >
            <div class="control">
                <a href="update-account.php" class="btn btn-light">Cập nhật thông tin</a>
                <?php if ($user && $user->hasPermission('admin')): ?>
                    <a class="btn btn-info" href="/admin-product.php">Admin</a>
                    <?php endif; ?>
                <a class="btn btn-danger" href="/logout.php">Đăng xuất</a>
            </div>
        </div>
    </div>
</div>
