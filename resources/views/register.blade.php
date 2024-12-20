@extends('layout')
@section('content')

<main id="content" role="main">
  <!-- Form -->
  <div class="container content-space-3 content-space-t-lg-4 content-space-b-lg-3">
    <div class="flex-grow-1 mx-auto" style="max-width: 28rem;">
      <!-- Heading -->
      <div class="text-center mb-5 mb-md-7">
        <h1 class="h2">Register</h1>
        <p>Fill out the form to get started.</p>
      </div>
      <!-- End Heading -->

      <!-- Form -->
      <form  action="{{ route('register') }}" method="POST" novalidate>
        @csrf <!-- Tambahkan CSRF Token untuk keamanan -->
      
        <!-- Form -->
        <div class="mb-3">
          <label class="form-label" for="name">Username</label>
          <input type="text" class="form-control form-control-lg" name="name" id="name" placeholder="Your name" aria-label="name" required>
          <span class="invalid-feedback">Please enter a valid Username.</span>
        </div>
        <!-- End Form -->
      
        <!-- Form -->
        <div class="mb-3">
          <label class="form-label" for="signupSimpleSignupEmail">Your email</label>
          <input type="email" class="form-control form-control-lg" name="email" id="signupSimpleSignupEmail" placeholder="email@site.com" aria-label="email@site.com" required>
          <span class="invalid-feedback">Please enter a valid email address.</span>
        </div>
        <!-- End Form -->
      
        <!-- Form -->
        <div class="mb-3">
          <label class="form-label" for="signupSimpleSignupPassword">Password</label>
          <div class="input-group input-group-merge" data-hs-validation-validate-class>
            <input type="password" class="js-toggle-password form-control form-control-lg" name="password" id="signupSimpleSignupPassword" placeholder="8+ characters required" aria-label="8+ characters required" required>
            <a class="js-toggle-password-target-1 input-group-append input-group-text" href="javascript:;"></a>
          </div>
          <span class="invalid-feedback">Your password is invalid. Please try again.</span>
        </div>
        <!-- End Form -->
      
        <!-- Form -->
        <div class="mb-3">
          <label class="form-label" for="signupSimpleSignupConfirmPassword">Confirm password</label>
          <div class="input-group input-group-merge" data-hs-validation-validate-class>
            <input type="password" class="js-toggle-password form-control form-control-lg" name="password_confirmation" id="signupSimpleSignupConfirmPassword" placeholder="8+ characters required" aria-label="8+ characters required" required>
            <a class="js-toggle-password-target-2 input-group-append input-group-text" href="javascript:;"></a>
          </div>
          <span class="invalid-feedback">Password does not match the confirm password.</span>
        </div>
        <!-- End Form -->
      
        <!-- Check -->
        <div class="form-check mb-3">
          <input type="checkbox" class="form-check-input" id="signupHeroFormPrivacyCheck" name="signupFormPrivacyCheck" required>
          <label class="form-check-label small" for="signupHeroFormPrivacyCheck"> By submitting this form I have read and acknowledged the <a href="page-privacy.html">Privacy Policy</a></label>
          <span class="invalid-feedback">Please accept our Privacy Policy.</span>
        </div>
        <!-- End Check -->
      
        <div class="d-grid mb-3">
          <button type="submit" class="btn btn-primary btn-lg">Sign up</button>
        </div>
      
        <div class="text-center">
          <p>Already have an account? <a class="link" href="{{ route('showLoginForm') }}">Log in here</a></p>
        </div>
      </form>
      
      <!-- End Form -->
    </div>
  </div>
  <!-- End Form -->
</main>