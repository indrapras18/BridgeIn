<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BridgeIn - Digital Transformation Partner</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- AOS CSS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        html {
            scroll-behavior: smooth;
        }

        @font-face {
            font-family: 'Nexa';
            src: url('/fonts/Nexa-ExtraLight.ttf') format('truetype');
            font-weight: 200;
            font-style: normal;
            font-display: swap;
        }

        @font-face {
            font-family: 'Nexa';
            src: url('/fonts/Nexa-Heavy.ttf') format('truetype');
            font-weight: 900;
            font-style: normal;
            font-display: swap;
        }

        body {
            font-family: 'Nexa', system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue" !important;
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-10px);
            }
        }

        .float-animation {
            animation: float 3s ease-in-out infinite;
        }

        .gradient-bg {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }

        .card-hover {
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .card-hover:hover {
            transform: translateY(-12px) scale(1.02);
        }

        .backdrop-blur-custom {
            backdrop-filter: blur(10px);
        }

        .shine {
            position: relative;
            overflow: hidden;
        }

        .shine::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
            transition: left 0.5s;
        }

        .shine:hover::before {
            left: 100%;
        }
    </style>
</head>

<body class="bg-white">
    <!-- Navigation -->
    <nav class="bg-white shadow-lg sticky top-0 z-50 backdrop-blur-md bg-white/95">
        <div class="container mx-auto px-6">
            <div class="flex justify-between items-center py-4">
                <!-- Logo -->
                <a href="#" class="flex items-center group cursor-pointer">
                    <div class="relative">
                        <img src="asset/logo-crop.png" alt="BridgeIn Logo" class="h-auto w-28 transform group-hover:scale-110 transition-transform duration-300">
                        <div class="absolute inset-0 bg-blue-500 rounded-xl blur-md opacity-0 group-hover:opacity-30 transition-opacity"></div>
                    </div>
                </a>

                <!-- Desktop Menu -->
                <ul class="hidden md:flex items-center space-x-1">
                    <li>
                        <a href="#" class="px-4 py-2 rounded-lg text-gray-700 hover:text-blue-600 hover:bg-blue-50 transition-all duration-300 font-medium relative group">
                            Home
                            <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-blue-600 group-hover:w-full transition-all duration-300"></span>
                        </a>
                    </li>
                    <li>
                        <a href="#services" class="px-4 py-2 rounded-lg text-gray-700 hover:text-blue-600 hover:bg-blue-50 transition-all duration-300 font-medium relative group">
                            Services
                            <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-blue-600 group-hover:w-full transition-all duration-300"></span>
                        </a>
                    </li>
                    <li>
                        <a href="#portfolio" class="px-4 py-2 rounded-lg text-gray-700 hover:text-blue-600 hover:bg-blue-50 transition-all duration-300 font-medium relative group">
                            Portfolio
                            <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-blue-600 group-hover:w-full transition-all duration-300"></span>
                        </a>
                    </li>
                    <li>
                        <a href="#testimonials" class="px-4 py-2 rounded-lg text-gray-700 hover:text-blue-600 hover:bg-blue-50 transition-all duration-300 font-medium relative group">
                            Testimonials
                            <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-blue-600 group-hover:w-full transition-all duration-300"></span>
                        </a>
                    </li>
                    <li>
                        <a href="#contact" class="px-4 py-2 rounded-lg text-gray-700 hover:text-blue-600 hover:bg-blue-50 transition-all duration-300 font-medium relative group">
                            Contact
                            <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-blue-600 group-hover:w-full transition-all duration-300"></span>
                        </a>
                    </li>
                </ul>

                <!-- CTA Button -->
                <div class="hidden md:flex items-center space-x-4">
                    <a href="#contact" class="bg-gradient-to-r from-blue-600 to-blue-700 text-white px-6 py-2.5 rounded-full font-semibold hover:shadow-lg hover:scale-105 transition-all duration-300 flex items-center space-x-2">
                        <span>Get Started</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>

                <!-- Mobile Menu Button -->
                <button class="md:hidden text-gray-700 hover:text-blue-600 focus:outline-none" id="mobile-menu-button">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>

            <!-- Mobile Menu -->
            <div class="hidden md:hidden pb-4" id="mobile-menu">
                <ul class="space-y-2">
                    <li>
                        <a href="#" class="block px-4 py-3 rounded-lg text-gray-700 hover:bg-blue-50 hover:text-blue-600 transition-all font-medium">
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="#services" class="block px-4 py-3 rounded-lg text-gray-700 hover:bg-blue-50 hover:text-blue-600 transition-all font-medium">
                            Services
                        </a>
                    </li>
                    <li>
                        <a href="#portfolio" class="block px-4 py-3 rounded-lg text-gray-700 hover:bg-blue-50 hover:text-blue-600 transition-all font-medium">
                            Portfolio
                        </a>
                    </li>
                    <li>
                        <a href="#testimonials" class="block px-4 py-3 rounded-lg text-gray-700 hover:bg-blue-50 hover:text-blue-600 transition-all font-medium">
                            Testimonials
                        </a>
                    </li>
                    <li>
                        <a href="#contact" class="block px-4 py-3 rounded-lg text-gray-700 hover:bg-blue-50 hover:text-blue-600 transition-all font-medium">
                            Contact
                        </a>
                    </li>
                    <li class="pt-2">
                        <a href="#contact" class="block text-center bg-gradient-to-r from-blue-600 to-blue-700 text-white px-6 py-3 rounded-full font-semibold hover:shadow-lg transition-all">
                            Get Started
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <script>
            // Mobile menu toggle
            const mobileMenuButton = document.getElementById('mobile-menu-button');
            const mobileMenu = document.getElementById('mobile-menu');

            mobileMenuButton.addEventListener('click', () => {
                mobileMenu.classList.toggle('hidden');
            });
        </script>
    </nav>

    <!-- Hero Section -->
    <section class="relative text-white py-32 px-6 overflow-hidden min-h-screen flex items-center">
        <!-- Background Image -->
        <div class="absolute inset-0">
            <img src="asset/hero.jpeg" alt="Hero Background" class="w-full h-full object-cover">
            <!-- Gradient Overlay -->
            <div class="absolute inset-0 bg-gradient-to-br from-blue-900/70 via-blue-800/60 to-purple-900/70"></div>
            <!-- Animated Overlay Pattern -->
            <div class="absolute inset-0 opacity-10">
                <div class="absolute top-0 left-0 w-full h-full"
                    style="background-image: radial-gradient(circle at 2px 2px, white 1px, transparent 0); background-size: 40px 40px;">
                </div>
            </div>
        </div>

        <!-- CONTENT CONTAINER -->
        <div class="container mx-auto text-center relative z-10">
            <!-- Main Heading with Animation -->
            <div class="space-y-4 mb-8">
                <h1 class="text-5xl md:text-7xl font-bold leading-tight">
                    <span class="block opacity-0 animate-fade-in-up" style="animation-delay: 0.2s;">Build Better,</span>
                    <span class="block opacity-0 animate-fade-in-up bg-gradient-to-r from-blue-200 via-white to-purple-200 bg-clip-text text-transparent"
                        style="animation-delay: 0.5s;">Faster, and Smarter</span>
                </h1>
            </div>

            <!-- Description -->
            <div class="opacity-0 animate-fade-in-up" style="animation-delay: 0.8s;">
                <p class="text-lg md:text-2xl mb-4 max-w-4xl mx-auto font-light leading-relaxed">
                    BridgeIn is your trusted partner in <span class="font-semibold text-blue-300">Digital Transformation</span>
                </p>
                <p class="text-base md:text-lg mb-8 max-w-3xl mx-auto opacity-90 leading-relaxed">
                    We deliver cutting-edge software solutions and IT consulting services to help businesses thrive in the digital era
                </p>
            </div>

            <!-- CTA Buttons -->
            <div class="flex flex-col sm:flex-row gap-4 justify-center mb-20 opacity-0 animate-fade-in-up"
                style="animation-delay: 1.1s;">
                <a href="#contact"
                    class="group bg-white text-blue-600 px-8 py-4 rounded-full font-semibold hover:shadow-2xl hover:scale-105 transition-all duration-300 flex items-center justify-center space-x-2">
                    <span>Get Started</span>
                    <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 7l5 5m0 0l-5 5m5-5H6" />
                    </svg>
                </a>
                <a href="#portfolio"
                    class="group bg-white/10 backdrop-blur-sm border-2 border-white/30 text-white px-8 py-4 rounded-full font-semibold hover:bg-white/20 hover:border-white/50 transition-all duration-300 flex items-center justify-center space-x-2">
                    <span>View Portfolio</span>
                    <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </a>
            </div>

            <!-- Values Section -->
            <div class="mt-16 opacity-0 animate-fade-in-up" style="animation-delay: 1.4s;">
                <div
                    class="bg-white/10 backdrop-blur-md rounded-3xl p-10 max-w-5xl mx-auto border border-white/20 shadow-2xl">
                    <h3 class="text-3xl font-bold mb-10 opacity-0 animate-fade-in-up" style="animation-delay: 1.6s;">
                        Our Core Values</h3>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                        <!-- Innovation -->
                        <div class="flex flex-col items-center group opacity-0 animate-fade-in-up"
                            style="animation-delay: 1.8s;">
                            <div
                                class="w-16 h-16 bg-gradient-to-br from-blue-400 to-blue-600 rounded-2xl flex items-center justify-center mb-4 transform group-hover:scale-110 group-hover:rotate-3 transition-all duration-300 shadow-lg">
                                <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M11 3a1 1 0 10-2 0v1a1 1 0 102 0V3zM15.657 5.757a1 1 0 00-1.414-1.414l-.707.707a1 1 0 001.414 1.414l.707-.707zM18 10a1 1 0 01-1 1h-1a1 1 0 110-2h1a1 1 0 011 1zM5.05 6.464A1 1 0 106.464 5.05l-.707-.707a1 1 0 00-1.414 1.414l.707.707zM5 10a1 1 0 01-1 1H3a1 1 0 110-2h1a1 1 0 011 1zM8 16v-1h4v1a2 2 0 11-4 0zM12 14c.015-.34.208-.646.477-.859a4 4 0 10-4.954 0c.27.213.462.519.476.859h4.002z" />
                                </svg>
                            </div>
                            <h4 class="font-bold text-xl mb-2">Innovation</h4>
                            <p class="text-sm opacity-80 text-center leading-relaxed">Pushing boundaries with creative solutions</p>
                        </div>

                        <!-- Trust & Reliability -->
                        <div class="flex flex-col items-center group opacity-0 animate-fade-in-up"
                            style="animation-delay: 2s;">
                            <div
                                class="w-16 h-16 bg-gradient-to-br from-purple-400 to-purple-600 rounded-2xl flex items-center justify-center mb-4 transform group-hover:scale-110 group-hover:rotate-3 transition-all duration-300 shadow-lg">
                                <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M2.166 4.999A11.954 11.954 0 0010 1.944 11.954 11.954 0 0017.834 5c.11.65.166 1.32.166 2.001 0 5.225-3.34 9.67-8 11.317C5.34 16.67 2 12.225 2 7c0-.682.057-1.35.166-2.001zm11.541 3.708a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <h4 class="font-bold text-xl mb-2">Trust & Reliability</h4>
                            <p class="text-sm opacity-80 text-center leading-relaxed">Building lasting partnerships through
                                excellence</p>
                        </div>

                        <!-- Modern Solutions -->
                        <div class="flex flex-col items-center group opacity-0 animate-fade-in-up"
                            style="animation-delay: 2.2s;">
                            <div
                                class="w-16 h-16 bg-gradient-to-br from-pink-400 to-pink-600 rounded-2xl flex items-center justify-center mb-4 transform group-hover:scale-110 group-hover:rotate-3 transition-all duration-300 shadow-lg">
                                <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z" />
                                </svg>
                            </div>
                            <h4 class="font-bold text-xl mb-2">Modern Solutions</h4>
                            <p class="text-sm opacity-80 text-center leading-relaxed">Leveraging cutting-edge technology
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div> <!-- END CONTAINER -->

        <!-- Scroll Down Indicator (dipindahkan ke luar container) -->
        <div class="absolute bottom-16 left-1/2 transform -translate-x-1/2 opacity-0 animate-bounce-fade z-20"
            style="animation-delay: 2.5s;">
            <div class="flex flex-col items-center space-y-2">
                <span class="text-sm font-medium opacity-80">Scroll Down</span>
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M19 14l-7 7m0 0l-7-7m7 7V3" />
                </svg>
            </div>
        </div>

        <style>
            @keyframes fadeInUp {
                from {
                    opacity: 0;
                    transform: translateY(30px);
                }

                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }

            @keyframes bounceFade {

                0%,
                100% {
                    opacity: 0;
                    transform: translateY(-10px);
                }

                50% {
                    opacity: 1;
                    transform: translateY(0);
                }
            }

            .animate-fade-in-up {
                animation: fadeInUp 0.8s ease-out forwards;
            }

            .animate-bounce-fade {
                animation: bounceFade 2s ease-in-out infinite;
            }

            @media (prefers-reduced-motion: reduce) {

                .animate-fade-in-up,
                .animate-bounce-fade {
                    animation: none;
                    opacity: 1;
                }
            }
        </style>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-20 px-6 bg-gradient-to-br from-gray-50 via-blue-50/30 to-gray-50 relative overflow-hidden">
        <!-- Decorative Background Elements -->
        <div class="absolute top-20 right-10 w-64 h-64 bg-blue-200 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-pulse"></div>
        <div class="absolute bottom-20 left-10 w-64 h-64 bg-purple-200 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-pulse" style="animation-delay: 2s;"></div>

        <div class="container mx-auto relative z-10">
            <div class="mb-12" data-aos="fade-down">
                <h2 class="text-3xl md:text-4xl font-bold text-center mb-4 text-gray-900">Our Services</h2>
                <p class="text-center text-gray-600 max-w-2xl mx-auto">
                    Use a few services or use them all, let the BridgeIn team take care of all of your technology needs.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl mx-auto">

                <!-- Website Development -->
                <div class="group bg-gradient-to-br from-blue-600 to-blue-700 text-white rounded-3xl p-8 hover:shadow-2xl hover:shadow-blue-500/30 transition-all duration-300 hover:-translate-y-2 relative overflow-hidden"
                    data-aos="fade-up" data-aos-delay="100">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-white/5 rounded-full -translate-y-16 translate-x-16"></div>
                    <div class="absolute bottom-0 left-0 w-24 h-24 bg-white/5 rounded-full translate-y-12 -translate-x-12"></div>

                    <div class="relative z-10">
                        <div class="w-14 h-14 bg-white/20 backdrop-blur-sm rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 group-hover:rotate-6 transition-transform duration-300">
                            <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z"></path>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold mb-4">Website Development</h3>
                        <ul class="space-y-3 text-sm">
                            <li class="flex items-center gap-2">
                                <span class="w-1.5 h-1.5 bg-white rounded-full"></span>
                                <span>Landing Page</span>
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="w-1.5 h-1.5 bg-white rounded-full"></span>
                                <span>Company Profile</span>
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="w-1.5 h-1.5 bg-white rounded-full"></span>
                                <span>E-Commerce</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Mobile Development -->
                <div class="group bg-gradient-to-br from-purple-600 to-purple-700 text-white rounded-3xl p-8 hover:shadow-2xl hover:shadow-purple-500/30 transition-all duration-300 hover:-translate-y-2 relative overflow-hidden"
                    data-aos="fade-up" data-aos-delay="200">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-white/5 rounded-full -translate-y-16 translate-x-16"></div>
                    <div class="absolute bottom-0 left-0 w-24 h-24 bg-white/5 rounded-full translate-y-12 -translate-x-12"></div>

                    <div class="relative z-10">
                        <div class="w-14 h-14 bg-white/20 backdrop-blur-sm rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 group-hover:rotate-6 transition-transform duration-300">
                            <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M7 2a2 2 0 00-2 2v12a2 2 0 002 2h6a2 2 0 002-2V4a2 2 0 00-2-2H7zm3 14a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold mb-4">Mobile Development</h3>
                        <ul class="space-y-3 text-sm">
                            <li class="flex items-center gap-2">
                                <span class="w-1.5 h-1.5 bg-white rounded-full"></span>
                                <span>iOS Apps</span>
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="w-1.5 h-1.5 bg-white rounded-full"></span>
                                <span>Android Apps</span>
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="w-1.5 h-1.5 bg-white rounded-full"></span>
                                <span>Cross-Platform Apps</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- E-Commerce -->
                <div class="group bg-gradient-to-br from-cyan-600 to-cyan-700 text-white rounded-3xl p-8 hover:shadow-2xl hover:shadow-cyan-500/30 transition-all duration-300 hover:-translate-y-2 relative overflow-hidden"
                    data-aos="fade-up" data-aos-delay="300">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-white/5 rounded-full -translate-y-16 translate-x-16"></div>
                    <div class="absolute bottom-0 left-0 w-24 h-24 bg-white/5 rounded-full translate-y-12 -translate-x-12"></div>

                    <div class="relative z-10">
                        <div class="w-14 h-14 bg-white/20 backdrop-blur-sm rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 group-hover:rotate-6 transition-transform duration-300">
                            <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z"></path>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold mb-4">E-Commerce</h3>
                        <ul class="space-y-3 text-sm">
                            <li class="flex items-center gap-2">
                                <span class="w-1.5 h-1.5 bg-white rounded-full"></span>
                                <span>Online Store</span>
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="w-1.5 h-1.5 bg-white rounded-full"></span>
                                <span>Payment Integration</span>
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="w-1.5 h-1.5 bg-white rounded-full"></span>
                                <span>Multi-vendor Platform</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Point of Sales -->
                <div class="group bg-gradient-to-br from-emerald-600 to-emerald-700 text-white rounded-3xl p-8 hover:shadow-2xl hover:shadow-emerald-500/30 transition-all duration-300 hover:-translate-y-2 relative overflow-hidden"
                    data-aos="fade-up" data-aos-delay="400">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-white/5 rounded-full -translate-y-16 translate-x-16"></div>
                    <div class="absolute bottom-0 left-0 w-24 h-24 bg-white/5 rounded-full translate-y-12 -translate-x-12"></div>

                    <div class="relative z-10">
                        <div class="w-14 h-14 bg-white/20 backdrop-blur-sm rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 group-hover:rotate-6 transition-transform duration-300">
                            <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M4 4a2 2 0 00-2 2v1h16V6a2 2 0 00-2-2H4z"></path>
                                <path fill-rule="evenodd" d="M18 9H2v5a2 2 0 002 2h12a2 2 0 002-2V9zM4 13a1 1 0 011-1h1a1 1 0 110 2H5a1 1 0 01-1-1zm5-1a1 1 0 100 2h1a1 1 0 100-2H9z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold mb-4">Point of Sales</h3>
                        <ul class="space-y-3 text-sm">
                            <li class="flex items-center gap-2">
                                <span class="w-1.5 h-1.5 bg-white rounded-full"></span>
                                <span>Cashier System</span>
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="w-1.5 h-1.5 bg-white rounded-full"></span>
                                <span>Inventory Management</span>
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="w-1.5 h-1.5 bg-white rounded-full"></span>
                                <span>Sales Analytics</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Digital Marketing -->
                <div class="group bg-gradient-to-br from-pink-600 to-rose-700 text-white rounded-3xl p-8 hover:shadow-2xl hover:shadow-pink-500/30 transition-all duration-300 hover:-translate-y-2 relative overflow-hidden"
                    data-aos="fade-up" data-aos-delay="500">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-white/5 rounded-full -translate-y-16 translate-x-16"></div>
                    <div class="absolute bottom-0 left-0 w-24 h-24 bg-white/5 rounded-full translate-y-12 -translate-x-12"></div>

                    <div class="relative z-10">
                        <div class="w-14 h-14 bg-white/20 backdrop-blur-sm rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 group-hover:rotate-6 transition-transform duration-300">
                            <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M2 5a2 2 0 012-2h7a2 2 0 012 2v4a2 2 0 01-2 2H9l-3 3v-3H4a2 2 0 01-2-2V5z"></path>
                                <path d="M15 7v2a4 4 0 01-4 4H9.828l-1.766 1.767c.28.149.599.233.938.233h2l3 3v-3h2a2 2 0 002-2V9a2 2 0 00-2-2h-1z"></path>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold mb-4">Digital Marketing</h3>
                        <ul class="space-y-3 text-sm">
                            <li class="flex items-center gap-2">
                                <span class="w-1.5 h-1.5 bg-white rounded-full"></span>
                                <span>SEO Optimization</span>
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="w-1.5 h-1.5 bg-white rounded-full"></span>
                                <span>Social Media Ads</span>
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="w-1.5 h-1.5 bg-white rounded-full"></span>
                                <span>Content Marketing</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Enterprise System -->
                <div class="group bg-gradient-to-br from-indigo-600 to-indigo-700 text-white rounded-3xl p-8 hover:shadow-2xl hover:shadow-indigo-500/30 transition-all duration-300 hover:-translate-y-2 relative overflow-hidden"
                    data-aos="fade-up" data-aos-delay="600">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-white/5 rounded-full -translate-y-16 translate-x-16"></div>
                    <div class="absolute bottom-0 left-0 w-24 h-24 bg-white/5 rounded-full translate-y-12 -translate-x-12"></div>

                    <div class="relative z-10">
                        <div class="w-14 h-14 bg-white/20 backdrop-blur-sm rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 group-hover:rotate-6 transition-transform duration-300">
                            <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M6 6V5a3 3 0 013-3h2a3 3 0 013 3v1h2a2 2 0 012 2v3.57A22.952 22.952 0 0110 13a22.95 22.95 0 01-8-1.43V8a2 2 0 012-2h2zm2-1a1 1 0 011-1h2a1 1 0 011 1v1H8V5zm1 5a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                                <path d="M2 13.692V16a2 2 0 002 2h12a2 2 0 002-2v-2.308A24.974 24.974 0 0110 15c-2.796 0-5.487-.46-8-1.308z"></path>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold mb-4">Enterprise System</h3>
                        <ul class="space-y-3 text-sm">
                            <li class="flex items-center gap-2">
                                <span class="w-1.5 h-1.5 bg-white rounded-full"></span>
                                <span>ERP System</span>
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="w-1.5 h-1.5 bg-white rounded-full"></span>
                                <span>Custom Software</span>
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="w-1.5 h-1.5 bg-white rounded-full"></span>
                                <span>Business Reporting</span>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Tech Stack Section -->
    <section class="py-20 px-6 bg-white">
        <div class="container mx-auto">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-4"
                data-aos="fade-up">
                Tech Stack
            </h2>

            <p class="text-center text-gray-600 mb-12"
                data-aos="fade-up" data-aos-delay="100">
                Powered by modern and reliable technologies
            </p>

            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 xl:grid-cols-8 gap-10 max-w-6xl mx-auto">

                <!-- TEMPLATE ITEM -->
                <!-- Tinggal copy, delay saya naikkan otomatis -->

                <!-- Next.js -->
                <div class="group flex flex-col items-center" data-aos="fade-up" data-aos-delay="0">
                    <div class="w-16 h-16 bg-gray-100 rounded-2xl flex items-center justify-center 
                    shadow-md group-hover:shadow-xl transition-all duration-300 group-hover:-translate-y-1">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/nextjs/nextjs-original.svg" class="w-10 h-10" />
                    </div>
                    <span class="text-sm text-gray-700 mt-2">Next.js</span>
                </div>

                <!-- React -->
                <div class="group flex flex-col items-center" data-aos="fade-up" data-aos-delay="50">
                    <div class="w-16 h-16 bg-gray-100 rounded-2xl flex items-center justify-center 
                    shadow-md group-hover:shadow-xl transition-all duration-300 group-hover:-translate-y-1">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/react/react-original.svg" class="w-10 h-10" />
                    </div>
                    <span class="text-sm text-gray-700 mt-2">React</span>
                </div>

                <!-- Vue.js -->
                <div class="group flex flex-col items-center" data-aos="fade-up" data-aos-delay="100">
                    <div class="w-16 h-16 bg-gray-100 rounded-2xl flex items-center justify-center 
                    shadow-md group-hover:shadow-xl transition-all duration-300 group-hover:-translate-y-1">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/vuejs/vuejs-original.svg" class="w-10 h-10" />
                    </div>
                    <span class="text-sm text-gray-700 mt-2">Vue.js</span>
                </div>

                <!-- Laravel -->
                <div class="group flex flex-col items-center" data-aos="fade-up" data-aos-delay="150">
                    <div class="w-16 h-16 bg-gray-100 rounded-2xl flex items-center justify-center 
                    shadow-md group-hover:shadow-xl transition-all duration-300 group-hover:-translate-y-1">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/laravel/laravel-original.svg" class="w-10 h-10" />
                    </div>
                    <span class="text-sm text-gray-700 mt-2">Laravel</span>
                </div>

                <!-- Node.js -->
                <div class="group flex flex-col items-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="w-16 h-16 bg-gray-100 rounded-2xl flex items-center justify-center 
                    shadow-md group-hover:shadow-xl transition-all duration-300 group-hover:-translate-y-1">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/nodejs/nodejs-original.svg" class="w-10 h-10" />
                    </div>
                    <span class="text-sm text-gray-700 mt-2">Node.js</span>
                </div>

                <!-- TypeScript -->
                <div class="group flex flex-col items-center" data-aos="fade-up" data-aos-delay="250">
                    <div class="w-16 h-16 bg-gray-100 rounded-2xl flex items-center justify-center 
                    shadow-md group-hover:shadow-xl transition-all duration-300 group-hover:-translate-y-1">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/typescript/typescript-original.svg" class="w-10 h-10" />
                    </div>
                    <span class="text-sm text-gray-700 mt-2">TypeScript</span>
                </div>

                <!-- Flutter -->
                <div class="group flex flex-col items-center" data-aos="fade-up" data-aos-delay="300">
                    <div class="w-16 h-16 bg-gray-100 rounded-2xl flex items-center justify-center 
                    shadow-md group-hover:shadow-xl transition-all duration-300 group-hover:-translate-y-1">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/flutter/flutter-original.svg" class="w-10 h-10" />
                    </div>
                    <span class="text-sm text-gray-700 mt-2">Flutter</span>
                </div>

                <!-- Python -->
                <div class="group flex flex-col items-center" data-aos="fade-up" data-aos-delay="350">
                    <div class="w-16 h-16 bg-gray-100 rounded-2xl flex items-center justify-center 
                    shadow-md group-hover:shadow-xl transition-all duration-300 group-hover:-translate-y-1">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/python/python-original.svg" class="w-10 h-10" />
                    </div>
                    <span class="text-sm text-gray-700 mt-2">Python</span>
                </div>

                <!-- Django -->
                <div class="group flex flex-col items-center" data-aos="fade-up" data-aos-delay="400">
                    <div class="w-16 h-16 bg-gray-100 rounded-2xl flex items-center justify-center 
                    shadow-md group-hover:shadow-xl transition-all duration-300 group-hover:-translate-y-1">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/django/django-plain.svg" class="w-10 h-10" />
                    </div>
                    <span class="text-sm text-gray-700 mt-2">Django</span>
                </div>

                <!-- Golang -->
                <div class="group flex flex-col items-center" data-aos="fade-up" data-aos-delay="450">
                    <div class="w-16 h-16 bg-gray-100 rounded-2xl flex items-center justify-center 
                    shadow-md group-hover:shadow-xl transition-all duration-300 group-hover:-translate-y-1">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/go/go-original.svg" class="w-10 h-10" />
                    </div>
                    <span class="text-sm text-gray-700 mt-2">Golang</span>
                </div>

                <!-- Java -->
                <div class="group flex flex-col items-center" data-aos="fade-up" data-aos-delay="500">
                    <div class="w-16 h-16 bg-gray-100 rounded-2xl flex items-center justify-center 
                    shadow-md group-hover:shadow-xl transition-all duration-300 group-hover:-translate-y-1">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/java/java-original.svg" class="w-10 h-10" />
                    </div>
                    <span class="text-sm text-gray-700 mt-2">Java</span>
                </div>

                <!-- PHP -->
                <div class="group flex flex-col items-center" data-aos="fade-up" data-aos-delay="550">
                    <div class="w-16 h-16 bg-gray-100 rounded-2xl flex items-center justify-center 
                    shadow-md group-hover:shadow-xl transition-all duration-300 group-hover:-translate-y-1">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg" class="w-10 h-10" />
                    </div>
                    <span class="text-sm text-gray-700 mt-2">PHP</span>
                </div>

                <!-- PostgreSQL -->
                <div class="group flex flex-col items-center" data-aos="fade-up" data-aos-delay="600">
                    <div class="w-16 h-16 bg-gray-100 rounded-2xl flex items-center justify-center 
                    shadow-md group-hover:shadow-xl transition-all duration-300 group-hover:-translate-y-1">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/postgresql/postgresql-original.svg" class="w-10 h-10" />
                    </div>
                    <span class="text-sm text-gray-700 mt-2">PostgreSQL</span>
                </div>

                <!-- MongoDB -->
                <div class="group flex flex-col items-center" data-aos="fade-up" data-aos-delay="650">
                    <div class="w-16 h-16 bg-gray-100 rounded-2xl flex items-center justify-center 
                    shadow-md group-hover:shadow-xl transition-all duration-300 group-hover:-translate-y-1">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mongodb/mongodb-original.svg" class="w-10 h-10" />
                    </div>
                    <span class="text-sm text-gray-700 mt-2">MongoDB</span>
                </div>

                <!-- Docker -->
                <div class="group flex flex-col items-center" data-aos="fade-up" data-aos-delay="700">
                    <div class="w-16 h-16 bg-gray-100 rounded-2xl flex items-center justify-center 
                    shadow-md group-hover:shadow-xl transition-all duration-300 group-hover:-translate-y-1">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/docker/docker-original.svg" class="w-10 h-10" />
                    </div>
                    <span class="text-sm text-gray-700 mt-2">Docker</span>
                </div>

                <!-- GitHub -->
                <div class="group flex flex-col items-center" data-aos="fade-up" data-aos-delay="750">
                    <div class="w-16 h-16 bg-gray-100 rounded-2xl flex items-center justify-center 
                    shadow-md group-hover:shadow-xl transition-all duration-300 group-hover:-translate-y-1">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/github/github-original.svg" class="w-10 h-10" />
                    </div>
                    <span class="text-sm text-gray-700 mt-2">GitHub</span>
                </div>

            </div>
        </div>
    </section>


    <!-- portfolio -->
    <section id="portfolio" class="py-24 px-6 relative overflow-hidden">
        <!-- Decorative Elements -->
        <div class="absolute top-20 left-10 w-72 h-72 bg-purple-300 rounded-full mix-blend-multiply filter blur-xl opacity-20 animate-pulse"></div>
        <div class="absolute bottom-20 right-10 w-72 h-72 bg-blue-300 rounded-full mix-blend-multiply filter blur-xl opacity-20 animate-pulse" style="animation-delay: 1s;"></div>

        <div class="container mx-auto text-center relative z-10">
            <!-- Header -->
            <div class="mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-center mb-4 text-gray-900">Our Previous Works</h2>
                <p class="text-center text-gray-600 mb-2">Discover our portfolio of exceptional projects that showcase</p>
                <p class="text-center text-gray-600">innovation, quality, and client satisfaction in every detail</p>
            </div>

            <div class="relative max-w-7xl mx-auto">
                <!-- Carousel Container -->
                <div class="overflow-hidden rounded-3xl">
                    <div id="portfolioCarousel" class="flex transition-transform duration-700 ease-out">
                        <!-- Slide 1 - ShopFlow Pro -->
                        <div class="w-full md:w-1/2 lg:w-1/3 flex-shrink-0 px-4 py-4">
                            <div class="card-hover bg-white rounded-3xl shadow-2xl overflow-hidden shine group">
                                <div class="relative h-64 overflow-hidden">
                                    <img src="https://images.unsplash.com/photo-1557821552-17105176677c?w=800&q=80"
                                        alt="E-Commerce Platform"
                                        class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                                    <div class="absolute inset-0 bg-gradient-to-t from-blue-600/80 to-transparent"></div>
                                    <div class="absolute bottom-4 left-4 right-4">
                                        <div class="bg-white/20 backdrop-blur-md rounded-2xl p-4 transform translate-y-20 group-hover:translate-y-0 transition-transform duration-300">
                                            <p class="text-white text-sm font-medium">E-Commerce Platform</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-8">
                                    <div class="flex items-center gap-2 mb-3">
                                        <div class="w-2 h-2 bg-blue-600 rounded-full"></div>
                                        <span class="text-blue-600 text-sm font-semibold uppercase tracking-wider">Web Development</span>
                                    </div>
                                    <h3 class="font-bold text-2xl mb-3 text-gray-800 group-hover:text-blue-600 transition-colors">ShopFlow Pro</h3>
                                    <p class="text-gray-600 text-sm leading-relaxed mb-4">Modern e-commerce solution with advanced inventory management and analytics</p>
                                    <div class="flex gap-2">
                                        <span class="px-3 py-1 bg-blue-50 text-blue-600 rounded-full text-xs font-medium">React</span>
                                        <span class="px-3 py-1 bg-purple-50 text-purple-600 rounded-full text-xs font-medium">Node.js</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 2 - FitTrack Elite -->
                        <div class="w-full md:w-1/2 lg:w-1/3 flex-shrink-0 px-4 py-4">
                            <div class="card-hover bg-white rounded-3xl shadow-2xl overflow-hidden shine group">
                                <div class="relative h-64 overflow-hidden">
                                    <img src="https://images.unsplash.com/photo-1551721434-8b94ddff0e6d?w=800&q=80"
                                        alt="Fitness Tracking App"
                                        class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                                    <div class="absolute inset-0 bg-gradient-to-t from-purple-600/80 to-transparent"></div>
                                    <div class="absolute bottom-4 left-4 right-4">
                                        <div class="bg-white/20 backdrop-blur-md rounded-2xl p-4 transform translate-y-20 group-hover:translate-y-0 transition-transform duration-300">
                                            <p class="text-white text-sm font-medium">iOS & Android App</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-8">
                                    <div class="flex items-center gap-2 mb-3">
                                        <div class="w-2 h-2 bg-purple-600 rounded-full"></div>
                                        <span class="text-purple-600 text-sm font-semibold uppercase tracking-wider">Mobile App</span>
                                    </div>
                                    <h3 class="font-bold text-2xl mb-3 text-gray-800 group-hover:text-purple-600 transition-colors">FitTrack Elite</h3>
                                    <p class="text-gray-600 text-sm leading-relaxed mb-4">Comprehensive fitness tracking app with AI-powered workout recommendations</p>
                                    <div class="flex gap-2">
                                        <span class="px-3 py-1 bg-purple-50 text-purple-600 rounded-full text-xs font-medium">Flutter</span>
                                        <span class="px-3 py-1 bg-pink-50 text-pink-600 rounded-full text-xs font-medium">Firebase</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 3 - CloudSync ERP -->
                        <div class="w-full md:w-1/2 lg:w-1/3 flex-shrink-0 px-4 py-4">
                            <div class="card-hover bg-white rounded-3xl shadow-2xl overflow-hidden shine group">
                                <div class="relative h-64 overflow-hidden">
                                    <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=800&q=80"
                                        alt="Enterprise ERP System"
                                        class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                                    <div class="absolute inset-0 bg-gradient-to-t from-green-600/80 to-transparent"></div>
                                    <div class="absolute bottom-4 left-4 right-4">
                                        <div class="bg-white/20 backdrop-blur-md rounded-2xl p-4 transform translate-y-20 group-hover:translate-y-0 transition-transform duration-300">
                                            <p class="text-white text-sm font-medium">Cloud-based System</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-8">
                                    <div class="flex items-center gap-2 mb-3">
                                        <div class="w-2 h-2 bg-green-600 rounded-full"></div>
                                        <span class="text-green-600 text-sm font-semibold uppercase tracking-wider">Enterprise System</span>
                                    </div>
                                    <h3 class="font-bold text-2xl mb-3 text-gray-800 group-hover:text-green-600 transition-colors">CloudSync ERP</h3>
                                    <p class="text-gray-600 text-sm leading-relaxed mb-4">Enterprise resource planning system with real-time data synchronization</p>
                                    <div class="flex gap-2">
                                        <span class="px-3 py-1 bg-green-50 text-green-600 rounded-full text-xs font-medium">Java</span>
                                        <span class="px-3 py-1 bg-blue-50 text-blue-600 rounded-full text-xs font-medium">AWS</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 4 - DesignHub Studio -->
                        <div class="w-full md:w-1/2 lg:w-1/3 flex-shrink-0 px-4 py-4">
                            <div class="card-hover bg-white rounded-3xl shadow-2xl overflow-hidden shine group">
                                <div class="relative h-64 overflow-hidden">
                                    <img src="https://images.unsplash.com/photo-1561070791-2526d30994b5?w=800&q=80"
                                        alt="UI/UX Design System"
                                        class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                                    <div class="absolute inset-0 bg-gradient-to-t from-red-600/80 to-transparent"></div>
                                    <div class="absolute bottom-4 left-4 right-4">
                                        <div class="bg-white/20 backdrop-blur-md rounded-2xl p-4 transform translate-y-20 group-hover:translate-y-0 transition-transform duration-300">
                                            <p class="text-white text-sm font-medium">Design System</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-8">
                                    <div class="flex items-center gap-2 mb-3">
                                        <div class="w-2 h-2 bg-red-600 rounded-full"></div>
                                        <span class="text-red-600 text-sm font-semibold uppercase tracking-wider">UI/UX Design</span>
                                    </div>
                                    <h3 class="font-bold text-2xl mb-3 text-gray-800 group-hover:text-red-600 transition-colors">DesignHub Studio</h3>
                                    <p class="text-gray-600 text-sm leading-relaxed mb-4">Complete design system with components library and style guidelines</p>
                                    <div class="flex gap-2">
                                        <span class="px-3 py-1 bg-red-50 text-red-600 rounded-full text-xs font-medium">Figma</span>
                                        <span class="px-3 py-1 bg-orange-50 text-orange-600 rounded-full text-xs font-medium">Sketch</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 5 - MarketPlace 360 -->
                        <div class="w-full md:w-1/2 lg:w-1/3 flex-shrink-0 px-4 py-4">
                            <div class="card-hover bg-white rounded-3xl shadow-2xl overflow-hidden shine group">
                                <div class="relative h-64 overflow-hidden">
                                    <img src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?w=800&q=80"
                                        alt="Multi-vendor Marketplace"
                                        class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                                    <div class="absolute inset-0 bg-gradient-to-t from-orange-600/80 to-transparent"></div>
                                    <div class="absolute bottom-4 left-4 right-4">
                                        <div class="bg-white/20 backdrop-blur-md rounded-2xl p-4 transform translate-y-20 group-hover:translate-y-0 transition-transform duration-300">
                                            <p class="text-white text-sm font-medium">Full-stack Development</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-8">
                                    <div class="flex items-center gap-2 mb-3">
                                        <div class="w-2 h-2 bg-orange-600 rounded-full"></div>
                                        <span class="text-orange-600 text-sm font-semibold uppercase tracking-wider">E-Commerce</span>
                                    </div>
                                    <h3 class="font-bold text-2xl mb-3 text-gray-800 group-hover:text-orange-600 transition-colors">MarketPlace 360</h3>
                                    <p class="text-gray-600 text-sm leading-relaxed mb-4">Multi-vendor marketplace with integrated payment and shipping solutions</p>
                                    <div class="flex gap-2">
                                        <span class="px-3 py-1 bg-orange-50 text-orange-600 rounded-full text-xs font-medium">Vue.js</span>
                                        <span class="px-3 py-1 bg-yellow-50 text-yellow-600 rounded-full text-xs font-medium">Laravel</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 6 - SocialConnect+ -->
                        <div class="w-full md:w-1/2 lg:w-1/3 flex-shrink-0 px-4 py-4">
                            <div class="card-hover bg-white rounded-3xl shadow-2xl overflow-hidden shine group">
                                <div class="relative h-64 overflow-hidden">
                                    <img src="https://images.unsplash.com/photo-1611162617474-5b21e879e113?w=800&q=80"
                                        alt="Social Networking App"
                                        class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                                    <div class="absolute inset-0 bg-gradient-to-t from-pink-600/80 to-transparent"></div>
                                    <div class="absolute bottom-4 left-4 right-4">
                                        <div class="bg-white/20 backdrop-blur-md rounded-2xl p-4 transform translate-y-20 group-hover:translate-y-0 transition-transform duration-300">
                                            <p class="text-white text-sm font-medium">Cross-platform App</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-8">
                                    <div class="flex items-center gap-2 mb-3">
                                        <div class="w-2 h-2 bg-pink-600 rounded-full"></div>
                                        <span class="text-pink-600 text-sm font-semibold uppercase tracking-wider">Mobile Application</span>
                                    </div>
                                    <h3 class="font-bold text-2xl mb-3 text-gray-800 group-hover:text-pink-600 transition-colors">SocialConnect+</h3>
                                    <p class="text-gray-600 text-sm leading-relaxed mb-4">Next-gen social networking platform with real-time messaging and media sharing</p>
                                    <div class="flex gap-2">
                                        <span class="px-3 py-1 bg-pink-50 text-pink-600 rounded-full text-xs font-medium">React Native</span>
                                        <span class="px-3 py-1 bg-purple-50 text-purple-600 rounded-full text-xs font-medium">GraphQL</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Navigation Buttons -->
                <button id="prevBtn" class="absolute left-0 top-1/2 -translate-y-1/2 -translate-x-6 bg-white hover:bg-gradient-to-r hover:from-blue-600 hover:to-purple-600 rounded-full p-4 shadow-2xl hover:shadow-purple-500/50 transition-all duration-300 z-20 group">
                    <svg class="w-6 h-6 text-gray-800 group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7" />
                    </svg>
                </button>
                <button id="nextBtn" class="absolute right-0 top-1/2 -translate-y-1/2 translate-x-6 bg-white hover:bg-gradient-to-r hover:from-blue-600 hover:to-purple-600 rounded-full p-4 shadow-2xl hover:shadow-purple-500/50 transition-all duration-300 z-20 group">
                    <svg class="w-6 h-6 text-gray-800 group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7" />
                    </svg>
                </button>

                <!-- Dots Indicator -->
                <div id="dotsContainer" class="flex justify-center gap-3 mt-12">
                    <!-- Dots will be generated by JavaScript -->
                </div>
            </div>
        </div>
    </section>

    <style>
        @keyframes marquee-right {
            0% {
                transform: translateX(-50%);
            }

            100% {
                transform: translateX(0);
            }
        }
    </style>

    <section id="testimonials" class="py-24 px-6 bg-gradient-to-br from-gray-50 to-blue-50 relative overflow-hidden">
        <!-- Background Decoration -->
        <div class="absolute top-0 right-0 w-96 h-96 bg-blue-200 rounded-full mix-blend-multiply filter blur-3xl opacity-20"></div>
        <div class="absolute bottom-0 left-0 w-96 h-96 bg-purple-200 rounded-full mix-blend-multiply filter blur-3xl opacity-20"></div>

        <div class="container mx-auto relative z-10">
            <!-- Header -->
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold">What Our Clients Say</h2>
                <p class="text-gray-600 text-lg max-w-2xl mx-auto">
                    Don't just take our word for it. Here's what our clients say about BridgeIn.
                </p>
            </div>

            <!-- Animation Wrapper -->
            <div class="overflow-hidden">
                <div class="flex gap-8 animate-[marquee-right_25s_linear_infinite] w-max">

                    <!-- DUPLICATE WRAPPER START -->
                    <div class="flex gap-8">
                        <!-- CARD 1 -->
                        <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 min-w-[340px]">
                            <div class="flex space-x-1 mb-4">
                                <span class="text-yellow-400">★★★★★</span>
                            </div>
                            <p class="text-gray-700 mb-6">"BridgeIn transformed our outdated system. Highly recommended!"</p>
                            <div class="flex items-center pt-4 border-t">
                                <div class="w-12 h-12 rounded-full bg-blue-500 text-white flex items-center justify-center mr-4 font-bold">JD</div>
                                <div>
                                    <h4 class="font-bold">John Davis</h4>
                                    <p class="text-sm text-gray-500">CEO, TechCorp</p>
                                </div>
                            </div>
                        </div>

                        <!-- CARD 2 -->
                        <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 min-w-[340px]">
                            <div class="flex space-x-1 mb-4">
                                <span class="text-yellow-400">★★★★★</span>
                            </div>
                            <p class="text-gray-700 mb-6">
                                "The mobile app is phenomenal! Fast and user-friendly."
                            </p>
                            <div class="flex items-center pt-4 border-t">
                                <div class="w-12 h-12 rounded-full bg-purple-500 text-white flex items-center justify-center mr-4 font-bold">SP</div>
                                <div>
                                    <h4 class="font-bold">Sarah Peterson</h4>
                                    <p class="text-sm text-gray-500">Founder, FitLife</p>
                                </div>
                            </div>
                        </div>

                        <!-- CARD 3 -->
                        <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 min-w-[340px]">
                            <div class="flex space-x-1 mb-4">
                                <span class="text-yellow-400">★★★★★</span>
                            </div>
                            <p class="text-gray-700 mb-6">
                                "Excellent communication and top-notch development service."
                            </p>
                            <div class="flex items-center pt-4 border-t">
                                <div class="w-12 h-12 rounded-full bg-green-500 text-white flex items-center justify-center mr-4 font-bold">RM</div>
                                <div>
                                    <h4 class="font-bold">Richard Mendez</h4>
                                    <p class="text-sm text-gray-500">CTO, SmartWare</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- DUPLICATE WRAPPER END -->

                    <!-- DUPLICATED AGAIN FOR PERFECT LOOP -->
                    <div class="flex gap-8">
                        <!-- COPY 1 -->
                        <div class="bg-white rounded-2xl p-8 shadow-lg min-w-[340px]">
                            <div class="flex space-x-1 mb-4"><span class="text-yellow-400">★★★★★</span></div>
                            <p class="text-gray-700 mb-6">"BridgeIn transformed our outdated system. Highly recommended!"</p>
                            <div class="flex items-center pt-4 border-t">
                                <div class="w-12 h-12 rounded-full bg-blue-500 text-white flex items-center justify-center mr-4 font-bold">JD</div>
                                <div>
                                    <h4 class="font-bold">John Davis</h4>
                                    <p class="text-sm text-gray-500">CEO, TechCorp</p>
                                </div>
                            </div>
                        </div>

                        <!-- COPY 2 -->
                        <div class="bg-white rounded-2xl p-8 shadow-lg min-w-[340px]">
                            <div class="flex space-x-1 mb-4"><span class="text-yellow-400">★★★★★</span></div>
                            <p class="text-gray-700 mb-6">"The mobile app is phenomenal! Fast and user-friendly."</p>
                            <div class="flex items-center pt-4 border-t">
                                <div class="w-12 h-12 rounded-full bg-purple-500 text-white flex items-center justify-center mr-4 font-bold">SP</div>
                                <div>
                                    <h4 class="font-bold">Sarah Peterson</h4>
                                    <p class="text-sm text-gray-500">Founder, FitLife</p>
                                </div>
                            </div>
                        </div>

                        <!-- COPY 3 -->
                        <div class="bg-white rounded-2xl p-8 shadow-lg min-w-[340px]">
                            <div class="flex space-x-1 mb-4"><span class="text-yellow-400">★★★★★</span></div>
                            <p class="text-gray-700 mb-6">"Excellent communication and top-notch development service."</p>
                            <div class="flex items-center pt-4 border-t">
                                <div class="w-12 h-12 rounded-full bg-green-500 text-white flex items-center justify-center mr-4 font-bold">RM</div>
                                <div>
                                    <h4 class="font-bold">Richard Mendez</h4>
                                    <p class="text-sm text-gray-500">CTO, SmartWare</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- Contact Us Section -->
    <section id="contact" class="py-20 px-6 bg-white">
        <div class="container mx-auto max-w-4xl">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold mb-4">Get In Touch</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    Have a project in mind? We'd love to hear from you.<br>
                    Send us a message and we'll respond as soon as possible.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">
                <!-- Contact Info -->
                <div class="space-y-6">
                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-semibold text-lg mb-1">Email</h3>
                            <p class="text-gray-600">bridgeintechnology@gmail.com</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-semibold text-lg mb-1">Phone</h3>
                            <p class="text-gray-600">+62-858-1010-4055</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-semibold text-lg mb-1">Location</h3>
                            <p class="text-gray-600">Surabaya, East Java, Indonesia</p>
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <form class="space-y-4">
                    <div>
                        <input type="text" placeholder="Your Name"
                            class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div>
                        <input type="email" placeholder="Your Email"
                            class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div>
                        <textarea placeholder="Your Message" rows="5"
                            class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                    </div>
                    <button type="submit"
                        class="w-full bg-blue-600 text-white font-semibold py-3 rounded-lg hover:bg-blue-700 transition">
                        Send Message
                    </button>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gradient-to-br from-blue-900 to-blue-700 text-white py-16 px-6">
        <div class="container mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-12">
                <div>
                    <div class="flex items-center space-x-3 mb-4">
                        <img src="asset/footer.png" alt="BridgeIn Logo" class="h-12 w-auto">
                    </div>
                    <p class="text-blue-100 font-medium leading-relaxed">Build Better, Faster, and Smarter</p>
                    <div class="mt-6 flex space-x-3">
                        <a href="#" class="w-10 h-10 bg-white/10 hover:bg-white/20 rounded-full flex items-center justify-center transition-all duration-300 hover:scale-110">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                            </svg>
                        </a>
                        <a href="#" class="w-10 h-10 bg-white/10 hover:bg-white/20 rounded-full flex items-center justify-center transition-all duration-300 hover:scale-110">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                            </svg>
                        </a>
                        <a href="#" class="w-10 h-10 bg-white/10 hover:bg-white/20 rounded-full flex items-center justify-center transition-all duration-300 hover:scale-110">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z" />
                            </svg>
                        </a>
                        <a href="#" class="w-10 h-10 bg-white/10 hover:bg-white/20 rounded-full flex items-center justify-center transition-all duration-300 hover:scale-110">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z" />
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div>
                    <h3 class="text-xl font-bold mb-6 relative inline-block">
                        Quick Links
                        <span class="absolute bottom-0 left-0 w-12 h-1 bg-white/40 rounded"></span>
                    </h3>
                    <ul class="space-y-3 text-blue-100">
                        <li>
                            <a href="#" class="flex items-center hover:text-white hover:translate-x-1 transition-all duration-300 group">
                                <svg class="w-4 h-4 mr-2 opacity-0 group-hover:opacity-100 transition-opacity" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="#services" class="flex items-center hover:text-white hover:translate-x-1 transition-all duration-300 group">
                                <svg class="w-4 h-4 mr-2 opacity-0 group-hover:opacity-100 transition-opacity" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                                Services
                            </a>
                        </li>
                        <li>
                            <a href="#portfolio" class="flex items-center hover:text-white hover:translate-x-1 transition-all duration-300 group">
                                <svg class="w-4 h-4 mr-2 opacity-0 group-hover:opacity-100 transition-opacity" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                                Portfolio
                            </a>
                        </li>
                        <li>
                            <a href="#contact" class="flex items-center hover:text-white hover:translate-x-1 transition-all duration-300 group">
                                <svg class="w-4 h-4 mr-2 opacity-0 group-hover:opacity-100 transition-opacity" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                                Contact
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Contact Info -->
                <div>
                    <h3 class="text-xl font-bold mb-6 relative inline-block">
                        Get in Touch
                        <span class="absolute bottom-0 left-0 w-12 h-1 bg-white/40 rounded"></span>
                    </h3>
                    <ul class="space-y-4 text-blue-100">
                        <li class="flex items-start group hover:text-white transition-colors">
                            <svg class="w-5 h-5 mr-3 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <span>Surabaya, Indonesia</span>
                        </li>
                        <li class="flex items-start group hover:text-white transition-colors">
                            <svg class="w-5 h-5 mr-3 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                            <a href="mailto:bridgeintechnology@gmail.com" class="hover:underline">bridgeintechnology@gmail.com</a>
                        </li>
                        <li class="flex items-start group hover:text-white transition-colors">
                            <svg class="w-5 h-5 mr-3 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                            <a href="tel:+6285810104055" class="hover:underline">+62-858-1010-4055</a>
                        </li>
                    </ul>
                </div>

                <!-- Newsletter -->
                <div>
                    <h3 class="text-xl font-bold mb-6 relative inline-block">
                        Newsletter
                        <span class="absolute bottom-0 left-0 w-12 h-1 bg-white/40 rounded"></span>
                    </h3>
                    <p class="text-blue-100 mb-4 text-sm leading-relaxed">Subscribe to get the latest updates and news from BridgeIn.</p>
                    <form class="space-y-3">
                        <div class="relative">
                            <input type="email" placeholder="Your email address" class="w-full px-4 py-3 rounded-lg bg-white/10 border border-white/20 text-white placeholder-blue-200 focus:outline-none focus:ring-2 focus:ring-white/50 transition-all">
                        </div>
                        <button type="submit" class="w-full bg-white text-blue-600 px-4 py-3 rounded-lg font-semibold hover:bg-blue-50 transition-all duration-300 flex items-center justify-center space-x-2 group">
                            <span>Subscribe</span>
                            <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                        </button>
                    </form>
                </div>
            </div>

            <!-- Bottom Copyright -->
            <div class="border-t border-white/20 pt-8">
                <div class="flex flex-col md:flex-row justify-between items-center space-y-4 md:space-y-0">
                    <p class="text-blue-100 text-sm">© 2025 BridgeIn. All rights reserved.</p>
                    <div class="flex space-x-6 text-sm text-blue-100">
                        <a href="#" class="hover:text-white transition-colors">Privacy Policy</a>
                        <span class="text-blue-300">•</span>
                        <a href="#" class="hover:text-white transition-colors">Terms of Service</a>
                        <span class="text-blue-300">•</span>
                        <a href="#" class="hover:text-white transition-colors">Cookie Policy</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

