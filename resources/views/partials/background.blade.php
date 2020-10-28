<div class="fixed inset-0" style="z-index: -1">
  <div class="aspect-ratio aspect-ratio--9x16 block sm:hidden">
    <div class="absolute inset-0">
      @php echo wp_get_attachment_image( get_field('background_image_mobile',6), 'large', '', array( 'class' => 'object-cover w-full h-full opacity-75' ) ) @endphp
    </div>
  </div>
  @php echo wp_get_attachment_image( get_field('background_image',6), 'large', '', array( 'class' => 'object-cover w-full h-full opacity-75 hidden sm:block' ) ) @endphp
</div>