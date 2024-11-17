<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rumah Amenk</title>
    <link rel="stylesheet" type="text/css" href="./CSS/contact.css">
	<link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
        <!-- Link Google Font -->
        <link rel="preconnect" href="https://fonts.gooleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet"/>
        <!-- Link Google Font -->
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.3.3/dist/tailwind.min.css" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
        <script src="https://cdn.tailwindcss.com"></script>
        <!-- Boxicons Link -->
        <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
        <link rel="stylesheet"
        href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
        <!-- Boxicons Link -->
        <link href="./fontawesome-free-6.6.0-web/css/all.min.css " rel="stylesheet"/>
</head>
<body class="bg-gray-50">
        <!-- navbar -->
        <nav>
            <div class="logo">
                <img alt="Logo of Rumah Amenk" src="./Kuning merah berilustrasi ayam geprek logo.jpg" />
                <span>Rumah Amenk</span>
            </div>
            <div class="menu">
                <a href="index.php">Home</a>
                <a href="menu.php">Menu</a>
                <!-- <a href="keranjang.html">Orders</a> -->
                <a href="index.php#serv">Services</a>
                <a href="gallery.php">Gallery</a>
            </div>
            <div class="icons">
                <!-- <a href="keranjang.html"><i class="fa-solid fa-cart-shopping"></i></a> -->
                <button class="jamet">
                    <a href="Login.php"><i class="fa-solid fa-user"></i></a>
                </button>
                <button class="contact-btn">
                    <a href="contact.php"><i class="fa-solid fa-phone"></i></a>Contact
                </button>
            </div>
        </nav>
        <!-- navbar -->
        <div class="container mx-auto py-12">
        <div class="flex flex-col md:flex-row bg-white shadow-lg rounded-lg overflow-hidden">
            <!-- Gambar di Samping Kiri -->
            <div class="w-full md:w-1/2">
                <img src="../Asset/pemandangannya-cantik-5-restoran-di-bali-ini-berlokasi-di-tepi-tebing-2.png" alt="Contact Us"
                    class="h-full w-full object-cover">
            </div>
            <!-- Form di Samping Kanan -->
            <div class="w-full md:w-1/2 p-6 md:p-12">
                <h2 class="text-2xl font-bold text-gray-800 mb-4">Contact Us</h2>
                <p class="text-gray-600 mb-6">
                    We'd love to hear from you! Please fill out the form below and we'll get in touch as soon as possible.
                </p>
                <form action="#" method="POST" class="space-y-4" id="contactForm">
                <!-- Nama -->
                <div>
                    <input type="text" name="name" placeholder="Your Name" required
                        class="w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-[#ffa800] focus:border-transparent">
                </div>
                <!-- Email -->
                <div>
                    <input type="email" name="email" placeholder="Your Email" required
                        class="w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-[#ffa800] focus:border-transparent">
                </div>
                <!-- Nomor Telepon -->
                <div>
                    <input type="tel" name="phone" placeholder="Phone" pattern="[0-9]*" required
                        class="w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-[#ffa800] focus:border-transparent">
                </div>
                <!-- Pesan -->
                <div>
                    <textarea name="message" placeholder="Message" rows="4" required
                        class="w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-[#ffa800]
                        focus:border-transparent">
                    </textarea>
                </div>
                <!-- Tombol Kirim -->
                <button type="submit"
                    class="w-full bg-[#ffa800] text-white py-2 px-4 rounded-md hover:bg-[#ffa800] focus:outline-none focus:ring-2 focus:ring-[#ffa800] focus:ring-offset-2">
                    Send
                </button>
            </form>
            </div>
        </div>
    </div>


    <!-- footer -->
    <footer>
        <section class="footer">
            <div class="footer-content">
                <h2>AMENK SALAD</h2>
                <p>Di mana Setiap Piring Menenun Kisah Penguasaan Kuliner dan Keahlian yang Penuh Semangat.</p>
                <div class="icon-foot">
                    <a href="#"><i class='bx bxl-facebook-circle'></i></a>
                    <a href="#"><i class='bx bxl-twitter'></i></a>
                    <a href="https://www.instagram.com/?hl=en"><i class='bx bxl-instagram-alt'></i></a>
                    <a href="https://www.youtube.com/"><i class='bx bxl-youtube'></i></a>
                </div>
            </div>

            <div class="footer-content">
                <h4>Projects</h4>
                <li><a href="index.php">Home</a></li>
                <li><a href="menu.php">Menu</a></li>
                <li><a href="index.php#serv">Services</a></li>
                <li><a href="gallery.php">Gallery</a></li>
            </div>

            <div class="footer-content">
                <h4>Company</h4>
                <li><a href="error.php">How to work</a></li>
                <li><a href="error.php">Capital</a></li>
                <li><a href="error.php">Security</a></li>
                <li><a href="error.php">Sellings</a></li>
            </div>

            <div class="footer-content">
                <h4>Help</h4>
                <li><a href="error.php">Privacy</a></li>
                <li><a href="error.php">Condition</a></li>
                <li><a href="error.php">Blog</a></li>
                <li><a href="error.php">FAQs</a></li>
            </div>

        </section>
    </footer>
    <!-- footer -->  
</body>
    <script>
        // Reset form setelah submit
        document.getElementById('contactForm').addEventListener('submit', function (e) {
            e.preventDefault(); // Mencegah reload halaman
            alert('Your message has been sent!');
            this.reset(); // Mereset form
        });
    </script>
</html>