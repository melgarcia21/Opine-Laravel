<x-app-layout>
    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-4 text-gray-900">
                    <ul
                        class="flex flex-wrap text-sm font-medium text-center text-gray-500 dark:text-gray-400 justify-center">
                        <li class="me-2">
                            <a href="#" class="inline-block px-4 py-2 text-white bg-blue-600 rounded-lg active"
                                aria-current="page">All</a>
                        </li>

                        @foreach ($categories as $category)
                            <li class="me-2">
                                <a href="#"
                                    class="inline-block px-4 py-2 rounded-lg text-gray-800 hover:bg-gray-200">
                                    {{ $category->name }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <div class="mt-8 text-gray-900">
                @foreach ($posts as $post)
                    <div
                        class="flex bg-white shadow-sm rounded-lg mb-8">

                        <div class="p-5 flex-1">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">
                                    {{ $post->title }}
                                </h5>
                            </a>
                            <p class="mb-3 font-normal text-gray-700">
                                {{ Str::words($post->content, 20, '...') }}
                            </p>
                            <a href="#"
                                class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Read more
                                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg>
                            </a>
                        </div>
                        <a href="#">
                            <img class="w-48 h-full object-cover rounded-r-lg" 
                            src="https://flowbite.com/docs/images/blog/image-1.jpg" />
                        </a>
                    </div>
                @endforeach

                @empty
                    <div class="text-center py-16">
                        <p class="text-gray-400">No posts available.</p>
                    </div>
                @endforelse

            </div>

            {{ $posts->onEachSide(1)->links() }}
        </div>
    </div>

</x-app-layout>
