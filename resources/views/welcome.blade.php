<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Developer Porttfolio</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,800;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/porttfolio.css" class="css">
    <script src="https://kit.fontawesome.com/b78a6629d7.js" crossorigin="anonymous"></script>
    <style>
        body {
    font-family: 'Lato', sans-serif;
    font-family: 'Open Sans', sans-serif;
}

nav {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin: 0 200px;
}

.section-title {
    color: #181818;
    text-align: center;
    font-size: 35px;
    font-weight: 700;
}

.section-description {
    color: #757575;
    text-align: center;
    font-size: 18px;

}

.text-primary {
    color: #FD6E0A;

}

.btn-primary {

    border-radius: 5px;
    background: #FD6E0A;
    border: 0;
    color: white;
    font-size: 20px;
    font-weight: 700;
    padding: 18px 35px;


}

.nav-title {
    color: var(--dark-01, #181818);
    text-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
    font-size: 45px;
    font-weight: 800;
}

nav>ul {
    display: flex;
    align-items: center;

}

nav li {
    list-style: none;
    margin-right: 50px;
}

nav a {
    text-decoration: none;
    color: #474747;
}

.header {
    background-color: #FFF8F3;
    background-image: url('../images/header_bg.png'),url('../images/developer.png');
    background-repeat: no-repeat;
    background-position: bottom right, top left;
}

.banner {
    padding: 30px 30px 0px 150px;
    display: flex;
    align-items: center;
    justify-content: space-between;
}



.banner .profile-pic {
    width: 500px;
}

.banner-greeting {
    font-size: 45px;
    color: #474747;
    margin-bottom: 0;


}

.banner-title {
    font-size: 85px;
    font-weight: 700;
    margin-top: 5px;
    margin-bottom: 20px;

}

/*main section styles*/
main {
    width: 1140px;
    margin: 0 auto;
}

main section {
    margin-top: 130px;

}



/*about section styles*/
.about {
    padding: 130px;
    border-radius: 10px;
    background: #FFF8F3;
    margin: 130px 0;
}

.about-info-container {
    display: flex;
    justify-content: space-around;

}

.about-info {
    text-align: center;
}

#what-i-do-description {
    padding: 30px 150px;
}

.skills-container {
    display: flex;
    gap: 24px;

}

.skill-description {}

.skill {
    padding: 30px;
    border-radius: 5px;
    background: #FFF;
    box-shadow: 0px 6px 50px 0px rgba(0, 0, 0, 0.06);
}

.resume-column-title {
    color: #474747;
    font-size: 30px;
    font-weight: 700;
}

.resume-container {
    display: flex;
    gap: 50px;

}

.resume-item-title {
    color: #474747;
    font-size: 25px;
    font-weight: 700;
    margin-bottom: 10px;
}

.resume-item-institute {
    margin-bottom: 20px;
    margin-top: 0px;

}

.resume-item-institute,
.resume-item-description {
    color: #757575;
}

.resume-container hr {
    margin: 30px 10px;
}

.download-cv {
    text-align: center;
    margin-top: 50px;

}

footer {
    display: flex;
    background: #FFF8F3;
    gap: 100px;

    margin-top: 100px;
    padding: 130px 200px;
}

.footer-column {
    width: 50%;


}

.contact input[type="text"],.contact input[type="email"],
textarea {
    display: block;
    margin-bottom: 25px;
    padding: 18px 35px;
    color: #757575;
    border-radius: 5px;
    background:  #FFF;
    border: 0;
    width: 100%;

}
.social-links a {
    margin-right: 25px;


}
 
    </style>
</head>

