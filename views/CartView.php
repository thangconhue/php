<?php 
	//load file LayoutTrangTrong.php
	$this->fileLayout = "LayoutTrangTrong.php";
 ?>
 <div class="content_trangtrong">
 	      <div class="categories_list">
                <div class="panel panel-default" style="margin-top:15px;">
          <div style="background-color: #f79688;" class="panel-heading"> Tìm theo mức giá </div>
          <div class="panel-body">
            <ul class="list-group" style="border:0px;">
              <li class="list-group-item" style="border:0px;">Giá từ &nbsp;&nbsp;
                <input type="number" min="0" value="0" id="fromPrice" class="form-control" />
              </li>
              <li class="list-group-item" style="border:0px;">Đến &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="number" min="0" value="0" id="toPrice" class="form-control"/>
              </li>
              <li class="list-group-item" style="border:0px; text-align:center">
                <input style="background-color: #c62727;" type="button" class="btn btn-warning" value="Tìm mức giá" onclick="location.href = '/Product/Search?fromPrice=' + document.getElementById('fromPrice').value + '&toPrice=' + document.getElementById('toPrice').value;" />
              </li>
            </ul>
          </div>
        </div>
      </div>
    <div class="product_list">
 		<div class="template-cart">
	  <form action="index.php?controller=cart&action=update" method="post">
	    <div class="table-responsive">
	      <table class="table table-cart">
	        <thead>
	          <tr>
	            <th class="image">Ảnh sản phẩm</th>
	            <th class="name">Tên sản phẩm</th>
	            <th class="price">Giá bán lẻ</th>
	            <th class="quantity">Số lượng</th>
	            <th class="price">Thành tiền</th>
	            <th>Xóa</th>
	          </tr>
	        </thead>
	        <tbody>
	        <?php foreach($_SESSION['cart'] as $product): ?>
	          <tr>
	            <td><img src="assets/upload/products/<?php echo $product['photo']; ?>" class="img-responsive" /></td>
	            <td><a href="index.php?controller=products&action=detail&id=<?php echo $product['id']; ?>"><?php echo $product['name']; ?></a></td>
	            <td>$<?php echo number_format($product["price"]-($product["price"]*$product["discount"])/100); ?></td>
	            <td><input type="number" id="qty" min="1" class="input-control" value="<?php echo $product['number']; ?>" name="product_<?php echo $product['id']; ?>" required="Không thể để trống"></td>
	            <td><p><b>$<?php echo number_format(($product["price"]-($product["price"]*$product["discount"])/100)*$product["number"]); ?></b></p></td>
	            <td><a href="index.php?controller=cart&action=delete&id=<?php echo $product["id"]; ?>" data-id="2479395"><i class="fa fa-trash"></i></a></td>
	          </tr>
	        <?php endforeach; ?> 
	        </tbody>
	        <?php if($this->cartNumber() > 0): ?>
	        <tfoot>
	          <tr>
	            <td colspan="6"><a style="background-color: #c62727;" href="index.php?controller=cart&action=destroy" class="button pull-left">Xóa toàn bộ</a> <a href="index.php" class="button pull-right black">Tiếp tục mua hàng</a>
	              <input style="background-color: #c62727;" type="submit" class="button pull-right" value="Cập nhật"></td>
	          </tr>
	        </tfoot>
	    	<?php endif; ?>
	      </table>
	    </div>
	  </form>
	  <?php if($this->cartNumber() > 0): ?>
	  <div class="total-cart"> Tổng tiền thanh toán:
	    $<?php echo number_format($this->cartTotal()); ?><br>
	    <a href="index.php?controller=cart&action=checkout" class="button black">Thanh toán</a> </div>
	   <?php endif; ?>
		</div>
	</div>
</div>