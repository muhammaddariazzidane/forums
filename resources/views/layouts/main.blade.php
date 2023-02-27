<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Ngebull</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- <script src="https://unpkg.com/feather-icons"></script> --}}

    <style>
        /* .active  */


        .active::after {
            content: '';
            display: block;
            padding-bottom: 0.2rem;
            border-bottom: 0.2rem solid aqua;
            transform: scaleX(1)
        }


        /* .active::after {
            content: '';
            display: block;
            padding-bottom: 0.2rem;
            border-bottom: 0.2rem solid aqua;
        } */

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
    {{-- @include('components.modal.Modal-create') --}}
    {{-- @include('components.modal.Modal-search') --}}

    @yield('content')



    {{-- <script>
        feather.replace()
        // $("#messages").scrollTop($("#messages")[0].scrollHeight);
    </script> --}}
</body>

</html>
