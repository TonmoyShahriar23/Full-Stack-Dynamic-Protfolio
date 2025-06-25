<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Developer Portfolio</title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,800;1,400&display=swap" rel="stylesheet" />
  <script src="https://kit.fontawesome.com/b78a6629d7.js" crossorigin="anonymous"></script>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Open Sans', sans-serif;
    }

    nav {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 20px 10%;
    }

    nav > ul {
      display: flex;
      gap: 30px;
      list-style: none;
    }

    nav a {
      text-decoration: none;
      color: #474747;
    }

    .nav-title {
      font-size: 45px;
      font-weight: 800;
      color: #181818;
    }

    .text-primary {
      color: #FD6E0A;
    }

    .btn-primary {
      border: none;
      border-radius: 5px;
      background: #FD6E0A;
      color: white;
      font-size: 16px;
      font-weight: 600;
      padding: 12px 25px;
      cursor: pointer;
    }

    .header {
      background-color: #FFF8F3;
      background-image: url('images/header_bg.png'), url('images/developer.png');
      background-repeat: no-repeat;
      background-position: bottom right, top left;
    }

    .banner {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 50px 10%;
    }

    .banner-content {
      max-width: 600px;
    }

    .banner-greeting {
      font-size: 28px;
      color: #474747;
    }

    .banner-title {
      font-size: 60px;
      font-weight: 700;
      margin: 10px 0 20px;
    }

    .banner-description {
      margin-bottom: 20px;
      color: #757575;
    }

    .profile-pic {
      width: 300px;
    }

    main {
      max-width: 1140px;
      margin: auto;
      padding: 20px;
    }

    .section-title {
      text-align: center;
      font-size: 32px;
      font-weight: 700;
      color: #181818;
      margin-bottom: 20px;
    }

    .section-description {
      text-align: center;
      font-size: 18px;
      color: #757575;
      margin-bottom: 40px;
    }

    .about {
      background-color: #FFF8F3;
      border-radius: 10px;
      padding: 50px;
      margin: 50px 0;
    }

    .about-info-container {
      display: flex;
      justify-content: space-between;
      flex-wrap: wrap;
      gap: 20px;
    }

    .about-info {
      flex: 1 1 200px;
      text-align: center;
    }

    .skills-container {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
      justify-content: center;
    }

    .skill {
      flex: 1 1 250px;
      background: white;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0 6px 20px rgba(0, 0, 0, 0.06);
      text-align: center;
    }

    .resume-container {
      display: flex;
      flex-wrap: wrap;
      gap: 40px;
    }

    .resume-column {
      flex: 1 1 100%;
    }

    .resume-column-title {
      font-size: 24px;
      font-weight: 700;
      margin-bottom: 20px;
      color: #474747;
    }

    .resume-item {
      margin-bottom: 20px;
    }

    .resume-item-title {
      font-size: 20px;
      font-weight: 700;
      color: #474747;
    }

    .resume-item-institute,
    .resume-item-description {
      color: #757575;
      margin-top: 5px;
    }

    .download-cv {
      text-align: center;
      margin-top: 40px;
    }

    footer {
      background-color: #FFF8F3;
      display: flex;
      flex-wrap: wrap;
      gap: 40px;
      padding: 60px 10%;
      margin-top: 60px;
    }

    .footer-column {
      flex: 1 1 300px;
    }

    .social-links a {
      margin-right: 15px;
    }

    .contact input,
    .contact textarea {
      width: 100%;
      padding: 12px;
      margin-bottom: 15px;
      border-radius: 5px;
      border: none;
      background: #fff;
      color: #333;
    }

    /* Responsive Styles */
    @media screen and (max-width: 768px) {
      nav {
        flex-direction: column;
        align-items: flex-start;
        padding: 20px;
      }

      nav ul {
        flex-direction: column;
        gap: 15px;
        padding-left: 0;
      }

      .banner {
        flex-direction: column;
        padding: 30px;
        text-align: center;
      }

      .profile-pic {
        width: 80%;
        margin-top: 20px;
      }

      .banner-title {
        font-size: 36px;
      }

      .section-title {
        font-size: 26px;
      }

      .skills-container,
      .about-info-container,
      .resume-container,
      footer {
        flex-direction: column;
        align-items: center;
      }

      .footer-column {
        width: 100%;
      }
    }
  </style>
</head>

