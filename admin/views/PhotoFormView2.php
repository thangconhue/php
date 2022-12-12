<?php 
    //load file Layout.php vao day
    $this->fileLayout = "Layout.php";
 ?>
 <div class="col-md-12">  
    <div class="panel panel-primary">
        <div class="panel-heading">Add edit photo</div>
        <div class="panel-body">
        <!-- muon upload duoc file thi trong the form phai co thuoc tinh enctype="multipart/form-data" -->
        <form method="post" action="<?php echo $action; ?>" enctype="multipart/form-data">
            <div>
                <?php $a = $_GET['id']; ?>
             <input style="display: none;" value="<?php echo $a; ?>" name="id">
            </div>
            <div>
             <input style="display: none;" value="thang" type="text" name="name">
            </div>
            <table class="table table-bordered table-hover">
                <tr>
                    <th style="width:100px;">Photo</th>
                    <th style="width:100px;">Edit</th>
                </tr>
                <tr>
                    <th>
                       <?php
                         if(isset($record->photo2) ? $record->photo2 : ""): ?>

                            <img src="../assets/upload/products/<?php echo $record->photo2; ?>" style="width:100px;">
                            <?php echo $record->photo2; ?>
                        <?php endif; ?>
                    </th>
                    <th>
                        <input type="file" name="photo2" value="">
                        
                    </th>
                </tr>
                <tr>
                    <th>
                        <?php
                         if(isset($record->photo3) ? $record->photo3 : ""): ?>

                            <img src="../assets/upload/products/<?php echo $record->photo3; ?>" style="width:100px;">
                            <?php echo $record->photo3; ?>
                        <?php endif; ?>
                    </th>
                    <th>
                        <input type="file" name="photo3" value="">
                        
                    </th>
                </tr>
                <tr>
                    <th>
                        <?php
                         if(isset($record->photo4) ? $record->photo4 : ""): ?>

                            <img src="../assets/upload/products/<?php echo $record->photo4; ?>" style="width:100px;">
                            <?php echo $record->photo4; ?>
                        <?php endif; ?>
                    </th>
                    <th>
                        <input type="file" name="photo4" value="">
                        
                    </th>
                </tr>
            <!-- end rows -->
        </table>
        <div class="row" style="margin-left:20px; margin-top: 10px;">
                <div class="col-md-2"></div>
                <div class="col-md-10">
                    <input type="submit" value="Process" class="btn btn-success">
                    <a href="index.php?controller=photo"><button style="margin-left:20px;" type="button" class="btn btn-danger">THOAT</button></a>
                </div>
            </div>
        </form>
        </div>
    </div>
</div>