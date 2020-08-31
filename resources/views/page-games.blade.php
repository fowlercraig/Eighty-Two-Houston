@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())

  <article class="space-y-8 flex flex-col h-full">

    <header class="prose prose-sm sm:prose lg:prose-lg xl:prose-xl max-w-none">
      <h2><span class="text-white">@php (the_field('excerpt'))</span></h2>
    </header>

    <div class="h-1 bg-white bg-opacity-25"></div>

    <div class="space-y-4 h-full overflow-scroll">
      <div class="prose prose-sm sm:prose lg:prose-lg max-w-none">
        @php(the_content())
      </div>
      <div class="flex flex-wrap">
        <?php
          $args = array(
            'posts_per_page' => -1,
            'order'          => 'ASC',
            'orderby'        => 'name'
          );
          $parent = new WP_Query( $args );
          if ( $parent->have_posts() ) : 
          while ( $parent->have_posts() ) : $parent->the_post();
        ?>
        <div class="w-1/3">
          <span>@php(the_title())</span>
        </div>
        <?php endwhile; ?>
        <?php endif; wp_reset_postdata(); ?>
      </div>
    </div>

  </article>

    
  @endwhile
@endsection
