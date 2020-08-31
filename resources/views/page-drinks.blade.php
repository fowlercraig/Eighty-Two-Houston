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

      <h3>Current Print Menu</h3>

      <div class="space-y-4 h-full overflow-scroll">
        <div class="grid grid-cols-2 lg:grid-cols-4 xl:grid-cols-4 gap-4">

          <?php $images = get_field('drinks'); ?>
          <?php foreach($images as $image): ?>
          <div class="aspect-ratio aspect-ratio--3x4 bg-black relative group">
            <div class="absolute inset-0 flex items-center justify-center transistion ease duration-200 opacity-0 bg-black bg-opacity-50 group-hover:opacity-100 z-30">
              <p class="font-medium"><?php echo get_the_title($image) ?></p>
            </div>
            <div class="absolute inset-0">
              <?php echo wp_get_attachment_image( $image, 'large', '', array( 'class' => 'w-full h-full object-cover object-center' ) ) ?>
            </div>
          </div>
          <?php endforeach; ?>
        </div>

      </div>

    </article>

  </div>
    
  @endwhile
@endsection
