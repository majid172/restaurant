<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basilico Coffee Shop</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Oswald:wght@400;500;700&family=Poppins:wght@300;400;500;600&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        coffee: {
                            dark: '#1c1512',
                            darker: '#130e0c',
                            accent: '#c89f70', // The tan/gold color
                            text: '#828282',
                            nav: '#2a221d'
                        }
                    },
                    fontFamily: {
                        sans: ['Poppins', 'sans-serif'],
                        heading: ['Oswald', 'sans-serif'],
                        script: ['Great Vibes', 'cursive']
                    }
                }
            }
        }
    </script>
    <style>
        /* Custom styles for background images and textures */
        .hero-bg {
            background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('https://images.unsplash.com/photo-1497935586351-b67a49e012bf?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80');
            background-size: cover;
            background-position: center;
        }

        /* Torn paper edge effect for the hero section */
        .torn-edge {
            position: absolute;
            bottom: -1px;
            left: 0;
            width: 100%;
            height: 40px;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1200 120' preserveAspectRatio='none'%3E%3Cpath d='M0,0 C150,80 300,20 450,60 C600,100 750,40 900,80 C1050,120 1200,40 1200,40 L1200,120 L0,120 Z' fill='%23ffffff'/%3E%3C/svg%3E");
            background-size: 100% 100%;
            background-repeat: no-repeat;
        }

        .sketch-bg {
            background-image: url('https://www.transparenttextures.com/patterns/cream-paper.png');
            /* Subtle texture */
        }
    </style>
</head>

