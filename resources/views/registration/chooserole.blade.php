<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-rtl.min.css">
            
	 <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
   
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
</head>
<body>

<div  style="margin-top:10%;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
<div class="panel panel-info" id="userrole">

<div class="panel-title" style="text-align: center" ><h4><b>Choose With which role you will sign in </b></h4></div>
@foreach ($users as $user)
   <form  action="{{route('pdashboard')}}" method="post">
		<div style="text-align: center;margin-bottom: 15px;margin-top: 15px">
		
		<input type="hidden" name="role" value="{{ $user->role1 }}">
		<button type="submit"  class="btn btn-success"> {{ $user->role1 }} </button>
		<input type="hidden" name="_token" value="{{ csrf_token() }}">

		</div>
		</form>
		<div style="text-align: center;margin-bottom: 15px;margin-top: 15px">
		<form  action="{{route('pdashboard')}}" method="post">
		<input type="hidden" name="role" value="{{ $user->role2 }}">
		<button type="submit"  class="btn btn-success"> {{ $user->role2 }} </button>
		<input type="hidden" name="_token" value="{{ csrf_token() }}">

			</div>
			</form>
	

@endforeach
</div>
</div>

</body>
</html>