@extends('layouts.app')
@section('title', 'Home | E-Shop')
@section('content')
<!-- Hero Carousel -->
<div id="heroCarousel" class="carousel slide mb-5" data-bs-ride="carousel">
  <div class="carousel-inner rounded-4 shadow">
    <div class="carousel-item active">
      <img src="https://images.unsplash.com/photo-1519710164239-da123dc03ef4?auto=format&fit=crop&w=1200&q=80" class="d-block w-100" alt="Modern Sofa" style="height:340px; object-fit:cover;">
      <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded-3 p-3">
        <h2 class="fw-bold">Welcome to E-Shop</h2>
        <p>Discover the latest trends and best deals in furniture!</p>
        <a href="#featured" class="btn btn-primary mt-2">Shop Now</a>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://images.unsplash.com/photo-1507089947368-19c1da9775ae?auto=format&fit=crop&w=1200&q=80" class="d-block w-100" alt="Wooden Dining Table" style="height:340px; object-fit:cover;">
      <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded-3 p-3">
        <h2 class="fw-bold">Elegant Dining</h2>
        <p>Upgrade your dining experience with our stylish tables.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://images.unsplash.com/photo-1512918728675-ed5a9ecdebfd?auto=format&fit=crop&w=1200&q=80" class="d-block w-100" alt="Bed Frame" style="height:340px; object-fit:cover;">
      <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded-3 p-3">
        <h2 class="fw-bold">Rest in Comfort</h2>
        <p>Find the perfect bed for your dream bedroom.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://images.unsplash.com/photo-1515378791036-0648a3ef77b2?auto=format&fit=crop&w=1200&q=80" class="d-block w-100" alt="Accent Chair" style="height:340px; object-fit:cover;">
      <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded-3 p-3">
        <h2 class="fw-bold">Accent Chairs</h2>
        <p>Add a touch of style and comfort to any room.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!-- Featured Products -->
<section id="featured" class="container mb-5">
  <h3 class="fw-bold mb-4 text-center">Featured Products</h3>
  <div class="row g-4 justify-content-center">
    @foreach ([
      [ 'img' => 'https://images.unsplash.com/photo-1519710164239-da123dc03ef4?auto=format&fit=crop&w=400&q=80', 'name' => 'Modern Sofa', 'price' => '$499.99' ],
      [ 'img' => 'https://images.unsplash.com/photo-1507089947368-19c1da9775ae?auto=format&fit=crop&w=400&q=80', 'name' => 'Wooden Dining Table', 'price' => '$799.99' ],
      [ 'img' => 'https://images.unsplash.com/photo-1515378791036-0648a3ef77b2?auto=format&fit=crop&w=400&q=80', 'name' => 'Accent Chair', 'price' => '$249.99' ],
      [ 'img' => 'https://images.unsplash.com/photo-1465101046530-73398c7f28ca?auto=format&fit=crop&w=400&q=80', 'name' => 'Classic Bookshelf', 'price' => '$199.99' ],
      [ 'img' => 'https://images.unsplash.com/photo-1519864600265-abb23847ef2c?auto=format&fit=crop&w=400&q=80', 'name' => 'Coffee Table', 'price' => '$149.99' ],
      [ 'img' => 'https://images.unsplash.com/photo-1512918728675-ed5a9ecdebfd?auto=format&fit=crop&w=400&q=80', 'name' => 'Bed Frame', 'price' => '$599.99' ],
      [ 'img' => 'https://images.unsplash.com/photo-1519125323398-675f0ddb6308?auto=format&fit=crop&w=400&q=80', 'name' => 'Nightstand', 'price' => '$89.99' ],
      [ 'img' => 'https://images.unsplash.com/photo-1503602642458-232111445657?auto=format&fit=crop&w=400&q=80', 'name' => 'Wardrobe', 'price' => '$899.99' ],
      [ 'img' => 'https://images.unsplash.com/photo-1512436991641-6745cdb1723f?auto=format&fit=crop&w=400&q=80', 'name' => 'TV Stand', 'price' => '$299.99' ],
      [ 'img' => 'https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=400&q=80', 'name' => 'Recliner', 'price' => '$399.99' ],
    ] as $product)
    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
      <div class="card h-100 shadow-sm border-0">
        <img src="{{ $product['img'] }}" class="card-img-top" alt="{{ $product['name'] }}" style="height:180px; object-fit:cover;">
        <div class="card-body d-flex flex-column">
          <h6 class="card-title fw-bold">{{ $product['name'] }}</h6>
          <div class="mb-2 text-primary fw-bold">{{ $product['price'] }}</div>
          <button class="btn btn-outline-primary mt-auto"><i class="fas fa-cart-plus me-1"></i>Add to Cart</button>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</section>
