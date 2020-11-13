@php global $blog_id @endphp

@if($blog_id == 1)

@include('home')

@else

<div id="swup" class="transition-fade main h-full">

@include('partials.header')

<div class="container">
  
  <main class="@if(!is_page('reservations')) content-area @endif main @if(!is_front_page()) bg-black bg-opacity-50 container py-4 md:py-10 @endif overflow-hidden">
    @yield('content')
  </main>

  @hasSection('sidebar')
    <aside class="sidebar">
      @yield('sidebar')
    </aside>
  @endif
</div>

@include('partials.footer')
@include('partials.background')

</div>

@endif