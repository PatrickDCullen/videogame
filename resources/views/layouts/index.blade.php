@extends('layouts.app')

@section('content')
  <div class="container mx-auto px-4">
    <h2 class="text-blue-500 uppercase tracking-wide fond-semibold">Popular Games</h2>
    <div class="popular-games text-sm grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 xl:grid-cols-6 gap-12 border-b border-gray-800 pb-16">
      <div class="game mt-8">
        <div class="relative inline-block">
          <a href="#">
            <img src="#" alt="game cover" class="hover:opacity:75 transition ease-in-out duration-150">
          </a>
          <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full" style="right:-20px; bottom:-20px">
            <div class="font-semibold text-xs flex justify-center item-center h-full" >
              80%
            </div>
          
          </div>
        </div>
        <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">
          Name of game
        </a> 
        <div class="text-gray-400 mt-1">
          Console
        </div>
      </div>

    </div> <!-- end popular-games -->

    <div class="flex flex-col lg:flex-row my-10">
      <div class="recently-reviewed w-full lg:w-3/4 mr-0 lg:mr-32">
        <h2 class="text-blue-500 uppercase tracking-wide font-semibold">
          Recently Reviewed
        </h2>
        <div class="recently-reviewed-container space-y-12 mt-8">
          <div class="game bg-gray-800 rounded-lg shadow-md flex px-6 py-6">
            <div class="relative flex-none">
              <a href="#">
                <img src="#" alt="game cover" class="w-48 hover:opacity-75 transition ease-in-out duration-150">
              </a>
              <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-900 rounded-full" style="right:-20px; bottom:-20px">
                <div class="font-semibold text-xs flex justify-center item-center h-full" >
                  80%
                </div>
            
              </div>
            </div>
            <div class="ml-12">
              <a href="#" class="block text-lg font-semibold leading-tight hover:text-gray-400 mt-4">Final Fantasy VII Remake</a>
              <div class="text-gray-400 mt-1">Playstation 4</div>
              <p class="mt-6 text-gray-400 hidden lg:block">Brief description of game </p>
            </div>
          </div>
        </div>

      </div>
      <div class="most-anticipated w-full lg:w-1/4 mt-12 lg:mt-0">
        <h2 class="text-blue-500 uppercase tracking-wide font-semibold">
          Most Anticipated
        </h2>
        <div class="most-anticipated-container space-y-10 mt-8">
          <div class="game flex">
            <a href="#">
              <img src="#" alt="game cover" class="w-16 hover:opacity-75 transition ease-in-out duration-150">
            </a>
            <div class="ml-4">
              <a href="#" class="hover:text-gray-300">Cyberpunk 2077</a>
              <div class="text-gray-400 text-sm mt-1">Sept 16th 2020</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> <!-- end container -->
  
@endsection