<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('header')
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
		
    </head>
	
	<div class="card-body"><div class="text-align: right">
           <form name="myForm" action="/logout" method="post">
              @csrf
              <button style="float:right;" type="submit" class="white-bg white-txt">Logout</button>
           </form>
       </div>
	   
	   <form name="myForm2" action="/view-records/{{$id}}"em method="get" >
	   
	   <button style="float:right; position:relative; left:40px; top:20px;" type="submit" class="white-bg white-txt">Show info</button>

	   </form>
	   
	  

    <h4> Welcome {{ $firstName}} </h4>

    <div>
			
        <form action="/py/{{$id}}" method="post" enctype="multipart/form-data">
                <!-- Add CSRF Token -->
                @csrf
            <div class="form-group">
                <label>Product Name</label>
                <input type="text" class="form-control" name="name" required>
            </div>
            <div class="form-group">
                <input type="file" name="file" required>
            </div>
            <button type="submit">Submit</button>
        </form>
        
        </div>
            
@include('footer')            
</html>
