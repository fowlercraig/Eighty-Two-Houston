@php $gallery_1 = get_field('gallery_1') @endphp
@php $gallery_2 = get_field('gallery_2') @endphp
@php $imagesize = 'large' @endphp

<section class="pt-12">
  <header class="prose prose-lg border-b border-gray-600 mb-0 pb-2">
    <h2 class="">Craft Cocktails</h2>
  </header>
  <div class="grid grid-cols-1 md:grid-cols-2 gap-6 prose-sm sm:prose max-w-none">
    <div class="grid grid-cols-2 gap-8">
      <div class="">@php the_field('column_1') @endphp</div>
      <div class="">@php the_field('column_2') @endphp</div>
    </div>
    <div class="carousel-cocktails">
      @foreach ($gallery_1 as $image)
      <div>@php echo wp_get_attachment_image( $image, $imagesize, '', array( 'class' => 'block' ) ) @endphp</div>
      @endforeach
    </div>
  </div>
</section>

<section class="pt-12">
  <header class="prose prose-lg border-b border-gray-600 mb-0 pb-2">
    <h2 class="">Beers & Other Drinks</h2>
  </header>
  <div class="grid grid-cols-1 md:grid-cols-2 gap-6 prose-sm sm:prose max-w-none lg:order-last">
    <div class="grid grid-cols-2 gap-8">
      <div class="">@php the_field('column_3') @endphp</div>
      <div class="">@php the_field('column_4') @endphp</div>
    </div>
    <div class="carousel-drinks">
      @foreach ($gallery_2 as $image)
      <div>@php echo wp_get_attachment_image( $image, $imagesize, '', array( 'class' => 'block' ) ) @endphp</div>
      @endforeach
    </div>
  </div>
</section>