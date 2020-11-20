{{--
  Template Name: Digital Menu
--}}

@extends('layouts.naked')
@section('content')

@php $images = get_field('menu_pages') @endphp

<div id="menu">
  @foreach ($images as $image)
    <div class="h-screen relative">
      @php echo wp_get_attachment_image( $image, 'large', '', array( 'class' => 'h-full w-full object-contain' ) ) @endphp
    </div>
  @endforeach
</div>

<div id="menu-controls" class="controls outline-none flex items-center justify-end container py-6 z-50 space-x-px fixed top-0 inset-x-0">
  <button data-controls="prev" class="prev w-12 h-12 border border-white rounded-full flex items-center justify-center bg-black transition ease duration-300">
    <i height="20" width="20" data-feather="chevron-left"></i>
    <span class="sr-only">Previous</span>
  </button>
  <button data-controls="next" class="next w-12 h-12 border border-white rounded-full flex items-center justify-center bg-black transition ease duration-300">
    <i height="20" width="20" data-feather="chevron-right"></i>
    <span class="sr-only">Next</span>
  </button>
</div>

@endsection
