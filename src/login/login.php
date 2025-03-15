<!DOCTYPE html>
<html lang="id" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AsianFood - Jelajahi Makanan Asia</title>
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <style type="text/tailwindcss">
        @theme {
          --color-primary: #F2B705;
          --color-secondary: #333333;
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="font-sans flex flex-col h-full overflow-x-hidden">
  <!-- Header dengan Navigasi -->
  <header class="container mx-auto px-4 py-4 flex justify-between items-center fixed md:relative z-20 bg-transparant backdrop-blur">
    <!-- Logo -->
    <div class="flex items-center">
        <a href="#" class="text-2xl font-bold">
            <span class="text-primary">Asian</span><span class="text-secondary">food</span>
        </a>
    </div>

    <!-- Menu Navigasi Desktop -->
    <nav class="hidden md:flex space-x-8">
        <a href="#" class="font-medium hover:text-primary transition">Home</a>
        <a href="#" class="font-medium hover:text-primary transition">About</a>
        <a href="#" class="font-medium hover:text-primary transition">Blog</a>
        <a href="#" class="font-medium hover:text-primary transition">Service</a>
        <a href="#" class="font-medium hover:text-primary transition">Contact us</a>
    </nav>

    <!-- Tombol Menu Mobile -->
    <button class="md:hidden text-secondary" id="menuToggle">
        <i class="fas fa-bars text-xl"></i>
    </button>

    <!-- Ikon-ikon Aksi -->
    <div class="hidden md:flex items-center space-x-4">
        <button class="text-secondary hover:text-primary transition">
            <i class="fas fa-search text-xl"></i>
        </button>
        <button class="text-secondary hover:text-primary transition">
            <i class="fas fa-shopping-cart text-xl"></i>
        </button>
        <button class="text-secondary hover:text-primary transition">
            <i class="fas fa-bell text-xl"></i>
        </button>
        <a href="#" class="border border-primary text-secondary px-4 py-2 rounded-md hover:bg-primary hover:text-white transition">
            Login
        </a>
    </div>
</header>

 <!-- Menu Mobile (tersembunyi secara default) -->
 <div class="hidden md:hidden bg-white w-full py-4 px-6 shadow-md absolute z-10 left-0 right-0" id="mobileMenu">
    <nav class="flex flex-col space-y-4 pt-12">
        <a href="#" class="font-medium hover:text-primary transition">Home</a>
        <a href="#" class="font-medium hover:text-primary transition">About</a>
        <a href="#" class="font-medium hover:text-primary transition">Blog</a>
        <a href="#" class="font-medium hover:text-primary transition">Service</a>
        <a href="#" class="font-medium hover:text-primary transition">Contact us</a>
        <div class="flex space-x-4 pt-2">
            <button class="text-secondary hover:text-primary transition">
                <i class="fas fa-search text-xl"></i>
            </button>
            <button class="text-secondary hover:text-primary transition">
                <i class="fas fa-shopping-cart text-xl"></i>
            </button>
            <button class="text-secondary hover:text-primary transition">
                <i class="fas fa-bell text-xl"></i>
            </button>
        </div>
        <a href="#" class="border border-primary text-secondary px-4 py-2 rounded-md text-center hover:bg-primary hover:text-white transition">
            Login
        </a>
    </nav>
</div>

<main class="flex-grow flex items-center container mx-auto px-4 pb-4 pt-24">
    <section class="w-full flex flex-col md:flex-row items-center">
         <!-- Gambar Hero dengan Elemen Visual -->
         <div class="w-full sm:max-w-xl lg:max-w-3xl mx-auto p-4">
            <!-- Main Image (Soup/Curry) -->
            <div class="relative w-[75%] max-w-md mx-auto">
                <img src="images/tomyum.png" alt="Hidangan Utama Asian Food" class="w-full h-auto">
                
                <!-- Additional Visual Elements (Small Images) -->
                <div class="absolute top-4 md:top-10 right-2 md:-right-10 lg:-right-10">
                    <img src="images/gk-2.png" alt="Hidangan Kecil 1" class="w-20 h-20 md:w-28 md:h-28 lg:w-48 lg:h-48 rounded-full">
                </div>
                
                <div class="absolute top-1/3 -left-16 md:-left-20 lg:-left-32">
                    <img src="images/gk-1.png" alt="Hidangan Kecil 2" class="w-20 h-20 md:w-28 md:h-28 lg:w-28 rounded-full">
                </div>
        
                <div class="absolute -bottom-10 md:-bottom-4 -left-8 md:-left-12 lg:-left-16">
                    <img src="images/gk-3.png" alt="Hidangan Kecil 3" class="w-20 h-20 md:w-28 md:h-28 lg:w-28 rounded-full">
                </div>
        
                <div class="absolute -top-12 md:-top-12 lg:-top-18 left-12 md:left-16 lg:left-20">
                    <img src="images/gk-4.png" alt="Hidangan Kecil 3" class="w-20 h-20 md:w-28 md:h-28 lg:w-28 rounded-full">
                </div>
            </div>
        </div>

        <div class="w-full md:w-1/2 mt-8 md:mt-0 md:pl-8">
            <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold mb-4 md:mb-6 leading-tight">
                Happy With <span class="text-primary">Delicious Food</span> And Get New Experiences With Asian Food
            </h1>
            <p class="text-gray-700 mb-6 md:mb-8 max-w-lg">
                Exploring new food with different transition form all Asian country...
            </p>
            <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4">
                <a href="#" class="bg-primary text-white px-6 py-3 rounded-md flex items-center justify-center transition hover:bg-primary/90">
                    Order Food <i class="fas fa-shopping-cart ml-2"></i>
                </a>
                <a href="#" class="border border-primary text-secondary px-6 py-3 rounded-md flex items-center justify-center hover:bg-gray-50 transition">
                    Learn More
                </a>
            </div>
        </div>
    </section>
</main>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const menuToggle = document.getElementById('menuToggle');
        const mobileMenu = document.getElementById('mobileMenu');
        
        menuToggle.addEventListener('click', function() {
            mobileMenu.classList.toggle('hidden');
        });

        // Menutup menu saat mengklik di luar menu
        document.addEventListener('click', function(event) {
            if (!menuToggle.contains(event.target) && !mobileMenu.contains(event.target)) {
                mobileMenu.classList.add('hidden');
            }
        });
    });
</script>
</body>
</html>