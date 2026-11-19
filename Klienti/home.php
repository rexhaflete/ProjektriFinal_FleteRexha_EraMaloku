<?php $pageTitle = 'Home'; include '../Serveri/header.php'; ?>
<main>
  <section class="hero">
    <img src="../img/Rugova_Canyon.jpg" alt="Rugova Canyon" class="home-img">
    <div class="hero-text">
      <h1>Fly with Prishtina Airline</h1>
      <p>Discover Kosova and the world from the heart of the Balkans</p>
      <a href="#" class="hero-btn">Book now</a>
    </div>
  </section>

  <section class="about-teaser" id="aboutus">
    <div class="about-teaser-inner">
      <h2>Who we are</h2>
      <p>Prishtina Airline connects Kosovo with the world. We fly with care, comfort and the warmth of home, every single day.</p>
      <a href="about.php" class="about-btn">About us</a>
    </div>
  </section>

  <section class="home-section">
    <h2>Popular destinations</h2>
    <div class="card-grid">
      <article class="dest-card">
        <img src="../img/london.jpg" alt="London">
        <div class="dest-info">
          <h3>London</h3>
          <p>Direct flights, 3h 10min</p>
          <span class="dest-price">from €79</span>
          <a href="#" class="dest-btn">Book now</a>
        </div>
      </article>
      <article class="dest-card">
        <img src="../img/zurich.jpg" alt="Zurich">
        <div class="dest-info">
          <h3>Zurich</h3>
          <p>Direct flights, 2h 20min</p>
          <span class="dest-price">from €59</span>
          <a href="#" class="dest-btn">Book now</a>
        </div>
      </article>
      <article class="dest-card">
        <img src="../img/istanbul.jpg" alt="Istanbul">
        <div class="dest-info">
          <h3>Istanbul</h3>
          <p>Direct flights, 1h 50min</p>
          <span class="dest-price">from €49</span>
          <a href="#" class="dest-btn">Book now</a>
        </div>
      </article>
    </div>
  </section>
</main>

<?php include '../Serveri/footer.php'; ?>