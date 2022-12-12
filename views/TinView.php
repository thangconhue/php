<?php 
	//load file LayoutTrangTrong.php
	$this->fileLayout = "LayoutTrangTrong.php";
 ?>
     <?php foreach($tin as $rows): ?>
    <li style="list-style-type: none;">
    <img style="width: 600px;" src="assets/upload/tin/<?php echo $rows->photo; ?>" alt="<?php echo $rows->name; ?>" title="<?php echo $rows->name; ?>" class="img-responsive">
    </li>
    <li style="list-style-type: none;">
      <div>
      <h5><?php echo $rows->description; ?></h5>
      <h5><?php echo $rows->content; ?></h5>
      </div>
    </li>
  </ul>
    <?php endforeach; ?>