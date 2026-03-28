@php
  use App\Support\SiteData;

  $navItems = [
    ['label' => 'Home', 'route' => 'site.home'],
    ['label' => 'Our Companies', 'route' => 'site.our-companies', 'dropdown' => true],
    ['label' => 'About Us', 'route' => 'site.about'],
    ['label' => 'Team', 'route' => 'site.team'],
    ['label' => 'Careers', 'route' => 'site.careers'],
    ['label' => 'News & Media', 'route' => 'site.blogs'],
    ['label' => 'Contact Us', 'route' => 'site.contact'],
  ];

  $companies = SiteData::companies();
  $isHome = request()->routeIs('site.home');
@endphp

<div
  x-data="{
    isHome: @js($isHome),
    isScrolled: false,
    mobileOpen: false,
    companiesOpen: false,
    get navSolid() { return this.isScrolled || !this.isHome },
    init() {
      const onScroll = () => { this.isScrolled = window.scrollY > 20 };
      onScroll();
      window.addEventListener('scroll', onScroll, { passive: true });
    }
  }"
>
  <nav
    class="site-nav-motion fixed top-0 left-0 right-0 z-50 transition-all duration-300"
    :class="navSolid ? 'bg-white/95 backdrop-blur-md shadow-md' : 'bg-transparent'"
  >
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex justify-between items-center h-20">
        <a href="{{ route('site.home') }}" class="cursor-pointer site-logo-motion flex items-center gap-3 select-none">
          <div class="h-12 aspect-[3/1] rounded-md bg-blue-600 flex items-center justify-center px-4">
            <span class="text-white font-bold tracking-widest text-sm">LITUS</span>
          </div>
          <span
            class="font-bold tracking-wide transition-colors duration-300"
            :class="navSolid ? 'text-gray-900' : 'text-white'"
          >Group</span>
        </a>

        <div class="site-nav-links-stagger hidden lg:flex items-center space-x-8">
          @foreach($navItems as $item)
            @if(!empty($item['dropdown']))
              <div
                class="relative"
                @mouseenter="companiesOpen = true"
                @mouseleave="companiesOpen = false"
              >
                <a
                  href="{{ route($item['route']) }}"
                  class="transition-colors font-medium flex items-center gap-1"
                  :class="navSolid ? 'text-gray-700 hover:text-blue-600' : 'text-white hover:text-blue-300'"
                >
                  {{ $item['label'] }}
                  <svg class="w-4 h-4" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 0 1 1.06.02L10 11.168l3.71-3.94a.75.75 0 1 1 1.08 1.04l-4.24 4.5a.75.75 0 0 1-1.08 0l-4.24-4.5a.75.75 0 0 1 .02-1.06Z" clip-rule="evenodd" />
                  </svg>
                </a>

                <div
                  x-show="companiesOpen"
                  x-transition:enter="transition ease-out duration-200"
                  x-transition:enter-start="opacity-0 -translate-y-2"
                  x-transition:enter-end="opacity-100 translate-y-0"
                  x-transition:leave="transition ease-in duration-150"
                  x-transition:leave-start="opacity-100 translate-y-0"
                  x-transition:leave-end="opacity-0 -translate-y-2"
                  class="absolute top-full left-1/2 -translate-x-1/2 mt-2 w-[600px] bg-white rounded-2xl shadow-2xl border border-gray-100 p-8"
                >
                  <div class="grid grid-cols-2 gap-x-8 gap-y-4">
                    @foreach($companies as $company)
                      <a href="{{ route('site.company', ['slug' => $company['slug']]) }}" class="block">
                        <div class="flex items-center gap-3 px-4 py-3 text-left text-gray-700 hover:bg-gray-50 rounded-lg transition-colors group w-full">
                          <div class="w-16 h-8 flex items-center justify-center flex-shrink-0">
                            <div class="w-full h-full rounded bg-gray-100 flex items-center justify-center">
                              <span class="text-[10px] font-semibold text-gray-600">
                                {{ strtoupper(substr($company['name'], 0, 8)) }}
                              </span>
                            </div>
                          </div>
                          <span class="font-medium group-hover:text-blue-600 transition-colors text-sm">
                            {{ $company['name'] }}
                          </span>
                        </div>
                      </a>
                    @endforeach
                  </div>
                </div>
              </div>
            @else
              <a
                href="{{ route($item['route']) }}"
                class="transition-colors font-medium"
                :class="navSolid ? 'text-gray-700 hover:text-blue-600' : 'text-white hover:text-blue-300'"
              >
                {{ $item['label'] }}
              </a>
            @endif
          @endforeach
        </div>

        <button
          type="button"
          class="lg:hidden p-2"
          :class="navSolid ? 'text-gray-900' : 'text-white'"
          @click="mobileOpen = !mobileOpen"
          aria-label="Toggle menu"
        >
          <template x-if="!mobileOpen">
            <svg class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
            </svg>
          </template>
          <template x-if="mobileOpen">
            <svg class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
            </svg>
          </template>
        </button>
      </div>
    </div>
  </nav>

  <div
    x-show="mobileOpen"
    x-transition:enter="transition ease-out duration-200"
    x-transition:enter-start="opacity-0 translate-x-6"
    x-transition:enter-end="opacity-100 translate-x-0"
    x-transition:leave="transition ease-in duration-150"
    x-transition:leave-start="opacity-100 translate-x-0"
    x-transition:leave-end="opacity-0 translate-x-6"
    class="fixed inset-0 z-40 bg-white lg:hidden overflow-y-auto"
  >
    <div class="flex flex-col pt-24 px-6 pb-8">
      @foreach($navItems as $item)
        @if(!empty($item['dropdown']))
          <div class="mb-2" x-data="{ open: false }">
            <button
              type="button"
              class="w-full text-left py-4 text-2xl text-gray-900 hover:text-blue-600 transition-colors flex items-center justify-between border-b border-gray-200"
              @click="open = !open"
            >
              {{ $item['label'] }}
              <svg class="w-6 h-6 transition-transform" :class="open ? 'rotate-180' : ''" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 0 1 1.06.02L10 11.168l3.71-3.94a.75.75 0 1 1 1.08 1.04l-4.24 4.5a.75.75 0 0 1-1.08 0l-4.24-4.5a.75.75 0 0 1 .02-1.06Z" clip-rule="evenodd" />
              </svg>
            </button>
            <div
              x-show="open"
              x-transition:enter="transition ease-out duration-200"
              x-transition:enter-start="opacity-0 -translate-y-2"
              x-transition:enter-end="opacity-100 translate-y-0"
              x-transition:leave="transition ease-in duration-150"
              x-transition:leave-start="opacity-100 translate-y-0"
              x-transition:leave-end="opacity-0 -translate-y-2"
              class="overflow-hidden bg-gray-50 rounded-lg mt-2 mb-2"
            >
              @foreach($companies as $company)
                <a
                  href="{{ route('site.company', ['slug' => $company['slug']]) }}"
                  class="w-full flex items-center gap-3 px-4 py-3 text-gray-700 hover:bg-blue-50 hover:text-blue-600 transition-colors border-b border-gray-100 last:border-b-0"
                  @click="$root.mobileOpen = false"
                >
                  <span class="text-sm">{{ $company['name'] }}</span>
                </a>
              @endforeach
            </div>
          </div>
        @else
          <a
            href="{{ route($item['route']) }}"
            class="w-full block py-4 text-2xl text-gray-900 hover:text-blue-600 transition-colors border-b border-gray-200"
            @click="mobileOpen = false"
          >
            {{ $item['label'] }}
          </a>
        @endif
      @endforeach
    </div>
  </div>
</div>

