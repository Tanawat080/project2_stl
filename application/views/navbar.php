<!DOCTYPE html>
<html lang="th">
<head>
  <title>บ้านสุรพล สแตนเลส</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/gernerally.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/font.css">
  <script src="<?php echo base_url();?>assets/bootstrap/js/jquery.min.js"></script>
  <script src="<?php echo base_url();?>assets/bootstrap/js/bootstrap.min.js"></script>
</head>

<body>
<nav class="navbar navbar-inverse border-bottom-red ">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="<?php echo base_url();?>home"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
       <!-- <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">
          <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="<?php echo base_url();?>buyer/buyer/loginBuyer">วิธีการสั่งซื้อ</a></li>
              <li><a href="<?php echo base_url();?>buyer/buyer/checkOrders">วิธีการชำระเงิน</a></li>
              <li><a href="<?php echo base_url();?>buyer/buyer/forgotPassword">แผนที่ร้าน</a></li>
            </ul>
        </li> -->

          <li>
            <a href="<?php echo base_url();?>service/service/servicePage">วิธีการสั่งซื้อ</a>
          </li>
          <li>
            <a href="<?php echo base_url();?>shoppingmall/shoppingmall/regisShoppingmall">วิธีการชำระเงิน</a>
          </li>
          <li>
            <a href="<?php echo base_url();?>eModule/eModules/regiseModules">แผนที่ร้าน</a>
          </li>
          <li>
            <a href="<?php echo base_url();?>package/package/pricePackage">ติดต่อเรา</a>
          </li>
          <li>
          <a href="<?php echo base_url();?>customer/customer/loginCustomer"><button class="tm-green-btn">เข้าสู่ระบบ</button></a>
          </li> 
      </ul>     
    </div>
  </div>
</nav>