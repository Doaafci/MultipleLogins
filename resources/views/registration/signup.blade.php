<!DOCTYPE html>
<html>
<head>
	<title>Rigestration Page</title>
	
			<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-rtl.min.css">
            
			 <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
   
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

	
	
</head>
<body>
    

  <div class="container">
  @if($errors->any())
  <div id="Msg" style="margin-top:10%;margin-bottom:-5%" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
	<h4>{{$errors->first()}} , Sign Up With another role OR <a href="#" onClick="$('#Msg').hide(); $('#signinbox').show()"> Sign In Here</a></h4>            
	</div>
@endif

<div id="userrole" style="margin-top:10%;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
<div class="panel panel-info" id="userrole">

<div class="panel-title" style="text-align: center" ><h4><b>Sign Up As</b></h4></div>

		<div style="text-align: center;margin-bottom: 15px;margin-top: 15px">
		  <button type="submit"  class="btn btn-success" onClick="$('#userrole').hide(); $('#orchestra').show()" >Orchestra Officer</button>
			
           <button type="submit"  class="btn btn-success" onClick="$('#userrole').hide(); $('#musician').show()">Musician</button>
         </div>
 </div>
 </div>
 <div id="musician" style="display:none; margin-top:10%;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
<div class="panel panel-info"  >
	<div class="panel-heading">
      	<div class="panel-title" style="text-align: center">Sign Up</div>
               </div>

            <form action="{{ route('createRegister') }}" method="post">
            <div style="padding-top:30px" class="panel-body" >
             <input type="hidden" name="role" value="musician">
                <div style="margin-bottom: 25px" >
                     <input type="text" class="form-control" name="email" id="email" placeholder="Email">      
                           </div>
                <div style="margin-bottom: 25px">
                    
                    <input class="form-control" type="text" name="fname" id="fname" placeholder="First Name">
                </div>
                <div style="margin-bottom: 25px">
                    
                    <input class="form-control" type="text" name="surname" id="surname" placeholder="SurName">
                </div>
                <div style="margin-bottom: 25px">
                    
                    <div style="margin-top:40px">
                                    <h4>Gender</h4>

                                    <label class="radio-inline">
                            		 <input type="radio" name="gender" value="Female"> Female
								    </label>
								    <label class="radio-inline">
								      <input type="radio" name="gender" value="Male">Male
								    </label>
								    
								    </div>
                </div>
                
                <div style="margin-bottom: 25px">
                    
                    <input class="form-control" type="password" name="password" id="password" placeholder="Password">
                </div>
               <div style="margin-top:30px;margin-left: 40%" class="form-group">
               <button type="submit"  class="btn btn-success">Sign Up</button>
                                </div>
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
                </div>
            </form>
       
</div>
</div>
 <div id="orchestra" style="display:none; margin-top:10%;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">

<div class="panel panel-info"  >
	<div class="panel-heading">
      	<div class="panel-title" style="text-align: center">Sign UP</div>
               </div>

            <form action="{{ route('createOrchestraRegister') }}" method="post">
            <div style="padding-top:30px" class="panel-body" >
                <div style="margin-bottom: 25px" >
                <input type="hidden" name="role" value="orchestra">
                     <input type="text" class="form-control" name="email" id="email" placeholder="Email">      
                           </div>
                <div style="margin-bottom: 25px">
                    
                    <input class="form-control" type="text" name="fname" id="fname" placeholder="First Name">
                </div>
                <div style="margin-bottom: 25px">
                    
                    <input class="form-control" type="text" name="surname" id="surname" placeholder="Sur Name">
                </div>
                <div style="margin-bottom: 25px">
                    
                    <input class="form-control" type="text" name="orchestraname" id="orchestraname" placeholder="Orchestra Name">
                </div>
                <div style="margin-bottom: 25px">
                    
                    <div style="margin-top:40px">
                                    <h4>Gender</h4>

                                    <label class="radio-inline">
                            		 <input type="radio" name="gender" value="Female"> Female
								    </label>
								    <label class="radio-inline">
								      <input type="radio" name="gender" value="Male">Male
								    </label>
								    
								    </div>
                </div>
                
                
                <div style="margin-bottom: 25px">
                    
                    <input class="form-control" type="password" name="password" id="password" placeholder="Password">
                </div>
               <div style="margin-top:30px;margin-left: 40%" class="form-group">
               <button type="submit"  class="btn btn-success">Sign Up</button>
                                </div>
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
                </div>
            </form>
       
</div>
 </div>
</div>

</body>
</html>