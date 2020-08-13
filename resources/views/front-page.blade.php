@extends('layouts.app')
@section('content')

@php $sections = get_field('sections') @endphp

<div class="space-y-10">
@foreach($sections as $section)

  <section>
    <div class="header-sm lg:h-header-xl relative overflow-hidden">
      <div class="absolute inset-0 bg-gradient-t-black-75 z-10"></div>
      <div class="relative">
        @php $image = $section['hero_image']; $size = 'large'; @endphp
        @php echo wp_get_attachment_image( $image, $size, '', array( 'class' => 'w-full h-full object-cover object-center' ) ) @endphp
      </div>
    </div>
    <div class="container lg:-mt-20 relative space-y-6 z-20">
      <div class="bg-black-75 leading-13 px-4 py-3 -ml-4 inline-flex">
        <h1 class="text-6xl font-bold text-white">@php echo $section['title'] @endphp</h1>
      </div>
      <div class="prose">
        @php echo $section['description'] @endphp
      </div>
      @php $link = $section['link'] @endphp
      <a 
        class="inline-flex font-semibold border-b border-white-50 text-white hover:border-white transition ease duration-300" 
        href="@php echo $link['url'] @endphp">@php echo $link['title'] @endphp</a>
    </div>
  </section>

@endforeach
</div>

@endsection
