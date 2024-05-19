<?php
// Start the session
session_start();

// Check if the session variable is set
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    // User is logged in
    //echo "Welcome back, " . $_SESSION["username"] . "!";
} 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styless.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="css/styles.css"> -->
    <title>Flying Birds</title>
    <link rel="FlyingBirds.pnh" href="favicon.ico" type="image/x-icon">
</head>

<body>

    <?php include('menu.php'); ?>


    <div class="scrolling-text-container">
        <marquee behavior="scroll" direction="left" scrollamount="4">Embrace your journey Flying Birds - Where Dreams
            Take Wing, Guiding Every Flight Towards Success!</marquee>
    </div>
    <div class="header-image">
        <img src="bag.jpeg" alt="Header Image">
        <a href="psychometrictest.php" class="psychometric-button">Psychometric Test</a>
    </div>
    <div class="buttons-container">
        <h2>Are you a?</h2>
        <div class="button-group">
            <a href="school.php" class="button">SCHOOL STUDENTS</a>
            <a href="college.php" class="button">COLLEGE STUDENTS</a>
        </div>
    </div>
    <section class="video-section">
        <h2 class="section-heading">Why Education is important?</h2>
        <div class="video-container">
            <iframe src="https://www.youtube.com/embed/12ass4FSCcg" frameborder="0" allowfullscreen width="800" height="460" autoplay></iframe>
        </div>
    </section>
    <!-- <section class="video-content-section1" style="margin-bottom: 10px;">
        <h2 class="section-heading">Why Education is Important?</h2>
        <div class="video-and-content1">
            <div class="video-container1">
                <iframe src="https://www.youtube.com/embed/12ass4FSCcg" frameborder="0" allowfullscreen width="800" height="460" autoplay></iframe>
            </div>
            <div class="content-box1">
                <h3>Exploring the Power of Education</h3>
                <p class="para">
                    Education is like a magical key that unlocks countless doors of opportunity. It helps us learn new things, understand the world around us, and discover our passions. With education, we can dream big and turn those dreams into reality. It gives us the skills and knowledge we need to lead a better, more fulfilling life. Plus, it helps us become better citizens, making our communities and the world a brighter, more hopeful place.
                    Education is like a magical key that unlocks countless doors of opportunity. It helps us learn new things, understand the world around us, and discover our passions. With education, we can dream big and turn those dreams into reality. It gives us the skills and knowledge we need to lead a better, more fulfilling life. Plus, it helps us become better citizens, making our communities and the world a brighter, more hopeful place.
                </p>
            </div>
        </div>
    </section> -->
    <h2 class="section-heading" style="margin-top: 0;">Categories</h2>
    <div class="category-buttons">
        <div class="category-row">
            <button class="category-button">Engineering</button>
            <button class="category-button">Medicine</button>
            <button class="category-button">Design and Fashion</button>
        </div>
        <div class="category-row">
            <button class="category-button">Arts and Humanities</button>
            <button class="category-button">Animation and Multimedia</button>
            <button class="category-button">Hotel Management and Catering</button>
        </div>
        <div class="category-row">
            <button class="category-button">Commerce and Business</button>
            <button class="category-button">Fine Arts</button>
            <button class="category-button">Science</button>
        </div>
    </div>
    <section class="video-content-section1" style="margin-bottom: 10px;">
        <h2 class="section-heading">Why Education is Important?</h2>
        <div class="video-and-content1">
            <div class="video-container1">
                <iframe src="https://www.youtube.com/embed/12ass4FSCcg" frameborder="0" allowfullscreen width="800" height="460" autoplay></iframe>
            </div>
            <div class="content-box1">
                <h3>Exploring the Power of Education</h3>
                <p class="para">
                    Education is like a magical key that unlocks countless doors of opportunity. It helps us learn new
                    things, understand the world around us, and discover our passions. With education, we can dream big
                    and turn those dreams into reality. It gives us the skills and knowledge we need to lead a better,
                    more fulfilling life. Plus, it helps us become better citizens, making our communities and the world
                    a brighter, more hopeful place.
                    Education is like a magical key that unlocks countless doors of opportunity. It helps us learn new
                    things, understand the world around us, and discover our passions. With education, we can dream big
                    and turn those dreams into reality. It gives us the skills and knowledge we need to lead a better,
                    more fulfilling life. Plus, it helps us become better citizens, making our communities and the world
                    a brighter, more hopeful place.
                </p>
            </div>
        </div>
    </section>
    <section class="roadmap-section">
        <h2 class="question">Roadmap to Become Successful in Life</h2>
        <p class="service-box">
            Here is the roadmap to help you achieve success in life. Our experienced mentors provide guidance to
            students, helping them make informed decisions about their education and career paths. Whether you are a
            school student or a college student, we have the resources and support to assist you in reaching your goals.
        </p>
        <div class="roadmap-content">
            <img src="screen-shot-2020-10-28-at-12537-pm.png" alt="Roadmap Image">
        </div>
    </section>

    <div class="fixed-contact-form">
        <button class="close-button" id="close-button">×</button>

        <div class="form-content">
            <div class="form-header">
                <img src="FlyingBirds (1).png" alt="Your Logo">
                <span class="company-name">Flying Birds</span>
            </div>
            <form id="popup">
                <div class="form-group">
                    <!-- <label for="name">Name</label> -->
                    <input type="text" id="name" name="name" required placeholder="Name">
                </div>
                <div class="form-group">
                    <!-- <label for="phone">Phone Number</label> -->
                    <input type="tel" id="phone" name="phone" required placeholder="Phone">
                </div>
                <div class="form-group">
                    <!-- <label for="email">Email</label> -->
                    <input type="email" id="email" name="email" required placeholder="E-mail">
                </div>
                <div class="form-group">
                    <!-- <label for="message">Message</label> -->
                    <textarea id="message" name="message" rows="3" required placeholder="Message"></textarea>
                </div>

                <div class="form-group">
                    <button type="submit" class="submit-button">Submit</button>
                </div>
            </form>
        </div>
    </div>
    <!-- <div class="content-box"> -->
    <div class="service-section">
        <h2 class="section-heading">Our Services</h2>
        <p class="para1"> Here is the roadmap to help you achieve success in life. Our experienced mentors provide
            guidance to students, helping them make informed decisions about their education and career paths. Whether
            you are a school student or a college student, we have the resources and support to assist you in reaching
            your goals.</p>
        <div class="service-boxes">
            <div class="service-box">
                <img src="services1.jpg" alt="Service 1">
                <h3 class="service-name">Mentorship</h3>
                <p>Providing guidance and support to students for their personal and academic growth.</p>
            </div>
            <div class="service-box">
                <img src="service2.jpg" alt="Service 2">
                <h3 class="service-name">counseling</h3>
                <p>Counseling is a therapeutic process where individuals receive guidance and support to address
                    emotional, psychological, or personal challenges.</p>

            </div>
            <div class="service-box">
                <img src="service3.jpg" alt="Service 3">
                <h3 class="service-name">Education gudiances</h3>
                <p>Educational guidance provides personalized support and resources to help individuals navigate their
                    academic journey and make informed decisions about their education</p>
            </div>
            <div class="service-box">
                <img src="service4.jpg" alt="Service 4">
                <h3 class="service-name">Awareness</h3>
                <p>Promoting knowledge and understanding for informed choices and positive societal impact.</p>
            </div>
            <div class="service-box">
                <img src="service4.jpg" alt="Service 4">
                <h3 class="service-name">Awareness</h3>
                <p>Promoting knowledge and understanding for informed choices and positive societal impact.</p>
            </div>
            <div class="service-box">
                <img src="service4.jpg" alt="Service 4">
                <h3 class="service-name">Awareness</h3>
                <p>Promoting knowledge and understanding for informed choices and positive societal impact.</p>
            </div>
        </div>
    </div>
    </div>

    <section class="image-content-section">
        <div class="content-box">
            <h2 class="section-heading">Education</h2>
            <p>
                Education is a powerful force that inspires individuals to reach their full potential, fosters critical
                thinking and creativity, boosts confidence, expands cultural horizons, transforms lives, promotes social
                change, and encourages lifelong learning. It is the cornerstone of personal and societal growth, opening
                doors to a brighter future. </p>
        </div>
        <div class="image-box">
            <img src="lids.jpeg" alt="Image">
        </div>
    </section>
    <section class="competitive-exams-section">
        <h2 class="section-heading">Competitive Exams</h2>
        <div class="exam-grid">
            <div class="exam-item">
                <a href="#">TANCET</a>
            </div>
            <div class="exam-item">
                <a href="#">NEET</a>
            </div>
            <div class="exam-item">
                <a href="#">IIT/JEE</a>
            </div>
            <div class="exam-item">
                <a href="#">AILET</a>
            </div>
            <div class="exam-item">
                <a href="#">NIFT</a>
            </div>
            <div class="exam-item">
                <a href="#">NID</a>
            </div>
            <div class="exam-item">
                <a href="#">CLAT</a>
            </div>
            <div class="exam-item">
                <a href="#">NATA</a>
            </div>
            <div class="exam-item">
                <a href="#">AIIMS</a>
            </div>
            <div class="exam-item">
                <a href="#">UCEED</a>
            </div>
            <div class="exam-item">
                <a href="#">CEED</a>
            </div>
            <div class="exam-item">
                <a href="#">HMEE</a>
            </div>
            <div class="exam-item">
                <a href="#">NEST</a>
            </div>
            <div class="exam-item">
                <a href="#">NID</a>
            </div>
            <div class="exam-item">
                <a href="#">NCHM JEE</a>
            </div>
            <div class="exam-item">
                <a href="#">AEEE</a>
            </div>
            <!-- Repeat this block for additional rows and columns -->
        </div>
    </section>
    <script>
        // JavaScript for toggling the menu icon
        document.querySelector(".menu-icon").addEventListener("click", function() {
            document.querySelector(".menu-open").classList.toggle("menu-open-active");
        });
    </script>

    <!-- WhatsApp button -->
    <div class="whatsapp-button">
        <a href="https://api.whatsapp.com/send?phone=YOUR_WHATSAPP_NUMBER" target="_blank">
            <img src="whatsapp-logo-vector-11573849504ftryug0qkh-removebg-preview.png" alt="WhatsApp">
        </a>
    </div>
    <div class="animated-character">
        <img src="icegif-497-ezgif.com-gif-maker.gif" alt="Animated Character">
    </div>
    <div class="chatbot-container">
        <div class="chat-header">
            Flying Birds Chat
            <span class="close-button" onclick="closeChat()">×</span>
        </div>
        <div class="chat-messages">
            <!-- Messages will be appended here -->
        </div>
        <div class="chat-input">
            <!-- <input type="text" id="userInput" placeholder="Type your message...">
            <button onclick="sendMessage()">Send</button> -->
            <p>Thanks for visiting our page! How can I help you today?</p>
           
                <!-- Options: -->
                
                    <p><a href="http://localhost/flying%20birds/psychometrictest.php" style="color: blue;" target="_blank">Career guidance</a></p>
                    <p><a href="http://localhost/flying%20birds/services.php" style="color: blue;" target="_blank">Counseling</a></p>
                    <p><a href="http://localhost/flying%20birds/services.php" style="color: blue;" target="_blank">Mentorship</a></p>
                    <p><a href="http://localhost/flying%20birds/services.php" style="color: blue;" target="_blank">Awareness program</a></p>
                    <p><a href="http://localhost/flying%20birds/contactus.php" style="color: blue;" target="_blank">Contact us</a></p>
                    <!-- <li></li> -->
               
                
            
        </div>
    </div>
    <!-- Chat input -->

    <!-- Chatbot container -->
    <!-- <div class="chatbot-container" id="chatbot-container"> -->
    <!-- Add your chatbot iframe or code here -->
    <!-- For example, you can embed a chatbot iframe -->
    <!-- <iframe src="your_chatbot_url" frameborder="0"></iframe> -->
    <!-- <div id="chatbot-container" class="chatbot-container">
        <button class="close-button" onclick="toggleChatbot()">Close</button>
        <div class="chat-content" id="chat-content"> -->
    <!-- Initial welcome message -->
    <!-- <div class="chat-message bot-message">Hello! Welcome to Flying Birds. How can I help you?</div>
        </div>
    </div>
