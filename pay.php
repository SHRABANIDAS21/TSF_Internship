<style type="text/css">
	#back{
		
		border-radius: 30px;
		background-color: gray;
	}
</style>


<!DOCTYPE html>
<html>
<head>
   <title>TSF_internship</title>
     <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<!-- <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">The Sparks Foundation</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">Customers</a></li>
      <li><a href="#">About us</a></li>
      <li><a href="#">Contact</a></li>
    </ul>
      
</div>
</nav> -->

<div class="col-sm-12">
  <center>
  <h1>Covid-19  Fund</h1>
  </center>
</div>

<div class="container"  >
   <div class="col-sm-12" >

    <div class="col-sm-3" >
      
    </div>
    <div class="col-sm-6" id="back">

      
    <form method="POST" action="donate.php" method="post">
  <div class="form-group">

  	 <label for="customername"><h3>Name: </h3> </label>
    <input type="text" class="form-control" id="customername" name="customername" placeholder="Enter name">

         <label for="price"><h3>Amount: </h3> </label>
    <input type="number" class="form-control" id="price" name="price" placeholder="Enter Amount">

         <label for="contactno"><h3>Phone No: </h3> </label>
    <input type="number" class="form-control" id="contactno" name="contactno" placeholder="Enter Phone no">

    

    <label for="email"><h3>Email: </h3></label>
    <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email">
    
    
  </div>
  
   <input type="submit"  class="btn btn-primary" name="submit" id="submit" value="Pay Now">


 </form>

      </div>
      <div class="col-sm-3">
        
      </div>
   

</div>


</div>
</body>
</html>



 