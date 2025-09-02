<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>QWIP24 - Digital Experience Platform</title>
  <style>
    /* ===== Global Reset ===== */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: Arial, sans-serif;
    }

    body {
      background: #fff;
      color: #333;
      line-height: 1.6;
    }

    ===== Navbar =====
   
    .logo {
      font-size: 22px;
      font-weight: bold;
    }

    .logo span:first-child {
      color: #f58220; /* Orange */
    }

     .nav-btn {
      border: 2px solid #f58220;
      padding: 8px 16px;
      border-radius: 8px;
      background: none;
      color: #2a6edc;
      font-weight: bold;
      cursor: pointer;
      transition: 0.3s;
    }  

    .nav-btn:hover {
      background: #f58220;
      color: white;
    }

    /* ===== Hero Section ===== */
    .hero {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 120px;
      gap: 200px;
    }

    .hero-text {
      flex: 1;
    }

    .hero-text h1 {
      font-size: 42px;
      color: #2a6edc;
      margin-top: 5px;
      margin-bottom: 29px;
     border-bottom: 2px solid #f58220;
    }

    .hero-text p {
      font-size: 18px;
      margin-bottom: 20px;
      color: #555;
    }

    .hero-text .btn {
      background: #2a6edc;
      color: white;
      border: none;
      padding: 12px 24px;
      border-radius: 8px;
      font-size: 16px;
      cursor: pointer;
      transition: 0.3s;
    }

    .hero-text .btn:hover {
      background: #f58220;
    }

    .hero-img {
      flex: 1;
    }

    .hero-img img {
      width: 100%;
      max-width: 500px;
    }

   

    /* ===== Section Wrapper ===== */
.dxp-section {
  padding: 60px 80px;
  background: #fff;
  color: #333;
}

.dxp-container {
  max-width: 1200px;
  margin: auto;
}

/* ===== Intro Section ===== */
.dxp-intro h2 {
  font-size: 28px;
  color: #2a6edc;
  margin-bottom: 15px;
  border-bottom: 2px solid #f58220;
  display: inline-block;
  padding-bottom: 5px;
}

.dxp-intro p {
  font-size: 16px;
  color: #444;
  line-height: 1.8;
  margin-top: 23px;
}

/* ===== Benefits Section ===== */
.dxp-benefits {
  margin-top: 60px;
}

.dxp-benefits h2 {
  font-size: 26px;
  color: #2a6edc;
  border-bottom: 2px solid #f58220;
  margin-bottom: 90px;
  display: inline-block;
  padding-bottom: 4px;
}

.benefit-boxes {
display: grid;
  grid-template-columns: repeat(2, 1fr); /* 2 columns */
  grid-gap: 160px; /* spacing between boxes */
  justify-items: center; /* center items horizontally */
  align-items: start
}

.benefit { 
  text-align: center;
}

.benefit h3 {
  font-size: 23px;
  color: #2a6edc;
  margin-bottom: 15px;
  border-bottom: 2px solid #f58220;
  display: inline-block;
  padding-bottom: 4px;
}

.benefit img {
  width: 100%;
  max-width: 290px;
  margin-top: 20px;
}

  .bene {
    text-align: center;
  }

  .bene h3 {
  font-size: 20px;
  color: #2a6edc;
  margin-top: 100px;
  margin-right: 700px;
  border-bottom: 2px solid #d67927;
  display: inline-block;
  padding-bottom: 4px;
  
}

.bene img {
  width: 100%;
  max-width: 290px;
  margin-top: 30px;
  margin-right: 700px;
}
.bene p {
  font-size: 16px;
  color: #444;
  line-height: 1.8;
  margin-top: 20px;
  margin-right: 700px;
}

/* select section */

 * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
            color: #333;
            line-height: 1.6;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 40px 20px;
        }

        .main-title {
            font-size: 2.5rem;
            font-weight: 300;
            color: #4a90e2;
            margin-bottom: 40px;
            letter-spacing: -0.5px;
        }

        .solutions-list {
            margin-bottom: 60px;
        }

        .solution-item {
            border-bottom: 1px solid #e0e0e0;
            margin-bottom: 0;
        }

        .solution-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 25px 0;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .solution-header:hover {
            background-color: #f5f7fa;
            padding-left: 10px;
        }

        .solution-title {
            font-size: 1.5rem;
            font-weight: 300;
            color: #333;
            letter-spacing: -0.3px;
        }

        .expand-icon {
            width: 24px;
            height: 24px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #999;
            font-size: 1.2rem;
            transition: transform 0.3s ease;
        }

        .solution-item.active .expand-icon {
            transform: rotate(45deg);
        }

        .solution-content {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease;
            background-color: #f9f9f9;
        }

        .solution-item.active .solution-content {
            max-height: 300px;
        }

        .solution-description {
            padding: 20px;
            color: #666;
            font-size: 1rem;
            line-height: 1.7;
        }

        .section-title {
            font-size: 2rem;
            font-weight: 300;
            color: #4a90e2;
            margin-bottom: 20px;
            letter-spacing: -0.4px;
        }

        .section-description {
            font-size: 1rem;
            color: #666;
            line-height: 1.8;
            margin-bottom: 20px;
        }

        .highlight-text {
            color: #4a90e2;
            font-weight: 500;
        }


