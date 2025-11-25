<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Property Detail | HomeFinder</title>
    <link rel="stylesheet" href="{{ asset('css/PropertyDetail.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
</head>

<body>
    <!-- Navbar -->
    <header class="navbar">
        <div class="logo">Home<span>Finder</span></div>
        <nav>
            <ul>
                <li><a href="#">Properties</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
        <div class="auth-buttons">
            <a href="#" class="signin">Sign In</a>
            <a href="#" class="get-started">Get Started</a>
        </div>
    </header>

    <!-- Property Detail -->
    <main class="container">
        <div class="property-detail">
            <div class="left-section">
                <img src="https://images.unsplash.com/photo-1570129477492-45c003edd2be?auto=format&fit=crop&w=1000&q=80" alt="Property Image">
            </div>

            <div class="right-section">
                <h2>Rp. 99.900.000</h2>
                <p class="subtitle">4 bed • 3 bath</p>
                <p class="property-owner">Rumah Ervan<br><span>Malang, Indonesia</span></p>

                <div class="image-options">
                    <button>Tampilan samping</button>
                    <button>Tampilan belakang</button>
                    <button>Tampilan samping</button>
                    <button>Tampilan serong</button>
                </div>

                <div class="action-buttons">
                    <button class="purchase">Purchase this Property</button>
                    <button class="request">Request Info</button>
                </div>
            </div>
        </div>

        <!-- Summary -->
        <section class="summary">
            <h3>Summary</h3>
            <p>
                Rumah modern 1 lantai dengan desain minimalis di lingkungan yang tenang dan strategis.
                Memiliki 3 kamar tidur, 2 kamar mandi, dapur bersih, ruang keluarga yang luas, serta carport
                untuk 2 mobil. Lokasi dekat sekolah, pusat perbelanjaan, dan akses tol. Cocok untuk keluarga
                yang menginginkan kenyamanan dan kemudahan mobilitas.
            </p>
        </section>

        <!-- Property Details -->
        <section class="property-info">
            <div class="info-card">
                <p class="label">Luas</p>
                <h4>12m x 15m</h4>
            </div>

            <div class="info-card">
                <p class="label">Luas</p>
                <h4>----</h4>
            </div>

            <div class="info-card">
                <p class="label">Review</p>
                <h4>4.7 ⭐</h4>
            </div>

            <div class="info-card">
                <p class="label">Luas</p>
                <h4>----</h4>
            </div>
        </section>
    </main>
</body>

</html>