<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Developer Portfolio</title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;800&display=swap" rel="stylesheet" />
  <script src="https://kit.fontawesome.com/b78a6629d7.js" crossorigin="anonymous"></script>
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: 'Open Sans', sans-serif;
      line-height: 1.6;
      color: #181818;
    }

    nav {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 20px 10%;
      background: #fff;
      position: sticky;
      top: 0;
      z-index: 100;
      box-shadow: 0 4px 6px rgba(0,0,0,0.1);
    }

    .nav-title {
      font-size: 36px;
      font-weight: 800;
    }

    .text-primary {
      color: #FD6E0A;
    }

    nav ul {
      display: flex;
      list-style: none;
    }

    nav ul li {
      margin-left: 30px;
    }

    nav ul a {
      text-decoration: none;
      color: #474747;
      font-weight: 600;
    }

    .btn-primary {
      background: #FD6E0A;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 6px;
      cursor: pointer;
    }

    header.header {
      background: #FFF8F3;
      background-image: url('images/header_bg.png'), url('images/developer.png');
      background-repeat: no-repeat;
      background-position: bottom right, top left;
      padding: 60px 10%;
    }

    .banner {
      display: flex;
      flex-wrap: wrap;
      align-items: center;
      justify-content: space-between;
    }

    .banner-content {
      max-width: 600px;
    }

    .banner-title {
      font-size: 50px;
      margin: 15px 0;
    }

    .banner-description {
      margin-bottom: 20px;
      color: #555;
    }

    .profile-pic {
      max-width: 100%;
      height: auto;
    }

    main {
      padding: 60px 10%;
    }

    .section-title {
      text-align: center;
      font-size: 32px;
      margin-bottom: 20px;
      color: #181818;
    }

    .section-description {
      text-align: center;
      color: #757575;
      margin-bottom: 40px;
    }

    .about {
      background: #FFF8F3;
      padding: 50px;
      border-radius: 10px;
      margin-bottom: 60px;
    }

    .about-info-container {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-around;
      gap: 30px;
    }

    .about-info {
      text-align: center;
      flex: 1 1 200px;
    }

    .skills-container {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
      justify-content: center;
    }

    .skill {
      flex: 1 1 220px;
      background: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0px 6px 15px rgba(0, 0, 0, 0.05);
      text-align: center;
    }

    .resume-container {
      display: flex;
      flex-wrap: wrap;
      gap: 40px;
      margin-top: 40px;
    }

    .resume-column {
      flex: 1 1 400px;
    }

    .resume-item {
      margin-bottom: 20px;
    }

    .resume-item-title {
      font-size: 20px;
      font-weight: bold;
      margin-bottom: 5px;
    }

    .resume-item-institute {
      font-style: italic;
      color: #757575;
      margin-bottom: 10px;
    }

    .resume-item-description {
      color: #555;
    }

    .download-cv {
      text-align: center;
      margin-top: 30px;
    }

    footer {
      background: #FFF8F3;
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      padding: 60px 10%;
      gap: 30px;
    }

    .footer-column {
      flex: 1 1 400px;
    }

    .social-links a {
      margin-right: 15px;
    }

    .contact input,
    .contact textarea {
      width: 100%;
      padding: 12px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 6px;
    }

    @media (max-width: 768px) {
      nav {
        flex-direction: column;
        gap: 10px;
      }

      .banner {
        flex-direction: column;
        text-align: center;
      }

      .resume-container,
      .about-info-container {
        flex-direction: column;
      }

      footer {
        flex-direction: column;
      }
    }
  </style>
