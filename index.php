<!DOCTYPE html>
<html>
<head>
  <title></title>
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?famiy=josefin+sans&display=swap" rel="stylesheet">
 
</head>
<body>

  <?php include 'menu.php'; ?>

<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="Images/picg1.webp" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
        
    
      </div>   
    </div>
    <div class="carousel-item">
      <img src="Images/picg2.jpg" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
      
      </div>   
    </div>
    <div class="carousel-item">
      <img src="Images/picg3.jpg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>


<!-- <section class="my-5">
  <div>
    <h2 class="text-center">About us</h2>
    
  </div>
     <div class="container-fluid">
  <div class="row">
    <div class="col-lg-6 col-md-6 col-12">
      <img src ="Images/pic4.jpg" class="img-fluid" aboutimg>
           </div><?php  
           // $link= new mysqli("localhost","root","","userdata");
           // $abc= $link->query("SELECT * FROM `data_update`" );
           




           



                     ?>
         


            </p>
            <a href="about.php" class="btn btn-success">Check more</a>
      </div>
    </div>
    </div>    
  </section> -->

  <section class="my-5">
    <div class="py-5">
  
     <h2 class="text-center">Donation</h2>
    
  </div>


  <div class="container-fluid">
    <div class="row">
      <div class="col-log-4 col-md-4 col-12">
        <!-- <div class="card" >
         <img class="card-img-top" src="Images/pic5.jpg" alt="Card image">
         <div class="card-body">
           <h4 class="card-title">Beautiful Nature :)</h4>
           <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>
</div> -->
        </div>

        <div class="col-log-4 col-md-4 col-12">
        <div class="card" >
         <img class="card-img-top" src="Images/corona.jpg" alt="Card image">
         <div class="card-body">
           <h4 class="card-title">Covid Fund</h4>
           <p class="card-text">Donate</p>


           
    <a href="pay.php" class="btn btn-primary">Pay Now</a>
  </div>
</div>
        
      </div>

      <div class="col-log-4 col-md-4 col-12">
        <<!-- div class="card" >
         <img class="card-img-top" src="Images/pic5.jpg" alt="Card image">
         <div class="card-body">
           <h4 class="card-title">Beautiful Nature :)</h4>
           <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>
</div> -->
        
      </div>


      
    </div>
  </div>
</section>


<!-- <section class="my-5">
    <div class="py-5">
  
     <h2 class="text-center">Our Gallery</h2>
    
  </div> -->

  <!-- <div class="container-fluid">
  <div class="row">
    <div class="col-lg-4 col-md-4 col-12">
      <img src="Images/pic6.jpg" class="img-fluid pb-4">
      
    </div>
    <div class="col-lg-4 col-md-4 col-12">
      <img src="Images/pic6.jpg" class="img-fluid pb-4">
      
    </div>
    <div class="col-lg-4 col-md-4 col-12">
      <img src="Images/pic6.jpg" class="img-fluid pb-4">
      
    </div>
    <div class="col-lg-4 col-md-4 col-12">
      <img src="Images/pic6.jpg" class="img-fluid pb-4">
      
    </div>
    <div class="col-lg-4 col-md-4 col-12">
      <img src="Images/pic6.jpg" class="img-fluid pb-4">
      
    </div>
    <div class="col-lg-4 col-md-4 col-12">
      <img src="Images/pic6.jpg" class="img-fluid pb-4">
      
    </div>
    <div class="col-lg-4 col-md-4 col-12">
      <img src="Images/pic6.jpg" class="img-fluid pb-4">
      
    </div>
    <div class="col-lg-4 col-md-4 col-12">
      <img src="Images/pic6.jpg" class="img-fluid pb-4">
      
    </div>
    <div class="col-lg-4 col-md-4 col-12">
      <img src="Images/pic6.jpg" class="img-fluid pb-4">
      
    </div>
  </div>

  </div> -->

<!-- </section> -->
<!-- 
<section class="my-5">
    <div class="py-5">
  
     <h2 class="text-center">Contacts</h2>
    
  </div>
  <div class="w-50 m-auto">
    <form action="userinfo.php" method="post">
      
      <div class="form-group">
        <label>Username</label>
        <input type="text" name="user" autocomplete="off" class="form-control">
      </div>
      <div class="form-group">
        <label>Email Id</label>
        <input type="text" name="email" autocomplete="off" class="form-control">
      </div>
      <div class="form-group">
        <label>Mobile</label>
        <input type="text" name="Mobile" autocomplete="off" class="form-control">
      </div>

      <div class="form-group">
        <label>Comments</label>
        <textarea class="form-control"name="Comment">
          </textarea>
      </div>
      <button type="submit" class="btn btn-success">Submit</button>
      
    </form>
    
  </div>
</section> -->

<footer>
  <p class="p-3 bg-dark text-white text-center">@moneydonaton</p>
  
</footer>








   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



</body>
</html>