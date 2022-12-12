    <script type="text/javascript">
      function search(){
        //lay gia tri cua id=key
        var key = document.getElementById("key").value;
        //di chuyen den url tim kiem
        location.href = "index.php?controller=search&action=name&key="+key;
      }
      //khi an phim enter trong o textbox co id=key thi cung thuc hien tim kiem
      function searchForm(event){
        //phim enter co keyCode = 13
        if(event.keyCode == 13){
          //lay gia tri cua id=key
          var key = document.getElementById("key").value;
          //di chuyen den url tim kiem
          location.href = "index.php?controller=search&action=name&key="+key;
        }
      }
    </script>
<div id="t_header">
  <div class="header1">
    <p>Miễn phí vận chuyển cho đơn hàng từ 499k</p>
  </div>
  <ul class="header2">
    <li class="logo">
      december 
    </li>    
    <li class="login">
          <?php if(isset($_SESSION['customer_email'])): ?>
            <a href="#"><b style="color:#616060;">Chào <?php echo $_SESSION['customer_email'] ?></b></a>
            <a href="index.php?controller=account&action=logout">
              <i class="fas fa-sign-out-alt" style="color:#616060;"></i>
              <i>Đăng xuất</i>
            </a> 
          <?php else: ?>
            <a href="index.php?controller=account&action=login">
              <i class="far fa-user"></i>
              <i>Đăng nhập</i>
            </a>
            <a href="index.php?controller=wishlist">
              <i class="far fa-heart"></i>
              <i>Yêu thích</i>
            </a> 
          <?php endif; ?>
          <?php 
            $numberProduct = isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0;
          ?>
            <a class="a3" href="index.php?controller=cart">
              <div id="slsp"><p><?php echo $numberProduct; ?></p></div>
              <svg style="color:black;" xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
              <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
              </svg>
            </a>
        </li>
      </ul>
    <div class="menu">
      <ul>
        <li>
          <a href="index.php">Trang chủ</a>
        </li>
        <li class="has-menu"><a href="#">danh mục sản phẩm</a>
          <ul class="sub-menu">
          <?php 
            $conn = Connection::getInstance();
            $query = $conn->query("select * from categories where parent_id = 0 order by id desc");
            $categories = $query->fetchAll();
           ?>
           <?php foreach($categories as $rows): ?>
            <li><a href="index.php?controller=products&action=category&id=<?php echo $rows->id; ?>"><?php echo $rows->name; ?></a></li>
            <?php 
                $querySub = $conn->query("select * from categories where parent_id = {$rows->id} order by id desc");
                $categoriesSub = $querySub->fetchAll();
             ?>
             <?php foreach($categoriesSub as $rowsSub): ?>
              <li style="padding-left:20px;"><a href="index.php?controller=products&action=category&id=<?php echo $rowsSub->id; ?>"><?php echo $rowsSub->name; ?></a></li>
              <?php endforeach; ?> 
          <?php endforeach; ?>  
          </ul>
        </li>
        <li><a href="">phụ kiện</a></li>
        <li><a href="index.php?controller=tin">Tin Tức</a></li>
        <li><a href="">Giới thiệu</a></li>
        <li><a href="index.php?controller=contact">Liên hệ</a></li>
        <li>
          <div class="boxcontainer">
            <button style="border: 1px solid #F0F0F0;" type="submit"><i onclick="return search();" class="fa fa-search"></i></button>
            <input onkeypress="searchForm(event);" autocomplete="off" value="" type="text" placeholder="Search" id="key" class="search">
          <div class="smart-search">
          <ul>
          </ul>
          </div>
          </div>
          <script type="text/javascript">
      function search(){
        //lay gia tri cua id=key
        var key = document.getElementById("key").value;
        //di chuyen den url tim kiem
        location.href = "index.php?controller=search&action=name&key="+key;
      }
      //khi an phim enter trong o textbox co id=key thi cung thuc hien tim kiem
      function searchForm(event){
        //phim enter co keyCode = 13
        if(event.keyCode == 13){
          //lay gia tri cua id=key
          var key = document.getElementById("key").value;
          //di chuyen den url tim kiem
          location.href = "index.php?controller=search&action=name&key="+key;
        }
      }
      //-----------------
         $(".search").keyup(function(){
            var strKey = $("#key").val();
            if(strKey.trim() == "")
                $(".smart-search").attr("style","display:none");
            else{
                $(".smart-search").attr("style","display:block");
                //---
                //su dung ajax de lay du lieu
                $.get("index.php?controller=search&action=ajaxSearch&key="+strKey,function(data){
                    //clear cac the li ben trong the ul
                    $(".smart-search ul").empty();
                    //them su lieu vua lay duoc bang ajax vao the ul
                    $(".smart-search ul").append(data);
                });
                //---
            }
         });
         //-----------------
    </script>
        </li>
      </ul>
    </div>
  </div>