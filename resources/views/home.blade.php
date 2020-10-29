<!DOCTYPE html>
<html lang="en" class="bg-white antialiased">

<head>

    <meta name="theme-color" content="#ffffff" />
    <meta name="viewport" content="width=device-width" />
    <meta charSet="utf-8" />
    <meta name="twitter:site" content="@tailwindcss" />
    <meta name="twitter:description" content="A utility-first CSS framework for rapidly building custom user interfaces." />
    <meta name="twitter:creator" content="@tailwindcss" />
    <meta property="og:url" content="https://tailwindcss.com/" />
    <meta property="og:type" content="article" />
    <meta property="og:description" content="A utility-first CSS framework for rapidly building custom user interfaces." />
    <meta property="og:image" content="https://tailwindcss.com/_next/static/media/twitter-large-card.2e0e43628f69eba639f387da72c3e323.png" />

    <title>GeekPlusPlus</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>

<body class="bg-white text-gray-600 work-sans leading-normal text-base tracking-normal">
    <!--Nav-->
    <nav id="header" class="w-full z-30 top-0 py-1 md:pb-12">
        <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 px-6 py-3">

            <div class="md:flex md:items-center md:w-auto w-full order-2 md:order-2" id="menu">
                <nav>
                    <ul class="md:flex items-center justify-between text-base text-gray-700 pt-4 md:pt-0">
                        <li><a class="inline-block no-underline hover:text-black hover:underline md:py-2 md:px-4" href="#">Twitter</a></li>
                        <li><a class="inline-block no-underline hover:text-black hover:underline md:py-2 md:px-4" href="#">Instagram</a></li>
                    </ul>
                </nav>
            </div>

            <div class="order-1 md:order-1">
                <a class="tracking-wide no-underline hover:no-underline font-bold text-gray-800 text-xl " href="/">GeekPlusPlus <span class="pl-5 text-gray-400">G++</span></a>

                <p class="text-sm">A comic about the geek culture, work, love and life.</p>
            </div>
        </div>
    </nav>


    <section class="bg-white py-8">
        <div class="container mx-auto flex items-center flex-wrap pt-4 pb-12">
            <p class="w-full text-center text-gray-600 text-xl " href="#">
                {{ $comic->title }}
                <a href="{{ $url }}" class="ml-3 inline-flex items-center px-3 py-1 rounded-full text-sm font-medium leading-4 bg-gray-200 text-green-900">#{{ $comic->id }}</a>
            </p>

            <div class="w-full p-6 flex flex-col">
                <img src="/img/{{ $comic->filename }}" alt="">
            </div>

            <nav class="w-full z-30 top-0 px-6 py-1">
                <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 px-2 py-3">

                    <div class="w-2/3">
                        <p>{{ $comic->comment }}</p>
                    </div>

                    <div class="w-1/3 text-right">
                        <a href="/random" class="relative py-2 px-3 border border-gray-300 rounded-md text-sm leading-4 font-medium text-gray-700 hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-50 active:text-gray-800 transition duration-150 ease-in-out">
                            <svg class="w-4 inline" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M4 2a1 1 0 011 1v2.101a7.002 7.002 0 0111.601 2.566 1 1 0 11-1.885.666A5.002 5.002 0 005.999 7H9a1 1 0 010 2H4a1 1 0 01-1-1V3a1 1 0 011-1zm.008 9.057a1 1 0 011.276.61A5.002 5.002 0 0014.001 13H11a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0v-2.101a7.002 7.002 0 01-11.601-2.566 1 1 0 01.61-1.276z" clip-rule="evenodd" />
                            </svg>
                            Random
                        </a>
                    </div>
                </div>
            </nav>
        </div>
    </section>

    <footer class="container mx-auto bg-white py-8 border-t border-gray-400">
        <div class="container flex px-3 py-8 ">
            <div class="w-full mx-auto flex flex-wrap">
                <div class="flex w-full lg:w-1/2 ">
                    <div class="px-3 md:px-0">
                        <h3 class="font-bold text-gray-900">About</h3>
                        <p class="py-4">
                            GeekPlusPlus, its content and all the images are licensed under a Creative Commons Attribution-NonCommercial 2.5 License. Feel free to share these images at will, but don’t sell them.
                        </p>
                    </div>
                </div>
                <div class="flex w-full lg:w-1/2 lg:justify-end lg:text-right">
                    <div class="px-3 md:px-0">
                        <h3 class="font-bold text-gray-900">What?</h3>
                        <ul class="list-reset items-center pt-3">
                            <li>
                                <a class="inline-block no-underline hover:text-black hover:underline py-1" href="#">Since 2020.</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Fathom - beautiful, simple website analytics -->
    <script src="https://cdn.usefathom.com/script.js" data-site="SCSOQNZQ" defer></script>
</body>

</html>