/* ===== Responsive ===== */
@media (max-width: 900px) {

      .hero {
        flex-direction: column;
        text-align: center;
      }
      nav {
        flex-direction: column;
        gap: 15px;
      }
      
  .dxp-section {
    padding: 40px 20px;
  }
  .benefit-boxes {
    flex-direction: column;
    align-items: center;
  }
}

    @media (max-width: 768px) {
   .main-title {
     font-size: 2rem;
       }
  .section-title {
      font-size: 1.5rem;
            }
  .solution-title {
      font-size: 1.2rem;
            }
  .container {
      padding: 20px 15px;
            }
  }

  </style>
</head>
<body>

  <!-- ===== Hero Section ===== -->
  <section class="hero">
    <div class="hero-text">
      <h1>Digital Experience Platform</h1>
      <p>Deliver User Journey Optimization with Connected Experiences, Platforms, and Devices.</p>
      <button class="btn">Let's Connect!</button>
    </div>
    <div class="hero-img">
      <!-- Placeholder illustration -->
      <img src="https://cdn-icons-png.flaticon.com/512/6212/6212779.png" alt="Digital Experience Illustration">
    </div>
  </section>

  <section class="dxp-section">
  <div class="dxp-container">

    <!-- Why Choose Section -->
    <div class="dxp-intro">
      <h2>Why Choose Digital Experience Platform (DXP)?</h2>
      <p>
        Digital Experience Platform (DXP) furnishes the customer’s journey and experience with a business or brand with a motive to reimagine their engagement. It provides brands a single platform to manage, deliver, and 
        interact with all their customers creating leads to active engagement. DXP allows businesses to extract data 
        and information from silos to deliver a unified data access system. With DXP, businesses can deliver 
        personalized experiences via mobile, web applications, and other devices.
      </p>
    </div>

    <!-- Benefits Section -->
    <div class="dxp-benefits">
      <h2>Benefits of Digital Experience Platforms (DXP)</h2>

      <div class="benefit-boxes">
        
        <!-- Box 1 -->
        <div class="benefit">
          <h3>Enhanced Online Presence</h3>
          <img src="https://cdn-icons-png.flaticon.com/512/6212/6212939.png" alt="Online Presence">
             <p>
        Digital Experience Platform (DXP) furnishes the customer’s journey and experience with a business or brand 
        with a motive to reimagine their engagement.
      </p>
        </div>

        <!-- Box 2 -->
        <div class="benefit">
          <h3>Seamless and Continuous Connectivity</h3>
          <img src="https://cdn-icons-png.flaticon.com/512/6212/6212850.png" alt="Connectivity">
           <p>
        Digital Experience Platform (DXP) furnishes the customer’s journey and experience with a business or brand 
        with a motive to reimagine their engagement.
      </p>
        </div>

         <!-- Box 3 -->
        <div class="benefit">
          <h3>Collaborate Like Never Before</h3>
          <img src="https://cdn-icons-png.flaticon.com/512/6212/6212939.png" alt="Online Presence">
           <p>
        Digital Experience Platform (DXP) furnishes the customer’s journey and experience with a business or brand 
        with a motive to reimagine their engagement.
      </p>
        </div>

        <!-- Box 4 -->
        <div class="benefit">
          <h3>Data-Driven Decision Making</h3>
          <img src="https://cdn-icons-png.flaticon.com/512/6212/6212850.png" alt="Connectivity">
           <p>
        Digital Experience Platform (DXP) furnishes the customer’s journey and experience with a business or brand 
        with a motive to reimagine their engagement.
      </p>
        </div>
         </div>

               <!-- Box 5 -->
           <div class="bene">
          <h3>Data-Driven Decision Making</h3>
          <img src="https://cdn-icons-png.flaticon.com/512/6212/6212850.png" alt="Connectivity">
           <p>
        Digital Experience Platform (DXP) furnishes the customer’s journey and experience with a business or brand 
        with a motive to reimagine their engagement.
      </p>
        </div>
         </div>


    </div>
 </div>
