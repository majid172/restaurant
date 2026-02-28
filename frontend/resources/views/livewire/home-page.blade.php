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
            <img src="https://images.unsplash.com/photo-1497935586351-b67a49e012bf?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80" 
                 class="w-full h-full object-cover transition-opacity duration-1000"
                 x-show="activeSlide === 1"
                 x-transition:enter="opacity-0"
                 x-transition:enter-end="opacity-100">
            <div class="absolute inset-0 bg-black/70"></div>
        </div>

        {{-- Content --}}
        <div class="relative z-10 px-4 max-w-4xl mx-auto -mt-10">
            <div x-show="activeSlide === 1" 
                 x-transition:enter="transition ease-out duration-1000 transform scale-95 opacity-0" 
                 x-transition:enter-end="scale-100 opacity-100">
                
                <h3 class="font-script text-white text-4xl md:text-5xl mb-2 animate-fade-in">- Welcome to Love Curry Shop -</h3>
                
                <h1 class="font-heading text-white text-5xl md:text-7xl font-bold uppercase tracking-wide mb-6 leading-tight drop-shadow-2xl">
                    Our Passion is in<br>Our Kitchen
                </h1>
                
                <p class="text-gray-300 max-w-2xl mx-auto mb-10 text-sm md:text-base leading-relaxed font-body">
                    Love Curry is the perfect spot to celebrate a special occasion or to 
                    simply head out for a bite to eat. Experience authentic Indian cuisine prepared with passion.
                </p>

                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="/menu" wire:navigate
                        class="bg-gold hover:bg-gold-dark text-white font-heading font-medium uppercase tracking-widest text-sm px-8 py-4 rounded transition shadow-lg">
                        View All Menu
                    </a>
                    <a href="/contact" wire:navigate
                        class="bg-white hover:bg-gray-200 text-brown-dark font-heading font-medium uppercase tracking-widest text-sm px-8 py-4 rounded transition shadow-lg">
                        Book A Table
                    </a>
                </div>
            </div>

            {{-- Slider Indicators --}}
            <div class="flex gap-4 mt-20 justify-center">
                <template x-for="i in 3" :key="i">
                    <button @click="activeSlide = i; clearInterval(auto)" 
                            class="w-2 h-2 rounded-full border transition-all duration-300"
                            :class="activeSlide === i ? 'bg-white border-white scale-125' : 'border-white/50 bg-transparent'"></button>
                </template>
            </div>
        </div>

        {{-- Torn Edge Bottom --}}
        <div class="torn-edge-bottom z-20"></div>
    </section>

    {{-- ═══ ABOUT SECTION (Overlapping Coffee Layout) ═══ --}}
    <section class="py-32 bg-white relative overflow-hidden flex items-center min-h-[800px]">
        {{-- Full Width Background Sketch --}}
        <div class="absolute right-0 top-0 bottom-0 w-1/2 opacity-20 pointer-events-none">
            <img src="https://themesflat.co/html/restaurant/coffee/assets/images/bg/graphic-header.png" class="w-full h-full object-contain object-right">
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 w-full">
            <div class="flex flex-col lg:flex-row items-center">
                
                {{-- Left Side: Main Portrait Image --}}
                <div class="w-full lg:w-1/2 relative mb-16 lg:mb-0">
                    <img src="https://images.unsplash.com/photo-1559496417-e7f25cb247f3?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                         alt="About Our Kitchen" 
                         class="w-[90%] h-[600px] object-cover rounded-xl shadow-2xl">
                    
                    {{-- Overlapping White Text Box --}}
                    <div class="absolute top-1/2 left-[40%] lg:left-[50%] transform -translate-y-1/2 bg-white p-10 lg:p-16 shadow-2xl rounded-xl z-20 w-[110%] md:w-[80%] lg:w-[100%] border border-gray-100">
                        <div class="flex items-center gap-2 mb-6">
                            <i class="fa-solid fa-cookie-bite text-gold"></i>
                            <span class="font-heading font-medium text-gray-400 uppercase tracking-[0.3em] text-[10px]">Coffee Shop Since 2003</span>
                        </div>
                        
                        <h2 class="font-heading text-brown-darker text-4xl lg:text-5xl font-bold uppercase leading-[1.1] mb-8">
                            We Are Not Your<br>Average Coffee Shop
                        </h2>
                        
                        <p class="font-body text-gray-500 text-[14px] leading-relaxed mb-6">
                            We offer some of the best locally roasted coffee using "Brazilian Santos" beans. Enjoy Dark, Blonde, Jamaican, Italian & Decaf roasts. Also available are our specialty Lattes, Frappes, Mochas, Cappuccinos, Americanos & more ..
                        </p>
                        <p class="font-body text-gray-500 text-[14px] leading-relaxed mb-10">
                            To see more of our coffee, specialty drinks & food menus, please click the link below. There are many variations of passages of lorem ipsum available but the majority have suffered alteration in some form by injected.
                        </p>
                        
                        <a href="/about" wire:navigate 
                           class="inline-block bg-[#c19d60] hover:bg-brown-dark text-white font-heading font-bold uppercase tracking-widest text-[11px] px-10 py-5 transition-all shadow-xl rounded">
                            Click to Read More
                        </a>
                    </div>
                </div>

                {{-- Right Side: Business Hours Box --}}
                <div class="w-full lg:w-1/2 flex justify-center lg:justify-end relative group">
                    {{-- Decorative Gold Offset Border --}}
                    <div class="absolute inset-0 border-[12px] border-[#c19d60]/20 translate-x-4 translate-y-4 rounded-2xl"></div>
                    
                    <div class="bg-[#1c1512] rounded-xl p-10 lg:p-14 w-full max-w-[450px] shadow-2xl relative z-30 transform transition-transform duration-500 hover:scale-[1.02]">
                        <h3 class="font-heading text-[#c19d60] text-3xl font-bold uppercase tracking-[0.1em] mb-10 text-center">Hour Opening</h3>
                        
                        <div class="space-y-6">
                            @php
                                $hours = [
                                    'Monday' => '7:00 - 21:00',
                                    'Tuesday' => '7:00 - 21:00',
                                    'Wednesday' => '7:00 - 21:00',
                                    'Thursday' => '7:00 - 21:00',
                                    'Friday' => '8:00 - 21:00',
                                    'Saturday' => '7:00 - 21:00',
                                    'Sunday' => 'CLOSED',
                                ];
                            @endphp
                            @foreach($hours as $day => $time)
                                <div class="flex justify-between items-center group/item">
                                    <span class="font-heading text-white uppercase text-[12px] tracking-widest font-bold">{{ $day }}</span>
                                    <div class="flex-grow border-b border-white/10 mx-4 mt-1"></div>
                                    <span class="font-body @if($time === 'CLOSED') text-gold @else text-gray-400 @endif text-[12px] font-medium">{{ $time }}</span>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                {{-- Background Graphic Circle --}}
                <div class="absolute left-10 top-20 w-8 h-8 rounded-full border border-gray-200"></div>
            </div>
        </div>
    </section>

    {{-- ═══ CATEGORY CARDS (Vertical Band Layout) ═══ --}}
    @if(isset($categories) && $categories->count())
        <section class="relative py-24 bg-white overflow-hidden">
            
            {{-- Torn Background Band --}}
            <div class="absolute inset-y-20 left-0 right-0 bg-[#f4f1ea] z-0">
                {{-- Top Torn Edge --}}
                <div class="absolute top-0 left-0 w-full h-10 -translate-y-[99%] z-10" 
                     style="background-image: url(&quot;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1200 120' preserveAspectRatio='none'%3E%3Cpath d='M0,120V60l15,5c10,3,30,12,50,8s40-15,60-12,40,18,60,15,40-18,60-22,40,2,60,10,40,25,60,28,40-8,60-20,40-25,60-22,40,15,60,20,40,5,60-5,40-25,60-22,40,12,60,15,40-5,60-15,40-20,60-18,40,8,60,12,40-2,60-12,40-25,60-22,40,18,60,20,40-5,60-15s40-20,60-22c20-2,40,10,50,15l15,8v42H0z' fill='%23f4f1ea'/%3E%3C/svg%3E&quot;); background-size: 100% 100%; transform: rotate(180deg);"></div>
                
                {{-- Bottom Torn Edge --}}
                <div class="absolute bottom-0 left-0 w-full h-10 translate-y-[99%] z-10" 
                     style="background-image: url(&quot;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1200 120' preserveAspectRatio='none'%3E%3Cpath d='M0,120V60l15,5c10,3,30,12,50,8s40-15,60-12,40,18,60,15,40-18,60-22,40,2,60,10,40,25,60,28,40-8,60-20,40-25,60-22,40,15,60,20,40,5,60-5,40-25,60-22,40,12,60,15,40-5,60-15,40-20,60-18,40,8,60,12,40-2,60-12,40-25,60-22,40,18,60,20,40-5,60-15s40-20,60-22c20-2,40,10,50,15l15,8v42H0z' fill='%23f4f1ea'/%3E%3C/svg%3E&quot;); background-size: 100% 100%;"></div>
            </div>

            <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 lg:gap-10">
                    @foreach($categories->take(3) as $index => $cat)
                        @php
                            $icons = ['fa-coffee', 'fa-bread-slice', 'fa-plate-wheat'];
                            $icon = $icons[$index % count($icons)];
                        @endphp
                        <a href="/menu?category={{ $cat->id }}" wire:navigate
                            class="relative rounded-2xl overflow-hidden h-[450px] lg:h-[550px] group shadow-2xl transition-all duration-500 hover:-translate-y-2">
                            
                            @if($cat->image)
                                <img src="{{ asset('storage/' . $cat->image) }}"
                                    class="w-full h-full object-cover group-hover:scale-110 transition duration-1000">
                            @else
                                <div class="w-full h-full bg-brown-dark"></div>
                            @endif

                            {{-- Overlay Content --}}
                            <div class="absolute inset-x-0 bottom-0 py-10 flex flex-col items-center justify-center text-white bg-gradient-to-t from-black/80 via-black/20 to-transparent">
                                <div class="mb-4 transform group-hover:scale-110 transition-transform duration-500">
                                    <i class="fa-solid {{ $icon }} text-4xl lg:text-5xl opacity-90"></i>
                                </div>
                                <h3 class="font-heading text-2xl lg:text-3xl tracking-[0.2em] uppercase font-bold drop-shadow-lg">
                                    {{ $cat->name[$locale] ?? $cat->name['en'] ?? '...' }}
                                </h3>
                            </div>

                            {{-- Border Effect --}}
                            <div class="absolute inset-4 border border-white/20 rounded-xl pointer-events-none group-hover:inset-6 transition-all duration-500"></div>
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

    {{-- ═══ POPULAR ITEMS (ThemeFlat Coffee Menu Layout) ═══ --}}
    @if(isset($popularItems) && $popularItems->count())
        <section class="py-24 bg-white relative">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16">
                    <h3 class="font-script text-gold text-4xl mb-2">Love Curry Deals</h3>
                    <h2 class="font-heading text-brown-darker text-4xl md:text-5xl font-bold uppercase">Special Menu</h2>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-x-16 gap-y-10">
                    @foreach($popularItems as $item)
                        <div class="flex items-start gap-6 group cursor-pointer">
                            
                            {{-- Circular Thumbnail --}}
                            <div class="shrink-0 relative">
                                @if($item->primaryImage)
                                    <img src="{{ asset('storage/' . $item->primaryImage->url) }}"
                                        class="w-[100px] h-[100px] md:w-[120px] md:h-[120px] rounded-full object-cover shadow-lg border-[6px] border-cream group-hover:border-gold transition-colors duration-300">
                                @else
                                    <div class="w-[100px] h-[100px] md:w-[120px] md:h-[120px] rounded-full bg-brown-dark flex items-center justify-center text-gold shadow-lg border-[6px] border-cream group-hover:border-gold transition-colors duration-300">
                                        <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M8.1 13.34l2.83-2.83L3.91 3.5a4.008 4.008 0 000 5.66l4.19 4.18zm6.78-1.81c1.53.71 3.68.21 5.27-1.38 1.91-1.91 2.28-4.65.81-6.12-1.46-1.46-4.2-1.1-6.12.81-1.59 1.59-2.09 3.74-1.38 5.27L3.7 19.87l1.41 1.41L12 14.41l6.88 6.88 1.41-1.41L13.41 13l1.47-1.47z"/>
                                        </svg>
                                    </div>
                                @endif

                                {{-- Badge --}}
                                @if($item->is_new || $item->is_popular)
                                    <div class="absolute -top-1 -right-4 bg-brown-dark text-white text-[10px] uppercase font-bold tracking-widest px-3 py-1 rounded-full border-2 border-white shadow shadow-sm">
                                        {{ $item->is_new ? 'New' : 'Trending' }}
                                    </div>
                                @endif
                            </div>

                            {{-- Content (Title, Dotted Line, Price) --}}
                            <div class="flex-grow pt-2">
                                <div class="flex items-center gap-4 mb-2">
                                    <h4 class="font-heading font-bold text-brown-darker text-xl tracking-wide group-hover:text-gold transition-colors whitespace-nowrap">
                                        {{ $item->name[$locale] ?? $item->name['en'] ?? '...' }}
                                    </h4>
                                    <div class="flex-grow border-b-2 border-dotted border-gray-300 mt-2"></div>
                                    <span class="font-heading text-xl font-bold text-gold whitespace-nowrap">
                                        {{ number_format($item->base_price_cents / 100, 2) }} {{ $item->currency_code }}
                                    </span>
                                </div>

                                @if(!empty($item->description[$locale] ?? $item->description['en'] ?? ''))
                                    <p class="text-[14px] text-gray-500 font-body leading-relaxed max-w-[90%]">
                                        {{ Str::limit($item->description[$locale] ?? $item->description['en'], 80) }}
                                    </p>
                                @endif

                                @if($item->spiciness_level)
                                    <div class="flex gap-1 mt-3">
                                        @for($i = 1; $i <= 5; $i++)
                                            <span class="w-[6px] h-[6px] rounded-full {{ $i <= $item->spiciness_level ? 'bg-[#D32F2F]' : 'bg-gray-300' }}"></span>
                                        @endfor
                                    </div>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="text-center mt-16">
                    <a href="/menu" wire:navigate
                        class="inline-block bg-transparent border-2 border-brown-dark hover:bg-brown-dark hover:text-white text-brown-darker font-heading font-bold uppercase tracking-widest text-sm px-10 py-4 transition-all">
                        View Full Menu
                    </a>
                </div>
            </div>
        </section>
    @endif

    {{-- ═══ OUR JOURNEY (Elegant Light Section) ═══ --}}
    <section class="relative py-32 bg-[#faf7f2] overflow-hidden">
        {{-- Background Graphic --}}
        <div class="absolute right-0 top-0 opacity-10 pointer-events-none">
            <img src="https://themesflat.co/html/restaurant/coffee/assets/images/bg/graphic-header.png" class="w-[500px]">
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row items-center gap-16 lg:gap-24">
                
                {{-- Left Side: Large Circular Image --}}
                <div class="w-full lg:w-1/2 flex justify-center lg:justify-start">
                    <div class="relative w-[350px] h-[350px] md:w-[500px] md:h-[500px] group">
                        {{-- Circular Border --}}
                        <div class="absolute inset-0 border-[15px] border-white rounded-full shadow-2xl z-10 transition-transform duration-700 group-hover:scale-[1.02]"></div>
                        
                        {{-- Main Image --}}
                        <img src="https://images.unsplash.com/photo-1585937421612-70a008356fbe?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                             class="w-full h-full rounded-full object-cover relative z-0 group-hover:scale-110 transition-transform duration-1000">
                        
                        {{-- Floating Leaf Badge --}}
                        <div class="absolute -bottom-4 -right-4 bg-white rounded-full p-6 shadow-2xl z-20 border border-gray-100">
                             <i class="fa-solid fa-leaf text-[#c19d60] text-4xl"></i>
                        </div>
                    </div>
                </div>

                {{-- Right Side: Content --}}
                <div class="w-full lg:w-1/2">
                    <div class="flex items-center gap-2 mb-4">
                        <span class="font-script text-[#c19d60] text-3xl">Our Journey</span>
                        <div class="h-[1px] w-12 bg-[#c19d60]/50"></div>
                    </div>
                    
                    <h2 class="font-heading text-brown-darker text-4xl lg:text-5xl font-bold uppercase leading-[1.1] mb-8">
                        The Finest Ingredients,<br>Authentic Taste.
                    </h2>
                    
                    <p class="font-body text-gray-500 text-[15px] leading-relaxed mb-10 max-w-xl">
                        At Love Curry, we believe that great food starts with great ingredients. For over two decades, our family has been serving authentic Indian cuisine prepared with traditional cooking methods and freshly ground spices.
                    </p>
                    
                    {{-- Features Grid (2x2) --}}
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-x-12 gap-y-8 mb-12">
                        @foreach([
                            ['title' => 'Fast Delivery', 'icon' => 'fa-truck-fast'],
                            ['title' => 'Fresh Food', 'icon' => 'fa-leaf'],
                            ['title' => 'Experienced Chefs', 'icon' => 'fa-user-tie'],
                            ['title' => 'Authentic Taste', 'icon' => 'fa-utensils'],
                        ] as $feature)
                            <div class="flex items-center gap-4 group/item">
                                <div class="w-12 h-12 border border-[#c19d60]/30 rounded-full flex items-center justify-center text-[#c19d60] shrink-0 group-hover/item:bg-[#c19d60] group-hover/item:text-white transition-all">
                                    <i class="fa-solid {{ $feature['icon'] }} text-lg"></i>
                                </div>
                                <div class="w-full">
                                    <h4 class="text-brown-darker font-heading font-bold uppercase tracking-widest text-sm pb-1 relative transition-colors group-hover/item:text-[#c19d60]">
                                        {{ $feature['title'] }}
                                        {{-- Dotted Underline --}}
                                        <div class="absolute bottom-0 left-0 right-0 border-b border-dotted border-gray-300"></div>
                                    </h4>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    {{-- Action & Signature --}}
                    <div class="flex flex-col sm:flex-row items-center gap-10">
                        <a href="/about" wire:navigate 
                           class="bg-[#c19d60] hover:bg-brown-dark text-white font-heading font-bold uppercase tracking-widest text-[11px] px-10 py-5 transition-all shadow-xl rounded shrink-0">
                            Discover Our Story
                        </a>
                        
                        <div class="flex flex-col">
                            <span class="font-script text-brown-darker text-4xl opacity-80">- Raj Patel</span>
                            <span class="font-heading text-[10px] text-gray-400 uppercase tracking-widest mt-1">Founding Chef</span>
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

    {{-- ═══ CTA BANNER ═══ --}}
    <section class="relative py-24 overflow-hidden bg-brown-dark">
        <div class="absolute inset-0 opacity-20" style="background-image: url('https://www.transparenttextures.com/patterns/cream-paper.png'); mix-blend-mode: multiply;"></div>

        <div class="relative z-10 max-w-4xl mx-auto px-4 text-center text-white">
            <h2 class="font-script text-gold text-4xl mb-4">Ready for a Culinary Journey?</h2>
            <h3 class="font-heading text-4xl md:text-5xl lg:text-6xl font-bold uppercase tracking-wide mb-10 leading-tight">Order Now or <br>Visit Us Today</h3>
            <div class="flex flex-col sm:flex-row justify-center gap-6">
                <a href="/menu" wire:navigate
                    class="bg-gold hover:bg-white text-white hover:text-brown-dark border-2 border-gold hover:border-white font-heading font-bold uppercase tracking-widest text-sm px-10 py-5 transition-all w-full sm:w-auto text-center">
                    Visit Our Menu
                </a>
                <a href="/contact" wire:navigate
                    class="bg-transparent hover:bg-white text-white hover:text-brown-dark border-2 border-white font-heading font-bold uppercase tracking-widest text-sm px-10 py-5 transition-all w-full sm:w-auto text-center">
                    Get Directions
                </a>
            </div>
        </div>
    </section>
</div>