</head>
<body>

  <header class="header">
    <nav>
      <h3 class="nav-title">To<span class="text-primary">nm</span>oy</h3>
      <ul>
        <li><a href="#about">About</a></li>
        <li><a href="#skills">Skills</a></li>
        <li><a href="#resume">Resume</a></li>
        <li><a href="#contact">Contact</a></li>
        <li><button class="btn-primary">Hire Me</button></li>
      </ul>
    </nav>

    <div class="banner">
      <div class="banner-content">
        <h3>Hi, I am</h3>
        <h1 class="banner-title">Mostaque Shahriar Tonmoy</h1>
        <p class="banner-description">A software engineer designs, develops, and maintains software systems and applications. They use programming languages to write efficient, reliable code. Software engineers solve complex problems through logical thinking and technical skills. They often collaborate with teams to build scalable and user-friendly solutions. Their work spans across web, mobile, desktop, and embedded systems.</p>
        <button class="btn-primary"><i class="fa-solid fa-download"></i> Download CV</button>
        <button class="btn-primary"><i class="fa-solid fa-phone"></i> Contact</button>
      </div>
      <img class="profile-pic" src="images/hardy.png" alt="Profile Picture" />
    </div>
  </header>

  <main>
    <section id="about" class="about">
      <h3 class="section-title">About Me</h3>
      <p class="section-description">
        I'm a designer & developer with a passion for clean web design. I develop simple, slick websites that provide real value.
      </p>
      <div class="about-info-container">
        <div class="about-info"><h4>Name</h4><p>Mostaque Shahriar Tonmoy</p></div>
        <div class="about-info"><h4>Email</h4><p>info@gmail.com</p></div>
        <div class="about-info"><h4>Date of Birth</h4><p>3rd Frebruary,2000</p></div>
        <div class="about-info"><h4>From</h4><p>Rangpur , Bangladesh</p></div>
      </div>
    </section>

    <section id="skills">
      <h3 class="section-title">What I Do</h3>
      <p class="section-description">
        I have 10+ years of experience building software. Here's a summary of my core skills:
      </p>
      <div class="skills-container">
        <div class="skill">
          <img src="images/icons/js.png" alt="JS" />
          <h4>JavaScript</h4>
          <p>Experience in building interactive web apps using vanilla JS.</p>
        </div>
        <div class="skill">
          <img src="images/icons/react.png" alt="React" />
          <h4>React</h4>
          <p>Building SPAs using React and component-based structure.</p>
        </div>
        <div class="skill">
          <img src="images/icons/nodejs.png" alt="Node" />
          <h4>Node.js</h4>
          <p>Backend development with Node.js, Express, and REST APIs.</p>
        </div>
        <div class="skill">
          <img src="images/icons/mongo.png" alt="MongoDB" />
          <h4>MongoDB</h4>
          <p>NoSQL database development and integration with Node.js.</p>
        </div>
      </div>
    </section>

    <section id="resume">
      <h3 class="section-title">My Resume</h3>
      <div class="resume-container">
        <div class="resume-column">
          <h4 class="resume-column-title">Education</h4>
          <div class="resume-item">
            <h5 class="resume-item-title">BSc in CSE</h5>
            <p class="resume-item-institute">XYZ University / 2010 - 2014</p>
            <p class="resume-item-description">Major in software engineering and web development.</p>
          </div>
        </div>
        <div class="resume-column">
          <h4 class="resume-column-title">Experience</h4>
          <div class="resume-item">
            <h5 class="resume-item-title">Senior Web Developer</h5>
            <p class="resume-item-institute">ABC Tech / 2017 - Present</p>
            <p class="resume-item-description">Led front-end projects with React and backend APIs.</p>
          </div>
        </div>
      </div>
      <div class="download-cv">
        <button class="btn-primary"><i class="fa-solid fa-download"></i> Download CV</button>
      </div>
    </section>
  </main>

  <footer id="contact">
    <div class="footer-column">
      <h3 class="section-title">Let’s Connect</h3>
      <p class="section-description">Reach me through the form or social media.</p>
      <div class="social-links">
        <a href="#"><img src="images/icons/facebook.png" alt="Facebook" /></a>
        <a href="#"><img src="images/icons/twitter.png" alt="Twitter" /></a>
        <a href="#"><img src="images/icons/insta.png" alt="Instagram" /></a>
      </div>
    </div>
    <div class="footer-column">
      <h3 class="section-title">Message Me</h3>
      <form class="contact">
        <input type="text" placeholder="Your Name" required />
        <input type="email" placeholder="Your Email" required />
        <textarea rows="5" placeholder="Your Message" required></textarea>
        <input type="submit" value="Submit" class="btn-primary" />
      </form>
    </div>
  </footer>
</body>
</html>
