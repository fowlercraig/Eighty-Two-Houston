@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())

  <div class="flex h-full">

    @include('partials.page-header')

    <article class="space-y-6 flex flex-col h-full w-full order-first">

      @include('partials.page-excerpt',['title' => get_field('excerpt')])

      <div class="h-divider bg-white bg-opacity-25"></div>

      @include('partials.section-header',['title' => 'Current Lineup'])

      <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 overflow-scroll">
        
        <div class="col-span-1 sm:h-full">
          @include('partials.games-arcade')
        </div>

        <div class="col-span-1 sm:h-full">
          @include('partials.games-pinball')
        </div>

      </div>

    </article>

  </div>

    
  @endwhile
@endsection
