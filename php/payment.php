<?php
require "header.php";
?>

<link rel='stylesheet' type='text/css' media='screen' href='../css/payment.css'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- <h2>Responsive Checkout Form</h2> -->
<!-- <p>Resize the browser window to see the effect. When the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other.</p> -->
<div class="row" style="margin-top: 120px; margin-left: 80px; margin-bottom: 100px">
  <div class="col-75" >
    <div class="container" style="background-color: white; border-radius: 2%;">
      <form>
      
        <div class="row" style="margin-left: 30px; margin-top: 20px;">
          <div class="col-50" >
            <h3>Thông tin</h3>
            <label for="fname"><i class="fa fa-user"></i> Họ và tên</label>
            <input type="text" id="fname" name="firstname" placeholder="John M. Doe">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="john@example.com">
            <label for="adr"><i class="fa fa-address-card-o"></i> Địa chỉ </label>
            <input type="text" id="adr" name="address" placeholder="542 W. 15th Street">
            <label for="city"><i class="fa fa-institution"></i>Thành phố</label>
            <input type="text" id="city" name="city" placeholder="New York">

            <div class="row">
              <div class="col-50">
                <label for="state">Quốc gia</label>
                <input type="text" id="state" name="state" placeholder="VN">
              </div>
              <div class="col-50">
                <label for="zip">Zip</label>
                <input type="text" id="zip" name="zip" placeholder="10001">
              </div>
            </div>
          </div>

          <div class="col-50">
            <h3>Thanh toán</h3>
            <label for="fname">Thanh toán bằng thẻ</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Họ và tên thẻ</label>
            <input type="text" id="cname" name="cardname" placeholder="John More Doe">
            <label for="ccnum">Số thẻ</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
            <label for="expmonth">Ngày hết hạn</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="September">
            <div class="row">
              <div class="col-50">
                <label for="expyear">Năm</label>
                <input type="text" id="expyear" name="expyear" placeholder="2018">
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="352">
              </div>
            </div>
          </div>
          
        </div>
        <label style="margin-left: 40px;">
          <input type="checkbox" checked="checked" name="sameadr"> Xác nhận thông tin
        </label>
        <button class="btn" style="background: rgb(168, 90, 177)">Thanh toán</button>
    </form>
    </div>
  </div>
  <div class="col-25" style= "boder-radius: 15px; height: 300px;">
    <div class="container" style= "boder-radius: 15px; height: 180px;">
      <h4 style="margin-top: 20px;">Giỏ hàng <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> <b>4</b></span></h4>
      <p><a href="#">Product 1</a> <span class="price">$15</span></p>
      <p><a href="#">Product 2</a> <span class="price">$5</span></p>
      <p><a href="#">Product 3</a> <span class="price">$8</span></p>
      <p><a href="#">Product 4</a> <span class="price">$2</span></p>
      <hr>
      <p>Thành tiền <span class="price" style="color:black"><b>$30</b></span></p>
    </div>
  </div>
</div>

<!-- FOOTER -->
<?php require_once 'footer.php';
?>
