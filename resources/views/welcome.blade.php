<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Resume</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&family=Playfair+Display:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container">
        <!-- LEFT -->
        <div class="left">
            <img src="{{ asset('images/picture.jpg') }}" alt="My Photo">
            
            <h2>Personal Info</h2>
            <p><b>Name:</b> Yasmin Ivy M. Ilagan</p>
            <p><b>Birthday:</b> December 27, 2004</p>
            <p><b>Age:</b> 20 years old</p>
            <p><b>Email:</b> 23-03792@g.batstate-u.edu.ph</p>
            <p><b>Phone:</b> 09551584360</p>
            <p><b>Address:</b> Mapulo, Taysan, Batangas</p>
            <p><b>GitHub:</b> <a href="https://github.com/YasminIlagan" target="_blank">github.com/YasminIlagan</a></p>

            <h2>Skills</h2>
            <ul>
                <li>Python (basic)</li>
                <li>JavaScript (basic)</li>
                <li>PHP</li>
                <li>HTML & CSS</li>
                <li>Microsoft Office</li>
                <li>Teamwork</li>
                <li>Communication</li>
            </ul>

            <h2>Hobbies</h2>
            <ul>
                <li>Coding small projects</li>
                <li>Reading</li>
                <li>Solving Problems</li>
                <li>Cooking and Baking</li>
                <li>Volunteering</li>
            </ul>
        </div>

        <!-- RIGHT -->
        <div class="right">
            <h1>Yasmin Ivy M. Ilagan</h1>
            <p class="course">Bachelor of Science in Computer Science</p>

            <h2>Career Objective</h2>
            <p class="justify">
                A motivated Computer Science student eager to apply programming and problem-solving skills in real-world projects, 
                while continuously learning and contributing to innovative solutions. My goal is to develop impactful applications 
                that make people’s lives easier.
            </p>

            <h2>Education</h2>
            <ul>
                <li>Elementary: Taysan Central School, Taysan, Batangas (2011 - 2016)</li>
                <li>Junior High: Our Lady of Mercy Academy Inc., Taysan, Batangas (2017 - 2020)</li>
                <li>Senior High: Our Lady of Mercy Academy Inc., Taysan, Batangas (2020 - 2023)</li>
                <li>College: Batangas State University TNEU - Alangilan Campus (2023 - 2027)</li>
            </ul>

            <h2>Achievements & Activities</h2>
            <ul>
                <li>Junior Philippine Computer Society - Member</li>
                <li>Association of Committed Computer Science Students - Member</li>
                <li>Dean's Lister</li>
            </ul>

            <h2>Projects</h2>
            <ul>
                <li>Mental Health Journal App (Java, OOP concepts, DBMS integration)</li>
                <li>Smart Parking System (Arduino, Physics-driven innovation)</li>
                <li>Greenhouse Gas Tracker (Web app for carbon footprint tracking)</li>
            </ul>

            <h2>Certifications</h2>
            <ul>
                <li>Introduction to Python – Coursera</li>
                <li>Web Development Bootcamp – Udemy</li>
                <li>Database Management Basics – SoloLearn</li>
            </ul>

            <div class="btn-section">
                <a href="#" class="btn">✏ Edit Profile</a>
                <a href="#" class="btn">🌐 Save Public Resume</a>
                <a href="#" class="btn danger">⎋ Logout</a>
            </div>
        </div>
    </div>
</body>
</html>
