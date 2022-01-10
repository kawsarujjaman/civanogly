    <a href=" {{route('single_property', $property->id)}} " class="{{$width}} px-3 relative rounded-md mb-6 block " >
        <div class="shadow-10">
                <div class="bg-center md:py-16 py-3 ">    
                                    <!-- rounded-xl text-left -->
                        <img  class="w-full h-32 m-auto" src="img/property1.jpeg" alt="">
                    
                    <div class=" p-3">
                        <h3 class="font-bold mb-4 text-xl"> {{$property->name}} </h3>
                        <h3 class="font-bold mb-4 text-2xl">  {{$property->dynamic_pricing($property->price)}} </h3>

                       <div class="button inline-block">
                           
                        <button class="border-2 bg-grey-500 rounded-lg px-2 "> <i class="fas fa-restroom"></i> 7 Bathrooms  </button>
                        <button class="border-2 bg-grey-500 rounded-lg px-2 "> <i class="fas fa-person-booth"></i> 5 Bedrooms  </button> <br>
                        <button class="border-2 bg-grey-500 rounded-lg px-2 my-2 "> <i class="fas fa-circle"></i> 15,000ft  </button>

                       </div>
                       <span> More details </span>
                    </div>

                </div>
            </div>
</a>