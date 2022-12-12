<?php 
  //load file layout vao day
  $this->fileLayout = "LayoutTrangChu.php";
 ?>
     <div style="margin: 10px auto;" id="p1">Sản Phẩm bán chạy</div>
    <div class="">
          <?php 
            //tu view co the goi truc tiep cac ham trong Controller hoac cac ham trong Model
            $Product = $this->modelProducts();
          ?>
      <ul id="sss">
        <?php foreach($Product as $rows): ?>
        <li>
          <div class="box">
            <div class="slide-img">
              <div class="gia">
                      <?php if($rows->discount > 0): ?>
                      <span>-<?php echo $rows->discount; ?>%</span>
                      <?php endif; ?>
              </div>
              <div class="thich">
                <a href="index.php?controller=wishlist&action=create&id=<?php echo $rows->id; ?>" style="color:white">
                  <span class="far fa-heart"></span></a>
              </div>
              <img src="assets/upload/products/<?php echo $rows->photo; ?>" title="<?php echo $rows->name; ?>" alt="<?php echo $rows->name; ?>" class="img-responsive">
              <div class="overlay">
                <a href="index.php?controller=cart&action=create&id=<?php echo $rows->id; ?>" class="buy-btn">Buy now</a>
              </div>
            </div>
            <div class="detail-box">
              <div class="type">
                <a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>"><?php echo $rows->name; ?></a>
                <span style="text-decoration: line-through;">$<?php echo number_format($rows->price); ?></span>
              </div>
              <a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>" class="price">$<?php echo number_format($rows->price - ($rows->price * $rows->discount)/100); ?></a>
            </div>
          </div>
        </li>
        <?php endforeach; ?>
      </ul>        
      </div>

      <div style="max-width:1180px; margin-top:30px;">
      <?php 
      $news = $this->modelHotNews17();
      ?> 
    <?php foreach($news as $anh): ?>
    <img id="b" src="assets/upload/news/<?php echo $anh->photo; ?>" alt="<?php echo $anh->name; ?>" title="<?php echo $anh->name; ?>" class="img-responsive">
    <?php endforeach; ?>
      </div>

    <div style="margin-top:50px; margin-bottom: 10px;" id="p1">Bộ Sưu Tập Best Seller's</div>
    <div class="">
          <?php 
            //tu view co the goi truc tiep cac ham trong Controller hoac cac ham trong Model
            $hotProduct = $this->modelHotProduct();
          ?>
      <ul id="content-slider">
        <?php foreach($hotProduct as $rows): ?>
        <li>
          <div class="box">
            <div class="slide-img">
              <div class="gia">
                      <?php if($rows->discount > 0): ?>
                      <span>-<?php echo $rows->discount; ?>%</span>
                      <?php endif; ?>
              </div>
              <div class="thich">
                <a href="index.php?controller=wishlist&action=create&id=<?php echo $rows->id; ?>" style="color:white">
                  <span class="far fa-heart"></span></a>
              </div>
              <img src="assets/upload/products/<?php echo $rows->photo; ?>" title="<?php echo $rows->name; ?>" alt="<?php echo $rows->name; ?>" class="img-responsive">
              <div class="overlay">
                <a href="index.php?controller=cart&action=create&id=<?php echo $rows->id; ?>" class="buy-btn">Buy now</a>
              </div>
            </div>
            <div class="detail-box">
              <div class="type">
                <a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>"><?php echo $rows->name; ?></a>
                <span style="text-decoration: line-through;">$<?php echo number_format($rows->price); ?></span>
              </div>
              <a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>" class="price">$<?php echo number_format($rows->price - ($rows->price * $rows->discount)/100); ?></a>
            </div>
          </div>
        </li>
        <?php endforeach; ?>
      </ul>
        
      </div>