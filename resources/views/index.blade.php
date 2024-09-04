<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Career Training College</title>
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

    <!-- All Members Section -->

    <section class="list">
        <h2>List of Members</h2>
        <div class="topnav">
            <input type="text" placeholder="Search..">
            <button><svg viewBox="0 0 1024 1024">
                    <path class="path1" d="M848.471 928l-263.059-263.059c-48.941 36.706-110.118 
                55.059-177.412 55.059-171.294 0-312-140.706-312-312s140.706-312 312-312c171.294 0 312 140.706 312 312 0 
                67.294-24.471 128.471-55.059 177.412l263.059 263.059-79.529 79.529zM189.623 408.078c0 121.364 97.091 
                218.455 218.455 218.455s218.455-97.091 218.455-218.455c0-121.364-103.159-218.455-218.455-218.455-121.364 
                0-218.455 97.091-218.455 218.455z"></path>
                </svg></button>
        </div>
        <!-- List -->
       <div style="overflow-x: auto;">
       <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Full Name</th>
                    <th>Age</th>
                    <th>Email</th>
                        <th>Phone</th>
                        <th>Address</th>
                    <th>Professional Summary</th>
                    <th>Section</th>
                </tr>
            </thead>
            <tbody>
                     @foreach ($members as $member)
                                 <tr>
                                    <td>{{ $member->id }}</td>
                                    <td>{{ $member->fullName }}</td>
                                    <td>{{ $member->age }}</td>
                                    <td>{{ $member->email }}</td>
                                    <td>{{ $member->phone }}</td>
                                    <td>{{ $member->address }}</td>
                                    <td>{{ $member->professionalsummary }}</td>
                                    <td>
                                <a href="{{ $member->id }}/edit">Edit</a>
                                 <form action="{{ $member->id }}/delete" method="POST"
                                  onsubmit="return confirm('Are you sure you want to delete this item?')">
                         @method('DELETE')
                            @csrf
                        <button type="submit">Delete</button>
                       </form>
                      </td>
                    </tr>
                  @endforeach                       
                
            </tbody>
        </table>
       </div>
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
