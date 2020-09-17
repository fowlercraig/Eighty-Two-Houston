@php

  $args = array(
    'posts_per_page'   => -1,
    'order'            => 'ASC',
    'orderby'          => 'name',
    'category__not_in' => array(6)
  );

  $parent = new WP_Query( $args );

@endphp

<div class="lg:flex">
  
  <div class="text-xl sm:text-4xl lg:text-5xl relative mb-4 md:mb-12 lg:space-y-4 flex lg:block items-center lg:border-r-2 border-white border-opacity-25 mr-10 pr-10">
    <div class="w-6 lg:w-12 mr-2 lg:mx-auto">
      <img src="@asset('images/arcade.svg')" class="">
    </div>
    <h1 class="font-medium lg:writing-mode-vertical lg:mx-auto mr-6 leading-10">
      <span class="text-white uppercase block">Arcade</span>
    </h1>
  </div>

  <div class="w-full">
    <ul class="grid grid-cols-2 md:grid-cols-2 lg:grid-cols-2 col-gap-4 text-xs sm:text-sm xl:text-lg uppercase font-medium">
      @if ( $parent->have_posts() )
      @php while ( $parent->have_posts() ) : $parent->the_post(); @endphp
      <li><?php the_title(); ?></li>
      @php endwhile; @endphp
      @php endif; wp_reset_postdata(); @endphp
    </ul>
  </div>

</div>