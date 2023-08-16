<!DOCTYPE html>
<html lang="en">
     <head>
          <title>ADMIN</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="../style/style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     </head>    

     <style>
         body{
            width: 100%;
         }

         .surround{
            width: 60%
         }

         .search{
            width: 100%;			
            padding: 10px 20px;
            display: flex;
            align-items: center;
            text-align: center;  
         }

         .search input{
            width: 100%;
            border: 0;
            outline: 0;
            padding: 0;
            font-size: 16px;
         }

         table,th,td{
            border: 1px solid black;
            border-collapse: collapse;	
        }
        th,td{
            text-align: center;
            border: 1px solid black;
            padding: 8px;
        }

        table{
            overflow-x: auto;
            width: 65%; 
            margin-top: 30px
        }

         .add-btn{
            padding: 5px 10px;
            background-color: #d1e7dd;
            border: 1px solid #d1e7dd;
            border-radius: 20px;
            font-size: 18px;
            width: 93%;
            color: white;
         }

         @media only screen and (max-width: 768px){
            .row.ad-div{
               width: 100%;
            }
            table{
               width: 100%;
            }
            .add-btn{
               font-size: 14px;
               width: 100%;
            }
            .search input{
               font-size: 12px;
            }
            .surround{
               width: 80%;
            }
         }
     </style>

     <body>
        <?php
            require('ad-header.html');
        ?>

            <div class="row" style="margin-top: 30px; width: 65%">
               <div class="col-lg-10 col-md-10 col-sm-8 col-8" style="padding: 0;">
                  <div class="surround" style="border-radius: 25px;">
                     <div class="search">
                        <input type="text" placeholder="Search">
                        <img src="../img/search.png" style="width: 2.5%; cursor: pointer">
                     </div>
                  </div>
               </div>
               
               <div class="col-lg-2 col-md-2 col-sm-4 col-4" >
                  <div class="surround" style="border: none;">
                     <a href="add.php"><button class="add-btn">Thêm</button></a>
                  </div>
               </div>
            </div>

            <table >
               <tr>
                  <th>STT</th>
                  <th>Họ và tên</th>
                  <th>Ngày sinh</th>
                  <th>Giới tính</th>
                  <th>Email</th>
                  <th></th>
               </tr>
            </table>
     </body>