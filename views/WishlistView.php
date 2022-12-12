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
	    <div class="table-responsive">
	      <table class="table table-cart">
	        <thead>
	          <tr>
	            <th style="width:300px;">Ảnh sản phẩm</th>
	            <th style="">Tên sản phẩm</th>
	            <th style="width:200px;">Giá</th>
	            <th style="width:150px;">Xóa</th>
	          </tr>
	        </thead>
	        <tbody>
	        <?php foreach($_SESSION['wishlist'] as $product): ?>
	          <tr>
	            <td><img src="assets/upload/products/<?php echo $product['photo']; ?>" class="img-responsive" /></td>
	            <td><a href="index.php?controller=products&action=detail&id=<?php echo $product['id']; ?>"><?php echo $product['name']; ?></a></td>
	            <td> <?php echo number_format($product["price"]-($product["price"]*$product["discount"])/100); ?>₫ </td>
	            <td><a href="index.php?controller=wishlist&action=delete&id=<?php echo $product["id"]; ?>" data-id="2479395"><i class="fa fa-trash"></i></a></td>
	          </tr>
	        <?php endforeach; ?> 
	        </tbody>
	      </table>
	    </div>
	</div>
	</div>
</div>