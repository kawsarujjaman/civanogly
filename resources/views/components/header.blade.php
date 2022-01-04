<div class="fixed top-0 w-full flex py-4 px-12 justify-between item-center z-30 bg-gray-100 text-black {{request()->routeIs('home') ? '': 'general-header'}} ">
    <div class="min-w-max">
        <a href="{{Route('home')}}">
            <img width="80" src="{!! asset('img/logo.png') !!}" alt="">
        </a>
    </div>

    <div class="w-full">
        <ul class="flex justify-center font-b ">
            <li class="inline-block p-4"> <a href="{{Route('properties')}}?type=0">Land</a> </li>
            <li class="inline-block p-4" > <a href="{{Route('properties')}}?type=2"> {{__('header.villa')}} </a> </li>
            <li class="inline-block p-4" > <a href="{{Route('properties')}}?type=1">Apartment</a> </li>
            <li class="inline-block p-4" > <a href="{{Route('page', 'about-us')}}">About us</a> </li>
            <li class="inline-block p-4" > <a href="{{route('page', 'contact-us')}}">Contact us</a> </li>
        </ul>
    </div>
    <div class="min-w-max text-2xl mr-5 pr-6">
        <a class="px-4" href="{{route('currency-change', 'usd')}}"><i class="fas fa-dollar-sign"></i></a>
       
        <a href="{{route('currency-change', 'tl')}}"><i class="fas fa-lira-sign"></i></a>
    </div>

    <div class="min-w-max text-3xl">
        <a href="{{ LaravelLocalization::getLocalizedURL('en') }}">🇺🇸</a>
        <a href="{{ LaravelLocalization::getLocalizedURL('tr') }}"> 🇹🇷 </a>
        
    </div>

</div>