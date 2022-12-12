<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
  <title>TRANG CHỦ</title>
<link href='assets/frontend/100/047/633/themes/517833/assets/font-awesome.min221b.css?1481775169361' rel='stylesheet' type='text/css' />
<link href='assets/frontend/100/047/633/themes/517833/assets/bootstrap.min221b.css?1481775169361' rel='stylesheet' type='text/css' />
<link href='assets/frontend/100/047/633/themes/517833/assets/owl.carousel221b.css?1481775169361' rel='stylesheet' type='text/css' />
<link href='assets/frontend/100/047/633/themes/517833/assets/responsive221b.css?1481775169361' rel='stylesheet' type='text/css' />
<link href='assets/frontend/100/047/633/themes/517833/assets/styles.scss221b.css?1481775169361' rel='stylesheet' type='text/css' />
<script src='assets/frontend/100/047/633/themes/517833/assets/jquery.min221b.js?1481775169361' type='text/javascript'></script>
<script src='assets/frontend/100/047/633/themes/517833/assets/bootstrap.min221b.js?1481775169361' type='text/javascript'></script>
<script src='assets/frontend/assets/themes_support/api.jquerya87f.js?4' type='text/javascript'></script>
<link href='assets/frontend/100/047/633/themes/517833/assets/bw-statistics-style221b.css?1481775169361' rel='stylesheet' type='text/css' />

  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" type="text/css" href="./css/style.css">
  <link rel="stylesheet"  href="./css/lightslider.css"/>
  <script src="./js/lightslider.js"></script> 
  <script>
       $(document).ready(function() {
      $("#content-slider").lightSlider({
                loop:true,
                keyPress:true
            });
    });
       $(document).ready(function() {
      $("#sss").lightSlider({
                loop:true,
                keyPress:true
            });
    });
       
    </script>
</head>
<body>
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/61dd424fb84f7301d32a63e4/1fp44m28c';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<?php include "views/HeaderView.php"; ?>
  <div class="banner" id="top_header">
        <div class="owl-slider" style="max-width:100%">
          <div class="item"> 
            <!-- ============================ -->
            <div id="myCarousel" class="carousel slide" data-ride="carousel"> 
              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
              </ol>
              
              <!-- Wrapper for slides -->
              <div class="carousel-inner">
                <div class="item active"> 
                    <?php 
                        $news = $this->modelHotNews19();
                    ?> 
                    <?php foreach($news as $rows): ?>
                      <img id="b" src="assets/upload/news/<?php echo $rows->photo; ?>" alt="<?php echo $rows->name; ?>" title="<?php echo $rows->name; ?>" class="img-responsive">
                    <?php endforeach; ?> 
                </div>
                <div class="item"> 
                    <?php 
                        $news = $this->modelHotNews21();
                    ?> 
                    <?php foreach($news as $anh): ?>
                      <img id="b" src="assets/upload/news/<?php echo $anh->photo; ?>" alt="<?php echo $anh->name; ?>" title="<?php echo $anh->name; ?>" class="img-responsive">
                    <?php endforeach; ?>
                </div>
                <div class="item"> 
                    <?php 
                        $news = $this->modelHotNews20();
                    ?> 
                    <?php foreach($news as $anh): ?>
                      <img id="b" src="assets/upload/news/<?php echo $anh->photo; ?>" alt="<?php echo $anh->name; ?>" title="<?php echo $anh->name; ?>" class="img-responsive">
                    <?php endforeach; ?> 
                </div>
              </div>
              
              <!-- Left and right controls --> 
            </div>
            <!-- ============================ --> 
          </div>
        </div>
      <?php 
      $news = $this->modelHotNews18();
    ?> 
    <?php foreach($news as $rows): ?>
    <img id="a" src="assets/upload/news/<?php echo $rows->photo; ?>" alt="<?php echo $rows->name; ?>" title="<?php echo $rows->name; ?>" class="img-responsive">
      <?php endforeach; ?>
  </div>
  <div class="main">
    <?php echo $this->view; ?>
  </div>
<?php include "views/Footer.php"; ?>
<!-- <script>
$('a.buy-btn').click(function(e) {
    e.preventDefault();
});
</script> -->
</body>
</html>