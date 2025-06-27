<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <title>Pemberitahuan</title>
    <link rel="shortcut icon" href="{{ asset('images/logo/favicon.ico') }}">
</head>
<body style="font-Montserrat">
    <section class="h-screen flex justify-center items-center">
        <div class="mx-auto max-w-screen-md lg:py-16 lg:px-10">
            <div class="mx-auto max-w-screen-sm text-center">                 
                <h1 class="mb-4 text-5xl tracking-tight font-extrabold lg:text-8xl text-primary-blue">Mohon Maaf</h1>
                <p class="mb-4 text-2xl tracking-tight font-bold text-gray-900 md:text-5xl dark:text-white">Pendaftaran seminar belum dibuka.</p>
                <p class="mb-4 text-lg font-light text-gray-500 dark:text-gray-400">Silahkan pantau terus Instagram kami <a href="https://www.instagram.com/intechfest.cc/" target="_blank" class="font-semibold text-primary-lightblue underline hover:text-primary-blue">disini</a> untuk mendapatkan informasi lainnya ya. </p>
            </div>
        </div>
    </section>
    @vite('resources/js/app.js')
</body>
</html>