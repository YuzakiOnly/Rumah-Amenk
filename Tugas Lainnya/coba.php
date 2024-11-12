<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @keyframes scroll {
            0% {
                transform: translateX(0);
            }
            100% {
                transform: translateX(-50%);
            }
        }
        
        .animate-scroll {
            animation: scroll 20s linear infinite;
        }
        
        /* Pause animation on hover */
        .animate-scroll:hover {
            animation-play-state: paused;
        }
    </style>
</head>
<body>
    <!-- Container utama -->
    <div class="relative w-full overflow-hidden bg-gray-100 p-4">
        <!-- Wrapper untuk scrolling -->
        <div class="flex animate-scroll">
            <!-- Duplikat gambar untuk efek infinite scroll -->
            <div class="flex space-x-4 whitespace-nowrap">
                <!-- Gambar-gambar pertama -->
                <div class="w-72 h-48 flex-shrink-0">
                    <img src="/api/placeholder/400/320" alt="Image 1" class="w-full h-full object-cover rounded-lg shadow-md">
                </div>
                <div class="w-72 h-48 flex-shrink-0">
                    <img src="/api/placeholder/400/320" alt="Image 2" class="w-full h-full object-cover rounded-lg shadow-md">
                </div>
                <div class="w-72 h-48 flex-shrink-0">
                    <img src="/api/placeholder/400/320" alt="Image 3" class="w-full h-full object-cover rounded-lg shadow-md">
                </div>
                <div class="w-72 h-48 flex-shrink-0">
                    <img src="/api/placeholder/400/320" alt="Image 4" class="w-full h-full object-cover rounded-lg shadow-md">
                </div>
            </div>
            <!-- Duplikat gambar untuk scroll mulus -->
            <div class="flex space-x-4 whitespace-nowrap">
                <div class="w-72 h-48 flex-shrink-0">
                    <img src="/api/placeholder/400/320" alt="Image 1" class="w-full h-full object-cover rounded-lg shadow-md">
                </div>
                <div class="w-72 h-48 flex-shrink-0">
                    <img src="/api/placeholder/400/320" alt="Image 2" class="w-full h-full object-cover rounded-lg shadow-md">
                </div>
                <div class="w-72 h-48 flex-shrink-0">
                    <img src="/api/placeholder/400/320" alt="Image 3" class="w-full h-full object-cover rounded-lg shadow-md">
                </div>
                <div class="w-72 h-48 flex-shrink-0">
                    <img src="/api/placeholder/400/320" alt="Image 4" class="w-full h-full object-cover rounded-lg shadow-md">
                </div>
            </div>
        </div>
    </div>

    <!-- Versi dengan kontrol manual -->
    <div class="relative w-full overflow-hidden bg-gray-100 p-4 mt-8">
        <div class="flex space-x-4 transition-transform duration-500" id="slider">
            <div class="w-72 h-48 flex-shrink-0">
                <img src="/api/placeholder/400/320" alt="Image 1" class="w-full h-full object-cover rounded-lg shadow-md">
            </div>
            <div class="w-72 h-48 flex-shrink-0">
                <img src="/api/placeholder/400/320" alt="Image 2" class="w-full h-full object-cover rounded-lg shadow-md">
            </div>
            <div class="w-72 h-48 flex-shrink-0">
                <img src="/api/placeholder/400/320" alt="Image 3" class="w-full h-full object-cover rounded-lg shadow-md">
            </div>
            <div class="w-72 h-48 flex-shrink-0">
                <img src="/api/placeholder/400/320" alt="Image 4" class="w-full h-full object-cover rounded-lg shadow-md">
            </div>
        </div>
        
        <!-- Tombol kontrol -->
        <button class="absolute left-4 top-1/2 -translate-y-1/2 bg-white p-2 rounded-full shadow-md hover:bg-gray-100" onclick="slide('left')">
            ←
        </button>
        <button class="absolute right-4 top-1/2 -translate-y-1/2 bg-white p-2 rounded-full shadow-md hover:bg-gray-100" onclick="slide('right')">
            →
        </button>
    </div>

    <script>
        // Untuk versi dengan kontrol manual
        let currentPosition = 0;
        const slider = document.getElementById('slider');
        const slideWidth = 288; // w-72 = 18rem = 288px
        const maxSlides = 4;

        function slide(direction) {
            if (direction === 'left' && currentPosition < 0) {
                currentPosition += slideWidth;
            } else if (direction === 'right' && currentPosition > -(slideWidth * (maxSlides - 1))) {
                currentPosition -= slideWidth;
            }
            slider.style.transform = `translateX(${currentPosition}px)`;
        }

        // Auto slide setiap 3 detik
        setInterval(() => {
            if (currentPosition <= -(slideWidth * (maxSlides - 1))) {
                currentPosition = 0;
            } else {
                currentPosition -= slideWidth;
            }
            slider.style.transform = `translateX(${currentPosition}px)`;
        }, 3000);
    </script>
</body>
</html>