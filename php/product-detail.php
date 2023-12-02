<?php
require "include/header.php";
?>

<link rel='stylesheet' type='text/css' media='screen' href='../css/product-detail.css'>

<body>
    <div class="body-wrapper"></div>

    <!-- Main item container -->
    <main class="item" style="margin-top: 50px;">
      <section class="img">
        <button class="img-main__btnlft img-main__btn">
          <img
            src="../images/icon-next.svg"
            alt="next symbol image"
            class="img-main__btnlft-img img-main__btn-img"
          />
        </button>
        <button class="img-main__btnrgt img-main__btn">
          <img
            src="../images/icon-next.svg"
            alt="next symbol image"
            class="img-main__btnrgt-img img-main__btn-img"
          />
        </button>
        <img src="../img/new2.jpg" alt="" class="img-main" />
        <div class="img-btns">
          <button class="img-btn">
            <img
              src="../img/new2.jpg"
              alt="shoe product image"
              class="img-btn__img"
            />
          </button>
          <button class="img-btn">
            <img
              src="../img/new2.jpg"
              alt="shoe product image"
              class="img-btn__img"
            />
          </button>
          <button class="img-btn">
            <img
              src="../img/new2.jpg"
              alt="shoe product image"
              class="img-btn__img"
            />
          </button>
          <button class="img-btn">
            <img
              src="../img/new2.jpg"
              alt="shoe product image"
              class="img-btn__img"
            />
          </button>
        </div>
      </section>

      <section class="price" style="margin-top: -5px;">
        <h2 class="price-main__heading">Hoa hồng đỏ</h2>
        <p class="price-txt">
          Một bó hoa sẽ bao gồm 10 bông trong 1 bó.
        </p>
        <div class="price-box">
          <div class="price-box__main">
            <span class="price-box__main-new">300.000</span>
            <span class="price-box__main-discount"> 10%</span>
          </div>
          <span class="price-box__old">400.000</span>
        </div>

        <div class="price-btnbox">
          <div class="price-btns">
            <button class="price-btn__add price-btn">
            <i class="fa-solid fa-minus"></i>
            </button>
            <span class="price-btn__txt">0</span>
            <button class="price-btn__remove price-btn">
            <i class="fa-solid fa-plus"></i>
            </button>
          </div>
          <button class="price-cart__btn btn--orange">
          Thêm vào giỏ hàng
          </button>
        </div>
      </section>
    </main>
  </body>

<!-- FOOTER -->
<?php require_once 'include/footer.php';
        ?>