<body>
    <header class="header">
        <nav>
            <h3 class="nav-title">To<span class="text-primary">nm</span>oy</h3>
            <ul>
                <li><a href="">Porttfolio</a></li>
                <li><a href="">Blog</a></li>
                <li><button class="btn-primary">Hire Me</button></li>
            </ul>
        </nav>

        <div class="banner">
            <div class="banner-content">
                <h3 class="banner-greeting">
                    Hi, I am

                </h3>
                <h1 class="banner-title">
                    Mostaque Shahriar Tonmoy
                </h1>
                <p class="banner-description">
                    Shot what able cold new see hold.Friendly as an betrayed formerly he.
                    Morning because as to society behaved moments.
                </p>
                <button class="btn-primary"><i class="fa-solid fa-download"></i> Download CV</button>
                <button class="btn-primary"> <i class="fa-solid fa-phone"></i> Contact</button>

            </div>
            <img class="profile-pic" src="images/hardy.png" alt="">
        </div>


    </header>
    <main>
        <section class="about">
            <h3 class="section-title">About Me</h3>
            <p class="section-description">
                I, m a designer & developer with a passion for web design. I enjoy developing simple, clean and slick
                websites that provide real value to the end user. Thousands of clients have procured exceptional resulfs
                while working with me. Delivering work within time and budget which meets clients requirements in our
                mata.
            </p>
            <div class="about-info-container">
                <div class="about-info">
                    <h4 class="info-title">Name</h4>
                    <p class="info-descrption">Mary Hardy </p>
                </div>
                <div class="about-info">
                    <h4 class="info-title">Email:</h4>
                    <p class="info-descrption">
                        info@gmail.com</p>
                </div>
                <div class="about-info">
                    <h4 class="info-title">Date of birth:</h4>
                    <p class="info-descrption">11 novembor 1987</p>
                </div>
                <div class="about-info">
                    <h4 class="info-title">From:</h4>
                    <p class="info-descrption"> Los Angeles, USA</p>
                </div>


            </div>
        </section>
        <section>
            <h3 id="what-i-do-description" class="section-title">What I do</h3>
            <p>I have more than 10 years experience building software for clients all over the world. Below is a quick
                overview of my main technical skill sets and technologies i use. Want to find out more about my
                experience? Check out my online resume and project portfolio.</p>
            <div class="skills-container">
                <div class="skill">
                    <img src="images/icons/js.png" alt="">
                    <h3 class="skill-title">Vanilla JavaScript</h3>
                    <p class="skill-description">List skill/technologies here. You can change the icon above to any of
                        the 1500+ FontAwesome 5 free icons available. Aenean commodo ligula eget dolor.</p>
                </div>
                <div class="skill">
                    <img src="images/icons/react.png" alt="">
                    <h3 class="skill-title">React</h3>
                    <p class="skill-description">List skill/technologies here. You can change the icon above to any of
                        the 1500+ FontAwesome 5 free icons available. Aenean commodo ligula eget dolor.</p>
                </div>
                <div class="skill">
                    <img src="images/icons/nodejs.png" alt="">
                    <h3 class="skill-title">Node.js</h3>
                    <p class="skill-description">List skill/technologies here.you can change the icon above ta any of
                        the 1500+Font Awesome 5 free icons available</p>
                </div>
                <div class="skill">
                    <img src="images/icons/mongo.png" alt="">
                    <h3 class="skill-title">MongoDB</h3>
                    <p class="skill-description">List skill/technologies here.you can change the icon above ta any of
                        the 1500+Font Awesome 5 free icons available</p>
                </div>
            </div>
        </section>
        <section>
            <h3 class="section-title">A summary of My Resume</h3>
            <div class="resume-container">
                <div class="resume-column">
                    <h3 class="resume-column-title">My Education</h3>

                    <div class="resume-item">
                        <h2 class="resume-item-title">Master in Computer Engineering</h2>
                        <h3 class="resume-item-institute">Harvard University / 2015 - 2017</h3>
                        <p class="resume-item-description">List skill/technologies here. You can change the icon above
                            to any of the 1500+ FontAwesome 5 free icons available. Aenean commodo ligula eget dolor.
                        </p>
                    </div>
                    <hr>
                    <div class="resume-item">
                        <h2 class="resume-item-title">Master in Computer Engineering</h2>
                        <h3 class="resume-item-institute">Harvard University / 2015 - 2017</h3>
                        <p class="resume-item-description">List skill/technologies here. You can change the icon above
                            to any of the 1500+ FontAwesome 5 free icons available. Aenean commodo ligula eget dolor.
                        </p>
                    </div>
                    <hr>
                    <div class="resume-item">
                        <h2 class="resume-item-title">Master in Computer Engineering</h2>
                        <h3 class="resume-item-institute">Harvard University / 2015 - 2017</h3>
                        <p class="resume-item-description">List skill/technologies here. You can change the icon above
                            to any of the 1500+ FontAwesome 5 free icons available. Aenean commodo ligula eget dolor.
                        </p>
                    </div>


                </div>
                <div class="resume-column">
                    <h3 class="resume-column-title">My Experence</h3>


                    <div class="resume-item">
                        <h2 class="resume-item-title">Master in Computer Engineering</h2>
                        <h3 class="resume-item-institute">Harvard University / 2015 - 2017</h3>
                        <p class="resume-item-description">List skill/technologies here. You can change the icon above
                            to any of the 1500+ FontAwesome 5 free icons available. Aenean commodo ligula eget dolor.
                        </p>
                    </div>
                    <hr>
                    <div class="resume-item">
                        <h2 class="resume-item-title">Master in Computer Engineering</h2>
                        <h3 class="resume-item-institute">Harvard University / 2015 - 2017</h3>
                        <p class="resume-item-description">List skill/technologies here. You can change the icon above
                            to any of the 1500+ FontAwesome 5 free icons available. Aenean commodo ligula eget dolor.
                        </p>
                    </div>
                    <hr>
                    <div class="resume-item">
                        <h2 class="resume-item-title">Master in Computer Engineering</h2>
                        <h3 class="resume-item-institute">Harvard University / 2015 - 2017</h3>
                        <p class="resume-item-description">List skill/technologies here. You can change the icon above
                            to any of the 1500+ FontAwesome 5 free icons available. Aenean commodo ligula eget dolor.
                        </p>
                    </div>

                </div>
            </div>
            <div class="download-cv">
                <button class="btn-primary"> <i class="fa-solid fa-download"></i> Download CV</button>
            </div>
        </section>

    </main>
    <footer>
        <div class="footer-column">
            <h3 class="section-title">Lets Connect</h3>
            <p class="section-description">Please fill out the form on this section to contact with me or call between
                9:00 A.M and 8.00 P.M ET, Monday through Friday.</p>
            <div class="social-links">
                <a href=""><img src="images/icons/facebook.png" alt=""></a>
                <a href=""><img src="images/icons/twitter.png" alt=""></a>
                <a href=""><img src="images/icons/insta.png" alt=""></a>
            </div>
        </div>
        <div class="footer-column">
            <h3 class="section-title">Let's Message Me</h3>
            <form class="contact" action="">
                <input type="text" placeholder="Your name">
                <input type="text" placeholder="Your Email">
                <textarea name="" placeholder="Message" id="" cols="30" rows="10"></textarea>
                <input class="btn-primary" type="submit" value="submit">
            </form>
        </div>
    </footer>
</body>

</html>