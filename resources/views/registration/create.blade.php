<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('header')
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
               
        <form method="POST" action="/done">
            @csrf
            <fieldset style="margin-left: 30px;">
                <legend style="letter-spacing: 1px; font-family: Helvetica; font-size: 20px; color: #C40000; font-weight: bold; ">Sign Up</legend>
                <div style="margin-left: 30px;">
                <label for="name">Name:</label> <br/>
                    <input type="text" name="name" value="" placeholder="First Name / UserName" title="Alphabetic only" pattern="[a-zA-Z]{1,}" required/>
                    <input type="text" name="lname" value="" placeholder="Last Name" title="Alphabetic only" pattern="[a-zA-Z]{1,}" required/><br/><br/>
               
    
                <label for="EmailAdress">Email Adress:</label> <br/>
                    <input type="email" name="email" value="" placeholder="Enter your E-mail" title="Enter Valid E-Mail" required/><br><br/>
                
                <label for="date-of-birth">Date of birth:</label> <br/>
                    <input type="date" name="dob" value="" required/><br/><br/>
    
                <label for="age">Age:</label> <br/>
                    <input type="number" name="age" value="" title="Above than 12 only" min="12" required/><br/><br/>
    
            
Sex :<br><label for="male" style="font-size: 16px;">Male</label><input type="radio" name="sex" id="male" value="male" required/>
			<label for="female" style="font-size: 16px; margin-left: 20px;">Female</label><input type="radio" name="sex" id="female" value="female">
			<br/><span id="sexerr"></span><br/>
			
			Blood Group:<br><label for="blood" style="font-size: 16px;">A+</label><input type="radio" name="bldgroup" id="bldgroup" value="A+" required/>
			<label for="blood" style="font-size: 16px; margin-left: 20px;">A-</label><input type="radio" name="bldgroup" id="bldgroup" value="A-">
			<label for="blood" style="font-size: 16px; margin-left: 20px;">B+</label><input type="radio" name="bldgroup" id="bldgroup" value="B+">
			<label for="blood" style="font-size: 16px; margin-left: 20px;">B-</label><input type="radio" name="bldgroup" id="bldgroup" value="B-">
			<label for="blood" style="font-size: 16px; margin-left: 20px;">O+</label><input type="radio" name="bldgroup" id="bldgroup" value="O+">
			<label for="blood" style="font-size: 16px; margin-left: 20px;">O-</label><input type="radio" name="bldgroup" id="bldgroup" value="O-">
			<label for="blood" style="font-size: 16px; margin-left: 20px;">AB+</label><input type="radio" name="bldgroup" id="bldgroup" value="AB+">
			<label for="blood" style="font-size: 16px; margin-left: 20px;">AB-</label><input type="radio" name="bldgroup" id="bldgroup" value="AB-">
			<br/><br/>

                
                <label for="password">Password:</label> <br/>
                    <input type="password" name="password" placeholder="Password" title="Password should be of length greater than 8" pattern=".{8,}" required/><br><br/>
                
                <label for="confirm-password">Confirm Password:</label> <br/>
                    <input type="password" name="password_confirmation" placeholder="Re-enter Password" title="Type the same Password as above" required/><br><br/>
    
                <input type="submit" name="submit" value="Register"  />&nbsp
                <input type="reset" name="Reset" />
                </div>
    
            </fieldset>
        </form>
            
            
@include('footer')            
</html>
