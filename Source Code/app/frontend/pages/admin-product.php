<div class="hero-wrap hero-bread" style="background-image: url('https://img.freepik.com/premium-vector/white-background-with-blue-technology-circuit_583398-369.jpg?w=2000&fbclid=IwAR2hMZ-zhPfcsGMcU7DGn4H3D0qFKbbcaP3asusEOObRt9fXstSFAKUBvLc');">
    <div class="container">
    <div class="row no-gutters slider-text align-items-center justify-content-center">
        <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-0 bread">Quản lý Sản phẩm & Dịch vụ</h1>
        </div>
    </div>
    </div>
</div>

<?php parse_str($_SERVER['QUERY_STRING'], $get_array);?>
<?php if ($get_array && array_key_exists('uid', $get_array)): ?>
    <?php if ($product->find($get_array["uid"])): ?>
        <?php if (array_key_exists('delete', $get_array) && $get_array["delete"] == '1'): ?>
            <?php
                if ($product->deleteMe()) {
                    Session::flash('product-delete-success', 'Xoá sản phẩm thành công!');
                    Redirect::to('admin-product.php');
                } else {
                    Session::flash('product-delete-fail', 'Xoá sản phẩm bị lỗi!');
                    Redirect::to('admin-product.php');
                }
                ?>
        <?php else: ?>
            <?php $Product = $product->data(); ?>
            <div class="container" style="padding-top: 5%; padding-bottom: 5%;">
                <h2>Cập nhật sản phẩm / dịch vụ</h2>
                <form action="" method="post">
                    <input type="hidden" class="form-control" id="uid" name="uid" value="<?php echo $Product->uid; ?>">
                    <div class="form-group">
                        <label for="name">Tên sản phẩm / dịch vụ :<span style="color: red">*</span></label>
                        <input type="text" class="form-control" id="name" placeholder="Nhập tên sản phẩm / dịch vụ" name="name" value="<?php echo $Product->name; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="description">Mô tả :<span style="color: red">*</span></label>
                        <input type="text" class="form-control" id="description" placeholder="Nhập mô tả" name="description" value="<?php echo $Product->description; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="price">Giá :<span style="color: red">*</span></label>
                        <input type="number" class="form-control" id="price" placeholder="Nhập giá" name="price" value="<?php echo $Product->price; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="price">Loại :<span style="color: red">*</span></label>
                        <select class="form-control" id="type" placeholder="Chọn loại" name="type" required>
                            <option value="" style="display:none"></option>
                            <option value="product" <?php if ($Product->type == 'product') echo 'selected'; ?>>Sản phẩm</option>
                            <option value="service" <?php if ($Product->type == 'service') echo 'selected'; ?>>Dịch vụ</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="image">Link hình ảnh :<span style="color: red">*</span></label>
                        <input type="text" class="form-control" id="image" placeholder="Nhập link hình ảnh" name="image" value="<?php echo $Product->image; ?>" oninput="document.getElementById('previewImage').src= event.target.value" required>
                    </div>
                    <div class="form-group">
                        <label for="image">Xem trước hình ảnh:</label>
                        <br>
                        <img id="previewImage" src="<?php echo $Product->image; ?>" width="200px">
                    </div>
                    <div class="form-group">
                        <label for="amount">Số lượng :<span style="color: red">*</span></label>
                        <input type="number" class="form-control" id="amount" placeholder="Nhập số lượng" name="amount" value="<?php echo $Product->amount; ?>" required>
                    </div>
                    <input type="submit" class="btn btn-primary" value="Cập nhật">
                    <a class="btn btn-info" href="/admin-product.php">Trở lại</a>
                </form>
            </div>
        <?php endif; ?>
    <?php else: ?>
        <p>Không tìm thấy sản phẩm / dịch vụ!</p>
    <?php endif; ?>
