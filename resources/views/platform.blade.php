<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>QWIP24 - Digital Experience Platform</title>
  <link rel="stylesheet" href="{{ asset('css/solution1.css') }}">
  <link rel="stylesheet" href="{{ asset('css/home.css') }}">
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar">
    <a href="#" class="logo">Qwip24</a>
    <div class="css">
      <ul>
        <li><a href="{{ route('home') }}">Home</a></li>
        <li>
          <a href="#">Solutions ▾</a>
          <ul>
            <li><a href="{{ route('platform') }}">Digital Experience Platform</a></li>
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

  <!-- Hero -->
  <section class="hero">
    <div class="hero-text">
      <h1>{{ $sections['hero']->title ?? 'Digital Experience Platform' }}</h1>
      <p>{!! $sections['hero']->content ?? '' !!}</p>
      <button class="btn">Let's Connect!</button>
    </div>
    <div class="hero-img">
      <img src="https://cdn-icons-png.flaticon.com/512/6212/6212779.png" alt="Digital Experience Illustration">
    </div>
  </section>

  <!-- Why Choose -->
  <section class="dxp-section">
    <div class="dxp-container">
      <div class="dxp-intro">
        <h2>{{ $sections['why_choose']->title ?? 'Why Choose Digital Experience Platform (DXP)?' }}</h2>
        <p>{!! $sections['why_choose']->content ?? '' !!}</p>
      </div>

      <!-- Benefits -->
      <div class="dxp-benefits">
        <h2>Benefits of Digital Experience Platforms (DXP)</h2>
        <div class="benefit-boxes">
          @foreach($benefits as $b)
          <div class="benefit">
            <h3>{{ $b->title }}</h3>
            @if($b->icon)
              <img src="{{ $b->icon }}" alt="{{ $b->title }}">
            @endif
            <p>{{ $b->description }}</p>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </section>

  <!-- Solutions (accordion) -->
  <div class="select-container">
    <h1 class="main-title">DXP Solutions We Excel At QWIP24</h1>

    <div class="solutions-list">
      @foreach($solutions as $s)
      <div class="solution-item">
        <div class="solution-header" onclick="toggleSolution(this)">
          <h2 class="solution-title">{{ $s->title }}</h2>
          <div class="expand-icon">+</div>
        </div>
        <div class="solution-content">
          <div class="solution-description">
            {!! nl2br(e($s->description)) !!}
          </div>
        </div>
      </div>
      @endforeach
    </div>

    <div class="info-section">
      <h2 class="section-title">Knowing the Different DXP Components</h2>
      <p class="section-description">
        DXP is applicable to different groups, enabling better control, engagement, and interaction. At <span class="highlight-text">QWIP24</span>, we help establish seamless integration and continuity.
      </p>
    </div>
  </div>

  <script>
    function toggleSolution(header) {
      const item = header.parentElement;
      const isActive = item.classList.contains('active');
      document.querySelectorAll('.solution-item').forEach(el => el.classList.remove('active'));
      if (!isActive) item.classList.add('active');
    }
    document.querySelectorAll('.solution-header').forEach(h => {
      h.addEventListener('mouseenter', function(){ if (!this.parentElement.classList.contains('active')) this.style.transform='translateX(5px)'; });
      h.addEventListener('mouseleave', function(){ this.style.transform='translateX(0)'; });
    });
  </script>

  <!-- Contact heading dynamic -->
  <div class="contacttt">
    <div class="heading-row">
      <h1>{{ $sections['contact_heading']->title ?? 'Contact' }}</h1>
      <a href="#" class="contactt">Contact Us Now!</a>
    </div>
  </div>

  <!-- Your existing footer can remain static for now -->
  @includeIf('partials.footer')
</body>
</html>
