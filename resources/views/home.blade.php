@php
  $ca = get_field('location_1');
  $tx = get_field('location_2');
@endphp
<div x-data="{la:true,houston:false}" class="h-screen relative">
  <div class="absolute inset-0 flex items-center justify-center z-40">
    <div class="bg-black bg-opacity-50 flex items-center text-3xl uppercase tracking-wide">
      @php $commonClasses = 'p-10 block group-hover:underline' @endphp
      <div @mouseenter="{la=true;houston=false}" class="relative group" :class="{ 'underline': la, 'no-underline': !la }">
        <a class="@php echo $commonClasses @endphp" href="/la">@php echo $ca['title'] @endphp</a>
      </div>
      <div @mouseenter="{la=false;houston=true}" class="relative group" :class="{ 'underline': houston, 'no-underline': !houston }">
        <a class="@php echo $commonClasses @endphp" href="/houston">@php echo $tx['title'] @endphp</a>
      </div>
    </div>
  </div>
  <div class="absolute inset-0">
    <div 
      class="absolute inset-0 flex items-center justify-center" 
      x-description="Display background image on hover" 
      x-show="la" 
      x-transition:enter="transform transition ease duration-1000 sm:duration-1000" 
      x-transition:enter-start="opacity-0 scale-100" 
      x-transition:enter-end="opacity-100 scale-105" 
      x-transition:leave="transform transition ease duration-1000 sm:duration-1000" 
      x-transition:leave-start="opacity-100 scale-105" 
      x-transition:leave-end="opacity-0 scale-100"
    >
      @php echo wp_get_attachment_image( $ca['image'], 'large', '', array( 'class' => 'object-cover w-full h-full' ) ) @endphp
    </div>
    <div 
      class="absolute inset-0 flex items-center justify-center" 
      x-description="Display background image on hover" 
      x-show="houston" 
      x-transition:enter="transform transition ease duration-1000 sm:duration-1000" 
      x-transition:enter-start="opacity-0 scale-100" 
      x-transition:enter-end="opacity-100 scale-105" 
      x-transition:leave="transform transition ease duration-1000 sm:duration-1000" 
      x-transition:leave-start="opacity-100 scale-105" 
      x-transition:leave-end="opacity-0 scale-100"
    >
      @php echo wp_get_attachment_image( $tx['image'], 'large', '', array( 'class' => 'object-cover w-full h-full' ) ) @endphp
    </div>
  </div>
</div>