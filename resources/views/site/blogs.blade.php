@extends('layouts.site')

@section('content')
@php
  $posts = [
    [
      'category' => 'Company News',
      'title' => 'LITUS Group expands operations across the Maldives',
      'excerpt' => 'We are thrilled to announce the expansion of our operations with new facilities and enhanced services across all 16 subsidiary companies, reinforcing our commitment to excellence.',
      'image' => 'https://images.unsplash.com/photo-1758520145178-29eafeda9908?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&q=80&w=1600',
      'author' => 'Sarah Ahmed',
      'date' => 'March 20, 2026',
      'readTime' => '5 min read',
    ],
    [
      'category' => 'Logistics',
      'title' => 'Streamlining global supply chains with advanced technology',
      'excerpt' => 'LITUS Shipping introduces cutting-edge logistics solutions to optimize supply chain efficiency and reduce delivery times across international routes.',
      'image' => 'https://images.unsplash.com/photo-1726315185844-b4cb8e95cab3?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&q=80&w=1600',
      'author' => 'Mohamed Ali',
      'date' => 'March 18, 2026',
      'readTime' => '4 min read',
    ],
    [
      'category' => 'Hospitality',
      'title' => 'Redefining luxury experiences in the Maldives',
      'excerpt' => 'Zaha Residence & Hotels unveils its latest property, setting new standards for luxury accommodation and personalized service in the Maldives.',
      'image' => 'https://images.unsplash.com/photo-1568727174680-7ae330b15345?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&q=80&w=1600',
      'author' => 'Aisha Hassan',
      'date' => 'March 15, 2026',
      'readTime' => '6 min read',
    ],
    [
      'category' => 'Construction',
      'title' => 'Building sustainable infrastructure for tomorrow',
      'excerpt' => 'LITUS Constructions leads the way in eco-friendly building practices, implementing sustainable materials and methods in all new projects.',
      'image' => 'https://images.unsplash.com/photo-1770625296856-cb865be093da?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&q=80&w=1600',
      'author' => 'Ahmed Ibrahim',
      'date' => 'March 12, 2026',
      'readTime' => '7 min read',
    ],
  ];

  $featured = $posts[0];
  $regular = array_slice($posts, 1);

  $gallery = [
    [
      'title' => 'Annual General Meeting 2026',
      'slug' => 'annual-general-meeting-2026',
      'image' => 'https://images.unsplash.com/photo-1638799869566-b17fa794c4de?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&q=80&w=1200',
      'alt' => 'Annual General Meeting 2026',
    ],
    [
      'title' => 'Zaha Hotels Grand Opening',
      'slug' => 'zaha-hotels-grand-opening',
      'image' => 'https://images.unsplash.com/photo-1744974256549-8ece7cdb5dd2?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&q=80&w=1200',
      'alt' => 'Zaha Hotels Grand Opening',
    ],
    [
      'title' => 'Leadership Team Building Retreat',
      'slug' => 'leadership-team-building-retreat',
      'image' => 'https://images.unsplash.com/photo-1667584523543-d1d9cc828a15?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&q=80&w=1200',
      'alt' => 'Leadership Team Building Retreat',
    ],
    [
      'title' => 'Excellence Award Ceremony 2026',
      'slug' => 'excellence-award-ceremony-2026',
      'image' => 'https://images.unsplash.com/photo-1759223198981-661cadbbff36?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&q=80&w=1200',
      'alt' => 'Excellence Award Ceremony 2026',
    ],
    [
      'title' => 'New Headquarters Inauguration',
      'slug' => 'new-headquarters-inauguration',
      'image' => 'https://images.unsplash.com/photo-1622131815452-cc00d8d89f02?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&q=80&w=1200',
      'alt' => 'New Headquarters Inauguration',
    ],
    [
      'title' => 'Favala Product Launch Event',
      'slug' => 'favala-product-launch-event',
      'image' => 'https://images.unsplash.com/photo-1680210849773-f97a41c6b7ed?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&q=80&w=1200',
      'alt' => 'Favala Product Launch Event',
    ],
    [
      'title' => 'International Trade Show 2026',
      'slug' => 'international-trade-show-2026',
      'image' => 'https://images.unsplash.com/photo-1771033834141-023d630b3965?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&q=80&w=1200',
      'alt' => 'International Trade Show 2026',
    ],
    [
      'title' => '25th Anniversary Celebration',
      'slug' => '25th-anniversary-celebration',
      'image' => 'https://images.unsplash.com/photo-1769773297747-bd00e31b33aa?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&q=80&w=1200',
      'alt' => '25th Anniversary Celebration',
    ],
  ];
@endphp

