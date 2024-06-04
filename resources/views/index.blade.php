<!DOCTYPE html>
<html>
<head>
    <title>Armstrong Number Checker</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
</head>
<body>
<div class="container d-flex flex-column align-items-center mt-5">
    <h1>Armstrong Number</h1>
    
    <form action="/check" method="POST" class="w-100" style="max-width: 400px;">
        @csrf
        <div class="mb-3">
            <hr style="width: 100%;">
            <br>
            <label for="number" class="form-label">Enter Any Number</label>
            <input type="text" class="form-control w-100" id="number" name="number" required placeholder="Enter Number">
        </div>
        <br>
        <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-success w-100">Check Armstrong Number</button>
        </div>
    </form>
</div>

<!-- Bootstrap JS and dependencies (optional) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
