<!DOCTYPE html>
<html>
<head>
	<title>Forget password</title>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-rtl.min.css">
            
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
   
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
</head>
<body>
<div  style="margin-top:10%;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
<div class="panel panel-info" >
<div class="panel-heading">
	<div class="panel-title" style="text-align: center">reset password</div>
</div>
		<form action="{{ route('resetpasswordDB') }}" method="post">
			<div style="padding-top:30px" class="panel-body" >
		<div style="text-align: center;margin-bottom: 15px;margin-top: 15px">
		<div style="margin-bottom: 25px" >
		
            <input type="text" class="form-control" name="email" id="email" placeholder="email">      
                       </div>
		 <div style="margin-bottom: 25px" >

            <input type="password" class="form-control" name="password" id="password" placeholder="New password">      
                       </div>
		  <button type="submit"  class="btn btn-success">save changes</button>
		<input type="hidden" name="_token" value="{{ csrf_token() }}">

           </div>
         </div>
         </form>
 </div>
 </div>
</body>
</html>