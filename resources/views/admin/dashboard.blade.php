@extends('layouts.admin')

@section('content')
@if (session('message'))
  <h3 class="alert alert-success" style="font-size: 16px;">
    {{ session('message') }}
  </h3>
@endif


<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title text-center">Registered User</h4>
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="card custom-orange-btn">
            <div class="card-header text-center">
                <h3 class="card-title">Admin</h3>
            </div>
            <div class="card-body text-center">
                <a href="/admin-register">
                <p>Total Admin Users: {{ $totalAdmins }}</p>
                </a>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card custom-orange-btn">
            <div class="card-header text-center">
                <h3 class="card-title">Users</h3>
            </div>
            <div class="card-body text-center">
                <a href="/role-register">
                <p>Total Registered Users: {{ $totalUsers }}</p>
                </a>
            </div>
        </div>
    </div>
</div>
<style>
    .custom-orange-btn {
        color: #fff;
        background-color: #194B46;
        border-color: #194B46;
    }
    .custom-orange-btn:hover {
        background-color: #d7cbd7;
        border-color: #d7cbd7;
    }
</style>
@endsection

@section('scripts')
@endsection
