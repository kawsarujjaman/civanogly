<x-guest-layout>
    <style>
/* 
        #header_area a {
            color: #000;
        }
        #header_area a:hover{
            color: #991b1b;
        } */
        
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
                <li><a class="text-base text-red-800" href="#">Property</a></li>
                <li class="mx-3"><i class="fa fa-angle-right"></i></li>
                <li>Lorem ipsum dolor sit amet, consectetur adipisicing.</li>
            </ul>
        </div>
    </div>

    <!-- Title & Share -->
    <div class="bg-white py-8">
        <div class="container mx-auto">
            <div class="flex justify-between">
                <div class="w-8/12">
                    <h2 class="text-3xl text-gray-600"> {{ $property->name }} </h2>
                    <h3 class="text-lg mt-2">Price: <span class="text-red-800">                      
                    {{$property->dynamic_pricing($property->price)}}                   
                </span></h3>
                </div>

         

                <div class="w-3/12">
                    <ul class="flex justify-end">
                        <li>
                            <a class="flex flex-col justify-center items-center mx-2 border-2 border-gray-200 p-3 hover:border-red-400 duration-200"
                                href="#">
                                <i class="fa fa-print mb-2"></i>
                                <span class="text-md block">Print</span>
                            </a>
                        </li>
                        <li>
                            <a class="flex flex-col justify-center items-center mx-2 border-2 border-gray-200 p-3 hover:border-red-400 duration-200"
                                href="#">
                                <i class="fa fa-heart-o mb-2"></i>
                                <span class="text-md block">Save</span></a>
                        </li>
                        <li>
                            <a class="flex flex-col justify-center items-center mx-2 border-2 border-gray-200 p-3 hover:border-red-400 duration-200"
                                href="#">
                                <i class="fa fa-share-alt mb-2"></i>
                                <span class="text-md block">Share</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>



    <!-- Content -->
    <div class="container mx-auto my-14">
        <div class="flex justify-between mx-2">

            <!-- Left Content  -->
            <div class="w-9/12 mx-2">
                <div id="slider" class="">

            <!-- Slider -->
                <div id="slider">
                    <div class="gallary_slider">

                        @foreach($property->gallery as $gallery)
                        <div style="background-image:url({{$gallery->name}})" class="single_gallery_item bg-cover bg-center " > </div>
                        @endforeach
                      
                    </div>

                    <div class="thumbnail_slider pt-10 ">
                        @foreach($property->gallery as $gallery)
                        <div style="background-image:url({{$gallery->name}})" class="single_thumbnail_item bg-cover bg-center mr-7 " > </div>
                         @endforeach
                    </div>


                 </div>
                
                  


                </div>
                <!-- -- Overview -- -->
                <div class="flex justify-between items-center bg-white p-8 mt-10 shadow-sm">
                    <h4 class="text-lg w-2/12">Overview</h4>
                    <div class="border-l-2 border-gray-300 pl-5 ml-5 w-10/12 text-base">
                        <p> {{$property->overview}} </p>
                    </div>
                </div>

                <!-- Property Featuers -->
                <div class="flex justify-between items-center bg-white p-8 mt-10 shadow-sm">
                    <h4 class="text-lg w-2/12">Property Features</h4>
                    <div class="ml-2 w-10/12 text-base flex justify-between">
                        <div class="flex-1 border-l-2 border-gray-300 ml-3 pl-3 self-center">
                            <ul>
                                <li class="flex text-sm mb-2">
                                    <div class="flex"><i
                                            class="fa fa-home mr-2 text-red-400 w-5 text-center"></i><span
                                            class="text-sm">Type:</span></div>
                                    <span class="ml-2 font-bold">
                                        
                                  @if($property->type==1)

                                    Apertment
                                  
                                  @elseif($property->type==1)
                                    Villa
                                  @else()
                                    Land
                                  @endif
                                
                                </span>
                                </li>
                                <li class="flex text-sm">
                                    <div class="flex"><i
                                            class="fa fa-bed mr-2 text-red-400 w-5 text-center"></i><span
                                            class="text-sm">Bedrooms:</span></div>
                                    <span class="ml-2 font-bold">{{$property->bedrooms}}</span>
                                </li>
                            </ul>
                        </div>
                        <div class="flex-1 border-l-2 border-gray-300 ml-3 pl-3 self-center">
                            <ul>
                                <li class="flex text-sm mb-2">
                                    <div class="flex"><i
                                            class="fa fa-shower mr-2 text-red-400 w-5 text-center"></i><span
                                            class="text-sm">Bathrooms:</span></div>
                                    <span class="ml-2 font-bold"> {{$property->bathrooms}} </span>
                                </li>
                                <li class="flex text-sm">
                                    <div class="flex"><i
                                            class="fa fa-map-marker mr-2 text-red-400 w-5 text-center"></i><span
                                            class="text-sm">Location:</span></div>
                                    <span class="ml-2 font-bold">{{$property->location_id}}</span>
                                </li>
                            </ul>
                        </div>
                        <div class="flex-1 border-l-2 border-gray-300 ml-3 pl-3 self-center">
                            <ul>
                                <li class="flex text-sm mb-2">
                                    <div class="flex"><i
                                            class="fa fa-gratipay mr-2 text-red-400 w-5 text-center"></i><span
                                            class="text-sm">Living space sqm:</span></div>
                                    <span class="ml-2 font-bold">{{$property->net_sql}}</span>
                                </li>
                                <li class="flex text-sm">
                                    <div class="flex"><i
                                            class="fa fa-low-vision mr-2 text-red-400 w-5 text-center"></i><span
                                            class="text-sm">Pool</span></div>
                                    <span class="ml-2 font-bold">{{$property->poll}}</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Overview -->
                <div class="flex justify-between items-center bg-white p-8 mt-10 shadow-sm">
                    <h4 class="text-lg w-2/12">Why buy this Property</h4>
                    <div class="border-l-2 border-gray-300 pl-5 ml-5 w-10/12 text-base">
                        <ul>
                            <li>- {{$property->whyBuy}}</li>
                            <li>-{{$property->whyBuy}}</li>
                            
                        </ul>
                    </div>
                </div>
 
                <!-- Description -->
                <div class="bg-white p-8 mt-10 shadow-sm" id="description">

                    <h2 class="font-bold mb-2"> FACILITIES &amp; LOCATION</h2>

                    <p>{{$property->description}}</p>

                    <h3 class="mb-2">About the project and residences</h3>
                    <p>{{$property->description}}</p>
                    <p>{{$property->description}}</p>

                    <p><strong>Features and facilities include</strong></p>

                    <p>- Access to private bay and beach area</p>
                    <p>- Sea and road shuttle services</p>
                    <p>- State-of-the-art sea view terrace</p>
                    <p>- Large shared swimming pool</p>
                    <p>- Landscaped gardens and relaxing areas</p>
                    <p>- Helipad for travel by helicopter</p>
                    <p>- Two beachfront restaurants for world cuisine</p>
                    <p>- Four other restaurants around the development</p>
                    <p>- Fully equipped modern gym and yoga suite</p>
                    <p>- Spa and wellness centre to rejuvenate yourself</p>
                    <p>- Concierge, housekeeping, and chef available</p>
                    <p>- Shopping services before arrival</p>
                    <p>- Kids club, babysitting, and summer school</p>
                    <p>- Pet care for those with loved animals</p>
                    <p>- Car parking available for residents</p>
                    <p>- Fully secure at all times 24 hours a day</p>
                    <p>- And much, much more to discover inside</p>


                    <p><strong>Property prices and availability</strong></p>
                    <p>The project is split into two sections – luxury residences and valley residences, all
                        situated in one of the most stunning bays in Yaliciftlik. Property prices and availability
                        range from the following:&nbsp;</p>
                    <p>- 42 residences from three – seven bedrooms and sized 327m2 – 675m2 for sale from 1,750,000
                        Euro.&nbsp;</p>
                    <p><strong>NOTE</strong>: Prices displayed exclude VAT.</p>

                    <p><strong>Rental potential</strong></p>
                    <p>Should you desire to rent your suite out when not in use or are an investor looking for high
                        end opportunities in Bodrum, there is a dedicated rental team on site happy to assist you
                        and rent your property out on your behalf.</p>

                    <p><strong>Distances by land</strong></p>
                    <p>Bodrum Centre only 14km away</p>
                    <p>Yalikavak Marina only 30km away</p>
                    <p>Bodrum Airport only 38km away</p>

                    <p><strong>Distances by sea</strong></p>
                    <p>Bodrum centre within 6 sea miles</p>
                    <p>Bodrum Marina within 6 sea miles</p>
                    <p>Kos Island within 14 sea miles</p>
                    <p>Gokova Peninsula within 44 sea miles</p>
                    <p>Symi Island within 83 sea miles</p>

                </div>

            </div> <!-- Left Content End -->



             <!-- Sidebar -->
            <div class="w-3/12 mx-2">
                <div class="border-2 border-red-800 px-5 py-3 text-center font-light text-base">
                    <p>Subscribe to Property Turkey media for blogs/news/videos</p>
                </div>
               <!-- Form -->
                <div class="px-4 py-5 text-left bg-gray-300 my-5">
                    <h1 class="text-3xl font-normal leading-none mb-5">Enquire about this property</h1>

                   @if(Session::get('message'))
                    <p class="mb-6 p-3 bg-green-100 text-green-700"> {{Session::get('message')}}. </p>
                  @endif
                   
                    <form action="{{route('property-inquiry', $property->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="">
                            <label class="inputLabel" for="name">Name <span
                                    class="text-red-800 font-serif">*</span></label>
                            <input class="inputField" type="text" id="name" name="name" placeholder="First Name" value="{{old('name')}}" required>
                            @error('name')
                            <p class="text-red-500 mt-2 text-sm">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="mt-5">
                            <label class="inputLabel" for="phone">Phone <span
                                    class="text-red-800 font-serif">*</span></label>
                            <input class="inputField" type="text" id="phone" name="phone" placeholder="Phone" value="{{old('phone')}}" required>
                            @error('phone')
                            <p class="text-red-500 mt-2 text-sm">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="mt-5">
                            <label class="inputLabel" for="email">Email <span
                                    class="text-red-800 font-serif">*</span></label>
                            <input class="inputField" type="email" id="email" name="email" placeholder="E-mail" value="{{old('email')}}" required>
                            @error('email')
                            <p class="text-red-500 mt-2 text-sm">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="mt-5">
                            <label class="inputLabel" for="message">Message <span
                                    class="text-red-800 font-serif">*</span></label>
                            <textarea class="inputField" id="message" name="message" rows="4"
                                placeholder="I'm interested in this property" value="{{old('')}}" required></textarea>
                                @error('message')
                            <p class="text-red-500 mt-2 text-sm">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="mt-5">
                            <button type="submit"
                                class="w-full border-2 uppercase text-center py-3 font-semibold border-red-800 hover:bg-transparent hover:text-red-800 duration-200  text-white bg-red-800 rounded-none"><i class="fa fa-commenting mr-2"></i>Request
                                Details</button>
                        </div>

                    </form>
                </div>
            </div>


        </div>

    </div>



</x-guest-layout>