@extends('layout.main')

@section('content')


<div class="auth-container">
    <div class="auth-card glass">

        <h2 class="auth-title">Login</h2>

        @if ($errors->any())
        <div class="auth-error">
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
        @endif

        <form method="POST" action="{{ route('login') }}" class="auth-form">
            @csrf
            <input type="email" name="email" placeholder="Email" class="auth-input" required>
            <input type="password" name="password" placeholder="Password" class="auth-input" required>

            <button type="submit" class="auth-btn">Login</button>
        </form>

        <p class="auth-link">
            No account? <a href="{{ route('register.form') }}">Register</a>
        </p>
    </div>

</div>


@endsection

