<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans&display=swap" rel="stylesheet">
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    {{-- <script src="/public/js/feather.js"></script> --}}
    <style>
        * {
            font-family: 'Work Sans', sans-serif;
        }
    </style>

</head>

<body class="font-sans scrollbar-hide text-gray-900 antialiased ">
    <div class="min-h-screen  flex flex-col sm:justify-center items-center pt-6 sm:pt-0 ">
        <div class="w-20 h-20">

            <x-application-logo></x-application-logo>
        </div>
        <div class="w-full shadow-xl sm:max-w-md mt-6 px-6 py-4  overflow-hidden sm:rounded-lg">
            {{ $slot }}

        </div>
        {{-- <div class="max-w-[835px] w-full mt-14 p-6 min-h-screen">
            <div class="flex my-4 w-full flex-col lg:flex-row gap-4 lg:justify-between">
                @include('components.button.Btn-create')
                @include('components.search.search')
            </div>
            @include('components.post')





        </div> --}}

        <script>
            // feather.replace()
            // const btn = document.getElementById('btn')
            // const btn2 = document.getElementById('btn2')
            // const bg = document.getElementById('bg')
            // // const createModal = document.getElementById('createModal')
            // // const bgCreate = document.getElementById('bgCreate')
            // const fsc = document.getElementById('fsc')
            // const ipt = document.getElementById('ipt')
            // const burger = document.getElementById('burger')
            // const navMenu = document.getElementById('navMenu')
            // const bgCreate = document.getElementById('bgCreate')

            // const ModalCreate = () => {
            //     // alert('dskjdi')
            //     // bgCreate.classList.toggle('hidden')
            //     bgCreate.classList.toggle('hidden')
            // }

            // btn.addEventListener('click', () => {
            //     bg.classList.toggle('hidden')

            // })
            // btn2.addEventListener('click', () => {
            //     bg.classList.toggle('hidden')

            // })
            // burger.addEventListener('click', () => {
            //     navMenu.classList.toggle('scale-0')

            // })


            // window.addEventListener('click', function(e) {
            //     // console.log(e.target);
            //     if (e.target == bgCreate) {
            //         bgCreate.classList.add('hidden')

            //     }
            //     if (e.target != btn && e.target != ipt) {
            //         if (e.target == bg) {
            //             // createModal.classList.add('hidden');
            //             bg.classList.add('hidden');
            //         }
            //     }
            // });
        </script>
</body>

</html>
