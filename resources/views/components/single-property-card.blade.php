<div class="flex-1 px-4">
                <div class="bg-white rounded-xl text-left">                    
                        <img  class="w-full h-32 m-auto" src="img/property1.jpeg" alt="">
                    
                    <div class=" p-4">
                        <h3 class="font-bold mb-4 text-xl"> {{$property->name}} </h3>
                        <h3 class="font-bold mb-4 text-2xl"> $ {{$property->price}} </h3>

                       <div class="button inline-block">
                           
                        <button class="border-2 bg-grey-500 rounded-lg px-2 "> <i class="fas fa-restroom"></i> 7 Bathrooms  </button>
                        <button class="border-2 bg-grey-500 rounded-lg px-2 "> <i class="fas fa-person-booth"></i> 5 Bedrooms  </button> <br>
                        <button class="border-2 bg-grey-500 rounded-lg px-2 my-2 "> <i class="fas fa-circle"></i> 15,000ft  </button>

                       </div>
                        <a class= "fullwidth-btn bg-gray-800 text-white px-6 py-2 rounded w-full inline-block text-center" href=" {{route('single_property', $property->id)}} "> More details </a>
                    </div>

                </div>
            </div>