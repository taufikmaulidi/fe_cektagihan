<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://unpkg.com/alpinejs@3.2.3/dist/cdn.min.js"></script>
</head>

<body class="antialiased bg-gray-100">
    <!-- Section 1 -->
    <section class="w-full px-8 py-16 bg-gray-100 xl:px-8">
        <div class="max-w-5xl mx-auto">
            <div class="flex flex-col items-center md:flex-row">

                <div class="w-full space-y-5 md:w-3/5 md:pr-16">
                    <!-- <p class="font-medium text-blue-500 uppercase">Puskonet.</p> -->
                    <h2 class="text-2xl font-extrabold leading-none text-black sm:text-3xl md:text-5xl">Aplikasi Cek Tagihan Puskonet</h2>
                    <p class="text-xl text-gray-600 md:pr-16">Website ini berfungsi untuk mengecek tagihan anda di PuskoNet.</p>
                </div>

                <div class="w-full mt-16 md:mt-0 md:w-2/5">
                    <div class="relative z-10 h-auto p-8 py-10 overflow-hidden bg-white border-b-2 border-gray-300 shadow-2xl px-7 rounded-3xl">
                        <h3 class="mb-6 text-2xl font-medium text-center">Masuk ke Akun Anda</h3>
                        <input type="text" name="email" class="block w-full px-4 py-3 mb-4 border border-2 border-transparent border-gray-200 focus:ring focus:ring-blue-500 focus:outline-none rounded-full" placeholder="Email address">
                        <input type="password" name="password" class="block w-full px-4 py-3 mb-4 border border-2 border-transparent border-gray-200 focus:ring focus:ring-blue-500 focus:outline-none rounded-full" placeholder="Password">
                        <div class="block">
                            <a href="{{ url('/home') }}"><button class="w-full px-3 py-4 font-medium text-white bg-blue-600 rounded-full">Log Me In</button></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
</body>
<!-- AlpineJS Library -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/2.8.0/alpine.js"></script>


</html>