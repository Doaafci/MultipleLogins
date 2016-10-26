<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
	
			<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-rtl.min.css">
            
			 <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
   
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

	
	</style>
</head>
<body>
    

<div class="container">
 @if($errors->any())
  <div id="Msg" style="margin-top:10%;margin-bottom:-5%" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
	<h4>{{$errors->first()}}</h4>            
	</div>
@endif
<div  style="margin-top:10%;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
<div class="panel panel-info" id="userrole">

<div class="panel-title" style="text-align: center" ><h4><b>WELCOME</b></h4></div>
		<form action="{{ route('signin') }}"  method="GET">
		<div style="text-align: center;margin-bottom: 15px;margin-top: 15px">
		  <button type="submit"  class="btn btn-success">Sign In</button>
			</div>
			</form>
          <form action="{{ route('newRegister') }}" method="GET">
		<div style="text-align: center;margin-bottom: 15px;margin-top: 15px">
		  <button type="submit"  class="btn btn-success">Sign Up</button>
         </div>
         </form>
 </div>
 </div>
 </div>


</body>
</html>