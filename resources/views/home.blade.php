<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Qwip24 Navbar & Footer</title>
<link rel="stylesheet" href="{{asset('css/home.css')}}">
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar">
    <a href="#" class="logo">Qwip24</a>
    <div class="css">
      <ul>
        <li><a href="{{route('home')}}">Home</a></li>
        <li>
          <a href="#">Solutions ▾</a>
          <ul>
            <li><a href="{{route('dxp.index')}}">Digital Experience Platform</a></li>
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

          {{-- //this is for admin --}}
        </li>
    @if(session('role') === 'admin')
       <li> <a href="{{route('admin')}}">Go to Admin Dashboard</a></li>
    @endif
    
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
