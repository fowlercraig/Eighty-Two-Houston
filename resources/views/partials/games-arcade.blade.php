@php

  $args = array(
    'posts_per_page'   => -1,
    'order'            => 'ASC',
    'orderby'          => 'name',
    'category__not_in' => array(6)
  );

  $parent = new WP_Query( $args );

@endphp

@php 
  global $blog_id;
  if($blog_id == 3) {
    // If Los Angeles
    $classes = 'grid grid-cols-2 md:grid-cols-2';
  } else {
    $classes = 'grid grid-cols-2 md:grid-cols-2 xl:grid-cols-3';
  }
@endphp

<div class="lg:flex">
  
  <div class="text-xl sm:text-4xl lg:text-5xl relative mb-4 md:mb-12 lg:space-y-4 flex lg:block items-center lg:border-r-2 border-white border-opacity-10 mr-10 pr-10">
    <div class="w-6 lg:w-12 mr-2 lg:mx-auto">
      <img src="@asset('images/arcade.svg')" class="">
    </div>
    <h1 class="font-medium lg:writing-mode-vertical lg:mx-auto mr-6 leading-10">
      <span class="text-white uppercase block">Arcade</span>
    </h1>
  </div>

  <div class="w-full">
    <ul class="<?=$classes ?> text-xs sm:text-sm xl:text-base uppercase font-medium">
      @if ( $parent->have_posts() )
      @php while ( $parent->have_posts() ) : $parent->the_post(); @endphp
      <li><?php the_title(); ?></li>
      @php endwhile; @endphp
      @php endif; wp_reset_postdata(); @endphp
    </ul>
  </div>

</div>