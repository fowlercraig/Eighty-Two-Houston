@if($link)
<div class="text-lg sm:text-xl lg:text-2xl">
  <h3 class="uppercase font-medium tracking-wide">
    <a 
      class="border-b border-white border-opacity-25 hover:border-opacity-100 transition ease duration-300" 
      href="@php echo $link @endphp">@php echo $title @endphp</a>
  </h3>
</div>
@else
<div class="text-lg sm:text-xl lg:text-2xl">
  <h3 class="uppercase font-medium tracking-wide">@php echo $title @endphp</h3>
</div>
@endif