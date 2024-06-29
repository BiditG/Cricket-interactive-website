<?php 
session_start();

include("connection.php");
include("functions.php");

$user_data = check_login($con);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CricketforHimalayas</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poetsen+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poetsen+One&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <script src="index.js"></script>
    <style>
        @media only screen and (max-width: 768px) {
    nav {
        flex-direction: column;
        height: auto; 
        padding: 10px 0; 
    }

    ul {
        flex-direction: column;
        align-items: center;
    }

    li {
        margin: 10px 0;
    }
}

.Welcomecontainer {
    position: relative; 
    left: 330px;
    bottom: 100px;
        }

.Welcomecontainer button {
    padding: 5px 20px 10px;
    width: 180px;
    position: relative;
    left: 330px;
    bottom:50px;
    font-family: system-ui; 
    border-radius: 5px;
    border: double white 1px;
    height: 50px;
    font-size: 20px;
    color: black;
    box-shadow: 0 0 20px 10px rgba(0, 0, 0, 0.5);
        }
.Welcomecontainer button p{
    color:white;
    width:900px;
    position:relative;
    right:380px;
    top: 10px;
    backdrop-filter:blur(20px);
    border:1px solid white;padding:10px;
        }

.Welcomecontainer button:hover {
    background-color: gold;
    cursor: pointer;
    transform: scale(1.05);
    transition: ease-in 0.3s transform;
    transition: ease-in 0.3s background-color;
        }

.Welcomecontainer h2 {
    font-size: 60px;
    border: 1px white double;
    padding: 40px;
    width: 750px;
    backdrop-filter: blur(10px);
        }

.Welcomecontainer p {
    font-size: 30px;
    color: white;
    position: relative; 
    font-family: system-ui;
    right: 30px;
    backdrop-filter: blur(10px);
    letter-spacing: 3px;
    right: 130px;"
        }

.counters {
    display: flex;
    justify-content: space-around;
    position: absolute;
    bottom: 20px;
    padding: 20px;
    border-radius: 10px;
    width: 100%;
    height: 200px;
    background: rgba(255,255,255,0.9);
    backdrop-filter: blur(10px);
        }

.counter {
    text-align: center;
        }

.count {
    font-size: 50px;
    font-weight: bold;
    color: blue;
    font-family:system-ui;
        }

.counter span {
    font-size: 30px;
    font-weight: bold;
    color: blue;
    font-family:system-ui;
        }

.counter p {
     color: blue;
    font-size: 25px;
    margin-top: 5px;
    position: relative;
    font-family: system-ui;
    top:10px;
        }

.profile-container {
    display: flex;
    align-items: center;
    position: relative;
    left:400px;
    color: white;
    font-size: 20px;
    font-family: 'Raleway', sans-serif;
}

.profile-emoji {
    margin-right: 10px;
    position: relative;
    bottom:10px;
}

.username {
    font-weight: bold;
    color: black;
    position: relative;
    bottom:9px;
}
.inside-text {
    display: flexbox;
    justify-content: center;
    align-items: center;
    color: white;
    backdrop-filter: blur(15px);
    font-size: xx-large;
    text-align: center;
    position: relative;
    top: 20px;
    font-family: "Raleway", sans-serif;
}

.inside-text p {
    padding: 10px;
    line-height: 1.6;
    text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.7);
    margin: 20px auto;

}
.aboutus h2 {
    display: flex;
    justify-content: center;
    position: relative;
    top: 30px;
    font-size: 300%;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
}
#serviceh2 {
    display: flex;
    justify-content: center;
    font-size: 300%;
    position: relative;
    top: 40px;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
}
#paraofwelcome {
    font-size: medium;
}
#Home {
    border-bottom: 3px solid greenyellow;
    box-shadow: 0 0 5px 1px rgba(0, 0, 0, 0.5);
}
.footerall {
    height: 300px;
}

.footer {
    background-color: whitesmoke;
    padding: 20px;
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    box-shadow: 0 0 5px 3px rgba(0, 0, 0, 0.5);
    height: 300px;
}

.footer-contact,
.footer-social,
.footer-author {
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
    color: blue;/
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
    bottom: 30px;
    color: blue;
    font-family: system-ui;
    font-size: larger;

}

