<!DOCTYPE html>
<html lang="en">
     <head>
          <title>Thông tin cá nhân</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     </head>    

    <style>
        label{
            font-size: 22px;
            font-weight: bold;
            width: 20%;
        }

        .if-input{
            margin-top: 10px;
            margin-right: 20px;
            width: 60%;
            font-size: 24px;
            border: 0;
        }

        .ch-btn{
            font-size: 18px;
            padding: 5px 10px;
            background-color: #fff;
            border: none;
            float: right;
        }

        .ch-img{
            width: 24px;
            height: 24px;
        }

        .ch-div{
            margin: 25px 0px;
            padding-bottom: 10px;
            border-bottom: 1px solid gray;
        }

        .if-div{
            width: 65%; 
            margin-top: 50px
        }

        @media only screen and (max-width: 769px){
            .if-div{
                width: 95%;
                margin-top: 30px;
            }
            label{
                font-size: 14px;
            }
            .if-input{
                font-size: 14px;
                width: 50%;
            }
            .ch-img{
                width: 16px;
                height: 16px;
            }

        }

    </style>
     <body>
        <?php
            require('header.html')
        ?>
        
        <div class="if-div">
            <div class="row">
                <div class="col-lg-2 col-md-2"></div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-12" >
                    <h2>Thông tin cá nhân</h2>
                     
                     <div class="ch-div"> 
                        <label>Họ tên</label>
                        <input type="text" disabled class="if-input"/>
                        <button class="ch-btn"><img src="../admin/change.jpg" class="ch-img"/></button>
                    </div>
                            
                    <div class="ch-div">
                        <label>Ngày sinh</label>
                        <input type="date" disabled class="if-input"/>
                        <button class="ch-btn"><img src="../admin/change.jpg" class="ch-img"/></button>
                    </div>
                            
                    <div class="ch-div">
                        <label>Giới tính</label>
                        <input type="text" disabled class="if-input"/>
                        <button class="ch-btn"><img src="../admin/change.jpg" class="ch-img"/></button>
                    </div>

                    
                     <div class="ch-div"> 
                        <label>Email</label> 
                        <input type="text" disabled class="if-input"/>
                        <button class="ch-btn"><img src="../admin/change.jpg" class="ch-img"/></button>
                    </div>
                 
                    <div class="ch-div">
                        <label>Cân nặng </label>
                        <input type="text" disabled class="if-input"/>
                        <button class="ch-btn"><img src="../admin/change.jpg" class="ch-img"/></button>
                    </div>    
                    
                    <div class="ch-div">
                        <label>Chiều cao</label>
                        <input type="text" disabled class="if-input"/>
                        <button class="ch-btn"><img src="../admin/change.jpg" class="ch-img"/></button>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2"></div>
            </div>
        </div>
     </body>