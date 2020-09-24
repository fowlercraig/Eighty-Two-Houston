@php
  $menuLocations = get_nav_menu_locations();
  $menuID = $menuLocations['social_navigation'];
  $primaryNav = wp_get_nav_menu_items($menuID); 
@endphp

<?php /*
<div class="flex space-x-2 items-center">
  @foreach ( $primaryNav as $navItem )
  @php 
    $str = $navItem->title;
    $str = strtolower($str);
  @endphp
    <a class="no-underline" href="@php echo $navItem->url @endphp" title="@php echo $navItem->title @endphp">
      @if (str_contains($str, 'icon-'))
      <i data-feather="@php echo str_replace('icon-','',$str) @endphp"></i>
      <span class="sr-only">@php echo $navItem->title @endphp</span>
      @else
      <span>@php echo $navItem->title @endphp</span>
      @endif
    </a>
  @endforeach
    <span>@eightytwohouston</span>
</div>

<div class="h-6 md:hidden"></div>
*/ ?>