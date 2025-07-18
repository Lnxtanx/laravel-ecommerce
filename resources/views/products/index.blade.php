@extends('layouts.app')
@section('title', 'Shop | E-Shop')
@section('content')
<div class="container py-4">
  <div class="row">
    <!-- Sidebar Filters -->
    <aside class="col-lg-3 mb-4 mb-lg-0">
      <div class="card shadow-sm border-0 mb-4">
        <div class="card-body">
          <h5 class="fw-bold mb-3">Categories</h5>
          <form>
            <div class="form-check mb-2">
              <input class="form-check-input" type="checkbox" id="cat1">
              <label class="form-check-label" for="cat1">Electronics</label>
            </div>
            <div class="form-check mb-2">
              <input class="form-check-input" type="checkbox" id="cat2">
              <label class="form-check-label" for="cat2">Fashion</label>
            </div>
            <div class="form-check mb-2">
              <input class="form-check-input" type="checkbox" id="cat3">
              <label class="form-check-label" for="cat3">Sports</label>
            </div>
            <div class="form-check mb-2">
              <input class="form-check-input" type="checkbox" id="cat4">
              <label class="form-check-label" for="cat4">Home</label>
            </div>
          </form>
        </div>
      </div>
      <div class="card shadow-sm border-0">
        <div class="card-body">
          <h5 class="fw-bold mb-3">Price Range</h5>
          <select class="form-select mb-2">
            <option selected>All</option>
            <option>Under $50</option>
            <option>$50 - $100</option>
            <option>$100 - $200</option>
            <option>Above $200</option>
          </select>
        </div>
      </div>
    </aside>
    <!-- Product Grid -->
    <section class="container mb-4">
      <div class="row align-items-center mb-3">
        <div class="col">
          <h4 class="fw-bold mb-1">Shop Products</h4>
          <p class="text-muted mb-0">Browse our latest products and find your favorites!</p>
        </div>
      </div>
      <div class="row g-3 mb-4 justify-content-center">
        <div class="col-6 col-md-3">
          <div class="card h-100 border-0 shadow-sm">
            <img src="https://images.unsplash.com/photo-1511707171634-5f897ff02aa9?auto=format&fit=crop&w=400&q=80" class="card-img-top" alt="Electronics" style="height:90px; object-fit:cover;">
            <div class="card-body text-center py-2">
              <h6 class="fw-bold">Electronics</h6>
            </div>
          </div>
        </div>
        <div class="col-6 col-md-3">
          <div class="card h-100 border-0 shadow-sm">
            <img src="https://images.unsplash.com/photo-1512436991641-6745cdb1723f?auto=format&fit=crop&w=400&q=80" class="card-img-top" alt="Fashion" style="height:90px; object-fit:cover;">
            <div class="card-body text-center py-2">
              <h6 class="fw-bold">Fashion</h6>
            </div>
          </div>
        </div>
        <div class="col-6 col-md-3">
          <div class="card h-100 border-0 shadow-sm">
            <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=400&q=80" class="card-img-top" alt="Sports" style="height:90px; object-fit:cover;">
            <div class="card-body text-center py-2">
              <h6 class="fw-bold">Sports</h6>
            </div>
          </div>
        </div>
        <div class="col-6 col-md-3">
          <div class="card h-100 border-0 shadow-sm">
            <img src="https://images.unsplash.com/photo-1465101178521-c1a9136a3b99?auto=format&fit=crop&w=400&q=80" class="card-img-top" alt="Home" style="height:90px; object-fit:cover;">
            <div class="card-body text-center py-2">
              <h6 class="fw-bold">Home</h6>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="col-lg-9">
      <div class="d-flex justify-content-between align-items-center mb-3">
        <h4 class="fw-bold mb-0">Products</h4>
        <span class="text-muted small">Showing 1-8 of 24</span>
      </div>
      <div class="row g-4">
        @foreach ([
          [
            'img' => 'https://images.unsplash.com/photo-1519125323398-675f0ddb6308?auto=format&fit=crop&w=400&q=80',
            'name' => 'Wireless Headphones',
            'price' => '$59.99',
            'desc' => 'High-quality sound, wireless freedom.'
          ],
          [
            'img' => 'https://images.unsplash.com/photo-1512436991641-6745cdb1723f?auto=format&fit=crop&w=400&q=80',
            'name' => 'Smart Watch',
            'price' => '$129.99',
            'desc' => 'Track your fitness and notifications.'
          ],
          [
            'img' => 'https://images.unsplash.com/photo-1503602642458-232111445657?auto=format&fit=crop&w=400&q=80',
            'name' => 'Running Shoes',
            'price' => '$89.99',
            'desc' => 'Comfortable and durable for all runners.'
          ],
          [
            'img' => 'https://images.unsplash.com/photo-1465101178521-c1a9136a3b99?auto=format&fit=crop&w=400&q=80',
            'name' => 'Backpack',
            'price' => '$39.99',
            'desc' => 'Spacious and stylish for daily use.'
          ],
          [
            'img' => 'https://images.unsplash.com/photo-1519864600265-abb23847ef2c?auto=format&fit=crop&w=400&q=80',
            'name' => 'Sunglasses',
            'price' => '$24.99',
            'desc' => 'UV protection with modern design.'
          ],
          [
            'img' => 'https://images.unsplash.com/photo-1515378791036-0648a3ef77b2?auto=format&fit=crop&w=400&q=80',
            'name' => 'Bluetooth Speaker',
            'price' => '$49.99',
            'desc' => 'Portable and powerful sound.'
          ],
          [
            'img' => 'https://images.unsplash.com/photo-1465101046530-73398c7f28ca?auto=format&fit=crop&w=400&q=80',
            'name' => 'Classic Watch',
            'price' => '$199.99',
            'desc' => 'Elegant design for any occasion.'
          ],
          [
            'img' => 'https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=400&q=80',
            'name' => 'Leather Wallet',
            'price' => '$34.99',
            'desc' => 'Premium leather, slim profile.'
          ],
        ] as $product)
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
          <div class="card h-100 shadow-sm border-0">
            <img src="{{ $product['img'] }}" class="card-img-top" alt="{{ $product['name'] }}" style="height:170px; object-fit:cover;">
            <div class="card-body d-flex flex-column">
              <h6 class="card-title fw-bold">{{ $product['name'] }}</h6>
              <div class="mb-1 text-primary fw-bold">{{ $product['price'] }}</div>
              <p class="text-muted small mb-2">{{ $product['desc'] }}</p>
              <button class="btn btn-outline-primary mt-auto"><i class="fas fa-cart-plus me-1"></i>Add to Cart</button>
            </div>
          </div>
        </div>
        @endforeach
      </div>
      <!-- Pagination -->
      <nav class="mt-5 d-flex justify-content-center">
        <ul class="pagination">
          <li class="page-item disabled"><span class="page-link">Previous</span></li>
          <li class="page-item active"><span class="page-link">1</span></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item"><a class="page-link" href="#">Next</a></li>
        </ul>
      </nav>
    </section>
  </div>
</div>
@endsection 