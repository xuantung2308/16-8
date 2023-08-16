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
        <?php
          require('style.css')
        ?>
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

        @media only screen and (max-width: 768px){
          .add-form{
            width: 95%;
          }
        }
     </style>

     <body>
        <?php
            require('ad-header.html');
        ?>

        <h2 style="margin-top: 50px; font-weight: bold">Đăng ký tài khoản ADMIN</h2>
        <form action="add.php" method="post" style="margin-top: 10px;" class="add-form">
          <div>
            <label>Họ và tên</label>
            <input type="text" id="name"/>
          </div>
          <div>
            <label>Email</label>
            <input type="text" id="name"/>
          </div>
          <div>
            <label>Mật khẩu</label>
            <input type="password" id="name"/>
          </div><br>
          <div>
          <button type="submit" class="button">Đăng ký</button>
          </div>
		    </form>
     </body>
