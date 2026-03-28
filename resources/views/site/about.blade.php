@extends('layouts.site')

@section('content')
<div class="pt-20">
  <section class="py-24 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
        <x-site.motion variant="fade-left" :duration="800">
          <div class="relative">
            <div class="relative rounded-2xl overflow-hidden shadow-2xl">
              <img
                src="https://images.unsplash.com/photo-1745847768380-2caeadbb3b71?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&q=80&w=1600"
                alt="Business partnership"
                class="w-full h-full object-cover"
              />
              <div class="absolute inset-0 bg-gradient-to-t from-blue-900/50 to-transparent"></div>
            </div>
            <x-site.motion class="absolute -bottom-8 -right-8 bg-white p-6 rounded-xl shadow-xl hidden lg:block" variant="scale" :delay="400" :duration="600">
              <div class="text-4xl font-bold text-blue-600 mb-1">16+</div>
              <div class="text-gray-600 font-medium">Companies</div>
            </x-site.motion>
          </div>
        </x-site.motion>

        <div>
          <x-site.motion variant="fade-right" :delay="200" :duration="800">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">About LITUS Group</h1>
            <p class="text-lg text-gray-600 mb-6 leading-relaxed">
              LITUS Group is a diversified business conglomerate with a strong presence across multiple sectors including hospitality, construction, automotive, technology, and trading.
            </p>
            <p class="text-lg text-gray-600 mb-8 leading-relaxed">
              With a portfolio spanning from luxury hotels and resorts to cutting-edge technology solutions, we deliver comprehensive services that meet the evolving needs of our clients.
            </p>
          </x-site.motion>

          @php
            $highlights = [
              'Established presence across multiple industries',
              'Committed to quality and customer satisfaction',
              'Innovative solutions and cutting-edge technology',
              'Dedicated team of industry professionals',
            ];
          @endphp

          <div class="space-y-4 mb-8">
            @foreach($highlights as $i => $h)
              <x-site.motion :delay="400 + $i * 100" :duration="500" variant="fade-right">
                <div class="flex items-start gap-3">
                  <span class="text-blue-600 mt-1">✔</span>
                  <span class="text-gray-700 text-lg">{{ $h }}</span>
                </div>
              </x-site.motion>
            @endforeach
          </div>

          <x-site.motion variant="fade-up" :delay="800" :duration="800">
            <a
              href="{{ route('site.our-companies') }}"
              class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-4 rounded-full text-lg font-semibold transition-all shadow-lg hover:shadow-xl inline-flex items-center gap-2"
            >
              Explore Our Companies
              <span>→</span>
            </a>
          </x-site.motion>
        </div>
      </div>
    </div>
  </section>

  <section class="py-24 bg-blue-600">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
        <x-site.motion variant="fade-up" :duration="800">
          <div class="bg-white/10 backdrop-blur-sm border border-white/20 rounded-2xl p-8">
            <h2 class="text-3xl font-bold text-white mb-4">Our Mission</h2>
            <p class="text-lg text-blue-100 leading-relaxed">
              To deliver exceptional value across diverse industries through innovation, quality, and unwavering commitment to customer satisfaction.
            </p>
          </div>
        </x-site.motion>
        <x-site.motion variant="fade-up" :delay="200" :duration="800">
          <div class="bg-white/10 backdrop-blur-sm border border-white/20 rounded-2xl p-8">
            <h2 class="text-3xl font-bold text-white mb-4">Our Vision</h2>
            <p class="text-lg text-blue-100 leading-relaxed">
              To be the most trusted and diversified business group in the Maldives, setting industry standards and creating sustainable value for all stakeholders.
            </p>
          </div>
        </x-site.motion>
      </div>
    </div>
  </section>
</div>
@endsection
