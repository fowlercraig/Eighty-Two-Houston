@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())

  <div class="h-full">
  
    @include('partials.page-header')

    <article class="space-y-6 flex flex-col h-full w-full order-first">

      @include('partials.page-excerpt',['title' => get_field('excerpt')])

      <div class="h-1 bg-white bg-opacity-25"></div>

      <div class="space-y-4 h-full overflow-scroll prose lg:prose-lg xl:prose-xl max-w-none">
        @php(the_content())
        @include('partials.social-menu')
      </div>

    </article>

  </div>
    
  @endwhile
@endsection
