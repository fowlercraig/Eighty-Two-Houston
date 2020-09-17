@if(is_front_page()) <div class="fixed lg:relative bottom-0 w-full"> @endif
<footer class="h-16 flex items-center">
  <div class="container text-sm sm:text-base">
    @php(dynamic_sidebar('sidebar-footer'))
  </div>
</footer>
@if(is_front_page()) </div> @endif