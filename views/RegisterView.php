<?php 
	//load file LayoutTrangTrong.php
	$this->fileLayout = "LayoutTrangTrong.php";
 ?>
  <div class="template-customer">
	  <h1>Đăng ký tài khoản</h1>
	  <?php if(isset($_GET["notify"]) && $_GET['notify'] == 'error'): ?>
	  	<p style="color:red;">Đăng ký chưa thành công, bạn hãy kiểm tra lại thông tin!</p>
	  <?php else: ?>
	  
	  <?php endif; ?>
	  <div class="row" style="margin-top:50px;">
	    <div class="col-md-6" style="width:500px;">
	      <div class="wrapper-form">
	        <form method='post' action="index.php?controller=account&action=registerPost">	          
	          <p class="title"><span>Đăng ký tài khoản</span></p>
	          <div class="form-group">
	            <label>Họ và tên:</label>
	            <input type="text" name="name" class="input-control">
	          </div>
	          <div class="form-group">
	            <label>Địa chỉ:</label>
	            <input type="text" name="address" class="input-control">
	          </div>
	          <div class="form-group">
	            <label>Điện thoại:</label>
	            <input type="text" name="phone" class="input-control">
	          </div>
	          <div class="form-group">
	            <label>Tên Tài khoản:<b id="req">*</b></label>
	            <input type="text" name="email" class="input-control" required>
	          </div>
	          <div class="form-group">
	            <label>Mật khẩu:<b id="req">*</b></label>
	            <input type="password" name="password" class="input-control" required="">
	          </div>
	          <div class="form-group">
	            <input type="submit" class="button" value="Đăng ký">
	          </div>
	        </form>
	      </div>
	    </div>
	    <div class="col-md-6">
	      <div class="wrapper-form">
	        <p class="title"><span>Đăng nhập</span></p>
	        <p>Đăng nhập tài khoản nếu bạn đã có tài khoản. Đăng nhập tài khoản để theo dõi đơn đặt hàng, vận chuyển và đặt hàng được thuận lợi.</p>
	        <a href="index.php?controller=account&action=login" class="button">Đăng nhập</a> </div>
	    </div>
	  </div>
	</div>