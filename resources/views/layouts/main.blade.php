<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Main Layout</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://unpkg.com/feather-icons"></script>

    <style>
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

        * {
            font-family: 'Work Sans', sans-serif;
        }

        .scrollbar-w-2::-webkit-scrollbar {
            width: 0.25rem;
            height: 0.25rem;
        }

        .scrollbar-track-blue-lighter::-webkit-scrollbar-track {
            --bg-opacity: 1;
            background-color: #f7fafc;
            background-color: rgba(247, 250, 252, var(--bg-opacity));
        }

        .scrollbar-thumb-blue::-webkit-scrollbar-thumb {
            --bg-opacity: 1;
            background-color: #edf2f7;
            background-color: rgba(237, 242, 247, var(--bg-opacity));
        }

        .scrollbar-thumb-rounded::-webkit-scrollbar-thumb {
            border-radius: 0.25rem;
        }
    </style>
</head>

<body class="min-h-screen scrollbar-hide"
    style="background-color: rgb(21,31,50); background-image: radial-gradient(at 0% 0%, rgb(28,48,83)0, transparent 25%)">

    @include('components.navbar')

    @yield('content')
    <script>
        feather.replace()
        const el = document.getElementById('messages')
        el.scrollTop = el.scrollHeight
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
