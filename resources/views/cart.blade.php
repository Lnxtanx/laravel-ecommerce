@extends('layouts.app')
@section('title', 'Your Cart | E-Shop')
@section('content')
<div class="container py-5">
  <h2 class="fw-bold mb-4">Shopping Cart</h2>
  <p class="text-muted mb-3">Review your cart items before proceeding to checkout.</p>
  <div class="row g-4">
    <!-- Cart Items -->
    <div class="col-lg-8">
      <div class="card border-0 shadow-sm mb-4">
        <div class="card-body p-0">
          <table class="table align-middle mb-0">
            <thead class="table-light">
              <tr>
                <th scope="col">Product</th>
                <th scope="col">Price</th>
                <th scope="col">Quantity</th>
                <th scope="col">Total</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
              @foreach ([
                [
                  'img' => 'https://images.unsplash.com/photo-1519125323398-675f0ddb6308?auto=format&fit=crop&w=80&q=80',
                  'name' => 'Wireless Headphones',
                  'price' => 59.99,
                  'qty' => 1
                ],
                [
                  'img' => 'https://images.unsplash.com/photo-1512436991641-6745cdb1723f?auto=format&fit=crop&w=80&q=80',
                  'name' => 'Smart Watch',
                  'price' => 129.99,
                  'qty' => 2
                ],
              ] as $item)
              <tr>
                <td class="d-flex align-items-center gap-3">
                  <img src="{{ $item['img'] }}" alt="{{ $item['name'] }}" class="rounded-3" width="60" height="60" style="object-fit:cover;">
                  <span class="fw-semibold">{{ $item['name'] }}</span>
                </td>
                <td class="text-primary fw-bold">${{ number_format($item['price'], 2) }}</td>
                <td style="max-width: 100px;">
                  <input type="number" class="form-control" value="{{ $item['qty'] }}" min="1" style="width: 70px;">
                </td>
                <td class="fw-bold">${{ number_format($item['price'] * $item['qty'], 2) }}</td>
                <td>
                  <button class="btn btn-outline-danger btn-sm"><i class="fas fa-trash"></i></button>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
      <a href="#" class="btn btn-link"><i class="fas fa-arrow-left me-1"></i>Continue Shopping</a>
    </div>
    <!-- You may also like -->
    <div class="row mt-5">
      <div class="col-lg-8">
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
    <!-- Cart Summary -->
    <div class="col-lg-4">
      <div class="card border-0 shadow-sm">
        <div class="card-body">
          <h5 class="fw-bold mb-3">Order Summary</h5>
          <ul class="list-group list-group-flush mb-3">
            <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
              Subtotal
              <span class="fw-semibold">$319.97</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0">
              Shipping
              <span class="text-muted">$10.00</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pt-0 pb-0">
              <span class="fw-bold">Total</span>
              <span class="fw-bold text-primary">$329.97</span>
            </li>
          </ul>
          <a href="{{ route('checkout') }}" class="btn btn-primary w-100 btn-lg mt-2">Proceed to Checkout</a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection 