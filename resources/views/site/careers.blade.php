@extends('layouts.site')

@section('content')
<div class="pt-20">
  <section class="relative pt-20 pb-16 bg-gradient-to-br from-blue-900 via-blue-800 to-blue-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center text-white">
      <x-site.motion variant="fade-up" :duration="800">
        <h1 class="text-5xl md:text-6xl font-bold mb-6">Careers</h1>
        <p class="text-xl md:text-2xl text-blue-100 max-w-3xl mx-auto">
          Join LITUS Group and grow your career across 16 diverse brands
        </p>
      </x-site.motion>
    </div>
  </section>

  @php
    $jobs = [
      ['title' => 'Marketing Executive', 'location' => 'Malé, Maldives', 'type' => 'Full-time', 'dept' => 'Corporate'],
      ['title' => 'Logistics Coordinator', 'location' => 'Malé, Maldives', 'type' => 'Full-time', 'dept' => 'Shipping'],
      ['title' => 'IT Support Specialist', 'location' => 'Malé, Maldives', 'type' => 'Full-time', 'dept' => 'Technology'],
      ['title' => 'Sales Consultant', 'location' => 'Malé, Maldives', 'type' => 'Full-time', 'dept' => 'Automotive'],
      ['title' => 'Site Engineer', 'location' => 'Maldives', 'type' => 'Contract', 'dept' => 'Construction'],
      ['title' => 'Front Office Associate', 'location' => 'Resort', 'type' => 'Full-time', 'dept' => 'Hospitality'],
    ];
  @endphp

  <section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <x-site.motion class="text-center mb-12" variant="fade-up" :duration="800">
        <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">Open Positions</h2>
        <p class="text-xl text-gray-600 max-w-2xl mx-auto">
          Discover roles across our divisions. Apply via our contact form and mention the job title.
        </p>
      </x-site.motion>

      <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
        @foreach($jobs as $index => $job)
          <x-site.motion :delay="$index * 80" :duration="500" variant="fade-up">
          <div class="bg-gray-50 border border-gray-200 hover:border-blue-300 rounded-2xl p-6 transition-all hover:shadow-lg h-full">
            <div class="flex items-start justify-between gap-6">
              <div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">{{ $job['title'] }}</h3>
                <div class="flex flex-wrap gap-2">
                  <span class="text-sm bg-white border border-gray-200 rounded-full px-3 py-1 text-gray-700">{{ $job['dept'] }}</span>
                  <span class="text-sm bg-white border border-gray-200 rounded-full px-3 py-1 text-gray-700">{{ $job['location'] }}</span>
                  <span class="text-sm bg-white border border-gray-200 rounded-full px-3 py-1 text-gray-700">{{ $job['type'] }}</span>
                </div>
              </div>
              <a
                href="{{ route('site.contact') }}"
                class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-2.5 rounded-full font-semibold transition-all shadow-md hover:shadow-lg whitespace-nowrap"
              >
                Apply
              </a>
            </div>
          </div>
          </x-site.motion>
        @endforeach
      </div>
    </div>
  </section>

  <section class="py-20 bg-blue-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
      <x-site.motion variant="fade-up" :duration="800">
        <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">Didn’t find your role?</h2>
        <p class="text-xl text-blue-100 max-w-2xl mx-auto mb-10">
          Send us your CV and we’ll reach out when a matching opportunity opens.
        </p>
        <a
          href="{{ route('site.contact') }}"
          class="bg-white hover:bg-gray-100 text-blue-900 px-8 py-4 rounded-full text-lg font-semibold transition-all shadow-lg hover:shadow-xl inline-flex items-center gap-2"
        >
          Contact HR
          <span>→</span>
        </a>
      </x-site.motion>
    </div>
  </section>
</div>
@endsection

