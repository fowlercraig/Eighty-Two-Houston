{{--
  Template Name: Digital Menu
--}}

@extends('layouts.naked')
@section('content')

@php
  $image_one = get_field('menu_image');
  $image_two = get_field('menu_animation');
@endphp

<div class="max-w-xl mx-auto relative">
  <div class="aspect-ratio aspect-ratio--9x16 bg-black relative">
    <div class="absolute inset-0">
      <div class="absolute inset-0"><img src="@php echo $image_two @endphp"></div>
      @php echo wp_get_attachment_image( $image_one, 'large', '', array( 'class' => 'block h-full w-auto' ) ) @endphp
    </div>
  </div>
</div>

@endsection
