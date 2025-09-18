<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>QWIP24 - Digital Experience Platform</title>


  <link rel="stylesheet" href="{{asset('css/solution1.css')}}">
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
        </li>
        <li><a href="#">About</a></li>
        <li><a href="#">Contact Us</a></li>
      </ul>
    </div>
    <a href="#" class="get-started">Let's Get Started!</a>
  </nav>

 




  
                                            <!-- Hero Section -->
<section>
   @foreach($heros as $hero)
    <div class="hero {{ $loop->first ? 'd-flex' : '' }}">
        <div class="hero-text">
            <h1>{{ $hero->title }}</h1>
            <p>{{ $hero->description }}</p>

             @if($loop->first)
            <button class="btn">Contact Us</button>
            @endif
            
        </div>
        <div class="hero-img">
            <img src="{{ $hero->image_url }}" >
        </div>
    </div>
    
<div class="button-group">
      <a href="{{ route('hero.edit', $hero->id) }}" class="delete"> Edit </a>

        <form action="{{ route('hero.delete', $hero->id) }}" method="POST"  >
            @csrf
            @method('DELETE')
            <button type="submit" onclick="return confirm('Are you sure you want to delete this solution?')" class="delete">
                 Delete
            </button>
        </form>
        </div><br><br>
   @endforeach

   <div class="button-group">
      <a href="{{route('hero.create')}}" class="delete">insert</a>

</div>

</section>




                                              <!-- Benefits Section -->
<section class="dxp-section">
    <div class="dxp-container">
        <div class="dxp-benefits">
        <h2>Benefits of Digital Experience Platform (DXP)</h2>
        </div>
      <div class="benefit-boxes">
    @foreach($benefits as $benefit)
    <div class="benefit">
        <h3>{{ $benefit->title }}</h3>
        <img src="{{ $benefit->image_url }}" alt="Benefit Image">
        <p>{{ $benefit->description }}</p><br>

         <a href="{{ route('benefit.edit', $hero->id) }}" class="delete1"> Edit </a><br><br>

        <form action="{{ route('benefit.delete', $benefit->id) }}" method="POST" class="delete-form">
            @csrf
            @method('DELETE')
            <button type="submit" onclick="return confirm('Are you sure you want to delete this solution?')" class="delete1">
                Delete
            </button>
        </form>
    </div>
    @endforeach
</div>
 </div><br><br>

   <div class="button-group">
   <a href="{{route('benefit.create')}}" class="delete">insert</a>
  </div>
</section>



                                          <!-- Solutions Section -->
<section class="select-container">
    <h1 class="main-title">DXP Solutions</h1>
    <div class="solutions-list">
        @foreach($solutions as $solution)
        <div class="solution-item">
            <div class="solution-header" onclick="toggleSolution(this)">
                <h2 class="solution-title">{{ $solution->title }}</h2>
                <div class="expand-icon">+</div>
            </div>
            <div class="solution-content">
                <div class="solution-description">
                    {{ $solution->description }}
                </div>
            </div>
        </div>
        
         <div class="button-group">

         <a href="{{ route('solution.edit', $hero->id) }}" class="delete"> Edit </a>
                                    <!-- Delete Button -->
        <form action="{{ route('solution.delete', $solution->id) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit" onclick="return confirm('Are you sure you want to delete this solution?')" class="delete">
                 Delete
            </button>
        </form>
 </div>
        @endforeach
      </div>
   
       <div class="button-group">
      <a href="{{route('solution.create')}}" class="delete">insert</a>
       </div>
</section>

<script>
function toggleSolution(header) {
    const solutionItem = header.parentElement;
    const isActive = solutionItem.classList.contains('active');
    document.querySelectorAll('.solution-item').forEach(item => item.classList.remove('active'));
    if (!isActive) solutionItem.classList.add('active');
}
</script>




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
