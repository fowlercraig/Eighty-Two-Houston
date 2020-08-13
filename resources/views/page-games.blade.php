@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.page-header')
    <div class="container">
      <div class="prose">
        @includeFirst(['partials.content-page', 'partials.content'])
      </div>
    </div>
  @endwhile
  <div class="container pt-8">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3 gap-4">

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
      @include('partials.video-game')
      <?php endwhile; ?>
      <?php endif; wp_reset_postdata(); ?>
    </div>
  </div>
@endsection
