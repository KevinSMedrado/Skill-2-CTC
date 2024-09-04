<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Career Training College</title>
    <link rel="icon" href="logo.png" type="image/png">
    <link rel="stylesheet" href="{{ asset ('styles.css')}}">
</head>
<body>
  

<!-- Login Section   -->
    <section class="login-section">
        <h2>Login</h2>

        <form method="POST" action="{{route('login')}}">
            @csrf
            <label for="email">Email:</label>
            <input type="email" id="email" name="email">
            
            <label for="password">Password:</label>
            <input type="password" id="password" name="password">
            
           <input type="submit" value="Login"> 
        </form>
        
    </section>
<!-- Footer Section -->
<footer>
    <div class="footer-content">
        <div class="footer-links">
            <ul>
                <li><a href="/index">Home</a></li>
                <li><a href="/about">About Us</a></li>
                <li><a href="/createmember">Create Member</a></li>
            </ul>
        </div>
        <div class="footer-map">
            <img src="maps.png" alt="Map" width="200" height="150">
            <p>251/255 Stirling St, Perth WA 6000</p>
        </div>
    </div>
    <div class="footer-bottom">
        <p>© 2024 Career Training College. All rights reserved.</p>
    </div>
</footer>
    
</body>
</html>
