<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kursus komputer web master</title>
    <meta name="description" content="kursus komputer berlokasi di jakarta dan tangerang ">
    <meta name="keywords" content="kursus komputer, belajar web, kursus web">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/bootstrap.bundle.js"></script>

    <style>
          .kotak{ width: 100px; height:100px; background-color: aqua; margin: 10px; float: left; }
          .tinggi{ height: 300px;}
          .menuatas { z-index: 150000; position: fixed; top: 0px;}
    </style>

</head>
<body style="margin: 0px;">
   
    <div class="container-fluid">

               
           <div class="row"> <div class="col-md-12 menuatas">  <?php include"navbar.php"  ?>   </div></div>
           <div style="height: 20px;"></div>
           
           <div class="row"> <div class="col-md-12"> <?php include"slider.php"  ?>      </div></div>
          <div style="height:20px ;"></div>
          <div class="row">
              <div class="col"> <?php  include"banner/card1.php"  ?></div>
              <div class="col"> <?php  include"banner/card2.php"  ?></div>
              <div class="col"> <?php  include"banner/card3.php"  ?></div>
              <div class="col"> <?php  include"banner/card4.php"  ?></div>
          </div>
          
           
           <div class="row">
             <div class="col-md-4 tinggi" style="background-color: antiquewhite;"></div> 
             <div class="col-md-4  tinggi" style="background-color: bisque;"></div> 
             <div class="col-md-4 tinggi" style="background-color: blueviolet;" >

              <form class="form-control" action="" method="post" style="margin-top: 20px;">
                <h4>Hubungi Kami</h4>
                <input type="text" class="form-control form-control-lg" placeholder="Email"  name="" id=""><p></p>
                <b>Komentar</b>
                <textarea name="" class="form-control form-control-lg"  id=""></textarea><p></p>
                <input type="submit" value="Simpan" class="btn btn-primary">
              </form>

             </div>  
            </div>     
           <div class="row">   </div>     
    </div>
</body>
</html>