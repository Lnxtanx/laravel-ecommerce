@extends('layouts.app')
@section('title', 'Product Details | E-Shop')
@section('content')
<div class="container py-5">
  <div class="row g-5">
    <!-- Product Image -->
    <div class="col-md-6">
      <img src="https://images.unsplash.com/photo-1519125323398-675f0ddb6308?auto=format&fit=crop&w=600&q=80" class="img-fluid rounded-4 shadow-sm w-100" alt="Wireless Headphones">
    </div>
    <!-- Product Info -->
    <div class="col-md-6">
      <h2 class="fw-bold mb-2">Wireless Headphones</h2>
      <div class="mb-2">
        <span class="text-warning">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="far fa-star"></i>
        </span>
        <span class="text-muted small ms-2">4.0 (120 reviews)</span>
      </div>
      <div class="mb-3">
        <span class="h4 text-primary fw-bold">$59.99</span>
      </div>
      <p class="mb-4 text-muted">Experience high-quality sound and wireless freedom with our top-rated headphones. Perfect for music lovers, gamers, and professionals alike. Enjoy up to 20 hours of battery life and a comfortable, lightweight design.</p>
      <ul class="mb-4 ps-3">
        <li>Bluetooth 5.0 connectivity</li>
        <li>Up to 20 hours battery life</li>
        <li>Noise-cancelling technology</li>
        <li>Lightweight & comfortable fit</li>
      </ul>
      <form class="d-flex align-items-center mb-4" style="max-width: 200px;">
        <label for="quantity" class="me-2 fw-semibold">Qty:</label>
        <input type="number" id="quantity" name="quantity" class="form-control" value="1" min="1" style="width: 70px;">
      </form>
      <button class="btn btn-primary btn-lg px-4"><i class="fas fa-cart-plus me-2"></i>Add to Cart</button>
    </div>
  </div>
  <!-- Reviews Section -->
  <div class="row mt-5">
    <div class="col-lg-8">
      <h4 class="fw-bold mb-3">Customer Reviews</h4>
      <div class="mb-4">
        <div class="d-flex align-items-center mb-2">
          <img src="https://randomuser.me/api/portraits/men/32.jpg" class="rounded-circle me-3" width="40" height="40" alt="User">
          <div>
            <div class="fw-bold">John D.</div>
            <div class="text-warning small">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
            </div>
            <div class="text-muted small">2 days ago</div>
          </div>
        </div>
        <p class="mb-2">Great sound quality and battery life. Very comfortable for long use!</p>
      </div>
      <div class="mb-4">
        <div class="d-flex align-items-center mb-2">
          <img src="https://randomuser.me/api/portraits/women/44.jpg" class="rounded-circle me-3" width="40" height="40" alt="User">
          <div>
            <div class="fw-bold">Sarah K.</div>
            <div class="text-warning small">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
              <i class="far fa-star"></i>
            </div>
            <div class="text-muted small">1 week ago</div>
          </div>
        </div>
        <p class="mb-2">Good value for the price. The wireless range is impressive.</p>
      </div>
      <!-- Add Review Form (optional, not functional) -->
      <div class="card border-0 shadow-sm mb-4">
        <div class="card-body">
          <h6 class="fw-bold mb-2">Leave a Review</h6>
          <form>
            <div class="mb-2">
              <input type="text" class="form-control" placeholder="Your Name">
            </div>
            <div class="mb-2">
              <textarea class="form-control" rows="2" placeholder="Your Review"></textarea>
            </div>
            <div class="mb-2">
              <select class="form-select w-auto d-inline-block" style="width: 120px;">
                <option>5 Stars</option>
                <option>4 Stars</option>
                <option>3 Stars</option>
                <option>2 Stars</option>
                <option>1 Star</option>
              </select>
              <button class="btn btn-primary ms-2" type="submit">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- Related Products -->
  <div class="mt-5">
    <h4 class="fw-bold mb-4">Related Products</h4>
    <div class="row g-4">
      @foreach ([
        [
          'img' => 'https://images.unsplash.com/photo-1512436991641-6745cdb1723f?auto=format&fit=crop&w=400&q=80',
          'name' => 'Smart Watch',
          'price' => '$129.99'
        ],
        [
          'img' => 'https://images.unsplash.com/photo-1503602642458-232111445657?auto=format&fit=crop&w=400&q=80',
          'name' => 'Running Shoes',
          'price' => '$89.99'
        ],
        [
          'img' => 'https://images.unsplash.com/photo-1519864600265-abb23847ef2c?auto=format&fit=crop&w=400&q=80',
          'name' => 'Sunglasses',
          'price' => '$24.99'
        ],
      ] as $product)
      <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <div class="card h-100 shadow-sm border-0">
          <img src="{{ $product['img'] }}" class="card-img-top" alt="{{ $product['name'] }}" style="height:150px; object-fit:cover;">
          <div class="card-body d-flex flex-column">
            <h6 class="card-title fw-bold">{{ $product['name'] }}</h6>
            <div class="mb-2 text-primary fw-bold">{{ $product['price'] }}</div>
            <button class="btn btn-outline-primary mt-auto"><i class="fas fa-cart-plus me-1"></i>Add to Cart</button>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
  <!-- You may also like -->
  <div class="mt-5">
    <h5 class="fw-bold mb-3">You may also like</h5>
    <div class="row g-4">
      @foreach ([
        [
          'img' => 'https://images.unsplash.com/photo-1515378791036-0648a3ef77b2?auto=format&fit=crop&w=400&q=80',
          'name' => 'Bluetooth Speaker',
          'price' => '$49.99'
        ],
        [
          'img' => 'https://images.unsplash.com/photo-1465101046530-73398c7f28ca?auto=format&fit=crop&w=400&q=80',
          'name' => 'Classic Watch',
          'price' => '$199.99'
        ],
      ] as $product)
      <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <div class="card h-100 shadow-sm border-0">
          <img src="{{ $product['img'] }}" class="card-img-top" alt="{{ $product['name'] }}" style="height:150px; object-fit:cover;">
          <div class="card-body d-flex flex-column">
            <h6 class="card-title fw-bold">{{ $product['name'] }}</h6>
            <div class="mb-2 text-primary fw-bold">{{ $product['price'] }}</div>
            <button class="btn btn-outline-primary mt-auto"><i class="fas fa-cart-plus me-1"></i>Add to Cart</button>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</div>
@endsection 