<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<script src="https://cdn.tailwindcss.com"></script>

<body class="h-full">
    <div x-data="setup()" x-init="$refs.loading.classList.add('hidden');">
        <div class="flex h-screen antialiased text-gray-900 bg-gray-100 dark:bg-dark dark:text-light">
            <div x-ref="loading"
                class="fixed inset-0 z-50 flex items-center justify-center text-2xl font-semibold text-white bg-blue-600">
                Loading.....
            </div>

            <div x-transition:enter="transform transition-transform duration-300"
                x-transition:enter-start="-translate-x-full"
                x-transition:enter-end="translate-x-0"
                x-transition:leave="transform transition-transform duration-300"
                x-transition:leave-start="translate-x-0"
                x-transition:leave-end="-translate-x-full"
                x-show="isSidebarOpen"
                class="fixed inset-y-0 z-10 flex w-80 mt-16">

                <svg class="absolute inset-0 w-full h-full text-white"
                    style="filter: drop-shadow(10px 0 10px #00000030)" preserveAspectRatio="none" viewBox="0 0 309 800"
                    fill="#1F2937" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M268.487 0H0V800H247.32C207.957 725 207.975 492.294 268.487 367.647C329 243 314.906 53.4314 268.487 0Z" />
                </svg>
                <!-- Sidebar content -->
                <div class="z-10 flex flex-col flex-1">
                    <div class="flex items-center justify-between flex-shrink-0 w-64 p-4">
                        <!-- Logo -->
                        <button @click="isSidebarOpen = false" class="p-1 rounded-lg focus:outline-none focus:ring">
                            <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="white">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12" />
                            </svg>
                            <span class="sr-only">Close sidebar</span>
                        </button>
                    </div>
                    <nav class="flex flex-col flex-1 w-64 p-4 mt-4">
                        <a href="/" class="rounded-md bg-gray-900 px-3 py-2 text-sm font-medium text-white" aria-current="page">Home</a>
                        <a href="/job" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Job</a>

                    </nav>
                    <div class="flex-shrink-0 p-4">
                    </div>
                </div>
            </div>
            <main class="flex-grow">
                <div class="h-full">
                    <nav class="fixed bg-gray-800 w-full">
                        <div class="px-4 sm:px-6 lg:px-8">
                            <div class="flex h-16 items-center justify-between">
                                <div class="flex items-center">
                                    <button @click="isSidebarOpen = true" class="p-2 text-white bg-black rounded-lg top-5 left-5">
                                        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                                        </svg>
                                        <span class="sr-only">Open menu</span>
                                    </button>
                                    <div class="flex-shrink-0 mx-3">
                                        <img class="h-8 w-8" src={{asset("assets/vectors/logo.svg")}} alt="RDC Logo">
                                    </div>
                                </div>
                                <div class="hidden md:block">
                                    <div class="ml-4 flex items-center md:ml-6">
                                        <button type="button" class="relative rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
                                            <span class="absolute -inset-1.5"></span>
                                            <span class="sr-only">View notifications</span>
                                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                                            </svg>
                                        </button>
                                        <!-- Profile dropdown -->
                                        <div class="relative ml-3">
                                            <div>
                                                <button type="button" class="relative flex max-w-xs items-center rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                                                    <span class="absolute -inset-1.5"></span>
                                                    <span class="sr-only">Open user menu</span>
                                                    <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="md:hidden" id="mobile-menu">
                            <div class="border-t border-gray-700 pb-3 pt-4">
                                <div class="flex items-center px-5">
                                    <div class="flex-shrink-0">
                                        <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                    </div>
                                    <div class="ml-3">
                                        <div class="text-base font-medium leading-none text-white">Tom Cook</div>
                                        <div class="text-sm font-medium leading-none text-gray-400">tom@example.com</div>
                                    </div>
                                    <button type="button" class="ml-auto flex-shrink-0 rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
                                        <span class="sr-only">View notifications</span>
                                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </nav>
                    <header class="bg-white shadow">
                        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                            <h1 class="text-3xl font-bold tracking-tight text-gray-900">Hello</h1>
                        </div>
                    </header>
                    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                        {{ $slot }}
                    </div>
                </div>
            </main>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/2.8.1/alpine.js"></script>
    <script>
        const setup = () => {
            return {
                isSidebarOpen: false,
            }
        }
    </script>
</body>

</html>