</style>
</head>
<body>
    <div class="picture">
        <header>
            <nav>
                <ul>
                    <li><a href="index.php" id="Home">Home</a></li>
                    <li><a href="upload.php"id="Upload">Upload</a></li>
                    <li><a href="index2.html" id="Shop">Shop</a></li>
                    <li><a href="index3.html" id="News">News</a></li>
                    <li><a href="contact.php" id="Contact">Contact</a></li>
                    <div class="profile-container">
        <span class="profile-emoji">👤</span>
        <?php if(isset($user_data)) { ?>
            <span class="username"><?php echo $user_data['user_name']; ?></span>
        <?php } ?>
    </div>
                </ul>
            </nav>
        </header>

        <section id="Home">
            <div class="covermax">
                <div class="Cover">
                    <div class="Welcomecontainer">
                        <h2>CRICKET FOR HIMALAYAS</h2>
                        <p>"Step into the world of cricket excellence, where passion meets play!"</p>
                        <br><br><br><br>
                        <button href="#Services" ><details><summary> Read More </summary>  <p id="paraofwelcome">Welcome to our vibrant cricket community hub, where talent shines, news unfolds, and fans unite. Explore a platform where enthusiasts showcase their skills, stay updated with the latest in cricket, and discover a curated selection of cricket products. Whether you're a player, a fan, or simply passionate about the game.</p></details></button>
                    </div>
                </div>
                <div class="counters">
                    <div class="counter">
                        <div class="count" data-target="100">0</div>
                        <span>+</span>
                        <p>Total views</p>
                    </div>
                    <div class="counter">
                        <div class="count" data-target="50">0</div>
                        <span>+</span>
                        <p>Total ratings</p>
                    </div>
                    <div class="counter">
                        <div class="count" data-target="20">0</div>
                        <span>+</span>
                        <p>Total uploads</p>
                    </div>
                </div>
            </div>
        </section>
        <br>

        <section id="About">
            <div class="aboutusbackground">
                <div class="aboutuscover">
                    <div class="aboutus">
                        <h2>About Page</h2>
                        <div class="inside-text">
                            <p>This page is dedicated to all the fans of Nepal Cricket and their well-wishers. The website is made primarily for cricket content like bowling videos, batting videos, and new upcoming youngsters that are passionate about cricket. This website also serves as a medium to buy essential gears, to gear up and be ready to make their dreams come true and attain the dream of playing in the beloved jersey of Nepal. We hope for the best of Nepali cricket and this is just a small contribution from a fan of Nepal Cricket to the almighty game.</p>
                            <p>Hope this message reaches out to you and grows our community even stronger.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <br>
        <br>

        <section id="Services">
            <div class="service">
                <h2 id="serviceh2">Our services</h2>
                <div class="all">
                    <div class="inside" data-tilt data-tilt-max="10" data-tilt-speed="400" data-tilt-perspective="500">
                        <img src="upload-icon-3.png" alt="Upload">
                        <h2>Upload a video</h2>
                        <p>Upload a short clip of your bowling/batting.</p>
                        <button><a href="upload.php">Upload</a></button>
                    </div>
                    <div class="inside" data-tilt data-tilt-max="10" data-tilt-speed="400" data-tilt-perspective="500">
                        <img src="store-icon.png" alt="Store">
                        <h2>Visit the Store</h2>
                        <p>Visit the store to buy top-quality goods.</p>
                        <button><a href="index2.html">Store</a></button>
                    </div>
                    <div class="inside" data-tilt data-tilt-max="10" data-tilt-speed="400" data-tilt-perspective="500">
                        <img src="vector-news-icon-symbol-sign.jpg" alt="News-Blogs">
                        <h2>News-Blogs</h2>
                        <p>Check out the latest news and blogs.</p>
                        <button><a href="index3.html">News</a></button>
                    </div>
                </div>
            </div>
        </section>
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
    const counters = document.querySelectorAll('.count');
    const speed = 700; 

    counters.forEach(counter => {
        const updateCount = () => {
            const target = +counter.getAttribute('data-target');
            const count = +counter.innerText;


            const increment = target / speed;

            if (count < target) {
                counter.innerText = Math.ceil(count + increment);
                setTimeout(updateCount, 1);
            } else {
                counter.innerText = target;
            }
        };

        updateCount();
    });
</script>


        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
        <script type="text/javascript" src="vanilla-tilt.js"></script>
        <script>
            async function login(event) {
                event.preventDefault();
                var username = document.getElementById('username').value;
                var password = document.getElementById('password').value;
    
                var formData = new FormData();
                formData.append('username', username);
                formData.append('password', password);
    
                var response = await fetch('login.php', {
                    method: 'POST',
                    body: formData
                });
    
                var result = await response.text();
                alert(result);
    
                if (result.trim() === "<h2>Login Successful!</h2>") {
                    document.getElementById('uploadSection').style.display = 'block';
                    document.getElementById('shopSection').style.display = 'block';
                    document.getElementById('newsSection').style.display = 'block';
                }
            }

        </script>
       
    </body>


</html>
