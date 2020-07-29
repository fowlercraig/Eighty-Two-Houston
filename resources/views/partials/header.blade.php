@if(is_front_page())
<header role="banner" class="banner absolute inset-x-0 text-white">
@else
<header role="banner" class="banner relative inset-x-0 text-white bg-black">
@endif
  <div class="container flex justify-between py-4 md:py-6 items-center">
    <h1 class="relative z-10 flex items-center">
      <span class="sr-only">{{ $siteName }}</span>
      <a class="brand" href="{{ home_url('/') }}">
        <img class="w-16 sm:w-20 block" src="@asset('images/82logo.svg')">
      </a>
      @if (is_page() && !is_front_page())
      <span class="text-3xl text-gray-700 font-light leading-7 ml-3">| @php the_title() @endphp</span>
      @endif
    </h1>
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
      <nav class="primary">
        @if (has_nav_menu('primary_navigation'))
          {!! wp_nav_menu([
            'theme_location'  => 'primary_navigation', 
            'menu_class'      => 'nav flex justify-end space-x-2 font-bold tracking-tight text-sm pt-px text-white-50', 
            'echo'            => false
          ]) !!}
        @endif
      </nav>
    </div>
  </div>
</header>
