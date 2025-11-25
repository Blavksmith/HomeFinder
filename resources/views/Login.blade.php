<?php
use App\Http\Controllers\AuthController;

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | HomeFinder</title>
    <link rel="stylesheet" href="{{ asset('css/Auth.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
</head>

<body>
    <header class="navbar">
        <div class="logo">Home<span>Finder</span></div>
    </header>

    <main class="auth-container">
        <div class="auth-box">
            <h2>Welcome Back 👋</h2>
            <p>Please login to your account</p>

            <form action="/login" method="POST">
                @csrf
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Enter your email" required>
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Enter your password" required>
                </div>

                <button type="submit" class="btn-primary">Login</button>

                <p class="switch">Don't have an account?
                    <a href="{{ url('/Register') }}">Register here</a>
                </p>
            </form>
        </div>
    </main>
</body>

</html>