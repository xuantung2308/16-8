<!DOCTYPE html>
<html lang="en">
     <head>
        <title>Lịch sử</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     </head>


    <style>
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
        }
        
        .chart-btn{
               background-color: #097770;
               height: 35px;
               border-radius: 15px;
               padding: 5px 10px;
          }

          @media only screen and (max-width: 768px){
            table{
                width: 100%;
            }
          }
    </style>

    <body>
        <?php
            require('header.html');
        ?>
        <h1 style="margin-top: 30px; margin-bottom: 20px">Thông tin chỉ số BMI của bạn</h1>
        <table>
            <tr>
                <th>STT</th>
                <th>Ngày đo</th>
                <th>Cân nặng</th>
                <th>Chiều cao</th>
                <th>Chỉ số BMI</th>
                <th>Nhận xét</th>
            </tr>
            <button type="button" style="position: fixed; bottom: 20px; right: 20px;" class="chart-btn">
                    Biểu đồ theo dõi
            </button>
        </table>
    </body>