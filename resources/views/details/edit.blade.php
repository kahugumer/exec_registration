<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Books') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <h2>Edit A Book</h2>

<form class="space-y-4 text-gray-700" action="{{ route('books.update',[$book],false) }}" method="post" enctype="multipart/form-data"> 
    @csrf
    @method('PUT')
<div class="flex flex-wrap">
<div class="w-full">
<label class="block mb-1" for="title">Title</label>
<input class="w-full h-10 px-3 text-base placeholder-gray-600 border rounded-lg focus:shadow-outline" 
type="text" name="title" id="title" value="{{ old('title') ?? $book->title }}" />
</div>
</div>
<div class="flex flex-wrap -mx-2 space-y-4 md:space-y-0">
<div class="w-full px-2 md:w-1/2">
<label class="block mb-1" for="author">Author</label>
<input class="w-full h-10 px-3 text-base placeholder-gray-600 border rounded-lg focus:shadow-outline" 
type="text" id="author" name="author" value="{{ old('author') ?? $book->author }}" />
</div>
<div class="w-full px-2 md:w-1/2">
<label class="block mb-1" for="price">Price</label>
<input class="w-full h-10 px-3 text-base placeholder-gray-600 border rounded-lg focus:shadow-outline" 
type="number" id="price" name="price" value="{{ old('price') ?? $book->price }}"  />
</div>
</div>

<div class="w-full px-2 md:w-1/3">
<label class="block mb-1" for="formGridCode_year">Year</label>
<input class="w-full h-10 px-3 text-base placeholder-gray-600 border rounded-lg focus:shadow-outline" 
type="text" id="formGridCode_year" name="year" value="{{ old('year') ?? $book->year }}"  />
</div>
<div class="w-full px-2 md:w-1/3">
<label class="block mb-1" for="image">Book</label>
<!--bu7l\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\<img src ='{{asset("storage/books/".$book->image)}}'/>width='50' height='50' class="img img-responsive"/>-->
<input class="w-full h-10 px-3 text-base placeholder-gray-600 border rounded-lg focus:shadow-outline" 
type="file" id="image" name="image" value="{{ old('asset($book->image') ?? $book->year }}"  />
</div>

<button type="submit" class="w-full h-12 px-6 text-indigo-100 transition-colors duration-150 bg-indigo-700 rounded-lg focus:shadow-outline hover:bg-indigo-800">Submit</button>
</div>
</form>
            </div>
        </div>
    </div>
</x-app-layout>
