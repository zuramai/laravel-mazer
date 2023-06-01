<x-guest-layout>
    <div id="auth-left">
        <div class="auth-logo">
            <a href="index.html"><img src="{{ asset('/images/logo/logo.png') }}" alt="Logo"></a>
        </div>
        <h1 class="auth-title">Reset Password</h1>
        <p class="auth-subtitle mb-5">Input your password to</p>
        @if ($errors->any())
        <div class="alert alert-danger">
            {{ $errors->first() }}
        </div>
        @endif
        <form method="POST" action="{{ route('password.update') }}">
            @csrf
    
            <input type="hidden" name="token" value="{{ $request->route('token') }}">
            <div class="form-group position-relative has-icon-left mb-4">
                <input type="email" class="form-control form-control-xl" placeholder="Email" value="{{ old('email', $request->email) }}" name="email">
                <div class="form-control-icon">
                    <i class="bi bi-envelope"></i>
                </div>
            </div>
            <div class="form-group position-relative has-icon-left mb-4">
                <input type="password" class="form-control form-control-xl" placeholder="Password" value="{{ old('password') }}" name="password">
                <div class="form-control-icon">
                    <i class="bi bi-shield-lock"></i>
                </div>
            </div>
            <div class="form-group position-relative has-icon-left mb-4">
                <input type="password" class="form-control form-control-xl" placeholder="Confirm Password" value="{{ old('password_confirmation') }}" name="password_confirmation">
                <div class="form-control-icon">
                    <i class="bi bi-shield-lock"></i>
                </div>
            </div>
            <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Reset Password</button>
        </form>
    </div>
</x-guest-layout>
