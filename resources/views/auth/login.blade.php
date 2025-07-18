@extends('layouts.app')
@section('title', 'Login | E-Shop')
@section('content')
<div class="container py-5">
  <div class="row justify-content-center">
    <div class="col-md-6 col-lg-5">
      <div class="card shadow-sm border-0">
        <div class="card-body p-4">
          <h3 class="fw-bold mb-4 text-center">Login</h3>
          <form>
            <div class="mb-3">
              <label for="email" class="form-label">Email address</label>
              <input type="email" class="form-control" id="email" placeholder="Enter email">
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control" id="password" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-primary w-100">Login</button>
          </form>
          <div class="text-center mt-3">
            <span class="text-muted">Don't have an account?</span>
            <a href="{{ route('register') }}" class="ms-1">Register</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection 