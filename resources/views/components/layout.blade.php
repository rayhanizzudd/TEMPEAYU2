<!DOCTYPE html>
<html lang="en" class="h-full bg-amber-100 !scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <title>Home</title>

        <style>
        /* Efek animasi */
        .fade-in {
            opacity: 0;
            transform: translateY(30px);
            /* Mulai dari bawah */
            transition: all 1s ease-in-out;
        }

        .fade-in.show {
            opacity: 1;
            transform: translateY(0);
        }

        /* Tambahkan untuk variasi lainnya (contoh slide dari kiri) */
        .slide-left {
            opacity: 0;
            transform: translateX(-50px);
            /* Mulai dari kiri */
            transition: all 1s ease-in-out;
        }

        .slide-left.show {
            opacity: 1;
            transform: translateX(0);
        }
    </style>

</head>

<body class="h-full bg-yellow-100">

    <div class="min-h-full">

        <x-navbar></x-navbar>

        <x-header>{{ $title }}</x-header>

        <main>{{ $slot }}</main>

        <x-footer></x-footer>

    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const observer = new IntersectionObserver(entries => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('show');
                    } else {
                        entry.target.classList.remove(
                        'show'); // Opsional: hilangkan jika scroll ke atas
                    }
                });
            }, {
                threshold: 0.3
            }); // 30% elemen terlihat akan memicu

            const animatedElements = document.querySelectorAll('.fade-in, .slide-left');
            animatedElements.forEach(element => observer.observe(element));
        });
    </script>

</body>

</html>
