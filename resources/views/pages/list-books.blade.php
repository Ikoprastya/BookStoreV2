<x-app-layouts>
    <div class="m-10">
        <div class="mb-4">
            <form class="max-w-sm ml-10"  method="post" action="{{ route('listBook') }}">
                @csrf
                <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 ">List Shown :</label>
                <select id="countries" name="list_shown" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[50%] p-2.5 " onchange="this.form.submit()">
                    <option>{{ $selectedValue }}</option>
                    @for ($i = 10; $i <= 100; $i += 10)
                        <option>{{ $i }}</option>
                    @endfor
                </select>
            </form>
        </div>
        <div>
            <form class="max-w-sm ml-10" method="post" action="{{ route('search') }}">
                @csrf
                <div class="mb-5">
                    <label for="search" class="block mb-2 text-sm font-medium text-gray-900 ">Search :</label>
                    <input type="search" id="search" name="search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[50%] p-2.5 ">
                </div>
                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium  text-sm w-full sm:w-auto px-10 py-1 text-center ">Submit</button>
            </form>
  
        </div>
    </div>

    <div class="m-10">


        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 ">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            No.
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Book Name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Category Name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Author Name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Average Rating
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Voter
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($list as $key => $item)
                        <tr class="odd:bg-white  even:bg-gray-50  border-b ">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                {{$key + 1}}
                            </th>
                            <td class="px-6 py-4">
                                {{ $item->bookName }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $item->categoryName }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $item->authorName }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $item->averageRating }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $item->voter }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        
    </div>



    

</x-app-layouts>


