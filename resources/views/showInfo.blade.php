<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('header')
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
		
    </head>
	
			
        <body>
		<h4> Hey {{ $user->fname}}! </h4>
<table border = "1">
<tr>

<td>First Name</td>
<td>Last Name</td>
<td>Age</td>
<td>Gender</td>
<td>Blood Group</td>
<td>Result</td>
</tr>

<tr>
<td>{{ $user->fname }}</td>
<td>{{ $user->lname }}</td>
<td>{{ $user->age }}</td>
<td>{{ $user->sex }}</td>

<td>{{ $user->bloodGroup }}</td>
<td>{{ $user->result }}</td>
</tr>

</table>
</body>

            
@include('footer')            
</html>
