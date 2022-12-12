<?php 
    //load file Layout.php vao day
    $this->fileLayout = "Layout.php";
 ?>
<div class="col-md-12">
    <div class="panel panel-primary">
        <div class="panel-heading">List photo</div>
        <div class="panel-body">
            <table class="table table-bordered table-hover">
                <tr>
                    <th style="width:100px;">Photo</th>
                    <th>Name</th>
                    <th style="width:100px;"></th>
                    <th style="width:100px;"></th>
                    <th style="width:100px;">Add</th>
                    <th style="width:100px;">Edit</th>
                </tr>
                <?php foreach($data as $rows): ?>

                <tr>
                    <td>
                        <?php if($rows->photo != "" && file_exists("../assets/upload/products/".$rows->photo)): ?>
                            <img src="../assets/upload/products/<?php echo $rows->photo; ?>" style="width:100px;">
                        <?php endif; ?>
                    </td>
                    <td><?php echo $rows->name; ?>
                        
                    </td>

                    <td>
                        
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        <a href="index.php?controller=photo&action=create&id=<?php echo $rows->id; ?>"><button type="button" class="btn btn-success">Add</button></a>
                    </td>
                    <td>
                        <a href="index.php?controller=photo&action=update&id=<?php echo $rows->id; ?>"><button type="button" class="btn btn-warning">Edit</button></a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
            <style type="text/css">
                .pagination{padding:0px; margin:0px;}
            </style>
            <ul class="pagination">
                <li class="page-item"><a href="#" class="page-link">Trang</a></li>
                <?php for($i = 1; $i <= $numPage; $i++): ?>
                <li class="page-item"><a href="index.php?controller=products&p=<?php echo $i; ?>" class="page-link"><?php echo $i; ?></a></li>
                <?php endfor; ?>
            </ul>
        </div>
    </div>
</div>