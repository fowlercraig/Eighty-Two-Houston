@extends('layouts.app')

@php 
  global $blog_id;
  if($blog_id == 3) {
    // Los Angeles
    $grid = 'grid grid-cols-1 lg:grid-cols-2 gap-8';
    $col1 = 'col-span-1';
    $col2 = 'col-span-1';
  } else {
    $grid = 'grid grid-cols-1 lg:grid-cols-3 gap-8';
    $col1 = 'col-span-2';
    $col2 = 'col-span-1';
  }
@endphp

@section('content')
  @while(have_posts()) @php(the_post())

  <div class="block sm:flex h-full">

    @include('partials.page-header')

    <article class="space-y-6 h-full w-full order-first lg:overflow-scroll">

      @include('partials.page-excerpt',['title' => get_field('excerpt')])

      <div class="h-divider bg-white bg-opacity-10"></div>

      <div class="prose lg:prose-lg xl:prose-xl max-w-full">
        @php(the_content())
      </div>

      @include('partials.section-header',['title' => 'Current Lineup'])

      <div class="<?=$grid ?>">
        
        <div class="<?=$col1 ?>">
          @include('partials.games-arcade')
        </div>

        <div class="<?=$col2 ?>">
          @include('partials.games-pinball')
        </div>

      </div>

    </article>

  </div>

    
  @endwhile
@endsection
