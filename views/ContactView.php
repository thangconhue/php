<?php 
  //load file LayoutTrangTrong.php vao day
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
                <input style="background-color: #c62727;" type="button" class="btn btn-warning" value="Tìm mức giá" onclick="location.href = 'index.php?controller=search&action=price&fromPrice=' + document.getElementById('fromPrice').value + '&toPrice=' + document.getElementById('toPrice').value;" />
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="product_list">
        <h3>Liên hệ</h3>
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.891856028951!2d105.83531044988332!3d21.03701268592515!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135aba3835c8991%3A0x2ee16c10705b2f1e!2zMSDEkC4gxJDhu5ljIEzhuq1wLCDEkGnhu4duIELDoG4sIEJhIMSQw6xuaCwgSMOgIE7hu5lpLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1641305900419!5m2!1svi!2s" height="450" style="border:0; width:100%;" allowfullscreen="" loading="lazy"></iframe>
      </div>
</div>