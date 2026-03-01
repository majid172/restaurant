<div class="w-full font-sans text-gray-800 antialiased selection:bg-amber-500 selection:text-white">

    {{-- HERO SECTION --}}
    <section class="relative w-full h-screen overflow-hidden bg-[#1c1d1f]" 
             @if(isset($heroSlides) && $heroSlides->count() > 0)
                 x-data="{ currentSlide: 0, slides: {{ $heroSlides->count() }} }" 
                 x-init="if(slides > 1) setInterval(() => { currentSlide = (currentSlide + 1) % slides }, 5000)"
             @endif>
        
        @if(isset($heroSlides) && $heroSlides->count() > 0)
            @foreach($heroSlides as $index => $slide)
                <div class="absolute inset-0 transition-opacity duration-1000 ease-in-out" 
                     x-show="currentSlide === {{ $index }}" 
                     x-transition:enter="opacity-0" 
                     x-transition:enter-start="opacity-0" 
                     x-transition:enter-end="opacity-100" 
                     x-transition:leave="opacity-100" 
                     x-transition:leave-start="opacity-100" 
                     x-transition:leave-end="opacity-0"
                     style="display: {{ $index === 0 ? 'block' : 'none' }}">
                     
                    {{-- Background Image with Dark Overlay --}}
                    <img src="https://images.unsplash.com/photo-1554118811-1e0d58224f24?q=80&w=2047&auto=format&fit=crop" alt="{{ $slide->getLocalized('title') ?? 'Hero Image' }}" class="w-full h-full object-cover origin-center opacity-40">
                    <!-- <img src="{{ $slide->frontend_image_url }}" alt="{{ $slide->getLocalized('title') ?? 'Hero Image' }}" class="w-full h-full object-cover origin-center opacity-40"> -->
                    <div class="absolute inset-0 bg-black/60"></div>

                    {{-- Hero Content --}}
                    <div class="absolute inset-0 z-10 flex flex-col items-center justify-center text-center px-4 max-w-4xl mx-auto mt-20">
                        @if($slide->getLocalized('subtitle'))
                            <h3 class="font-serif italic text-2xl md:text-3xl text-white mb-4 shadow-sm font-medium" style="font-family: 'Playfair Display', serif;">
                                - {{ $slide->getLocalized('subtitle') }} -
                            </h3>
                        @endif
                        
                        @if($slide->getLocalized('title'))
                            <h1 class="text-3xl md:text-5xl lg:text-7xl font-black text-white uppercase tracking-tight mb-8 drop-shadow-lg pb-2" style="font-family: 'Oswald', sans-serif;">
                                {{ $slide->getLocalized('title') }}
                            </h1>
                        @endif
                        
                        @if($slide->button_link && $slide->getLocalized('button_text'))
                            <div class="flex flex-col sm:flex-row gap-4 w-full sm:w-auto mt-4 justify-center">
                                <a href="{{ $slide->button_link }}" class="px-8 py-3 bg-[#c8a98a] hover:bg-[#b59372] text-[#2b2522] text-[11px] font-bold uppercase tracking-[0.2em] transition-all shadow-md text-center">
                                    {{ $slide->getLocalized('button_text') }}
                                </a>

                                <a href="#reservations" class="px-8 py-3 bg-white hover:bg-gray-100 text-[#2b2522] text-[11px] font-bold uppercase tracking-[0.2em] transition-all shadow-md text-center">
                        BOOK A TABLE
                    </a>
                            </div>
                        @endif
                    </div>
                </div>
            @endforeach

            {{-- Dot Navigation --}}
            @if($heroSlides->count() > 1)
                <div class="absolute bottom-20 left-0 right-0 z-20 flex items-center justify-center gap-2">
                    @foreach($heroSlides as $index => $slide)
                        <button @click="currentSlide = {{ $index }}" class="rounded-full transition-all duration-300 flex items-center justify-center shrink-0" 
                            :class="currentSlide === {{ $index }} ? 'w-3.5 h-3.5 border-2 border-white bg-transparent' : 'w-1.5 h-1.5 bg-white opacity-80'">
                            <span x-show="currentSlide === {{ $index }}" class="w-[3px] h-[3px] bg-white rounded-full"></span>
                        </button>
                    @endforeach
                </div>
            @endif

        @else
            {{-- Fallback Static Hero --}}
            {{-- Background Image with Dark Overlay --}}
            <div class="absolute inset-0 z-0">
                <img src="https://images.unsplash.com/photo-1554118811-1e0d58224f24?q=80&w=2047&auto=format&fit=crop" alt="Coffee Shop Barista" class="w-full h-full object-cover origin-center opacity-40">
                <div class="absolute inset-0 bg-black/60"></div>
            </div>

            {{-- Hero Content --}}
            <div class="relative z-10 text-center px-4 max-w-4xl mx-auto flex flex-col items-center mt-32 h-full justify-center">
                <h3 class="font-serif italic text-2xl md:text-3xl text-white mb-2 shadow-sm font-medium" style="font-family: 'Playfair Display', serif;">
                    - Welcome to Basilico Coffee Shop -
                </h3>
                
                <h1 class="text-2xl md:text-3xl lg:text-5xl font-black text-white uppercase tracking-tight mb-4 drop-shadow-md pb-2" style="font-family: 'Oswald', sans-serif;">
                    OUR PASSION IS IN OUR COFFEE
                </h1>
                
                <p class="text-[13px] md:text-sm text-gray-100 font-medium mb-12 max-w-[600px] leading-relaxed tracking-wide">
                    Harbourfront Seafood Restaurant is the perfect spot in Sydney to celebrate a special occasion or to simply head out for a bite to eat.
                </p>
                
                <div class="flex flex-col sm:flex-row gap-4 w-full sm:w-auto mt-2 justify-center">
                    <a href="#menu" class="px-8 py-3 bg-[#c8a98a] hover:bg-[#b59372] text-[#2b2522] text-[11px] font-bold uppercase tracking-[0.2em] transition-all shadow-md text-center">
                        VIEW ALL MENU
                    </a>
                    <a href="#reservations" class="px-8 py-3 bg-white hover:bg-gray-100 text-[#2b2522] text-[11px] font-bold uppercase tracking-[0.2em] transition-all shadow-md text-center">
                        BOOK A TABLE
                    </a>
                </div>
            </div>
        @endif
    </section>

    {{-- HIGHLIGHTS / CATEGORIES --}}
    <section class="relative bg-paper bg-cream flex items-center justify-center min-h-[600px] md:min-h-[800px] py-16 md:py-32">

        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 w-full">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 lg:gap-8 justify-center">
                
                {{-- Category 1: COFFEE --}}
                <div class="group relative rounded shadow-[0_15px_40px_rgba(0,0,0,0.4)] aspect-[3/4.2] max-w-[340px] mx-auto w-full cursor-pointer bg-[#1c1816] overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1497935586351-b67a49e012bf?q=80&w=800&auto=format&fit=crop" class="w-full h-full object-cover transition duration-1000 group-hover:scale-110 opacity-70 mix-blend-overlay group-hover:opacity-40">
                    
                    {{-- Default State --}}
                    <div class="absolute inset-0 bg-gradient-to-t from-[#1c1816] via-[transparent] to-transparent transition duration-500 opacity-100 group-hover:opacity-0"></div>
                    <div class="absolute bottom-10 left-0 right-0 flex flex-col items-center justify-end transition-all duration-500 transform group-hover:translate-y-8 group-hover:opacity-0">
                        <svg class="w-12 h-12 text-[#ede8dc] mb-4 opacity-90 drop-shadow-md" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M18 8h1a4 4 0 010 8h-1M2 8h16v9a4 4 0 01-4 4H6a4 4 0 01-4-4V8zm4-5v3m4-3v3m4-3v3"></path></svg>
                        <h3 class="text-white font-black text-2xl uppercase tracking-[0.1em] drop-shadow-md" style="font-family: 'Oswald', sans-serif;">Coffee</h3>
                    </div>

                    {{-- Hover State --}}
                    <div class="absolute inset-0 bg-[#1c1816]/90 opacity-0 group-hover:opacity-100 transition duration-500 flex flex-col items-center justify-center p-6 text-center z-10">
                        <div class="absolute inset-3.5 border border-[#c8a98a]/60 rounded-sm opacity-0 group-hover:opacity-100 transition duration-500 delay-100 pointer-events-none"></div>
                        <div class="transform translate-y-8 group-hover:translate-y-0 opacity-0 group-hover:opacity-100 transition-all duration-500 delay-100 flex flex-col items-center">
                            <svg class="w-10 h-10 text-[#c8a98a] mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M18 8h1a4 4 0 010 8h-1M2 8h16v9a4 4 0 01-4 4H6a4 4 0 01-4-4V8zm4-5v3m4-3v3m4-3v3"></path></svg>
                            <h3 class="text-[#c8a98a] font-bold text-xl uppercase tracking-[0.2em] mb-4" style="font-family: 'Oswald', sans-serif;">- Coffee -</h3>
                            <p class="text-[#ede8dc]/80 text-[11px] leading-relaxed max-w-[170px] font-medium tracking-wide">Alienum phaedrum torquatos nec eu, vis detraxit periculis ex, nihil expetendis in mei an pericula.</p>
                        </div>
                    </div>
                </div>

                {{-- Category 2: BAKERY --}}
                <div class="group relative rounded shadow-[0_15px_40px_rgba(0,0,0,0.4)] aspect-[3/4.2] max-w-[340px] mx-auto w-full cursor-pointer bg-[#1c1816] overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1509440159596-0249088772ff?q=80&w=800&auto=format&fit=crop" class="w-full h-full object-cover transition duration-1000 group-hover:scale-110 opacity-70 mix-blend-overlay group-hover:opacity-40">
                    
                    {{-- Default State --}}
                    <div class="absolute inset-0 bg-gradient-to-t from-[#1c1816] via-[transparent] to-transparent transition duration-500 opacity-100 group-hover:opacity-0"></div>
                    <div class="absolute bottom-10 left-0 right-0 flex flex-col items-center justify-end transition-all duration-500 transform group-hover:translate-y-8 group-hover:opacity-0">
                        <svg class="w-12 h-12 text-[#ede8dc] mb-4 opacity-90 drop-shadow-md" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="m4.6 13 4-6a3 3 0 0 1 5.1 0l4 6A4 4 0 0 1 14 19H6a4 4 0 0 1-1.4-6Z" /><path d="M10.5 7.5 8 13" /><path d="M15 8.5l-2.5 5" /></svg>
                        <h3 class="text-white font-black text-2xl uppercase tracking-[0.1em] drop-shadow-md" style="font-family: 'Oswald', sans-serif;">Bakery</h3>
                    </div>

                    {{-- Hover State --}}
                    <div class="absolute inset-0 bg-[#1c1816]/90 opacity-0 group-hover:opacity-100 transition duration-500 flex flex-col items-center justify-center p-6 text-center z-10">
                        <div class="absolute inset-3.5 border border-[#c8a98a]/60 rounded-sm opacity-0 group-hover:opacity-100 transition duration-500 delay-100 pointer-events-none"></div>
                        <div class="transform translate-y-8 group-hover:translate-y-0 opacity-0 group-hover:opacity-100 transition-all duration-500 delay-100 flex flex-col items-center">
                            <svg class="w-10 h-10 text-[#c8a98a] mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="m4.6 13 4-6a3 3 0 0 1 5.1 0l4 6A4 4 0 0 1 14 19H6a4 4 0 0 1-1.4-6Z" /><path d="M10.5 7.5 8 13" /><path d="M15 8.5l-2.5 5" /></svg>
                            <h3 class="text-[#c8a98a] font-bold text-xl uppercase tracking-[0.2em] mb-4" style="font-family: 'Oswald', sans-serif;">- Bakery -</h3>
                            <p class="text-[#ede8dc]/80 text-[11px] leading-relaxed max-w-[170px] font-medium tracking-wide">Alienum phaedrum torquatos nec eu, vis detraxit periculis ex, nihil expetendis in mei an pericula.</p>
                        </div>
                    </div>
                </div>

                {{-- Category 3: BREAKFAST --}}
                <div class="group relative rounded shadow-[0_15px_40px_rgba(0,0,0,0.4)] aspect-[3/4.2] max-w-[340px] mx-auto w-full cursor-pointer bg-[#1c1816] overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1495474472207-464a8d910626?q=80&w=800&auto=format&fit=crop" class="w-full h-full object-cover transition duration-1000 group-hover:scale-110 opacity-70 mix-blend-overlay group-hover:opacity-40">
                    
                    {{-- Default State --}}
                    <div class="absolute inset-0 bg-gradient-to-t from-[#1c1816] via-[transparent] to-transparent transition duration-500 opacity-100 group-hover:opacity-0"></div>
                    <div class="absolute bottom-10 left-0 right-0 flex flex-col items-center justify-end transition-all duration-500 transform group-hover:translate-y-8 group-hover:opacity-0">
                        <svg class="w-12 h-12 text-[#ede8dc] mb-4 opacity-90 drop-shadow-md" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M17 8h1a4 4 0 1 1 0 8h-1" /><path d="M3 8h14v9a4 4 0 0 1-4 4H7a4 4 0 0 1-4-4Z" /><line x1="6" x2="6" y1="2" y2="4" /><line x1="10" x2="10" y1="2" y2="4" /><line x1="14" x2="14" y1="2" y2="4" /></svg>
                        <h3 class="text-white font-black text-2xl uppercase tracking-[0.1em] drop-shadow-md" style="font-family: 'Oswald', sans-serif;">Breakfast</h3>
                    </div>

                    {{-- Hover State --}}
                    <div class="absolute inset-0 bg-[#1c1816]/90 opacity-0 group-hover:opacity-100 transition duration-500 flex flex-col items-center justify-center p-6 text-center z-10">
                        <div class="absolute inset-3.5 border border-[#c8a98a]/60 rounded-sm opacity-0 group-hover:opacity-100 transition duration-500 delay-100 pointer-events-none"></div>
                        <div class="transform translate-y-8 group-hover:translate-y-0 opacity-0 group-hover:opacity-100 transition-all duration-500 delay-100 flex flex-col items-center">
                            <svg class="w-10 h-10 text-[#c8a98a] mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M17 8h1a4 4 0 1 1 0 8h-1" /><path d="M3 8h14v9a4 4 0 0 1-4 4H7a4 4 0 0 1-4-4Z" /><line x1="6" x2="6" y1="2" y2="4" /><line x1="10" x2="10" y1="2" y2="4" /><line x1="14" x2="14" y1="2" y2="4" /></svg>
                            <h3 class="text-[#c8a98a] font-bold text-xl uppercase tracking-[0.2em] mb-4" style="font-family: 'Oswald', sans-serif;">- Breakfast -</h3>
                            <p class="text-[#ede8dc]/80 text-[11px] leading-relaxed max-w-[170px] font-medium tracking-wide">Alienum phaedrum torquatos nec eu, vis detraxit periculis ex, nihil expetendis in mei an pericula.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- CHEF'S SPECIALS (SIGNATURE DISHES) --}}
    <section class="py-16 relative border-t border-[#e4decb]" style="background-color: #fdfbf7; background-image: url('https://www.transparenttextures.com/patterns/cream-paper.png');">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row justify-between items-end mb-12 gap-6">
                <div>
                    <h2 class="text-3xl md:text-5xl font-black text-[#2b2522] mb-2 uppercase tracking-tight" style="font-family: 'Oswald', sans-serif;">Chef's Signatures</h2>
                    <p class="text-[#666] text-sm md:text-base max-w-xl font-medium tracking-wide">Carefully curated dishes that represent the pinnacle of our culinary expertise.</p>
                </div>
                <a href="/menu" class="hidden md:inline-flex items-center gap-2 text-[#c8a98a] font-bold uppercase tracking-widest text-xs hover:text-[#b59372] transition rounded-sm border-b-2 border-transparent hover:border-[#c8a98a] pb-1">
                    View Full Menu <svg class="w-4 h-4 mb-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                
                {{-- Dish 1 --}}
                <div class="flex flex-col sm:flex-row gap-4 p-4 rounded-sm bg-white hover:bg-[#fcfaf5] border border-[#e4decb] hover:border-[#c8a98a]/50 shadow-sm hover:shadow-lg transition-all duration-300 group items-center">
                    <div class="w-full sm:w-28 h-28 rounded-sm overflow-hidden shrink-0 shadow-md border border-[#e4decb]">
                        <img src="https://images.unsplash.com/photo-1565557623262-b51c2513a641?q=80&w=300&auto=format&fit=crop" class="w-full h-full object-cover group-hover:scale-110 transition duration-700 ease-in-out">
                    </div>
                    <div class="flex flex-col justify-center flex-grow w-full">
                        <div class="flex justify-between items-center mb-0 border-b border-dashed border-[#e4decb] pb-2">
                            <h4 class="text-lg font-bold text-[#2b2522]" style="font-family: 'Oswald', sans-serif;">Chicken Tikka Masala</h4>
                            <span class="text-lg font-extrabold text-[#c8a98a]" style="font-family: 'Playfair Display', serif;">$25.00</span>
                        </div>
                        
                    </div>
                </div>

                {{-- Dish 2 --}}
                <div class="flex flex-col sm:flex-row gap-4 p-4 rounded-sm bg-white hover:bg-[#fcfaf5] border border-[#e4decb] hover:border-[#c8a98a]/50 shadow-sm hover:shadow-lg transition-all duration-300 group items-center">
                    <div class="w-full sm:w-28 h-28 rounded-sm overflow-hidden shrink-0 shadow-md border border-[#e4decb]">
                        <img src="https://images.unsplash.com/photo-1621852004158-f3bc188caa2d?q=80&w=300&auto=format&fit=crop" class="w-full h-full object-cover group-hover:scale-110 transition duration-700 ease-in-out">
                    </div>
                    <div class="flex flex-col justify-center flex-grow w-full">
                        <div class="flex justify-between items-center mb-0 border-b border-dashed border-[#e4decb] pb-2">
                            <h4 class="text-lg font-bold text-[#2b2522]" style="font-family: 'Oswald', sans-serif;">Stuffed Mushrooms</h4>
                            <span class="text-lg font-extrabold text-[#c8a98a]" style="font-family: 'Playfair Display', serif;">$15.00</span>
                        </div>
                       
                    </div>
                </div>

                {{-- Dish 3 --}}
                <div class="flex flex-col sm:flex-row gap-4 p-4 rounded-sm bg-white hover:bg-[#fcfaf5] border border-[#e4decb] hover:border-[#c8a98a]/50 shadow-sm hover:shadow-lg transition-all duration-300 group items-center">
                    <div class="w-full sm:w-28 h-28 rounded-sm overflow-hidden shrink-0 shadow-md border border-[#e4decb]">
                        <img src="https://images.unsplash.com/photo-1601050633647-81a3cf8f0fba?q=80&w=300&auto=format&fit=crop" class="w-full h-full object-cover group-hover:scale-110 transition duration-700 ease-in-out">
                    </div>
                    <div class="flex flex-col justify-center flex-grow w-full">
                        <div class="flex justify-between items-center mb-0 border-b border-dashed border-[#e4decb] pb-2">
                            <h4 class="text-lg font-bold text-[#2b2522]" style="font-family: 'Oswald', sans-serif;">Palak Paneer Special</h4>
                            <span class="text-lg font-extrabold text-[#c8a98a]" style="font-family: 'Playfair Display', serif;">$22.00</span>
                        </div>
                        
                    </div>
                </div>

                {{-- Dish 4 --}}
                <div class="flex flex-col sm:flex-row gap-4 p-4 rounded-sm bg-white hover:bg-[#fcfaf5] border border-[#e4decb] hover:border-[#c8a98a]/50 shadow-sm hover:shadow-lg transition-all duration-300 group items-center">
                    <div class="w-full sm:w-28 h-28 rounded-sm overflow-hidden shrink-0 shadow-md border border-[#e4decb]">
                        <img src="https://images.unsplash.com/photo-1628294895950-9805252327bc?q=80&w=300&auto=format&fit=crop" class="w-full h-full object-cover group-hover:scale-110 transition duration-700 ease-in-out">
                    </div>
                    <div class="flex flex-col justify-center flex-grow w-full">
                        <div class="flex justify-between items-center mb-0 border-b border-dashed border-[#e4decb] pb-2">
                            <h4 class="text-lg font-bold text-[#2b2522]" style="font-family: 'Oswald', sans-serif;">Tandoori Lamb Chops</h4>
                            <span class="text-lg font-extrabold text-[#c8a98a]" style="font-family: 'Playfair Display', serif;">$34.00</span>
                        </div>
                        
                    </div>
                </div>

            </div>
            
            <div class="mt-12 text-center md:hidden">
                <a href="/menu" class="inline-flex items-center gap-2 px-8 py-3 bg-[#c8a98a] text-white font-bold uppercase tracking-widest text-[10px] rounded-sm hover:bg-[#b59372] transition shadow-md">
                    View Full Menu
                </a>
            </div>
        </div>
    </section>

    {{-- ABOUT & HOURS SECTION (Template Style) --}}
    <section id="about" class="py-24 relative" style="background-color: #fdfbf7; background-image: url('https://www.transparenttextures.com/patterns/cream-paper.png');">
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-10 items-center">
                
                {{-- Left Side: Text Content --}}
                <div class="flex flex-col items-start pt-8 lg:pt-0">
                    <div class="flex items-center gap-2 mb-4">
                        <span class="w-2 h-2 rounded-full bg-[#c8a98a]"></span>
                        <span class="text-[#c8a98a] font-bold text-[10px] tracking-widest uppercase">Coffee Shop Since 2003</span>
                    </div>
                    
                    <h2 class="text-3xl md:text-4xl lg:text-5xl font-black text-[#2b2522] uppercase tracking-tight leading-[1.1] mb-8" style="font-family: 'Oswald', sans-serif;">
                        WE ARE NOT YOUR<br/>AVERAGE COFFEE SHOP
                    </h2>
                    
                    <div class="text-[#666] text-sm md:text-base leading-relaxed max-w-lg mb-8 space-y-4">
                        <p>We offer some of the best locally roasted coffee using "Brazilian Santos" beans. Enjoy Dark, Blonde, Jamaican, Italian & Decaf roasts. Also available are our specialty Lattes, Frappes, Mochas, Cappuccinos, Americanos & more_</p>
                        <p>To see more of our coffee, specialty drinks & food menus, please click the link below. There are many variations of passages of lorem ipsum available but the majority have suffered alteration in some form by injected.</p>
                    </div>

                    <a href="#more" class="px-8 py-3 bg-[#c8a98a] hover:bg-[#b59372] text-white text-[10px] font-bold uppercase tracking-[0.2em] rounded-sm transition-all text-center">
                        CLICK TO READ MORE
                    </a>
                </div>

                {{-- Right Side: Hours Block (Chalkboard Only) --}}
                <div class="pt-12 lg:pt-0 flex justify-center lg:justify-end w-full">
                    <style>@import url('https://fonts.googleapis.com/css2?family=Chilanka&family=Patrick+Hand&display=swap');</style>
                    
                    <div class="relative w-full max-w-[500px]">
                        {{-- Chalkboard Inner Container --}}
                        <div class="relative w-full bg-[#2a363b] rounded-sm py-6 px-10 shadow-2xl border-[6px] border-[#1d262a] overflow-hidden" style="background-image: url('https://www.transparenttextures.com/patterns/stucco.png');">
                            
                            {{-- Chalk Dust Smudge Effects --}}
                            <div class="absolute inset-0 bg-white opacity-[0.02] pointer-events-none rounded-sm"></div>
                            <div class="absolute top-12 left-6 w-20 h-16 bg-white rounded-full mix-blend-overlay filter blur-2xl opacity-10 transform -rotate-45 pointer-events-none"></div>
                            <div class="absolute bottom-8 right-4 w-24 h-24 bg-white rounded-full mix-blend-overlay filter blur-3xl opacity-10 pointer-events-none"></div>
                            
                            <h3 class="text-white/90 font-bold text-2xl mb-6 text-center tracking-wide" style="font-family: 'Chilanka', cursive; text-shadow: 1px 1px 2px rgba(255,255,255,0.1);">Opening Hours</h3>
                            
                            <ul class="space-y-2" style="font-family: 'Patrick Hand', cursive; letter-spacing: 1.5px;">
                                <li class="flex justify-between items-end text-[16px] text-white/80 border-b border-white/20 pb-1 border-dashed">
                                    <span>Monday</span>
                                    <span>7:00 - 21:00</span>
                                </li>
                                <li class="flex justify-between items-end text-[16px] text-white/80 border-b border-white/20 pb-1 border-dashed">
                                    <span>Tuesday</span>
                                    <span>7:00 - 21:00</span>
                                </li>
                                <li class="flex justify-between items-end text-[16px] text-white/80 border-b border-white/20 pb-1 border-dashed">
                                    <span>Wednesday</span>
                                    <span>7:00 - 21:00</span>
                                </li>
                                <li class="flex justify-between items-end text-[16px] text-white/80 border-b border-white/20 pb-1 border-dashed">
                                    <span>Thursday</span>
                                    <span>7:00 - 21:00</span>
                                </li>
                                <li class="flex justify-between items-end text-[16px] text-white/80 border-b border-white/20 pb-1 border-dashed">
                                    <span>Friday</span>
                                    <span>8:00 - 21:00</span>
                                </li>
                                <li class="flex justify-between items-end text-[16px] text-white/80 border-b border-white/20 pb-1 border-dashed">
                                    <span>Saturday</span>
                                    <span>7:00 - 21:00</span>
                                </li>
                                <li class="flex justify-between items-end text-[16px] text-amber-300 pb-1 mt-2">
                                    <span>Sunday</span>
                                    <span class="uppercase">Closed</span>
                                </li>
                            </ul>
                            
                            {{-- Chalk underline decoration --}}
                            <div class="mt-6 mx-auto w-3/4 h-[2px] bg-white/30 rounded-full" style="box-shadow: 0 1px 2px rgba(255,255,255,0.4);"></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    {{-- RESERVATION CTA --}}
    <section id="reservations" class="py-24 relative border-t border-[#e4decb]" style="background-color: #fdfbf7; background-image: url('https://www.transparenttextures.com/patterns/cream-paper.png');">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 lg:gap-24 items-center">
                {{-- Elegant Image Presentation --}}
                <div class="order-1 lg:order-1 w-full border-3 border-gold shadow-2xl rounded-sm transform lg:-rotate-2 rotate-0 transition-transform hover:rotate-0 duration-700 max-w-lg mx-auto lg:max-w-none">
                    <img src="https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?q=80&w=2070&auto=format&fit=crop" class="w-full h-[400px] lg:h-[500px] object-cover rounded-sm" alt="Restaurant Ambiance">
                </div>
                {{-- Form Content Area --}}
                <div class="order-2 lg:order-2 flex flex-col pt-8 lg:pt-0">
                    <div class="flex items-center gap-2 mb-4">
                        <span class="w-2 h-2 rounded-full bg-[#c8a98a]"></span>
                        <span class="text-[#c8a98a] font-bold text-[10px] tracking-widest uppercase">Book Online</span>
                    </div>
                    
                    <h2 class="text-3xl md:text-5xl font-black text-[#2b2522] mb-6 uppercase tracking-tight" style="font-family: 'Oswald', sans-serif;">Reserve a Table</h2>
                    
                    <p class="text-[#666] text-sm md:text-base mb-10 max-w-lg leading-relaxed font-medium">
                        Skip the line and reserve your table in advance. Whether it's an intimate dinner or a celebration, secure your spot today.
                    </p>
                    
                    <form class="space-y-6 text-left w-full">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="flex flex-col">
                                <label class="text-[#2b2522] text-[10px] font-bold uppercase tracking-[0.2em] mb-2">Name</label>
                                <input type="text" class="w-full px-4 py-3 bg-white border border-[#e4decb] text-[#2b2522] placeholder-[#a8a08d] rounded-sm focus:border-[#c8a98a] focus:bg-[#fcfaf5] focus:ring-0 outline-none transition-all shadow-sm" placeholder="Jane Doe">
                            </div>
                            <div class="flex flex-col">
                                <label class="text-[#2b2522] text-[10px] font-bold uppercase tracking-[0.2em] mb-2">Phone</label>
                                <input type="tel" class="w-full px-4 py-3 bg-white border border-[#e4decb] text-[#2b2522] placeholder-[#a8a08d] rounded-sm focus:border-[#c8a98a] focus:bg-[#fcfaf5] focus:ring-0 outline-none transition-all shadow-sm" placeholder="+1 (555) 000-0000">
                            </div>
                        </div>
                        
                        <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
                            <div class="flex flex-col">
                                <label class="text-[#2b2522] text-[10px] font-bold uppercase tracking-[0.2em] mb-2">Date</label>
                                <div class="relative">
                                    <input type="date" class="w-full px-4 py-3 bg-white border border-[#e4decb] text-[#2b2522] rounded-sm focus:border-[#c8a98a] focus:bg-[#fcfaf5] focus:ring-0 outline-none transition-all shadow-sm appearance-none" style="font-family: 'Playfair Display', serif;">
                                </div>
                            </div>
                            <div class="flex flex-col">
                                <label class="text-[#2b2522] text-[10px] font-bold uppercase tracking-[0.2em] mb-2">Time</label>
                                <div class="relative">
                                    <input type="time" class="w-full px-4 py-3 bg-white border border-[#e4decb] text-[#2b2522] rounded-sm focus:border-[#c8a98a] focus:bg-[#fcfaf5] focus:ring-0 outline-none transition-all shadow-sm appearance-none" value="19:00" style="font-family: 'Playfair Display', serif;">
                                </div>
                            </div>
                            <div class="flex flex-col">
                                <label class="text-[#2b2522] text-[10px] font-bold uppercase tracking-[0.2em] mb-2">Guests</label>
                                <select class="w-full px-4 py-3 bg-white border border-[#e4decb] text-[#2b2522] rounded-sm focus:border-[#c8a98a] focus:bg-[#fcfaf5] focus:ring-0 outline-none transition-all shadow-sm appearance-none cursor-pointer" style="font-family: 'Playfair Display', serif;">
                                    <option value="1">1 Person</option>
                                    <option value="2" selected>2 People</option>
                                    <option value="3">3 People</option>
                                    <option value="4">4 People</option>
                                    <option value="5">5+ People</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="mt-10 pt-4">
                            <button type="submit" class="w-full sm:w-auto px-10 py-4 bg-[#2b2522] hover:bg-[#1a1614] text-[#ede8dc] text-[11px] font-bold uppercase tracking-[0.2em] rounded-sm transition-all shadow-md hover:shadow-xl transform hover:-translate-y-0.5 text-center flex justify-center items-center gap-2">
                                Confirm Booking
                            </button>
                        </div>
                    </form>
                </div>
                

            </div>
        </div>
    </section>

</div>
