<!-- Navbar -->
<header class="fixed top-0 left-0 right-0 z-[100] w-full pt-6 pointer-events-none" 
        x-data="{ scrolled: false, sideMenuOpen: false }" 
        x-init="window.addEventListener('scroll', () => { scrolled = window.scrollY > 50 })"
        x-cloak>

    {{-- Side Menu Overlay & Panel --}}
    <div x-show="sideMenuOpen" style="display: none;" class="fixed inset-0 z-[150] flex pointer-events-auto">
        {{-- Backdrop --}}
        <div x-show="sideMenuOpen" 
             x-transition:enter="transition-opacity ease-linear duration-300"
             x-transition:enter-start="opacity-0"
             x-transition:enter-end="opacity-100"
             x-transition:leave="transition-opacity ease-linear duration-300"
             x-transition:leave-start="opacity-100"
             x-transition:leave-end="opacity-0"
             @click="sideMenuOpen = false"
             class="absolute inset-0 bg-black/60 backdrop-blur-sm"></div>

        {{-- Side Menu Panel --}}
        <div x-show="sideMenuOpen"
             x-transition:enter="transition ease-in-out duration-300 transform"
             x-transition:enter-start="-translate-x-full"
             x-transition:enter-end="translate-x-0"
             x-transition:leave="transition ease-in-out duration-300 transform"
             x-transition:leave-start="translate-x-0"
             x-transition:leave-end="-translate-x-full"
             class="relative flex flex-col w-full max-w-sm h-screen pt-12 pb-10 px-8 bg-paper bg-cream shadow-2xl overflow-y-auto z-10 rounded-r-3xl border-r border-gold/20"
             @click.stop>
            
            {{-- Close Button --}}
            <button @click="sideMenuOpen = false" class="absolute top-6 left-6 w-10 h-10 bg-[#c8a98a] rounded-full flex items-center justify-center text-white hover:bg-[#b59372] transition-colors shadow-md">
                <i class="fa-solid fa-xmark text-lg"></i>
            </button>

            <div class="mt-8 text-center flex flex-col items-center">
                <h2 class="font-heading font-black text-3xl text-[#2b2522] uppercase tracking-wide mb-6 leading-tight mt-6">
                    Welcome to<br>Love Curry Shop.
                </h2>
                
                <p class="text-[#666] text-sm leading-relaxed font-body mb-8 max-w-[250px]">
                    Experience the finest Indian cuisine, crafted with passion and centuries of culinary heritage.
                </p>

                <div class="text-[#2b2522] mb-8">
                    <i class="fa-solid fa-leaf text-xl transform -rotate-12"></i>
                </div>

                <a href="tel:7346651852" class="font-heading text-3xl font-bold text-[#c8a98a] mb-6">
                    (734) 665-1852
                </a>

                <p class="text-[#2b2522] text-sm mb-2 font-medium">448 West Foxrun St. Bronx, NY 10457</p>
                <a href="mailto:customer_support@example.com" class="text-[#2b2522] text-sm hover:text-[#c8a98a] transition-colors border-b border-[#2b2522] hover:border-[#c8a98a] pb-0.5 mb-10">
                    customer_support@example.com
                </a>

                <div class="relative w-16 h-16 bg-[#e4decb]/30 rounded-full flex items-center justify-center mb-10">
                    <i class="fa-solid fa-leaf text-[#2b2522] transform rotate-45"></i>
                </div>

                <div class="space-y-3 text-sm text-[#666] mb-12">
                    <p><span class="text-[#2b2522] font-medium">Monday &ndash; Friday:</span> 8.00am &ndash; 21.00pm</p>
                    <p><span class="text-[#2b2522] font-medium">Saturday &ndash; Sunday:</span> 9.00am &ndash; 22.00pm</p>
                    <p><span class="text-[#2b2522] font-medium">Holiday:</span> Closed</p>
                </div>

                <div class="flex gap-6 mt-auto">
                    <a href="#" class="text-[#2b2522] hover:text-[#c8a98a] transition-colors"><i class="fa-brands fa-facebook-f text-lg"></i></a>
                    <a href="#" class="text-[#2b2522] hover:text-[#c8a98a] transition-colors"><i class="fa-brands fa-twitter text-lg"></i></a>
                    <a href="#" class="text-[#2b2522] hover:text-[#c8a98a] transition-colors"><i class="fa-brands fa-instagram text-lg"></i></a>
                    <a href="#" class="text-[#2b2522] hover:text-[#c8a98a] transition-colors"><i class="fa-brands fa-pinterest-p text-lg"></i></a>
                    <a href="#" class="text-[#2b2522] hover:text-[#c8a98a] transition-colors"><i class="fa-brands fa-skype text-lg"></i></a>
                </div>
            </div>
        </div>
    </div>
    
    {{-- Top Info Bar --}}
    <div class="max-w-7xl mx-auto px-4 mb-4 hidden md:flex justify-between transition-all duration-300 pointer-events-auto"
         :class="scrolled ? 'opacity-0 -translate-y-10 h-0 overflow-hidden mb-0' : 'opacity-100 translate-y-0'">
        
        {{-- Location --}}
        <div class="flex items-center gap-2 opacity-90 transition-opacity hover:opacity-100">
            <i class="fa-solid fa-location-dot text-[#c8a98a] text-2xl"></i>
            <span class="font-heading text-[#ede8dc] text-xs tracking-widest uppercase font-semibold mt-0.5">448 West Foxrun St. Bronx</span>
        </div>

        {{-- Right Info --}}
        <div class="flex items-center gap-2 opacity-90 transition-opacity hover:opacity-100">
            <i class="fa-solid fa-phone text-[#c8a98a] text-xl"></i>
            <span class="font-heading text-[#ede8dc] text-xs tracking-widest uppercase font-semibold mt-0.5">Call For Delivery: (734) 665-1852</span>
        </div>
    </div>

    {{-- Navbar Capsule --}}
    <div class="w-[95%] lg:w-[85%] max-w-5xl mx-auto pointer-events-auto transition-all duration-300"
         :class="scrolled ? 'translate-y-[-40px]' : ''">
        
        <nav class="bg-brown-dark/95 backdrop-blur-md rounded-full shadow-2xl relative h-16 w-full flex justify-between items-center px-4 border border-white/10"
             x-data="{ mobileOpen: false }">

            {{-- Left Links --}}
            <div class="flex items-center w-[45%] lg:w-[40%] justify-end pr-16 lg:pr-24 h-full relative">
                <button @click="mobileOpen = !mobileOpen"
                        class="md:hidden flex flex-col justify-center items-center gap-1.5 text-white hover:text-[#c8a98a] absolute left-4 w-8 h-8 group transition-all duration-300">
                    <span class="block h-[1px] w-5 bg-current transition-all duration-300 group-hover:bg-[#c8a98a]"></span>
                    <span class="block h-[1px] w-7 bg-current transition-all duration-300 group-hover:bg-[#c8a98a]"></span>
                    <span class="block h-[1px] w-5 bg-current transition-all duration-300 group-hover:bg-[#c8a98a]"></span>
                </button>

                <ul class="hidden md:flex items-center gap-6 lg:gap-10 text-white font-heading font-bold text-[10px] uppercase tracking-[0.2em]">
                    <li>
                        <button @click="sideMenuOpen = true" class="text-white hover:text-[#c8a98a] transition-colors flex flex-col justify-center gap-[4px] w-5 h-5 group">
                            <span class="block h-[2px] w-full bg-current transition-all duration-300 group-hover:w-3"></span>
                            <span class="block h-[2px] w-3 bg-current transition-all duration-300 group-hover:w-full"></span>
                            <span class="block h-[2px] w-full bg-current transition-all duration-300 group-hover:w-3"></span>
                        </button>
                    </li>
                    @if(isset($leftNavItems))
                        @foreach($leftNavItems as $item)
                        <li class="relative group" x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
                            <a href="{{ $item->url }}" {!! $item->type === 'link' ? 'wire:navigate' : '' !!} target="{{ $item->target }}" class="hover:text-[#c8a98a] transition-colors {{ ($item->url === '/' ? request()->is('/') : request()->is(trim($item->url, '/').'*')) ? 'text-[#c8a98a]' : '' }} flex items-center gap-2 py-4">
                                @if($item->icon)
                                <i class="fa-solid {{ $item->icon }} text-[10px]"></i>
                                @endif
                                {{ $item->getLocalizedLabel() }}
                                @if($item->children->count() > 0)
                                    <i class="fa-solid fa-chevron-down text-[8px] ml-1 transition-transform duration-300" :class="open ? 'rotate-180 text-[#c8a98a]' : ''"></i>
                                @endif
                            </a>
                            
                            @if($item->children->count() > 0)
                            <ul x-show="open" 
                                x-transition:enter="transition ease-out duration-200"
                                x-transition:enter-start="opacity-0 translate-y-2 pointer-events-none"
                                x-transition:enter-end="opacity-100 translate-y-0"
                                x-transition:leave="transition ease-in duration-150"
                                x-transition:leave-start="opacity-100 translate-y-0"
                                x-transition:leave-end="opacity-0 translate-y-2 pointer-events-none"
                                class="absolute top-full left-0 mt-0 w-48 bg-white border-t-2 border-gold shadow-xl rounded-b-xl py-2 z-50 flex flex-col"
                                style="display: none;">
                                
                                @foreach($item->children as $child)
                                    <li>
                                        <a href="{{ $child->url }}" {!! $child->type === 'link' ? 'wire:navigate' : '' !!} target="{{ $child->target }}" class="block px-6 py-3 text-brown-darker font-heading text-xs font-bold uppercase tracking-wider hover:bg-cream hover:text-gold transition-colors">
                                            @if($child->icon)
                                                <i class="fa-solid {{ $child->icon }} mr-2"></i>
                                            @endif
                                            {{ $child->getLocalizedLabel() }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                            @endif
                        </li>
                        @endforeach
                    @endif
                </ul>
            </div>

            {{-- Centered Logo --}}
            <div class="absolute left-1/2 top-1/2 transform -translate-x-1/2 -translate-y-1/2 z-30 transition-all duration-500">
                <a href="/" wire:navigate 
                   class="bg-[#fdfbf7] rounded-full p-2 flex flex-col items-center justify-center shadow-2xl border-[6px] border-[#2b2522] transition-all duration-500 hover:scale-105"
                   :class="scrolled ? 'w-20 h-20' : 'w-28 h-28'">
                    
                    <i class="fa-solid fa-mug-hot text-[#2b2522] transition-all duration-500"
                       :class="scrolled ? 'text-2xl mb-0' : 'text-4xl mb-1'"></i>
                    
                    <span class="font-heading font-bold text-[#2b2522] text-[9px] uppercase tracking-widest leading-none text-center transition-all duration-500 mt-1"
                          :class="scrolled ? 'hidden' : 'block'">
                        Love Curry<br>Shop
                    </span>
                </a>
            </div>

            {{-- Right Links --}}
            <div class="flex items-center w-[45%] lg:w-[40%] justify-start pl-16 lg:pl-24 h-full relative">
                <ul class="hidden md:flex items-center gap-6 lg:gap-10 text-white font-heading font-bold text-[10px] uppercase tracking-[0.2em]">
                    @if(isset($rightNavItems))
                        @foreach($rightNavItems as $item)
                        <li class="relative group" x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
                            <a href="{{ $item->url }}" {!! $item->type === 'link' ? 'wire:navigate' : '' !!} target="{{ $item->target }}" class="hover:text-[#c8a98a] transition-colors {{ ($item->url === '/' ? request()->is('/') : request()->is(trim($item->url, '/').'*')) ? 'text-[#c8a98a]' : '' }} flex items-center gap-2 py-4">
                                @if($item->icon)
                                <i class="fa-solid {{ $item->icon }} text-[10px]"></i>
                                @endif
                                {{ $item->getLocalizedLabel() }}
                                @if($item->children->count() > 0)
                                    <i class="fa-solid fa-chevron-down text-[8px] ml-1 transition-transform duration-300" :class="open ? 'rotate-180 text-[#c8a98a]' : ''"></i>
                                @endif
                            </a>
                            
                            @if($item->children->count() > 0)
                            <ul x-show="open" 
                                x-transition:enter="transition ease-out duration-200"
                                x-transition:enter-start="opacity-0 translate-y-2 pointer-events-none"
                                x-transition:enter-end="opacity-100 translate-y-0"
                                x-transition:leave="transition ease-in duration-150"
                                x-transition:leave-start="opacity-100 translate-y-0"
                                x-transition:leave-end="opacity-0 translate-y-2 pointer-events-none"
                                class="absolute top-full left-0 mt-0 w-48 bg-white border-t-2 border-gold shadow-xl rounded-b-xl py-2 z-50 flex flex-col"
                                style="display: none;">
                                
                                @foreach($item->children as $child)
                                    <li>
                                        <a href="{{ $child->url }}" {!! $child->type === 'link' ? 'wire:navigate' : '' !!} target="{{ $child->target }}" class="block px-6 py-3 text-brown-darker font-heading text-xs font-bold uppercase tracking-wider hover:bg-cream hover:text-gold transition-colors">
                                            @if($child->icon)
                                                <i class="fa-solid {{ $child->icon }} mr-2"></i>
                                            @endif
                                            {{ $child->getLocalizedLabel() }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                            @endif
                        </li>
                        @endforeach
                    @endif
                </ul>
                <div class="flex items-center gap-5 text-white absolute right-6">
                    <button class="hover:text-[#c8a98a] transition-colors"><i class="fa-solid fa-magnifying-glass text-sm"></i></button>
                    <button class="relative hover:text-[#c8a98a] transition-colors">
                        <i class="fa-solid fa-bag-shopping text-sm"></i>
                        <span class="absolute -top-2 -right-2 bg-[#c8a98a] text-white text-[9px] font-bold rounded-full w-4 h-4 flex items-center justify-center shadow-md">3</span>
                    </button>
                </div>
            </div>

            <!-- Mobile Menu Dropdown -->
            <div x-show="mobileOpen"
                 x-transition:enter="transition ease-out duration-300"
                 x-transition:enter-start="opacity-0 -translate-y-4 scale-95"
                 x-transition:enter-end="opacity-100 translate-y-0 scale-100"
                 x-transition:leave="transition ease-in duration-200"
                 x-transition:leave-start="opacity-100 translate-y-0 scale-100"
                 x-transition:leave-end="opacity-0 -translate-y-4 scale-95"
                 @click.away="mobileOpen = false"
                 class="md:hidden absolute top-[110%] left-0 right-0 bg-white rounded-2xl shadow-2xl border border-gray-100 overflow-hidden z-50 text-brown-darker p-6 space-y-4"
                 style="display: none">
                @if(isset($mobileItems))
                    @foreach($mobileItems as $item)
                        <div x-data="{ subOpen: false }" class="{{ !$loop->last ? 'border-b border-gray-100' : '' }}">
                            <div class="flex items-center justify-between pb-3">
                                <a href="{{ $item->children->count() === 0 ? $item->url : '#' }}" 
                                   @if($item->children->count() > 0) @click.prevent="subOpen = !subOpen" @else {!! $item->type === 'link' ? 'wire:navigate' : '' !!} @endif
                                   target="{{ $item->target }}" 
                                   class="font-heading text-sm uppercase tracking-widest font-bold hover:text-gold transition-colors {{ ($item->url === '/' ? request()->is('/') : request()->is(trim($item->url, '/').'*')) ? 'text-gold' : '' }} flex items-center gap-2 w-full">
                                    @if($item->icon)
                                    <i class="fa-solid {{ $item->icon }} text-lg"></i>
                                    @endif
                                    {{ $item->getLocalizedLabel() }}
                                </a>
                                @if($item->children->count() > 0)
                                    <button @click.prevent="subOpen = !subOpen" class="w-8 h-8 flex items-center justify-center text-brown-darker hover:text-gold transition-colors shrink-0">
                                        <i class="fa-solid fa-chevron-down text-sm transition-transform duration-300" :class="subOpen ? 'rotate-180 text-gold' : ''"></i>
                                    </button>
                                @endif
                            </div>

                            @if($item->children->count() > 0)
                                <div x-show="subOpen" x-collapse.duration.300ms class="pl-4 pb-3 space-y-3" style="display: none;">
                                    @foreach($item->children as $child)
                                        <a href="{{ $child->url }}" {!! $child->type === 'link' ? 'wire:navigate' : '' !!} target="{{ $child->target }}" class="block font-heading text-xs uppercase tracking-widest font-bold text-gray-500 hover:text-gold transition-colors flex items-center gap-2">
                                            @if($child->icon)
                                            <i class="fa-solid {{ $child->icon }}"></i>
                                            @endif
                                            {{ $child->getLocalizedLabel() }}
                                        </a>
                                    @endforeach
                                </div>
                            @endif
                        </div>
                    @endforeach
                @endif
            </div>
        </nav>
    </div>
</header>
