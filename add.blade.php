<x-app-layout>
    <x-slot name="header">

    <div class="flex justify-between item-center">
       <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Properties') }}
        </h2>
            <div class="min-w-max">
                <a class="fullwidth-btn bg-black text-white px-4 py-2 rounded" href="{{route('dashboard-properties')}}"> Back </a>
            
             </div>
       </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <form action="{{route('create-property')}}" method="post" class="p-6 bg-white border-b border-gray-200"> @csrf

                    <div class="flex -mx-4 mb-6">
                        <div class="flex-1 px-4">
                            <label class=" civanogly-label"for="name">Title</label>
                            <input class=" civanogly-input" type="text" id="name" name="name"  >
                            @error('name')
                            <p class="text-red-500 mt-2 text-sm"> {{$message}}</p>
                            @enderror
                        </div>

                        <div class="flex-1 px-4">
                            <label class=" civanogly-label"for="name_tr">TR Title</label>
                            <input class=" civanogly-input" type="text" id="name_tr" name="name_tr" >

                            @error('name_tr')
                            <p class="text-red-500 mt-2 text-sm"> {{$message}}</p>
                            @enderror
                            
                        </div>
                    </div>


                    <div class="mb-6">
                        <label class=" civanogly-label"for="featured_image">Featured Image</label>
                            <input class=" civanogly-input" type="file" id="featured_image" name="featured_image" >
                            @error('featured_image')
                            <p class="text-red-500 mt-2 text-sm"> {{$message}}</p>
                            @enderror
                    </div>

                    <div class="flex -mx-4 mb-6">
                        <div class="flex-1 px-4">
                            <label class=" civanogly-label"for="location_id">Location</label>
                            <select class=" civanogly-input" name="location_id" id="location_id">
                                
                                <option  value="">Select Location</option>
                               @foreach($locations as $location)
                                <option value="{{$location->id}}"> {{ $location->name}} </option>
                                @endforeach
                            </select>
                            
                            @error('location_id')
                            <p class="text-red-500 mt-2 text-sm"> {{$message}}</p>
                            @enderror
                        </div>

                        <div class="flex-1 px-4">
                            <label class=" civanogly-label"for="price"> Price </label>
                            <input class=" civanogly-input" type="number" id="price" name="price" class="civanogly-input">
                            @error('price')
                            <p class="text-red-500 mt-2 text-sm"> {{$message}}</p>
                            @enderror
                        </div>
                        <div class="flex-1 px-4">
                            <label class=" civanogly-label"for="sale"> For </label>
                            <select class=" civanogly-input" name="sale" id="sale">
                                <option  value="">Select Type</option>
                                <option  value="0">Rent</option>
                                <option value="1">Sale</option>
                            </select>
                            @error('sale')
                            <p class="text-red-500 mt-2 text-sm"> {{$message}}</p>
                            @enderror
                        </div>

                        <div class="flex-1 px-4">
                            <label class=" civanogly-label"for="type"> Type </label>
                            <select class=" civanogly-input" name="type" id="type">
                                <option  value="">Select Type</option>
                                <option  value="0">Land</option>
                                <option value="1">Apperment</option>
                                <option value="2">Villa</option>

                            </select>
                            @error('type')
                            <p class="text-red-500 mt-2 text-sm"> {{$message}}</p>
                            @enderror
                        </div>



                    </div>

                    <div class="flex -mx-4 mb-6">
                        <div class="flex-1 px-4">
                            <label class=" civanogly-label"for="bedrooms"> Bedrooms</label>
                            <select class=" civanogly-input" name="bedrooms" id="bedrooms">
                                <option  value="">Select Beedrooms</option>
                                <option value="2+1">2+1</option>
                                <option value="3+1">3+1</option>
                                <option value="4+1">4+1</option>
                                <option value="5+2">5+2</option>
                                <option value="4+2">4+2</option>
                            </select>
                            
                            @error('bedrooms')
                            <p class="text-red-500 mt-2 text-sm"> {{$message}}</p>
                            @enderror
                        </div>

                        <div class="flex-1 px-4">
                            <label class=" civanogly-label"for="bathrooms"> Bathrooms </label>
                            <select class=" civanogly-input" name="bathrooms" id="bathrooms">
                                <option  value="">Select Bathrooms</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>                                
                            </select>
                            @error('bathrooms')
                            <p class="text-red-500 mt-2 text-sm"> {{$message}}</p>
                            @enderror
                        </div>
                        <div class="flex-1 px-4">
                            <label class=" civanogly-label"for="net_sqm"> Net Sqaure Metter</label>
                            <input class=" civanogly-input" type="number" id="net_sqm" name="net_sqm" class="civanogly-input">

                            @error('net_sqm')
                            <p class="text-red-500 mt-2 text-sm"> {{$message}}</p>
                            @enderror
                        </div>

                        <div class="flex-1 px-4">
                            <label class=" civanogly-label"for="gross_sqm">  Gross Sqaure Metter </label>
                            <input class=" civanogly-input" type="number" id="gross_sqm" name="gross_sqm" class="civanogly-input">

                            @error('gross_sqm')
                            <p class="text-red-500 mt-2 text-sm"> {{$message}}</p>
                            @enderror
                        </div>
                        
                        <div class="flex-1 px-4">
                            <label class=" civanogly-label"for="pool"> Pool </label>
                            <select class=" civanogly-input" name="pool" id="pool">
                                <option  value=""> Select Pool</option>
                                <option value="1">No</option>
                                <option value="2">Privet</option>                                                             
                                <option value="3">public</option>                                                             
                                <option value="4">both</option>                                                             
                            </select>
                            @error('pool')
                            <p class="text-red-500 mt-2 text-sm"> {{$message}}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="flex -mx-4 mb-6">
                        <div class="flex-1 px-4">
                            <label class=" civanogly-label"for="overview">Overview</label>
                           <textarea class=" civanogly-input" name="overview" id="overview" cols="50" rows="3"></textarea>
                            @error('overview')
                            <p class="text-red-500 mt-2 text-sm"> {{$message}}</p>
                            @enderror
                        </div>

                        <div class="flex-1 px-4">
                            <label class=" civanogly-label"for="overview_tr"> Overview TR</label>
                           <textarea class=" civanogly-input" name="overview_tr" id="overview_tr" cols="50" rows="3"></textarea>
                            @error('overview_tr')
                            <p class="text-red-500 mt-2 text-sm"> {{$message}}</p>
                            @enderror
                        </div>
                    </div>


                    <div class="flex -mx-4 mb-6">
                        <div class="flex-1 px-4">
                            <label class=" civanogly-label"for="why_buy">Why Buy</label>
                           <textarea class=" civanogly-input" name="why_buy" id="why_buy" cols="50" rows="4"></textarea>
                            @error('why_buy')
                            <p class="text-red-500 mt-2 text-sm"> {{$message}}</p>
                            @enderror
                        </div>

                        <div class="flex-1 px-4">
                            <label class=" civanogly-label"for="why_buy_tr"> Why Buy TR</label>
                           <textarea class=" civanogly-input" name="why_buy_tr" id="why_buy_tr" cols="50" rows="4"></textarea>
                            @error('why_buy_tr')
                            <p class="text-red-500 mt-2 text-sm"> {{$message}}</p>
                            @enderror
                        </div>
                    </div>


                    <div class="flex -mx-4 mb-6">
                        <div class="flex-1 px-4">
                            <label class=" civanogly-label"for="description">Description</label>
                           <textarea class=" civanogly-input" name="description" id="description" cols="50" rows="5"></textarea>
                            @error('description')
                            <p class="text-red-500 mt-2 text-sm"> {{$message}}</p>
                            @enderror
                        </div>

                        <div class="flex-1 px-4">
                            <label class=" civanogly-label"for="description_tr">  Description TR</label>
                           <textarea class=" civanogly-input" name="description_tr" id="description_tr" cols="50" rows="5"></textarea>
                            @error('description_tr')
                            <p class="text-red-500 mt-2 text-sm"> {{$message}}</p>
                            @enderror
                        </div>
                    </div>

                    <button class=" btn" type="submit"> Save Property</button>



                </form>
            </div>
        </div>
    </div>
</x-app-layout>
