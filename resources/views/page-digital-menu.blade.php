{{--
  Template Name: Digital Menu
--}}

@extends('layouts.naked')
@section('content')

@php
  $image_one = get_field('menu_image');
  $image_two = get_field('menu_animation');
@endphp

<div class="h-screen relative bg-black">
  @if($image_two)
  <div class="absolute inset-0 z-20">
    <img class="h-full w-full object-contain" src="@php echo $image_two @endphp">
  </div>
  @endif
  <div class="absolute inset-0">
    <div id="menu" class="menu">
      <?php $images = get_field('menu_pages') ?>
      <?php foreach ($images as $image): ?>
      <div class="">
        @php echo wp_get_attachment_image( $image, 'large', '', array( 'class' => 'h-full w-full object-contain' ) ) @endphp
      </div>
      <?php endforeach; ?>
    </div>
    <div id="menu-controls" class="controls outline-none flex items-center justify-end p-4 z-50 space-x-px fixed top-0 inset-x-0">
      <button data-controls="prev" class="prev w-10 h-10 rounded-full flex items-center justify-center bg-black transition ease duration-300">
        <i height="16" width="16" data-feather="chevron-left"></i>
        <span class="sr-only">Previous</span>
      </button>
      <button data-controls="next" class="next w-10 h-10 rounded-full flex items-center justify-center bg-black transition ease duration-300">
        <i height="16" width="16" data-feather="chevron-right"></i>
        <span class="sr-only">Next</span>
      </button>
    </div>
  </div>
</div>

@endsection
