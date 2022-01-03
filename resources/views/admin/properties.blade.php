<x-app-layout>
    <x-slot name="header">
       <div class="flex justify-between item-center">
       <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Properties') }}
        </h2>
            <div class="min-w-max">
                <a class="fullwidth-btn bg-black text-white px-4 py-2 rounded" href="{{route('add-property')}}"> Add New Property </a>
            
             </div>
       </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                  <table class="table w-full table-auto mb-6">
                      <thead>
                          <tr>
                              <th class="border px-4 py-2"> Name </th>
                              <th class="border px-4 py-2"> Location </th>
                              <th class="border px-4 py-2"> Price </th>
                              <th style="width:250px" class="border px-4 py-2"> Action </th>
                          </tr>
                      </thead>

                      <tbody>
                         @foreach($properties as $property)
                          <tr>
                              <td class="border px-4 py-2"> {{$property->name}} </td>
                              <td class="border px-4 py-2"> {{$property->location->name}} </td>
                              <td class="border px-4 py-2"> {{$property->price}} </td>
                              <td class="border px-4 py-2">
                                   <a class="bg-blue-500 text-white px-4 py-2 text-sm rounded" href="{{route('edit-property', $property->id)}}"> Edit</a>
                                   <a class="bg-green-500 text-white px-4 py-2 text-sm rounded" href=" {{route('single_property', $property->id)}}" target="_blank" > View</a> 

                                   <form action="{{route('delete-property', $property->id)}}" method="post" onclick="return confirm('Do you really want to delete the property')" class="inline-block"> @csrf
                                       <button class="bg-red-500 text-white px-4 py-2 text-sm rounded"  type="submit"> Delete </button>
                                   </form>
                                  

                                </td>

                          </tr>
                         @endforeach
                      </tbody>
                  </table>
               {{$properties->links()}}

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
