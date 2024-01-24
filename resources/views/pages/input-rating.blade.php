<x-app-layouts>
    <div>
       
        <h1 class="text-2xl font-bold text-center my-10">insert Rating</h1>


        <form class="max-w-sm mx-auto" method="post" action="{{ route("inputRating") }}">
            @csrf
            <div>
                <label for="author" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select your country</label>
                <select id="author" name="author" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    @foreach ($author as $item)
                        <option value="{{ $item->id }}">{{ $item->authorName }}</option>

                    @endforeach
                </select>
                </div>
            <div>
                <label for="book" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select your country</label>
                <select id="book" name="book" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    @foreach ($book as $item)
                        <option value="{{ $item->id }}">{{ $item->bookName }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label for="Rating" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select your country</label>
                <select id="Rating" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

                    @for ($i = 1; $i <= 10; $i += 1)
                        <option>{{ $i }}</option>
                    @endfor
                </select>
            </div>
            <div class="text-right">
                <button type="submit" class="mt-4 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium text-sm px-10 py-1 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
            </div>
        </form>
  
    </div>
</x-app-layouts>