<body class="font-sans text-coffee-text bg-white antialiased">

    <section class="relative hero-bg min-h-screen flex flex-col pt-6">

        <header class="relative z-50 w-full max-w-7xl mx-auto px-4" id="main-header">
            <div
                class="flex justify-between items-center text-gray-300 text-xs tracking-wider mb-4 px-12 lg:px-32 hidden md:flex transition-all duration-300">
                <div class="flex items-center gap-3">
                    <div class="bg-coffee-accent text-white rounded-full w-8 h-8 flex items-center justify-center">
                        <i class="fa-solid fa-location-dot"></i>
                    </div>
                    <div>
                        <p class="font-bold text-white uppercase mb-0.5">Location</p>
                        <p>448 West Foxrun St. Bronx</p>
                    </div>
                </div>
                <div class="flex items-center gap-3">
                    <div class="text-right">
                        <p class="font-bold text-white uppercase mb-0.5">Call Delivery</p>
                        <p>(734) 665-1852 or (770) 942-7739</p>
                    </div>
                    <div class="bg-coffee-accent text-white rounded-full w-8 h-8 flex items-center justify-center">
                        <i class="fa-solid fa-phone"></i>
                    </div>
                </div>
            </div>

            <div id="navbarWrapper"
                class="w-[95%] lg:w-[85%] max-w-5xl mx-auto z-50 transition-all duration-300 relative">
                <nav
                    class="bg-coffee-nav rounded-full flex justify-between items-center relative shadow-lg h-16 w-full">

                    <div class="flex items-center w-1/2 relative pr-16 lg:pr-24 h-full">
                        <button id="hamburgerBtn"
                            class="flex flex-col justify-center items-center gap-1.5 text-white hover:text-coffee-accent absolute left-8 w-8 h-8 group transition-all duration-300">
                            <span
                                class="block h-[1px] w-5 bg-current transition-all duration-300 group-hover:bg-coffee-accent"></span>
                            <span
                                class="block h-[1px] w-7 bg-current transition-all duration-300 group-hover:bg-coffee-accent"></span>
                            <span
                                class="block h-[1px] w-5 bg-current transition-all duration-300 group-hover:bg-coffee-accent"></span>
                        </button>
                        <ul
                            class="hidden md:flex items-center gap-6 lg:gap-10 text-white font-heading text-sm uppercase tracking-widest font-medium w-full justify-center pl-10">
                            <li class="flex items-center gap-2 text-coffee-accent">
                                <i class="fa-solid fa-coffee text-xs"></i>
                                <a href="#" class="hover:text-white transition">Home</a>
                            </li>
                            <li><a href="#" class="hover:text-coffee-accent transition">Menu</a></li>
                            <li><a href="#" class="hover:text-coffee-accent transition">Reservation</a></li>
                        </ul>
                    </div>

                    <div
                        class="absolute left-1/2 top-1/2 transform -translate-x-1/2 -translate-y-1/2 z-30 pointer-events-none">
                        <div id="navLogoContainer"
                            class="bg-[#f2efe9] rounded-full p-2 w-28 h-28 flex items-center justify-center shadow-xl border-4 border-coffee-nav transition-all duration-300 pointer-events-auto">
                            <div class="text-center transition-all duration-300 overflow-hidden flex flex-col items-center justify-center"
                                id="navLogoContent">
                                <i id="navLogoIcon"
                                    class="fa-solid fa-mug-hot text-coffee-dark text-3xl mb-1 transition-all duration-300"></i>
                                <p id="navLogoText"
                                    class="font-heading text-coffee-dark font-bold text-[10px] uppercase leading-tight transition-all duration-300 max-h-10 opacity-100">
                                    Basilico<br>Coffee</p>
                            </div>
                        </div>
                    </div>

                    <div class="flex items-center w-1/2 relative pl-16 lg:pl-24 h-full">
                        <ul
                            class="hidden md:flex items-center gap-6 lg:gap-10 text-white font-heading text-sm uppercase tracking-widest font-medium w-full justify-center pr-10">
                            <li><a href="#" class="hover:text-coffee-accent transition">Pages</a></li>
                            <li><a href="#" class="hover:text-coffee-accent transition">Blog</a></li>
                            <li><a href="#" class="hover:text-coffee-accent transition">Contact</a></li>
                        </ul>
                        <div class="flex items-center gap-6 text-white absolute right-8">
                            <button class="hover:text-coffee-accent transition"><i
                                    class="fa-solid fa-magnifying-glass"></i></button>
                            <button class="relative hover:text-coffee-accent transition">
                                <i class="fa-solid fa-bag-shopping"></i>
                                <span
                                    class="absolute -top-2 -right-2 bg-coffee-accent text-white text-[10px] rounded-full w-4 h-4 flex items-center justify-center">3</span>
                            </button>
                        </div>
                    </div>
                </nav>
            </div>
        </header>

        <div class="flex-grow flex flex-col justify-center items-center text-center px-4 relative z-10 -mt-10">
            <h2 class="font-script text-white text-4xl md:text-5xl mb-2">- Welcome to Basilico Coffee Shop -</h2>
            <h1 class="font-heading text-white text-5xl md:text-7xl font-bold uppercase tracking-wide mb-6">Our Passion
                is in<br>Our Coffee</h1>
            <p class="text-gray-300 max-w-2xl mx-auto mb-10 text-sm md:text-base">
                Harbourfront Seafood Restaurant is the perfect spot in Sydney to celebrate a special occasion or to
                simply head out for a bite to eat.
            </p>

            <div class="flex flex-col sm:flex-row gap-4">
                <a href="#"
                    class="bg-coffee-accent hover:bg-yellow-700 text-white font-heading font-medium uppercase tracking-widest text-sm px-8 py-4 rounded transition">View
                    All Menu</a>
                <a href="#"
                    class="bg-white hover:bg-gray-200 text-coffee-dark font-heading font-medium uppercase tracking-widest text-sm px-8 py-4 rounded transition">Book
                    A Table</a>
            </div>

            <div class="flex gap-2 mt-16">
                <button class="w-2 h-2 rounded-full border border-white bg-transparent"></button>
                <button class="w-2 h-2 rounded-full bg-white"></button>
                <button class="w-2 h-2 rounded-full border border-white bg-transparent"></button>
            </div>
        </div>

        <div class="torn-edge"></div>
    </section>

    <section class="py-24 bg-white relative overflow-hidden sketch-bg">
        <div class="max-w-7xl mx-auto px-4 relative z-10">
            <div class="flex flex-col lg:flex-row items-center gap-12 lg:gap-8">

                <div class="w-full lg:w-4/12 relative">
                    <div class="relative z-10 pl-4 pt-4">
                        <img src="https://images.unsplash.com/photo-1511920170033-f8396924c348?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                            alt="Barista pouring coffee"
                            class="rounded-lg shadow-2xl relative z-10 h-[500px] object-cover w-full">
                        <div
                            class="absolute top-0 left-0 w-full h-full bg-gray-100 rounded-lg -z-10 transform -translate-x-4 -translate-y-4 border border-gray-200">
                        </div>
                    </div>
                </div>

                <div class="w-full lg:w-4/12 px-4 lg:px-8">
                    <div class="flex items-center gap-2 mb-4">
                        <i class="fa-solid fa-leaf text-coffee-accent text-sm"></i>
                        <span class="text-coffee-accent font-heading font-bold uppercase tracking-widest text-xs">Coffee
                            Shop Since 2003</span>
                    </div>

                    <h2
                        class="font-heading text-coffee-dark text-4xl lg:text-5xl font-bold uppercase leading-tight mb-6">
                        We Are Not Your<br>Average Coffee Shop
                    </h2>

                    <p class="mb-6 text-sm leading-relaxed">
                        We offer some of the best locally roasted coffee using "Brazilian Santos" beans. Enjoy Dark,
                        Blonde, Jamaican, Italian & Decaf roasts. Also available are our specialty Lattes, Frappes,
                        Mochas, Cappuccinos, Americanos & more ...
                    </p>

                    <p class="mb-8 text-sm leading-relaxed">
                        To see more of our coffee, specialty drinks & food menus, please click the link below. There are
                        many variations of passages of lorem ipsum available but the majority have suffered alteration
                        in some form by injected.
                    </p>

                    <a href="#"
                        class="inline-block bg-[#ceae86] hover:bg-coffee-accent text-white font-heading font-medium uppercase tracking-widest text-xs px-8 py-3 rounded transition">
                        Click To Read More
                    </a>
                </div>

                <div class="w-full lg:w-4/12 relative mt-8 lg:mt-0">
                    <div class="relative max-w-sm mx-auto">
                        <div class="absolute inset-0 bg-[#ceae86] rounded-xl transform translate-x-4 translate-y-4">
                        </div>

                        <div class="relative bg-[#2e2520] rounded-xl p-10 text-white shadow-xl">
                            <h3 class="font-heading text-[#ceae86] text-2xl font-bold uppercase tracking-wider mb-8">
                                Hour Opening</h3>
                            <ul class="space-y-4 text-sm font-medium">
                                <li class="flex justify-between items-center border-b border-gray-700 pb-2">
                                    <span class="uppercase tracking-wider">Monday</span><span>7:00 - 21:00</span>
                                </li>
                                <li class="flex justify-between items-center border-b border-gray-700 pb-2">
                                    <span class="uppercase tracking-wider">Tuesday</span><span>7:00 - 21:00</span>
                                </li>
                                <li class="flex justify-between items-center border-b border-gray-700 pb-2">
                                    <span class="uppercase tracking-wider">Wednesday</span><span>7:00 - 21:00</span>
                                </li>
                                <li class="flex justify-between items-center border-b border-gray-700 pb-2">
                                    <span class="uppercase tracking-wider">Thursday</span><span>7:00 - 21:00</span>
                                </li>
                                <li class="flex justify-between items-center border-b border-gray-700 pb-2">
                                    <span class="uppercase tracking-wider">Friday</span><span>8:00 - 21:00</span>
                                </li>
                                <li class="flex justify-between items-center border-b border-gray-700 pb-2">
                                    <span class="uppercase tracking-wider">Saturday</span><span>7:00 - 21:00</span>
                                </li>
                                <li class="flex justify-between items-center pb-2">
                                    <span class="uppercase tracking-wider">Sunday</span><span
                                        class="text-[#ceae86]">CLOSED</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="relative pt-24 pb-32 bg-[#f4f2ed] sketch-bg">
        <div class="absolute top-0 left-0 w-full h-8 -mt-7 z-20"
            style="background-image: url(&quot;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1200 120' preserveAspectRatio='none'%3E%3Cpath d='M0,120 C150,40 300,100 450,60 C600,20 750,80 900,40 C1050,0 1200,80 1200,80 L1200,0 L0,0 Z' fill='%23ffffff'/%3E%3C/svg%3E&quot;); background-size: 100% 100%;">
        </div>

        <div class="max-w-5xl mx-auto px-4 grid grid-cols-1 md:grid-cols-3 gap-6 relative z-30">
            <div
                class="relative rounded-xl overflow-hidden h-[350px] group cursor-pointer shadow-lg transform transition hover:-translate-y-2">
                <img src="https://images.unsplash.com/photo-1497935586351-b67a49e012bf?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80"
                    alt="Coffee" class="w-full h-full object-cover group-hover:scale-110 transition duration-700">
                <div
                    class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/40 to-transparent flex flex-col justify-end items-center pb-8 text-white">
                    <i class="fa-solid fa-mug-hot text-4xl mb-3 text-coffee-accent"></i>
                    <h3 class="font-heading text-xl tracking-widest uppercase font-bold">Coffee</h3>
                </div>
            </div>
            <div
                class="relative rounded-xl overflow-hidden h-[350px] group cursor-pointer shadow-lg transform transition hover:-translate-y-2">
                <img src="https://images.unsplash.com/photo-1509440159596-0249088772ff?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80"
                    alt="Bakery" class="w-full h-full object-cover group-hover:scale-110 transition duration-700">
                <div
                    class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/40 to-transparent flex flex-col justify-end items-center pb-8 text-white">
                    <i class="fa-solid fa-bread-slice text-4xl mb-3 text-coffee-accent"></i>
                    <h3 class="font-heading text-xl tracking-widest uppercase font-bold">Bakery</h3>
                </div>
            </div>
            <div
                class="relative rounded-xl overflow-hidden h-[350px] group cursor-pointer shadow-lg transform transition hover:-translate-y-2">
                <img src="https://images.unsplash.com/photo-1533089860892-a7c6f0a88666?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80"
                    alt="Breakfast" class="w-full h-full object-cover group-hover:scale-110 transition duration-700">
                <div
                    class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/40 to-transparent flex flex-col justify-end items-center pb-8 text-white">
                    <i class="fa-solid fa-egg text-4xl mb-3 text-coffee-accent"></i>
                    <h3 class="font-heading text-xl tracking-widest uppercase font-bold">Breakfast</h3>
                </div>
            </div>
        </div>
    </section>

    <section class="py-24 bg-white">
        <div class="max-w-6xl mx-auto px-4">
            <div class="text-center mb-16">
                <div class="flex items-center justify-center gap-2 mb-2">
                    <i class="fa-solid fa-leaf text-coffee-accent text-sm"></i>
                    <span class="text-coffee-accent font-heading font-bold uppercase tracking-widest text-xs">Special
                        Coffee Menu</span>
                    <i class="fa-solid fa-leaf text-coffee-accent text-sm"></i>
                </div>
                <h2 class="font-heading text-coffee-dark text-4xl md:text-5xl font-bold uppercase">Definite Coffee You
                    Must Try</h2>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-x-16 gap-y-10">
                <div class="flex items-center gap-6">
                    <img src="https://images.unsplash.com/photo-1551030173-122aabc4489c?ixlib=rb-4.0.3&auto=format&fit=crop&w=150&q=80"
                        class="w-20 h-20 rounded-full object-cover shadow">
                    <div class="flex-grow">
                        <div
                            class="flex justify-between items-baseline border-b border-dotted border-gray-400 pb-1 mb-2">
                            <h4 class="font-heading font-bold text-coffee-dark uppercase tracking-wide text-lg">Cafe
                                Americano</h4>
                            <span class="text-coffee-accent font-heading text-lg font-bold">$2.95</span>
                        </div>
                        <p class="text-sm text-gray-500">Espresso shots topped with hot water</p>
                    </div>
                </div>

                <div class="flex items-center gap-6">
                    <img src="https://images.unsplash.com/photo-1572442388796-11668a67e53d?ixlib=rb-4.0.3&auto=format&fit=crop&w=150&q=80"
                        class="w-20 h-20 rounded-full object-cover shadow">
                    <div class="flex-grow">
                        <div
                            class="flex justify-between items-baseline border-b border-dotted border-gray-400 pb-1 mb-2">
                            <h4 class="font-heading font-bold text-coffee-dark uppercase tracking-wide text-lg">Espresso
                                Macchiato</h4>
                            <span class="text-coffee-accent font-heading text-lg font-bold">$3.95</span>
                        </div>
                        <p class="text-sm text-gray-500">Rich Espresso With Milk and Foam</p>
                    </div>
                </div>

                <div class="relative border rounded-lg p-6 pt-8 mt-2 shadow-sm border-gray-200">
                    <div
                        class="absolute -top-4 left-0 bg-[#2e2520] text-white text-[10px] uppercase font-bold px-4 py-2 rounded-br-lg rounded-tl-lg font-heading tracking-widest">
                        New / Trending</div>
                    <div class="flex items-center gap-6">
                        <img src="https://images.unsplash.com/photo-1461023058943-07fcbe16d735?ixlib=rb-4.0.3&auto=format&fit=crop&w=150&q=80"
                            class="w-20 h-20 rounded-full object-cover shadow">
                        <div class="flex-grow">
                            <div
                                class="flex justify-between items-baseline border-b border-dotted border-gray-400 pb-1 mb-2">
                                <h4 class="font-heading font-bold text-coffee-dark uppercase tracking-wide text-lg">
                                    White Chocolate Mocha</h4>
                                <span class="text-coffee-accent font-heading text-lg font-bold">$4.95</span>
                            </div>
                            <p class="text-sm text-gray-500">Fresh brewed coffee and steamed milk</p>
                        </div>
                    </div>
                </div>

                <div class="flex items-center gap-6">
                    <img src="https://images.unsplash.com/photo-1558403194-611308249627?ixlib=rb-4.0.3&auto=format&fit=crop&w=150&q=80"
                        class="w-20 h-20 rounded-full object-cover shadow">
                    <div class="flex-grow">
                        <div
                            class="flex justify-between items-baseline border-b border-dotted border-gray-400 pb-1 mb-2">
                            <h4 class="font-heading font-bold text-coffee-dark uppercase tracking-wide text-lg">Iced
                                Caffe Mocha</h4>
                            <span class="text-coffee-accent font-heading text-lg font-bold">$4.95</span>
                        </div>
                        <p class="text-sm text-gray-500">Fresh brewed coffee and steamed milk</p>
                    </div>
                </div>

                <div class="flex items-center gap-6">
                    <img src="https://images.unsplash.com/photo-1578314675249-a6910f80cc4e?ixlib=rb-4.0.3&auto=format&fit=crop&w=150&q=80"
                        class="w-20 h-20 rounded-full object-cover shadow">
                    <div class="flex-grow">
                        <div
                            class="flex justify-between items-baseline border-b border-dotted border-gray-400 pb-1 mb-2">
                            <h4 class="font-heading font-bold text-coffee-dark uppercase tracking-wide text-lg">
                                Cappuccino</h4>
                            <span class="text-coffee-accent font-heading text-lg font-bold">$2.95</span>
                        </div>
                        <p class="text-sm text-gray-500">Rich Espresso With Milk and Foam</p>
                    </div>
                </div>

                <div class="relative border rounded-lg p-6 pt-8 mt-2 shadow-sm border-gray-200">
                    <div
                        class="absolute -top-4 left-0 bg-[#2e2520] text-white text-[10px] uppercase font-bold px-4 py-2 rounded-br-lg rounded-tl-lg font-heading tracking-widest">
                        Trending / Season</div>
                    <div class="flex items-center gap-6">
                        <img src="https://images.unsplash.com/photo-1541167760496-1628856ab772?ixlib=rb-4.0.3&auto=format&fit=crop&w=150&q=80"
                            class="w-20 h-20 rounded-full object-cover shadow">
                        <div class="flex-grow">
                            <div
                                class="flex justify-between items-baseline border-b border-dotted border-gray-400 pb-1 mb-2">
                                <h4 class="font-heading font-bold text-coffee-dark uppercase tracking-wide text-lg">Iced
                                    Gingerbread Latte</h4>
                                <span class="text-coffee-accent font-heading text-lg font-bold">$3.95</span>
                            </div>
                            <p class="text-sm text-gray-500">Fresh brewed coffee and steamed milk</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="relative py-32 bg-[#2e2520] mt-10">
        <div class="absolute top-0 left-0 w-full h-10 -mt-9 z-20"
            style="background-image: url(&quot;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1200 120' preserveAspectRatio='none'%3E%3Cpath d='M0,120 C150,40 300,100 450,60 C600,20 750,80 900,40 C1050,0 1200,80 1200,80 L1200,0 L0,0 Z' fill='%23ffffff'/%3E%3C/svg%3E&quot;); background-size: 100% 100%;">
        </div>

        <div class="max-w-7xl mx-auto px-4 grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div class="text-white">
                <div class="flex items-center gap-2 mb-4">
                    <i class="fa-solid fa-leaf text-coffee-accent text-sm"></i>
                    <span class="text-coffee-accent font-heading font-bold uppercase tracking-widest text-xs">Why Choose
                        Us</span>
                </div>
                <h2 class="font-heading text-4xl lg:text-5xl font-bold uppercase leading-tight mb-6">We Want You To
                    Enjoy<br>Their Coffee To The Fullest</h2>
                <p class="text-gray-400 text-sm mb-8 leading-relaxed max-w-lg">
                    Vertical is a family owned and operated coffee shop which provides a small town experience with big
                    city appeal. It's warm and friendly environment provides an excellent atmosphere to enjoy a great
                    cup of coffee or sandwich, hang with friends.
                </p>
                <ul class="space-y-4">
                    <li class="flex items-center gap-3 text-sm font-heading tracking-wider uppercase">
                        <div
                            class="bg-white rounded-full w-5 h-5 flex items-center justify-center text-coffee-dark text-[10px]">
                            <i class="fa-solid fa-check"></i>
                        </div>
                        Imported coffee and quality control
                    </li>
                    <li class="flex items-center gap-3 text-sm font-heading tracking-wider uppercase">
                        <div
                            class="bg-white rounded-full w-5 h-5 flex items-center justify-center text-coffee-dark text-[10px]">
                            <i class="fa-solid fa-check"></i>
                        </div>
                        Cozy space to enjoy and relax
                    </li>
                    <li class="flex items-center gap-3 text-sm font-heading tracking-wider uppercase">
                        <div
                            class="bg-white rounded-full w-5 h-5 flex items-center justify-center text-coffee-dark text-[10px]">
                            <i class="fa-solid fa-check"></i>
                        </div>
                        Make sure the coffee taste doesn't change
                    </li>
                </ul>
            </div>

            <div class="relative mt-12 lg:mt-0 z-30">
                <img src="https://images.unsplash.com/photo-1544787219-7f47ccb76574?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                    alt="Person stirring coffee" class="rounded-xl shadow-2xl w-full h-[500px] object-cover">

                <button
                    class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-white text-coffee-accent w-16 h-16 rounded-full flex items-center justify-center shadow-lg text-xl hover:scale-110 transition">
                    <i class="fa-solid fa-play ml-1"></i>
                </button>

                <div
                    class="absolute -left-12 top-1/2 transform -translate-y-1/2 bg-white rounded-2xl p-8 shadow-2xl text-center w-64 hidden md:block">
                    <div class="mb-8">
                        <i class="fa-solid fa-mug-hot text-coffee-accent text-4xl mb-2"></i>
                        <h3 class="font-heading text-4xl font-bold text-coffee-dark">658+</h3>
                        <p class="text-[10px] uppercase font-bold tracking-widest text-gray-500 mt-1">Cup Coffee Every
                            Day</p>
                    </div>
                    <div class="w-full h-[1px] bg-gray-200 mb-8"></div>
                    <div>
                        <i class="fa-solid fa-face-smile text-coffee-accent text-4xl mb-2"></i>
                        <h3 class="font-heading text-4xl font-bold text-coffee-dark">98%</h3>
                        <p class="text-[10px] uppercase font-bold tracking-widest text-gray-500 mt-1">Customer
                            Satisfaction</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="absolute bottom-0 left-0 w-full h-10 -mb-9 z-20"
            style="background-image: url(&quot;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1200 120' preserveAspectRatio='none'%3E%3Cpath d='M0,0 C150,80 300,20 450,60 C600,100 750,40 900,80 C1050,120 1200,40 1200,40 L1200,120 L0,120 Z' fill='%23ffffff'/%3E%3C/svg%3E&quot;); background-size: 100% 100%;">
        </div>
    </section>

    <section class="py-32 bg-white">
        <div class="max-w-7xl mx-auto px-4 grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">

            <div class="relative h-[600px]">
                <img src="https://images.unsplash.com/photo-1528698827591-e19ccd7bc23d?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80"
                    class="absolute right-0 top-0 w-3/4 h-[450px] object-cover rounded-xl shadow-lg z-10">
                <img src="https://images.unsplash.com/photo-1445116572660-236099ec97a0?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80"
                    class="absolute left-0 bottom-0 w-2/3 h-[350px] object-cover rounded-xl shadow-2xl z-20 border-8 border-white">
            </div>

            <div>
                <div class="flex items-center gap-2 mb-4">
                    <i class="fa-solid fa-leaf text-coffee-accent text-sm"></i>
                    <span class="text-coffee-accent font-heading font-bold uppercase tracking-widest text-xs">Private
                        Event</span>
                </div>
                <h2 class="font-heading text-4xl lg:text-5xl font-bold uppercase leading-tight mb-6 text-coffee-dark">
                    The Perfect Venue<br>For Your Special Event</h2>
                <p class="text-gray-500 text-sm mb-10 leading-relaxed">
                    Our cafe is the perfect venue for your special event, you can organize a light birthday party, we
                    will decorate it to your liking, or meet friends and relatives, a partner, and the perfect place to
                    work.
                </p>

                <div class="space-y-6 mb-10">
                    <div>
                        <h4
                            class="font-heading font-bold uppercase text-coffee-dark flex items-center gap-3 cursor-pointer">
                            <span class="text-coffee-accent text-lg">-</span> Private Coffee Room
                        </h4>
                        <p class="text-sm text-gray-500 mt-2 pl-5 leading-relaxed">
                            Donec aliquet, erat non tempor hendrerit, est augue viverra augue, non dignissim metus urna
                            eget ante. Fusce fermentum mauris nec.
                        </p>
                    </div>
                    <div>
                        <h4
                            class="font-heading font-bold uppercase text-coffee-dark flex items-center gap-3 cursor-pointer">
                            <span class="text-coffee-accent text-lg">+</span> Birthday Party
                        </h4>
                    </div>
                    <div>
                        <h4
                            class="font-heading font-bold uppercase text-coffee-dark flex items-center gap-3 cursor-pointer">
                            <span class="text-coffee-accent text-lg">+</span> Working & Meeting
                        </h4>
                    </div>
                </div>

                <a href="#"
                    class="inline-block bg-[#ceae86] hover:bg-yellow-700 text-white font-heading font-medium uppercase tracking-widest text-xs px-8 py-4 rounded transition">
                    Schedule An Event
                </a>
            </div>
        </div>
    </section>

    <section class="relative">
        <div class="absolute inset-0 bg-cover bg-center bg-no-repeat"
            style="background-image: url('https://images.unsplash.com/photo-1514432324607-a09d9b4aefdd?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80');">
            <div class="absolute inset-0 bg-[#2e2520]/80"></div>
        </div>

        <div class="absolute top-0 left-0 w-full h-8 z-20"
            style="background-image: url(&quot;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1200 120' preserveAspectRatio='none'%3E%3Cpath d='M0,120 C150,40 300,100 450,60 C600,20 750,80 900,40 C1050,0 1200,80 1200,80 L1200,0 L0,0 Z' fill='%23ffffff'/%3E%3C/svg%3E&quot;); background-size: 100% 100%;">
        </div>

        <div class="absolute -top-12 left-1/2 transform -translate-x-1/2 z-30">
            <div
                class="bg-white rounded-full p-2 shadow-xl border-4 border-white w-24 h-24 flex items-center justify-center relative overflow-hidden">
                <img src="https://images.unsplash.com/photo-1551030173-122aabc4489c?ixlib=rb-4.0.3&auto=format&fit=crop&w=150&q=80"
                    class="absolute inset-0 w-full h-full object-cover opacity-80">
                <div class="absolute inset-0 bg-coffee-accent/40 mix-blend-multiply"></div>
                <i class="fa-solid fa-quote-right text-white text-3xl relative z-10 drop-shadow-md"></i>
            </div>
        </div>

        <div class="relative z-10 max-w-4xl mx-auto px-4 py-32 text-center text-white">
            <div class="flex items-center justify-center gap-2 mb-4">
                <i class="fa-solid fa-leaf text-coffee-accent text-sm"></i>
                <span class="text-coffee-accent font-heading font-bold uppercase tracking-widest text-xs">Customer
                    Testimonial</span>
                <i class="fa-solid fa-leaf text-coffee-accent text-sm"></i>
            </div>
            <h2 class="font-heading text-4xl lg:text-5xl font-bold uppercase mb-8">What Customers Say?</h2>

            <div class="flex items-center justify-between">
                <button class="text-white hover:text-coffee-accent"><i
                        class="fa-solid fa-arrow-left text-xl"></i></button>
                <div class="px-8">
                    <p class="text-lg md:text-xl font-light italic leading-relaxed mb-8">
                        " Great atmosphere, excellent drinks (i tried two of them and plan to work through the menu) and
                        friendly staff - a combination for success! Add the commitment to serve and this is a venture I
                        can endorse without reservation. May God honor and bless your step of faith. "
                    </p>
                    <p class="font-heading font-bold uppercase tracking-widest text-coffee-accent">- Shane Jennifer -
                    </p>
                </div>
                <button class="text-white hover:text-coffee-accent"><i
                        class="fa-solid fa-arrow-right text-xl"></i></button>
            </div>

            <div class="flex justify-center mt-8 gap-2">
                <button
                    class="w-3 h-3 rounded-full border border-coffee-accent bg-transparent flex items-center justify-center">
                    <div class="w-1 h-1 bg-coffee-accent rounded-full"></div>
                </button>
            </div>
        </div>

        <div class="relative bg-[#f4f2ed] sketch-bg py-16">
            <div class="absolute top-0 left-0 w-full h-8 -mt-7 z-20"
                style="background-image: url(&quot;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1200 120' preserveAspectRatio='none'%3E%3Cpath d='M0,120 C150,40 300,100 450,60 C600,20 750,80 900,40 C1050,0 1200,80 1200,80 L1200,0 L0,0 Z' fill='%232e2520'/%3E%3C/svg%3E&quot;); background-size: 100% 100%;">
            </div>

            <div
                class="max-w-6xl mx-auto px-4 flex flex-wrap justify-between items-center gap-8 opacity-60 grayscale hover:grayscale-0 transition duration-500">
                <h2 class="font-heading text-2xl font-bold text-coffee-dark uppercase tracking-widest">Mr.Coffee</h2>
                <h2 class="font-heading text-2xl font-light text-coffee-dark uppercase tracking-widest">Millstone</h2>
                <h2 class="font-script text-4xl text-coffee-dark">Mr. Coffee</h2>
                <h2
                    class="font-heading text-2xl font-bold text-coffee-dark uppercase tracking-widest flex items-center gap-2">
                    <i class="fa-solid fa-crow text-coffee-accent"></i> Tucano Coffee
                </h2>
                <i class="fa-solid fa-mug-saucer text-4xl text-coffee-dark"></i>
            </div>
        </div>
    </section>

    <section class="bg-white">
        <div class="grid grid-cols-2 md:grid-cols-4 grid-rows-2 h-[600px] w-full">
            <div class="col-span-2 row-span-2 overflow-hidden group relative cursor-pointer">
                <img src="https://images.unsplash.com/photo-1517701550927-30cfcb64c484?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                    class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                <div
                    class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition flex items-center justify-center">
                    <i class="fa-brands fa-instagram text-white text-4xl"></i>
                </div>
            </div>

            <div class="overflow-hidden group relative cursor-pointer">
                <img src="https://images.unsplash.com/photo-1600093463592-8e36ae95ef56?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80"
                    class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                <div
                    class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition flex items-center justify-center">
                    <i class="fa-brands fa-instagram text-white text-4xl"></i>
                </div>
            </div>

            <div class="overflow-hidden group relative cursor-pointer">
                <img src="https://images.unsplash.com/photo-1498804103079-a6351b050096?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80"
                    class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                <div
                    class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition flex items-center justify-center">
                    <i class="fa-brands fa-instagram text-white text-4xl"></i>
                </div>
            </div>

            <div class="col-span-2 overflow-hidden group relative cursor-pointer">
                <img src="https://images.unsplash.com/photo-1495474472201-444453b70742?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                    class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                <div
                    class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition flex items-center justify-center">
                    <i class="fa-brands fa-instagram text-white text-4xl"></i>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-[#2e2520] relative pt-20 pb-8 text-sm overflow-hidden">
        <div class="absolute inset-0 opacity-5 pointer-events-none"
            style="background-image: radial-gradient(#fff 1px, transparent 1px); background-size: 30px 30px;"></div>

        <div class="max-w-7xl mx-auto px-4 relative z-10">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-16 text-gray-400">

                <div>
                    <div
                        class="bg-[#f2efe9] rounded-full p-2 w-32 h-32 flex flex-col items-center justify-center border-4 border-[#2e2520] mb-6 shadow-md">
                        <i class="fa-solid fa-mug-hot text-coffee-dark text-4xl mb-1"></i>
                        <p
                            class="font-heading text-coffee-dark font-bold text-[11px] uppercase leading-tight text-center">
                            Basilico<br>Coffee House</p>
                    </div>
                    <p class="leading-relaxed text-xs">
                        Welcome to our Basilico Coffee House. Lorem simply text amet cing elit aenean feugiat. t
                        hendrerit mi pulvinar vel.
                    </p>
                </div>

                <div>
                    <h3
                        class="font-heading text-white text-xl font-bold uppercase tracking-widest mb-6 border-b border-gray-700 pb-2 inline-block">
                        Contact Us</h3>
                    <div class="mb-6">
                        <p class="text-coffee-accent font-bold uppercase tracking-widest text-xs mb-1">Location:</p>
                        <p class="text-xs">4517 Washington Ave.</p>
                    </div>
                    <div>
                        <p class="text-coffee-accent font-bold uppercase tracking-widest text-xs mb-1">Book A Table:</p>
                        <p class="text-xs mb-1">Basilicofood123@gmail.com</p>
                        <p class="text-xs">(734) 665-1852</p>
                    </div>
                </div>

                <div>
                    <h3
                        class="font-heading text-white text-xl font-bold uppercase tracking-widest mb-6 border-b border-gray-700 pb-2 inline-block">
                        Hour Open</h3>
                    <ul class="space-y-4 text-xs">
                        <li class="flex justify-between"><span class="text-gray-400">Monday - Friday :</span> <span
                                class="text-white">9:00 - 22:00</span></li>
                        <li class="flex justify-between"><span class="text-gray-400">Saturday:</span> <span
                                class="text-white">10:00 - 23:00</span></li>
                        <li class="flex justify-between"><span class="text-gray-400">Sunday:</span> <span
                                class="text-white">5:00 - 23:00</span></li>
                        <li class="flex justify-between"><span class="text-gray-400">Holidays:</span> <span
                                class="text-white">Closed</span></li>
                        <li class="flex justify-between"><span class="text-gray-400">Happy Hours:</span> <span
                                class="text-white">18:00 - 20:00</span></li>
                    </ul>
                </div>

                <div>
                    <h3
                        class="font-heading text-white text-xl font-bold uppercase tracking-widest mb-6 border-b border-gray-700 pb-2 inline-block">
                        Newletters & Event</h3>
                    <p class="text-xs leading-relaxed mb-6">
                        Register your email to not miss any news and offers from us!
                    </p>
                    <form class="space-y-4">
                        <div class="relative">
                            <input type="email" placeholder="Email address..."
                                class="w-full bg-[#40352e] text-white border-none rounded py-3 px-4 text-xs focus:outline-none focus:ring-1 focus:ring-coffee-accent">
                            <button type="submit"
                                class="absolute right-3 top-1/2 transform -translate-y-1/2 text-coffee-accent hover:text-white transition">
                                <i class="fa-solid fa-paper-plane"></i>
                            </button>
                        </div>
                        <label class="flex items-center gap-2 text-xs cursor-pointer">
                            <input type="checkbox"
                                class="rounded bg-gray-800 border-gray-700 text-coffee-accent focus:ring-coffee-accent">
                            I agree to the Privacy Policy
                        </label>
                    </form>
                </div>

            </div>

            <div
                class="border-t border-gray-700 pt-8 mt-8 flex flex-col md:flex-row justify-between items-center text-xs relative text-gray-400">
                <div class="absolute left-1/2 top-0 transform -translate-x-1/2 -translate-y-1/2 bg-[#2e2520] px-2">
                    <i class="fa-solid fa-seedling text-coffee-accent text-lg"></i>
                </div>

                <p>Copyright © 2023 themesflat. All Rights Reserved.</p>
                <div class="flex items-center gap-4 mt-4 md:mt-0">
                    <span class="text-white font-bold">Follow Us:</span>
                    <a href="#" class="hover:text-coffee-accent transition"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="hover:text-coffee-accent transition"><i class="fa-brands fa-twitter"></i></a>
                    <a href="#" class="hover:text-coffee-accent transition"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#" class="hover:text-coffee-accent transition"><i class="fa-brands fa-youtube"></i></a>
                </div>
            </div>

            <button onclick="window.scrollTo({top: 0, behavior: 'smooth'})"
                class="absolute bottom-8 right-0 bg-[#ceae86] text-white w-10 h-10 rounded shadow flex items-center justify-center hover:bg-yellow-700 transition">
                <i class="fa-solid fa-chevron-up"></i>
            </button>
        </div>
    </footer>
    <!-- Hamburger Menu Dropdown Card -->
    <div id="sideMenuOverlay" class="fixed inset-0 z-40 opacity-0 pointer-events-none transition-opacity duration-300">
    </div>

    <div id="sideMenu"
        class="absolute top-[80px] left-8 mt-2 bg-white rounded-xl shadow-2xl p-8 z-50 w-[320px] transform origin-top-left scale-95 opacity-0 pointer-events-none transition-all duration-300 border border-gray-100 hidden">
        <button id="closeMenuBtn"
            class="absolute top-4 right-4 w-8 h-8 bg-[#ceae86] text-white rounded-full flex items-center justify-center hover:bg-[#a6845c] transition-colors shadow-md">
            <i class="fa-solid fa-xmark"></i>
        </button>

        <h2
            class="font-heading text-xl font-bold uppercase text-center text-coffee-darker mt-4 leading-tight tracking-[0.05em]">
            Welcome To<br>Basilico Coffee & Tea.</h2>

        <p class="text-center text-[#555] mt-4 text-[13px] leading-relaxed">
            Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae.
        </p>

        <div class="flex justify-center mt-4">
            <i class="fa-solid fa-cloud text-[#666] text-xs opacity-70"></i>
        </div>

        <p class="font-heading text-xl font-bold text-center text-[#ceae86] mt-4 tracking-widest">(734) 665-1852</p>

        <p class="text-center text-gray-800 mt-4 text-[13px] leading-relaxed">
            62 Big Tree St, Livonia, NY 14487<br>
            <span class="text-[#2b5876] mt-1 inline-block font-medium">customer_support@example.com</span>
        </p>

        <div class="flex justify-center mt-4">
            <i class="fa-solid fa-cloud text-[#666] text-xs opacity-70"></i>
        </div>

        <div class="text-center text-[13px] text-[#333] mt-4 space-y-2 font-medium tracking-wide">
            <p><span class="text-[#666] font-normal">Mon – Fri:</span> 8am – 9pm</p>
            <p><span class="text-[#666] font-normal">Sat – Sun:</span> 9am – 10pm</p>
            <p><span class="text-[#666] font-normal">Holiday:</span> Closed</p>
        </div>

        <div class="flex items-center justify-center gap-6 mt-8 text-black">
            <a href="#" class="hover:text-[#ceae86] transition transform hover:-translate-y-1"><i
                    class="fa-brands fa-facebook-f text-sm"></i></a>
            <a href="#" class="hover:text-[#ceae86] transition transform hover:-translate-y-1"><i
                    class="fa-brands fa-twitter text-sm"></i></a>
            <a href="#" class="hover:text-[#ceae86] transition transform hover:-translate-y-1"><i
                    class="fa-brands fa-instagram text-sm"></i></a>
            <a href="#" class="hover:text-[#ceae86] transition transform hover:-translate-y-1"><i
                    class="fa-brands fa-pinterest-p text-sm"></i></a>
            <a href="#" class="hover:text-[#ceae86] transition transform hover:-translate-y-1"><i
                    class="fa-brands fa-skype text-sm"></i></a>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const nav = document.getElementById("navbarWrapper");
            const logoContainer = document.getElementById("navLogoContainer");
            const logoIcon = document.getElementById("navLogoIcon");
            const logoText = document.getElementById("navLogoText");

            // Hamburger Elements Setup
            const hamburgerBtn = document.getElementById('hamburgerBtn');
            const closeMenuBtn = document.getElementById('closeMenuBtn');
            const sideMenu = document.getElementById('sideMenu');
            const sideMenuOverlay = document.getElementById('sideMenuOverlay');

            // Move menus inside navbarWrapper for correct absolute positioning
            if (nav && sideMenu) {
                nav.appendChild(sideMenu);
                nav.appendChild(sideMenuOverlay);
            }

            if (nav) {
                window.addEventListener("scroll", function () {
                    if (window.scrollY > 50) {
                        nav.classList.add("fixed", "top-0", "left-1/2", "-translate-x-1/2", "mt-4", "z-[60]");
                        nav.classList.remove("relative");

                        // Shrink logo to fit within h-16 (64px)
                        if (logoContainer) {
                            logoContainer.classList.replace("w-28", "w-14");
                            logoContainer.classList.replace("h-28", "h-14");
                            logoContainer.classList.replace("border-4", "border-2");
                        }
                        if (logoIcon) {
                            logoIcon.classList.replace("text-3xl", "text-xl");
                            logoIcon.classList.remove("mb-1");
                        }
                        if (logoText) {
                            logoText.classList.replace("max-h-10", "max-h-0");
                            logoText.classList.replace("opacity-100", "opacity-0");
                            setTimeout(() => { logoText.classList.add("hidden"); }, 100);
                        }

                    } else {
                        nav.classList.remove("fixed", "top-0", "left-1/2", "-translate-x-1/2", "mt-4", "z-[60]");
                        nav.classList.add("relative");

                        // Expand logo back
                        if (logoContainer) {
                            logoContainer.classList.replace("w-14", "w-28");
                            logoContainer.classList.replace("h-14", "h-28");
                            logoContainer.classList.replace("border-2", "border-4");
                        }
                        if (logoIcon) {
                            logoIcon.classList.replace("text-xl", "text-3xl");
                            logoIcon.classList.add("mb-1");
                        }
                        if (logoText) {
                            logoText.classList.remove("hidden");
                            setTimeout(() => {
                                logoText.classList.replace("max-h-0", "max-h-10");
                                logoText.classList.replace("opacity-0", "opacity-100");
                            }, 10);
                        }
                    }
                });
            }

            function openMenu() {
                sideMenu.classList.remove('hidden');
                // Use slight timeout to allow display:block before transitioning opacity
                setTimeout(() => {
                    sideMenu.classList.remove('scale-95', 'opacity-0', 'pointer-events-none');
                    sideMenu.classList.add('scale-100', 'opacity-100', 'pointer-events-auto');

                    sideMenuOverlay.classList.remove('opacity-0', 'pointer-events-none');
                    sideMenuOverlay.classList.add('opacity-100', 'pointer-events-auto');
                }, 10);
            }

            function closeMenu() {
                sideMenu.classList.add('scale-95', 'opacity-0', 'pointer-events-none');
                sideMenu.classList.remove('scale-100', 'opacity-100', 'pointer-events-auto');

                sideMenuOverlay.classList.remove('opacity-100', 'pointer-events-auto');
                sideMenuOverlay.classList.add('opacity-0', 'pointer-events-none');

                setTimeout(() => {
                    sideMenu.classList.add('hidden');
                }, 300);
            }

            if (hamburgerBtn) hamburgerBtn.addEventListener('click', openMenu);
            if (closeMenuBtn) closeMenuBtn.addEventListener('click', closeMenu);
            if (sideMenuOverlay) sideMenuOverlay.addEventListener('click', closeMenu);
        });
    </script>
</body>

</html>