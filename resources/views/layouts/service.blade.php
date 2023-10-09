<!DOCTYPE html>
<html>

<head>
    <!-- Include jQuery and Slick CSS/JS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        .slick-dots {
            display: flex;
            justify-content: center;
            list-style: none;
            margin-top: 10px;
            padding: 0;
        }

        .slick-dots li {
            margin: 0 6px;
        }

        .slick-dots li button {
            width: 12px;
            height: 12px;
            background-color: #333;
            border: none;
            border-radius: 50%;
            cursor: pointer;
            opacity: 0.7;
        }

        .slick-dots li.slick-active button {
            opacity: 1;
        }

        .slick-prev,
        .slick-next {
            position: absolute;
            top: 50%;
            border-radius: 50%;
            transform: translateY(-50%);
            z-index: 1;
            background: transparent;
            border: none;
            cursor: pointer;
            margin-left: 20px;
            margin-right: 20px;

        }

        .slick-prev {
            left: 200;
        }

        .fa,
        .fas {
            font-weight: 900;
            border: 1px solid white;
            padding-left: 10px;
            padding-right: 10px;
            padding-top: 8px;
            padding-bottom: 8px;
            border-radius: 50%;
        }

        .slick-next {
            right: 0;
        }

        .navbar {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            background-color: transparent;
            transition: background-color 0.3s ease;
            z-index: 1000;
        }
    </style>

</head>

<body>
    <nav class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8 navbar" aria-label="Global">
        <div class="flex lg:flex-1">
            <a href="#" class="-m-1.5 p-1.5">
                <span class="sr-only">Your Company</span>
                <img class="h-3 w-auto text-gray-600" src="{{ asset('imgs/logo.png') }}" alt="">
            </a>
        </div>
        <div class="flex lg:hidden">
            <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-white-300">
                <span class="sr-only">Open main menu</span>
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
            </button>
        </div>
        <div class="hidden lg:flex lg:gap-x-12">
            <a href="#" class="text-sm font-semibold leading-6 text-white">ABOUT US</a>
            <a href="#" class="text-sm font-semibold leading-6 text-white">SERVICES</a>
            <a href="#" class="text-sm font-semibold leading-6 text-white">CONTACT US</a>
            <a href="#" class="text-sm font-semibold leading-6 text-white">COMPANY</a>
        </div>
        <div class="hidden lg:flex lg:flex-1 lg:justify-end">
            <a href="#" class="text-sm font-semibold leading-6 text-white">Log in <span aria-hidden="true">&rarr;</span></a>
        </div>
    </nav>

    <div class="slider-container">
        <div class="single-item">
            <img style="height: 477px;" src="{{ asset('imgs/about.png') }}" alt="Image 1">
        </div>
    </div>

    @yield('content')

    <footer class="bg-gray-200 mt-14 mb-6">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
            <div class="flex flex-wrap justify-between ">
                <!-- First Footer Column -->
                <div class=" w-1/2 mt-4">
                <img class="h-4 w-auto"  src="{{ asset('imgs/black.png') }}" alt="">
                </div>

                <!-- Second Footer Column -->
                <div class="w-1/5 my-4">
                    <ul>
                        <li><a class="text-xl  " href="#">About Us</a></li>
                        <li><a class="text-xl  " href="#">Services</a></li>
                        <li><a class="text-xl  " href="#">Contact us</a></li>
                    </ul>
                </div>

                <div class="w-1/4 my-4">
                    <ul >
                        <li><a class="text-xl  " href="#">Follow us</a></li>
                        <li class="mt-2">
                            <a class="text-xl  inline" href="#"> <img style="height: 30px; width:30px" class="inline" src="{{ asset('imgs/linkedin.png') }}" alt=""> </a>
                            <a class="text-xl  inline" href="#"> <img style="height: 30px; width:30px" class="inline" src="{{ asset('imgs/Vector.png') }}" alt=""> </a>

                        </li>

                    </ul>
                </div>

            </div>
        </div>
    </footer>


</body>

</html>