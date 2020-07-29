@include('partials.header')

<div class="font-sans m-0 bg-black text-gray-400 font-sans">
  <main class="main">
    @yield('content')
  </main>

  @hasSection('sidebar')
    <aside class="sidebar">
      @yield('sidebar')
    </aside>
  @endif
</div>

@include('partials.footer')
