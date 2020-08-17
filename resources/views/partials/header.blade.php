<div x-data="{mobileMenuOpen:false}">
  @if(is_front_page())
  <header role="banner" class="banner absolute inset-x-0 text-white z-50">
  @else
  <header role="banner" class="banner relative inset-x-0 text-white bg-black">
  @endif
    <div class="container flex justify-between py-4 md:py-6 items-center">
      <h1 class="relative z-10 flex items-center">
        <span class="sr-only">{{ $siteName }}</span>
        <a class="brand" href="{{ home_url('/') }}">
          <img class="w-12 sm:w-20 block" src="@asset('images/82logo.svg')">
        </a>
        @if (is_page() && !is_front_page())
        <span class="text-3xl text-gray-500 font-light leading-7 ml-3 tracking-tight">| @php the_title() @endphp</span>
        @endif
      </h1>
      <div class="-mr-2 -my-2 md:hidden">
        <button @click="mobileMenuOpen = true" type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
          <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
          </svg>
        </button>
      </div>
      <div class="hidden md:block">
        <nav class="primary">
          @if (has_nav_menu('primary_navigation'))
            {!! wp_nav_menu([
              'theme_location'  => 'primary_navigation', 
              'menu_class'      => 'nav flex space-x-2 lg:space-x-4 font-bold tracking-tight text-xl lg:text-2xl border-b-2 border-white-25', 
              'echo'            => false
            ]) !!}
          @endif
        </nav>
        <nav class="secondary">
          <ul class="flex space-x-1 items-center justify-end font-bold tracking-tight text-sm pt-1 text-white-50">
            <li><a href="//www.facebook.com/eightytwola/"><span class="sr-only">Facebook</span><i height="18" data-feather="facebook"></i></a></li>
            <li><a href="//www.instagram.com/EightyTwoLA/"><span class="sr-only">Instagram</span><i height="18" data-feather="instagram"></i></a></li>
            <li><a href="//twitter.com/EightyTwoLA"><span class="sr-only">Twitter</span><i height="18" data-feather="twitter"></i></a></li>
            <li><a href="/private-events">Private Events</a></li>
          </ul>
        </nav>
      </div>
    </div>
  </header>

  <div x-description="Mobile menu, show/hide based on mobile menu state." x-show="mobileMenuOpen" x-transition:enter="duration-200 ease-out" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="duration-100 ease-in" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95" class="absolute top-0 right-0 p-2 transition transform origin-top-right md:hidden z-50 bg-black pb-6 max-w-lg">
    <div class="container space-y-6">
      <div class="flex justify-end items-center">
        <div class="-mr-3 my-3 md:hidden">
          <button @click="mobileMenuOpen = false" type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
          </button>
        </div>
      </div>
      <nav class="primary border-b border-white-25 pb-6">
        @if (has_nav_menu('primary_navigation'))
          {!! wp_nav_menu([
            'theme_location'  => 'primary_navigation', 
            'menu_class'      => 'text-white text-2xl tracking-tight font-bold leading-tight', 
            'echo'            => false
          ]) !!}
        @endif
      </nav>
      <nav class="secondary">
        <ul class="flex space-x-1 items-center justify- font-bold tracking-tight text-sm pt-1 text-white-50">
          <li><a href="//www.facebook.com/eightytwola/"><span class="sr-only">Facebook</span><i height="18" data-feather="facebook"></i></a></li>
          <li><a href="//www.instagram.com/EightyTwoLA/"><span class="sr-only">Instagram</span><i height="18" data-feather="instagram"></i></a></li>
          <li><a href="//twitter.com/EightyTwoLA"><span class="sr-only">Twitter</span><i height="18" data-feather="twitter"></i></a></li>
          <li class="w-full order-first"><a href="/private-events">Private Events</a></li>
        </ul>
      </nav>
    </div>
  </div>
</div>
