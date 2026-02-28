<div>
    {{-- ═══ PAGE HEADER ═══ --}}
    <section class="relative pt-40 pb-24 overflow-hidden bg-forest-dark forest-texture">
        <div class="absolute inset-0 bg-black/50 z-0"></div>
        <div class="absolute inset-0 z-0 opacity-20" style="background-image: url('https://www.transparenttextures.com/patterns/dark-matter.png');"></div>
        
        <div class="relative z-10 max-w-4xl mx-auto px-4 text-center text-white animate-fade-in-up">
            <h2 class="font-script text-gold text-4xl md:text-5xl mb-4">Get to Know</h2>
            <h1 class="font-heading text-5xl md:text-7xl font-bold uppercase tracking-widest mb-6 heritage-heading">About Us</h1>
            <p class="text-gray-300 text-base md:text-lg max-w-2xl mx-auto font-body opacity-80 mt-6">
                The story behind Love Curry — where tradition meets passion and centuries of culinary heritage are redefined.
            </p>
        </div>
        
        <div class="torn-edge-bottom z-20"></div>
    </section>

    {{-- ═══ OUR STORY ═══ --}}
    <section class="py-32 bg-cream bg-paper relative overflow-hidden">
        <div class="absolute right-0 top-0 bottom-0 w-1/2 opacity-[0.03] pointer-events-none">
            <img src="https://themesflat.co/html/restaurant/coffee/assets/images/bg/graphic-header.png" class="w-full h-full object-contain object-right grayscale">
        </div>

        <div class="max-w-7xl mx-auto px-4 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-20 items-center">
                <div class="animate-fade-in-up">
                    <div class="flex items-center gap-4 mb-6">
                        <span class="w-12 h-[1px] bg-gold/50"></span>
                        <span class="text-gold font-heading font-bold uppercase tracking-[0.3em] text-[11px]">Our Story</span>
                    </div>
                    <h2 class="font-heading text-forest-dark text-4xl lg:text-5xl font-bold uppercase leading-[1.1] mb-8 heritage-heading">
                        A Family Legacy<br>Since 2003
                    </h2>
                    <p class="text-gray-500 font-body text-sm leading-relaxed mb-6 italic">
                        "Love Curry was born from a simple dream — to bring the authentic flavors of India to every table."
                    </p>
                    <p class="text-gray-500 font-body text-sm leading-relaxed mb-6">
                        Founded by Chef Rajesh Kumar, our restaurant has grown from a small family kitchen to one of the most beloved Indian restaurants in the area. Every recipe in our kitchen has been perfected over decades, passed down through three generations of passionate cooks.
                    </p>
                    <p class="text-gray-500 font-body text-sm leading-relaxed mb-10">
                        We source our spices directly from India, ensuring every dish carries the true essence of Indian cuisine. Our commitment to quality and authenticity has earned us numerous awards and a loyal community of food lovers.
                    </p>

                    {{-- Stats --}}
                    <div class="grid grid-cols-3 gap-8 pt-8 border-t border-gold/10">
                        <div class="text-center group">
                            <h3 class="font-heading text-4xl font-bold text-forest-dark group-hover:text-gold transition-colors">20+</h3>
                            <p class="text-gray-400 text-[10px] uppercase tracking-[0.2em] font-heading mt-2 font-bold">Years Open</p>
                        </div>
                        <div class="text-center group">
                            <h3 class="font-heading text-4xl font-bold text-forest-dark group-hover:text-gold transition-colors">50+</h3>
                            <p class="text-gray-400 text-[10px] uppercase tracking-[0.2em] font-heading mt-2 font-bold">Dishes</p>
                        </div>
                        <div class="text-center group">
                            <h3 class="font-heading text-4xl font-bold text-forest-dark group-hover:text-gold transition-colors">15K+</h3>
                            <p class="text-gray-400 text-[10px] uppercase tracking-[0.2em] font-heading mt-2 font-bold">Happy Guests</p>
                        </div>
                    </div>
                </div>

                <div class="relative">
                    <div class="absolute inset-0 border-[20px] border-gold/5 rounded-full transform translate-x-8 translate-y-8 -z-10"></div>
                    <div class="grid grid-cols-2 gap-4 relative z-10">
                        <img src="https://images.unsplash.com/photo-1585937421612-70a008356fbe?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80"
                            class="rounded-2xl shadow-premium h-64 w-full object-cover group-hover:scale-105 transition-transform duration-700">
                        <img src="https://images.unsplash.com/photo-1596797038530-2c107229654b?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80"
                            class="rounded-2xl shadow-premium h-64 w-full object-cover mt-12 group-hover:scale-105 transition-transform duration-700">
                        <img src="https://images.unsplash.com/photo-1505253758473-96b7015fcd40?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80"
                            class="rounded-2xl shadow-premium h-64 w-full object-cover -mt-8 group-hover:scale-105 transition-transform duration-700">
                        <img src="https://images.unsplash.com/photo-1567188040759-fb8a883dc6d8?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80"
                            class="rounded-2xl shadow-premium h-64 w-full object-cover mt-4 group-hover:scale-105 transition-transform duration-700">
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ═══ OUR VALUES ═══ --}}
    <section class="py-32 bg-white relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 relative z-10">
            <div class="text-center mb-20 animate-fade-in-up">
                <span class="font-script text-gold text-4xl mb-2 block">What Drives Us</span>
                <h2 class="font-heading text-forest-dark text-4xl md:text-5xl font-bold uppercase heritage-heading">Our Values</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                @foreach([
                    ['icon' => 'fa-heart', 'title' => 'Passion', 'desc' => 'Every dish we serve is a labor of love. Our chefs pour their heart and soul into each recipe, ensuring an unforgettable dining experience.'],
                    ['icon' => 'fa-leaf', 'title' => 'Authenticity', 'desc' => 'We stay true to traditional Indian cooking methods while embracing modern presentation. Our spices are sourced directly from India.'],
                    ['icon' => 'fa-users', 'title' => 'Community', 'desc' => 'Love Curry is more than a restaurant — it\'s a gathering place for friends and families. We treat every guest like a member of our own family.']
                ] as $value)
                    <div class="bg-cream rounded-2xl p-10 text-center hover:shadow-premium transition-all duration-500 border border-gold/10 hover:-translate-y-2 group">
                        <div class="w-20 h-20 bg-white shadow-sm rounded-full flex items-center justify-center mx-auto mb-8 group-hover:bg-gold transition-colors duration-500 border border-gold/20">
                            <i class="fa-solid {{ $value['icon'] }} text-3xl text-gold group-hover:text-white transition-colors duration-500"></i>
                        </div>
                        <h3 class="font-heading text-2xl font-bold uppercase text-forest-dark tracking-widest mb-4 group-hover:text-gold transition-colors">{{ $value['title'] }}</h3>
                        <p class="text-gray-500 font-body text-[13px] leading-relaxed">{{ $value['desc'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ═══ BUSINESS HOURS ═══ --}}
    <section class="py-32 bg-forest-dark relative forest-texture overflow-hidden">
        {{-- Border Accents --}}
        <div class="absolute top-0 left-0 w-full h-[1px] bg-gradient-to-r from-transparent via-gold/30 to-transparent"></div>
        <div class="absolute bottom-0 left-0 w-full h-[1px] bg-gradient-to-r from-transparent via-gold/30 to-transparent"></div>

        <div class="max-w-3xl mx-auto px-4 text-center text-white relative z-10">
            <div class="flex items-center justify-center gap-4 mb-6">
                <span class="w-12 h-[1px] bg-gold/50"></span>
                <span class="text-gold font-heading font-bold uppercase tracking-[0.3em] text-[11px]">Visit Us</span>
                <span class="w-12 h-[1px] bg-gold/50"></span>
            </div>
            <h2 class="font-heading text-4xl md:text-5xl font-bold uppercase tracking-wide mb-16 heritage-heading">Opening Hours</h2>

            <div class="bg-forest/50 backdrop-blur-md border border-white/5 p-10 md:p-14 rounded-2xl shadow-premium">
                @php $dayNames = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday']; @endphp
                @if(isset($businessHours) && $businessHours->count())
                    <ul class="space-y-6 text-sm font-medium">
                        @foreach($businessHours as $bh)
                            <li class="flex justify-between items-center border-b border-white/5 pb-4 group">
                                <span class="font-heading uppercase tracking-widest text-gray-300 group-hover:text-gold transition-colors">{{ $dayNames[$bh->day_of_week] ?? '' }}</span>
                                @if($bh->is_closed)
                                    <span class="text-gold font-heading tracking-widest text-[12px]">CLOSED</span>
                                @else
                                    <span class="font-heading text-white tracking-widest text-[13px]">{{ \Carbon\Carbon::parse($bh->open_time)->format('h:i A') }} — {{ \Carbon\Carbon::parse($bh->close_time)->format('h:i A') }}</span>
                                @endif
                            </li>
                        @endforeach
                    </ul>
                @else
                    <ul class="space-y-6 text-sm font-medium">
                        <li class="flex justify-between items-center border-b border-white/5 pb-4 group">
                            <span class="font-heading uppercase tracking-widest text-gray-300 group-hover:text-gold transition-colors">Monday — Friday</span>
                            <span class="font-heading text-white tracking-widest text-[13px]">11:00 AM — 10:00 PM</span>
                        </li>
                        <li class="flex justify-between items-center border-b border-white/5 pb-4 group">
                            <span class="font-heading uppercase tracking-widest text-gray-300 group-hover:text-gold transition-colors">Saturday</span>
                            <span class="font-heading text-white tracking-widest text-[13px]">10:00 AM — 11:00 PM</span>
                        </li>
                        <li class="flex justify-between items-center pb-2 group">
                            <span class="font-heading uppercase tracking-widest text-gray-300 group-hover:text-gold transition-colors">Sunday</span>
                            <span class="font-heading text-white tracking-widest text-[13px]">12:00 PM — 09:00 PM</span>
                        </li>
                    </ul>
                @endif
            </div>
        </div>
    </section>

    {{-- ═══ CTA ═══ --}}
    <section class="py-24 bg-paper border-t border-gold/10 text-center relative overflow-hidden">
        <div class="max-w-2xl mx-auto px-4 relative z-10">
            <h2 class="font-script text-4xl md:text-5xl text-gold mb-4">Come Dine With Us</h2>
            <h3 class="font-heading text-3xl md:text-4xl font-bold uppercase text-forest-dark mb-10 tracking-wide">Experience the Magic of Indian Cuisine</h3>
            <div class="flex flex-col sm:flex-row justify-center gap-6">
                <a href="/menu" wire:navigate
                    class="bg-gold hover:bg-gold-dark text-white font-heading font-bold uppercase tracking-[0.3em] text-[11px] px-12 py-5 rounded-sm transition-all shadow-premium hover:scale-105 transform">
                    Explore Menu
                </a>
                <a href="/contact" wire:navigate
                    class="bg-transparent hover:bg-forest text-forest hover:text-white border-2 border-forest font-heading font-bold uppercase tracking-[0.3em] text-[11px] px-12 py-4 rounded-sm transition-all shadow-sm hover:scale-105 transform">
                    Contact Us
                </a>
            </div>
        </div>
    </section>
</div>

