<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Story time to grow - Homepage</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Baloo+2&family=Nunito&display=swap" rel="stylesheet">

  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: 'Nunito', sans-serif;
      background-color: #F2F2F2;
      scroll-behavior: smooth;
      margin: 0;
      font-family: Arial, sans-serif;
    }

    h1,
    h2,
    h3 {
      font-family: 'Baloo 2', cursive;
      color: #FF914D;
    }

    .fade-section {
      opacity: 0;
      transform: translateY(30px);
      transition: opacity 1s ease, transform 1s ease;
    }

    .fade-section.visible {
      opacity: 1;
      transform: translateY(0);
    }

    .age-section {
      min-height: 100vh;
      padding: 100px 20px;
      display: flex;
      flex-direction: column;
      justify-content: center;
      text-align: center;
    }

    .age-section img {
      max-width: 100%;
      height: auto;
      border-radius: 20px;
      margin-bottom: 20px;
    }

    footer {
      background-color: #FFD4A9;
      padding: 40px;
      text-align: center;
      color: #333;
    }

    .navbar-brand {
      font-weight: bold;
      font-family: 'Baloo 2', cursive;
    }

    .nav-btn-text {
      margin-left: 15px;
      padding: 8px 12px;
      color: #333;
      text-decoration: none;
      font-weight: 500;
      border-radius: 8px;
      transition: all 0.3s ease;
    }

    .nav-btn-text:hover {
      background-color: rgba(0, 123, 255, 0.1);
      /* Màu nền nhẹ khi hover */
      color: #007bff;
      /* Màu chữ đổi */
      text-decoration: underline;
    }

    section {
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 10px;
    }

    .content-box {
      display: flex;
      width: 80%;
      height: 80%;
      background-color: white;
      border-radius: 20px;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
      overflow: hidden;
      padding: 0;
      margin: auto;
    }

    .image {
      flex: 2;
      display: block;
      background-color: #fffaf4;
      padding: 0;
      margin: auto;
      margin-left: 0;
    }

    .image img {
      width: 100%;
      height: 100%;
      object-fit: contain;
      border-radius: 0;
      margin: 0;
      padding: 0;
      display: block;
    }

    .text {
      flex: 1;
      padding: 40px;
      display: flex;
      flex-direction: column;
      justify-content: center;
      background-color: #fffaf4;
      text-align: center;
    }

    .text h2 {
      margin-bottom: 15px;
      font-size: 1.8rem;
      color: #444;
    }

    .text p {
      margin-bottom: 20px;
      font-size: 1rem;
      color: #666;
    }

    .text button {
      padding: 10px 20px;
      background-color: #ffb347;
      color: white;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      font-size: 1rem;
      transition: background-color 0.3s ease;
    }

    .text button:hover {
      background-color: #ff9933;
    }

    /* Mobile Responsive */
    @media (max-width: 768px) {
      .content-box {
        flex-direction: column;
        height: auto;
        padding: 16px;
      }

      .image {
        display: flex;
        align-items: center;
        justify-content: center;
        height: auto;
        margin: 0;
      }

      .image img {
        width: 100%;
        height: auto;
        border-radius: 20px 20px 0 0;
        object-fit: contain;
        max-height: 300px;
      }

      .text {
        padding: 0px;
      }
    }
  </style>
</head>

<body>

  <!-- Navigation Bar -->
  <?php include 'navigation-bar.php'; ?>

  <!-- Trang 1 – Giới thiệu lợi ích kể chuyện -->
  <section>
    <div class="content-box">
      <div class="image">
        <img src="/images/page011.jpg" alt="Storytelling Benefits">
      </div>
      <div class="text">
        <h2>Storytelling for Bonding</h2>
        <p>Reading stories to your child builds emotional connection, language development, and a lifelong love for
          learning.</p>
        <button onclick="location.href='#'">Explore</button>
      </div>
    </div>
  </section>

  <!-- Trang 2 – Trẻ 0–3 tuổi -->
  <section>
    <div class="content-box">
      <div class="image">
        <img src="/images/page02.jpg" alt="0-3 Years Old">
      </div>
      <div class="text">
        <h2>For Children Aged 0–3</h2>
        <p>Soft voices and short tales stimulate your baby's senses and create comforting bedtime rituals.</p>
        <button onclick="location.href='#'">Explore</button>
      </div>
    </div>
  </section>

  <!-- Trang 3 – Trẻ 4–6 tuổi -->
  <section>
    <div class="content-box">
      <div class="image">
        <img src="/images/page03.jpg" alt="4-6 Years Old">
      </div>
      <div class="text">
        <h2>For Children Aged 4–6</h2>
        <p>Stories at this stage help children learn values, emotions, and early reading skills in a fun way.</p>
        <button onclick="location.href='#'">Explore</button>
      </div>
    </div>
  </section>

  <!-- Trang 4 – Trẻ 7–9 tuổi -->
  <section>
    <div class="content-box">
      <div class="image">
        <img src="/images/page04.jpg" alt="7-9 Years Old">
      </div>
      <div class="text">
        <h2>For Children Aged 7–9</h2>
        <p>Longer stories foster creativity, critical thinking, and a deeper understanding of the world around them.</p>
        <button onclick="location.href='#'">Explore</button>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer>
    <h4>Story time to grow</h4>
    <p>Kể chuyện mỗi ngày – nuôi dưỡng tâm hồn con trẻ.</p>
    <p>Liên hệ: contact@storytime.com | © 2025</p>
  </footer>

  <!-- Script & Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../js/age-model.js"></script>

  <script>
    // Fade-in on scroll
    const sections = document.querySelectorAll('.fade-section');
    const showOnScroll = () => {
      sections.forEach(section => {
        const rect = section.getBoundingClientRect();
        if (rect.top <= window.innerHeight - 100) {
          section.classList.add('visible');
        }
      });
    };
    window.addEventListener('scroll', showOnScroll);
    window.addEventListener('load', showOnScroll);
  </script>
</body>

</html>