<!-- Testimonials / Brands -->
<section class="bg-light py-5">
  <div class="container">
    <h4 class="fw-bold mb-4 text-center">What Our Customers Say</h4>
    <div class="row justify-content-center g-4">
      <div class="col-md-4">
        <div class="card border-0 shadow-sm h-100">
          <div class="card-body">
            <p class="mb-3">"Great selection, fast shipping, and amazing customer service!"</p>
            <div class="d-flex align-items-center">
              <img src="https://randomuser.me/api/portraits/men/32.jpg" class="rounded-circle me-3" width="48" height="48" alt="User">
              <div>
                <div class="fw-bold">John D.</div>
                <div class="text-muted small">Verified Buyer</div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card border-0 shadow-sm h-100">
          <div class="card-body">
            <p class="mb-3">"I love the deals and the quality of the products. Highly recommended!"</p>
            <div class="d-flex align-items-center">
              <img src="https://randomuser.me/api/portraits/women/44.jpg" class="rounded-circle me-3" width="48" height="48" alt="User">
              <div>
                <div class="fw-bold">Sarah K.</div>
                <div class="text-muted small">Frequent Shopper</div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card border-0 shadow-sm h-100">
          <div class="card-body">
            <p class="mb-3">"Easy to use website and quick checkout process. Will shop again!"</p>
            <div class="d-flex align-items-center">
              <img src="https://randomuser.me/api/portraits/men/65.jpg" class="rounded-circle me-3" width="48" height="48" alt="User">
              <div>
                <div class="fw-bold">Alex P.</div>
                <div class="text-muted small">New Customer</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="text-center mt-5">
      <span class="me-3 text-muted">Trusted by top brands:</span>
      <i class="fab fa-apple fa-2x mx-2 text-secondary"></i>
      <i class="fab fa-amazon fa-2x mx-2 text-secondary"></i>
      <i class="fab fa-google fa-2x mx-2 text-secondary"></i>
      <i class="fab fa-microsoft fa-2x mx-2 text-secondary"></i>
    </div>
  </div>
</section>
<!-- Why Shop With Us -->
<section class="container py-5">
  <h4 class="fw-bold mb-4 text-center">Why Shop With Us?</h4>
  <div class="row text-center g-4">
    <div class="col-6 col-md-3">
      <div class="p-4 bg-white rounded-3 shadow-sm h-100">
        <i class="fas fa-shipping-fast fa-2x text-primary mb-2"></i>
        <h6 class="fw-bold mt-2">Free Shipping</h6>
        <p class="text-muted small">On all orders over $50</p>
      </div>
    </div>
    <div class="col-6 col-md-3">
      <div class="p-4 bg-white rounded-3 shadow-sm h-100">
        <i class="fas fa-headset fa-2x text-primary mb-2"></i>
        <h6 class="fw-bold mt-2">24/7 Support</h6>
        <p class="text-muted small">We're here to help anytime</p>
      </div>
    </div>
    <div class="col-6 col-md-3">
      <div class="p-4 bg-white rounded-3 shadow-sm h-100">
        <i class="fas fa-lock fa-2x text-primary mb-2"></i>
        <h6 class="fw-bold mt-2">Secure Payment</h6>
        <p class="text-muted small">100% secure payment</p>
      </div>
    </div>
    <div class="col-6 col-md-3">
      <div class="p-4 bg-white rounded-3 shadow-sm h-100">
        <i class="fas fa-undo fa-2x text-primary mb-2"></i>
        <h6 class="fw-bold mt-2">Easy Returns</h6>
        <p class="text-muted small">30-day money-back guarantee</p>
      </div>
    </div>
  </div>
</section>
<!-- Shop by Category -->
<section class="container py-5">
  <h4 class="fw-bold mb-4 text-center">Shop by Category</h4>
  <div class="row g-4 justify-content-center">
    @foreach ([
      [ 'img' => 'https://images.unsplash.com/photo-1519710164239-da123dc03ef4?auto=format&fit=crop&w=400&q=80', 'name' => 'Sofas' ],
      [ 'img' => 'https://images.unsplash.com/photo-1507089947368-19c1da9775ae?auto=format&fit=crop&w=400&q=80', 'name' => 'Tables' ],
      [ 'img' => 'https://images.unsplash.com/photo-1515378791036-0648a3ef77b2?auto=format&fit=crop&w=400&q=80', 'name' => 'Chairs' ],
      [ 'img' => 'https://images.unsplash.com/photo-1465101046530-73398c7f28ca?auto=format&fit=crop&w=400&q=80', 'name' => 'Bookshelves' ],
      [ 'img' => 'https://images.unsplash.com/photo-1519864600265-abb23847ef2c?auto=format&fit=crop&w=400&q=80', 'name' => 'Coffee Tables' ],
      [ 'img' => 'https://images.unsplash.com/photo-1512918728675-ed5a9ecdebfd?auto=format&fit=crop&w=400&q=80', 'name' => 'Beds' ],
      [ 'img' => 'https://images.unsplash.com/photo-1519125323398-675f0ddb6308?auto=format&fit=crop&w=400&q=80', 'name' => 'Nightstands' ],
      [ 'img' => 'https://images.unsplash.com/photo-1503602642458-232111445657?auto=format&fit=crop&w=400&q=80', 'name' => 'Wardrobes' ],
      [ 'img' => 'https://images.unsplash.com/photo-1512436991641-6745cdb1723f?auto=format&fit=crop&w=400&q=80', 'name' => 'TV Stands' ],
      [ 'img' => 'https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=400&q=80', 'name' => 'Recliners' ],
    ] as $cat)
    <div class="col-6 col-md-3 col-lg-2">
      <div class="card h-100 border-0 shadow-sm">
        <img src="{{ $cat['img'] }}" class="card-img-top" alt="{{ $cat['name'] }}" style="height:120px; object-fit:cover;">
        <div class="card-body text-center">
          <h6 class="fw-bold">{{ $cat['name'] }}</h6>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</section>
@endsection 