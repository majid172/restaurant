<div>
    {{-- ═══ PAGE HEADER ═══ --}}
    <section class="relative pt-32 pb-20 overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-amber-800 to-amber-900"></div>
        <div class="absolute inset-0 bg-black/40"></div>
        <div class="relative z-10 max-w-4xl mx-auto px-4 text-center text-white">
            <h2 class="font-script text-3xl md:text-4xl mb-2">Discover</h2>
            <h1 class="font-heading text-5xl md:text-6xl font-bold uppercase tracking-wide mb-4">Our Menu</h1>
            <p class="text-gray-300 text-sm md:text-base max-w-xl mx-auto">
                Explore our authentic Indian dishes, each crafted with traditional spices and the freshest ingredients.
            </p>
        </div>
        <div class="torn-edge-bottom z-20"></div>
    </section>

    {{-- ═══ SEARCH & FILTERS ═══ --}}
    <section class="py-8 bg-cream sketch-bg sticky top-20 z-30 shadow-sm">
        <div class="max-w-6xl mx-auto px-4">
            <div class="flex flex-col md:flex-row items-center gap-4">
                {{-- Search --}}
                <div class="relative w-full md:w-80">
                    <svg class="absolute left-3 top-1/2 -translate-y-1/2 w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                    </svg>
                    <input type="text" wire:model.live.debounce.300ms="search" placeholder="Search dishes..."
                        class="w-full pl-10 pr-4 py-3 rounded-lg border border-gray-200 focus:border-gold focus:ring-2 focus:ring-gold/20 outline-none text-sm transition-all bg-white">
                </div>

                {{-- Category Pills --}}
                <div class="flex flex-wrap gap-2 justify-center md:justify-start">
                    <button wire:click="setCategory(null)"
                        class="font-heading text-xs uppercase tracking-widest px-5 py-2.5 rounded-full transition-all {{ !$activeCategory ? 'bg-gold text-white shadow-md' : 'bg-white text-brown-darker hover:bg-gold/10 border border-gray-200' }}">
                        All
                    </button>
                    @foreach($categories as $cat)
                        <button wire:click="setCategory({{ $cat->id }})"
                            class="font-heading text-xs uppercase tracking-widest px-5 py-2.5 rounded-full transition-all {{ $activeCategory === $cat->id ? 'bg-gold text-white shadow-md' : 'bg-white text-brown-darker hover:bg-gold/10 border border-gray-200' }}">
                            {{ $cat->getLocalizedName($locale) }}
                            <span class="ml-1 text-[10px] opacity-70">({{ $cat->menu_items_count }})</span>
                        </button>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    {{-- ═══ MENU ITEMS ═══ --}}
    <section class="py-16 bg-white">
        <div class="max-w-6xl mx-auto px-4">
            @if($menuItems->count())
                @foreach($groupedItems as $categoryId => $items)
                    @php $category = $categories->firstWhere('id', $categoryId); @endphp

                    <div class="mb-16 last:mb-0" wire:key="cat-{{ $categoryId }}">
                        {{-- Category Header --}}
                        @if($category)
                            <div class="flex items-center gap-4 mb-8">
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 bg-gold/10 rounded-full flex items-center justify-center">
                                        <svg class="w-5 h-5 text-gold" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M8.1 13.34l2.83-2.83L3.91 3.5a4.008 4.008 0 000 5.66l4.19 4.18zm6.78-1.81c1.53.71 3.68.21 5.27-1.38 1.91-1.91 2.28-4.65.81-6.12-1.46-1.46-4.2-1.1-6.12.81-1.59 1.59-2.09 3.74-1.38 5.27L3.7 19.87l1.41 1.41L12 14.41l6.88 6.88 1.41-1.41L13.41 13l1.47-1.47z"/>
                                        </svg>
                                    </div>
                                    <h2 class="font-heading text-2xl md:text-3xl font-bold uppercase text-brown-darker tracking-wide">
                                        {{ $category->getLocalizedName($locale) }}
                                    </h2>
                                </div>
                                <div class="flex-grow h-px bg-gray-200"></div>
                                <span class="text-text-muted text-sm font-heading">{{ $items->count() }} items</span>
                            </div>
                        @endif

                        {{-- Items Grid --}}
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                            @foreach($items as $item)
                                <div class="bg-white rounded-xl border border-gray-100 overflow-hidden hover:shadow-xl transition-all duration-300 group hover:-translate-y-1"
                                    wire:key="item-{{ $item->id }}">
                                    {{-- Image --}}
                                    <div class="relative h-48 overflow-hidden">
                                        @if($item->primaryImage)
                                            <img src="{{ asset('storage/' . $item->primaryImage->url) }}"
                                                alt="{{ $item->getLocalizedName($locale) }}"
                                                class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                                        @else
                                            <div class="w-full h-full bg-gradient-to-br from-amber-100 via-amber-50 to-orange-100 flex items-center justify-center">
                                                <svg class="w-16 h-16 text-gold/30" fill="currentColor" viewBox="0 0 24 24">
                                                    <path d="M8.1 13.34l2.83-2.83L3.91 3.5a4.008 4.008 0 000 5.66l4.19 4.18zm6.78-1.81c1.53.71 3.68.21 5.27-1.38 1.91-1.91 2.28-4.65.81-6.12-1.46-1.46-4.2-1.1-6.12.81-1.59 1.59-2.09 3.74-1.38 5.27L3.7 19.87l1.41 1.41L12 14.41l6.88 6.88 1.41-1.41L13.41 13l1.47-1.47z"/>
                                                </svg>
                                            </div>
                                        @endif

                                        {{-- Badges --}}
                                        <div class="absolute top-3 left-3 flex gap-2">
                                            @if($item->is_new)
                                                <span class="bg-green-500 text-white text-[10px] font-bold uppercase px-2 py-1 rounded font-heading tracking-wider">New</span>
                                            @endif
                                            @if($item->is_popular)
                                                <span class="bg-gold text-white text-[10px] font-bold uppercase px-2 py-1 rounded font-heading tracking-wider">🔥 Popular</span>
                                            @endif
                                        </div>

                                        {{-- Price --}}
                                        <div class="absolute bottom-3 right-3">
                                            <span class="bg-brown-dark/90 text-gold font-heading font-bold text-lg px-4 py-1 rounded-full">
                                                {{ number_format($item->base_price_cents / 100, 0) }} {{ $item->currency_code ?? '' }}
                                            </span>
                                        </div>
                                    </div>

                                    {{-- Content --}}
                                    <div class="p-5">
                                        <h3 class="font-heading font-bold text-brown-darker uppercase tracking-wide text-lg mb-2">
                                            {{ $item->getLocalizedName($locale) }}
                                        </h3>

                                        @if($item->getLocalizedDescription($locale))
                                            <p class="text-text-muted text-sm leading-relaxed line-clamp-2 mb-3">
                                                {{ $item->getLocalizedDescription($locale) }}
                                            </p>
                                        @endif

                                        <div class="flex items-center justify-between">
                                            {{-- Spiciness --}}
                                            @if($item->spiciness_level)
                                                <div class="flex items-center gap-1">
                                                    <span class="text-xs text-text-muted mr-1">Spice:</span>
                                                    @for($i = 1; $i <= 5; $i++)
                                                        <span class="spice-dot {{ $i <= $item->spiciness_level ? '' : 'empty' }}"></span>
                                                    @endfor
                                                </div>
                                            @endif

                                            {{-- Dietary Labels --}}
                                            @if($item->dietary_labels && count($item->dietary_labels))
                                                <div class="flex gap-1">
                                                    @foreach(array_slice($item->dietary_labels, 0, 2) as $label)
                                                        <span class="text-[9px] uppercase font-bold px-2 py-0.5 rounded badge-{{ strtolower(str_replace(' ', '-', $label)) }}">
                                                            {{ $label }}
                                                        </span>
                                                    @endforeach
                                                </div>
                                            @endif
                                        </div>

                                        @if($item->prep_time_minutes)
                                            <div class="flex items-center gap-1 mt-3 text-text-muted text-xs">
                                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                                </svg>
                                                {{ $item->prep_time_minutes }} min
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            @else
                <div class="text-center py-20">
                    <svg class="w-20 h-20 mx-auto text-gray-200 mb-6" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M8.1 13.34l2.83-2.83L3.91 3.5a4.008 4.008 0 000 5.66l4.19 4.18zm6.78-1.81c1.53.71 3.68.21 5.27-1.38 1.91-1.91 2.28-4.65.81-6.12-1.46-1.46-4.2-1.1-6.12.81-1.59 1.59-2.09 3.74-1.38 5.27L3.7 19.87l1.41 1.41L12 14.41l6.88 6.88 1.41-1.41L13.41 13l1.47-1.47z"/>
                    </svg>
                    <h3 class="font-heading text-2xl font-bold text-brown-darker uppercase mb-2">No Dishes Found</h3>
                    <p class="text-text-muted">Try adjusting your search or browse all categories.</p>
                    @if($search || $activeCategory)
                        <button wire:click="$set('search', ''); $call('setCategory', null)"
                            class="mt-6 bg-gold hover:bg-gold-dark text-white font-heading font-medium uppercase tracking-widest text-xs px-6 py-3 rounded transition-all">
                            Clear Filters
                        </button>
                    @endif
                </div>
            @endif
        </div>
    </section>
</div>
