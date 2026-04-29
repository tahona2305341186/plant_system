<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>About Us</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: Arial, sans-serif;
    }

    body {
      background: #f0fdf4;
      color: #1f2937;
    }

    /* Hero Section */
    .hero {
      background:  #15803d;
      color: white;
      text-align: center;
      padding: 80px 20px;
    }

    .hero h1 {
      font-size: 48px;
      margin-bottom: 10px;
    }

    .hero p {
      font-size: 18px;
      opacity: 0.9;
    }

    /* About Section */
    .about {
      max-width: 1100px;
      margin: 50px auto;
      display: flex;
      flex-wrap: wrap;
      gap: 30px;
      align-items: center;
      padding: 20px;
    }

    .about img {
      width: 100%;
      max-width: 450px;
      border-radius: 15px;
      box-shadow: 0 10px 20px rgba(0,0,0,0.1);
    }

    .about-text {
      flex: 1;
    }

    .about-text h2 {
      font-size: 32px;
      margin-bottom: 15px;
      color: #166534;
    }

    .about-text p {
      line-height: 1.6;
      margin-bottom: 15px;
    }

    /* Cards Section */
    .features {
      background: white;
      padding: 50px 20px;
      text-align: center;
    }

    .features h2 {
      margin-bottom: 30px;
      color: #166534;
    }

    .card-container {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 20px;
    }

    .card {
      background: #dcfce7;
      padding: 25px;
      border-radius: 12px;
      width: 280px;
      transition: 0.3s;
      box-shadow: 0 5px 15px rgba(0,0,0,0.05);
    }

    .card:hover {
      transform: translateY(-10px);
    }

    .card h3 {
      margin-bottom: 10px;
      color: #15803d;
    }

    /* Footer */
    .footer {
      text-align: center;
      padding: 20px;
      background: #166534;
      color: white;
      margin-top: 40px;
    }

    /* Responsive */
    @media(max-width: 768px) {
      .hero h1 {
        font-size: 32px;
      }

      .about {
        flex-direction: column;
        text-align: center;
      }
    }

  </style>
</head>

<body>

  <!-- Hero Section -->
  <section class="hero">
    <h1>About Us</h1>
    <p>Building a greener future together 🌱</p>
  </section>

  <!-- About Section -->
  <section class="about">
    <img src="https://images.unsplash.com/photo-1501004318641-b39e6451bec6" alt="Nature">

    <div class="about-text">
      <h2>Who We Are</h2>
      <p>
        We are passionate about creating sustainable solutions for a better planet.
        Our mission is to inspire people to take small steps that make a big difference.
      </p>
      <p>
        Through technology and awareness, we help individuals track eco-friendly
        activities and contribute to environmental protection.
      </p>
    </div>
  </section>

  <!-- Features Section -->
  <section class="features">
    <h2>What We Do</h2>

    <div class="card-container">
      <div class="card">
        <h3>🌍 Sustainability</h3>
        <p>Promoting eco-friendly habits in everyday life.</p>
      </div>

      <div class="card">
        <h3>📊 Tracking</h3>
        <p>Helping users monitor their environmental impact.</p>
      </div>

      <div class="card">
        <h3>🤝 Community</h3>
        <p>Connecting people who care about the environment.</p>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <div class="footer">
    <p>© 2026 Green Earth System | All Rights Reserved</p>
  </div>

</body>
</html>