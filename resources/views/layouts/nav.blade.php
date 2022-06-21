<!DOCTYPE html>
<html lang="en">
<head>
  <title>Attendance</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  {{-- <link rel="stylesheet" href="{{ asset('css/style.css') }}"> --}}
</head>
<body>
  <div class="container">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="/">Home</a>
          </li>
        <li class="nav-item active">
            <a class="nav-link" href="/manage-employees">Manage Employees</a>
          </li>
        <li class="nav-item">
          <a class="nav-link" href="/listEmployees">List Employees</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/searchEmployees">Search Employees</a>
        </li>
        
       
      </ul>
    </div>
  </nav>
  </div>
@yield('main')

</body>
</html>