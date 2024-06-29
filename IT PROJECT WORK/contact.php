<?php

$servername = "localhost";
$username = "root"; 
$password = "";      
$dbname = "contact_form_db";  


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

   
    $email = $conn->real_escape_string($email);
    $subject = $conn->real_escape_string($subject);
    $phone = $conn->real_escape_string($phone);
    $message = $conn->real_escape_string($message);

   
    $sql = "INSERT INTO messages (email, subject, phone, message) VALUES ('$email', '$subject', '$phone', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Message Successfully Sent!');</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
} else {
    echo "Invalid request method.";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>CricketforHimalayas</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poetsen+One&display=swap" rel="stylesheet">
    <script src="index.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poetsen+One&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
        <style>
            .footer {
    background-color: whitesmoke;
    padding: 20px;
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
}

.footer-contact, .footer-social, .footer-author {
    margin-bottom: 20px;
}

.footer-item {
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 5px 0;
}

.footer-item ion-icon {
    margin-right: 10px;
    color: blue; /
}

.footer-item span {
    color: blue; 
    font-family: system-ui;
    font-size: larger;
}

.footer-social ul {
    list-style-type: none;
    padding: 0;
    display: flex;
    gap: 30px; 
}

.footer-social button {
    background: none;
    border: none;
    cursor: pointer;
}

.footer-social ion-icon {
    color: blue; 
}

.footer-author span {
    color: blue;
    font-family: system-ui;
    font-size: larger;
}

.footer-credits {
    text-align: center;
    position: relative;
    bottom:30px;
    color: blue;
    font-family: system-ui;
    font-size: larger;}
    
#Abouttheauthor {
        background-color: #f0f0f0;
        padding: 50px 0; 
        text-align: center; 
    }

.author {
        max-width: 800px; 
        margin: 0 auto; 
        background-color: #fff; 
        padding: 20px; 
        border-radius: 10px; 
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.1); 
        height:850px;
    }

.author h2 {
        color: black;
        font-size: 24px; 
        margin-bottom: 10px; 
    }

.author-image {
        margin-bottom: 20px; 
    }

.author-image img {
        border-radius: 50%; 
        width: 150px; 
        height: 150px; 
        object-fit: cover; 
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); 
    }

.author-info {
        margin-bottom: 20px; 
    }

.author-info p {
        font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        color: black; 
        line-height: 1.6; 
        margin-bottom: 20px;
    }

.author-socials {
        margin-bottom: 20px; 
    }

.author-socials a {
        margin-right: 10px; 
    }

.author-expertise {
        margin-bottom: 20px; 
    }

.author-expertise h2 {
        color: black; 
        font-size: 24px; 
        margin-bottom: 10px; 
    }

.author-expertise img {
        width: 200px; 
        height: 120px; 
        margin-bottom: 10px; 
    }

.author-expertise p {
        font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        color: black;
        line-height: 1.6; 
        width: 100%;
        margin: 0 auto; 
    }
.footer-social:hover {
    background-color: transparent;

    }

            </style>
