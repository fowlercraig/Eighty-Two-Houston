@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())

  <div class="flex h-full">
  
    @include('partials.page-header')

    <article class="space-y-6 flex flex-col h-full w-full order-first">

      @include('partials.page-excerpt',['title' => get_field('excerpt')])

      <div class="h-divider bg-white bg-opacity-25"></div>

      <div class="space-y-4 h-full overflow-scroll">
        <div class="lg:grid grid-cols-3 gap-8">
          <div class="col-span-2 prose lg:prose-lg xl:prose-xl max-w-none mb-6 lg:mb-0">
            @php(the_content())
            @include('partials.social-menu')
          </div>
          <div class="col-span-1">
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

<div class="hidden">
  <div class="border border-gray-700 p-4 rounded mb-6"><div class="prose"><h2><span class="uppercase text-white">Booking Inquiry</span></h2></div><div class="md:grid md:grid-cols-2 gap-6 row-gap-0"><div class=""> <label> <span class="block text-sm font-medium leading-5 text-gray-400">Your Name (required) </span><div class="mt-1 relative rounded-md shadow-sm">[text* your-name class:form-input class:w-full ]</div> </label></div><div class=""> <label> <span class="block text-sm font-medium leading-5 text-gray-400">Your Email (required) </span><div class="mt-1 relative rounded-md shadow-sm">[email* your-email class:form-input class:w-full ]</div> </label></div><div class=""> <label> <span class="block text-sm font-medium leading-5 text-gray-400">Your Phone </span><div class="mt-1 relative rounded-md shadow-sm">[tel your-phone class:form-input class:w-full ]</div> </label></div><div class=""> <label> <span class="block text-sm font-medium leading-5 text-gray-400">Date Requested </span><div class="mt-1 relative rounded-md shadow-sm">[date* date-requested class:form-input class:w-full ]</div> </label></div><div class=""> <label> <span class="block text-sm font-medium leading-5 text-gray-400">Time Requested </span><div class="mt-1 relative rounded-md shadow-sm">[text* time-requsted class:form-input class:w-full "From 6pm until 10pm" ]</div> </label></div><div class=""> <label> <span class="block text-sm font-medium leading-5 text-gray-400">Party Size </span><div class="mt-1 relative rounded-md shadow-sm">[select* party-size class:form-select class:w-full class:block "25-50" "51-75" "76-99" "100+" ]</div> </label></div><div class=""> <label> <span class="block text-sm font-medium leading-5 text-gray-400">Event Type </span><div class="mt-1 relative rounded-md shadow-sm">[select* event-type class:form-select class:w-full class:block "Private" "Public" ]</div> </label></div><div class="col-span-2"><div class="mb-4"><span class="block text-sm font-medium leading-5 text-gray-400">Would your event be possible during the day on a weekday before we open?</span> [radio day-night class:text-gray-400 default:1 "Yes" "No" ]</div></div><div class="col-span-2"><label><span class="block text-sm font-medium leading-5 text-gray-400">Other Information </span><div class="mt-1 relative rounded-md shadow-sm">[textarea your-message class:form-textarea class:w-full class:block class:max-h-32 ]</div> </label></div><div>[submit class:inline-flex class:items-center class:px-4 class:py-2 class:border class:border-gray-600 class:text-base class:leading-6 class:cursor-pointer class:font-medium class:rounded-md class:text-white class:bg-transparent class:focusoutline-none class:focusborder-blue-300 class:focusshadow-outline-blue class:activetext-gray-800 class:activebg-gray-50 class:transition class:ease-in-out class:duration-150 "Submit" ]</div></div></div>
</div>