</section>
  
                                                       {{-- #my select section # --}}

  <div class="container">
        <h1 class="main-title">DXP Solutions We Excel At QWIP24</h1>
        
        <div class="solutions-list">
            <div class="solution-item">
                <div class="solution-header" onclick="toggleSolution(this)">
                    <h2 class="solution-title">Intranet</h2>
                    <div class="expand-icon">+</div>
                </div>
                <div class="solution-content">
                    <div class="solution-description">
                       Intranet DXPs are designed to satisfy the technical requirements of employees and customers. Using DXP for intranet solutions enables businesses to eliminate silo-based functional and integration challenges while driving down exorbitant operational costs. Any business can delight its employees and customers with intranet DXP solutions giving them personalized solutions and effective scalability. </div>
                </div>
            </div>

            <div class="solution-item">
                <div class="solution-header" onclick="toggleSolution(this)">
                    <h2 class="solution-title">eCommerce</h2>
                    <div class="expand-icon">+</div>
                </div>
                <div class="solution-content">
                    <div class="solution-description">
                       Stay on top of the dynamism in customer buying trends and behavior with intelligent DXP platforms. In eCommerce, DXP platforms are integrated with a modern and agile system allowing businesses to capitalize on the new trends and patterns backed with data and collaboration of different departments. Improve your customer’s buying and selling journeys with smart platforms.  </div>
                </div>
            </div>

            <div class="solution-item">
                <div class="solution-header" onclick="toggleSolution(this)">
                    <h2 class="solution-title">Customer Portals</h2>
                    <div class="expand-icon">+</div>
                </div>
                <div class="solution-content">
                    <div class="solution-description">
                       Give your customers the ultimate experience of quick resolutions to the majority of the issues they face with a cost-efficient and self-service platform. As a part of the DXP solution, customer portals are empowering as they allow your customers to curate their experiences with your brand and understand your brand closely.         </div>
                </div>
            </div>

            <div class="solution-item">
                <div class="solution-header" onclick="toggleSolution(this)">
                    <h2 class="solution-title">Partner Portals</h2>
                    <div class="expand-icon">+</div>
                </div>
                <div class="solution-content">
                    <div class="solution-description">
                        Strengthen your partner relationships with dedicated portal solutions that facilitate collaboration, resource sharing, and communication. Our partner portals provide secure access to relevant tools and information while maintaining brand consistency.
                    </div>
                </div>
            </div>

            <div class="solution-item">
                <div class="solution-header" onclick="toggleSolution(this)">
                    <h2 class="solution-title">Integration Portals</h2>
                    <div class="expand-icon">+</div>
                </div>
                <div class="solution-content">
                    <div class="solution-description">
                        Our integration portal solutions connect disparate systems and applications, creating unified digital experiences. We specialize in seamless data flow, API management, and creating cohesive user experiences across multiple platforms and services.
                    </div>
                </div>
            </div>
        </div>

        <div class="info-section">
            <h2 class="section-title">Knowing the Different DXP Components</h2>
            <p class="section-description">
                <span class="highlight-text">DXP</span> is applicable to different types of groups of individuals and entities, giving them better control, engagement, and ability to interact. At <span class="highlight-text">QWIP24</span>, we can help businesses establish seamless integration and continuity enabled with intelligent DXP solutions and channels.
            </p>
        </div>
   
        <div class="solutions-list">
      <div class="solution-item">
                <div class="solution-header" onclick="toggleSolution(this)">
                    <h2 class="solution-title">DXP for Customers and End Users</h2>
                    <div class="expand-icon">+</div>
                </div>
                <div class="solution-content">
                    <div class="solution-description">
                        Our integration portal solutions connect disparate systems and applications, creating unified digital experiences. We specialize in seamless data flow, API management, and creating cohesive user experiences across multiple platforms and services.
                    </div>
                </div>
            </div>

          <div class="solution-item">
                <div class="solution-header" onclick="toggleSolution(this)">
                    <h2 class="solution-title">DXP for Business</h2>
                    <div class="expand-icon">+</div>
                </div>
                <div class="solution-content">
                    <div class="solution-description">
                        Our integration portal solutions connect disparate systems and applications, creating unified digital experiences. We specialize in seamless data flow, API management, and creating cohesive user experiences across multiple platforms and services.
                    </div>
                </div>
            </div>
      
      

          <div class="solution-item">
                <div class="solution-header" onclick="toggleSolution(this)">
                    <h2 class="solution-title">DXP for </h2>
                    <div class="expand-icon">+</div>
                </div>
                <div class="solution-content">
                    <div class="solution-description">
                        Our integration portal solutions connect disparate systems and applications, creating unified digital experiences. We specialize in seamless data flow, API management, and creating cohesive user experiences across multiple platforms and services.
                    </div>
                </div>
            </div>
        </div>

      <script>
        function toggleSolution(header) {
            const solutionItem = header.parentElement;
            const isActive = solutionItem.classList.contains('active');
            
            // Close all other items
            document.querySelectorAll('.solution-item').forEach(item => {
                item.classList.remove('active');
            });
            
            // Toggle current item
            if (!isActive) {
                solutionItem.classList.add('active');
            }
        }

        // Add hover effects
        document.querySelectorAll('.solution-header').forEach(header => {
            header.addEventListener('mouseenter', function() {
                if (!this.parentElement.classList.contains('active')) {
                    this.style.transform = 'translateX(5px)';
                }
            });

            header.addEventListener('mouseleave', function() {
                this.style.transform = 'translateX(0)';
            });
        });
    </script>





</body>
</html>
