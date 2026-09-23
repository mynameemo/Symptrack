@extends('layouts.frontend')
@section('content')

<style>
    .auth-wrap {
        background: var(--bg);
        min-height: 80vh;
        display: flex;
        align-items: center;
        padding: 3rem 0 5rem;
    }
    .auth-card-new {
        background: #fff;
        border-radius: 22px;
        border: 1px solid var(--border);
        box-shadow: 0 12px 48px rgba(13,115,119,.10);
        overflow: hidden;
    }
    .auth-card-top {
        background: linear-gradient(135deg, var(--teal-dark), var(--teal));
        padding: 2.2rem 2rem 1.8rem;
        text-align: center;
    }
    .auth-card-top .auth-logo-circle {
        width: 64px; height: 64px; border-radius: 18px;
        background: rgba(255,255,255,.18);
        border: 2px solid rgba(255,255,255,.35);
        display: flex; align-items: center; justify-content: center;
        margin: 0 auto 1rem;
        font-size: 1.8rem; color: #fff;
    }
    .auth-card-top h2 { color: #fff; font-family: 'DM Serif Display', serif; font-size: 1.7rem; margin: 0 0 .3rem; }
    .auth-card-top p  { color: rgba(255,255,255,.8); font-size: .88rem; margin: 0; }
    .auth-card-form { padding: 2rem 2.2rem 2.5rem; background: var(--mint); }

    .auth-label {
        display: block; font-weight: 600; color: var(--ink);
        margin-bottom: .4rem; font-size: .88rem;
    }
    .auth-input-wrap {
        display: flex; align-items: center;
        border: 1.5px solid var(--border); border-radius: 12px;
        background: #fff; overflow: hidden;
        transition: border-color .25s, box-shadow .25s;
        margin-bottom: 1.1rem;
    }
    .auth-input-wrap:focus-within {
        border-color: var(--teal);
        box-shadow: 0 0 0 3px rgba(13,115,119,.10);
    }
    .auth-input-icon {
        padding: 0 1rem; color: var(--teal); font-size: 1rem;
        background: var(--mint); height: 100%;
        display: flex; align-items: center; border-right: 1.5px solid var(--border);
        min-height: 48px;
    }
    .auth-input-wrap input {
        flex: 1; border: none; outline: none;
        padding: .8rem 1rem; font-size: .93rem;
        color: var(--ink); background: #fff;
    }
    .auth-check { display: flex; align-items: center; gap: .5rem; margin-bottom: 1.4rem; }
    .auth-check input[type=checkbox] { accent-color: var(--teal); width: 16px; height: 16px; }
    .auth-check label { font-size: .85rem; color: var(--muted); cursor: pointer; }

    .auth-submit {
        width: 100%; padding: .9rem; border: none;
        background: linear-gradient(135deg, var(--teal-dark), var(--teal));
        color: #fff; border-radius: 12px; font-weight: 700; font-size: .97rem;
        cursor: pointer; letter-spacing: .02em;
        transition: opacity .2s, transform .2s;
        box-shadow: 0 6px 20px rgba(13,115,119,.28);
    }
    .auth-submit:hover { opacity: .9; transform: translateY(-2px); }

    .auth-divider { display: flex; align-items: center; gap: .8rem; margin: 1.4rem 0; }
    .auth-divider hr { flex: 1; border-color: var(--border); }
    .auth-divider span { font-size: .78rem; color: var(--muted); white-space: nowrap; }

    .auth-footer { text-align: center; margin-top: 1.2rem; font-size: .87rem; color: var(--muted); }
    .auth-footer a { color: var(--teal); font-weight: 600; text-decoration: none; }
    .auth-footer a:hover { color: var(--teal-dark); }
    .auth-forgot { float: right; font-size: .82rem; color: var(--teal); font-weight: 600; text-decoration: none; }
    .auth-forgot:hover { color: var(--teal-dark); }
</style>

<div class="auth-wrap">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-5">
                <div class="auth-card-new">

                    <div class="auth-card-top">
                        <div class="auth-logo-circle">
                            <i class="bi bi-heart-pulse-fill"></i>
                        </div>
                        <h2>Welcome Back</h2>
                        <p>Sign in to continue to SympTrack</p>
                    </div>

                    <div class="auth-card-form">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <label class="auth-label">Email Address</label>
                            <div class="auth-input-wrap">
                                <span class="auth-input-icon"><i class="bi bi-envelope"></i></span>
                                <input type="email" name="email" value="{{ old('email') }}" placeholder="you@example.com" required autofocus>
                            </div>
                            @error('email')
                                <div style="color:#c0392b;font-size:.82rem;margin-top:-.7rem;margin-bottom:.8rem;">{{ $message }}</div>
                            @enderror

                            <div class="d-flex justify-content-between align-items-center mb-1">
                                <label class="auth-label mb-0">Password</label>
                                <a href="{{ route('password.request') }}" class="auth-forgot">Forgot password?</a>
                            </div>
                            <div class="auth-input-wrap">
                                <span class="auth-input-icon"><i class="bi bi-lock"></i></span>
                                <input type="password" name="password" id="loginPwd" placeholder="••••••••" required>
                                <button type="button" onclick="togglePwd('loginPwd','loginEye')" style="background:none;border:none;padding:0 .9rem;color:var(--muted);cursor:pointer;">
                                    <i class="bi bi-eye" id="loginEye"></i>
                                </button>
                            </div>
                            @error('password')
                                <div style="color:#c0392b;font-size:.82rem;margin-top:-.7rem;margin-bottom:.8rem;">{{ $message }}</div>
                            @enderror

                            <div class="auth-check">
                                <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label for="remember">Remember me on this device</label>
                            </div>

                            <button type="submit" class="auth-submit">
                                <i class="bi bi-box-arrow-in-right me-2"></i>Sign In
                            </button>
                        </form>

                        <div class="auth-divider"><hr><span>or</span><hr></div>

                        <div class="auth-footer">
                            Don't have an account? <a href="{{ route('register') }}">Create one free →</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<script>
function togglePwd(inputId, iconId) {
    const inp = document.getElementById(inputId);
    const ico = document.getElementById(iconId);
    inp.type = inp.type === 'password' ? 'text' : 'password';
    ico.className = inp.type === 'password' ? 'bi bi-eye' : 'bi bi-eye-slash';
}
</script>

@endsection
