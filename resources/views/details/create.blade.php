<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Books') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <h2>Add A Book</h2>

                <form class="space-y-4 text-gray-700" action="{{ route('books.store') }}" method="post"enctype="multipart/form-data">
                    @csrf
  <div class="flex flex-wrap">
    <div class="w-full">
      <label class="block mb-1" for="title">Title</label>
      <input 
      class="w-full h-10 px-3 text-base placeholder-gray-600 border rounded-lg focus:shadow-outline @error('title') is-invalid @enderror" 
      type="text" name="title" id="title" value="{{ old('title') }}" />
      @error('title') <div class="text-red-900">{{ $message }}</div> @enderror
    </div>
  </div>
  <div class="flex flex-wrap -mx-2 space-y-4 md:space-y-0">
    <div class="w-full px-2 md:w-1/2">
      <label class="block mb-1" for="first_name">first_name</label>
      <input class="w-full h-10 px-3 text-base placeholder-gray-600 border rounded-lg focus:shadow-outline  @error('author')  is-invalid @enderror"  
      type="text" id="author" name="author" value="{{ old('author') }}" />
      @error('author') <div class="text-red-900">{{ $message }}</div> @enderror
    </div>
    <div class="w-full px-2 md:w-1/2">
      <label class="block mb-1" for="middle_name">middle_name</label>
      <input class="w-full h-10 px-3 text-base placeholder-gray-600 border rounded-lg focus:shadow-outline  @error('price')  is-invalid @enderror"  
      type="number" id="price" name="price" value="{{ old('price') }}" />
      @error('price') <div class="text-red-900">{{ $message }}</div> @enderror
    </div>
  </div>
  <div class="w-full px-2 md:w-1/2">
      <label class="block mb-1" for="middle_name">surname</label>
      <input class="w-full h-10 px-3 text-base placeholder-gray-600 border rounded-lg focus:shadow-outline  @error('price')  is-invalid @enderror"  
      type="number" id="price" name="price" value="{{ old('price') }}" />
      @error('price') <div class="text-red-900">{{ $message }}</div> @enderror
    </div>
  </div>
  <div class="w-full px-2 md:w-1/2">
      <label class="block mb-1" for="middle_name">email</label>
      <input class="w-full h-10 px-3 text-base placeholder-gray-600 border rounded-lg focus:shadow-outline  @error('price')  is-invalid @enderror"  
      type="number" id="price" name="price" value="{{ old('price') }}" />
      @error('price') <div class="text-red-900">{{ $message }}</div> @enderror
    </div>
  </div>
  <div class="w-full px-2 md:w-1/2">
      <label class="block mb-1" for="middle_name">email2</label>
      <input class="w-full h-10 px-3 text-base placeholder-gray-600 border rounded-lg focus:shadow-outline  @error('price')  is-invalid @enderror"  
      type="number" id="price" name="price" value="{{ old('price') }}" />
      @error('price') <div class="text-red-900">{{ $message }}</div> @enderror
    </div>
  </div>
  <div class="w-full px-2 md:w-1/2">
      <label class="block mb-1" for="middle_name">phone</label>
      <input class="w-full h-10 px-3 text-base placeholder-gray-600 border rounded-lg focus:shadow-outline  @error('price')  is-invalid @enderror"  
      type="number" id="price" name="price" value="{{ old('price') }}" />
      @error('price') <div class="text-red-900">{{ $message }}</div> @enderror
    </div>
  </div>
  <div class="w-full px-2 md:w-1/2">
      <label class="block mb-1" for="middle_name">institution</label>
      <input class="w-full h-10 px-3 text-base placeholder-gray-600 border rounded-lg focus:shadow-outline  @error('price')  is-invalid @enderror"  
      type="number" id="price" name="price" value="{{ old('price') }}" />
      @error('price') <div class="text-red-900">{{ $message }}</div> @enderror
    </div>
  </div>
  <div class="w-full px-2 md:w-1/2">
      <label class="block mb-1" for="middle_name">qualification</label>
      <input class="w-full h-10 px-3 text-base placeholder-gray-600 border rounded-lg focus:shadow-outline  @error('price')  is-invalid @enderror"  
      type="number" id="price" name="price" value="{{ old('price') }}" />
      @error('price') <div class="text-red-900">{{ $message }}</div> @enderror
    </div>
  </div>
  <div class="w-full px-2 md:w-1/2">
      <label class="block mb-1" for="middle_name">course</label>
      <input class="w-full h-10 px-3 text-base placeholder-gray-600 border rounded-lg focus:shadow-outline  @error('price')  is-invalid @enderror"  
      type="number" id="price" name="price" value="{{ old('price') }}" />
      @error('price') <div class="text-red-900">{{ $message }}</div> @enderror
    </div>
  </div>
  <div class="w-full px-2 md:w-1/2">
      <label class="block mb-1" for="middle_name">duration_of_study</label>
      <input class="w-full h-10 px-3 text-base placeholder-gray-600 border rounded-lg focus:shadow-outline  @error('price')  is-invalid @enderror"  
      type="number" id="price" name="price" value="{{ old('price') }}" />
      @error('price') <div class="text-red-900">{{ $message }}</div> @enderror
    </div>
  </div>
 
    <div class="w-full px-2 md:w-1/3">
      <label class="block mb-1" for="formGridCode_year">Year of Leadership</label>
      <input class="w-full h-10 px-3 text-base placeholder-gray-600 border rounded-lg focus:shadow-outline  @error('year') is-invalid @else is-valid @enderror"  
      type="text" id="formGridCode_year" name="year" value="{{ old('year') }}" />
      @error('year') <div class="text-red-900">{{ $message }}</div> @enderror
    </div>
   </div>
    
    <button type="submit" class="w-full h-12 px-6 text-indigo-100 transition-colors duration-150 bg-indigo-700 rounded-lg focus:shadow-outline hover:bg-indigo-800">Submit</button>
  </div>
</form>
            </div>
        </div>
    </div>
</x-app-layout>
