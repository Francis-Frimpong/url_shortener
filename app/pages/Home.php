<?php require_once __DIR__ .'/../pages/partials/header.php';?>



<!-- HERO -->
<section class="hero">
  <div class="container">
    <div class="row align-items-center">

      <div class="col-md-6 hero-text">
        <h1>More than just shorter links</h1>
        <p>
          Build your brand’s recognition and get detailed insights on how your links are performing.
        </p>
        <button class="btn btn-main">Get Started</button>
      </div>

      <div class="col-md-6 text-center mt-4 mt-md-0">
        <img src="image/illustration-working.svg" class="img-fluid" alt="illustration">
      </div>

    </div>

    <!-- SEARCH BOX -->
  <form action="/url_shortener/home" method="POST" class="search-box mt-5">
    <div class="row g-2">

      <div class="col-md-10">
        <input 
          type="text" 
          name="url"
          class="form-control" 
          placeholder="Shorten a link here..." 
          required
        >
      </div>

      <div class="col-md-2">
        <button type="submit" class="btn w-100">
          Shorten It!
        </button>
      </div>

    </div>
  </form>

  </div>
</section>

<div class="container mt-4">

  <?php foreach ($urlLink as $link): ?>

    <div class="link-card d-flex flex-column flex-md-row align-items-md-center justify-content-between">

      <!-- ORIGINAL LINK -->
      <div class="original">
        <?= htmlspecialchars($link['original_url']) ?>
      </div>

      <!-- RIGHT SIDE -->
      <div class="right-group d-flex align-items-center">

        <div class="short">
          <?= htmlspecialchars($link['short_code']) ?>
        </div>

        <button class="copy-btn" onclick="copyToClipboard(this, '<?= htmlspecialchars($link['short_code']) ?>')">
          Copy
        </button>

      </div>

    </div>

  <?php endforeach; ?>

</div>



<!-- STATS -->
<section class="stats container">
  <h2 class="fw-bold">Advanced Statistics</h2>
  <p class="text-muted">
    Track how your links are performing across the web with our advanced statistics dashboard.
  </p>

  <div class="row mt-5 g-4">
    
    <div class="col-md-4">
      <div class="card-box">
        <h5>Brand Recognition</h5>
        <p>Boost your brand recognition with each click.</p>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card-box">
        <h5>Detailed Records</h5>
        <p>Gain insights into who is clicking your links.</p>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card-box">
        <h5>Fully Customizable</h5>
        <p>Improve brand awareness and content discoverability.</p>
      </div>
    </div>

  </div>
</section>

<!-- CTA -->
<section class="cta">
  <div class="container">
    <h2 class="fw-bold">Boost your links today</h2>
    <button class="btn btn-main mt-3">Get Started</button>
  </div>
</section>

<!-- FOOTER -->
<footer>
  <div class="container">
    <div class="row">

      <div class="col-md-4 mb-3">
        <h5>Shortly</h5>
      </div>

      <div class="col-md-2">
        <h6>Features</h6>
        <a href="#">Link Shortening</a><br>
        <a href="#">Branded Links</a>
      </div>

      <div class="col-md-2">
        <h6>Resources</h6>
        <a href="#">Blog</a><br>
        <a href="#">Developers</a>
      </div>

      <div class="col-md-2">
        <h6>Company</h6>
        <a href="#">About</a><br>
        <a href="#">Careers</a>
      </div>

    </div>
  </div>
</footer>

<?php require_once __DIR__ .'/../pages/partials/footer.php';?>