<div class="min-h-screen bg-white">
  <section class="relative pt-32 pb-20 bg-gradient-to-br from-blue-900 via-blue-800 to-blue-900 overflow-hidden">
    <div class="absolute inset-0 opacity-10 pointer-events-none" aria-hidden="true">
      <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAiIGhlaWdodD0iNjAiIHZpZXdCb3g9IjAgMCA2MCA2MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48ZyBmaWxsPSJub25lIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiPjxwYXRoIGQ9Ik0zNiAxOGMzLjMxNCAwIDYgMi42ODYgNiA2cy0yLjY4NiA2LTYgNi02LTIuNjg2LTYtNiAyLjY4Ni02IDYtNnptMCAxMmMzLjMxNCAwIDYgMi42ODYgNiA2cy0yLjY4NiA2LTYgNi02LTIuNjg2LTYtNiAyLjY4Ni02IDYtNnoiIHN0cm9rZT0iI0ZGRiIgc3Ryb2tlLXdpZHRoPSIyIi8+PC9nPjwvc3ZnPg==')] opacity-20"></div>
    </div>
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
      <x-site.motion variant="fade-up" :duration="800">
        <h1 class="text-5xl md:text-6xl font-bold text-white mb-6">Our Blogs</h1>
        <p class="text-xl md:text-2xl text-blue-100 max-w-3xl mx-auto">
          Insights, updates, and stories from across the LITUS Group ecosystem
        </p>
      </x-site.motion>
    </div>
  </section>

  <section class="py-16 bg-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <x-site.motion class="mb-16" variant="fade-up" :duration="600">
        <div class="bg-white rounded-3xl overflow-hidden shadow-2xl transition-all group">
          <div class="grid grid-cols-1 lg:grid-cols-2 gap-0">
            <div class="relative overflow-hidden aspect-[4/3] lg:aspect-auto">
              <img src="{{ $featured['image'] }}" alt="{{ $featured['title'] }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700" />
              <div class="absolute top-6 left-6">
                <div class="inline-block bg-blue-600 text-white px-4 py-2 rounded-full text-sm font-semibold shadow-lg">
                  Featured
                </div>
              </div>
            </div>
            <div class="p-8 lg:p-12 flex flex-col justify-center">
              <div class="inline-block bg-blue-100 text-blue-600 px-4 py-1 rounded-full text-sm font-semibold mb-4 w-fit">
                {{ $featured['category'] }}
              </div>
              <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4 group-hover:text-blue-600 transition-colors">
                {{ $featured['title'] }}
              </h2>
              <p class="text-lg text-gray-600 mb-6 leading-relaxed">
                {{ $featured['excerpt'] }}
              </p>
              <div class="flex flex-wrap items-center gap-4 mb-6 text-sm text-gray-500">
                <span>{{ $featured['author'] }}</span>
                <span>{{ $featured['date'] }}</span>
                <span>{{ $featured['readTime'] }}</span>
              </div>
              <button type="button" class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-4 rounded-full font-semibold transition-all shadow-lg hover:shadow-xl inline-flex items-center gap-2 w-fit">
                Read Full Article
                <span>→</span>
              </button>
            </div>
          </div>
        </div>
      </x-site.motion>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        @foreach($regular as $index => $post)
          <x-site.motion :delay="$index * 100" :duration="500" variant="fade-up">
          <div class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all group h-full flex flex-col">
            <div class="relative overflow-hidden aspect-[16/10]">
              <img src="{{ $post['image'] }}" alt="{{ $post['title'] }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" />
            </div>
            <div class="p-6 flex flex-col flex-grow">
              <div class="inline-block bg-blue-100 text-blue-600 px-3 py-1 rounded-full text-xs font-semibold mb-3 w-fit">
                {{ $post['category'] }}
              </div>
              <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-blue-600 transition-colors">
                {{ $post['title'] }}
              </h3>
              <p class="text-gray-600 mb-4 leading-relaxed flex-grow">
                {{ $post['excerpt'] }}
              </p>
              <div class="pt-4 border-t border-gray-200 text-sm text-gray-500 flex flex-wrap gap-3">
                <span>{{ $post['author'] }}</span>
                <span>{{ $post['date'] }}</span>
                <span>{{ $post['readTime'] }}</span>
              </div>
            </div>
          </div>
          </x-site.motion>
        @endforeach
      </div>
    </div>
  </section>

  <section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <x-site.motion class="mb-12" variant="fade-up" :duration="600">
        <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-2">Gallery</h2>
      </x-site.motion>

      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
        @foreach($gallery as $index => $item)
          <x-site.motion :delay="$index * 100" :duration="500" variant="fade-up">
          <a href="{{ route('site.event', ['slug' => $item['slug']]) }}" class="group block h-full">
            <div class="relative aspect-[4/3] rounded-lg overflow-hidden bg-gray-100 mb-4">
              <img src="{{ $item['image'] }}" alt="{{ $item['alt'] }}" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" />
            </div>
            <h3 class="text-sm font-medium text-gray-900 group-hover:text-blue-600 transition-colors">{{ $item['title'] }}</h3>
          </a>
          </x-site.motion>
        @endforeach
      </div>
    </div>
  </section>
</div>
@endsection