<body>
  <!-- HEADER -->
  <header class="header">
    <nav>
      <h3 class="nav-title">To<span class="text-primary">nm</span>oy</h3>
      <ul>
        <li><a href="">Portfolio</a></li>
        <li><a href="">Blog</a></li>
        <li><button class="btn-primary">Hire Me</button></li>
      </ul>
    </nav>

    <div class="banner">
      <div class="banner-content">
        <h3 class="banner-greeting">Hi, I am</h3>
        <h1 class="banner-title">Mostaque Shahriar Tonmoy</h1>
        <p class="banner-description">Shot what able cold new see hold. Friendly as an betrayed formerly he. Morning because as to society behaved moments.</p>
        <button class="btn-primary"><i class="fa-solid fa-download"></i> Download CV</button>
        <button class="btn-primary"> <i class="fa-solid fa-phone"></i> Contact</button>
      </div>
      <img class="profile-pic" src="images/hardy.png" alt="Profile picture" />
    </div>
  </header>

  <!-- MAIN -->
  <main>
    <section class="about">
      <h3 class="section-title">About Me</h3>
      <p class="section-description">I'm a designer & developer with a passion for web design. I enjoy building clean and slick websites that provide real value. Thousands of clients have gotten great results with me.</p>
      <div class="about-info-container">
        <div class="about-info">
          <h4>Name</h4>
          <p>Mary Hardy</p>
        </div>
        <div class="about-info">
          <h4>Email</h4>
          <p>info@gmail.com</p>
        </div>
        <div class="about-info">
          <h4>Date of Birth</h4>
          <p>11 November 1987</p>
        </div>
        <div class="about-info">
          <h4>From</h4>
          <p>Los Angeles, USA</p>
        </div>
      </div>
    </section>

    <section>
      <h3 class="section-title">What I Do</h3>
      <p class="section-description">I have more than 10 years of experience building software for clients all over the world. Below is a quick overview of my main technical skills.</p>
      <div class="skills-container">
        <div class="skill">
          <img src="images/icons/js.png" alt="">
          <h3>JavaScript</h3>
          <p>Experienced in ES6, DOM manipulation, and building interactive UIs.</p>
        </div>
        <div class="skill">
          <img src="images/icons/react.png" alt="">
          <h3>React</h3>
          <p>Skilled in building SPAs, hooks, component-based architecture.</p>
        </div>
        <div class="skill">
          <img src="images/icons/nodejs.png" alt="">
          <h3>Node.js</h3>
          <p>Built RESTful APIs and real-time apps using Express.js and Socket.io.</p>
        </div>
        <div class="skill">
          <img src="images/icons/mongo.png" alt="">
          <h3>MongoDB</h3>
          <p>Experienced in NoSQL schema design, queries, and aggregation.</p>
        </div>
      </div>
    </section>

    <section>
      <h3 class="section-title">A Summary of My Resume</h3>
      <div class="resume-container">
        <div class="resume-column">
          <h3 class="resume-column-title">Education</h3>
          <div class="resume-item">
            <h2 class="resume-item-title">B.Sc in Computer Engineering</h2>
            <h3 class="resume-item-institute">XYZ University / 2012 - 2016</h3>
            <p class="resume-item-description">Learned data structures, algorithms, and full-stack development.</p>
          </div>
          <!-- Add more education blocks as needed -->
        </div>
        <div class="resume-column">
          <h3 class="resume-column-title">Experience</h3>
          <div class="resume-item">
            <h2 class="resume-item-title">Software Developer</h2>
            <h3 class="resume-item-institute">Tech Corp / 2017 - Present</h3>
            <p class="resume-item-description">Worked on scalable web apps, collaborated with cross-functional teams.</p>
          </div>
          <!-- Add more experience blocks as needed -->
        </div>
      </div>
      <div class="download-cv">
        <button class="btn-primary"><i class="fa-solid fa-download"></i> Download CV</button>
      </div>
    </section>
  </main>

  <!-- FOOTER -->
  <footer>
    <div class="footer-column">
      <h3 class="section-title">Let's Connect</h3>
      <p class="section-description">Fill out the form or call between 9:00 AM and 8:00 PM ET, Monday through Friday.</p>
      <div class="social-links">
        <a href="#"><img src="images/icons/facebook.png" alt=""></a>
        <a href="#"><img src="images/icons/twitter.png" alt=""></a>
        <a href="#"><img src="images/icons/insta.png" alt=""></a>
      </div>
    </div>
    <div class="footer-column">
      <h3 class="section-title">Message Me</h3>
      <form class="contact">
        <input type="text" placeholder="Your name">
        <input type="email" placeholder="Your email">
        <textarea rows="5" placeholder="Your message"></textarea>
        <input class="btn-primary" type="submit" value="Submit">
      </form>
    </div>
  </footer>
</body>

</html>
