@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())

  <div class="flex h-full">

    @include('partials.page-header')

    <article class="space-y-6 h-full w-full order-first lg:overflow-scroll">

      @include('partials.page-excerpt',['title' => get_field('excerpt')])

      <div class="h-divider bg-white bg-opacity-10"></div>

      <div class="prose lg:prose-lg xl:prose-xl max-w-full">
        @php(the_content())
        @include('partials.social-menu')
      </div>

      @include('partials.section-header',['title' => 'Current Lineup'])

      <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        
        <div class="col-span-2">
          @include('partials.games-arcade')
        </div>

        <div class="col-span-1">
          @include('partials.games-pinball')
        </div>

      </div>

    </article>

  </div>

    
  @endwhile
@endsection
