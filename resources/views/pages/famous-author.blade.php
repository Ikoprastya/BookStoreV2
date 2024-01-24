<x-app-layouts>

    <div>

        <h1 class="text-2xl font-bold text-center my-10">Top 10 Most Famous Author</h1>

        <div class="relative overflow-x-auto mx-auto mt-10 w-[30%] shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 ">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            No.
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Author Name
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
                                {{ $item->authorName }}
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


