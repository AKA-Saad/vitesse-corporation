@extends('layouts.service')

@section('content')
<style>
    .content-h {
        font-family: 'Poppins', sans-serif;
        font-weight: 700;
        font-size: 24px;
        line-height: 36px;
        text-align: center;
        color: #323232;
    }


    .content-h-new {
        font-family: 'Poppins', sans-serif;
        font-weight: 700;
        font-size: 24px;
        line-height: 36px;
        color: #323232;
    }

    .text-style {
        font-family: 'Poppins', sans-serif;
        font-weight: 400;
        font-size: 18px;
        line-height: 27px;
    }
</style>


<div class="text-left  mt-10 mx-28 mb-14">
    <h1 class="content-h-new"> What we do </h1>

    <p class="mt-6 text-style">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. <br/> <br/> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
    </p>
</div>

<div class="text-center  mt-10 mx-28">
    <h1 class="content-h text-left"> who we are </h1>


    <div class="grid grid-cols-2 mt-14 gap-4">
        <!-- First Section -->
        <div class="bg-gray-200 rounded-lg flex items-center">
            <div class="bg-gray-300 h-full w-full" style="width: 1200px;">
                <img src="{{ asset('imgs/girl.png') }}" class="w-full h-full object-cover object-center" alt="">
            </div> <!-- Square Placeholder for Image -->
            <div class="ml-4 p-4 text-left">
                <h2 class="font-poppins font-bold text-xl leading-7" style="font-size: 18px; line-height: 27px;">President</h2>
                <p class="font-poppins font-normal text-sm leading-5 mt-2">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolor
                </p>
            </div>
        </div>

        <!-- Repeat this structure for the other three sections -->

        <div class="bg-gray-200 rounded-lg flex items-center">
            <div class="bg-gray-300 h-full w-full" style="width: 1200px;">
                <img src="{{ asset('imgs/girl.png') }}" class="w-full h-full object-cover object-center" alt="">
            </div> <!-- Square Placeholder for Image -->
            <div class="ml-4 p-4 text-left">
                <h2 class="font-poppins font-bold text-xl leading-7" style="font-size: 18px; line-height: 27px;">President</h2>
                <p class="font-poppins font-normal text-sm leading-5 mt-2">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolor
                </p>
            </div>
        </div>

        <div class="bg-gray-200 rounded-lg flex items-center">
            <div class="bg-gray-300 h-full w-full" style="width: 1200px;">
                <img src="{{ asset('imgs/girl.png') }}" class="w-full h-full object-cover object-center" alt="">
            </div> <!-- Square Placeholder for Image -->
            <div class="ml-4 p-4 text-left">
                <h2 class="font-poppins font-bold text-xl leading-7" style="font-size: 18px; line-height: 27px;">President</h2>
                <p class="font-poppins font-normal text-sm leading-5 mt-2">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolor
                </p>
            </div>
        </div>

        <div class="bg-gray-200 rounded-lg flex items-center">
            <div class="bg-gray-300 h-full w-full" style="width: 1200px;">
                <img src="{{ asset('imgs/girl.png') }}" class="w-full h-full object-cover object-center" alt="">
            </div> <!-- Square Placeholder for Image -->
            <div class="ml-4 p-4 text-left">
                <h2 class="font-poppins font-bold text-xl leading-7" style="font-size: 18px; line-height: 27px;">President</h2>
                <p class="font-poppins font-normal text-sm leading-5 mt-2">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolor
                </p>
            </div>
        </div>

    </div>




</div>

@endsection