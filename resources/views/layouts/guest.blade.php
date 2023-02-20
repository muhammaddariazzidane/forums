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
    <script src="https://unpkg.com/feather-icons"></script>
    <style>
        * {
            font-family: 'Work Sans', sans-serif;
        }

        #menu li a::after {
            content: '';
            display: block;
            padding-bottom: 0.2rem;
            border-bottom: 0.2rem solid aqua;
            transform: scaleX(0)
        }

        #menu li a:hover::after {
            transition: 0.4s ease;
            transform: scaleX(1)
        }
    </style>

</head>

<body class="font-sans scrollbar-hide text-gray-900 antialiased "
    style="background-color: rgb(21,31,50); background-image: radial-gradient(at 0% 0%, rgb(28,48,83)0, transparent 25%)">
    <div class="min-h-screen  flex flex-col sm:justify-center items-center pt-6 sm:pt-0 ">


        <div class="w-full sm:max-w-md mt-6 px-6 py-4  overflow-hidden sm:rounded-lg">
            {{ $slot }}

        </div>
        <div class="max-w-[835px] w-full mt-14 p-6 min-h-screen  ">

            <div class="flex my-4 w-full flex-col lg:flex-row gap-4 lg:justify-between">
                <button
                    class="p-2 px-4 rounded-full w-[6.7rem] text-new bg-primary flex active:bg-secondary transition-all duration-300">
                    Create
                    <i data-feather="plus" width='18' class="ml-2"></i>
                </button>
                <div class="lg:max-w-[14rem] w-full">
                    <div class="text-new flex">
                        <div class="mt-0 -mr-2 rounded-l-full bg-primary p-2">
                            <i data-feather="search" width='18'></i>
                        </div>
                        <input type="text" placeholder="search"
                            class="bg-primary w-full placeholder:text-new rounded-r-full p-2 border-none focus:ring-0 text-new"
                            name="" id="">
                    </div>
                </div>
            </div>
            @include('components.post')

            {{-- detail post --}}
            <div class="max-w-[835px] rounded-xl w-full hover:bg-secondary transition-all duration-300 bg-primary">
                <div class="flex pb-3">
                    <div class="w-[10.99999%] ml-3 lg:block hidden p-3 ">
                        <img class="w-12 h-12 rounded-full" alt="Use any sample image here..."
                            src="https://tailwindcomponents.com/storage/avatars/baG0wMQUtoTOZOOmStaUBVQsa7LAwc5HjiGZMjdB.png" />
                    </div>
                    <div class="w-full text-white mt-4 lg:p-0 p-4">
                        <div class="flex flex-col">
                            <h1 class="font-semibold">Lorem.ssd</h1>
                            <small class="text-slate-400 text-[0.6rem] my-1">400 years ago #</small>
                            <div class="my-2">
                                <p class="text-sm text-new">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                    Magnam
                                    dolores officia
                                    repellat quod vitae dolore eligendi voluptatem id! In, repudiandae tenetur. Soluta
                                    praesentium accusamus commodi fugit quia vitae, exercitationem animi!sd</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="max-w-[835px] mt-7">
                <div class="flex">
                    <div class="w-[10.99999%] relative lg:block hidden">
                        <span class="absolute top-0 left-0 rotate-90 h-[2px] w-[2.3rem] bg-slate-700"></span>
                        <span class="absolute top-[1.1rem] right-3 h-[2px] w-[3rem] bg-slate-700"></span>
                    </div>
                    <div class="w-full">
                        <form action="">
                            <textarea
                                class="rounded-lg w-full text-slate-200 bg-primary  focus:ring-cyan-300 focus:ring-2 duration-200 transition-all border-none outline-none"
                                placeholder="comment something" name="" id=""></textarea>
                            <div class="flex justify-end mt-2">
                                <button type="submit"
                                    class="p-2 text-sm bg-secondary shadow-lg text-white rounded-lg px-4">kirjm</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>



        </div>

        <script>
            feather.replace()
            const btn = document.getElementById('btn')
            const btn2 = document.getElementById('btn2')
            const bg = document.getElementById('bg')
            const fsc = document.getElementById('fsc')
            const ipt = document.getElementById('ipt')
            const burger = document.getElementById('burger')
            const navMenu = document.getElementById('navMenu')


            btn.addEventListener('click', () => {
                bg.classList.toggle('hidden')

            })
            btn2.addEventListener('click', () => {
                bg.classList.toggle('hidden')

            })
            burger.addEventListener('click', () => {
                navMenu.classList.toggle('scale-0')

            })


            window.addEventListener('click', function(e) {
                console.log(e.target);
                if (e.target != btn && e.target != ipt) {
                    if (e.target == bg) {
                        bg.classList.add('hidden');
                    }
                }
            });
        </script>
</body>

</html>
