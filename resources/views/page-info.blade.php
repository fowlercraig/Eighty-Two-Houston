@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())

  <div class="flex h-full">
  
    @include('partials.page-header')

    <article class="space-y-6 flex flex-col h-full w-full order-first">

      @include('partials.page-excerpt',['title' => get_field('excerpt')])

      <div class="h-1 bg-white bg-opacity-25"></div>

      <div class="space-y-4 h-full overflow-scroll">
        <div class="lg:grid grid-cols-3 gap-8">
          <div class="lg:col-span-2 prose lg:prose-lg xl:prose-xl max-w-none">
            @php(the_content())
            @include('partials.social-menu')
          </div>
          <div class="lg:col-span-1">
            <h2 class="text-xl font-medium uppercase mb-6">
              1201 Sant Emanuel St. Ste 110<br>
              Houston TX, 7703
            </h2>

            <div class="aspect-ratio aspect-ratio--1x1 relative">
              <iframe class="w-full h-full" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3463.975613694226!2d-95.35877228422792!3d29.749418939402467!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8640bf1f460a2885%3A0x13a736fd9a6e2095!2s1201%20St%20Emanuel%20St%20%23110%2C%20Houston%2C%20TX%2077003!5e0!3m2!1sen!2sus!4v1599144743035!5m2!1sen!2sus" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
          </div>
        </div>
      </div>

    </article>

  </div>
    
  @endwhile
@endsection
