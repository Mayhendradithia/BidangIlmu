<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from social.webestica.com/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Jul 2022 07:43:04 GMT -->
<head>
	<title>newAdmin</title>

	<!-- Meta Tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="Webestica.com">
	<meta name="description" content="Bootstrap 5 based Social Media Network and Community Theme">

	<!-- Favicon -->
	<link rel="shortcut icon" href="assets/images/favicon.ico">

	<!-- Google Font -->
	<link rel="preconnect" href="https://fonts.googleapis.com/">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&amp;display=swap">

	<!-- Plugins CSS -->
	<link rel="stylesheet" type="text/css" href="assets/vendor/font-awesome/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap-icons/bootstrap-icons.css">

	<!-- Theme CSS -->
	<link id="style-switch" rel="stylesheet" type="text/css" href="assets/css/style.css">
	 
</head>

<body>

<!-- **************** MAIN CONTENT START **************** -->
<main>
  
  <!-- Container START -->
  <div class="container">
    <div class="row justify-content-center align-items-center vh-100 py-5">
      <!-- Main content START -->
      <div class="col-sm-10 col-md-8 col-lg-7 col-xl-6 col-xxl-5">
        <!-- Sign in START -->
        <div class="card card-body text-center p-4 p-sm-5">
          <!-- Title -->
          <h1 class="mb-2">Sign in</h1>
          
          <!-- Form START -->
          <form class="mt-sm-4" action="{{ route('admin') }}" method="POST" novalidate>
            @csrf
            <!-- Email -->
            <div class="mb-3 input-group-lg">
                <input type="email" name="email" id="email" class="form-control" placeholder="Enter email" required>
            </div>
            <!-- Password -->
            <div class="mb-3 position-relative">
                <div class="input-group input-group-lg">
                    <input class="form-control" type="password" name="password" id="password" placeholder="Enter password" required>
                </div>
            </div>
            <!-- Remember me -->
            <div class="mb-3 d-sm-flex justify-content-between">
               
            </div>
            <!-- Submit button -->
            <div class="d-grid">
                <button type="submit" class="btn btn-lg btn-primary">Login</button>
            </div>
        </form>
        
        
          <!-- Form END -->
        </div>
        <!-- Sign in START -->
      </div>
    </div> <!-- Row END -->
  </div>
  <!-- Container END -->

</main>
<!-- **************** MAIN CONTENT END **************** -->
 

<!-- =======================
JS libraries, plugins and custom scripts -->

<!-- Bootstrap JS -->
<script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

<!-- Vendors -->
<script src="assets/vendor/pswmeter/pswmeter.min.js"></script>

<!-- Template Functions -->
<script src="assets/js/functions.js"></script>
  
</body>

<!-- Mirrored from social.webestica.com/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Jul 2022 07:43:04 GMT -->
</html>
 