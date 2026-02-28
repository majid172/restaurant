<div>
    {{-- ═══ PAGE HEADER ═══ --}}
    <section class="relative pt-32 pb-20 overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-amber-800 to-amber-900"></div>
        <div class="absolute inset-0 bg-black/40"></div>
        <div class="relative z-10 max-w-4xl mx-auto px-4 text-center text-white">
            <h2 class="font-script text-3xl md:text-4xl mb-2">Get in Touch</h2>
            <h1 class="font-heading text-5xl md:text-6xl font-bold uppercase tracking-wide mb-4">Contact Us</h1>
            <p class="text-gray-300 text-sm md:text-base max-w-xl mx-auto">
                We'd love to hear from you. Reach out for reservations, catering, or any questions.
            </p>
        </div>
        <div class="torn-edge-bottom z-20"></div>
    </section>

    {{-- ═══ CONTACT CONTENT ═══ --}}
    <section class="py-24 bg-white sketch-bg">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">

                {{-- Contact Form --}}
                <div>
                    <div class="flex items-center gap-2 mb-4">
                        <svg class="text-gold w-3 h-3" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M8.1 13.34l2.83-2.83L3.91 3.5a4.008 4.008 0 000 5.66l4.19 4.18zm6.78-1.81c1.53.71 3.68.21 5.27-1.38 1.91-1.91 2.28-4.65.81-6.12-1.46-1.46-4.2-1.1-6.12.81-1.59 1.59-2.09 3.74-1.38 5.27L3.7 19.87l1.41 1.41L12 14.41l6.88 6.88 1.41-1.41L13.41 13l1.47-1.47z"/>
                        </svg>
                        <span class="text-gold font-heading font-bold uppercase tracking-widest text-xs">Send a Message</span>
                    </div>
                    <h2 class="font-heading text-brown-darker text-3xl lg:text-4xl font-bold uppercase leading-tight mb-8">
                        We'd Love To<br>Hear From You
                    </h2>

                    @if($submitted)
                        <div class="bg-green-50 border border-green-200 rounded-xl p-8 text-center">
                            <svg class="w-16 h-16 text-green-500 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            <h3 class="font-heading text-xl font-bold text-green-700 uppercase mb-2">Message Sent!</h3>
                            <p class="text-green-600 text-sm">Thank you for reaching out. We'll get back to you within 24 hours.</p>
                            <button wire:click="$set('submitted', false)"
                                class="mt-6 bg-gold hover:bg-gold-dark text-white font-heading font-medium uppercase tracking-widest text-xs px-6 py-3 rounded transition-all">
                                Send Another
                            </button>
                        </div>
                    @else
                        <form wire:submit="submit" class="space-y-5">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                                <div>
                                    <label class="block text-sm font-medium text-brown-darker mb-1.5">Full Name *</label>
                                    <input type="text" wire:model="name" placeholder="John Doe"
                                        class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:border-gold focus:ring-2 focus:ring-gold/20 outline-none text-sm transition-all">
                                    @error('name') <span class="text-red-500 text-xs mt-1">{{ $message }}</span> @enderror
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-brown-darker mb-1.5">Email Address *</label>
                                    <input type="email" wire:model="email" placeholder="john@example.com"
                                        class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:border-gold focus:ring-2 focus:ring-gold/20 outline-none text-sm transition-all">
                                    @error('email') <span class="text-red-500 text-xs mt-1">{{ $message }}</span> @enderror
                                </div>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                                <div>
                                    <label class="block text-sm font-medium text-brown-darker mb-1.5">Phone</label>
                                    <input type="tel" wire:model="phone" placeholder="+44 20 7123 4567"
                                        class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:border-gold focus:ring-2 focus:ring-gold/20 outline-none text-sm transition-all">
                                    @error('phone') <span class="text-red-500 text-xs mt-1">{{ $message }}</span> @enderror
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-brown-darker mb-1.5">Subject *</label>
                                    <input type="text" wire:model="subject" placeholder="Reservation, Catering, etc."
                                        class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:border-gold focus:ring-2 focus:ring-gold/20 outline-none text-sm transition-all">
                                    @error('subject') <span class="text-red-500 text-xs mt-1">{{ $message }}</span> @enderror
                                </div>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-brown-darker mb-1.5">Message *</label>
                                <textarea wire:model="message" rows="5" placeholder="Tell us how we can help..."
                                    class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:border-gold focus:ring-2 focus:ring-gold/20 outline-none text-sm transition-all resize-none"></textarea>
                                @error('message') <span class="text-red-500 text-xs mt-1">{{ $message }}</span> @enderror
                            </div>

                            <button type="submit"
                                class="w-full bg-gold hover:bg-gold-dark text-white font-heading font-medium uppercase tracking-widest text-sm px-8 py-4 rounded-lg transition-all hover:shadow-lg hover:shadow-gold/30 flex items-center justify-center gap-2">
                                <span wire:loading.remove wire:target="submit">Send Message</span>
                                <span wire:loading wire:target="submit">
                                    <svg class="animate-spin w-5 h-5" fill="none" viewBox="0 0 24 24">
                                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4z"></path>
                                    </svg>
                                </span>
                            </button>
                        </form>
                    @endif
                </div>

                {{-- Contact Info --}}
                <div>
                    <div class="bg-cream rounded-xl p-8 mb-8">
                        <h3 class="font-heading text-xl font-bold uppercase text-brown-darker tracking-wider mb-6">Restaurant Info</h3>
                        <ul class="space-y-6">
                            <li class="flex items-start gap-4">
                                <div class="w-12 h-12 bg-gold/10 rounded-full flex items-center justify-center shrink-0">
                                    <svg class="w-5 h-5 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-heading font-bold uppercase text-brown-darker text-sm tracking-wider mb-1">Address</h4>
                                    <p class="text-text-muted text-sm">123 Spice Street, Curry Lane<br>London, UK EC1A 1BB</p>
                                </div>
                            </li>
                            <li class="flex items-start gap-4">
                                <div class="w-12 h-12 bg-gold/10 rounded-full flex items-center justify-center shrink-0">
                                    <svg class="w-5 h-5 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-heading font-bold uppercase text-brown-darker text-sm tracking-wider mb-1">Phone</h4>
                                    <p class="text-text-muted text-sm">+44 (0) 20 7123 4567</p>
                                </div>
                            </li>
                            <li class="flex items-start gap-4">
                                <div class="w-12 h-12 bg-gold/10 rounded-full flex items-center justify-center shrink-0">
                                    <svg class="w-5 h-5 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-heading font-bold uppercase text-brown-darker text-sm tracking-wider mb-1">Email</h4>
                                    <p class="text-text-muted text-sm">hello@lovecurry.com</p>
                                </div>
                            </li>
                        </ul>
                    </div>

                    {{-- Map placeholder --}}
                    <div class="rounded-xl overflow-hidden shadow-lg h-72 bg-cream flex items-center justify-center border border-gray-200">
                        <div class="text-center">
                            <svg class="w-12 h-12 text-gold mx-auto mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                            <p class="font-heading text-sm uppercase tracking-wider text-brown-darker font-bold">View on Google Maps</p>
                            <a href="https://maps.google.com" target="_blank" class="text-gold text-xs hover:underline mt-1 inline-block">Open in Maps →</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
