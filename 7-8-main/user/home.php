<!DOCTYPE html>
<html lang="en">
     <head>
          <title>Home</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <?php 
          session_start();
        ?>
     </head>    
      
     <script>
          function increaseValue($number) {
               var value = parseInt(document.getElementById($number).value, 10);
               value = isNaN(value) ? 0 : value;
               value++;
               document.getElementById($number).value = value;
          }

          function decreaseValue($number) {
               var value = parseInt(document.getElementById($number).value, 10);
               value = isNaN(value) ? 0 : value;
               value < 1 ? value = 1 : '';
               value--;
               document.getElementById($number).value = value;
          }

          function cal($wnumber, $hnumber){
               $bmi = $wnumber/($hnumber*$hnumber);    
          }
     </script>

     <style>
          .cal-btn{
               padding: 5px 10px;
               color: white;
               background-color: #097770;
               border: 1px solid #097770;
               border-radius: 15px;
               font-size: 22px;
          }

          .bmi-modal{
               position: fixed;
               z-index: 1;
               width: 40%;
               overflow: auto;
               text-align: center;
               align-items: center;
               border: 2px solid #097770;
               border-radius: 10px;
          }
     </style>

     <body>
          <?php
               require('header.html');
          ?>
               <div class="row justify-content-center" style="width: 70%;">
                    <h1 style="font-size: 30px; margin-top: 50px;color: #097770; font-weight: bold">Công cụ tính BMI</h1>
                    <div class="sub-heading" style="text-align: center; font-size: 16px; margin-bottom: 30px;color: #097770">Tính chỉ số BMI để biết tình trạng sức khỏe của bạn</div><br>
               
                    <form action="home.php" method="post" style="text-align: center; margin: 0; padding: 0; border: none;">
                         <div class="row">
                              <div class="col-lg-6 col-md-6 col--sm-12 col-12" >
                                   <div style="margin: 10px;">
                                        <p class="title" style="color: #097770;">Chiều cao</p>
                                        <div class="div_inum">
                                             <div class="value-button" id="decrease" onclick="decreaseValue('hnumber')" value="Decrease Value">-</div>
                                             <input class="innum" type="number" id="hnumber" name="hnumber" value="0" style="color:#097770"/>
                                             <div class="value-button" id="increase" onclick="increaseValue('hnumber')" value="Increase Value">+</div> 
                                        </div>
                                   </div>
                                   
                                   <div style="margin: 10px;" >
                                        <p class="title" style="color: #097770">Cân nặng</p>
                                        <div class="div_inum">
                                             <div class="value-button" id="decrease" onclick="decreaseValue('wnumber')" value="Decrease Value">-</div>
                                             <input class="innum" type="number" id="wnumber" name="wnumber" value="0" style="color: #097770;"/>
                                             <div class="value-button" id="increase" onclick="increaseValue('wnumber')" value="Increase Value">+</div>
                                        </div> 
                                   </div>
                                   <div style="width: 100%;">
                                        <div>
                                             <button type="submit" class="cal-btn">Tính toán</button>
                                        </div>
                                   </div>
                              </div>
                              <div class="col-6 col-md-6"></div>
                         </div>
                    </form>
               </div>
               
          <?php 
               include('../conn/db_conn.php');

               if(isset($_POST['hnumber']) && isset($_POST['wnumber'])){
                    $hnumber = $_POST['hnumber'];
                    $wnumber = $_POST['wnumber'];
                    
                    if( $hnumber == '0' || $wnumber == '0'){
                         echo '<script language="javascript">alert("Hãy điền đẩy đủ thông tin"); window.location="home.php";</script>';
                    }else{
                         $bmi = round($wnumber/($hnumber/100 * $hnumber/100) ,2);
                         if($bmi <= 18.5){
                              ?>   <div class="bmi-modal" style="background-color: pink">
                                        <div> 
                                             <img src="../img/user-icon.jpg" style="width: 10%; margin:auto; display: block;">
                                        </div>
                                        <div>
                                             <?php echo $bmi. " gay";?>
                                        </div>
                                   </div> 
                              <?php
                         }elseif($bmi >18.5 && $bmi < 24.9){
                              ?> <div class="bmi-modal" style="background-color: green;"> <?php echo $bmi. " binh thuong";?></div> <?php 
                         }elseif($bmi >25 && $bmi < 29.9){
                              ?> <div class="bmi-modal" style="background-color: blue;"> <?php echo $bmi. " sap beo";?></div> <?php
                         }elseif($bmi >30 && $bmi < 34.9){
                              ?> <div class="bmi-modal" style="background-color: red;"> <?php echo $bmi. " beo 1";?></div> <?php 
                         }elseif($bmi >35 && $bmi < 39.9){
                              ?> <div class="bmi-modal" style="background-color: yellow;"> <?php echo $bmi. " beo 2";?></div> <?php
                         }else{
                              ?> <div class="bmi-modal" style="background-color: black;"> <?php echo $bmi. " beo 3";?></div> <?php
                         }   
                    }
               }     
          ?>
          
     </body>
</html>

