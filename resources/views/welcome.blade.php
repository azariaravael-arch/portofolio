<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth bg-black">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Portfolio - Ravael Rompas</title>

        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500&family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400&display=swap" rel="stylesheet">

        <!-- Styles / Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="text-gray-200 font-sans antialiased overflow-x-hidden selection:bg-primary-accent selection:text-dark-bg">

        <!-- Navigation -->
        <nav x-data="{ scrolled: false, mobileMenuOpen: false }"
             @scroll.window="scrolled = (window.pageYOffset > 50)"
             :class="{ 'bg-dark-bg/90 backdrop-blur-md py-4 shadow-lg': scrolled, 'bg-transparent py-6': !scrolled }"
             class="fixed w-full top-0 z-50 transition-all duration-300">
            <div class="container mx-auto px-6 md:px-12 flex justify-between items-center">
                <a href="#" class="font-serif text-2xl font-bold tracking-wider text-white">
                    R<span class="text-sm font-sans font-light tracking-normal text-gray-400">avael</span>
                </a>

                <!-- Desktop Menu -->
                <div class="hidden md:flex space-x-8 text-xs uppercase tracking-[0.2em] font-medium">
                    <a href="#about"   class="hover:text-primary-accent transition-colors">About</a>
                    <a href="#profile" class="hover:text-primary-accent transition-colors">Profile</a>
                    <a href="#project" class="hover:text-primary-accent transition-colors">Project</a>
                    <a href="#contact" class="hover:text-primary-accent transition-colors">Contact</a>
                </div>

                <!-- Mobile Menu Button -->
                <button @click="mobileMenuOpen = !mobileMenuOpen" class="md:hidden text-white focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"/>
                    </svg>
                </button>
            </div>

            <!-- Mobile Menu -->
            <div x-show="mobileMenuOpen" x-transition
                 class="md:hidden absolute top-full left-0 w-full bg-dark-surface/95 backdrop-blur-lg border-t border-gray-800">
                <div class="flex flex-col py-4 px-6 space-y-4 text-sm uppercase tracking-widest text-center">
                    <a href="#about"   @click="mobileMenuOpen = false" class="py-2 hover:text-primary-accent">About</a>
                    <a href="#profile" @click="mobileMenuOpen = false" class="py-2 hover:text-primary-accent">Profile</a>
                    <a href="#project" @click="mobileMenuOpen = false" class="py-2 hover:text-primary-accent">Project</a>
                    <a href="#contact" @click="mobileMenuOpen = false" class="py-2 hover:text-primary-accent">Contact</a>
                </div>
            </div>
        </nav>

        <!-- ===== Section 1: About / Hero ===== -->
        <section id="about" class="relative h-screen w-full flex items-center justify-center overflow-hidden">
            <!-- Background video with parallax -->
            <div class="hero-bg absolute inset-0 -top-[50%] h-[150%] w-full">
                <video autoplay loop muted playsinline class="absolute inset-0 w-full h-full object-cover">
                    <source src="https://videos.pexels.com/video-files/855029/855029-hd_1920_1080_30fps.mp4" type="video/mp4">
                </video>
            </div>
            <!-- Dark overlay -->
            <div class="absolute inset-0 bg-black/55"></div>

            <!-- Hero Content -->
            <div class="hero-content relative z-10 text-center px-4 max-w-5xl mx-auto flex flex-col items-center">
                <p class="text-primary-accent uppercase tracking-[0.3em] text-xs md:text-sm mb-6 fade-up">Senja &amp; Alam</p>
                <h1 class="font-serif text-5xl md:text-7xl lg:text-8xl xl:text-9xl text-white leading-tight mb-8 fade-up text-shadow-lg">
                    RAVAEL<br>ASARYA ROMPAS
                </h1>
                <div class="flex flex-col md:flex-row items-center gap-6 md:gap-12 text-left fade-up">
                    <p class="text-gray-400 text-sm max-w-xs font-light">
                        A full-service creative studio based in the heart of nature, blending digital precision with organic aesthetics.
                    </p>
                    <a href="#profile" class="w-12 h-12 rounded-full bg-primary-accent/20 border border-primary-accent text-primary-accent flex items-center justify-center hover:bg-primary-accent hover:text-dark-bg transition-colors duration-300">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"/>
                        </svg>
                    </a>
                </div>
            </div>
        </section>

        <!-- ===== Section 2: Profile ===== -->
        <section id="profile" class="py-24 md:py-32 bg-dark-bg relative z-20">
            <div class="container mx-auto px-6 md:px-12">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-16 items-center">
                    <div class="fade-up relative">
                        <div class="aspect-[4/5] overflow-hidden rounded-sm relative">
                            <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?q=80&w=800&auto=format&fit=crop"
                                 alt="Profile"
                                 class="object-cover w-full h-full grayscale hover:grayscale-0 transition-all duration-700">
                        </div>
                        <div class="absolute -bottom-6 -right-6 md:-bottom-12 md:-right-12 w-48 h-48 bg-dark-surface p-6 flex flex-col justify-center border border-gray-800 rounded-sm">
                            <p class="text-4xl font-serif text-white mb-2">10+</p>
                            <p class="text-xs uppercase tracking-widest text-gray-500">Years of<br>Experience</p>
                        </div>
                    </div>
                    <div class="fade-up">
                        <h2 class="font-serif text-3xl md:text-5xl text-white mb-8">Crafting Digital Experiences.</h2>
                        <div class="space-y-6 text-gray-400 font-light text-sm md:text-base leading-relaxed">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
                        </div>
                        <div class="mt-10">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/f/fa/Signature_of_John_Hancock.svg"
                                 alt="Signature"
                                 class="h-12 opacity-50 invert">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ===== Section 3: Project ===== -->
        <section id="project" class="py-24 md:py-32 bg-dark-surface relative z-20">
            <div class="container mx-auto px-6 md:px-12">
                <div class="flex flex-col md:flex-row justify-between items-end mb-16 fade-up">
                    <div>
                        <p class="text-primary-accent uppercase tracking-[0.3em] text-xs mb-4">Selected Works</p>
                        <h2 class="font-serif text-4xl md:text-5xl text-white">Featured Projects</h2>
                    </div>
                    <a href="#" class="mt-6 md:mt-0 text-sm uppercase tracking-widest text-gray-400 hover:text-white border-b border-gray-700 hover:border-white pb-1 transition-all">View All</a>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-12 md:gap-24">
                    <!-- Project 1 -->
                    <div class="group fade-up mt-0 md:mt-12">
                        <div class="project-img-wrapper overflow-hidden aspect-[4/3] mb-6 relative rounded-sm">
                            <img src="https://images.unsplash.com/photo-1600607686527-6fb886090705?q=80&w=1000&auto=format&fit=crop"
                                 alt="Project 1"
                                 class="w-full h-[120%] object-cover -mt-[10%] grayscale group-hover:grayscale-0 transition-all duration-700">
                        </div>
                        <div class="flex justify-between items-start">
                            <div>
                                <h3 class="font-serif text-2xl text-white mb-2 group-hover:text-primary-accent transition-colors">Silent Echoes</h3>
                                <p class="text-gray-500 text-sm">Art Direction / Photography</p>
                            </div>
                            <span class="text-gray-600 font-serif italic">2024</span>
                        </div>
                    </div>

                    <!-- Project 2 -->
                    <div class="group fade-up">
                        <div class="project-img-wrapper overflow-hidden aspect-[3/4] mb-6 relative rounded-sm">
                            <img src="https://images.unsplash.com/photo-1542385151-efd9000785a0?q=80&w=1000&auto=format&fit=crop"
                                 alt="Project 2"
                                 class="w-full h-[120%] object-cover -mt-[10%] grayscale group-hover:grayscale-0 transition-all duration-700">
                        </div>
                        <div class="flex justify-between items-start">
                            <div>
                                <h3 class="font-serif text-2xl text-white mb-2 group-hover:text-primary-accent transition-colors">Urban Jungle</h3>
                                <p class="text-gray-500 text-sm">Web Design / Development</p>
                            </div>
                            <span class="text-gray-600 font-serif italic">2023</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ===== Section 4: Contact ===== -->
        <section id="contact" class="py-24 md:py-32 bg-dark-bg relative z-20 border-t border-gray-900">
            <div class="container mx-auto px-6 md:px-12">
                <div class="max-w-4xl mx-auto">
                    <div class="text-center mb-16 fade-up">
                        <p class="text-primary-accent uppercase tracking-[0.3em] text-xs mb-4">Get In Touch</p>
                        <h2 class="font-serif text-4xl md:text-6xl text-white mb-6">Let's create something<br>beautiful together.</h2>
                    </div>

                    <form class="space-y-8 fade-up" @submit.prevent>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                            <div class="relative group">
                                <input type="text" id="name" placeholder="Name"
                                       class="w-full bg-transparent border-b border-gray-800 py-4 text-white focus:outline-none focus:border-primary-accent transition-colors peer placeholder-transparent">
                                <label for="name" class="absolute left-0 top-4 text-gray-500 text-sm transition-all peer-focus:-top-2 peer-focus:text-xs peer-focus:text-primary-accent peer-not-placeholder-shown:-top-2 peer-not-placeholder-shown:text-xs cursor-text">Your Name</label>
                            </div>
                            <div class="relative group">
                                <input type="email" id="email" placeholder="Email"
                                       class="w-full bg-transparent border-b border-gray-800 py-4 text-white focus:outline-none focus:border-primary-accent transition-colors peer placeholder-transparent">
                                <label for="email" class="absolute left-0 top-4 text-gray-500 text-sm transition-all peer-focus:-top-2 peer-focus:text-xs peer-focus:text-primary-accent peer-not-placeholder-shown:-top-2 peer-not-placeholder-shown:text-xs cursor-text">Your Email</label>
                            </div>
                        </div>
                        <div class="relative group">
                            <textarea id="message" rows="4" placeholder="Message"
                                      class="w-full bg-transparent border-b border-gray-800 py-4 text-white focus:outline-none focus:border-primary-accent transition-colors peer placeholder-transparent resize-none"></textarea>
                            <label for="message" class="absolute left-0 top-4 text-gray-500 text-sm transition-all peer-focus:-top-2 peer-focus:text-xs peer-focus:text-primary-accent peer-not-placeholder-shown:-top-2 peer-not-placeholder-shown:text-xs cursor-text">Your Message</label>
                        </div>
                        <div class="text-center pt-8">
                            <button type="submit" class="inline-block border border-gray-700 hover:border-primary-accent text-white hover:text-primary-accent px-12 py-4 uppercase tracking-[0.2em] text-xs transition-all duration-300 rounded-sm">
                                Send Message
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <footer class="mt-32 text-center border-t border-gray-900 pt-8 text-xs uppercase tracking-widest text-gray-600">
                <p>&copy; 2026 Ravael Asarya Rompas. All rights reserved.</p>
            </footer>
        </section>

    </body>
</html>
