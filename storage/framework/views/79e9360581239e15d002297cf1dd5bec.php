

<?php $__env->startSection('content'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">

<div class="container">
    <!-- LEFT -->
    <div class="left">
        <img src="<?php echo e(asset('images/picture.jpg')); ?>" alt="My Photo">
        <h2>Personal Info</h2>
        <p><b>Name:</b> <?php echo e($user->name); ?></p>
        <p><b>Birthday:</b> <?php echo e($user->birthday ?? 'December 27, 2004'); ?></p>
        <p><b>Age:</b> <?php echo e($user->age ?? '20 years old'); ?></p>
        <p><b>Email:</b> <?php echo e($user->email); ?></p>
        <p><b>Phone:</b> <?php echo e($user->phone ?? '09551584360'); ?></p>
        <p><b>Address:</b> <?php echo e($user->address ?? 'Mapulo, Taysan, Batangas'); ?></p>
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
        <h1><?php echo e($user->name); ?></h1>
        <p class="course">Bachelor of Science in Computer Science</p>

        <h2>Career Objective</h2>
        <p class="justify">
            A motivated Computer Science student eager to apply programming and problem-solving skills in real-world projects,
            while continuously learning and contributing to innovative solutions.
        </p>

        <h2>Education</h2>
        <ul>
            <li>Elementary: Taysan Central School (2011 - 2016)</li>
            <li>Junior High: Our Lady of Mercy Academy (2017 - 2020)</li>
            <li>Senior High: Our Lady of Mercy Academy (2020 - 2023)</li>
            <li>College: Batangas State University (2023 - 2027)</li>
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
            <a href="#" class="btn">⬇ Download PDF</a>
            <a href="#" class="btn danger">⎋ Logout</a>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Yasmin Ivy\3RD YEARRRR\WEB\Resume\resume-app\resume-app\resources\views/resume.blade.php ENDPATH**/ ?>