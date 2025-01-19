<!DOCTYPE html>
<html lang="en">
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Theme CSS -->
    <link id="style-switch" rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>

<body>

<main>
  <div class="container">
    <div class="row justify-content-center align-items-center vh-100 py-5">
      <div class="col-sm-10 col-md-8 col-lg-7 col-xl-6 col-xxl-5">
        <div class="card card-body text-center p-4 p-sm-5">
          <h1 class="mb-2">Sign in</h1>

          <!-- Form login -->
          <form class="mt-sm-4" action="{{ route('loginAdmin') }}" method="POST" novalidate>
            @csrf
            <!-- Display errors as an alert -->
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        <li>Email atau Password salah</li>
                    </ul>
                </div>
            @endif
        
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
            <!-- Submit button -->
            <div class="d-grid">
                <button type="submit" class="btn btn-lg btn-primary">Login</button>
            </div>
        </form>
        

          <!-- Form for Seeder -->
          <form id="seederForm" action="{{ route('runSeed') }}" method="POST" class="mt-sm-3">
            @csrf
            <div class="d-grid">
                <button type="submit" class="btn btn-border-hover" id="runSeederBtn">
                    Jalankan Seeder
                </button>
            </div>
            <style>
              .btn-border-hover {
                  background-color: transparent; /* No background */
                  border: 2px solid #ccc; /* Default border color (gray) */
                  color: #ccc; /* Default text color (gray) */
              }
          
              .btn-border-hover:hover {
                  background-color: transparent; /* Keep transparent background on hover */
                  border-color: #28a745; /* Green border color on hover */
                  color: #28a745; /* Green text color on hover */
              }
          </style>

          </form>
        </div>
      </div>
    </div> <!-- Row END -->
  </div>
</main>

<!-- SweetAlert 2 -->


<script>
  // Handle SweetAlert for Seeder button click
  document.getElementById('runSeederBtn').addEventListener('click', function(e) {
    e.preventDefault();

    fetch("{{ route('runSeed') }}", {
      method: "POST",
      headers: {
        'Content-Type': 'application/json',
        'X-CSRF-TOKEN': "{{ csrf_token() }}"
      }
    })
    .then(response => response.json())
    .then(data => {
      Swal.fire({
        title: 'Success!',
        text: data.message,
        icon: 'success',
        confirmButtonText: 'OK'
      });
    })
    .catch(error => {
      Swal.fire({
        title: 'Error!',
        text: 'Error Teknis',
        icon: 'error',
        confirmButtonText: 'OK'
      });
    });
  });

  // Show SweetAlert when login fails
</script>


<script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/pswmeter/pswmeter.min.js"></script>
<script src="assets/js/functions.js"></script>

</body>
</html>
