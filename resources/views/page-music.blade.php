@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())

  <div class="flex h-full">
  
    @include('partials.page-header')

    <article class="space-y-6 h-full w-full order-first md:overflow-scroll">

      @include('partials.page-excerpt',['title' => get_field('excerpt')])

      <div class="h-divider bg-white bg-opacity-10"></div>

      <div class="prose lg:prose-lg xl:prose-xl max-w-none">
        @php(the_content())
        @include('partials.social-menu')
      </div>

      @include('partials.section-header',['title' => 'Past Events'])

      <div class="space-y-4 pb-8">
        <?php echo do_shortcode('[elfsight_instagram_feed id="1"]') ?>
      </div>

    </article>

  </div>
    
  @endwhile
@endsection
