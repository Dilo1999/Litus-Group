@extends('layouts.site')

@section('content')
@php
  use App\Support\SiteData;
  $divisions = $divisions ?? SiteData::divisions();
  $companies = $companies ?? SiteData::companies();
  $divisionOrder = $divisionOrder ?? array_keys($divisions);
@endphp

<section class="relative pt-32 pb-20 bg-gradient-to-br from-blue-900 via-blue-800 to-blue-900">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <x-site.motion class="text-center text-white" variant="fade-up" :duration="800">
      <h1 class="text-5xl md:text-6xl font-bold mb-6">Our Companies</h1>
      <p class="text-xl md:text-2xl text-blue-100 max-w-3xl mx-auto">
        Explore our diverse portfolio of 16 specialized companies delivering excellence across multiple industries
      </p>
    </x-site.motion>
  </div>
</section>

<section class="py-24 bg-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="space-y-20">
      @foreach($divisionOrder as $divIndex => $divisionKey)
        @php
          $division = $divisions[$divisionKey] ?? null;
          $divisionCompanies = array_values(array_filter($companies, fn($c) => ($c['division'] ?? '') === $divisionKey));
        @endphp

        @if($division && count($divisionCompanies))
          <x-site.motion :delay="$divIndex * 100" :duration="800" variant="fade-up">
            <div>
              <div class="mb-8">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-2">{{ $division['title'] }}</h2>
                <p class="text-lg text-gray-600">{{ $division['description'] }}</p>
              </div>

              <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($divisionCompanies as $index => $company)
                  <x-site.motion :delay="$divIndex * 100 + $index * 50" :duration="500" variant="fade-up">
                    <a href="{{ route('site.company', ['slug' => $company['slug']]) }}" class="block h-full">
                      <div class="bg-gradient-to-br from-white to-gray-50 border border-gray-200 hover:border-blue-300 rounded-2xl p-6 transition-all hover:shadow-xl group cursor-pointer h-full flex flex-col">
                        <div class="w-full h-20 flex items-center justify-start mb-4">
                          <div class="h-14 w-full rounded-lg bg-white border border-gray-200 flex items-center px-4">
                            <span class="text-sm font-semibold text-gray-700">{{ $company['name'] }}</span>
                          </div>
                        </div>

                        <div class="flex-1">
                          <h3 class="text-xl font-bold text-gray-900 group-hover:text-blue-600 transition-colors mb-2">
                            {{ $company['name'] }}
                          </h3>
                          <p class="text-sm text-blue-600 font-medium mb-3">{{ $company['category'] }}</p>
                          <p class="text-gray-600 mb-4 leading-relaxed">{{ $company['description'] }}</p>
                        </div>

                        <div class="flex items-center justify-between pt-4 border-t border-gray-200">
                          <a
                            href="tel:{{ $company['hotline'] }}"
                            class="flex items-center gap-2 text-gray-600 hover:text-blue-600 transition-colors"
                            onclick="event.stopPropagation()"
                          >
                            <span class="inline-flex w-5 h-5 items-center justify-center rounded-full bg-gray-100">☎</span>
                            <span class="text-sm font-medium">{{ $company['hotline'] }}</span>
                          </a>
                          <div class="flex items-center gap-1 text-blue-600 font-semibold text-sm group-hover:gap-2 transition-all">
                            View Company
                            <span>→</span>
                          </div>
                        </div>
                      </div>
                    </a>
                  </x-site.motion>
                @endforeach
              </div>
            </div>
          </x-site.motion>
        @endif
      @endforeach
    </div>
  </div>
</section>
@endsection
