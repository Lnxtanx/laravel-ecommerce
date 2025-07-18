@extends('layouts.app')
@section('title', 'Checkout | E-Shop')
@section('content')
<div class="container py-5">
  <h2 class="fw-bold mb-4">Checkout</h2>
  <div class="mb-4 text-center">
    <i class="fas fa-lock fa-2x text-success mb-2"></i>
    <h5 class="fw-bold">Secure Checkout</h5>
    <p class="text-muted mb-0">Your information is encrypted and safe. Complete your order in a few easy steps.</p>
    <ul class="list-inline mt-3 mb-0">
      <li class="list-inline-item px-2"><span class="badge bg-primary">1</span> Billing</li>
      <li class="list-inline-item px-2"><span class="badge bg-secondary">2</span> Shipping</li>
      <li class="list-inline-item px-2"><span class="badge bg-secondary">3</span> Payment</li>
      <li class="list-inline-item px-2"><span class="badge bg-secondary">4</span> Review</li>
    </ul>
  </div>
  <div class="row g-4">
    <!-- Billing & Shipping Form -->
    <div class="col-lg-7">
      <div class="card border-0 shadow-sm mb-4">
        <div class="card-body">
          <h5 class="fw-bold mb-3">Billing & Shipping Details</h5>
          <form>
            <div class="row mb-3">
              <div class="col-md-6 mb-2">
                <label for="name" class="form-label">Full Name</label>
                <input type="text" class="form-control" id="name" placeholder="Enter your name">
              </div>
              <div class="col-md-6 mb-2">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Enter your email">
              </div>
            </div>
            <div class="mb-3">
              <label for="address" class="form-label">Address</label>
              <input type="text" class="form-control" id="address" placeholder="123 Main St">
            </div>
            <div class="row mb-3">
              <div class="col-md-6 mb-2">
                <label for="city" class="form-label">City</label>
                <input type="text" class="form-control" id="city" placeholder="City">
              </div>
              <div class="col-md-3 mb-2">
                <label for="zip" class="form-label">ZIP</label>
                <input type="text" class="form-control" id="zip" placeholder="ZIP">
              </div>
              <div class="col-md-3 mb-2">
                <label for="country" class="form-label">Country</label>
                <select class="form-select" id="country">
                  <option selected>Choose...</option>
                  <option>USA</option>
                  <option>UK</option>
                  <option>Canada</option>
                  <option>India</option>
                </select>
              </div>
            </div>
            <div class="mb-3">
              <label for="phone" class="form-label">Phone</label>
              <input type="text" class="form-control" id="phone" placeholder="Phone number">
            </div>
            <div class="mb-3">
              <label for="notes" class="form-label">Order Notes (optional)</label>
              <textarea class="form-control" id="notes" rows="2" placeholder="Any special instructions?"></textarea>
            </div>
            <button type="submit" class="btn btn-primary btn-lg mt-2 w-100">Place Order</button>
          </form>
        </div>
      </div>
    </div>
    <!-- Order Summary -->
    <div class="col-lg-5">
      <div class="card border-0 shadow-sm">
        <div class="card-body">
          <h5 class="fw-bold mb-3">Order Summary</h5>
          <ul class="list-group list-group-flush mb-3">
            <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
              Wireless Headphones <span class="fw-semibold">$59.99</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
              Smart Watch <span class="fw-semibold">$129.99 x2</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0">
              <span class="text-muted">Shipping</span>
              <span class="text-muted">$10.00</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pt-0 pb-0">
              <span class="fw-bold">Total</span>
              <span class="fw-bold text-primary">$329.97</span>
            </li>
          </ul>
          <div class="alert alert-success d-flex align-items-center" role="alert">
            <i class="fas fa-lock me-2"></i>
            Secure SSL Checkout
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection 