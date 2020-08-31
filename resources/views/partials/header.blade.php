
<header class="banner">
  <div class="container flex justify-between items-center h-36">
    <a class="brand" href="{{ home_url('/') }}">
      {{ $siteName }}
    </a>

    <nav class="nav-primary flex items-center space-x-3">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav inline-flex space-x-3', 'echo' => false]) !!}
      @endif
      <div>82</div>
    </nav>
  </div>
</header>
