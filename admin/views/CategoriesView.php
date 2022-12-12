<?php 
    //load file Layout.php vao day
    $this->fileLayout = "Layout.php";
 ?>
<div class="col-md-12">
    <div style="margin-bottom:5px;">
        <a href="index.php?controller=categories&action=create" class="btn btn-success">Add category</a>
    </div>
    <div class="panel panel-primary">
        <div class="panel-heading">List category</div>
        <div class="panel-body">
            <table class="table table-bordered table-hover">
                <tr>
                    <th>Fullname</th>
                    <th style="width:200px;">Anh</th>
                    <th style="width:100px;">Edit</th>
                    <th style="width:100px;">Delete</th>
                </tr>
                <?php foreach($data as $rows): ?>
                <tr>
                    <td><?php echo $rows->name; ?></td>
                    <td>
                        <?php if($rows->photo != "" && file_exists("../assets/upload/products/".$rows->photo)): ?>
                            <img src="../assets/upload/products/<?php echo $rows->photo; ?>" style="width:100px;">
                        <?php endif; ?>
                    </td>
                    <td>
                        <a href="index.php?controller=categories&action=update&id=<?php echo $rows->id; ?>"><button type="button" class="btn btn-warning">Edit</button></a>
                    </td>
                    <td>
                    <a href="index.php?controller=categories&action=delete&id=<?php echo $rows->id; ?>" onclick="return window.confirm('Are you sure?');"><button type="button" class="btn btn-danger">Delete</button></a>
                    </td>
                </tr>
                    <?php 
                        $categoriesSub = $this->modelCategoriesSub($rows->id);
                     ?>
                     <?php foreach($categoriesSub as $rowsSub): ?>
                        <tr>
                            <td style="padding-left:20px;"><?php echo $rowsSub->name; ?></td>
                            <td style="width:200px;">
                                <?php if($rowsSub->photo != "" && file_exists("../assets/upload/products/".$rowsSub->photo)): ?>
                            <img src="../assets/upload/products/<?php echo $rowsSub->photo; ?>" style="width:100px;">
                        <?php endif; ?>
                            </td>
                            <td>
                                <a href="index.php?controller=categories&action=update&id=<?php echo $rowsSub->id; ?>"><button type="button" class="btn btn-warning">Edit</button></a>
                            </td>
                            <td>
                                <a href="index.php?controller=categories&action=delete&id=<?php echo $rowsSub->id; ?>" onclick="return window.confirm('Are you sure?');"><button type="button" class="btn btn-danger">Delete</button></a>
                            </td>
                        </tr>
                     <?php endforeach; ?>
                <?php endforeach; ?>
            </table>
            <style type="text/css">
                .pagination{padding:0px; margin:0px;}
            </style>
            <ul class="pagination">
                <li class="page-item"><a href="#" class="page-link">Trang</a></li>
                <?php for($i = 1; $i <= $numPage; $i++): ?>
                <li class="page-item"><a href="index.php?controller=categories&p=<?php echo $i; ?>" class="page-link"><?php echo $i; ?></a></li>
                <?php endfor; ?>
            </ul>
        </div>
    </div>
</div>