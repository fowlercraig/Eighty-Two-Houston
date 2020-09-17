<header class="banner relative z-20" x-data="{ open: false }">
  <div class="container flex justify-between items-center h-16 md:h-24 lg:h-36 relative z-20">
    <a class="brand" href="{{ home_url('/') }}">
      <img alt="EightyTwo" src="@asset('images/eightytwologo-red.svg')" class="h-6 md:h-10 lg:h-16 w-auto">
    </a>

    <nav class="nav-primary flex items-center space-x-2 lg:space-x-6">

      <button @click="open = !open" class="inline-flex md:hidden items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:bg-gray-700 focus:text-white transition duration-150 ease-in-out" x-bind:aria-label="open ? 'Close main menu' : 'Main menu'" aria-label="Main menu" x-bind:aria-expanded="open">
      <!-- Icon when menu is closed. -->
      <svg x-state:on="Menu open" x-state:off="Menu closed" :class="{ 'hidden': open, 'block': !open }" class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
      </svg>
      <!-- Icon when menu is open. -->
      <svg x-state:on="Menu open" x-state:off="Menu closed" :class="{ 'hidden': !open, 'block': open }" class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
      </svg>
      </button>

      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav hidden lg:inline-flex text-lg space-x-4 uppercase tracking-wider font-medium', 'echo' => false]) !!}
      @endif
      <img src="@asset('images/82logo.svg')" class="h-6 md:h-10 lg:h-16 w-auto">
    </nav>
  </div>
  <div 
    x-description="Mobile menu, toggle classes based on menu state." 
    x-state:on="Menu open" 
    x-state:off="Menu closed" 
    :class="{ 'block': open, 'hidden': !open }" 
    class="fixed top-0 w-full bg-black z-10 block md:hidden">
    <div class="h-16"></div>
    <div class="container">
      <div class="h-divider bg-white bg-opacity-25"></div>
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'py-6 text-lg uppercase tracking-wider font-medium', 'echo' => false]) !!}
      @endif
    </div>
  </div>
</header>

