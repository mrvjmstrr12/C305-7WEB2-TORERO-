@extends('layout.main')

@section('content')
<div class="auth-container">
    <div class="auth-card glass">

        <h2 class="auth-title">Register</h2>

        @if ($errors->any())
            <div class="auth-error">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif

        <form method="POST" action="{{ route('register') }}" class="auth-form">
            @csrf
            <input type="text" name="name" placeholder="Name" class="auth-input" required>
            <input type="email" name="email" placeholder="Email" class="auth-input" required>
            <input type="password" name="password" placeholder="Password" class="auth-input" required>
            <input type="password" name="password_confirmation" placeholder="Confirm Password" class="auth-input" required>

            <button type="submit" class="auth-btn">Register</button>
        </form>

        <p class="auth-link">
            Already have an account? <a href="{{ route('login.form') }}">Login</a>
        </p>
    </div>
</div>


@endsection
