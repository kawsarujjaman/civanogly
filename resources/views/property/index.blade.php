<x-guest-layout>
    <style>

        
.general-header {
    background: white;
    color: black;
    height: 70px;
}

    </style>


    <!-- Breadcrumb -->
    <div class="shadow-md border-2 border-gray-300 py-2 bg-white mt-32">
        <div class="container mx-auto">
            <ul class="flex items-center">
                <li><a class="text-3xl text-red-800" href="{{ url('/') }}"><i class="fa fa-home"></i></a></li>
                <li class="mx-3"><i class="fa fa-angle-right"></i></li>
                <li><a class="text-base text-red-800" href="{{route('home')}}">Property</a></li>
                <li class="mx-3"><i class="fa fa-angle-right"></i></li>
                <li> Properties </li>
            </ul>
        </div>
    </div>

    <!-- Title & Share -->
    <div class="bg-white py-8">
        <div class="container mx-auto">
            <div class="flex justify-between">
                <div class="w-8/12">
                    <h2 class="text-3xl text-gray-600"> Properties 
                        @if(request('type') == '0')
                        - Land 
                        @elseif(request('type') == 1)
                        - Apertment
                        @elseif(request('type') == 2)
                        - Villa
                        @endif
                </h2>
                   
                </div>

            
                    
            </div>
        </div>
    </div>



    <!-- Content -->
    <div class="container mx-auto my-14">
        <div class="flex justify-between mx-2">
         <div class="w-2/3"> 
            <div class="flex flex-wrap mb-6 mx-4">
                @foreach($latest_properties as $property )
                    @include('components.single-property-card', ['property'=> $property, 'width'=> 'md:w-1/4 w-full'])     
                
                @endforeach
            </div>
           {{ $latest_properties->links()}}
        </div>

          
        
        
        
        
        <!-- Left Content  -->
           <div class="w-1/3 mx-2 vertical-search-form">
                <div id="slider" class="single_search">
                   
                    @include('components.property-search-form')
                    </div>

                </div>
            </div>

        </div>

    </div>



</x-guest-layout>