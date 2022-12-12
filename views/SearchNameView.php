<?php 
  //load file LayoutTrangTrong.php vao day
  $this->fileLayout = "LayoutTrangTrong.php";
 ?>

 <div class="content_trangtrong">
      <div class="categories_list">
                <div class="panel panel-default" style="margin-top:15px;">
          <div class="panel-heading"> Tìm theo mức giá </div>
          <div class="panel-body">
            <ul class="list-group" style="border:0px;">
              <li class="list-group-item" style="border:0px;">Giá từ &nbsp;&nbsp;
                <input type="number" min="0" value="0" id="fromPrice" class="form-control" />
              </li>
              <li class="list-group-item" style="border:0px;">Đến &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="number" min="0" value="0" id="toPrice" class="form-control"/>
              </li>
              <li class="list-group-item" style="border:0px; text-align:center">
                <input style="background-color: #c62727;" type="button" class="btn btn-warning" value="Tìm mức giá" onclick="location.href = 'index.php?controller=search&action=price&fromPrice=' + document.getElementById('fromPrice').value + '&toPrice=' + document.getElementById('toPrice').value;" />
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="product_list">
        <?php foreach($data as $rows): ?>
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
        <?php endforeach; ?>
      </div>
</div>