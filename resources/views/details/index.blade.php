<x-app-layout>
@push('css')
    <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css">
    @endpush
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Books') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
               <!-- component -->
<div class="max-w-7xl mx-auto">
    <div class="inline-block min-w-full py-2 align-middle">
    <!--<Export type="button" href="{{ route('books.create') }}" class="h-10 px-5 m-2 text-indigo-100 transition-colors duration-150 bg-indigo-700 rounded-lg focus:shadow-outline hover:bg-indigo-800"></Export To PDF></a>-->
    <a type="button" href="{{ route('books.create') }}" class="h-10 px-5 m-2 text-indigo-100 transition-colors duration-150 bg-indigo-700 rounded-lg focus:shadow-outline hover:bg-indigo-800">Add Book</a>

        <!-- <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg"> -->
          <!--Must add id to the table-->
        <table id="booksTable" class="min-w-full divide-y divide-gray-300">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">#</th>
                        <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900">first_name</th>
                        <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">middle_name</th>
                        <th scope="col" class="px-3 py-3.5 text-center text-sm font-semibold text-gray-900">surname</th>
                        <th scope="col" class="px-3 py-3.5 text-center text-sm font-semibold text-gray-900">phone</th>
                        <th scope="col" class="px-3 py-3.5 text-center text-sm font-semibold text-gray-900">institution</th>
                        <th scope="col" class="px-3 py-3.5 text-center text-sm font-semibold text-gray-900">qualification</th>
                        <th scope="col" class="px-3 py-3.5 text-center text-sm font-semibold text-gray-900">course</th>
                        <th scope="col" class="px-3 py-3.5 text-center text-sm font-semibold text-gray-900">duration_of_study</th>
                        <th scope="col" class="px-3 py-3.5 text-center text-sm font-semibold text-gray-900">year_of_leadership</th>
                                                <span class="sr-only">Actions</span>
                        </th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200 bg-white">
                    @foreach($books as $book)
                    <tr>
                        <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-semibold text-gray-900 sm:pl-6">{{ $loop->iteration }}</td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $book->title }}</td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm">
                            {{ $book->author }}
                        </td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm">
                            {{ $book->price }}
                        </td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm">
                            {{ $book->year }}
                        </td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm">
                            <img src ='{{asset("storage/books/".$book->image)}}' width='50' height='50' class="img img-responsive"/>
                        </td>
                        
                        <!-- <td class="whitespace-nowrap px-3 py-4 text-sm">
                            <span class="flex justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
                            </span>
                        </td> -->
                        <td class="py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
                            <div class="inline-block text-left" x-data="{ menu: false }">
                                <button x-on:click="menu = ! menu" type="button" class="flex items-center text-gray-400 hover:text-gray-600 focus:outline-none" id="menu-button" aria-expanded="true" aria-haspopup="true">
                                    <span class="sr-only"></span>
                                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                                    </svg>
                                </button>
                                <div x-show="menu" x-on:click.away="menu = false" class="origin-top-right absolute right-32 mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 divide-y divide-gray-100 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                                    <div class="" role="none">
                    <form id="books_form" method="POST" action="{{ route('books.destroy',[$book]) }}">
                    @csrf
                    @method('DELETE')

                    <a href="{{ route('books.destroy',[$book]) }}"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Delete') }}
                    </a>
                </form>
                                    </div>
                                    <div class="" role="none">
                                        <a href="{{ route('books.edit',[$book],false) }}" class="text-gray-500 font-medium hover:text-gray-900 hover:bg-gray-50 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-0">
                                            Edit
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        <!-- </div> -->
    </div>
</div>
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>
                </div>
            </div>
        </div>
    </div>
    @push('scripts')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" ></script>
    <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js" ></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>

    <script>
        $(document).ready( function () {
    $('#booksTable').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });
} );
    </script>

    @endpush
</x-app-layout>
