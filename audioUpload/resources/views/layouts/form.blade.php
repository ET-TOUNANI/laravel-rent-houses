@extends('../app/app')
@section('content')
    

<div class=" min-h-screen flex items-center">
   <div class="w-full">
     <h2 class="text-center text-blue-400 font-bold text-2xl uppercase mb-10">add House</h2>
     <div class="bg-white p-10 rounded-lg shadow md:w-3/4 mx-auto lg:w-1/2">
       <form action="{{Route('house.store')}}" method="POST" enctype="multipart/form-data">
         @csrf
         <div class="mb-5">
           <label for="place" class="block mb-2 font-bold text-gray-600">place</label>
           <input type="text" required id="place" name="place" placeholder="place" class="border border-gray-300 shadow p-3 w-full rounded mb-">
         </div>

         <div class="mb-5">
           <label for="description" class="block mb-2 font-bold text-gray-600">description</label>
           <input type="text" required id="description" name="description" placeholder="description" class="border border-gray-300 shadow p-3 w-full rounded mb-">
           
         </div>
         <div class="mb-5">
           <label for="image" class="block mb-2 font-bold text-gray-600">image of the House</label>
           <input type="file" required id="image" name="image"  class="border border-gray-300 shadow p-3 w-full rounded mb-">
           
         </div>
         
         <div class="mb-5">
           <label for="tage" class="block mb-2 font-bold text-gray-600">nombre des tages</label>
           <input type="text" required id="tage" name="tage"  class="border border-red-300 shadow p-3 w-full rounded mb-">
          
         </div>

         <div class="mb-5">
           <label for="price"  class="block mb-2 font-bold text-gray-600">price</label>
           <input type="number"  required id="price" name="price"  class="border border-gray-300 shadow p-3 w-full rounded mb-">
           
         </div>

        
         <button class="block w-full bg-blue-500 text-white font-bold p-4 rounded-lg">Submit</button>
       </form>
     </div>
   </div>
 </div>
 @endsection
