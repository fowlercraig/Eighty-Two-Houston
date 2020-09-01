
<header class="banner">
  <div class="container flex justify-between items-center h-16 md:h-24 lg:h-36">
    <a class="brand" href="{{ home_url('/') }}">
      <img alt="EightyTwo" src="@asset('images/eightytwologo-red.svg')" class="h-6 md:h-10 lg:h-16 w-auto">
    </a>

    <nav class="nav-primary flex items-center space-x-2 lg:space-x-6">
      <button class="block lg:hidden">
        <span class="sr-only">Menu</span>
        <i data-feather="menu"></i>
      </button>
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav hidden lg:inline-flex text-lg space-x-4 uppercase tracking-wider font-medium', 'echo' => false]) !!}
      @endif
      <img src="@asset('images/82logo.svg')" class="h-6 md:h-10 lg:h-16 w-auto">
    </nav>
  </div>
</header>
