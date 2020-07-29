<div class="page-header mb-8">
  <div class="md:h-header-sm xl:h-header-lg">
    @php $image = get_field('header_image'); $size = 'large'; @endphp
    @php echo wp_get_attachment_image( $image, $size, '', array( 'class' => 'w-full h-full object-cover' ) ) @endphp
  </div>
  <h1 class="sr-only">{!! $title !!}</h1>
</div>
