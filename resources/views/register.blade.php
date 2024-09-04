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
   <!-- Navigation Bar -->
<nav class="navbar">
    <div class="navbar-container">
        <div class="navbar-logo">
            <img src="logo.png" alt="Career Training College Logo" width="150" height="70">
        </div>
        <ul class="navbar-links">
            <li><a href="/index">Home</a></li>
            <li><a href="/about">About Us</a></li>
            <li><a href="/createmember">Create Member</a></li>
        </ul>
        <div class="navbar-logout">
            <a href="/logout">Logout</a>
        </div>
    </div>
</nav>

<!-- Login Section   -->
<section class="register-section">
    <h2>Create Account</h2>

    <form method="POST" action="/validate-register">
        @csrf
        
        <div class="input-group">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" placeholder="Enter your name" required>
        </div>
        
        <div class="input-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Enter your email" required>
        </div>
        
        <div class="input-group">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" placeholder="Create a password" required>
        </div>
        
        <div class="input-group">
            <input type="submit" value="Create Account" class="submit-button">
        </div>
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
