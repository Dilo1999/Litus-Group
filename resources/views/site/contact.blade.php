@extends('layouts.site')

@section('content')
<div class="pt-20">
  <section class="relative pt-20 pb-16 bg-gradient-to-br from-blue-900 via-blue-800 to-blue-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center text-white">
      <x-site.motion variant="fade-up" :duration="800">
        <h1 class="text-5xl md:text-6xl font-bold mb-6">Contact Us</h1>
        <p class="text-xl md:text-2xl text-blue-100 max-w-3xl mx-auto">
          Have questions or interested in our services? Get in touch with us today
        </p>
      </x-site.motion>
    </div>
  </section>

  <section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
        <x-site.motion variant="fade-left" :duration="800">
          <h2 class="text-4xl font-bold text-gray-900 mb-6">Let's Connect</h2>
          <p class="text-lg text-gray-600 mb-8 leading-relaxed">
            We’d love to hear from you. Send us a message and our team will respond as soon as possible.
          </p>

          <div class="space-y-6">
            <div class="flex items-start gap-4">
              <div class="bg-blue-100 p-3 rounded-lg">
                <span class="text-blue-600 font-bold">☎</span>
              </div>
              <div>
                <div class="font-semibold text-gray-900 mb-1">Hotline</div>
                <a href="tel:+9603322288" class="text-gray-600 hover:text-blue-600 transition-colors text-lg">+960 332 2288</a>
              </div>
            </div>
            <div class="flex items-start gap-4">
              <div class="bg-blue-100 p-3 rounded-lg">
                <span class="text-blue-600 font-bold">✉</span>
              </div>
              <div>
                <div class="font-semibold text-gray-900 mb-1">Email</div>
                <a href="mailto:info@litusgroup.com" class="text-gray-600 hover:text-blue-600 transition-colors">info@litusgroup.com</a>
              </div>
            </div>
          </div>
        </x-site.motion>

        <x-site.motion variant="fade-right" :delay="200" :duration="800">
          @if (session('status'))
            <div class="mb-6 rounded-xl border border-green-200 bg-green-50 px-5 py-4 text-green-800">
              {{ session('status') }}
            </div>
          @endif

          <form method="POST" action="{{ route('site.contact.submit') }}" class="bg-white p-8 rounded-2xl shadow-lg">
            @csrf
            <h3 class="text-2xl font-bold text-gray-900 mb-6">Send Us A Message</h3>

            <div class="space-y-6">
              <div>
                <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Full Name</label>
                <input
                  type="text"
                  id="name"
                  name="name"
                  value="{{ old('name') }}"
                  required
                  class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition-all"
                />
                @error('name') <div class="text-sm text-red-600 mt-2">{{ $message }}</div> @enderror
              </div>

              <div>
                <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email Address</label>
                <input
                  type="email"
                  id="email"
                  name="email"
                  value="{{ old('email') }}"
                  required
                  class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition-all"
                />
                @error('email') <div class="text-sm text-red-600 mt-2">{{ $message }}</div> @enderror
              </div>

              <div>
                <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">Phone Number</label>
                <input
                  type="tel"
                  id="phone"
                  name="phone"
                  value="{{ old('phone') }}"
                  class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition-all"
                />
                @error('phone') <div class="text-sm text-red-600 mt-2">{{ $message }}</div> @enderror
              </div>

              <div>
                <label for="message" class="block text-sm font-medium text-gray-700 mb-2">Message</label>
                <textarea
                  id="message"
                  name="message"
                  required
                  rows="5"
                  class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition-all resize-none"
                >{{ old('message') }}</textarea>
                @error('message') <div class="text-sm text-red-600 mt-2">{{ $message }}</div> @enderror
              </div>

              <button
                type="submit"
                class="w-full bg-blue-600 hover:bg-blue-700 text-white px-8 py-4 rounded-lg text-lg font-semibold transition-all shadow-lg hover:shadow-xl flex items-center justify-center gap-2"
              >
                Send Message
                <span>→</span>
              </button>
            </div>
          </form>
        </x-site.motion>
      </div>
    </div>
  </section>
</div>
@endsection
