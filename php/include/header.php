<?php
require "../admin/config/dbconnect.php";
require 'funLogin.php';
// if(isset($_SESSION["id"])){
//   $id = $_SESSION["id"];
//   $user = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM user WHERE id = $id"));
// }
// else{
//   header("Location: login.php");
// }
// ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>WEB</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='../css/index.css'>

    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Leckerli+One&family=Montserrat:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" 
    integrity="sha384-ez1Ly8ZI+6Fz1PFSzH3Z+U5jt1GQ2a9LGzY+//Su8Q57bI0DTXnt9T4jKJpWSo9g" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

</head>

<body>
    <!-- header -->
    <header >
        <!-- <i class="fa-brands fa-pagelines" style="color: black; font-size: 40px; "></i> -->
        <a href="index.php" class="logo" style="margin-left: 1px;  font-stretch: ultra-expanded; letter-spacing: 5px;color:red;">
            BLU<span style="color:black;  font-stretch: ultra-expanded; letter-spacing: 3px;" class="logo">ME</span>
        </a>
<nav>
        <ul class="navbarr" >
            <li ><a href="#">Trang chủ</a></li>
            <!-- <li><a href="#">Giới thiệu</a></li> -->
            <li><a href="allSP.php">Sản phẩm </a>
                <!-- <ul >
                    <php 
                        $sql = "select * from danhmuc";
                        $query = mysqli_query($conn, $sql);
                        $result=$conn-> query($sql);
                        if ($result-> num_rows > 0){
                            while($row = mysqli_fetch_array($query)){?>
                        <li ><a href="#" style="text-transform: capitalize;">< $row['name_dm'] ?></a></li>
                        <php
                            }
                        }?>

                </ul></li> -->
            <li><a href="#">Đánh giá</a></li>
            <li><a href="#">Liên hệ</a></li>
            <!-- <li><a href="#">Đăng xuất</a></li> -->
        </ul>
    </nav>
        <div class="icons js-car">
            <a href="cart.php"><i class='bx bx-shopping-bag'></i></a>
    
            <!-- <a href="login.html">
                <i class='bx bxs-user'></i>
            </a> -->
            
            <ul class="navbar">
                <li class="user-icon">
                    <i class='bx bxs-user'> <!--<= $user['name_user'] ?> -->
                        <ul class="user-menu">
                            <li><a href="../php/login.php">Đăng nhập</a></li>
                            <li><a href="logout.php">Đăng xuất</a></li>

                        </ul>
                    </i>
                </li>
            </ul>
            

            <div class="bx bx-menu" id="menu-icons"></div>
        </div>
    </header>
</body>

<div class="js-cart-list" style="display:none;z-index:1001;border:1px solid #ccc;padding:20px;position:fixed;width:360px;right:0;top:0;bottom:0;background-color:#fefefe">
    <div class="header" style="display:flex;justify-content:space-between;align-items:center">
        <h3>Giỏ hàng</h3>
        <button class="js-close" style="background:white;border:none;padding:4px;border-radius:8px;cursor:pointer;font-size:30px">X</button>
    </div>
    <div class="" style="overflow:auto;height:100%">
        <div class="js-append">  
        </div>
        <div style="border:1px solid #ccc;margin-top:20px;margin-bottom:20px;width:100%;"></div>

        <div class="quality"style="maring-top:20px;display:flex;justify-content: space-between;padding:8px;border-radius:8px;">
                <div>Tạm tính :</div>
                <div class="amount fl-ct amoJS js-money" style="display:flex;align-items:center">
                   3.000.000 vnđ
                </div>
            </div>
        <a href="" class="" style="margin-bottom:100px;display:flex;justify-content:center;align-items:center;padding:10px 0;margin-top:20px;width:100%;color:white;background:#47474c;">
            Thanh toán    
        </a>
    
      
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
    // $('.js-add-cart').click(function(e){
    //     console.log(1);
    //     e.stopPropagation();
    //     let $data = $(this).closest('.row');
    //         let $image = $data.find('img').attr('src');
    //         let $name = $data.find('h4');
    //         let $price = $data.find('h5');


    //         $.ajax({
    //             type: 'POST',
    //             url: 'add_to_cart.php',
    //             data: {
    //                 image: $image,
    //                 name: $name,
    //                 price: $price,
    //             },
    //             success: function(response){
    //                 // Xử lý phản hồi từ server nếu cần
    //                 console.log(response);
    //             }
    //         });
        
    // });
    $('.js-close').click(function(e){
        e.preventDefault();
        $('.js-cart-list').hide();
    })
    $(document).on('click','.js-cart',function(e){
        e.preventDefault();
        $('.js-cart-list').show();
    })
    $(document).on('click','.plus',function(e){
    let $this = $(this);
    let $input = $this.closest('.amount').find('.m-change-quantity');
    let $current = parseInt($input.val());

    // Tăng giá trị lên 1 đơn vị
    $input.val($current + 1);
    });

    $(document).on('click','.minus',function(e){
        let $this = $(this);
        let $input = $this.closest('.amount').find('.m-change-quantity');
        let $current = parseInt($input.val());

        // Giảm giá trị đi 1 đơn vị, nhưng không được nhỏ hơn 0
        if ($current > 0) {
            $input.val($current - 1);
        }
    });
</script>

