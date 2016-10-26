<!DOCTYPE html>
<html>
<head>
	<title>Sign In Page</title>
	
			<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-rtl.min.css">
            
			 <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
   
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

	
	</head>
<body>
<div id="container">
<div id="musician" style=" margin-top:10%;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
<div class="panel panel-info"  >
	<div class="panel-heading">
      	<div class="panel-title" style="text-align: center">Sign In  OR <a style="color:green;"href="{!! URL::route('newRegister') !!}" > <b>Sign Up Here</b></a></h4>          </div>
               </div>

            <form action="{{ route('signincheck') }}" method="post">
            <div style="padding-top:30px" class="panel-body" >
             

                <div style="margin-bottom: 25px" >
                     <input type="text" class="form-control" name="email" id="email" placeholder="Email">      
                           </div>
                
                
                <div style="margin-bottom: 25px">
                    
                    <input class="form-control" type="password" name="password" id="password" placeholder="Password">
                </div>
                <div  style="text-align: left">
                <a style="color:blue;" href="{{ route('forgettpassword') }}" > <b>Forgot password?</b></a></h4>         
                 </div>
                
               <div style="margin-top:30px;margin-left: 40%" class="form-group">
               <button type="submit"  class="btn btn-success">Sign In</button>
                                </div>
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
                </div>
            </form>
       
</div>
</div>
</div>
</body>
</html>