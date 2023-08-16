<!DOCTYPE html>
<html lang="en">
     <head>
          <title>Home</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="../style/style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     </head>    

     <style>
        label{
          font-size: 22px;
          margin-top: 5px;
        }
        input{
          width: 100%;
          padding: 5px 10px;
          border: 1px solid #d1e7dd;
          border-radius: 3px;
        }
     </style>

     <body>
        <?php
            require('ad-header.html');
        ?>

        <form action="add.php" method="post" style="margin-top: 50px;">
          <div>
            <label>Họ và tên</label><br>
            <input type="text" id="name"/><br>
          </div>
          <div>
            <label>Email</label><br>
            <input type="text" id="name"/><br>
          </div>
          <div>
            <label>Mật khẩu</label><br>
            <input type="password" id="name"/><br>
          </div><br>
          <div class="row">
                <div class="col-6">
                    <button type="submit" class="button">Sửa</button><br>
                </div>
                <div class="col-6">
                    <button type="submit" class="button">Xóa</button>
                </div>
            </div>
		</form>
     </body>