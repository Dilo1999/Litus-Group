@extends('layouts.site')

@section('content')
@php
  $company = $company ?? null;
@endphp

<section class="relative pt-32 pb-20 bg-gradient-to-br from-blue-900 via-blue-800 to-blue-900 overflow-hidden">
  <div class="absolute inset-0 opacity-10">
    <div class="absolute top-20 right-10 w-96 h-96 bg-blue-500 rounded-full blur-3xl"></div>
    <div class="absolute bottom-20 left-10 w-96 h-96 bg-blue-400 rounded-full blur-3xl"></div>
  </div>

  <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <x-site.motion class="text-center text-white" variant="fade-up" :duration="800">
      <div class="flex items-center justify-center mx-auto mb-6 h-20">
        <div class="h-16 w-[240px] rounded-lg bg-white/10 border border-white/20 flex items-center justify-center">
          <span class="text-sm font-bold tracking-widest">{{ $company['name'] }}</span>
        </div>
      </div>

      <h1 class="text-5xl md:text-6xl font-bold mb-4">{{ $company['name'] }}</h1>
      <p class="text-2xl text-blue-100 mb-8">{{ $company['tagline'] }}</p>

      <div class="flex flex-col sm:flex-row gap-4 justify-center">
        <a href="tel:{{ $company['hotline'] }}" class="inline-flex">
          <span class="bg-white hover:bg-gray-100 text-blue-900 px-8 py-4 rounded-full text-lg font-semibold transition-all shadow-lg hover:shadow-xl flex items-center gap-2">
            <span class="inline-flex w-6 h-6 items-center justify-center rounded-full bg-blue-50">☎</span>
            {{ $company['hotline'] }}
          </span>
        </a>
        @if(!empty($company['email']))
          <a href="mailto:{{ $company['email'] }}" class="inline-flex">
            <span class="bg-white/10 hover:bg-white/20 backdrop-blur-sm text-white px-8 py-4 rounded-full text-lg font-semibold transition-all border border-white/30 flex items-center gap-2">
              <span class="inline-flex w-6 h-6 items-center justify-center rounded-full bg-white/10">✉</span>
              Email Us
            </span>
          </a>
        @endif
      </div>
    </x-site.motion>
  </div>
</section>

<section class="py-24 bg-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
      <x-site.motion variant="fade-left" :duration="800">
        <div class="inline-block px-4 py-2 bg-blue-50 text-blue-600 rounded-full text-sm font-medium mb-4">
          {{ $company['category'] }}
        </div>
        <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
          About {{ $company['name'] }}
        </h2>
        <p class="text-lg text-gray-600 mb-6 leading-relaxed">
          {{ $company['description'] }}
        </p>
        <p class="text-lg text-gray-600 leading-relaxed">
          As a proud member of the LITUS Group family, {{ $company['name'] }} brings decades of expertise and a commitment to excellence that sets us apart in the industry.
        </p>
      </x-site.motion>

      <x-site.motion variant="fade-right" :delay="200" :duration="800">
        <div class="relative rounded-2xl overflow-hidden shadow-2xl">
          <img
            src="https://images.unsplash.com/photo-1630487656049-6db93a53a7e9?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&q=80&w=1600"
            alt="{{ $company['name'] }}"
            class="w-full h-full object-cover"
          />
        </div>
      </x-site.motion>
    </div>
  </div>
</section>

<section class="py-24 bg-gray-50">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <x-site.motion class="text-center mb-16" variant="fade-up" :duration="800">
      <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">Our Services</h2>
      <p class="text-xl text-gray-600 max-w-2xl mx-auto">Comprehensive solutions tailored to meet your needs</p>
    </x-site.motion>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
      @foreach(($company['services'] ?? []) as $index => $service)
        <x-site.motion :delay="$index * 100" :duration="500" variant="fade-up">
          <div class="bg-white border border-gray-200 rounded-xl p-6 hover:border-blue-300 hover:shadow-lg transition-all h-full">
            <div class="bg-blue-100 w-12 h-12 rounded-lg flex items-center justify-center mb-4">
              <span class="text-blue-600 font-bold">•</span>
            </div>
            <h3 class="text-lg font-bold text-gray-900">{{ $service }}</h3>
          </div>
        </x-site.motion>
      @endforeach
    </div>
  </div>
</section>

<section class="py-24 bg-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <x-site.motion class="text-center mb-16" variant="fade-up" :duration="800">
      <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">Why Choose {{ $company['name'] }}</h2>
      <p class="text-xl text-gray-600 max-w-2xl mx-auto">
        Experience the difference that sets us apart from the competition
      </p>
    </x-site.motion>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
      @foreach(($company['strengths'] ?? []) as $index => $strength)
        <x-site.motion :delay="$index * 100" :duration="500" variant="fade-up">
          <div class="text-center">
            <div class="bg-blue-600 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
              <span class="text-white font-bold">★</span>
            </div>
            <h3 class="text-xl font-bold text-gray-900 mb-2">{{ $strength }}</h3>
          </div>
        </x-site.motion>
      @endforeach
    </div>
  </div>
</section>

<section class="py-24 bg-gray-50">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
      <x-site.motion variant="fade-left" :duration="800">
        <h2 class="text-4xl font-bold text-gray-900 mb-6">Get In Touch</h2>
        <p class="text-lg text-gray-600 mb-8 leading-relaxed">
          Have questions or ready to get started? Contact us today and discover how {{ $company['name'] }} can serve you.
        </p>

        <div class="space-y-6">
          <div class="flex items-start gap-4">
            <div class="bg-blue-100 p-3 rounded-lg">
              <span class="text-blue-600 font-bold">☎</span>
            </div>
            <div>
              <div class="font-semibold text-gray-900 mb-1">Hotline</div>
              <a href="tel:{{ $company['hotline'] }}" class="text-gray-600 hover:text-blue-600 transition-colors text-lg">
                {{ $company['hotline'] }}
              </a>
            </div>
          </div>

          @if(!empty($company['email']))
            <div class="flex items-start gap-4">
              <div class="bg-blue-100 p-3 rounded-lg">
                <span class="text-blue-600 font-bold">✉</span>
              </div>
              <div>
                <div class="font-semibold text-gray-900 mb-1">Email</div>
                <a href="mailto:{{ $company['email'] }}" class="text-gray-600 hover:text-blue-600 transition-colors">
                  {{ $company['email'] }}
                </a>
              </div>
            </div>
          @endif
        </div>
      </x-site.motion>

      <x-site.motion variant="fade-right" :delay="200" :duration="800">
        <form method="GET" action="{{ route('site.contact') }}" class="bg-white p-8 rounded-2xl shadow-lg">
          <h3 class="text-2xl font-bold text-gray-900 mb-6">Send Us A Message</h3>
          <p class="text-gray-600 mb-6">
            For general inquiries, please use our main contact form.
          </p>
          <button
            type="submit"
            class="w-full bg-blue-600 hover:bg-blue-700 text-white px-8 py-4 rounded-lg text-lg font-semibold transition-all shadow-lg hover:shadow-xl flex items-center justify-center gap-2"
          >
            Go to Contact Form
            <span>→</span>
          </button>
        </form>
      </x-site.motion>
    </div>
  </div>
</section>
@endsection
