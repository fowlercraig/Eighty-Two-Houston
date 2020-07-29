<div class="bg-gray-900 rounded p-3 flex items-center space-x-2 bg-opacity-75">
  <div class="h-16 w-16 rounded-full bg-gray-800 overflow-hidden">
    @php $image = get_post_thumbnail_id();; $size = 'thumbnail'; @endphp
    @php echo wp_get_attachment_image( $image, $size, '', array( 'class' => 'w-full h-full object-cover' ) ) @endphp
  </div>
  <div class="content leading-5 text-sm font-medium text-gray-600">
    <div>@php foreach((get_the_category()) as $category) { echo $category->cat_name; } @endphp</div>
    <h3 class="text-lg font-bold text-white">@php the_title() @endphp</h3>
    <div>@php the_field('maker') @endphp | @php the_field('year') @endphp</div>
  </div>
</div>