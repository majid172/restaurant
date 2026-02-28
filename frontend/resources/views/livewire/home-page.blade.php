@php
    $locale = app()->getLocale();
@endphp

<div class="w-full">
    {{-- ═══ HERO SECTION (Basilico Centered Layout) ═══ --}}
    <section class="relative min-h-screen flex flex-col justify-center items-center text-center overflow-hidden" 
             x-data="{ activeSlide: 1, auto: null }"
             x-init="auto = setInterval(() => { activeSlide = activeSlide < 3 ? activeSlide + 1 : 1 }, 7000)">
        
        {{-- Background Image with Gradient Overlay --}}
        <div class="absolute inset-0 z-0">
            <template x-if="activeSlide === 1">
                <img src="https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80" 
                     class="w-full h-full object-cover transition-opacity duration-1000"
                     x-transition:enter="opacity-0 scale-105"
                     x-transition:enter-end="opacity-100 scale-100">
            </template>
            <div class="absolute inset-0 bg-gradient-to-b from-black/80 via-black/40 to-forest/60"></div>
        </div>

        {{-- Content --}}
        <div class="relative z-10 px-4 max-w-5xl mx-auto -mt-10">
            <div x-show="activeSlide === 1" 
                 x-transition:enter="transition ease-out duration-1000 transform scale-95 opacity-0" 
                 x-transition:enter-end="scale-100 opacity-100">
                
                <div class="flex items-center justify-center gap-4 mb-6 animate-fade-in opacity-0" style="animation-fill-mode: forwards;">
                    <div class="w-12 h-[1px] bg-gold-premium/50"></div>
                    <h3 class="font-script text-gold-premium text-4xl md:text-5xl">Authentic Indian Flavors</h3>
                    <div class="w-12 h-[1px] bg-gold-premium/50"></div>
                </div>
                
                <h1 class="font-heading text-white text-6xl md:text-8xl font-bold uppercase tracking-tight mb-8 leading-[0.9] drop-shadow-2xl">
                    Culinary <span class="text-gold">Masterpieces</span><br>For Your Soul
                </h1>
                
                <p class="text-gray-300 max-w-2xl mx-auto mb-12 text-base md:text-lg leading-relaxed font-body opacity-80">
                    Step into a world where tradition meets luxury. Love Curry brings you centuries of culinary heritage, redefined for the modern palate.
                </p>

                <div class="flex flex-col sm:flex-row gap-6 justify-center">
                    <a href="/menu" wire:navigate
                        class="bg-gold hover:bg-gold-dark text-white font-heading font-bold uppercase tracking-[0.3em] text-[12px] px-12 py-5 rounded-sm transition-all shadow-gold hover:scale-105 transform">
                        Explore Full Menu
                    </a>
                    <a href="/contact" wire:navigate
                        class="bg-transparent hover:bg-white text-white hover:text-forest border border-white/30 hover:border-white font-heading font-bold uppercase tracking-[0.3em] text-[12px] px-12 py-5 rounded-sm transition-all backdrop-blur-sm">
                        Reservation
                    </a>
                </div>
            </div>

            {{-- Slider Indicators --}}
            <div class="flex gap-6 mt-24 justify-center">
                <template x-for="i in 3" :key="i">
                    <button @click="activeSlide = i; clearInterval(auto)" 
                            class="group flex items-center gap-2">
                        <span class="w-12 h-[2px] transition-all duration-500"
                              :class="activeSlide === i ? 'bg-gold w-16' : 'bg-white/20 group-hover:bg-white/40'"></span>
                    </button>
                </template>
            </div>
        </div>

        {{-- Floating Scroll Indicator --}}
        <div class="absolute bottom-12 left-1/2 -translate-x-1/2 z-30 animate-bounce flex flex-col items-center gap-2">
            <span class="font-heading text-white text-[9px] uppercase tracking-[0.5em] opacity-40">Scroll</span>
            <div class="w-px h-12 bg-gradient-to-b from-gold to-transparent"></div>
        </div>

        {{-- Torn Edge Bottom --}}
        <div class="torn-edge-bottom z-20"></div>
    </section>

    {{-- ═══ ABOUT SECTION (Premium Heritage Layout) ═══ --}}
    <section class="py-32 bg-white relative overflow-hidden flex items-center min-h-[800px]">
        {{-- Full Width Background Graphic --}}
        <div class="absolute right-0 top-0 bottom-0 w-1/2 opacity-[0.03] pointer-events-none">
            <img src="https://themesflat.co/html/restaurant/coffee/assets/images/bg/graphic-header.png" class="w-full h-full object-contain object-right grayscale">
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 w-full">
            <div class="flex flex-col lg:flex-row items-center gap-12 lg:gap-0">
                
                {{-- Left Side: Main Portrait Image --}}
                <div class="w-full lg:w-1/2 relative group">
                    <div class="relative overflow-hidden rounded-2xl shadow-premium">
                        <img src="https://images.unsplash.com/photo-1585937421612-70a008356fbe?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                             alt="About Our Kitchen" 
                             class="w-full h-[650px] object-cover transition-transform duration-1000 group-hover:scale-110">
                    </div>
                    
                    {{-- Luxury Content Box --}}
                    <div class="absolute top-[60%] left-[30%] lg:left-[45%] transform -translate-y-1/2 bg-white p-10 lg:p-16 shadow-premium rounded-xl z-20 w-[110%] md:w-[80%] lg:w-[100%] border border-gray-100 animate-fade-in-up">
                        <div class="flex items-center gap-3 mb-6">
                            <span class="w-8 h-px bg-gold"></span>
                            <span class="font-heading font-medium text-gold uppercase tracking-[0.4em] text-[10px]">Since 2003</span>
                        </div>
                        
                        <h2 class="font-heading text-forest-dark text-4xl lg:text-5xl font-bold uppercase leading-[1.1] mb-8 heritage-heading">
                            Elevating Indian<br>Culinary Arts
                        </h2>
                        
                        <p class="font-body text-gray-500 text-[14px] leading-relaxed mb-6 italic">
                            "Cooking is not just about making food, it's about making memories. At Love Curry, we blend traditional spices with modern techniques to create a truly unforgettable dining experience."
                        </p>
                        <p class="font-body text-gray-500 text-[14px] leading-relaxed mb-10">
                            Our journey began with a simple passion for authentic flavors. Today, we continue that legacy by sourcing the finest spices directly from India, ensuring every dish reflects our heritage and commitment to excellence.
                        </p>
                        
                        <a href="/about" wire:navigate 
                           class="inline-block bg-forest hover:bg-gold text-white font-heading font-bold uppercase tracking-[0.3em] text-[11px] px-12 py-5 transition-all shadow-xl rounded-sm">
                            Discover Our Story
                        </a>
                    </div>
                </div>

                {{-- Right Side: Business Hours Box --}}
                <div class="w-full lg:w-1/2 flex justify-center lg:justify-end relative group mt-20 lg:mt-0">
                    {{-- Decorative Gold Offset Border --}}
                    <div class="absolute inset-0 border-[20px] border-gold/5 translate-x-6 translate-y-6 rounded-3xl -z-10"></div>
                    
                    <div class="bg-forest rounded-2xl p-10 lg:p-14 w-full max-w-[450px] shadow-premium relative z-30 transition-transform duration-500 hover:scale-[1.03] forest-texture">
                        <h3 class="font-heading text-gold text-3xl font-bold uppercase tracking-[0.2em] mb-12 text-center">Service Hours</h3>
                        
                        <div class="space-y-6">
                            @php
                                $hours = [
                                    'Monday' => '11:00 - 23:00',
                                    'Tuesday' => '11:00 - 23:00',
                                    'Wednesday' => '11:00 - 23:00',
                                    'Thursday' => '11:00 - 23:00',
                                    'Friday' => '12:00 - 00:00',
                                    'Saturday' => '12:00 - 00:00',
                                    'Sunday' => '11:00 - 22:00',
                                ];
                            @endphp
                            @foreach($hours as $day => $time)
                                <div class="flex justify-between items-center group/item border-b border-white/5 pb-4">
                                    <span class="font-heading text-white uppercase text-[12px] tracking-widest font-bold group-hover/item:text-gold transition-colors">{{ $day }}</span>
                                    <span class="font-body text-gray-400 text-[12px] font-medium">{{ $time }}</span>
                                </div>
                            @endforeach
                        </div>

                        <div class="mt-12 pt-8 border-t border-white/10 text-center">
                            <p class="font-heading text-gold text-[10px] uppercase tracking-[0.3em]">Reservations Recommended</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ═══ CATEGORY CARDS (Premium Heritage Band) ═══ --}}
    @if(isset($categories) && $categories->count())
        <section class="relative py-32 bg-white overflow-hidden">
            
            {{-- Torn Background Band --}}
            <div class="absolute inset-y-20 left-0 right-0 bg-cream/50 z-0">
                {{-- Top Torn Edge --}}
                <div class="absolute top-0 left-0 w-full h-10 -translate-y-[99%] z-10 opacity-70" 
                     style="background-image: url(&quot;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1200 120' preserveAspectRatio='none'%3E%3Cpath d='M1200,0 C1050,40 900,80 750,40 C600,0 450,40 300,80 C150,120 0,40 0,40 L0,0 L1200,0 Z' fill='%23faf7f2'/%3E%3C/svg%3E&quot;); background-size: 100% 100%;"></div>
                
                {{-- Bottom Torn Edge --}}
                <div class="absolute bottom-0 left-0 w-full h-10 translate-y-[99%] z-10 opacity-70" 
                     style="background-image: url(&quot;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1200 120' preserveAspectRatio='none'%3E%3Cpath d='M0,0 C150,80 300,20 450,60 C600,100 750,40 900,80 C1050,120 1200,40 1200,40 L1200,120 L0,120 Z' fill='%23faf7f2'/%3E%3C/svg%3E&quot;); background-size: 100% 100%;"></div>
            </div>

            <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16">
                    <span class="font-script text-gold text-3xl mb-2 block">Categories</span>
                    <h2 class="font-heading text-forest-dark text-4xl md:text-5xl font-bold uppercase heritage-heading">Our Expertise</h2>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    @foreach($categories->take(3) as $index => $cat)
                        @php
                            $icons = ['fa-bowl-rice', 'fa-plate-wheat', 'fa-pepper-hot'];
                            $icon = $icons[$index % count($icons)];
                        @endphp
                        <a href="/menu?category={{ $cat->id }}" wire:navigate
                            class="relative rounded-2xl overflow-hidden h-[500px] group shadow-premium transition-all duration-700 hover:-translate-y-4">
                            
                            @if($cat->image)
                                <img src="{{ asset('storage/' . $cat->image) }}"
                                    class="w-full h-full object-cover group-hover:scale-125 transition duration-[2s]">
                            @else
                                <div class="w-full h-full bg-forest"></div>
                            @endif

                            {{-- Overlay Content --}}
                            <div class="absolute inset-0 bg-gradient-to-t from-forest-dark/90 via-forest-dark/40 to-transparent flex flex-col items-center justify-end h-full pb-12 text-white">
                                <div class="mb-6 transform group-hover:scale-110 group-hover:-translate-y-4 transition-all duration-700 bg-gold/10 p-5 rounded-full backdrop-blur-sm border border-gold/20">
                                    <i class="fa-solid {{ $icon }} text-4xl text-gold-premium"></i>
                                </div>
                                <h3 class="font-heading text-2xl lg:text-3xl tracking-[0.3em] uppercase font-bold text-center">
                                    {{ $cat->name[$locale] ?? $cat->name['en'] ?? '...' }}
                                </h3>
                                <div class="w-12 h-0.5 bg-gold mt-6 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-700 origin-center"></div>
                            </div>

                            {{-- Border Effect --}}
                            <div class="absolute inset-6 border border-white/10 rounded-xl pointer-events-none group-hover:inset-8 transition-all duration-700"></div>
                        </a>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    {{-- ═══ DELICIOUS MENU SECTION (Forest Green Layout) ═══ --}}
    <section class="py-24 bg-forest-dark relative overflow-hidden forest-texture" x-data="{ activeTab: 'APPETIZERS' }">
        {{-- Decorative Circles/Lines --}}
        <div class="absolute left-8 top-1/2 -translate-y-1/2 decoration-dots opacity-30 hidden lg:flex">
            @for($i = 0; $i < 40; $i++)
                <div class="decoration-dot"></div>
                @if($i % 5 == 4)
                    <div class="w-24 h-[1px] bg-gold/20 -ml-4 my-1"></div>
                @endif
            @endfor
        </div>

        <div class="max-w-7xl mx-auto px-4 relative z-10">
            {{-- Section Header --}}
            <div class="text-center mb-16">
                <h2 class="font-heading text-white text-5xl md:text-6xl font-bold uppercase tracking-tight mb-8">Delicious Menu</h2>
                
                {{-- Tabs --}}
                <div class="flex flex-wrap justify-center items-center gap-6 md:gap-12 font-heading text-[13px] font-bold tracking-[0.2em] text-white/60">
                    <button @click="activeTab = 'APPETIZERS'" :class="activeTab === 'APPETIZERS' ? 'active-tab-gold' : 'hover:text-white'" class="pb-2 transition-all uppercase">Appetizers</button>
                    <span class="text-gold/40 text-xl hidden md:block">✦</span>
                    <button @click="activeTab = 'MAIN DISHES'" :class="activeTab === 'MAIN DISHES' ? 'active-tab-gold' : 'hover:text-white'" class="pb-2 transition-all uppercase">Main Dishes</button>
                    <span class="text-gold/40 text-xl hidden md:block">✦</span>
                    <button @click="activeTab = 'DESSERTS'" :class="activeTab === 'DESSERTS' ? 'active-tab-gold' : 'hover:text-white'" class="pb-2 transition-all uppercase">Desserts</button>
                    <span class="text-gold/40 text-xl hidden md:block">✦</span>
                    <button @click="activeTab = 'BEVERAGES'" :class="activeTab === 'BEVERAGES' ? 'active-tab-gold' : 'hover:text-white'" class="pb-2 transition-all uppercase">Beverages</button>
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-16 items-center bg-forest-light/30 rounded-3xl p-8 md:p-12 border border-white/5 shadow-3xl">
                {{-- Left Content: Menu Items --}}
                <div class="lg:col-span-7 space-y-12">
                    @php
                        $menuData = [
                            'APPETIZERS' => [
                                ['name' => 'STUFFED MUSHROOMS', 'price' => '25.00', 'desc' => 'Flavorful, filled with panko bread crumbs, pine nuts, parsley, sun-dried tomatoes, and cheese.', 'image' => 'https://images.unsplash.com/photo-1621852004158-f3bc188caa2d?ixlib=rb-4.0.3&auto=format&fit=crop&w=150&q=80'],
                                ['name' => 'JALAPENO POPPERS', 'price' => '29.00', 'desc' => 'Greek yogurt filling instead of a traditional cream cheese one, it\'s every bit as delicious.', 'image' => 'https://images.unsplash.com/photo-1599321955419-780136f46279?ixlib=rb-4.0.3&auto=format&fit=crop&w=150&q=80'],
                                ['name' => 'CAPRESE SKEWERS', 'price' => '45.00', 'desc' => 'Drizzle these colorful skewers with an easy balsamic reduction for a pop of sweet tangy flavor.', 'image' => 'https://images.unsplash.com/photo-1603033331443-41e974e4c5b3?ixlib=rb-4.0.3&auto=format&fit=crop&w=150&q=80'],
                            ],
                            'MAIN DISHES' => [
                                ['name' => 'CHICKEN TIKKA MASALA', 'price' => '35.00', 'desc' => 'Roasted marinated chicken chunks in a spiced creamy sauce.', 'image' => 'https://images.unsplash.com/photo-1565557623262-b51c2513a641?ixlib=rb-4.0.3&auto=format&fit=crop&w=150&q=80'],
                                ['name' => 'PALAK PANEER', 'price' => '32.00', 'desc' => 'Classic Indian dish made with spinach and cottage cheese.', 'image' => 'https://images.unsplash.com/photo-1601050633647-81a3cf8f0fba?ixlib=rb-4.0.3&auto=format&fit=crop&w=150&q=80'],
                            ],
                            'DESSERTS' => [
                                ['name' => 'GULAB JAMUN', 'price' => '15.00', 'desc' => 'Deep fried milk dumplings soaked in sugar syrup.', 'image' => 'https://images.unsplash.com/photo-1589119908995-c6837fa14848?ixlib=rb-4.0.3&auto=format&fit=crop&w=150&q=80'],
                            ],
                            'BEVERAGES' => [
                                ['name' => 'MANGO LASSI', 'price' => '10.00', 'desc' => 'Refreshing yogurt-based drink made with mango pulp.', 'image' => 'https://images.unsplash.com/photo-1546173159-315724a31696?ixlib=rb-4.0.3&auto=format&fit=crop&w=150&q=80'],
                            ]
                        ];
                    @endphp

                    @foreach($menuData as $category => $items)
                        <div x-show="activeTab === '{{ $category }}'" 
                             x-transition:enter="transition ease-out duration-500"
                             x-transition:enter-start="opacity-0 translate-x-10"
                             x-transition:enter-end="opacity-100 translate-x-0"
                             class="space-y-10">
                            @foreach($items as $item)
                                <div class="flex items-center gap-6 group">
                                    <div class="shrink-0 relative">
                                        <img src="{{ $item['image'] }}" class="w-20 h-20 rounded-full object-cover border-2 border-gold/30 group-hover:border-gold transition-colors duration-500">
                                    </div>
                                    <div class="flex-grow">
                                        <div class="flex items-end gap-4 mb-2">
                                            <h4 class="font-heading font-bold text-white text-lg tracking-widest uppercase">{{ $item['name'] }} <span class="ml-2 text-[8px] bg-gold text-white px-2 py-0.5 rounded-sm align-middle">NEW</span></h4>
                                            <div class="menu-item-dotted mb-1"></div>
                                            <span class="font-heading text-lg font-bold text-gold shrink-0">Rs{{ $item['price'] }}</span>
                                        </div>
                                        <p class="text-white/50 text-[13px] font-body leading-relaxed max-w-xl italic">
                                            {{ $item['desc'] }}
                                        </p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endforeach
                </div>

                {{-- Right Content: Arched Image --}}
                <div class="lg:col-span-5 flex justify-center lg:justify-end">
                    <div class="menu-arched-frame max-w-[400px]">
                        <div class="overflow-hidden" style="border-top-left-radius: 50% 100%; border-top-right-radius: 50% 100%;">
                            <img src="https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                                 class="w-full h-full object-cover aspect-[4/5] hover:scale-110 transition-transform duration-1000">
                        </div>
                    </div>
                </div>
            </div>

            {{-- Section Footer --}}
            <div class="text-center mt-16">
                <p class="text-white/40 font-body text-sm mb-8 italic">During winter daily from 7:00 pm to 9:00 pm</p>
                <a href="/menu" wire:navigate
                   class="inline-block border border-gold text-gold hover:bg-gold hover:text-white font-heading font-bold uppercase tracking-[0.3em] text-[11px] px-12 py-5 transition-all">
                    View All Menu
                </a>
            </div>
        </div>
    </section>

    {{-- ═══ POPULAR ITEMS (Luxury Culinary Highlights) ═══ --}}
    @if(isset($popularItems) && $popularItems->count())
        <section class="py-32 bg-white relative overflow-hidden">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-24">
                    <span class="font-script text-gold text-3xl mb-2 block">Chef Recommendation</span>
                    <h2 class="font-heading text-forest-dark text-4xl md:text-5xl font-bold uppercase heritage-heading">Signature Deals</h2>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-x-20 gap-y-16">
                    @foreach($popularItems as $item)
                        <div class="flex flex-col md:flex-row items-center md:items-start gap-8 group cursor-pointer animate-fade-in-up">
                            
                            {{-- Circular Thumbnail with Premium Border --}}
                            <div class="shrink-0 relative">
                                <div class="w-[140px] h-[140px] relative">
                                    @if($item->primaryImage)
                                        <img src="{{ asset('storage/' . $item->primaryImage->url) }}"
                                            class="w-full h-full rounded-full object-cover shadow-premium border-[8px] border-cream group-hover:border-gold transition-colors duration-700">
                                    @else
                                        <div class="w-full h-full rounded-full bg-forest flex items-center justify-center text-gold shadow-premium border-[8px] border-cream group-hover:border-gold transition-colors duration-700">
                                            <i class="fa-solid fa-utensils text-3xl"></i>
                                        </div>
                                    @endif
                                    
                                    {{-- Rotating SVG Border Animation (Subtle) --}}
                                    <div class="absolute -inset-2 border border-dotted border-gold opacity-0 group-hover:opacity-30 rounded-full animate-spin-slow transition-opacity"></div>
                                </div>

                                {{-- Floating Badge --}}
                                @if($item->is_new || $item->is_popular)
                                    <div class="absolute -top-2 -right-4 bg-gold text-white text-[9px] uppercase font-bold tracking-[0.2em] px-4 py-1.5 rounded-full border-4 border-white shadow-premium z-10">
                                        {{ $item->is_new ? 'New Arrival' : 'Best Seller' }}
                                    </div>
                                @endif
                            </div>

                            {{-- Content (Title, Dotted Line, Price) --}}
                            <div class="flex-grow pt-4 text-center md:text-left">
                                <div class="flex flex-col md:flex-row items-center md:items-end gap-2 mb-4">
                                    <h4 class="font-heading font-bold text-forest-dark text-2xl tracking-wide group-hover:text-gold transition-colors">
                                        {{ $item->name[$locale] ?? $item->name['en'] ?? '...' }}
                                    </h4>
                                    <div class="hidden md:block flex-grow border-b border-dotted border-gray-300 mb-1 mx-4"></div>
                                    <span class="font-heading text-2xl font-bold text-gold">
                                        {{ number_format($item->base_price_cents / 100, 2) }} {{ $item->currency_code }}
                                    </span>
                                </div>

                                @if(!empty($item->description[$locale] ?? $item->description['en'] ?? ''))
                                    <p class="text-[14px] text-gray-500 font-body leading-relaxed max-w-xl mb-6 italic opacity-80 group-hover:opacity-100 transition-opacity">
                                        "{{ Str::limit($item->description[$locale] ?? $item->description['en'], 100) }}"
                                    </p>
                                @endif

                                @if($item->spiciness_level)
                                    <div class="flex justify-center md:justify-start gap-1.5">
                                        <span class="text-[9px] font-heading font-bold text-gray-400 uppercase tracking-widest mr-2 pt-0.5">Heat Level:</span>
                                        @for($i = 1; $i <= 5; $i++)
                                            <div class="w-1.5 h-1.5 rounded-full transition-all duration-500 {{ $i <= $item->spiciness_level ? 'bg-red-600 scale-125' : 'bg-gray-200' }}"></div>
                                        @endfor
                                    </div>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="text-center mt-24">
                    <a href="/menu" wire:navigate
                        class="inline-block relative group">
                        <span class="relative z-10 font-heading text-forest-dark font-bold uppercase tracking-[0.4em] text-sm pb-2 border-b-2 border-gold/30 group-hover:border-gold transition-all">Explore Culinary Map</span>
                        <div class="absolute -bottom-1 left-0 w-0 h-[2px] bg-gold transition-all duration-500 group-hover:w-full"></div>
                    </a>
                </div>
            </div>
        </section>
    @endif

    {{-- ═══ OUR JOURNEY (Heritage Story Layout) ═══ --}}
    <section class="relative py-40 bg-cream overflow-hidden bg-paper">
        {{-- Side Graphics --}}
        <div class="absolute left-0 bottom-0 opacity-10 pointer-events-none transform -scale-x-100 translate-y-20">
            <img src="https://themesflat.co/html/restaurant/coffee/assets/images/bg/graphic-header.png" class="w-[600px] grayscale">
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row items-center gap-24">
                
                {{-- Left Side: Large Overlapping Images --}}
                <div class="w-full lg:w-1/2 flex justify-center lg:justify-start">
                    <div class="relative group">
                        {{-- Circular Frame with Animation --}}
                        <div class="relative w-[380px] h-[380px] md:w-[550px] md:h-[550px]">
                            <div class="absolute inset-0 border-[20px] border-white rounded-full shadow-premium z-10 transition-transform duration-1000 group-hover:scale-[1.03]"></div>
                            <img src="https://images.unsplash.com/photo-1596797038583-1c198f4fd7f2?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                                 class="w-full h-full rounded-full object-cover relative z-0 group-hover:scale-110 transition-transform duration-[3s]">
                            
                            {{-- Rotating Quality Seal --}}
                            <div class="absolute -bottom-6 -right-6 w-40 h-40 bg-white rounded-full p-4 shadow-premium z-20 flex flex-col items-center justify-center text-center border-4 border-gold">
                                <i class="fa-solid fa-medal text-gold text-4xl mb-2"></i>
                                <span class="font-heading text-[10px] font-bold uppercase tracking-widest text-forest-dark">Premium Quality Since 2003</span>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Right Side: Content --}}
                <div class="w-full lg:w-1/2">
                    <div class="flex items-center gap-4 mb-6 animate-fade-in">
                        <span class="font-script text-gold text-4xl">Our Heritage</span>
                        <div class="h-px w-16 bg-gold/40"></div>
                    </div>
                    
                    <h2 class="font-heading text-forest-dark text-4xl lg:text-5xl lg:text-6xl font-bold uppercase leading-[0.95] mb-10 heritage-heading">
                        Traditional Soul,<br><span class="text-gold">Modern Heart</span>
                    </h2>
                    
                    <p class="font-body text-gray-500 text-[16px] leading-relaxed mb-12 max-w-xl opacity-90">
                        At Love Curry, we believe that every spice tells a story. For over two decades, our family has preserved the sacred art of Indian slow-cooking, using freshly stone-ground masalas and organic ingredients to feed both body and spirit.
                    </p>
                    
                    {{-- Features Grid (2x2) --}}
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-x-12 gap-y-10 mb-16">
                        @foreach([
                            ['title' => 'Chef Heritage', 'icon' => 'fa-user-tie', 'text' => 'Centuries of recipe wisdom.'],
                            ['title' => 'Pure Spices', 'icon' => 'fa-mortar-pestle', 'text' => 'Ground in-house daily.'],
                            ['title' => 'Clay Tandoor', 'icon' => 'fa-fire-burner', 'text' => 'Ancient thermal techniques.'],
                            ['title' => 'Love Crafted', 'icon' => 'fa-heart', 'text' => 'Made for your family.'],
                        ] as $feature)
                            <div class="flex items-start gap-5 group/item cursor-default">
                                <div class="w-14 h-14 bg-white border border-gold/20 rounded-xl flex items-center justify-center text-gold shrink-0 group-hover/item:bg-gold group-hover/item:text-white transition-all duration-500 shadow-sm group-hover/item:shadow-gold/20">
                                    <i class="fa-solid {{ $feature['icon'] }} text-xl"></i>
                                </div>
                                <div>
                                    <h4 class="text-forest-dark font-heading font-bold uppercase tracking-widest text-sm mb-1 transition-colors group-hover/item:text-gold">
                                        {{ $feature['title'] }}
                                    </h4>
                                    <p class="text-[12px] text-gray-400 font-body">{{ $feature['text'] }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    {{-- Action & Signature --}}
                    <div class="flex flex-col sm:flex-row items-center gap-12 pt-8 border-t border-gray-100">
                        <a href="/about" wire:navigate 
                           class="bg-forest hover:bg-gold text-white font-heading font-bold uppercase tracking-[0.3em] text-[12px] px-12 py-5 transition-all shadow-premium rounded-sm shrink-0">
                            Our Full Story
                        </a>
                        
                        <div class="flex items-center gap-6">
                            <div class="flex flex-col text-right">
                                <span class="font-script text-forest-dark text-4xl opacity-90">Rajvinder Patel</span>
                                <span class="font-heading text-[10px] text-gold uppercase tracking-[0.4em] mt-1 font-bold">Founding Master Chef</span>
                            </div>
                            <img src="https://images.unsplash.com/photo-1583394838336-acd977730f8a?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80" class="w-16 h-16 rounded-full border-2 border-gold object-cover grayscale">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- ═══ TESTIMONIALS ═══ --}}
    <section class="py-24 bg-cream sketch-bg relative overflow-hidden">
        <div class="max-w-4xl mx-auto px-4 text-center" x-data="{ active: 0 }">
            <div class="flex items-center justify-center gap-3 mb-6">
                <span class="font-script text-gold text-2xl">Testimonials</span>
                <div class="h-[1px] w-12 bg-gold"></div>
            </div>
            <h2 class="font-heading text-brown-darker text-4xl lg:text-5xl font-bold uppercase mb-16">What Our Guests Say</h2>

            <div class="relative">
                <div class="flex flex-col items-center justify-center">
                    <div class="px-4 md:px-12 min-h-[220px] flex items-center justify-center w-full relative">
                        
                        <div x-show="active === 0" x-transition.opacity.duration.500ms class="absolute inset-0 flex flex-col items-center justify-center">
                            <svg class="w-12 h-12 text-gold/20 mx-auto mb-6" fill="currentColor" viewBox="0 0 24 24"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg>
                            <p class="text-xl md:text-2xl text-brown-darker font-body leading-relaxed mb-8 font-medium">
                                "The best Indian food I've ever had outside of India. The butter chicken is absolutely divine, and the naan bread is always fresh. A true gem!"
                            </p>
                            <p class="font-heading font-bold uppercase tracking-widest text-[#696969] text-sm">Sarah Johnson <span class="text-gold mx-2">/</span> Food Critic</p>
                        </div>

                        <div x-show="active === 1" x-transition.opacity.duration.500ms class="absolute inset-0 flex flex-col items-center justify-center" style="display: none;">
                            <svg class="w-12 h-12 text-gold/20 mx-auto mb-6" fill="currentColor" viewBox="0 0 24 24"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg>
                            <p class="text-xl md:text-2xl text-brown-darker font-body leading-relaxed mb-8 font-medium">
                                "Love Curry never disappoints. The atmosphere is warm and inviting, and the staff treats you like family. The biryani is a must-try!"
                            </p>
                            <p class="font-heading font-bold uppercase tracking-widest text-[#696969] text-sm">Michael Chen <span class="text-gold mx-2">/</span> Local Guide</p>
                        </div>

                        <div x-show="active === 2" x-transition.opacity.duration.500ms class="absolute inset-0 flex flex-col items-center justify-center" style="display: none;">
                            <svg class="w-12 h-12 text-gold/20 mx-auto mb-6" fill="currentColor" viewBox="0 0 24 24"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg>
                            <p class="text-xl md:text-2xl text-brown-darker font-body leading-relaxed mb-8 font-medium">
                                "Perfect for a date night or family dinner. The spice levels are perfectly customizable, and the presentation is beautiful. Can't recommend it enough!"
                            </p>
                            <p class="font-heading font-bold uppercase tracking-widest text-[#696969] text-sm">Emma Williams <span class="text-gold mx-2">/</span> Regular Guest</p>
                        </div>
                    </div>
                </div>

                {{-- Custom Navigation --}}
                <div class="flex items-center justify-center gap-8 mt-12">
                     <button class="w-10 h-10 border-2 border-brown-dark rounded-full flex items-center justify-center text-brown-dark hover:bg-brown-dark hover:text-white transition-colors" @click="active = active > 0 ? active - 1 : 2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>
                    </button>
                    <div class="flex gap-3">
                        @for($i = 0; $i < 3; $i++)
                            <button class="w-2.5 h-2.5 rounded-full transition-all"
                                :class="active === {{ $i }} ? 'bg-gold w-6' : 'bg-gray-300 hover:bg-gray-400'"
                                @click="active = {{ $i }}"></button>
                        @endfor
                    </div>
                    <button class="w-10 h-10 border-2 border-brown-dark rounded-full flex items-center justify-center text-brown-dark hover:bg-brown-dark hover:text-white transition-colors" @click="active = active < 2 ? active + 1 : 0">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                    </button>
                </div>
            </div>
        </div>
    </section>

    {{-- ═══ DELICIOUS MENU SECTION (Forest Luxury) ═══ --}}
    <section class="relative py-32 overflow-hidden forest-texture bg-forest-dark">
        <div class="max-w-7xl mx-auto px-4 relative z-10">
            <div class="text-center mb-16 animate-fade-in">
                <span class="font-script text-gold text-4xl mb-2 block">Our Menu</span>
                <h2 class="font-heading text-white text-4xl md:text-5xl lg:text-6xl font-bold uppercase heritage-heading">Delicious Menu</h2>
            </div>

            <div x-data="{ activeTab: 'Appetizers' }" class="flex flex-col items-center">
                {{-- Tabs Wrapper --}}
                <div class="flex flex-wrap justify-center gap-6 md:gap-12 mb-16 pb-4 border-b border-white/5 animate-fade-in">
                    @foreach(['Appetizers', 'Main Dishes', 'Desserts', 'Beverages'] as $tab)
                        <button @click="activeTab = '{{ $tab }}'" 
                                :class="activeTab === '{{ $tab }}' ? 'text-gold-premium scale-110 active-tab-gold' : 'text-white/40 hover:text-white'"
                                class="font-heading font-bold uppercase tracking-[0.4em] text-[11px] transition-all duration-500 relative pb-4">
                            {{ $tab }}
                            <div x-show="activeTab === '{{ $tab }}'" 
                                 x-transition:enter="transition scale-x-0 duration-500"
                                 x-transition:enter-end="scale-x-100"
                                 class="absolute bottom-0 left-0 w-full h-[2px] bg-gold shadow-gold"></div>
                        </button>
                    @endforeach
                </div>

                {{-- Tab Content Grid --}}
                <div class="w-full grid grid-cols-1 lg:grid-cols-2 gap-x-16 gap-y-12 min-h-[500px]">
                    <template x-if="activeTab === 'Appetizers'">
                        @for($i = 0; $i < 4; $i++)
                            <div class="flex items-center gap-6 group animate-fade-in-up">
                                <div class="w-20 h-20 md:w-24 md:h-24 shrink-0 rounded-full overflow-hidden border-2 border-gold/20 group-hover:border-gold transition-colors duration-700">
                                    <img src="https://images.unsplash.com/photo-1541529086526-db283c563270?ixlib=rb-4.0.3&auto=format&fit=crop&w=200&q=80" 
                                         class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-1000">
                                </div>
                                <div class="flex-grow">
                                    <div class="flex items-end justify-between gap-4 mb-2">
                                        <h4 class="font-heading font-bold text-white text-lg md:text-xl tracking-wider group-hover:text-gold transition-colors">Vegetable Samosa</h4>
                                        <div class="flex-grow border-b border-dotted border-white/10 mb-1"></div>
                                        <span class="font-heading text-gold text-lg md:text-xl font-bold">$12.00</span>
                                    </div>
                                    <p class="text-[12px] text-white/40 font-body leading-relaxed group-hover:text-white/60 transition-colors">Crispy pastry filled with spiced potatoes and peas, served with mint chutney.</p>
                                </div>
                            </div>
                        @endfor
                    </template>
                    {{-- Other templates would follow similar logic --}}
                </div>

                <div class="mt-20 text-center animate-fade-in">
                    <a href="/menu" wire:navigate
                       class="inline-block bg-transparent border border-gold text-gold hover:bg-gold hover:text-white font-heading font-bold uppercase tracking-[0.3em] text-[11px] px-12 py-5 rounded-sm transition-all shadow-gold/20">
                        View All Menu
                    </a>
                </div>
            </div>
        </div>

        {{-- Decorative Elements --}}
        <div class="absolute top-0 right-0 w-64 h-64 opacity-5 pointer-events-none transform translate-x-1/2 -translate-y-1/2">
            <img src="https://themesflat.co/html/restaurant/coffee/assets/images/bg/graphic-header.png" class="invert">
        </div>
    </section>

    {{-- ═══ BOOK A TABLE SECTION (Heritage Overlay) ═══ --}}
    <section class="relative py-40 overflow-hidden min-h-screen flex items-center">
        {{-- Fixed Background Image --}}
        <div class="absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1550966841-3ee4ad00a0d6?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80" 
                 class="w-full h-full object-cover grayscale-[30%] brightness-[0.25]">
            <div class="absolute inset-0 bg-forest/40"></div>
        </div>

        <div class="max-w-4xl mx-auto px-4 relative z-10 w-full animate-fade-in-up">
            <div class="bg-forest-light/95 backdrop-blur-xl rounded-3xl p-8 md:p-20 border border-gold/30 shadow-4xl relative overflow-hidden">
                {{-- Decorative Corner Accents --}}
                <div class="absolute top-0 left-0 w-24 h-24 border-l-2 border-t-2 border-gold/40 rounded-tl-3xl"></div>
                <div class="absolute bottom-0 right-0 w-24 h-24 border-r-2 border-b-2 border-gold/40 rounded-br-3xl"></div>

                <div class="text-center mb-16">
                    <div class="flex items-center justify-center gap-4 mb-4">
                        <div class="h-[1px] w-12 bg-gold/40"></div>
                        <span class="font-script text-gold text-4xl">Reservation</span>
                        <div class="h-[1px] w-12 bg-gold/40"></div>
                    </div>
                    <h2 class="font-heading text-white text-4xl md:text-5xl lg:text-6xl font-bold uppercase tracking-wide heritage-heading">Book A Table</h2>
                    <p class="text-white/40 text-[10px] font-heading font-bold uppercase tracking-[0.5em] mt-6">Taste the heritage, feel the luxury</p>
                </div>

                <form class="space-y-8">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        {{-- Name --}}
                        <div class="relative group">
                            <input type="text" placeholder="Your Name" class="w-full reservation-input px-8 py-5 rounded-xl border-white/5 bg-white/5 focus:bg-white/10 [color-scheme:dark]">
                            <i class="fa-solid fa-user absolute right-8 top-1/2 -translate-y-1/2 text-gold/20 group-focus-within:text-gold transition-colors"></i>
                        </div>
                        {{-- Phone --}}
                        <div class="relative group">
                            <input type="tel" placeholder="Phone Number" class="w-full reservation-input px-8 py-5 rounded-xl border-white/5 bg-white/5 focus:bg-white/10 [color-scheme:dark]">
                            <i class="fa-solid fa-phone absolute right-8 top-1/2 -translate-y-1/2 text-gold/20 group-focus-within:text-gold transition-colors"></i>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                        {{-- Number of People --}}
                        <div class="relative group">
                            <select class="w-full reservation-input reservation-select px-8 py-5 rounded-xl border-white/5 bg-white/5 focus:bg-white/10 [color-scheme:dark]">
                                <option value="" disabled selected>Dining Party</option>
                                <option value="1">1 Person</option>
                                <option value="2">2 People</option>
                                <option value="4">4 People</option>
                                <option value="6">6+ People</option>
                            </select>
                        </div>
                        {{-- Date --}}
                        <div class="relative group">
                            <input type="date" class="w-full reservation-input px-8 py-5 rounded-xl border-white/5 bg-white/5 focus:bg-white/10 [color-scheme:dark]">
                        </div>
                        {{-- Time --}}
                        <div class="relative group">
                            <select class="w-full reservation-input reservation-select px-8 py-5 rounded-xl border-white/5 bg-white/5 focus:bg-white/10 [color-scheme:dark]">
                                <option value="" disabled selected>Select Time</option>
                                <option value="18:00">06:00 PM</option>
                                <option value="19:00">07:00 PM</option>
                                <option value="20:00">08:00 PM</option>
                                <option value="21:00">09:00 PM</option>
                            </select>
                        </div>
                    </div>

                    {{-- Message --}}
                    <div class="relative group">
                        <textarea placeholder="Special Requests (Optional)" rows="4" class="w-full reservation-input px-8 py-5 rounded-xl border-white/5 bg-white/5 focus:bg-white/10 [color-scheme:dark] resize-none"></textarea>
                    </div>

                    <div class="text-center pt-6">
                        <button type="submit" class="bg-gold hover:bg-gold-premium text-white font-heading font-bold uppercase tracking-[0.4em] text-[11px] px-20 py-6 transition-all shadow-gold/20 rounded-md hover:scale-105 active:scale-95 transform duration-300">
                            Confirm Reservation
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    {{-- ═══ CTA BANNER (Heritage Callout) ═══ --}}
    <section class="relative py-24 overflow-hidden bg-paper border-t border-gold/10">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <div class="flex flex-col md:flex-row items-center justify-center gap-12 lg:gap-24">
                <div class="text-left max-w-lg">
                    <span class="font-script text-gold text-4xl mb-2 block">Join Our Club</span>
                    <h2 class="font-heading text-forest-dark text-4xl font-bold uppercase tracking-tight leading-tight">Get Exclusive Offers <br>& Secret Recipes</h2>
                </div>
                
                <div class="flex items-center gap-4 w-full max-w-md">
                    <input type="email" placeholder="Enter your email" 
                           class="flex-grow bg-white border border-gray-100 px-8 py-5 rounded-sm shadow-sm font-body text-sm focus:border-gold outline-none transition-all">
                    <button class="bg-forest text-white font-heading font-bold uppercase tracking-widest text-[11px] px-10 py-5 rounded-sm hover:bg-gold transition-colors shadow-premium shrink-0">
                        Subscribe
                    </button>
                </div>
            </div>
        </div>
    </section>
</div>
