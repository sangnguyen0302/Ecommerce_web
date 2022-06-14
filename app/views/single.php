<?php require_once 'inc/head.php';?>
<title>Tên sản phẩm</title>
<script src="../../javascript/pmbtnp.js"></script>
<link type="text/css" rel="stylesheet" href= "../../css/single.css">
</head>
<body>
    <?php require_once 'inc/nav.php'; ?>
    
    <main class="my-5">
        <div class="container mx-auto">

            <div class="row bg-white product-info mb-5">
                <div class="col-lg-6 border border-start-0 border-top-0 border-bottom-0 py-3 h-100">
                <img src="https://dthezntil550i.cloudfront.net/82/latest/822204301513096530015282071/1280_960/ec2b5a03-b0cd-4054-b83c-d0436d50e242.jpg" alt="" width=100% height="100%">
                </div>

                <div class="col-lg-6 py-3 h-100">

                    <div class="product-header my-3">
                        <h3>Tên sản phẩm</h3>
                    </div>

                    <div class="product-body">
                        <div class="product-price bg-light py-2 px-3">
                            <span class="h2 text-dark">Giá cả</span>
                        </div>

                        <div class="add-to-cart py-5">
                            <div class="qty-modify">
                                <p>Số lượng</p>
                                <div class="input-group qty-button-group">
                                <span class="input-group-btn">
                                <button name="quantity-update" class="btn btn-number btn-outline-light border border-1 text-dark" data-type="minus" data-field="a">
                                    <i class="fa-solid fa-minus"></i>
                                </button>
                                </span>
                        
                                <input type="text" name="quantity" id="a" class="form-control input-number" value="1" min="1" max="5">

                                <span class="input-group-btn">
                                <button name="quantity-update" class="btn btn-number btn-outline-light border border-1 text-dark" data-type="plus" data-field="a">
                                    <i class="fa-solid fa-plus"></i>
                                </button>
                                </span>
                                </div>
                                <!--input type="hidden" name="product-id" value=""/-->
                            </div>

                            <div class="add-to-cart-btn my-5">
                                    <a class="btn btn-outline-dark" href="">Thêm vào giỏ hàng</a>
                            </div>
                        </div>
                        
                    </div>
            
                </div>

            </div>

            <div class="product-description bg-white row mb-5">
                <h4>Mô tả sản phẩm</h4>
            </div>

            <div class="product-rate-comment bg-white row">
                <h4>Bình luận Đánh giá</h4>
            </div>
        </div>
    </main>
        <?php require_once 'inc/footer.php'; ?>
</body>
</html>