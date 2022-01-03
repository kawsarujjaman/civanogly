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
            <form action="{{route('create-property')}}" method="post" class="p-6 bg-white border-b border-gray-200" enctype="multipart/form-data"> @csrf

                    <div class="flex -mx-4 mb-6">
                        <div class="flex-1 px-4">
                            <label class=" civanogly-label"for="name">Title  <span class="required-text">*</span> </label>
                            <input class=" civanogly-input" type="text" id="name" name="name" value="{{old('name')}}" required >
                            @error('name')
                            <p class="text-red-500 mt-2 text-sm"> {{$message}}</p>
                            @enderror
                        </div> 

                        <div class="flex-1 px-4">
                            <label class=" civanogly-label"for="name_tr">Title Turkish <span class="required-text">*</span></label>
                            <input class=" civanogly-input" type="text" id="name_tr" name="name_tr" value="{{old('name')}}" required >

                            @error('name_tr')
                            <p class="text-red-500 mt-2 text-sm"> {{$message}}</p>
                            @enderror
                            
                        </div>
                    </div>


                    <div class="mb-6">
                        <label class=" civanogly-label"for="featured_image">Featured Image  <span class="required-text">*</span></label>
                            <input class=" civanogly-input" type="file" id="featured_image" name="featured_image" required>
                            @error('featured_image')
                            <p class="text-red-500 mt-2 text-sm"> {{$message}}</p>
                            @enderror
                    </div>
                    <div class="mb-6">
                        <label class=" civanogly-label"for="gallery_image">Gallery Image  <span class="required-text">*</span></label>
                            <input class=" civanogly-input" type="file" id="gallery_image" name="gallery_image[]" multiple required>
                            @error('gallery_image')
                            <p class="text-red-500 mt-2 text-sm"> {{$message}}</p>
                            @enderror
                    </div>

                    <div class="flex -mx-4 mb-6">
                        <div class="flex-1 px-4">
                            <label class=" civanogly-label"for="location_id">Location  <span class="required-text">*</span></label>
                            <select class=" civanogly-input" name="location_id" id="location_id" required>
                                
                                <option  value="">Select Location</option>
                               @foreach($locations as $location)
                                <option {{old('location_id') == $location->id  ? 'selected="selected"':''}} value="{{$location->id}}" > {{ $location->name}} </option>
                                @endforeach
                            </select>
                            
                            @error('location_id')
                            <p class="text-red-500 mt-2 text-sm"> {{$message}}</p>
                            @enderror
                        </div>

                        <div class="flex-1 px-4">
                            <label class=" civanogly-label"for="price"> Price  <span class="required-text">*</span></label>
                            <input class=" civanogly-input" type="number" id="price" name="price"  value="{{old('price')}}" required >
                            @error('price')
                            <p class="text-red-500 mt-2 text-sm"> {{$message}}</p>
                            @enderror
                        </div>
                        <div class="flex-1 px-4">
                            <label class=" civanogly-label"for="sale"> For  <span class="required-text">*</span></label>
                            <select class=" civanogly-input" name="sale" id="sale" >
                                <option  value="">Select Type</option>
                                <option {{old('sale')== '0' ? 'selected="selected"':''}} value="0">Rent</option>
                                <option {{old('sale')== '1' ? 'selected="selected"':'' }} value="0">Sale</option>                                
                            </select>
                            @error('sale')
                            <p class="text-red-500 mt-2 text-sm"> {{$message}}</p>
                            @enderror
                        </div>

                        <div class="flex-1 px-4">
                            <label class=" civanogly-label"for="type"> Type </label>
                            <select class=" civanogly-input" name="type" id="type" >
                                <option  value="">Select Type</option>
                                <option {{old('type')== '0' ? 'selected="selected"':'' }} value="0">Land</option>
                                <option {{old('type')== '1' ? 'selected="selected"':'' }} value="1">Apperment</option>
                                <option {{old('type')== '2' ? 'selected="selected"':'' }} value="2">Villa</option>

                            </select>
                            @error('type')
                            <p class="text-red-500 mt-2 text-sm"> {{$message}}</p>
                            @enderror
                        </div>



                    </div>

                    <div class="flex -mx-4 mb-6">
                        <div class="flex-1 px-4">
                            <label class=" civanogly-label"for="drawingrooms"> Drawing Rooms</label>
                            <select class=" civanogly-input" name="drawingrooms" id="drawingrooms" required>
                                <option  value="">Select One</option>
                                @for($x=0; $x<=3; $x++)
                                <option {{old('drawingrooms')== $x ? 'selected="selected"' : ''}} value="{{$x}}"> {{$x}} </option>                                
                                @endfor                               
                            </select>
                            
                            @error('drawingrooms')
                            <p class="text-red-500 mt-2 text-sm"> {{$message}}</p>
                            @enderror
                        </div>

                        <div class="flex-1 px-4">
                            <label class=" civanogly-label"for="bedrooms"> Bedrooms</label>
                            <select class=" civanogly-input" name="bedrooms" id="bedrooms" required>
                                <option  value="">Select One</option>
                                @for($x=0; $x<=8; $x++)
                                <option {{old('bedrooms')== $x ? 'selected="selected"' : ''}} value="{{$x}}"> {{$x}} </option>                                
                                @endfor                                 
                            </select>
                            
                            @error('bedrooms')
                            <p class="text-red-500 mt-2 text-sm"> {{$message}}</p>
                            @enderror
                        </div>

                        <div class="flex-1 px-4">
                            <label class=" civanogly-label"for="bathrooms"> Bathrooms </label>
                            <select class=" civanogly-input" name="bathrooms" id="bathrooms" required>
                                <option  value="">Select Bathrooms</option>
                                <option  {{old('bathrooms')== '1' ? 'selected="selected"':'' }} value="1">1</option>
                                <option {{old('bathrooms')== '2' ? 'selected="selected"':'' }}  value="2">2</option>
                                <option {{old('bathrooms')== '3' ? 'selected="selected"':'' }}  value="3">3</option>                                
                            </select>
                            @error('bathrooms')
                            <p class="text-red-500 mt-2 text-sm"> {{$message}}</p>
                            @enderror
                        </div>
                        <div class="flex-1 px-4">
                            <label class=" civanogly-label"for="net_sqm"> Net Sqaure Metter</label>
                            <input class=" civanogly-input" type="number" id="net_sqm" name="net_sqm" value="{{old('net_sqm')}}" required >

                            @error('net_sqm')
                            <p class="text-red-500 mt-2 text-sm"> {{$message}}</p>
                            @enderror
                        </div>

                        <div class="flex-1 px-4">
                            <label class=" civanogly-label"for="gross_sqm">  Gross Sqaure Metter </label>
                            <input class=" civanogly-input" type="number" id="gross_sqm" name="gross_sqm" value="{{old('gross_sqm')}}" required >

                            @error('gross_sqm')
                            <p class="text-red-500 mt-2 text-sm"> {{$message}}</p>
                            @enderror
                        </div>
                        
                        <div class="flex-1 px-4">
                            <label class=" civanogly-label"for="pool"> Pool  <span class="required-text">*</span></label>
                            <select class=" civanogly-input" name="pool" id="pool" required>
                                <option  value=""> Select Pool</option>
                                <option  {{old('pool')== '1' ? 'selected="selected"':'' }} value="1">No</option>
                                <option  {{old('pool')== '2' ? 'selected="selected"':'' }} value="2">Privet</option>                                                             
                                <option  {{old('pool')== '3' ? 'selected="selected"':'' }} value="3">public</option>                                                             
                                <option  {{old('pool')== '4' ? 'selected="selected"':'' }} value="4">both</option>                                                             
                            </select>
                            @error('pool')
                            <p class="text-red-500 mt-2 text-sm"> {{$message}}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="flex -mx-4 mb-6">
                        <div class="flex-1 px-4">
                            <label class=" civanogly-label"for="overview">Overview  <span class="required-text">*</span> </label>
                           <textarea class=" civanogly-input" name="overview" id="overview" cols="50" rows="3" required > {{old('overview')}} </textarea>
                            @error('overview')
                            <p class="text-red-500 mt-2 text-sm"> {{$message}}</p>
                            @enderror
                        </div>

                        <div class="flex-1 px-4">
                            <label class=" civanogly-label"for="overview_tr"> Overview TR  <span class="required-text">*</span> </label>
                           <textarea class=" civanogly-input" name="overview_tr" id="overview_tr" cols="50" rows="3" required> {{old('overview_tr')}} </textarea>
                            @error('overview_tr')
                            <p class="text-red-500 mt-2 text-sm"> {{$message}}</p>
                            @enderror
                        </div>
                    </div>


                    <div class="flex -mx-4 mb-6">
                        <div class="flex-1 px-4">
                            <label class=" civanogly-label"for="why_buy">Why Buy <span class="required-text">*</span> </label>
                           <textarea class=" civanogly-input" name="why_buy" id="why_buy" cols="50" rows="4" required > {{old('why_buy')}} </textarea>
                            @error('why_buy')
                            <p class="text-red-500 mt-2 text-sm"> {{$message}}</p>
                            @enderror
                        </div>

                        <div class="flex-1 px-4">
                            <label class=" civanogly-label"for="why_buy_tr"> Why Buy TR  <span class="required-text">*</span></label>
                           <textarea class=" civanogly-input" name="why_buy_tr" id="why_buy_tr" cols="50" rows="4" required> {{old('why_buy_tr')}} </textarea>
                            @error('why_buy_tr')
                            <p class="text-red-500 mt-2 text-sm"> {{$message}}</p>
                            @enderror
                        </div>
                    </div>


                    <div class="flex -mx-4 mb-6">
                        <div class="flex-1 px-4">
                            <label class=" civanogly-label"for="description">Description  <span class="required-text">*</span></label>
                           <textarea class=" civanogly-input" name="description" id="description" cols="50" rows="5" required> {{old('description')}} </textarea>
                            @error('description')
                            <p class="text-red-500 mt-2 text-sm"> {{$message}}</p>
                            @enderror
                        </div>

                        <div class="flex-1 px-4">
                            <label class=" civanogly-label"for="description_tr">  Description TR  <span class="required-text">*</span></label>
                           <textarea class=" civanogly-input" name="description_tr" id="description_tr" cols="50" rows="5" required> {{old('description_tr')}} </textarea>
                            @error('description_tr')
                            <p class="text-red-500 mt-2 text-sm"> {{$message}}</p>
                            @enderror
                        </div>
                    </div>

                    <button class=" btn m-4" type="submit"> Save Property</button>



                </form>
            </div>
        </div>
    </div>
</x-app-layout>
