@extends('layouts.contact')

@section('content')
<style>
    .element-selector {
        border-radius: 36px;
        padding: 7px 16px;
        background-color: rgba(255, 255, 255, 0.39);
    }

    .btn-selector {
        border-radius: 31px;
        padding: 8px 24px;
    }

    .element-selector::placeholder {
        color: white;
    }

    .p-selector {
        font-family: 'Montserrat', sans-serif;
        font-weight: 500;
        margin-top: 1px;
        margin-bottom: 1px;
        font-size: 18px;
        line-height: 29.26px;
    }
</style>
<div class="text-center text-black uppercase py-6 mt-24">
    <h1 class="text-4xl font-bold text-center">Contact Us</h1>
</div>

<div class="bg-gray-200 mx-20" style="border-radius: 18px;">
    <div class="grid grid-cols-2 gap-4" style="border-radius: 18px;">
        <div class="bg-gray-200  p-4 flex items-center" style="border-radius: 18px;">
            <div>
                <div class="block">
                    <p class="p-selector ">  <img class="h-6 mr-1 w-auto inline"  src="{{ asset('imgs/location.png') }}" alt=""> Address</p>
                </div>
                <div class="block">
                    <p class="p-selector "> <img class="h-6 mr-1 w-auto inline"  src="{{ asset('imgs/call.png') }}" alt=""> +12 345 678 90 </p>
                </div>
                <div class="block">
                    <p class="p-selector "> <img class="h-6 mr-1 w-auto inline"  src="{{ asset('imgs/email.png') }}" alt=""> info@email.com </p>
                </div>
            </div>
        </div>
        <div class=p-4">
            <div class="flex justify-center  ">
                <div class="bg-white p-6 my-6 mr-6 rounded-lg shadow-md w-full" style="background-color: #0D4276;">
                    <h2 class="text-2xl text-white font-semibold text-center mb-6">Contact form</h2>
                    <form>
                        <div class="mb-4">
                            <input type="text" id="name" placeholder="Name" name="name" class="element-selector border rounded-md px-4 py-2 w-full focus:outline-none focus:ring focus:border-blue-300" required>
                        </div>
                        <div class="mb-4">
                            <input type="tel" placeholder="Phone Number" id="phone" name="phone" class="element-selector border rounded-md px-4 py-2 w-full focus:outline-none focus:ring focus:border-blue-300" required>
                        </div>
                        <div class="mb-4">
                            <input type="email" placeholder="Email" id="email" name="email" class="element-selector border rounded-md px-4 py-2 w-full focus:outline-none focus:ring focus:border-blue-300" required>
                        </div>
                        <div class="flex justify-end">
                            <button type="submit" class=" text-white px-4 py-2 rounded-md focus:outline-none border border-white btn-selector">Contact Us</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection