<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
   
    <link href="{{ mix('css/main.css') }}" rel="stylesheet"/>
    <script src="{{ asset('js/app.js') }}" defer></script>
    @livewireStyles
   
</head>
<body>

     @include('sidebar') 
     <div class="flex flex-col w-0 flex-1 overflow-hidden">
    <div class="md:hidden pl-1 pt-1 sm:pl-3 sm:pt-3">
      <button class="-ml-0.5 -mt-0.5 h-12 w-12 inline-flex items-center justify-center rounded-md text-gray-500 hover:text-gray-900 focus:outline-none focus:bg-gray-200 transition ease-in-out duration-150" aria-label="Open sidebar">
        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
      </button>
    </div>
     <main class="flex-1 relative z-0 overflow-y-auto focus:outline-none" tabindex="0">
      <div class="pt-3 pb-6 md:py-6">
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
        <!--<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <h1 class="text-2xl font-semibold text-gray-900">Trending</h1>
        </div>-->

        <!------ Dashboard changes are done here---->
          <!-- Replace with your content -->
          <div class="py-4">
            <div class="flex">

                <div class="lg:flex-1 lg:mx-10" style="max-width: 700px">
                  
                 @yield('content')

                
                </div>
                <div class="lg:w-1/4 bg-blue-100 rounded-lg p-4">
                    @include('friends-list')
                </div>   
          </div>
          <!-- /End replace -->
        </div>
      </div>
    </main>
    </div>
    </div>
    @livewireScripts   
</body>
<script>
window.live.on('publish_tweets-l',addtweets()=>$('body'));
</script>
</html>
