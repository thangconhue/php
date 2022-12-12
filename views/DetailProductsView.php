<?php 
	//load file LayoutTrangTrong.php vao day
	$this->fileLayout = "LayoutTrangTrong.php";
 ?>
		<ul class="content-chitiet">
			<li class="product-img">
				<div class="large">
					<img src="assets/upload/products/<?php echo $record->photo; ?>" style="width: 100%;" id="productimg"/>
				</div>
				<div class="small">
					<?php foreach($anh as $b): ?>
													
           			<div class="row_small">
           				<img src="assets/upload/products/<?php echo $record->photo; ?>" class="small-img"/>
           			</div>
                        
						<?php if($b->photo2 != "" && file_exists("assets/upload/products/".$b->photo2)): ?>
					<div class="row_small">
           				<img src="assets/upload/products/<?php echo $b->photo2; ?>"  class="small-img"/>
           			</div>
                        <?php endif; ?>
					
						<?php if($b->photo3 != "" && file_exists("assets/upload/products/".$b->photo3)): ?>
					<div class="row_small">
           				<img src="assets/upload/products/<?php echo $b->photo3; ?>" class="small-img"/>
           			</div>
                        <?php endif; ?>
					
						<?php if($b->photo4 != "" && file_exists("assets/upload/products/".$b->photo4)): ?>
					<div class="row_small">
           				<img src="assets/upload/products/<?php echo $b->photo4; ?>" class="small-img"/>
           			</div>
                        <?php endif; ?>
						
					<?php endforeach; ?>
				</div>
			</li>
			<li class="product-info">
				<div class="CT"><?php echo $record->name; ?></div>
				<div class="MT"><b>Mô tả:</b><?php echo $record->description; ?></div>
					 <div class="GIA">
					 	Gia:&nbsp;$<?php echo number_format($record->price); ?>					 	
					 </div> 
					<br>
					<div class="SIZE">
					<select>
					<option>SIZE M</option>
					<option>SIZE L</option>
					<option>SIZE S</option>
				</select>
					</div>
				<div style="float: left;">
					<input style="width:50px; border: 1px solid #ff523b; margin-right:10px;" type="number" id="qty" min="1" class="input-control" value="1"  required="Không thể để trống">
					<a href="index.php?controller=cart&action=create&id=<?php echo $record->id; ?>" class="btn">Add to cart</a>
				</div>
			</li>
		</ul>
		<div class="product-content">
			<div>
				<img src="./images/ctsp.jpg" width="100%">
			</div>
			<div style="font-size:15px;">
				<?php echo $record->content; ?>
			</div>
		</div>