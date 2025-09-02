<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Qwip24 Navbar & Footer</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body, html {
      height: 100%;
    }

    /* Navbar */
    .navbar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      background: #ffffff;   /* keep navbar white */
      padding: 15px 50px;
      width: 100%;
    }
    .navbar .logo {
      color: #010101;
      font-size: 22px;
      font-weight: bold;
      text-decoration: none;
      padding-left: 60px;
    }
    .navbar ul {
      list-style: none;
      display: flex;
    }
    .navbar ul li {
      position: relative;
    }
    .navbar ul li a {
      color: #000000;
      padding: 10px 20px;
      text-decoration: none;
      display: block;
    }
    .navbar ul li a:hover {
      background: #1976d2;
      border-radius: 5px;
      color: #fff;
    }
    .navbar ul li ul {
      display: none;
      position: absolute;
      top: 40px;
      left: 0;
      background: #0d47a1;
      min-width: 220px;
      border-radius: 5px;
      z-index: 1000;
    }
    .navbar ul li:hover ul {
      display: block;
    }

    /* Heading Section */
    .contacttt .heading-row {
      display: flex;
      justify-content: space-between;
      align-items: center;
      background-color: #4e2b2b;  /* dark red full width */
      padding: 50px 10%;
      width: 100%;
      margin-top: 30%;
    }
    .contacttt h1 {
      color: #ffffff;
      margin: 0;
      font-size: 28px;
    }
    .contactt {
      background-color: #e8f3ff;
      color: #000000;
      padding: 12px 20px;
      text-decoration: none;
      border-radius: 5px;
      font-weight: bold;
      transition: background 0.3s;
    }
    .contactt:hover {
      background-color: #0d47a1;
      color: #fff;
    }

    /* Footer */
    .footer {
      background: #000000;  /* solid black full width */
      color: #e8dfdf;
      padding: 50px 20px 20px;
      width: 100%;
    }
    .footer-container {
      display: flex;
      flex-wrap: wrap;
      max-width: 1200px;
      margin: auto;
      gap: 40px;
    }
    .footer-left {
      flex: 1;
      min-width: 300px;
    }
    .footer-left h3 {
      margin-bottom: 20px;
      font-size: 20px;
      border-bottom: 2px solid #1976d2;
      display: inline-block;
      padding-bottom: 5px;
    }
    .footer-left form input,
    .footer-left form select,
    .footer-left form textarea,
    .footer-left form button {
      width: 100%;
      padding: 10px 12px;
      margin-bottom: 15px;
      border: none;
      border-radius: 4px;
    }
    .footer-left form textarea {
      resize: vertical;
      height: 100px;
    }
    .footer-left form button {
      background: #4e2b2b;
      color: #fff2f2;
      cursor: pointer;
      font-size: 16px;
      width: 30%;
    }
    .footer-left form button:hover {
      background: #1565c0;
    }
    .footer-right {
      flex: 2;
      display: flex;
      flex-wrap: wrap;
      gap: 40px;
      min-width: 300px;
    }
    .footer-right div {
      min-width: 150px;
    }
    .footer-right h4 {
      margin-bottom: 15px;
      font-size: 16px;
      border-bottom: 1px solid #1976d2;
      padding-bottom: 3px;
    }
    .footer-right ul {
      list-style: none;
      padding: 0;
      margin: 0;
    }
    .footer-right ul li {
      margin-bottom: 10px;
    }
    .footer-right ul li a {
      color: #eeecec;
      text-decoration: none;
      font-size: 14px;
    }
    .footer-right ul li a:hover {
      color: #1565c0;
    }
    .footer-bottom {
      text-align: center;
      margin-top: 40px;
      font-size: 14px;
      border-top: 1px solid #1976d2;
      padding-top: 15px;
      color: #ffffff;
    }

    /* Navbar Button */
    .navbar .get-started {
      background-color: #ffffff;
      color: #000000;
      padding: 10px 20px;
      text-decoration: none;
      border-radius: 5px;
      font-weight: bold;
      transition: background 0.3s;
    }
    .navbar .get-started:hover {
      background-color: #0a0fa2;
      color: #ffffff;
    }

    @media (max-width: 768px) {
      .footer-container {
        flex-direction: column;
      }
      .footer-right {
        flex-direction: column;
      }
      .contacttt .heading-row {
        flex-direction: column;
        text-align: center;
        gap: 15px;
      }
    }
  </style>
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar">
    <a href="#" class="logo">Qwip24</a>
    <div class="css">
      <ul>
        <li><a href="#">Home</a></li>
        <li>
          <a href="#">Solutions ▾</a>
          <ul>
            <li><a href="{{route('platform')}}">Digital Experience Platform</a></li>
            <li><a href="#">Digital Experience Designing</a></li>
            <li><a href="#">Robotic Process Automation</a></li>
          </ul>
        </li>
        <li>
          <a href="#">Services ▾</a>
          <ul>
            <li><a href="#">Drupal Development Services</a></li>
            <li><a href="#">WordPress Development Services</a></li>
            <li><a href="#">Application Maintenance & Support</a></li>
          </ul>
        </li>
        <li><a href="#">About</a></li>
        <li><a href="#">Contact Us</a></li>
      </ul>
    </div>
    <a href="#" class="get-started">Let's Get Started!</a>
  </nav>

  

  <!-- Heading Section -->
  <div class="contacttt">
    <div class="heading-row">
      <h1>dholakiya rutvik contact</h1>
      <a href="#" class="contactt">Contact Us Now!</a>
    </div>
  </div>

  <!-- Footer -->
  <footer class="footer">
    <div class="footer-container">
      <!-- Left Side: Get in Touch Form -->
      <div class="footer-left">
        <h3>Get in Touch</h3>
        <form>
          <input type="text" placeholder="Full Name" required>
          <input type="email" placeholder="Email" required>
          <input type="tel" placeholder="Phone" required>
          <select required>
            <option value="">Select Service</option>
            <option>Web Development</option>
            <option>Drupal Development</option>
            <option>WordPress Development</option>
            <option>Automation</option>
            <option>24/7 Support</option>
          </select>
          <textarea placeholder="Comment" required></textarea>
          <button type="submit">Submit</button>
        </form>
      </div>

      <!-- Right Side: Links & Address -->
      <div class="footer-right">
        <div class="link">
          <ul>
            <li><a href="#">Web Development</a></li>
            <li><a href="#">Drupal</a></li>
            <li><a href="#">WordPress</a></li>
            <li><a href="#">Automation</a></li>
            <li><a href="#">24/7 Support</a></li>
          </ul>
        </div>

        <div>
          <ul>
            <li><a href="#">Careers</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Testimonials</a></li>
            <li><a href="#">Case Studies</a></li>
          </ul>
        </div>

        <div class="address">
          <h4>Address</h4>
          <ul>
            <li>Qwip24 Technologies Pvt. Ltd.</li>
            <li>Ahmedabad, India</li>
            <li>Email: info@qwip24.com</li>
            <li>Phone: +91-9876543210</li>
          </ul>
        </div>
      </div>
    </div>

    <!-- Footer Bottom -->
    <div class="footer-bottom">
      © 2025 Qwip24. All Rights Reserved.
    </div>
  </footer>

</body>
</html>
