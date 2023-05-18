<div class="hero-wrap hero-bread" style="background-image: url('https://img.freepik.com/premium-vector/white-background-with-blue-technology-circuit_583398-369.jpg?w=2000&fbclid=IwAR2hMZ-zhPfcsGMcU7DGn4H3D0qFKbbcaP3asusEOObRt9fXstSFAKUBvLc');">
    <div class="container">
    <div class="row no-gutters slider-text align-items-center justify-content-center">
        <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-0 bread">PN Store - Sản phẩm</h1>
        </div>
    </div>
    </div>
</div>
<?php parse_str($_SERVER['QUERY_STRING'], $get_array);?>
<?php if ($get_array && array_key_exists('uid', $get_array)): ?>
    <?php
        $Product = $product->find($get_array["uid"]);
        if ($Product): ?>
        <section class="ftco-section">
            <div class="container">
                <div class="row">
                    <div class="col-md">
                        <a href="#" class="image-popup" id="image-popup"><img id="product-img" src=<?php echo $Product->image; ?> class="img-fluid" alt="Colorlib Template"></a>
                    </div>
                    <div class="col-md product-details pl-md-5">
                        <h4 id="product-title"><?php echo $Product->name; ?></h4>
                        <div class="rating d-flex">
                            <p class="text-left mr-4">
                                <a href="#" class="mr-2">5.0</a>
                                <a href="#"><span class="ion-ios-star-outline"></span></a>
                                <a href="#"><span class="ion-ios-star-outline"></span></a>
                                <a href="#"><span class="ion-ios-star-outline"></span></a>
                                <a href="#"><span class="ion-ios-star-outline"></span></a>
                                <a href="#"><span class="ion-ios-star-outline"></span></a>
                            </p>
                            <p class="text-left mr-4">
                                <a href="#" class="mr-2" style="color: #000;">100 <span style="color: #bbb;">Đánh giá</span></a>
                            </p>
                            <p class="text-left">
                                <a href="#" class="mr-2" style="color: #000;">500 <span style="color: #bbb;">Đã bán</span></a>
                            </p>
                        </div>
                        <h3 id="product-price" ><?php echo $Product->price; ?> VNĐ</h3>
                        <p><?php echo $Product->description; ?></p>
                        <div class="input-group col-md-6 d-flex mb-3">
                            <span class="input-group-btn mr-2">
                               <!-- <button  type="button" class="quantity-left-minus btn"  data-type="minus" data-field=""> -->
                                <div class="value-button" id="decrease" onclick="decreaseValue()" value="Decrease Value"></div>
                               </button>
                               </span>
                               <!-- <input type="text" name="quant[1]" class="quantity form-control input-number" value="1" min="0" max="10"> -->
                                <!-- <input type="text" id="quantity" name="quantity" class="form-control input-number" value="1" min="1" max="100"> -->
                                <input type="number" id="number" name="quantity" class="form-control input-number" value="1" min="1" max="100">
                             <span class="input-group-btn ml-2">
                               <!-- <button  type="button" class="quantity-right-plus btn" data-type="plus" data-field=""> -->
                                <div class="value-button" id="increase" onclick="increaseValue()" value="Increase Value"></div>
                            </button>
                            </span>
                        </div>

                        <div class="w-100"></div>
                        <div class="col-md-12">
                            <p style="color: #000;"><?php echo $Product->amount ?> sản phẩm còn sẵn</p>
                        </div>
                        <?php if ($user->isLoggedIn()): ?>
                            <p><a href="#" onclick="event.preventDefault(); addToCart({uid: <?php echo $Product->uid; ?>})" class="btn btn-black py-3 px-5">Thêm vào giỏ hàng</a></p>
                        <?php else: ?>
                            <a href="/login.php" class="btn btn-black py-3 px-5">Thêm vào giỏ</a>
                        <?php endif; ?>
                </div>

            </div>
            <br>
            <a class="btn btn-info" href="/product.php">Trở Lại</a>
        </section>
        <?php
            $data = $product->getAll();
            if ($data):
                $data = array_slice($data,0,4);
                function render($value, $index) {
                    global $user;
                    return
                        '<div class="col-sm col-md-6 col-lg ftco-animate">
                            <div class="product">
                                <a href="/' . $value->type . '.php?uid=' . $value->uid . '" class="img-prod"><img class="img-fluid" src="' . $value->image . '" alt="Colorlib Template">
                                    <span class="status">30%</span>
                                    <div class="overlay"></div>
                                </a>
                                <div class="text py-3 px-3">
                                    <h3><a href="/' . $value->type . '.php?uid=' . $value->uid . '">'. $value->name . '</a></h3>
                                    <div class="d-flex">
                                        <div class="pricing">
                                            <p class="price"><span class="price-sale">' . $value->price . ' VNĐ</span></p>
                                        </div>
                                        <div class="rating">
                                            <p class="text-right">
                                                <a href="#"><span class="ion-ios-star-outline"></span></a>
                                                <a href="#"><span class="ion-ios-star-outline"></span></a>
                                                <a href="#"><span class="ion-ios-star-outline"></span></a>
                                                <a href="#"><span class="ion-ios-star-outline"></span></a>
                                                <a href="#"><span class="ion-ios-star-outline"></span></a>
                                            </p>
                                        </div>
                                    </div>
                                    <p class="bottom-area d-flex px-3">'.
                                        ($user->isLoggedIn() ?
                                            '<a href="" onclick="event.preventDefault();addToCart({uid: '. $value->uid .'})" class="add-to-cart text-center py-2 mr-1">Thêm vào giỏ <i class="ion-ios-add ml-1"></i></a>
                                            <a href="/cart.php" onclick="addToCart({uid: '. $value->uid .'})" class="buy-now text-center py-2">Mua ngay <i class="ion-ios-cart ml-1"></i></a>':
                                            '<a href="/login.php" class="add-to-cart text-center py-2 mr-1">Thêm vào giỏ <i class="ion-ios-add ml-1"></i></a>
                                            <a href="/login.php" class="buy-now text-center py-2">Mua ngay <i class="ion-ios-cart ml-1"></i></a>')
                                    .'</p>
                                </div>
                            </div>
                        </div>';
                };
            endif;
        ?>
        <section class="ftco-section bg-light">
            <div class="container">
                <div class="row justify-content-center mb-3 pb-3">
                    <div class="col-md-12 heading-section text-center ftco-animate">
                        <h2 class="mb-4">Sản phẩm tương tự</h2>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <?php echo join(' ', array_map('render', $data, array_keys($data))); ?>
                </div>
            </div>
        </section>
    <?php else: ?>
        <p>Product not found!</p>
    <?php endif; ?>
<?php else: ?>
    <?php
        $data = $product->getAll(array('type', '=', 'product'));
        function render($value, $index) {
            global $user;
            return
                '<div id=""'. $value->uid .' class="col-sm-6 col-md-6 col-lg-4 ftco-animate">
                    <div class="product">
                        <a href="/product.php?uid='. $value->uid .'" class="img-prod"><img class="img-fluid"
                                src="' . $value->image . '" alt="Đang tải hình ảnh">
                            <div class="overlay"></div>
                        </a>
                        <div class="text py-3 px-3">
                            <h3><a href="/product.php?uid=' . $value->uid .'" > '. $value->name . '</a></h3>
                            <div class="d-flex">
                                <div class="pricing">
                                    <p class="price"><span>' . $value->price .' VNĐ</span></p>
                                </div>
                            </div>
                            <p class="bottom-area d-flex px-3">'.
                                ($user->isLoggedIn() ?
                                    '<a href="" onclick="event.preventDefault();addToCart({uid: '. $value->uid .'})" class="add-to-cart text-center py-2 mr-1">Thêm vào giỏ <i class="ion-ios-add ml-1"></i></a>
                                    <a href="/cart.php" onclick="addToCart({uid: '. $value->uid .'})" class="buy-now text-center py-2">Mua ngay <i class="ion-ios-cart ml-1"></i></a>':
                                    '<a href="/login.php" class="add-to-cart text-center py-2 mr-1">Thêm vào giỏ <i class="ion-ios-add ml-1"></i></a>
                                    <a href="/login.php" class="buy-now text-center py-2">Mua ngay <i class="ion-ios-cart ml-1"></i></a>')
                        .'</p>
                        </div>
                    </div>
                </div>';
        };
    ?>
    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4 col-lg-2 sidebar">
                    <div class="row border-bottom-2">
                        <div class="col-6 col-md-12 sidebar-box-2">
                            <h2 class="heading mb-4"><a href="service.php">Dịch vụ</a></h2>
                            <h2 class="heading mb-4"><a href="product.php">Sản phẩm</a></h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 col-lg-10 order-md-last">
                    <div class="row">
                        <?php echo join(' ', array_map('render', $data, array_keys($data))); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>