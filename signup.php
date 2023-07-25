<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup - My Web Page</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            height: 100vh; /* Ensure the body covers the full viewport height */
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
            background-image: url('images/background.png');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .navbar {
            background-color: rgba(0, 0, 0, 0.5);
            padding: 10px 20px;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 9999;
        }

        .navbar-brand {
            font-size: 24px;
            font-weight: bold;
            color: #fff;
        }

        .navbar-toggler-icon {
            color: #fff;
        }

        .navbar-toggler {
            border: none;
            background-color: transparent;
        }

        .navbar-toggler:focus {
            outline: none;
        }

        .navbar-nav .nav-item {
            margin-left: 12px;
        }
		
        .navbar-nav .nav-item  a:hover {
            color: #808080;
        }

        .navbar-nav .nav-link {
            color: #fff;
        }

        .signup-form {
            width: 100%;
            max-width: 400px;
            border: 2px solid rgba(255, 255, 255, 0.2);
            padding: 30px;
            border-radius: 15px;
            background-color: rgba(0, 0, 0, 0.5);
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        }

        .signup-form h2 {
            text-align: center;
            margin-bottom: 30px;
            color: #fff;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-label {
            font-weight: bold;
            color: #fff;
        }

        .form-control {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            outline: none;
            transition: border-color 0.3s ease;
            background-color: transparent;
            color: #fff;
        }

        .form-control:focus {
            border-color: #007bff;
        }

        .btn-primary {
            width: 100%;
            background-color: #007bff;
            border: none;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .login-link {
            text-align: center;
            margin-top: 20px;
            color: #fff;
        }

        .login-link a {
            text-decoration: none;
            color: #007bff;
            font-weight: bold;
            transition: color 0.3s ease;
        }

        .login-link a:hover {
            color: #0056b3;
        }

        footer {
            text-align: center;
            padding: 0px 0;
            background-color: rgba(0, 0, 0, 0.5);
            width: 100%;
            position: absolute;
            bottom: 0;
            font-size: 14px;
            color: #fff;
        }
    </style>
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="nav-link" href="#" class="navbar-brand"><img src="logo6.jpg" height="45px"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Signup Form -->
    <div class="signup-form mt-5">
        <h2 class="mb-4">Sign Up</h2>
        <form action="signup_process.php" method="post">
            <div class="form-group">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary">Sign Up</button>
        </form>
        <div class="login-link">
            <p>Already have an account? <a href="login.php">Log In</a></p>
        </div>
    </div>

    <!-- Footer -->
    <footer><br>
        <p>&copy; 2023 Your Website. All rights reserved.</p>
    </footer>

    <!-- Bootstrap JS (Make sure to include this at the end of the body section) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
