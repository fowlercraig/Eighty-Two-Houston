@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.page-header')
    <div class="container">
      <div class="prose">
        @includeFirst(['partials.content-page', 'partials.content'])
      </div>
      @include('partials.page-drinks')
    </div>
  @endwhile
@endsection
