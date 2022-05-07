<div x-data ="{show : false}">
    {{-- ---------------------Trigger------------------ --}}
     <button @click ='show= !show'
     class="py-2 pl-3  font-semibold text-left w-full lg:w-32 flex lg:inline-flex   " >
     {{isset($currentcategory) ? ucwords($currentcategory->name) : 'categories'

     }}
         <svg class="transform -rotate-90 absolute  inline-flex" style="right: 12px;" width="22"
         height="22" viewBox="0 0 22 22">
        <g fill="none" fill-rule="evenodd">
            <path stroke="#000" stroke-opacity=".012" stroke-width=".5" d="M21 1v20.16H.84V1z">
            </path>
            <path fill="#222"
                  d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z"></path>
        </g>
    </svg>
     </button>

     {{-- ---------------------------Category List------------------- --}}

     <div x-show = "show" @click.away="show = false" class="py-1 absolute rounded-xl w-full  bg-gray-100 z-50" style="display: none">
         @foreach ($categories as $category )


         <a href="/categories/{{$category->slug}}" class="block text-left px-3 text-sm leading-6 hover:bg-blue-500 focus:bg-blue-500 hover:text-white focus:text-white {{isset($currentcategory) && $currentcategory->is($category) ? 'bg-blue-500' :''}}">{{ucwords($category->name)}}</a>

         @endforeach



     </div>
 </div>
