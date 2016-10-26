<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-rtl.min.css">
            
			 <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
   
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
</head>
<body>

<div id="container">

<div  style=" margin-top:10%;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
<div class="panel panel-info"  >
	
      	<div class="panel-title" style="text-align: center;">

      	<h2> {{ Session::get('fname')}} {{ Session::get('surname')}} </h2> 
      	<h4> {{ Session::get('email')}}  </h4> 
      	<h4> {{ Session::get('gender')}}  </h4> 
      	<h4> {{ Session::get('role')}}  </h4> 
      		<form action="{{ route('logout') }}"  method="GET">
		<div style="text-align: center;margin-bottom: 15px;margin-top: 15px">
		  <button type="submit"  class="btn btn-success">Logout</button>
			</div>
			</form>
      	   </div>
               

            
       
</div>
</div>
</div>

</body>
</html>