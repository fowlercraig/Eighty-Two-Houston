@include('partials.header')

<div class="container">
  <main class="content-area main bg-black bg-opacity-50 container py-10">
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