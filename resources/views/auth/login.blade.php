@extends('layouts.app')

@section('content')
  <section class="umpsa-login">
    <div class="umpsa-shell umpsa-login__grid">
      <div class="umpsa-login__intro">
        <p class="umpsa-eyebrow" style="color: #fff4b8;">UMPSA Official System</p>
        <h1>Secure access for university services</h1>
        <p>
          A mockup login screen for UMPSA systems using the corporate blue and turquoise green interface direction.
        </p>

        <div class="umpsa-login__meta" aria-label="System highlights">
          <div class="umpsa-login__metric">
            <strong>SSO</strong>
            <span>Central identity ready</span>
          </div>
          <div class="umpsa-login__metric">
            <strong>2FA</strong>
            <span>Security layer prepared</span>
          </div>
          <div class="umpsa-login__metric">
            <strong>24/7</strong>
            <span>Service access pattern</span>
          </div>
        </div>
      </div>

      <aside class="umpsa-login-card" aria-label="Login form mockup">
        <div class="umpsa-login-card__head">
          <span class="umpsa-badge umpsa-badge--turquoise">Official Login</span>
          <h2>Sign in</h2>
          <p>Use your UMPSA ID to continue to the system dashboard.</p>
        </div>

        <form class="umpsa-form" method="post" action="#">
          @csrf
          <label class="umpsa-field">
            <span class="umpsa-label">UMPSA ID or email</span>
            <input class="umpsa-input" type="email" name="email" placeholder="name@umpsa.edu.my" autocomplete="username">
          </label>

          <label class="umpsa-field">
            <span class="umpsa-label">Password</span>
            <input class="umpsa-input" type="password" name="password" placeholder="Enter password" autocomplete="current-password">
          </label>

          <div class="umpsa-login__row">
            <label class="umpsa-check">
              <input type="checkbox" name="remember">
              <span>Remember me</span>
            </label>
            <a href="#">Forgot password?</a>
          </div>

          <button class="umpsa-btn umpsa-login__submit" type="submit">Sign In</button>
        </form>

        <div class="umpsa-login__divider">or</div>

        <button class="umpsa-btn umpsa-btn--secondary umpsa-login__submit" type="button">Continue with UMPSA SSO</button>

        <p class="umpsa-login__footer">
          Protected access for staff, students, and authorized system administrators.
        </p>
      </aside>
    </div>
  </section>
@endsection

