<!-- Navbar -->
<header class="fixed top-0 left-0 right-0 z-50 w-full pt-6 pointer-events-none" 
        x-data="{ scrolled: false }" 
        x-init="window.addEventListener('scroll', () => { scrolled = window.scrollY > 50 })">
    
    {{-- Top Info Bar --}}
    <div class="max-w-7xl mx-auto px-4 mb-4 hidden md:flex justify-between transition-all duration-300 pointer-events-auto"
         :class="scrolled ? 'opacity-0 -translate-y-10 h-0 overflow-hidden mb-0' : 'opacity-100 translate-y-0'">
        
        {{-- Location --}}
        <div class="flex items-center gap-3">
            <div class="bg-gold text-white rounded-full w-8 h-8 flex items-center justify-center">
                <i class="fa-solid fa-location-dot"></i>
            </div>
            <div>
                <p class="font-heading font-bold text-white uppercase text-[10px] tracking-widest mb-0.5">Location</p>
                <p class="text-white text-[11px] tracking-wider">448 West Foxrun St. Bronx</p>
            </div>
        </div>

        {{-- Right Info --}}
        <div class="flex items-center gap-3">
            <div class="text-right">
                <p class="font-heading font-bold text-white uppercase text-[10px] tracking-widest mb-0.5">Call Delivery</p>
                <p class="text-white text-[11px] tracking-wider">(734) 665-1852</p>
            </div>
            <div class="bg-gold text-white rounded-full w-8 h-8 flex items-center justify-center shadow-lg">
                <i class="fa-solid fa-phone text-xs"></i>
            </div>
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

                <ul class="hidden md:flex items-center gap-6 lg:gap-10 text-white font-bold text-[10px] uppercase tracking-[0.2em]" style="font-family: 'Oswald', sans-serif;">
                    <li><a href="/" wire:navigate class="hover:text-[#c8a98a] transition-colors text-[#c8a98a] flex items-center gap-2"><i class="fa-solid fa-mug-hot text-[10px]"></i> Home</a></li>
                    <li><a href="/menu" wire:navigate class="hover:text-[#c8a98a] transition-colors">Menu</a></li>
                    <li><a href="/reservation" wire:navigate class="hover:text-[#c8a98a] transition-colors">Reservation</a></li>
                </ul>
            </div>

            {{-- Centered Logo --}}
            <div class="absolute left-1/2 top-1/2 transform -translate-x-1/2 -translate-y-1/2 z-30 transition-all duration-500">
                <a href="/" wire:navigate 
                   class="bg-[#fdfbf7] rounded-full p-2 flex flex-col items-center justify-center shadow-2xl border-[6px] border-[#2b2522] transition-all duration-500 hover:scale-105"
                   :class="scrolled ? 'w-20 h-20' : 'w-28 h-28'">
                    
                    <i class="fa-solid fa-mug-hot text-[#2b2522] transition-all duration-500"
                       :class="scrolled ? 'text-2xl mb-0' : 'text-4xl mb-1'"></i>
                    
                    <span class="font-bold text-[#2b2522] text-[9px] uppercase tracking-widest leading-none text-center transition-all duration-500 mt-1"
                          :class="scrolled ? 'hidden' : 'block'" style="font-family: 'Oswald', sans-serif;">
                        Love Curry<br>Shop
                    </span>
                </a>
            </div>

            {{-- Right Links --}}
            <div class="flex items-center w-[45%] lg:w-[40%] justify-start pl-16 lg:pl-24 h-full relative">
                <ul class="hidden md:flex items-center gap-6 lg:gap-10 text-white font-bold text-[10px] uppercase tracking-[0.2em]" style="font-family: 'Oswald', sans-serif;">
                    <li><a href="/pages" wire:navigate class="hover:text-[#c8a98a] transition-colors">Pages</a></li>
                    <li><a href="/blog" wire:navigate class="hover:text-[#c8a98a] transition-colors">Blog</a></li>
                    <li><a href="/contact" wire:navigate class="hover:text-[#c8a98a] transition-colors">Contact</a></li>
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
                <a href="/" wire:navigate class="block font-heading text-sm uppercase tracking-widest font-bold hover:text-gold transition-colors border-b border-gray-100 pb-3">Home</a>
                <a href="/menu" wire:navigate class="block font-heading text-sm uppercase tracking-widest font-bold hover:text-gold transition-colors border-b border-gray-100 pb-3">Menu</a>
                <a href="/reservation" wire:navigate class="block font-heading text-sm uppercase tracking-widest font-bold hover:text-gold transition-colors border-b border-gray-100 pb-3">Reservation</a>
                <a href="/pages" wire:navigate class="block font-heading text-sm uppercase tracking-widest font-bold hover:text-gold transition-colors border-b border-gray-100 pb-3">Pages</a>
                <a href="/blog" wire:navigate class="block font-heading text-sm uppercase tracking-widest font-bold hover:text-gold transition-colors border-b border-gray-100 pb-3">Blog</a>
                <a href="/contact" wire:navigate class="block font-heading text-sm uppercase tracking-widest font-bold hover:text-gold transition-colors">Contact</a>
            </div>
        </nav>
    </div>
</header>
