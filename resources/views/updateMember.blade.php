<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Member - Career Training College</title>
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

    <div class="body_wrapper">
            <form class="login" action="/{{$member->id}}/update" method="POST">
             @csrf
             @method('POST')
             
             <div class="input-field">
                <label>Full Name</label>
                <input type="text" name="fullName" value = "{{$member->fullName}}">
             </div>
             <div class="input-field">
                <label>Email</label>
                <input type="email" name="email" value = "{{$member->email}}">
             </div>
             <div class="input-field">
                <label>Phone</label>
                <input type="text" name="phone" value = "{{$member->phone}}">
             </div>
             <div class="input-field">
                <label>Address</label>
                <input type="text" name="address" value = "{{$member->address}}">
             </div>
             <div class="input-field">
                <label>Age</label>
                <input type="text" name="age" value = "{{$member->age}}">
             </div>
             <div class="input-field">
                <label>Professional Summary</label>
                <textarea name="professionalsummary" rows="5" >{{$member->professionalsummary}}</textarea>
             </div>
             <div class="input-field">
                <input id = "member-submit" type = "submit">
             </div>
            </form>
        </div>
   

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