</body>
<script>
    const carousel = document.getElementById('portfolioCarousel');
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');
    const dotsContainer = document.getElementById('dotsContainer');

    let currentIndex = 0;
    let itemsPerView = 3;
    let totalItems = 6;

    function updateItemsPerView() {
        if (window.innerWidth < 768) {
            itemsPerView = 1;
        } else if (window.innerWidth < 1024) {
            itemsPerView = 2;
        } else {
            itemsPerView = 3;
        }
        updateCarousel();
        createDots();
    }

    function createDots() {
        const totalDots = Math.ceil(totalItems / itemsPerView);
        dotsContainer.innerHTML = '';

        for (let i = 0; i < totalDots; i++) {
            const dot = document.createElement('button');
            dot.className = `h-3 rounded-full transition-all duration-300 ${i === currentIndex ? 'w-12 bg-gradient-to-r from-blue-600 to-purple-600' : 'w-3 bg-gray-300 hover:bg-gray-400'}`;
            dot.addEventListener('click', () => goToSlide(i));
            dotsContainer.appendChild(dot);
        }
    }

    function updateCarousel() {
        const maxIndex = Math.ceil(totalItems / itemsPerView) - 1;
        if (currentIndex > maxIndex) currentIndex = maxIndex;
        if (currentIndex < 0) currentIndex = 0;

        const translateX = -(currentIndex * 100);
        carousel.style.transform = `translateX(${translateX}%)`;

        const dots = dotsContainer.querySelectorAll('button');
        dots.forEach((dot, index) => {
            dot.className = `h-3 rounded-full transition-all duration-300 ${index === currentIndex ? 'w-12 bg-gradient-to-r from-blue-600 to-purple-600' : 'w-3 bg-gray-300 hover:bg-gray-400'}`;
        });
    }

    function goToSlide(index) {
        currentIndex = index;
        updateCarousel();
    }

    function nextSlide() {
        const maxIndex = Math.ceil(totalItems / itemsPerView) - 1;
        currentIndex = currentIndex >= maxIndex ? 0 : currentIndex + 1;
        updateCarousel();
    }

    function prevSlide() {
        const maxIndex = Math.ceil(totalItems / itemsPerView) - 1;
        currentIndex = currentIndex <= 0 ? maxIndex : currentIndex - 1;
        updateCarousel();
    }

    prevBtn.addEventListener('click', prevSlide);
    nextBtn.addEventListener('click', nextSlide);
    window.addEventListener('resize', updateItemsPerView);

    let autoplayInterval = setInterval(nextSlide, 5000);

    carousel.addEventListener('mouseenter', () => {
        clearInterval(autoplayInterval);
    });

    carousel.addEventListener('mouseleave', () => {
        autoplayInterval = setInterval(nextSlide, 5000);
    });

    updateItemsPerView();
    AOS.init({
        duration: 900,
        once: true,
        easing: 'ease-out-quart'
    });
</script>

</html>