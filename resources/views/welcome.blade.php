<x-guest-layout>
<div class="relative z-10 pt-52 pb-64 bg-cover bg-center" style="background-image: url(img/bg.jpeg)"> 
    <div class="absolute h-full w-full bg-black opacity-75 top-0 left-0"></div>
        <div class="container relative z-20 text-white text-center text-2xl">
            <h2 class="text-5xl font-bolder pb-5">Lorem ipsum -- dolor sit amet <br> consectetur adipisicing elit. Fugiat, blanditiis.</h2>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perferendis, molestias!</p>
        </div>

</div>

     <!-- Search From Area -->
    <div class="rounded-lg container bg-white p-4 relative ml-10 -m-10 z-30 shadow-lg">
       @include('components.property-search-form', ['locations'=> $locations])
    </div>


<div class="py-32 px-28 text-center">
    <div class="container">
      <div class="px-32">
            <h2 class="text-3xl font-bold px-24 pb-6" > Lorem ipsum dolor sit amet consectetur adipisicing elit get Quick help from  <span class="underline" > Smart Search </span> </h2>
            <p class="text-xl mb-6 text-gray-500" >Lorem, ipsum dolor sit amet consectetur adipisicing elit. </p>

            <a class="border-2 rounded-2xl text-xl py-2 px-6 border-gray-700 inline-block" href=""> Start the review </a>

            <h2 class="text-3xl font-bold px-24 pb-10 pt-24" > Lorem ipsum dolor sit amet consectetur adipisicing elit Exercitationem magni? </h2>

            <div class="flex ">
                <div class="flex-1 px-12">
                    <h4 class="font-bold text-xl" >Lorem ipsum dolor sit amet</h4>
                    <p class="text-gray-400" >Lorem ipsum dolor sit amet consectetur adipisicing  </p>
                </div>

                <div class="flex-1 px-12 ">
                    <h4 class="font-bold text-xl" >Lorem ipsum dolor sit amet</h4>
                    <p class="text-gray-400" >Lorem ipsum dolor sit amet consectetur adipisicing  </p>
                </div>

                <div class="flex-1 px-12">
                    <h4 class="font-bold text-xl" >Lorem ipsum dolor sit amet</h4>
                    <p class="text-gray-400" >Lorem ipsum dolor sit amet consectetur adipisicing  </p>
                </div>

            </div>

            <div class="flex py-6 ">
                <div class="flex-1 px-12">
                    <h4 class="font-bold text-xl" >Lorem ipsum dolor sit amet</h4>
                    <p class="text-gray-400" >Lorem ipsum dolor sit amet consectetur adipisicing  </p>
                </div>

                <div class="flex-1 px-12 ">
                    <h4 class="font-bold text-xl" >Lorem ipsum dolor sit amet</h4>
                    <p class="text-gray-400" >Lorem ipsum dolor sit amet consectetur adipisicing  </p>
                </div>

                <div class="flex-1 px-12">
                    <h4 class="font-bold text-xl" >Lorem ipsum dolor sit amet</h4>
                    <p class="text-gray-400" >Lorem ipsum dolor sit amet consectetur adipisicing  </p>
                </div>

            </div>
      </div>


        <h2 class="text-3xl font-bold py-12" > More information about us </h2>
        <img class="h-60 w-full " src="img/imageplay.jpg" alt="">
        <p class="py-12">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores <strong> sapiente placeat ab totam fugit </strong> praesentium labore nesciunt deleniti voluptatum, sed nulla, accusantium aspernatur ipsam, eaque ex. Sequi fugit quas officiis maxime architecto accusantium. Sapiente, voluptatem praesentium!<strong> Tenetur nostrum exercitationem </strong>consequuntur autem, esse recusandae laudantium fuga molestiae quaerat, nulla harum in.</p>

        <div class="flex px-24 m-auto  flex-row " >
            <div class="flex-1 w-28">
                <p class=" bg-black text-white w-6 m-auto border rounded-full">1 </p>
                <p class="font-bold">Using <span class="underline"> Smart search</span> </p>
            </div>

            <div class="flex-1 w-28">
                <p class=" bg-black text-white w-6 m-auto border rounded-full">2 </p>
                <p class="font-bold">Using <span class="underline"> Smart search</span> </p>
            </div>

            <div class="flex-1 w-28">
                <p class=" bg-black text-white w-6 m-auto border rounded-full">3 </p>
                <p class="font-bold">Using <span class="underline"> Smart search</span> </p>
            </div>

            <div class="flex-1">
                <p class=" bg-black text-white w-6 m-auto border rounded-full text-center">4 </p>
                <p class="font-bold">Using <span class="underline"> Smart search</span> </p>
            </div>


        </div>

        <p class="p-12">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur molestiae deserunt quia, explicabo minus autem quaerat iure totam quam maxime nemo quae deleniti eos omnis. explicabo minus autem quaerat iure totam quam maxime nemo quae deleniti eos omnis</p>


        <div class="flex">
            <div class="flex-1">
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Animi laudantium harum saepe. Facere est, unde perspiciatis recusandae officiis totam et delectus, voluptates eum sapiente temporibus a adipisci architecto nam omnis.</p>
            </div>
            <div class="flex-1">
                <div class="flex">
                    <div class="flex-1">
                        <img class="ml-10 z-50 rotate-45 rounded-br-lg rounded-bl-3xl rounded-tl-lg rounded-tr-3xl" src="img/indoor1.jfif" alt="">
                    </div>
                    <div class="flex-1">
                        <img  class="mr-10 z-0 transform rotate-6 rounded-br-lg rounded-bl-3xl rounded-tl-lg rounded-tr-3xl" src="img/indoor2.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>


        <div class="flex pt-14">
            <div class="flex-1">
                <a  class="border-2 bg-gray-700 text-white py-3 px-12 rounded-xl" href=""> Start searching with filters </a>
            </div>
            <p class="font-bold text-2xl">or</p>
            <div class="flex-1">
                <a class="border-2 border-gray-700 py-3 px-12 rounded-xl" href=""> Start searching on the map </a>
            </div>
        </div>

        <h2 class="text-3xl font-bold px-24 pb-6 mt-14 text-center" > Last added objects </h2>
        <div class="flex flex-wrap mb-6 mx-4">

            @foreach($latest_properties as $property )
            @include('components.single-property-card', ['property'=> $property])     
           
            @endforeach
        </div>
            
        
            </div>

        </div>



    </div>
</div>


</x-guest-layout>