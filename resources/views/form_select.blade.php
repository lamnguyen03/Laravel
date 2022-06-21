<?php
if(session_id() === '')
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"></link>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="form_select.css">
    <title>Form </title>
</head>
<body>
   <div class="container">
   <form method="POST" enctype="multipart/form-data">
      @csrf
      <div class="card-text row">
        <h4 class="text-left col"><b>Quản lý phòng</b></h4>
        <div class="text-right col">
          <button class="btn" type="submit" style="background-color:  #ff631c !important; color:white">Thêm mới phòng <i class="fas fa-calendar-check"></i></button>
        </div>
      </div>

      <hr style="border:2px solid #ff631c;" />

      <div class="form-row">
        <div class="form-group col">
          <label for="roomName">Tên phòng</label>
          <input type="text" name="roomName" class="form-control" placeholder="Nhập tên phòng...">
        </div>
        <div class="form-group col">
          <label for="roomDescription">Mô tả phòng</label>
          <input type="text" name="roomDescription" class="form-control" placeholder="Nhập mô tả phòng...">
        </div>
        <div class="form-group col">
          <label for="roomPrice">Giá</label>
          <input type="number" name="roomPrice" class="form-control" placeholder="Giá phòng...">
        </div>

        <div class="form-group text-center">
          <input type="file" name="roomImage" id="roomImage" style="display: none;">
          <button type="button" class="btn btn-outline-warning" onclick="chooseFile()" style="border:1px solid #ff631c; color:#ff631c;padding: 21px">
            <i class="fas fa-images"></i> Chọn hình ảnh
          </button>
          <script>
            function chooseFile() {
              $("#roomImage").click();
            }
          </script>
        </div>
      </div>
    </form>

   </div>
  
   <div>
    @include ('error')
  </div>

</body>
</html>
