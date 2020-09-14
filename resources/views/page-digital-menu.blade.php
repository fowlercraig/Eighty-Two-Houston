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
    @php echo wp_get_attachment_image( $image_one, 'large', '', array( 'class' => 'h-full w-full object-contain' ) ) @endphp
  </div>
</div>

@endsection