</head>
<body style="background-color: whitesmoke;">
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="upload.php">Upload</a></li>
                <li><a href="index2.html">Shop</a></li>
                <li><a href="index3.html">News</a></li>
                <li><a href="contact.php" style="border-bottom:3px solid greenyellow;box-shadow: 0 0 5px 1px rgba(0, 0, 0, 0.5);">Contact</a></li>
            </ul>
        </nav>
    </header>
    <section id="Contact">
        <br>
        <h2 style="color: black; display: flex; justify-content: center; position: relative; top: 100px;">CONTACT US</h2>
        <br>
        <div class="get-in-touch">
            <div class="left-side">
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <h2 style="color: blue; display: flex; justify-content: center; position: relative; top: 4px;">Send a message</h2>
                    <hr>
                    <label for="email">Email - </label>
                    <input type="email" name="email" id="email" placeholder="Email" required>
                    <label for="subject">Subject - </label>
                    <input type="text" name="subject" placeholder="Subject" id="subject">
                    <label for="phone">Phone number - </label>
                    <input type="tel" name="phone" placeholder="Phone no." style="width: 300px;" id="phone">
                    <label for="message">Message - </label>
                    <textarea id="message" name="message" placeholder="Type your message here..." style="width: 700px; height: 200px; position: relative; top: 10px; left: 43px;"></textarea>
                    <button type="submit" style="background-color: blue; color: white; padding: 10px; border: 4px solid; border-radius: 10px; position: relative; right: 350px; padding: 10px 20px; top: 50px;">Submit</button>
                </form>
            </div>
            <div class="right-side">
                <div class="socialmedia" style="width: 100px; position: relative; right: 100px;">
                    <ul>
                        <li style="position: relative; top: 70px;left:150px;color:blue;"><ion-icon name="mail" size="large"></ion-icon></li>
                        <p style="color: blue; position: relative;left:150px;top: 50px; font-size:x-large;">CricketforHimalayas@gmail.com</p>
                    </ul>
                    <div style="position: relative; left:170px; top: 100px;">
                        <h2 style="display: flex; justify-content: center; color: blue;position:relative;left:150px;">LOCATION</h2>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d113056.73683245578!2d85.31804159999999!3d27.685683200000007!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2snp!4v1717946496439!5m2!1sen!2snp" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br>
    <br>
    <section id="Abouttheauthor">
    <div class="author" data-tilt data-tilt-max="2" data-tilt-speed="100" data-tilt-perspective="500">
        <h2>About the Author</h2>
        <div class="author-image">
            <img src="profilephoto.jpg" alt="Author Profile Picture">
        </div>
        <div class="author-info">
            <h2>Bidit Giri</h2>
            <p>
                Hey! I am bidit, a student of AI and an aspiring web developer
            </p>
            <div class="author-socials">
                <a href="https://www.facebook.com/"><img src="facebook.png" alt="Facebook"></a>
                <a href="https://x.com/"><img src="twitter.jpg" alt="Twitter"></a>
                <a href="https://www.linkedin.com/in/bidit-giri-948345309/"><img src="t_500x300.jpg" alt="LinkedIn"></a>
                <a href="https://www.instagram.com/bidit7/"><img src="Instagram-Logo-PNG-Image.png" alt="Instagram"></a>
            </div>
            <div class="author-expertise">
                <h2>My Experience</h2>
                <img src="254-2547396_javascript-html-css-logo-hd-png-download.png" alt="HTML, CSS, JavaScript">
                <p>
                    I have a decent experience with HTML, CSS, and JavaScript. I have worked on this project for 1+ month, I am very enthusiastic and passionate about bringing my ideas and making them into reality by grinding and improving my skills every day.
                </p>
            </div>
        </div>
    </div>
</section>
<br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    
    <section class="footerall">
        <footer>
    <div class="footer">
        <div class="footer-contact">
            <div class="footer-item">
                <ion-icon name="mail" size="large"></ion-icon>
                <span>Email - biditgiri123@gmail.com</span>
            </div>
            <div class="footer-item">
                <ion-icon name="mail" size="large"></ion-icon>
                <span>Email - CrickforHimalays@gmail.com</span>
            </div>
            <div class="footer-item">
                <ion-icon name="call" size="large"></ion-icon>
                <span>Phone number - 9803526374/9813254864</span>
            </div>
        </div>
        <div class="footer-social">
        <ul>
    <li>
        <a href="https://www.facebook.com/">
            <button><ion-icon name="logo-facebook" size="large"></ion-icon></button>
        </a>
    </li>
    <li>
        <a href="https://www.instagram.com/bidit7/">
            <button><ion-icon name="logo-instagram" size="large"></ion-icon></button>
        </a>
    </li>
    <li>
        <a href="https://x.com/">
            <button><ion-icon name="logo-twitter" size="large"></ion-icon></button>
        </a>
    </li>
</ul>
        </div>
        <div class="footer-author">
            <span>Author - Bidit Giri</span>
        </div>
    </div>
    <div class="footer-credits">
        &copy;<b> 2024 CrickforHimalayas. All rights reserved.<b>
    </div>
</footer>
</section>
<script>
        function validateForm() {
        var email = document.getElementById('email').value;
        var phone = document.getElementById('phone').value;

        
        if (!isValidEmail(email)) {
            alert('Please enter a valid email address.');
            return false;
        }

    function isValidEmail(email) {
        return email.includes('@') && email.includes('.com');
    }
</script>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script type="text/javascript" src="vanilla-tilt.js"></script>
</body>
</html>

