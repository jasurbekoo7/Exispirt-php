
<?php
include_once ('./nav.php');
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Document</title>
   
</head>
<body>
<div class="breadcrumbs">
        <div class="page-header d-flex align-items-center" style="background-image: url('assets/img/page-header.jpg');">
            <div class="container position-relative">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-6 text-center">
                        <h2>Order</h2>
                        <p>In this section, you can place an order or receive an order if you wish</p>
                    </div>
                </div>
            </div>
        </div>
        <nav>
            <div class="container">
                <ol>
                    <li><a href="inculut.php">Home</a></li>
                    <li>Order</li>

                </ol>
            </div>
        </nav>
    </div>
  

<br><br><br><br><br><br>

<div class="bilok1">
    <br>
 <div class="qator1">  <h1>Address:</h1> <h3>Qo'qon Maskva</h3></div> 
 <div class="qator2"><h1>Amount:</h1>  <h3>11 T</h3></div>
 <div class="qator3"><h1>Time:</h1> <h3>4:00</h3></div>
 <div class="qator4"><h2><a href="1-haydovchi.php">Driver information</a></h2> </div>
</div>
<br>
</body>
</html>
<?php
include_once ('./Footer.php');
?>
<style>
    *{
        margin: 0;
        padding: 0;
        font-family: sans-serif;
     box-sizing: border-box;
    }
    img {
    width: 100%;
    height: 500px;

}
/* 1-bilog boshlandi */

    .bilok1{
        border-radius: 15px;
        margin-left: 90px;
        background:#608ee2;
        color: #fff;
        width: 500px;
        height: 300px;
        border: 1px solid black;
    }
a{
    color:#fff;
}
a:hover {
  color: #fff;
}       


.qator1{
    display: flex;
}
.qator1 h3{
    margin-top: 12px;
    margin-left: 100px;
}
.qator1 h1{
    margin-left: 20px;
}

.qator2{
    display: flex;
}
.qator2 h3{
    margin-top: 20px;
    margin-left: 100px;
}
.qator2 h1{
    margin-left: 20px;
}

.qator3{
    display: flex;
}
.qator3 h3{
    margin-top: 20px;
    margin-left: 130px;
}
.qator3 h1{
    margin-left: 20px;
}
.qator4 h2{
    margin-left: 20px;
}
/* 1-bilok tugadi */


</style>