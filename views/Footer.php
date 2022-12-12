
  <ul class="ct_footer">
    <?php 
      $news = $this->modelHotNews16();
    ?> 
    <?php foreach($news as $rows): ?>
    <li>
    <img src="assets/upload/news/<?php echo $rows->photo; ?>" alt="<?php echo $rows->name; ?>" title="<?php echo $rows->name; ?>" class="img-responsive">
    </li>
    <li class="li1">
      <div class="li1_ct">
      <h1><?php echo $rows->name; ?></h1>
      <h5><?php echo $rows->description; ?></h5>
      <h5><?php echo $rows->content; ?></h5>
      <a href=""><button type="<button">XEM NGAY</button></a>
      </div>
    </li>
  </ul>
    <?php endforeach; ?>
    
    <ul class="ct_footer">
    <?php 
      $news = $this->modelHotNews15();
    ?> 
    <?php foreach($news as $rows): ?>
    <li class="li2">
      <div class="li2_ct">
      <h1><?php echo $rows->name; ?></h1>
      <h5><?php echo $rows->description; ?></h5>
      <h5><?php echo $rows->content; ?></h5>
      <a href=""><button type="<button">XEM NGAY</button></a>
      </div>
    </li>
    <li>
    <img src="assets/upload/news/<?php echo $rows->photo; ?>" alt="<?php echo $rows->name; ?>" title="<?php echo $rows->name; ?>" class="img-responsive">
    </li>
  </ul>
    <?php endforeach; ?>

    <div class="vanchuyen">
      <div class="vc1">
        <div><i class="fas fa-shipping-fast"></i></div>
        <p>MIỄN PHÍ GIAO HÀNG</p>
        <span>Với hoá đơn từ 500.000đ</span>
      </div>

      <div class="vc1">
        <div><i class="fas fa-box-open"></i></div>
        <p>30 NGÀY ĐỔI SẢN PHẨM</p>
        <span>Đổi sản phẩm trong vòng 30 ngày</span>
      </div>

      <div class="vc1">
        <div><i class="fas fa-phone-volume"></i></div>
        <p>MUA HÀNG (8H30 - 21H30, T2- CN)</p>
        <span>Mua hàng 1800 1077 - CSKH 1800 1078</span>
      </div>

      <div class="vc1">
        <div><i class="fas fa-store-alt"></i></div>
        <p>GÓP Ý, KHIẾU NẠI (8H-18H)</p>
        <span>Các ngày trong tuần (trừ ngày lễ)</span>
      </div>
  </div>
  <div class="footer">
      <ul>

        <li>
          <div>
            <h3 style="color:#ff6600;">ABOUT US</h3>
            <p>Về chúng tôi</p>
            <p>Blog</p>
          </div>
        </li>

        <li>
          <div>
            <h3 style="color:#ff6600;">ĐIỀU KHOẢN</h3>
            <p>Chính sách bảo hành và đổi trả sản phẩm</p>
            <p>Chính sách thanh toán và giao hàng</p>
          </div>
        </li>

        <li>
          <div class="pbot">
            <h3 style="color:#ff6600;">CỬA HÀNG</h3>
            <p>Hotline: 096 262 5873</p>
            <p>Add 1: 514 Trần Cung - Bắc Từ Liêm - HN</p>
            <p>Add 2: 30 Thái Hà - HN</p>
            <p>Add 3: 12 Hồ Tùng Mậu - HN</p>
          </div>
        </li>

      </ul>
  </div>
    <div class="scroll-top">
    <a href="#top_header"><i id="cv_bot" class="fas fa-chevron-up" style="color:black;"></i>
    </a>
  </div>
  <div class="fbb">
    <a href="Tel: 096 262 5873"><i class="fas fa-phone-alt"></i></a>
    <a href="https://www.facebook.com/profile.php?id=100024627240782" target="blank"><i class="fab fa-facebook-f"></i></a>
    <a class="spc" href="index.php?controller=cart">
        <svg style="color:black;" xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
        <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
        </svg>
    </a>
  </div>