<?php
require "include/header.php";
require "../admin/config/dbconnect.php";
?>
    <!-- HOME -->

    <section class="home" style="background-image: url(../img/nenn.png);height: 100vh;">
        <div class="home-text">
            <!-- <h1>Hana</h1>  -->
            <p style="font-size: 39px;  line-height: 1.2; color: black; margin-top: 20%;">Gửi <i>hoa</i> theo ý <br> bạn muốn</p> <br>
            <p style="font-size: 18px;  line-height: 1.8; font-stretch: expanded;">Nơi hoa là nguồn cảm hứng của chúng tôi để<br> tạo ra những kỉ niệm lâu dài. <br> Bất kể dịp nào những bông hoa của chúng tôi sẽ<br>  khiến nó trở thành lời nguyền đặc biệt.</p> <br> <br>
            <a href="#" class="btn">Mua ngay</a>
        </div>
    </section>

    <!-- BANNER -->

    <section class="banner">
        <div class="banner-img" style="height: 220px;">
            <img src="../img/vc2.png" style="height: 250px;">
        </div>

        <div class="banner-img" style="height: 220px;">
            <img src="../img/vc1.png" style="height: 250px;">
        </div>

            <!-- <div class="banner-img">
                <img src="../img/voucher3.png">
            </div> -->
    </section>

    <!-- NEW PRODUCT -->

    <section class="new-product" data-query="1"  style="display:flex;justify-content:center; align-items:center; flex-direction:column">
        <!-- <div class="center-text">
            <h3> Sản Phẩm Mới</h3>
        </div> -->
        <div class="navbar" style="color: #000;justify-content:left;">
    <?php
    // Assume $conn is your database connection
    $categorySql = "SELECT * FROM danhmuc";
    $categoryResult = mysqli_query($conn, $categorySql);
    echo "<a href='#' style='padding:6px 12px;border-radius:12px; font-size: 16px;  font-stretch: ultra-expanded; letter-spacing: 3px;' class='category-link' data-category-id='0'>Tất cả</a>";

    while ($categoryRow = mysqli_fetch_assoc($categoryResult)) {
        echo "<a href='#' style='padding:6px 12px;border-radius:5px;font-size: 16px;letter-spacing: 3px; font-stretch: ultra-expanded; ' class='category-link' data-category-id='{$categoryRow['id_dm']}'>{$categoryRow['name_dm']}</a>";
    }
    ?>
</div><br>


        <div class="new-content" id="productContainer">
        <?php $sql = "select * from sanpham limit 8";
        $query = mysqli_query($conn, $sql);
        $result = $conn->query($sql);
        if ($result->num_rows > 0){
            while($row = mysqli_fetch_array($query)){?>
                    <div class="row">
                        <img style="width:100%" src="../admin/img/<?= $row['anh_mota'] ?>" alt="" > 
                        <h4 style="width:100%"><?= $row['ten_sp'] ?></h4>
                        <h5 style="width:100%; margin-bottom:10px;">$<?= $row['gia_sp'] ?></h5>
                        <!-- <div class="top">
                            <p>Hot</p>
                        </div> -->

                        <div class="bbtn">
                            <a href="#" class="js-add-cart"> Thêm vào giỏ hàng</a>
                        </div>            
                    </div>

        <?php
      }
    }?>
            </div>

    </section>

       
        
        
    <section class= "page" style="margin-left:23px;">
    <div>
    <video width="100%" height="400" controls poster="https://fiorello.qodeinteractive.com/wp-content/uploads/2018/04/h3-video-img.jpg">
  <source src="../img/vd.mp4" type="video/mp4"  width="50%" height="360">
  <!-- Your browser does not support the video tag. -->
</video>
    </div>

    <div class="thongdiep"><br><br>
        <h3>Gây ngạc nhiên cho <span style="color: rgb(255, 38, 0);">Valentine!</span>
    <br> Hãy để chúng tôi sắp xếp một nụ cười.
