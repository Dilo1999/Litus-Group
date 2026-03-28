@extends('layouts.site')

@section('content')
<div class="pt-20">
  <section class="relative pt-20 pb-16 bg-gradient-to-br from-blue-900 via-blue-800 to-blue-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center text-white">
      <x-site.motion variant="fade-up" :duration="800">
        <h1 class="text-5xl md:text-6xl font-bold mb-6">Our Team</h1>
        <p class="text-xl md:text-2xl text-blue-100 max-w-3xl mx-auto">
          Meet the leaders and professionals behind LITUS Group
        </p>
      </x-site.motion>
    </div>
  </section>

  @php
    $team = [
      ['name' => 'Ahmed Ibrahim', 'role' => 'Chief Executive Officer', 'img' => 'https://images.unsplash.com/photo-1524504388940-b1c1722653e1?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&q=80&w=800'],
      ['name' => 'Sarah Ahmed', 'role' => 'Head of Corporate Affairs', 'img' => 'https://images.unsplash.com/photo-1544005313-94ddf0286df2?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&q=80&w=800'],
      ['name' => 'Mohamed Ali', 'role' => 'Operations Director', 'img' => 'https://images.unsplash.com/photo-1500648767791-00dcc994a43e?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&q=80&w=800'],
      ['name' => 'Aisha Hassan', 'role' => 'Hospitality Division Lead', 'img' => 'https://images.unsplash.com/photo-1550525811-e5869dd03032?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&q=80&w=800'],
      ['name' => 'Hassan Rasheed', 'role' => 'Automotive Division Lead', 'img' => 'https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&q=80&w=800'],
      ['name' => 'Fathmath Noor', 'role' => 'Technology Division Lead', 'img' => 'https://images.unsplash.com/photo-1524504388940-b1c1722653e1?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&q=80&w=800'],
    ];
  @endphp

  <section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
        @foreach($team as $index => $person)
          <x-site.motion :delay="$index * 100" :duration="500" variant="fade-up">
            <div class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all group h-full">
              <div class="relative overflow-hidden aspect-[4/3]">
                <img src="{{ $person['img'] }}" alt="{{ $person['name'] }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" />
              </div>
              <div class="p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-1">{{ $person['name'] }}</h3>
                <p class="text-blue-600 font-semibold">{{ $person['role'] }}</p>
              </div>
            </div>
          </x-site.motion>
        @endforeach
      </div>
    </div>
  </section>
</div>
@endsection

