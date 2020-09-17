@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())

  <div class="flex h-full">
  
    @include('partials.page-header')

    <article class="space-y-6 flex flex-col h-full w-full order-first">

      @include('partials.page-excerpt',['title' => get_field('excerpt')])

      <div class="h-divider bg-white bg-opacity-25"></div>

      <div class="text-lg sm:text-xl lg:text-2xl">@php(the_content())</div>

      @include('partials.section-header',['title' => 'Past Events'])

      <div class="space-y-4 h-full overflow-scroll">
        <?php echo do_shortcode('[elfsight_instagram_feed id="1"]') ?>
      </div>

    </article>

  </div>
    
  @endwhile
@endsection
