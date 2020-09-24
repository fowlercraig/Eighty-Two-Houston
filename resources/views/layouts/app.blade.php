@include('partials.header')

<div class="container">
  
  <main class="content-area main @if(!is_front_page()) bg-black container py-4 md:py-10 @endif overflow-hidden">
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