<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BridgeIn - Digital Transformation Partner</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        @font-face {
            font-family: 'Nexa';
            src: url('/fonts/Nexa-Regular.woff2') format('woff2'),
                url('/fonts/Nexa-Regular.woff') format('woff');
            font-weight: 400;
            font-style: normal;
            font-display: swap;
        }

        @font-face {
            font-family: 'Nexa';
            src: url('/fonts/Nexa-Bold.woff2') format('woff2'),
                url('/fonts/Nexa-Bold.woff') format('woff');
            font-weight: 700;
            font-style: bold;
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
                <a href="#" class="flex items-center space-x-3 group cursor-pointer">
                    <div class="relative">
                        <img src="asset/logo.png" alt="BridgeIn Logo" class="h-10 w-auto transform group-hover:scale-110 transition-transform duration-300">
                        <div class="absolute inset-0 bg-blue-500 rounded-xl blur-md opacity-0 group-hover:opacity-30 transition-opacity"></div>
                    </div>
                    <span class="text-2xl font-bold bg-gradient-to-r from-blue-900 to-blue-700 bg-clip-text text-transparent">
                        BridgeIn.
                    </span>
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
    <section class="relative text-white py-20 px-6 overflow-hidden">
        <!-- Background Image -->
        <div class="absolute inset-0">
            <!-- Gambar Background -->
            <img src="asset/hero.jpeg" alt="" class="w-full h-full object-cover">

            <!-- Overlay untuk memastikan text tetap terbaca -->
            <div class="absolute inset-0 bg-blue-900/40"></div>
        </div>

        <div class="container mx-auto text-center relative z-10">
            <h1 class="text-4xl md:text-6xl font-bold mb-6">
                Build Better, Faster, and Smarter
            </h1>
            <p class="text-lg md:text-xl mb-8 max-w-3xl mx-auto opacity-90">
                BridgeIn is your trusted partner in Digital Transformation.<br>
                We deliver cutting-edge software solutions and IT consulting services to<br>
                help businesses thrive in the digital era.
            </p>

            <!-- Values Section -->
            <div class="mt-16 bg-white/10 backdrop-blur-sm rounded-3xl p-8 max-w-4xl mx-auto border border-white/20">
                <h3 class="text-2xl font-bold mb-8">Our Values</h3>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="flex flex-col items-center">
                        <div class="w-12 h-12 bg-white/20 rounded-lg flex items-center justify-center mb-3">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                        </div>
                        <h4 class="font-semibold text-lg mb-1">Innovation</h4>
                    </div>
                    <div class="flex flex-col items-center">
                        <div class="w-12 h-12 bg-white/20 rounded-lg flex items-center justify-center mb-3">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M2.166 4.999A11.954 11.954 0 0010 1.944 11.954 11.954 0 0017.834 5c.11.65.166 1.32.166 2.001 0 5.225-3.34 9.67-8 11.317C5.34 16.67 2 12.225 2 7c0-.682.057-1.35.166-2.001zm11.541 3.708a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <h4 class="font-semibold text-lg mb-1">Trust & Reliability</h4>
                    </div>
                    <div class="flex flex-col items-center">
                        <div class="w-12 h-12 bg-white/20 rounded-lg flex items-center justify-center mb-3">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z"></path>
                            </svg>
                        </div>
                        <h4 class="font-semibold text-lg mb-1">Modern Solutions</h4>
                    </div>
                </div>
            </div>
        </div>

        <style>
            /* Optional: jika ingin parallax effect */
            .parallax-bg {
                background-attachment: fixed;
            }
        </style>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-20 px-6 bg-gradient-to-br from-gray-50 via-blue-50/30 to-gray-50 relative overflow-hidden">
        <!-- Decorative Background Elements -->
        <div class="absolute top-20 right-10 w-64 h-64 bg-blue-200 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-pulse"></div>
        <div class="absolute bottom-20 left-10 w-64 h-64 bg-purple-200 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-pulse" style="animation-delay: 2s;"></div>

        <div class="container mx-auto relative z-10">
            <div class="mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-center mb-4 text-gray-900">Our Services</h2>
                <p class="text-center text-gray-600 max-w-2xl mx-auto">
                    Use a few services or use them all, let the BridgeIn team take care of all of your technology needs.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl mx-auto">
                <!-- Website Development -->
                <div class="group bg-gradient-to-br from-blue-600 to-blue-700 text-white rounded-3xl p-8 hover:shadow-2xl hover:shadow-blue-500/30 transition-all duration-300 hover:-translate-y-2 relative overflow-hidden">
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
                <div class="group bg-gradient-to-br from-purple-600 to-purple-700 text-white rounded-3xl p-8 hover:shadow-2xl hover:shadow-purple-500/30 transition-all duration-300 hover:-translate-y-2 relative overflow-hidden">
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
                <div class="group bg-gradient-to-br from-cyan-600 to-cyan-700 text-white rounded-3xl p-8 hover:shadow-2xl hover:shadow-cyan-500/30 transition-all duration-300 hover:-translate-y-2 relative overflow-hidden">
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
                <div class="group bg-gradient-to-br from-emerald-600 to-emerald-700 text-white rounded-3xl p-8 hover:shadow-2xl hover:shadow-emerald-500/30 transition-all duration-300 hover:-translate-y-2 relative overflow-hidden">
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
                <div class="group bg-gradient-to-br from-pink-600 to-rose-700 text-white rounded-3xl p-8 hover:shadow-2xl hover:shadow-pink-500/30 transition-all duration-300 hover:-translate-y-2 relative overflow-hidden">
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
                <div class="group bg-gradient-to-br from-indigo-600 to-indigo-700 text-white rounded-3xl p-8 hover:shadow-2xl hover:shadow-indigo-500/30 transition-all duration-300 hover:-translate-y-2 relative overflow-hidden">
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
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-4">Tech Stack</h2>
            <p class="text-center text-gray-600 mb-12">Powered by modern and reliable technologies</p>

            <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-8 gap-10 max-w-6xl mx-auto items-center">

                <!-- Next.js -->
                <div class="group flex flex-col items-center">
                    <div class="w-16 h-16 bg-gray-100 rounded-xl flex items-center justify-center shadow-md group-hover:shadow-xl transition hover:-translate-y-1">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/nextjs/nextjs-original.svg" class="w-10 h-10" />
                    </div>
                    <span class="text-sm text-gray-700 mt-2">Next.js</span>
                </div>

                <!-- React -->
                <div class="group flex flex-col items-center">
                    <div class="w-16 h-16 bg-gray-100 rounded-xl flex items-center justify-center shadow-md group-hover:shadow-xl transition hover:-translate-y-1">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/react/react-original.svg" class="w-10 h-10" />
                    </div>
                    <span class="text-sm text-gray-700 mt-2">React</span>
                </div>

                <!-- Vue.js -->
                <div class="group flex flex-col items-center">
                    <div class="w-16 h-16 bg-gray-100 rounded-xl flex items-center justify-center shadow-md group-hover:shadow-xl transition hover:-translate-y-1">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/vuejs/vuejs-original.svg" class="w-10 h-10" />
                    </div>
                    <span class="text-sm text-gray-700 mt-2">Vue.js</span>
                </div>

                <!-- Laravel -->
                <div class="group flex flex-col items-center">
                    <div class="w-16 h-16 bg-gray-100 rounded-xl flex items-center justify-center shadow-md group-hover:shadow-xl transition hover:-translate-y-1">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/laravel/laravel-original.svg" class="w-10 h-10" />
                    </div>
                    <span class="text-sm text-gray-700 mt-2">Laravel</span>
                </div>

                <!-- Node.js -->
                <div class="group flex flex-col items-center">
                    <div class="w-16 h-16 bg-gray-100 rounded-xl flex items-center justify-center shadow-md group-hover:shadow-xl transition hover:-translate-y-1">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/nodejs/nodejs-original.svg" class="w-10 h-10" />
                    </div>
                    <span class="text-sm text-gray-700 mt-2">Node.js</span>
                </div>

                <!-- TypeScript -->
                <div class="group flex flex-col items-center">
                    <div class="w-16 h-16 bg-gray-100 rounded-xl flex items-center justify-center shadow-md group-hover:shadow-xl transition hover:-translate-y-1">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/typescript/typescript-original.svg" class="w-10 h-10" />
                    </div>
                    <span class="text-sm text-gray-700 mt-2">TypeScript</span>
                </div>

                <!-- Flutter -->
                <div class="group flex flex-col items-center">
                    <div class="w-16 h-16 bg-gray-100 rounded-xl flex items-center justify-center shadow-md group-hover:shadow-xl transition hover:-translate-y-1">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/flutter/flutter-original.svg" class="w-10 h-10" />
                    </div>
                    <span class="text-sm text-gray-700 mt-2">Flutter</span>
                </div>

                <!-- Database -->
                <div class="group flex flex-col items-center">
                    <div class="w-16 h-16 bg-gray-100 rounded-xl flex items-center justify-center shadow-md group-hover:shadow-xl transition hover:-translate-y-1">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mysql/mysql-original.svg" class="w-10 h-10" />
                    </div>
                    <span class="text-sm text-gray-700 mt-2">Database</span>
                </div>

            </div>
        </div>
    </section>


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
                        <!-- Slide 1 -->
                        <div class="w-full md:w-1/2 lg:w-1/3 flex-shrink-0 px-4 py-4">
                            <div class="card-hover bg-white rounded-3xl shadow-2xl overflow-hidden shine group">
                                <div class="relative h-64 bg-gradient-to-br from-blue-400 via-blue-500 to-blue-600 overflow-hidden">
                                    <div class="absolute inset-0 bg-black opacity-0 group-hover:opacity-20 transition-opacity duration-300"></div>
                                    <div class="absolute bottom-4 left-4 right-4">
                                        <div class="bg-white/20 backdrop-blur-md rounded-2xl p-4 transform translate-y-20 group-hover:translate-y-0 transition-transform duration-300">
                                            <p class="text-white text-sm font-medium">E-Commerce Platform</p>
                                        </div>
                                    </div>
                                    <!-- Decorative circles -->
                                    <div class="absolute -top-10 -right-10 w-40 h-40 bg-white/10 rounded-full"></div>
                                    <div class="absolute -bottom-10 -left-10 w-40 h-40 bg-white/10 rounded-full"></div>
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

                        <!-- Slide 2 -->
                        <div class="w-full md:w-1/2 lg:w-1/3 flex-shrink-0 px-4 py-4">
                            <div class="card-hover bg-white rounded-3xl shadow-2xl overflow-hidden shine group">
                                <div class="relative h-64 bg-gradient-to-br from-purple-400 via-purple-500 to-purple-600 overflow-hidden">
                                    <div class="absolute inset-0 bg-black opacity-0 group-hover:opacity-20 transition-opacity duration-300"></div>
                                    <div class="absolute bottom-4 left-4 right-4">
                                        <div class="bg-white/20 backdrop-blur-md rounded-2xl p-4 transform translate-y-20 group-hover:translate-y-0 transition-transform duration-300">
                                            <p class="text-white text-sm font-medium">iOS & Android App</p>
                                        </div>
                                    </div>
                                    <div class="absolute top-10 right-10 w-32 h-32 bg-white/10 rounded-full"></div>
                                    <div class="absolute bottom-10 left-10 w-24 h-24 bg-white/10 rounded-full"></div>
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

                        <!-- Slide 3 -->
                        <div class="w-full md:w-1/2 lg:w-1/3 flex-shrink-0 px-4 py-4">
                            <div class="card-hover bg-white rounded-3xl shadow-2xl overflow-hidden shine group">
                                <div class="relative h-64 bg-gradient-to-br from-green-400 via-emerald-500 to-teal-600 overflow-hidden">
                                    <div class="absolute inset-0 bg-black opacity-0 group-hover:opacity-20 transition-opacity duration-300"></div>
                                    <div class="absolute bottom-4 left-4 right-4">
                                        <div class="bg-white/20 backdrop-blur-md rounded-2xl p-4 transform translate-y-20 group-hover:translate-y-0 transition-transform duration-300">
                                            <p class="text-white text-sm font-medium">Cloud-based System</p>
                                        </div>
                                    </div>
                                    <div class="absolute -top-5 left-1/2 w-40 h-40 bg-white/10 rounded-full"></div>
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

                        <!-- Slide 4 -->
                        <div class="w-full md:w-1/2 lg:w-1/3 flex-shrink-0 px-4 py-4">
                            <div class="card-hover bg-white rounded-3xl shadow-2xl overflow-hidden shine group">
                                <div class="relative h-64 bg-gradient-to-br from-red-400 via-rose-500 to-pink-600 overflow-hidden">
                                    <div class="absolute inset-0 bg-black opacity-0 group-hover:opacity-20 transition-opacity duration-300"></div>
                                    <div class="absolute bottom-4 left-4 right-4">
                                        <div class="bg-white/20 backdrop-blur-md rounded-2xl p-4 transform translate-y-20 group-hover:translate-y-0 transition-transform duration-300">
                                            <p class="text-white text-sm font-medium">Design System</p>
                                        </div>
                                    </div>
                                    <div class="absolute top-0 right-0 w-48 h-48 bg-white/10 rounded-full -translate-y-1/2 translate-x-1/2"></div>
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

                        <!-- Slide 5 -->
                        <div class="w-full md:w-1/2 lg:w-1/3 flex-shrink-0 px-4 py-4">
                            <div class="card-hover bg-white rounded-3xl shadow-2xl overflow-hidden shine group">
                                <div class="relative h-64 bg-gradient-to-br from-yellow-400 via-orange-500 to-red-600 overflow-hidden">
                                    <div class="absolute inset-0 bg-black opacity-0 group-hover:opacity-20 transition-opacity duration-300"></div>
                                    <div class="absolute bottom-4 left-4 right-4">
                                        <div class="bg-white/20 backdrop-blur-md rounded-2xl p-4 transform translate-y-20 group-hover:translate-y-0 transition-transform duration-300">
                                            <p class="text-white text-sm font-medium">Full-stack Development</p>
                                        </div>
                                    </div>
                                    <div class="absolute bottom-0 left-0 w-36 h-36 bg-white/10 rounded-full -translate-x-1/2 translate-y-1/2"></div>
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

                        <!-- Slide 6 -->
                        <div class="w-full md:w-1/2 lg:w-1/3 flex-shrink-0 px-4 py-4">
                            <div class="card-hover bg-white rounded-3xl shadow-2xl overflow-hidden shine group">
                                <div class="relative h-64 bg-gradient-to-br from-pink-400 via-pink-500 to-rose-600 overflow-hidden">
                                    <div class="absolute inset-0 bg-black opacity-0 group-hover:opacity-20 transition-opacity duration-300"></div>
                                    <div class="absolute bottom-4 left-4 right-4">
                                        <div class="bg-white/20 backdrop-blur-md rounded-2xl p-4 transform translate-y-20 group-hover:translate-y-0 transition-transform duration-300">
                                            <p class="text-white text-sm font-medium">Cross-platform App</p>
                                        </div>
                                    </div>
                                    <div class="absolute top-1/2 left-1/2 w-44 h-44 bg-white/10 rounded-full -translate-x-1/2 -translate-y-1/2"></div>
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
                            <p class="text-gray-600">hello@company.com</p>
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
                            <p class="text-gray-600">+62 123 4567 890</p>
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
    <footer class="bg-blue-600 text-white py-14 px-6">
        <div class="container mx-auto grid grid-cols-1 md:grid-cols-4 gap-10">

            <!-- Logo & Tagline -->
            <div>
                <div class="flex items-center space-x-3 mb-4">
                    <div class="w-12 h-12 bg-white rounded-full flex items-center justify-center">
                        <span class="text-blue-600 text-2xl font-extrabold">b</span>
                    </div>
                    <span class="text-3xl font-bold">BridgeIn.</span>
                </div>
                <p class="text-blue-100 font-medium">Build Better, Faster, and Smarter</p>
            </div>

            <!-- Quick Links -->
            <div>
                <h3 class="text-lg font-semibold mb-4">Quick Links</h3>
                <ul class="space-y-2 text-blue-100">
                    <li><a href="#" class="hover:text-white transition">Home</a></li>
                    <li><a href="#services" class="hover:text-white transition">Services</a></li>
                    <li><a href="#portfolio" class="hover:text-white transition">Portfolio</a></li>
                    <li><a href="#contact" class="hover:text-white transition">Contact</a></li>
                </ul>
            </div>

            <!-- Contact Info -->
            <div>
                <h3 class="text-lg font-semibold mb-4">Get in Touch</h3>
                <ul class="space-y-3 text-blue-100">
                    <li class="flex items-start">
                        <span class="mr-3">📍</span> Surabaya, Indonesia
                    </li>
                    <li class="flex items-start">
                        <span class="mr-3">✉️</span> bridgeintechnology@gmail.com
                    </li>
                    <li class="flex items-start">
                        <span class="mr-3">📞</span> +62-858-1010-4055
                    </li>
                </ul>
            </div>

            <!-- Social Media -->
            <div>
                <h3 class="text-lg font-semibold mb-4">Follow Us</h3>
                <ul class="space-y-3 text-blue-100">
                    <li class="flex items-center space-x-3">
                        <span>📘</span> <a href="#" class="hover:text-white transition">BridgeIn Tech</a>
                    </li>
                    <li class="flex items-center space-x-3">
                        <span>📸</span> <a href="#" class="hover:text-white transition">@bridgein.tech</a>
                    </li>
                    <li class="flex items-center space-x-3">
                        <span>▶️</span> <a href="#" class="hover:text-white transition">BridgeIn Tech</a>
                    </li>
                    <li class="flex items-center space-x-3">
                        <span>✖️</span> <a href="#" class="hover:text-white transition">@bridgein.tech</a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Bottom Copyright -->
        <div class="w-full text-center mt-10 border-t border-blue-400 pt-5">
            <p class="text-blue-200 text-sm">© 2025 BridgeIn. All rights reserved.</p>
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
</script>

</html>