<!DOCTYPE html>
<html>
<head>
    <title>Amstrong Number</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
</head>
<body>
<div class="container d-flex flex-column align-items-center justify-content-center mt-5">
    <h1>Amstrong Number </h1>
    
    <div class="mt-3 text-center">
      <hr style="width: 100%;">
      <br>
      <p>{{ $number }} is {{ $isArmstrong ? '' : 'not ' }}an Armstrong number</p>
      <br>
      <a href="/" class="btn btn-success w-100">Back</a>
    </div>
    <br>
    
</div>

<!-- Bootstrap JS and dependencies (optional) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
