@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())

  <div class="lg:flex h-full">
  
    @include('partials.page-header')

    <article class="space-y-8 flex flex-col h-full w-full order-first">

      <header class="text-3xl sm:text-3xl lg:text-3xl xl:text-4xl leading-tight">
        <h2><span class="text-white uppercase font-medium">@php (the_field('excerpt'))</span></h2>
      </header>

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
