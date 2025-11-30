<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome — Bella Bistro</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS (CDN) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      :root{--accent:#d35400;--accent-dark:#b74300}
      body{font-family:'Poppins',system-ui,-apple-system,Segoe UI,Roboto,'Helvetica Neue',Arial}
      .hero{
        min-height:78vh;
        background-image: url('https://images.unsplash.com/photo-1541542684-1b7d8a5b7c7e?q=80&w=1600&auto=format&fit=crop&ixlib=rb-4.0.3&s=000000');
        background-size:cover;background-position:center;position:relative;color:#fff;
      }
      .hero::after{content:'';position:absolute;inset:0;background:linear-gradient(180deg,rgba(0,0,0,0.45),rgba(0,0,0,0.6));}
      .hero .container{position:relative;z-index:2}
      .card-spotlight{border:none;border-radius:16px;box-shadow:0 8px 30px rgba(15,15,15,0.12)}
      .feature-icon{width:56px;height:56px;border-radius:12px;display:grid;place-items:center;font-size:22px}
      .btn-accent{background:var(--accent);border:none}
      .btn-accent:hover{background:var(--accent-dark)}
      footer{background:#0f1724;color:#cbd5e1}
    </style>
  </head>
  <body>

    <!-- LOGIN LINK -->
    <div class="text-end p-3 bg-light sticky-top shadow-sm">
      <button type="button" class="btn btn-accent btn-sm px-4 py-2 rounded-pill fw-semibold" data-bs-toggle="modal" data-bs-target="#loginModal">Login</button>
    </div>

    <!-- HERO / WELCOME -->
    <section class="hero d-flex align-items-center">
      <div class="container py-5">
        <div class="row align-items-center">
          <div class="col-lg-7 text-white">
            <h1 class="display-5 fw-bold">Welcome to <span class="text-warning">Bella Bistro</span></h1>
            <p class="lead mt-3">A place where fresh flavors, warm hospitality, and handcrafted drinks come together. Join us for seasonal dishes made from locally sourced ingredients.</p>
            <div class="mt-4">
              <a role="button" class="btn btn-accent btn-lg me-2">Make a Reservation</a>
              <a role="button" class="btn btn-outline-light btn-lg">View Today's Specials</a>
            </div>
            <div class="mt-4 small opacity-75">Open daily: <strong>9:00 AM — 11:00 PM</strong></div>
          </div>

          <div class="col-lg-5 d-none d-lg-block">
            <div class="card card-spotlight p-4">
              <div class="row g-3">
                <div class="col-4">
                  <img src="https://images.unsplash.com/photo-1541542684-1b7d8a5b7c7e?q=80&w=600&auto=format&fit=crop&ixlib=rb-4.0.3&s=000000" class="img-fluid rounded" alt="dish">
                </div>
                <div class="col-8">
                  <h5 class="mb-1">Chef’s Signature: Citrus Glazed Salmon</h5>
                  <p class="mb-1 small">Delicate, pan-seared salmon finished with a bright citrus glaze and seasonal greens.</p>
                  <div class="small text-muted">Recommended wine pairing available.</div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>

    <!-- FEATURES -->
    <section class="py-5">
      <div class="container">
        <div class="row text-center g-4">
          <div class="col-md-4">
            <div class="p-4 card h-100 border-0 shadow-sm rounded-3">
              <div class="feature-icon bg-light mx-auto mb-3">🍽️</div>
              <h5>Fresh Ingredients</h5>
              <p class="small text-muted">We use seasonal, farm-fresh produce and ethically sourced proteins.</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="p-4 card h-100 border-0 shadow-sm rounded-3">
              <div class="feature-icon bg-light mx-auto mb-3">☕</div>
              <h5>Cozy Ambience</h5>
              <p class="small text-muted">Warm lighting and comfortable seating make every meal feel special.</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="p-4 card h-100 border-0 shadow-sm rounded-3">
              <div class="feature-icon bg-light mx-auto mb-3">🚚</div>
              <h5>Delivery & Takeaway</h5>
              <p class="small text-muted">Order ahead and pick up or have your favorites delivered hot and fast.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- MENU HIGHLIGHTS -->
    <section class="py-5 bg-light">
      <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4">
          <h3 class="mb-0">Menu Highlights</h3>
          <a class="text-decoration-none">See full menu</a>
        </div>

        <div class="row g-4">
          <div class="col-md-4">
            <div class="card h-100">
              <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?q=80&w=800&auto=format&fit=crop&ixlib=rb-4.0.3&s=000000" class="card-img-top" alt="pasta">
              <div class="card-body">
                <h5 class="card-title">Truffle Mushroom Pasta</h5>
                <p class="card-text small text-muted">Creamy, rich, and topped with shaved parmesan.</p>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card h-100">
              <img src="https://images.unsplash.com/photo-1546069901-ba9599a7e63c?q=80&w=800&auto=format&fit=crop&ixlib=rb-4.0.3&s=000000" class="card-img-top" alt="burger">
              <div class="card-body">
                <h5 class="card-title">Bella Wagyu Burger</h5>
                <p class="card-text small text-muted">Juicy wagyu patty with house pickles and smoked aioli.</p>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card h-100">
              <img src="https://images.unsplash.com/photo-1540189549336-e6e99c3679fe?q=80&w=800&auto=format&fit=crop&ixlib=rb-4.0.3&s=000000" class="card-img-top" alt="dessert">
              <div class="card-body">
                <h5 class="card-title">Lemon & Ricotta Tart</h5>
                <p class="card-text small text-muted">Light, zesty, and perfect with an espresso.</p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>

    <!-- CTA BANNER -->
    <section class="py-5 text-white" style="background:linear-gradient(90deg,#1f2937,#111827)">
      <div class="container text-center">
        <h4 class="mb-2">Planning an event?</h4>
        <p class="mb-3 small">Let our team create a bespoke menu for your private dinners, corporate gatherings, or celebrations.</p>
        <a class="btn btn-outline-light btn-lg">Contact Events Team</a>
      </div>
    </section>

    <!-- FOOTER -->
    <footer class="py-4">
      <div class="container d-flex justify-content-between align-items-center">
        <div>
          <strong>Bella Bistro</strong><br>
          <small class="text-muted">123 Market Lane, Kathmandu • +977 1 555 0123</small>
        </div>
        <div class="text-end small">
          <div>Follow us</div>
          <div class="mt-2">
            <a class="text-muted me-2" aria-label="instagram">Instagram</a>
            <a class="text-muted me-2" aria-label="facebook">Facebook</a>
            <a class="text-muted" aria-label="twitter">X</a>
          </div>
        </div>
      </div>
    </footer>

    <!-- Bootstrap JS (CDN) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
      <!-- LOGIN MODAL -->
    <div class="modal fade" id="loginModal" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content rounded-4 shadow">
          <div class="modal-header border-0">
            <h5 class="modal-title fw-bold">Login</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body px-4">
            <form>
              <div class="mb-3">
                <label class="form-label">Username</label>
                <input type="text" class="form-control form-control-lg" placeholder="Enter Username">
              </div>
              <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" class="form-control form-control-lg" placeholder="Enter Password">
              </div>
              <button type="button" class="btn btn-accent w-100 py-2 fw-semibold">Login</button>
            </form>
          </div>
          <div class="modal-footer border-0 small justify-content-center">
            <span class="text-muted">Don't have an account?</span> <a href="#" class="ms-1">Sign Up</a>
          </div>
        </div>
      </div>
    </div>

  </body>
</html>
