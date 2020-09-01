@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())

  <div class="lg:flex h-full">
  
    @include('partials.page-header')

    <article class="space-y-8 flex flex-col h-full w-full order-first">

      @include('partials.page-excerpt',['title' => get_field('excerpt')])

      <div class="h-1 bg-white bg-opacity-25"></div>

      <div class="space-y-4 h-full overflow-scroll">
        <div class="prose prose-sm sm:prose lg:prose-lg max-w-none">
          @php(the_content())
        </div>
        <div class="h-64 bg-white"></div>
        <div class="h-64 bg-white"></div>
        <div class="h-64 bg-white"></div>
        <div class="h-64 bg-white"></div>
        <div class="h-64 bg-white"></div>
        <div class="h-64 bg-white"></div>
        <div class="h-64 bg-white"></div>
      </div>

    </article>

  </div>
    
  @endwhile
@endsection