</h3>
        <p>Nơi hoa là nguồn cảm hứng của chúng tôi để tạo ra những <br> kỷ niệm lâu dài. Dù là dịp nào...</p><br>
        <p><i class="fa-solid fa-heart" style="color:red;"></i>   Tự tay chọn chỉ dành cho bạn.</p>
        <p><i class="fa-solid fa-heart" style="color:red;"></i>   Cách cắm hoa độc đáo.</p>
        <p><i class="fa-solid fa-heart" style="color:red;"></i>   Cách tốt nhất để nói rằng bạn quan tâm..</p>

    </div>

    </section>
        

        <!-- BLOG -->

        <section class="blog">
            <div class="center-text">
                <h2> Tin mới nhất</h2>
            </div>

            <div class="blog-content">
                <div class="main-box">
                    <div class="box-img">
                        <img src="../img/blog1.jpg">
                    </div>
                    <div class="in-bxx">
                        <div class="in-text">
                            <p>Ngày 7 tháng 10 năm 2023</p>
                        </div>
                        <div class="in-icon">
                            <a href="#">
                                <i class="bx bx-message-rounded"></i>
                            </a>
                        </div>
                    </div>
                    <h3> Cách cắt cành hoa đúng cách</h3>
                </div>

                <div class="main-box">
                    <div class="box-img">
                        <img src="../img/blog1.jpg">
                    </div>
                    <div class="in-bxx">
                        <div class="in-text">
                            <p>Ngày 7 tháng 10 năm 2023</p>
                        </div>
                        <div class="in-icon">
                            <a href="#">
                                <i class="bx bx-message-rounded"></i>
                            </a>
                        </div>
                    </div>
                    <h3> Cách cắt cành hoa đúng cách</h3>
                </div>

                <div class="main-box">
                    <div class="box-img">
                        <img src="../img/blog1.jpg">
                    </div>
                    <div class="in-bxx">
                        <div class="in-text">
                            <p>Ngày 7 tháng 10 năm 2023</p>
                        </div>
                        <div class="in-icon">
                            <a href="#">
                                <i class="bx bx-message-rounded"></i>
                            </a>
                        </div>
                    </div>
                    <h3> Cách cắt cành hoa đúng cách</h3>
                </div>
            </div>
        </section>
       

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script>
             $(document).ready(function() {
                // Empty phần tử có class 'js-append'
                $('.js-append').empty();

                // Lấy dữ liệu từ Local Storage
                let existingData = JSON.parse(localStorage.getItem('cart')) || [];

                // Append lại danh sách sản phẩm
                existingData.forEach(function(product) {
                    appendProduct(product);
                });
            });
            $(document).on('click', '.js-add-cart',function(e){
                e.preventDefault();
                let $data = $(this).closest('.row');
                let $image = $data.find('img').attr('src');
                let $name = $data.find('h4').text();
                let $price = $data.find('h5').text();


                let product = {
                    image: $image,
                    name: $name,
                    price: $price
                };
                let existingData = JSON.parse(localStorage.getItem('cart')) || [];

                // Thêm thông tin sản phẩm vào mảng dữ liệu
                existingData.push(product);

                // Lưu mảng dữ liệu vào Local Storage
                localStorage.setItem('cart', JSON.stringify(existingData));

                $('.js-append').empty();
                existingData.forEach(function(product) {
                    appendProduct(product);
                });

                $('.js-cart-list').show();
            });
            function appendProduct(product) {
                let $productHtml = $('<div class="row" style="margin: 15px 0 !important;text-align:center;margin:50px 0;width:100% !important">' +
                                        '<img style="width:100% !important" src="' + product.image + '">' +
                                        '<h4>' + product.name + '</h4>' +
                                        '<h5 style="margin-left:auto">' + product.price + '</h5>' +
                                        '<div class="top">' +
                                        '</div>' +
                                        '<div class="js-delete-item" style="position:absolute;top:4px;right:4px;border:1px solid #ccc;border-radius:50%;z-index:200;background:white;padding:2px 8px;">' +
                                            'X' +
                                        '</div>' +
                                        '<div class="quality"style="display:flex;width:100%;justify-content: space-between;padding:8px;border-radius:8px;">' +
                                            '<div>Số lượng :</div>' +
                                            '<div class="amount fl-ct amoJS" style="display:flex;align-items:center">' +
                                                '<div class="minus hov-df amoM" style="font-size:30px;line-height:16px;">-</div>' +
                                                '<input type="number" class="number rs-form amoVal m-change-quantity" style="outline:none;border:none;text-align:center;margin-left:10px;" value="1" min="0" max="999">' +
                                                '<div class="plus hov-df amoP"  style="font-size:22px;line-height:16px">+</div>' +
                                            '</div>' +
                                        '</div>' +
                                    '</div>');

                // Append sản phẩm vào phần tử có class 'js-append'
                $('.js-append').append($productHtml);
            }
            $(document).on('click', '.js-delete-item', function() {
                // Lấy index của sản phẩm được nhấp vào
                let indexToDelete = $(this).closest('.row').index();

                // Lấy dữ liệu từ Local Storage
                let existingData = JSON.parse(localStorage.getItem('cart')) || [];

                // Xóa sản phẩm khỏi mảng dữ liệu
                existingData.splice(indexToDelete, 1);

                // Lưu mảng dữ liệu đã được cập nhật vào Local Storage
                localStorage.setItem('cart', JSON.stringify(existingData));

                // Empty phần tử có class 'js-append'
                $('.js-append').empty();

                // Append lại danh sách sản phẩm
                existingData.forEach(function(product) {
                    appendProduct(product);
                });
             });
        </script>
       <script>
    $(document).ready(function() {
        $(".category-link").click(function(e) {
            e.preventDefault();
            var categoryId = $(this).data("category-id");
            if(categoryId == 0){
                categoryId = '-1';
            }
            let $container = $(this).closest('.new-product').data("query");
            if($container == 1){
                $("#productContainer").addClass("fade");
            }else{
                $("#productContainer2").addClass("fade");
            }

            $.ajax({
                type: "POST",
                url: "get_products_by_category.php",
                data: { 
                    category_id: categoryId,
                    type: $container
                },
                success: function(response) {
                    if($container == 1){
                        $("#productContainer").html(response);
                        setTimeout(function() {
                            $("#productContainer").removeClass("fade");
                        }, 600);
                    }else{
                        $("#productContainer2").html(response);
                        setTimeout(function() {
                            $("#productContainer2").removeClass("fade");
                        }, 600);
                    }
                }
            });
        });
    });

    // Lấy tất cả các phần tử a trong navbar
var navbarLinks = document.querySelectorAll('.navbar a');

// Đặt sự kiện click cho mỗi phần tử
navbarLinks.forEach(function(link) {
    link.addEventListener('click', function() {
        // Loại bỏ lớp active từ tất cả các liên kết
        navbarLinks.forEach(function(innerLink) {
            innerLink.classList.remove('active');
        });

        // Thêm lớp active cho liên kết được nhấn vào
        link.classList.add('active');
    });
});

</script>

        <!-- FOOTER -->
        <?php require_once 'include/footer.php';
        ?>