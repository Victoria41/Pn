<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">
    <title>Document</title>
</head>
<body>
  <div class="text-center container-fluid">
    <div class="row first">
      <div class="col-md-2 col-lg-2 small">
          <div class="row">
              <div class="col-md-12">
                  <a href="index.html"><img src="images/соз щр (2).png" class="logo"></a>                        
              </div>
          </div>

      </div>

      <div class="col-lg-10 col-md-10 menu menudecor">
        <div class="row ">
              <div class="col-md-2<?= ($page =="index")? ' decor': ''; ?>"><a class="asize <?= ($page =="index")? ' asize1': ''; ?>" href="index.php" >Մեր մասին</a></div>
              <div class="col-md-2<?= ($page =="thirdPage")? ' decor center': ''; ?> "><a href="thirdPage.php" class="asize<?= ($page =="pn/thirdPage.php")? ' asize1': ''; ?>">Հայկական բանակ</a></div>
              <div class="col-md-3 "><a href="secondPage.php" class="asize">Համագործակցություններ</a></div>
              <div class="col-md-3 "><a href="fourthPage.php" class="asize">Հայտարարություններ</a></div>
              <div class="col-md-2 " > <a href="registr.php" class="asize">Անդամագրում</a></div>
          </div>
      </div>
    </div>
    <div id="hov">
      <div class="row">
          <div class="col-md-12 ">
              <img src="images/icons8-меню-100.png" id="menulog">
          </div>
      </div>
      <div class="row" id ="dropmenu">
          <div class="col-sm-12 col-md-12"><a href="index.php" class="asize asize1">Մեր մասին</a><hr></div>
          <div class="col-sm-12 col-md-12"><a href="thirdPage.php" class="asize">Հայկական բանակ</a><hr></div>
          <div class="col-sm-12 col-md-12"><a href="secondPage.php" class="asize">Համագործակցություններ</a><hr></div>
          <div class="col-sm-12 col-md-12"><a href="fourthPage.php" class="asize">Հայտարարություններ</a><hr></div>
          <div class="col-sm-12 col-md-12" ><a href="registr.php" class="asize">Անդամագրում</a><hr></div>
      </div>
    </div>