<!DOCTYPE html>
<html lang="en" class="bg-white antialiased">

<head>

  <meta name="theme-color" content="#ffffff" />
  <meta name="viewport" content="width=device-width" />
  <meta charSet="utf-8" />
  <meta name="twitter:site" content="@GPP_comics" />
  <meta name="twitter:description" content="A comic about the geek culture, work, love and life." />
  <meta name="twitter:creator" content="@GPP_comics" />
  <meta name="twitter:card" content="summary_large_image">
  <meta property="og:url" content="{{ $comic->url }}" />
  <meta property="og:type" content="article" />
  <meta property="og:description" content="A comic about the geek culture, work, love and life." />
  <meta property="og:image" content="/img/{{ $comic->filename }}" />
  <meta property="og:title" content="{{ $comic->title }}" />
  <meta property="og:site_name" content="GeekPlusPlus" />

  <title>GeekPlusPlus</title>
  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>

  <!-- Styles -->
  <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>

<body class="bg-gray-200 text-gray-600 work-sans leading-normal text-base tracking-normal">
  <!--Nav-->
  <nav id="header" class="container mx-auto lg:w-9/12 px-3 flex flex-wrap items-center mb-8 justify-between mt-0">
    <div class="md:flex md:items-center order-2 md:order-2" id="menu">
      <nav>
        <ul class="md:flex sm:hidden items-center justify-between text-base text-gray-700 pt-4 md:pt-0">
          <li class="">
            <a class="inline-block no-underline hover:text-black hover:underline md:py-2" href="https://twitter.com/GPP_comics">Twitter</a>
          </li>
        </ul>
      </nav>
    </div>

    <div class="order-1 md:order-1 relative">
      <img src="/img/logo.svg" style="top: 15px;" class="absolute w-12">

      <div class="mt-3" style="padding-left: 57px;">
        <a class="tracking-wide no-underline hover:no-underline font-bold text-gray-800 text-xl " href="/">GeekPlusPlus <span class="pl-5 text-gray-400">G++</span></a>
        <p class="text-sm">A comic about the geek culture, work, love and life.</p>
      </div>
    </div>
  </nav>

  <section class="container mx-auto md:px-6 pb-8 pt-4 lg:w-9/12">
    <div class="text-center">
      <p class="text-gray-900 text-xl pb-6">
        {{ $comic->title }}
        <a href="{{ $url }}" class="ml-3 inline-flex items-center px-3 py-1 rounded-full text-sm bg-white font-medium leading-4 text-green-900">#{{ $comic->id }}</a>
      </p>

      <div>
        @if ($url != $url_previous)
        <a href="{{ $url_previous }}" class="relative bg-white mr-2 py-2 px-3 border border-gray-300 rounded-md text-sm leading-4 font-medium text-gray-700 hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-50 active:text-gray-800 transition duration-150 ease-in-out">
          <svg class="w-4 inline" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M15.707 15.707a1 1 0 01-1.414 0l-5-5a1 1 0 010-1.414l5-5a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 010 1.414zm-6 0a1 1 0 01-1.414 0l-5-5a1 1 0 010-1.414l5-5a1 1 0 011.414 1.414L5.414 10l4.293 4.293a1 1 0 010 1.414z" clip-rule="evenodd" />
          </svg>
          Previous
        </a>
        @endif

        <a href="/random" class="relative bg-white py-2 mr-2 px-3 border border-gray-300 rounded-md text-sm leading-4 font-medium text-gray-700 hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-50 active:text-gray-800 transition duration-150 ease-in-out">
          <svg class="w-4 inline" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M4 2a1 1 0 011 1v2.101a7.002 7.002 0 0111.601 2.566 1 1 0 11-1.885.666A5.002 5.002 0 005.999 7H9a1 1 0 010 2H4a1 1 0 01-1-1V3a1 1 0 011-1zm.008 9.057a1 1 0 011.276.61A5.002 5.002 0 0014.001 13H11a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0v-2.101a7.002 7.002 0 01-11.601-2.566 1 1 0 01.61-1.276z" clip-rule="evenodd" />
          </svg>
          Random
        </a>

        @if ($url != $url_next)
        <a href="{{ $url_next }}" class="relative bg-white py-2 px-3 border border-gray-300 rounded-md text-sm leading-4 font-medium text-gray-700 hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-50 active:text-gray-800 transition duration-150 ease-in-out">
          <svg class="w-4 inline" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M10.293 15.707a1 1 0 010-1.414L14.586 10l-4.293-4.293a1 1 0 111.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z" clip-rule="evenodd" />
            <path fill-rule="evenodd" d="M4.293 15.707a1 1 0 010-1.414L8.586 10 4.293 5.707a1 1 0 011.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z" clip-rule="evenodd" />
          </svg>
          Next
        </a>
        @endif
      </div>
    </div>

    <div class="w-full p-6 text-center">
      <img src="/img/{{ $comic->filename }}" style="margin: 0 auto;">
    </div>

    <nav class="w-full z-30 top-0 px-6 py-1">
      <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 px-2 py-3">
        <div class="w-2/3">
          <p>{{ $comic->comment }}</p>
        </div>
      </div>
    </nav>
  </section>

  <footer class="container mx-auto md:w-9/12 px-3 flex text-sm pb-8">
    <div class="border bg-white md:flex border-gray-400 rounded p-4">
      <div class="w-full lg:w-1/2">
        <div class="px-3 md:px-0">
          <h3 class="font-bold text-gray-900">About</h3>
          <p class="py-4">
            GeekPlusPlus, its content and all the images are licensed under a Creative Commons Attribution-NonCommercial 2.5 License. Feel free to share these images at will, but don’t sell them.
          </p>
        </div>
      </div>
      <div class="w-full lg:w-1/2 lg:justify-end lg:text-right">
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
  </footer>

  <!-- Fathom - beautiful, simple website analytics -->
  <script src="https://cdn.usefathom.com/script.js" data-site="SCSOQNZQ" defer></script>
</body>

</html>
