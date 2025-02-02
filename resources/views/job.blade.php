<x-layout>
    <x-slot:heading>
        Job Offer
    </x-slot:heading>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-3 justify-center">
        @foreach ( $jobs as $job )
        <div class="max-w-lm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">

            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $job->title }}</h5>

            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $job->description }}</p>
            <hr>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"><b>Requirements:</b> <br>{{ $job->requirements }}</p>
            <hr>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"><b>Location:</b> {{ $job->location }}</p>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"><b>Status:</b> {{ $job->status }}</p>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"><b>Posted:</b> {{ $job->posted_at }}</p>

            <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Learn more
                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                </svg>
            </a>
        </div>
        @endforeach
    </div>
    <div class="flex justify-center my-5">
        <div class="pagination">
            {{ $jobs->links() }}
        </div>
    </div>
</x-layout>