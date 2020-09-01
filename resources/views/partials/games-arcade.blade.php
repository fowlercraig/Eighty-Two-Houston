@php

  $args = array(
    'posts_per_page'   => -1,
    'order'            => 'ASC',
    'orderby'          => 'menu_order',
    'category__not_in' => array(6)
  );

  $parent = new WP_Query( $args );

@endphp

<div class="lg:flex">
  
  <div class="text-4xl lg:text-5xl relative mb-12 lg:space-y-4 flex lg:block items-center lg:border-r-4 border-white border-opacity-25 mr-10 pr-10">
    <div class="h-12 w-12 bg-red-600 lg:mx-auto"></div>
    <h1 class="font-medium lg:writing-mode-vertical lg:mx-auto mr-6 leading-10">
      <span class="text-white uppercase block">Arcade</span>
    </h1>
  </div>

  <div class="w-full">
    <ul class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-2 text-base md:text-lg uppercase font-medium">
      @if ( $parent->have_posts() )
      @php while ( $parent->have_posts() ) : $parent->the_post(); @endphp
      <li><?php the_title(); ?></li>
      @php endwhile; @endphp
      @php endif; wp_reset_postdata(); @endphp
    </ul>
  </div>

</div>