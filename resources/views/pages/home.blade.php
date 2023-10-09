@extends('layouts.app')

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
</style>





<div class="text-center  mt-10 mx-14">
    <h1 class="content-h"> Latest news</h1>

    <div class="flex gap-4 mt-4">
        <div class="bg-gray-200 p-4 rounded-lg">
            <p class="font-poppins font-bold text-left text-xl leading-7" style="font-size: 22px; line-height: 30.14px;">
                Lorem ipsum dolor sit amet, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
            </p>
            <p class="font-poppins text-left  font-normal text-sm leading-5 mt-2">28 Sep, 2023</p>
        </div>

        <!-- Repeat this structure for the other two columns -->
        <div class="bg-gray-200 p-4 rounded-lg">
            <p class="font-poppins font-bold text-xl text-left  leading-7" style="font-size: 22px; line-height: 30.14px;">
                Lorem ipsum dolor sit amet, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
            </p>
            <p class="font-poppins text-left  font-normal text-sm leading-5 mt-2">28 Sep, 2023</p>
        </div>

        <div class="bg-gray-200 p-4 rounded-lg">
            <p class="font-poppins font-bold text-xl text-left  leading-7" style="font-size: 22px; line-height: 30.14px;">
                Lorem ipsum dolor sit amet, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
            </p>
            <p class="font-poppins text-left  font-normal text-sm leading-5 mt-2">28 Sep, 2023</p>
        </div>
    </div>


</div>

@endsection