<?php elseif ($get_array && array_key_exists('new', $get_array)): ?>
    <div class="container" style="padding-top: 5%; padding-bottom: 5%;">
        <h2>Tạo mới sản phẩm / dịch vụ</h2>
        <form action="" method="post">
            <div class="form-group">
                <label for="name">Tên sản phẩm / dịch vụ :<span style="color: red">*</span></label>
                <input type="text" class="form-control" id="name" placeholder="Tên sản phẩm / dịch vụ" name="name" required>
            </div>
            <div class="form-group">
                <label for="description">Mô tả :<span style="color: red">*</span></label>
                <input type="text" class="form-control" id="description" placeholder="Nhập mô tả" name="description" required>
            </div>
            <div class="form-group">
                <label for="price">Giá :<span style="color: red">*</span></label>
                <input type="number" class="form-control" id="price" placeholder="Nhập giá" name="price" required>
            </div>
            <div class="form-group">
                <label for="price">Loại :<span style="color: red">*</span></label>
                <select class="form-control" id="type" placeholder="Chọn loại" name="type" required>
                    <option value="" style="display:none"></option>
                    <option value="product">Sản phẩm</option>
                    <option value="service">Dịch vụ</option>
                </select>
            </div>
            <div class="form-group">
                <label for="image">Link hình ảnh :<span style="color: red">*</span></label>
                <input type="text" class="form-control" id="image" placeholder="Nhập link hình ảnh" name="image" oninput="document.getElementById('previewImage').src= event.target.value" required>
            </div>
            <div class="form-group">
                <label for="image">Xem trước hình ảnh :</label>
                <br>
                <img id="previewImage" src="" width="200px">
            </div>
            <div class="form-group">
                <label for="amount">Số lượng :<span style="color: red">*</span></label>
                <input type="number" class="form-control" id="amount" placeholder="Nhập số lượng" name="amount" required>
            </div>
            <input type="hidden" name="isUpdate" value="true">
            <input type="submit" class="btn btn-primary" value="Tạo mới">
            <a class="btn btn-info" href="/admin-product.php">Trở lại</a>
        </form>
    </div>
<?php else: ?>
    <?php
        $data = $product->getAll();
        function render($value, $index) {
            return
                '<tr>
                    <td style="text-align: right;">' . ($index + 1) . '</td>
                    <td style="white-space: nowrap;">' . $value->uid . '</td>
                    <td><a href="/admin-product.php?uid='. $value->uid . '">'. $value->name . '</a></td>
                    <td>' . $value->description . '</td>
                    <td>' . $value->price . '</td>
                    <td><img src="' . $value->image . '" width="200px"></td>
                    <td>' . (($value->type == 'service') ? 'Dịch vụ' : 'Sản phẩm') . '</td>
                    <td>' . $value->amount . '</td>
                    <td>
                        <div class="btn-group" style="display: flex;">
                            <a class="btn btn-primary" href="/admin-product.php?uid='. $value->uid .'">Sửa</a>
                            <a class="btn btn-danger" href="/admin-product.php?uid='. $value->uid .'&delete=1">Xoá</a>
                        </div>
                    </td>
                </tr>';
        };
    ?>
    <div style="padding: 30px">
        <a class="btn btn-success" style="float:right" href="/admin-product.php?new">Tạo mới</a></br></br>
        <table class="table table-hover table-bordered table-responsive" style="margin-left:auto;margin-right:auto;">
            <thead>
                <tr>
                    <th style="width: auto; text-align: center;">#</th>
                    <th style="width: 10%;">ID</th>
                    <th style="width: 10%; white-space: nowrap;">Tên</th>
                    <th style="width: 60%; white-space: nowrap;">Mô tả</th>
                    <th style="width: 10%; white-space: nowrap;">Giá</th>
                    <th style="width: 20%; white-space: nowrap;">Hình ảnh</th>
                    <th style="width: 20%; white-space: nowrap;">Loại sản phẩm</th>
                    <th style="width: 10%; white-space: nowrap;">Số lượng</th>
                    <th style="width: auto; text-align: center; white-space: nowrap;">Thao tác</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    echo join(' ', array_map('render', $data, array_keys($data)));
                ?>
            </tbody>
        </table>
        <div class="row mt-5">
            <div class="col text-center">
                <div class="block-27">
                    <ul>
                        <li><a href="#/">&lt;</a></li>
                        <li class="active"><span>1</span></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#/">&gt;</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>