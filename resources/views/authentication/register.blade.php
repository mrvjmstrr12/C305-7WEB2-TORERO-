@include('components.header')
    @if (session->any())
        <div style="color:red">
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif
    <form action="{{ route('register') }}" method="POST">
        @csrf
        <p>Name</p>
        <input type="text" name="name" required>
        <p>Email</p>
        <input type="email" name="email" required>
        <p>Password</p>
        <input type="password" name="password" required>
        <p>Confirm password</p>
        <input type="passowrd" name="password_confirmation" required>
        <input type="submit">
    </form>
@include('components.footer')