<html>
    <title> Registration Page</title>
    <body>
        <form method="POST" action="">
            {{@csrf_field()}}
            <div class="container">
                <h1>Register</h1>
                <p>Please fill in this form to create an account.</p>
                <hr>
            
                <label for="name"><b>Name</b></label>
                <input type="text" placeholder="Enter Name" name="name" id="usr_name"><br>
                @error('name')<!--validation-->
                {{$message}}<br>
                @enderror

                
                
                <label for="email"><b>Email</b></label>
                <input type="text" placeholder="Enter Email" name="email" id="email"><br>
                @error('email')<!--validation-->
                {{$message}}<br>
                @enderror
                
               

                
                <label for="password"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="password" id="password"><br>
                @error('password')<!--validation-->
                 {{$message}}<br>
                @enderror
            
               
            
                <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
                <button type="withdraw" class="cancelbtn">Cancel</button>
                <button type="submit" class="registerbtn">Register</button>
            </div>
            
            <div class="container signin">
            <p>Already have an account? <a href="#">Sign in</a>.</p>
            </div>

        </form>
    </body>
</html>