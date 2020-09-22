@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())

  <div class="flex h-full">
  
    @include('partials.page-header')

    <article class="space-y-8 flex flex-col h-full w-full order-first">

      @include('partials.page-excerpt',['title' => get_field('excerpt')])

      <div class="h-divider bg-white bg-opacity-10"></div>

      @include('partials.section-header',['title' => 'Current Print Menu'])

      <div class="space-y-4 h-full overflow-scroll">
        <div class="grid grid-cols-2 lg:grid-cols-4 xl:grid-cols-4">

          <?php $images = get_field('drinks'); ?>
          <?php foreach($images as $image): ?>
          <div class="relative group">
            <div class="absolute inset-0 flex items-center justify-center transistion ease duration-200 opacity-0 bg-black bg-opacity-50 group-hover:opacity-100 z-30">
              <p class="font-medium"><?php echo get_the_title($image) ?></p>
            </div>
            <div class="relative">
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
