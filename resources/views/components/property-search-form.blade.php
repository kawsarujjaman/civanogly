
       <form action="{{Route('properties')}}" method="GET" class="md:flex justify-between">
            <!-- @csrf //use for token "?_token=GH9izICLdgGHV5oAGEMfUmEKiEgGXjFjIKJc64Cq&sale=1&type=&price=&bedrooms=#" -->
            <div class="md:flex md:w-7/12 justify-between">
                <div class="flex flex-col md:mx-3">
                    <label class="hidden" for="sale"> Buy / Rent </label>
                    <select name="sale" id="sale" class="border-gray-500 md:border-0 focus:ring-0 py-1 px-3 md:px-6 mb-4 md:mb-0">
                        <option selected value="">Buy or Rent</option>
                        <option  {{request('sale')== '1' ? 'selected="selected"' : ''}} value="1">Buy</option>
                        <option  {{request('sale')== '0' ? 'selected="selected"' : ''}} value="0">Rent</option>
                    </select>
                </div>
              

                <div class="py-3 self-center border-gray-500 border hidden md:block"></div>
                <div class="flex flex-col md:mx-3">
                    <label class="hidden" for="location">  Location </label>
                    <select name="location" id="location" class="border-gray-500 md:border-0 focus:ring-0 py-1 px-3 md:px-6  mb-4 md:mb-0">
                        <option value="">location</option>
                      @foreach($locations as $location)
                      <option {{request('location')== $location->id ? 'selected="selected"' : ''}} value="{{$location->id}}">{{$location->name}}</option>
                      @endforeach
                    </select>
                </div>
                <div class="py-3 self-center border-gray-500 border hidden md:block"></div>
                <div class="flex flex-col md:mx-3">
                    <label class="hidden" for="type"> Property Type </label>
                    <select name="type" id="type" class="border-gray-500 md:border-0 focus:ring-0 py-1 px-3 md:px-6 mb-4 md:mb-0">
                        <option value="">Type</option>
                        <option {{request('type')== '0' ? 'selected="selected"' : ''}} value="0">Land</option>
                        <option {{request('type')== '1' ? 'selected="selected"' : ''}} value="1">Apertment</option>
                        <option {{request('type')== '2' ? 'selected="selected"' : ''}} value="2">Villa</option>
                    </select>
                </div>
                <div class="py-3 self-center border-gray-500 border hidden md:block"></div>
                <div class="flex flex-col md:mx-3">
                <label class="hidden" for="price"> Price </label>
                    <select name="price" id="price" class="border-gray-500 md:border-0 focus:ring-0 py-1 px-3 md:px-6 mb-4 md:mb-0">
                        <option value="">Price</option>
                        <option {{request('price')== '100000' ? 'selected="selected"' : ''}} value="100000">0-100000</option>
                        <option {{request('price')== '200000' ? 'selected="selected"' : ''}} value="200000">100001-200000</option>
                        <option {{request('price')== '300000' ? 'selected="selected"' : ''}} value="300000">200001-300000</option>
                        <option {{request('price')== '400000' ? 'selected="selected"' : ''}} value="400000">300001-400000</option>
                        <option {{request('price')== '500000' ? 'selected="selected"' : ''}} value="500000">400001-500000</option>
                        <option {{request('price')== '600000' ? 'selected="selected"' : ''}} value="600000">500000+ </option>

                     
                    </select>
                </div>
                <div class="py-3 self-center border-gray-500 border hidden md:block"></div>
                <div class="flex flex-col md:mx-3">
                <label class="hidden" for="bedrooms"> Bedrooms </label>
                    <select name="bedrooms" id="bedrooms" class="border-gray-500 md:border-0 focus:ring-0 py-1 px-3 md:px-6 mb-4 md:mb-0">
                        <option value="">Bedrooms</option>
                        <option {{request('bedrooms')== '5' ? 'selected="selected"' : ''}}  value="0"> 0 </option>
                        <option {{request('bedrooms')== '1' ? 'selected="selected"' : ''}}  value="1">1</option>
                        <option {{request('bedrooms')== '2' ? 'selected="selected"' : ''}}  value="2">2</option>
                        <option {{request('bedrooms')== '3' ? 'selected="selected"' : ''}}  value="3">3</option>
                        <option {{request('bedrooms')== '4' ? 'selected="selected"' : ''}}  value="4">4</option>
                       

                    </select>
                </div>
            </div>
            <div class="flex justify-between items-center md:w-5/12 md:ml-5">
                <input name="property_name" value="{{request('property_name')}}" type="search" placeholder="Try to search for something" class="rounded-lg px-4 py-2 w-full mr-4">
                <button class="border bg-gray-700 rounded-2xl text-white py-2 px-6" type="submit" class="btn">Search</button>
            </div>
        </form>
    