</div>         -->
    <footer class="footer">
        <div class="follow-us">
            <div class="follow-us-container">
                <h3>Follow Us</h3>
                <!-- Social media icons (Facebook and Google) -->
                <a href="#"><img src="instagram.png" alt="Facebook"></a>
                <a href="#"><img src="instagram.png" alt="Google"></a>
                <a href="#"><img src="instagram.png" alt="Google"></a>
            </div>
        </div>

        <div class="footer-container">
            <div class="footer-column"></br>
                <h3>Our Services</h3></br>
                <ul>
                    <li><a href="#">Study Abroad</a></li>
                    <li><a href="#">Diploma</a></li>
                    <li><a href="#">Class 10</a></li>
                    <li><a href="#">Class 12</a></li>
                    <li><a href="#">For College</a></li>
                    <li><a href="#">Working Professionals</a></li>
                    <li><a href="#">Counselors</a></li>
                    <li><a href="#">Extra Courses</a></li>
                    <li><a href="#">Exams</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <img src="flyingbirds1.png" alt="Company Logo" class="footer-logo">
                <p>Flying Birds</p>
                <p>Annai mira college of engineering and technology vellore</p>
                <p>Phone: <a href="tel:008757845682">(+91) 875 784 568</a></p>
                <p>Email: <a href="mailto:info@gmail.com">flyingbirds@gmail.com</a></p>
            </div>

            <div class="footer-column">
                <h3>Quick Links</h3></br>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Achievements</a></li>
                    <li><a href="#">Psychometric Test</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Team</a></li>
                </ul>
            </div>
        </div>
        <!-- Follow Us Header -->

        <div class="footer-bottom">
            &copy; 2023 Your Company. All Rights Reserved.
        </div>
    </footer>


    <script src="js/script.js"></script>
    <script src="js/chatbot.js"></script>

    <style>
        .chat-input {
            display:block;
        } 
    </style>

</body>

</html>
