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
                <form action="{{route('create-property')}}" method="POST" class="p-6 bg-white border-b border-gray-200"> @csrf

                    <div class="flex -mx-4 mb-6">
                        <div class="flex-1 px-4">
                            <label class=" civanogly-label"for="name">Title</label>
                            <input class=" civanogly-input" type="text" id="name" name="name" class="civanogly-input">
                            @error('name')
                            <p class="text-red-500 mt-2 text-sm"> {{$message}}</p>
                            @enderror
                        </div>

                        <div class="flex-1 px-4">
                            <label class=" civanogly-label"for="bnName">Bangla Title</label>
                            <input class=" civanogly-input" type="text" id="bnName" name="bnName" class="civanogly-input">

                            @error('bnName')
                            <p class="text-red-500 mt-2 text-sm"> {{$message}}</p>
                            @enderror
                            
                        </div>
                    </div>


                    <div class="mb-6">
                        <label class=" civanogly-label"for="featured_image">Featured Image</label>
                            <input class=" civanogly-input" type="file" id="featured_image" name="featured_image" class="civanogly-input">
                            @error('featured_image')
                            <p class="text-red-500 mt-2 text-sm"> {{$message}}</p>
                            @enderror
                    </div>

                    <div class="flex -mx-4 mb-6">
                        <div class="flex-1 px-4">
                            <label class=" civanogly-label"for="location_id">Location</label>
                            <select class=" civanogly-input" name="location_id" id="location_id">
                                <option  value="">Select Location</option>
                                <option value="">Select Location</option>

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
                                <option value="">2+1</option>
                                <option value="">3+1</option>
                                <option value="">4+1</option>
                                <option value="">5+2</option>
                                <option value="">4+2</option>
                            </select>
                            
                            @error('bedrooms')
                            <p class="text-red-500 mt-2 text-sm"> {{$message}}</p>
                            @enderror
                        </div>

                        <div class="flex-1 px-4">
                            <label class=" civanogly-label"for="bathrooms"> Bathrooms </label>
                            <select class=" civanogly-input" name="bathrooms" id="bathrooms">
                                <option  value="">Select Bathrooms</option>
                                <option value="">1</option>
                                <option value="">2</option>
                                <option value="">3</option>                                
                            </select>
                            @error('bathrooms')
                            <p class="text-red-500 mt-2 text-sm"> {{$message}}</p>
                            @enderror
                        </div>
                        <div class="flex-1 px-4">
                            <label class=" civanogly-label"for="net_sql"> Net Sqaure Metter</label>
                            <input class=" civanogly-input" type="number" id="net_sql" name="net_sql" class="civanogly-input">

                            @error('net_sql')
                            <p class="text-red-500 mt-2 text-sm"> {{$message}}</p>
                            @enderror
                        </div>

                        <div class="flex-1 px-4">
                            <label class=" civanogly-label"for="gross_sql">  Gross Sqaure Metter </label>
                            <input class=" civanogly-input" type="number" id="gross_sql" name="gross_sql" class="civanogly-input">

                            @error('type')
                            <p class="text-red-500 mt-2 text-sm"> {{$message}}</p>
                            @enderror
                        </div>
                        
                        <div class="flex-1 px-4">
                            <label class=" civanogly-label"for="poll"> Poll </label>
                            <select class=" civanogly-input" name="poll" id="poll">
                                <option  value=""> Select Poll</option>
                                <option value="">Yes</option>
                                <option value="">No</option>                                                             
                            </select>
                            @error('bathrooms')
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
                            <label class=" civanogly-label"for="bnOverview">Bangla Overview</label>
                           <textarea class=" civanogly-input" name="bnOverview" id="bnOverview" cols="50" rows="3"></textarea>
                            @error('bnOverview')
                            <p class="text-red-500 mt-2 text-sm"> {{$message}}</p>
                            @enderror
                        </div>
                    </div>


                    <div class="flex -mx-4 mb-6">
                        <div class="flex-1 px-4">
                            <label class=" civanogly-label"for="whyBuy">Why Buy</label>
                           <textarea class=" civanogly-input" name="whyBuy" id="whyBuy" cols="50" rows="4"></textarea>
                            @error('whyBuy')
                            <p class="text-red-500 mt-2 text-sm"> {{$message}}</p>
                            @enderror
                        </div>

                        <div class="flex-1 px-4">
                            <label class=" civanogly-label"for="bnwhyBuy">Bangla Why Buy</label>
                           <textarea class=" civanogly-input" name="bnwhyBuy" id="bnwhyBuy" cols="50" rows="4"></textarea>
                            @error('bnwhyBuy')
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
                            <label class=" civanogly-label"for="description"> Bangla Description</label>
                           <textarea class=" civanogly-input" name="description" id="description" cols="50" rows="5"></textarea>
                            @error('description')
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
