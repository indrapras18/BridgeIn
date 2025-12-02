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

        /* Slide Animation */
        .slide-in-left {
            opacity: 0;
            transform: translateX(-100px);
            transition: opacity 0.8s ease-out, transform 0.8s ease-out;
        }

        .slide-in-right {
            opacity: 0;
            transform: translateX(100px);
            transition: opacity 0.8s ease-out, transform 0.8s ease-out;
        }

        .slide-in-left.visible,
        .slide-in-right.visible {
            opacity: 1;
            transform: translateX(0);
        }

        /* Stagger delay untuk list items */
        .stagger-1 {
            transition-delay: 0.1s;
        }

        .stagger-2 {
            transition-delay: 0.2s;
        }

        .stagger-3 {
            transition-delay: 0.3s;
        }

        .stagger-4 {
            transition-delay: 0.4s;
        }

        /* Image hover effect */
        .image-wrapper {
            overflow: hidden;
            transition: transform 0.3s ease;
        }

        .image-wrapper:hover {
            transform: translateY(-5px);
        }

        .image-wrapper img {
            transition: transform 0.5s ease;
        }

        .image-wrapper:hover img {
            transform: scale(1.1);
        }

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

        @keyframes marquee-right {
            0% {
                transform: translateX(-50%);
            }

            100% {
                transform: translateX(0);
            }
        }

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

        @keyframes float {

            0%,
            100% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-20px);
            }
        }

        @keyframes pulse-glow {

            0%,
            100% {
                box-shadow: 0 0 20px rgba(59, 130, 246, 0.5);
            }

            50% {
                box-shadow: 0 0 40px rgba(59, 130, 246, 0.8);
            }
        }

        .animate-fade-in-up {
            animation: fadeInUp 1s ease-out forwards;
        }

        .animate-float {
            animation: float 3s ease-in-out infinite;
        }

        .animate-pulse-glow {
            animation: pulse-glow 2s ease-in-out infinite;
        }

        .gradient-text {
            background: linear-gradient(135deg, #60a5fa 0%, #a78bfa 50%, #ec4899 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .glass-morphism {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        /* Animated gradient background */
        @keyframes gradientShift {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }

        .animated-gradient {
            background: linear-gradient(-45deg, #1e3a8a, #3b82f6, #8b5cf6, #ec4899);
            background-size: 400% 400%;
            animation: gradientShift 15s ease infinite;
        }

        @keyframes float {

            0%,
            100% {
                transform: translate(0, 0) scale(1);
            }

            33% {
                transform: translate(30px, -30px) scale(1.1);
            }

            66% {
                transform: translate(-20px, 20px) scale(0.9);
            }
        }

        @keyframes fade-in-up {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes bounce {

            0%,
            100% {
                transform: translateY(0);
                opacity: 1;
            }

            50% {
                transform: translateY(-10px);
                opacity: 0.8;
            }
        }

        .animate-float {
            animation: float 6s ease-in-out infinite;
        }

        .animate-fade-in-up {
            animation: fade-in-up 0.8s ease-out forwards;
        }

        .animate-bounce {
            animation: bounce 2s ease-in-out infinite;
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
                        <a href="#" class="px-4 py-2 rounded-lg text-gray-700 hover:text-blue-600 hover:bg-blue-50 transition-all duration-300 font-black relative group">
                            Home
                            <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-blue-600 group-hover:w-full transition-all duration-300"></span>
                        </a>
                    </li>
                    <li>
                        <a href="#services" class="px-4 py-2 rounded-lg text-gray-700 hover:text-blue-600 hover:bg-blue-50 transition-all duration-300 font-black relative group">
                            Services
                            <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-blue-600 group-hover:w-full transition-all duration-300"></span>
                        </a>
                    </li>
                    <li>
                        <a href="#portfolio" class="px-4 py-2 rounded-lg text-gray-700 hover:text-blue-600 hover:bg-blue-50 transition-all duration-300 font-black relative group">
                            Portfolio
                            <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-blue-600 group-hover:w-full transition-all duration-300"></span>
                        </a>
                    </li>
                    <li>
                        <a href="#testimonials" class="px-4 py-2 rounded-lg text-gray-700 hover:text-blue-600 hover:bg-blue-50 transition-all duration-300 font-black relative group">
                            Testimonials
                            <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-blue-600 group-hover:w-full transition-all duration-300"></span>
                        </a>
                    </li>
                    <li>
                        <a href="#contact" class="px-4 py-2 rounded-lg text-gray-700 hover:text-blue-600 hover:bg-blue-50 transition-all duration-300 font-black relative group">
                            Article
                            <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-blue-600 group-hover:w-full transition-all duration-300"></span>
                        </a>
                    </li>
                </ul>

                <!-- CTA Button - Theme Adjusted -->
                <div class="hidden md:flex items-center space-x-4">
                    <a href="https://wa.me/6285810104055?text=Halo%20BridgeIn,%20saya%20ingin%20bertanya."
                        target="_blank"
                        class="bg-gradient-to-r from-blue-500 to-cyan-400 text-white px-6 py-2.5 rounded-full font-black flex items-center space-x-2 hover:shadow-xl hover:scale-105 transition-all duration-300">

                        <!-- WhatsApp Icon -->
                        <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M20.52 3.48A11.78 11.78 0 0 0 12 0a11.92 11.92 0 0 0-10.4 17.94L0 24l6.25-1.64A11.93 11.93 0 0 0 12 24a12 12 0 0 0 8.48-20.52ZM12 21.55a9.64 9.64 0 0 1-4.93-1.36l-.35-.21-3.71.97 1-3.61-.23-.37A9.67 9.67 0 1 1 12 21.55Zm5.27-7.27c-.29-.14-1.71-.84-1.98-.93s-.46-.14-.65.14-.75.93-.92 1.12-.34.21-.63.07a7.88 7.88 0 0 1-2.31-1.43 8.73 8.73 0 0 1-1.62-2c-.17-.29 0-.45.13-.59s.29-.34.43-.51a2 2 0 0 0 .29-.48.52.52 0 0 0 0-.51c-.07-.14-.65-1.57-.89-2.15s-.47-.48-.65-.49h-.56a1.08 1.08 0 0 0-.77.36A3.24 3.24 0 0 0 6 9.12a5.61 5.61 0 0 0 1.17 3.12 12.87 12.87 0 0 0 4.94 4.23c.61.26 1.09.42 1.46.54a3.5 3.5 0 0 0 1.61.1 2.64 2.64 0 0 0 1.72-1.21 2.17 2.17 0 0 0 .15-1.21c-.06-.09-.26-.14-.55-.28Z" />
                        </svg>
                        <span>Contact Us</span>
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
                            Article
                        </a>
                    </li>
                    <li class="pt-2">
                        <a href="https://wa.me/6285810104055?text=Halo%20BridgeIn,%20saya%20ingin%20bertanya."
                            target="_blank"
                            class="block w-full text-center bg-gradient-to-r from-green-500 to-green-600 text-white px-6 py-3 rounded-full font-black shadow-sm hover:shadow-lg hover:scale-105 transition-all duration-300">
                            Contact Us
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="relative text-white py-32 px-6 overflow-hidden min-h-screen flex items-center">
        <!-- Background Image -->
        <div class="absolute inset-0">
            <img src="asset/hero.jpeg" alt="Hero Background" class="w-full h-full object-cover">
            <!-- Enhanced Gradient Overlay with #052698 -->
            <div class="absolute inset-0 bg-gradient-to-br from-[#052698] via-[#0a3bb8] to-purple-900 opacity-85"></div>
            <!-- Animated Overlay Pattern -->
            <div class="absolute inset-0 opacity-10">
                <div class="absolute top-0 left-0 w-full h-full"
                    style="background-image: radial-gradient(circle at 2px 2px, white 1px, transparent 0); background-size: 40px 40px;">
                </div>
            </div>
            <!-- Floating Particles -->
            <div class="absolute inset-0 overflow-hidden">
                <div class="absolute w-96 h-96 bg-[#052698]/30 rounded-full blur-3xl -top-48 -left-48 animate-float"></div>
                <div class="absolute w-96 h-96 bg-blue-400/20 rounded-full blur-3xl -bottom-48 -right-48 animate-float" style="animation-delay: 1s;"></div>
            </div>
        </div>

        <!-- CONTENT CONTAINER -->
        <div class="container mx-auto text-center relative z-10">
            <!-- Main Heading with Animation -->
            <div class="space-y-6 mb-12">
                <h1 class="text-5xl md:text-7xl lg:text-8xl font-bold leading-tight">
                    <span class="block opacity-0 animate-fade-in-up" style="animation-delay: 0.2s;">
                        <span class="bg-gradient-to-r from-cyan-300 via-blue-200 to-white bg-clip-text text-transparent drop-shadow-lg">BridgeIn</span>
                        <span class="text-gray-100">delivers</span>
                        <span class="text-cyan-300">trusted</span>
                    </span>
                    <span class="block opacity-0 animate-fade-in-up bg-gradient-to-r from-white via-blue-100 to-cyan-200 bg-clip-text text-transparent" style="animation-delay: 0.5s;">
                        Web & App Development
                    </span>
                </h1>
            </div>

            <!-- Description -->
            <div class="opacity-0 animate-fade-in-up max-w-5xl mx-auto" style="animation-delay: 0.8s;">
                <p class="text-xl md:text-3xl mb-6 font-light leading-relaxed">
                    <span class="text-cyan-200 font-medium">Bridge your business to customers</span>
                    <span class="text-gray-100">by building</span>
                    <span class="font-semibold text-white drop-shadow-md">reliable</span>,
                    <span class="font-semibold text-white drop-shadow-md">intuitive</span>, and
                    <span class="font-semibold text-cyan-300 drop-shadow-md">innovative solutions</span>
                </p>
                <p class="text-base md:text-xl text-blue-100 leading-relaxed max-w-3xl mx-auto">
                    We craft <span class="text-cyan-200 font-medium">digital experiences</span> tailored to your unique business needs, transforming
                    <span class="text-white font-medium">ideas into powerful applications</span>
                </p>
            </div>

            <!-- CTA Buttons -->
            <div class="flex flex-col sm:flex-row gap-6 justify-center mb-24 opacity-0 animate-fade-in-up mt-12"
                style="animation-delay: 1.1s;">
                <a href="#contact"
                    class="group bg-gradient-to-r from-[#052698] to-blue-500 text-white px-10 py-5 rounded-full font-bold text-lg hover:shadow-2xl hover:shadow-[#052698]/50 hover:scale-105 transition-all duration-300 flex items-center justify-center space-x-3 hover:from-blue-500 hover:to-[#052698]">
                    <span>Start Your Project</span>
                    <svg class="w-6 h-6 group-hover:translate-x-2 transition-transform" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 7l5 5m0 0l-5 5m5-5H6" />
                    </svg>
                </a>
                <a href="#portfolio"
                    class="group backdrop-blur-md bg-white/10 border-2 border-white/20 text-white px-10 py-5 rounded-full font-bold text-lg hover:bg-white/20 hover:border-[#052698] transition-all duration-300 flex items-center justify-center space-x-3">
                    <span>View Our Work</span>
                    <svg class="w-6 h-6 group-hover:translate-x-2 transition-transform" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                    </svg>
                </a>
            </div>

            <!-- Values Section -->
            <div class="mt-20 opacity-0 animate-fade-in-up" style="animation-delay: 1.4s;">
                <div class="backdrop-blur-md bg-white/10 border border-white/20 rounded-3xl p-12 max-w-6xl mx-auto shadow-2xl">
                    <h3 class="text-4xl font-bold mb-12 opacity-0 animate-fade-in-up bg-gradient-to-r from-blue-200 via-cyan-200 to-blue-100 bg-clip-text text-transparent" style="animation-delay: 1.6s;">
                        Why Choose BridgeIn?
                    </h3>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                        <!-- Reliable Solutions -->
                        <div class="flex flex-col items-center group opacity-0 animate-fade-in-up transform hover:scale-105 transition-all duration-300"
                            style="animation-delay: 1.8s;">
                            <div class="w-20 h-20 bg-gradient-to-br from-[#052698] to-blue-500 rounded-3xl flex items-center justify-center mb-6 transform group-hover:rotate-6 transition-all duration-300 shadow-xl shadow-[#052698]/50">
                                <svg class="w-10 h-10" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M2.166 4.999A11.954 11.954 0 0010 1.944 11.954 11.954 0 0017.834 5c.11.65.166 1.32.166 2.001 0 5.225-3.34 9.67-8 11.317C5.34 16.67 2 12.225 2 7c0-.682.057-1.35.166-2.001zm11.541 3.708a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <h4 class="font-bold text-2xl mb-3">Reliable</h4>
                            <p class="text-base opacity-90 text-center leading-relaxed">Rock-solid solutions you can depend on, built with industry best practices</p>
                        </div>

                        <!-- Intuitive Design -->
                        <div class="flex flex-col items-center group opacity-0 animate-fade-in-up transform hover:scale-105 transition-all duration-300"
                            style="animation-delay: 2s;">
                            <div class="w-20 h-20 bg-gradient-to-br from-blue-400 to-[#052698] rounded-3xl flex items-center justify-center mb-6 transform group-hover:rotate-6 transition-all duration-300 shadow-xl shadow-blue-400/50">
                                <svg class="w-10 h-10" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                                    <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <h4 class="font-bold text-2xl mb-3">Intuitive</h4>
                            <p class="text-base opacity-90 text-center leading-relaxed">User-friendly interfaces that delight customers and drive engagement</p>
                        </div>

                        <!-- Custom Solutions -->
                        <div class="flex flex-col items-center group opacity-0 animate-fade-in-up transform hover:scale-105 transition-all duration-300"
                            style="animation-delay: 2.2s;">
                            <div class="w-20 h-20 bg-gradient-to-br from-cyan-400 to-[#052698] rounded-3xl flex items-center justify-center mb-6 transform group-hover:rotate-6 transition-all duration-300 shadow-xl shadow-cyan-400/50">
                                <svg class="w-10 h-10" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M11 3a1 1 0 10-2 0v1a1 1 0 102 0V3zM15.657 5.757a1 1 0 00-1.414-1.414l-.707.707a1 1 0 001.414 1.414l.707-.707zM18 10a1 1 0 01-1 1h-1a1 1 0 110-2h1a1 1 0 011 1zM5.05 6.464A1 1 0 106.464 5.05l-.707-.707a1 1 0 00-1.414 1.414l.707.707zM5 10a1 1 0 01-1 1H3a1 1 0 110-2h1a1 1 0 011 1zM8 16v-1h4v1a2 2 0 11-4 0zM12 14c.015-.34.208-.646.477-.859a4 4 0 10-4.954 0c.27.213.462.519.476.859h4.002z" />
                                </svg>
                            </div>
                            <h4 class="font-bold text-2xl mb-3">Tailored Solutions</h4>
                            <p class="text-base opacity-90 text-center leading-relaxed">Custom-built applications designed specifically for your business goals</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Trust Indicators -->
            <div class="mt-16 opacity-0 animate-fade-in-up" style="animation-delay: 2.4s;">
                <div class="flex flex-wrap justify-center items-center gap-8 text-sm opacity-80">
                    <div class="flex items-center space-x-2">
                        <svg class="w-5 h-5 text-cyan-300" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                        </svg>
                        <span>100% Quality Assured</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <svg class="w-5 h-5 text-cyan-300" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                        </svg>
                        <span>On-Time Delivery</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <svg class="w-5 h-5 text-cyan-300" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                        </svg>
                        <span>Ongoing Support</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Video Player - Mobile Friendly -->
        <div class="absolute bottom-4 right-4 z-20">
            <div class="backdrop-blur-md bg-gradient-to-br from-blue-600/20 via-cyan-400/20 to-blue-700/20 border border-blue-300/30 rounded-xl p-1 transition-transform duration-300 hover:scale-105">
                <video
                    autoplay
                    muted
                    loop
                    playsinline
                    class="w-24 h-16 sm:w-32 sm:h-20 md:w-48 md:h-28 rounded-lg object-cover">
                    <source src="/asset/hero-video.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <div class="mt-1 text-center">
                    <p class="text-[8px] sm:text-[10px] md:text-sm font-medium text-white/90">Watch Our Story</p>
                </div>
            </div>
        </div>

        <!-- Scroll Down Indicator -->
        <div class="absolute bottom-8 sm:bottom-16 left-1/2 transform -translate-x-1/2 opacity-0 animate-bounce z-20"
            style="animation-delay: 2.5s;">
    </section>

    <!-- Services Section -->
    <section id="services" class="py-20 px-6 bg-gradient-to-br from-gray-50 via-blue-50/30 to-gray-50 relative overflow-hidden">
        <!-- Decorative Background Elements -->
        <div class="absolute top-20 right-10 w-64 h-64 bg-blue-200 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-pulse"></div>
        <div class="absolute bottom-20 left-10 w-64 h-64 bg-purple-200 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-pulse" style="animation-delay: 2s;"></div>

        <div class="container mx-auto relative z-10">
            <div class="mb-16 fade-up">
                <h2 class="text-3xl md:text-4xl font-bold text-center mb-4"
                    data-aos="fade-up">
                    Our Services
                </h2>
                <p class="text-center text-gray-600 max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="100">
                    Use a few services or use them all, let the BridgeIn team take care of all of your technology needs.
                </p>
            </div>

            <div class="max-w-6xl mx-auto space-y-16">

                <!-- Website Development -->
                <div class="grid md:grid-cols-2 gap-12 items-center" data-section="website">

                    <!-- Content (LEFT) -->
                    <div class="slide-in-left">
                        <h3 class="text-3xl font-bold mb-6 text-gray-900">Website Development</h3>
                        <p class="text-gray-600 mb-6 leading-relaxed">
                            We provide professional website development services tailored to your business needs.
                            From landing pages to complex e-commerce platforms, our team is ready to bring your digital
                            vision to life.
                        </p>

                        <ul class="space-y-3 text-gray-700">
                            <li class="flex items-start gap-3 slide-in-left stagger-1">
                                <svg class="w-5 h-5 text-blue-600 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                <span>Engaging and high-converting landing pages</span>
                            </li>

                            <li class="flex items-start gap-3 slide-in-left stagger-2">
                                <svg class="w-5 h-5 text-blue-600 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                <span>Modern and well-designed company profile websites</span>
                            </li>

                            <li class="flex items-start gap-3 slide-in-left stagger-3">
                                <svg class="w-5 h-5 text-blue-600 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                <span>Scalable and fully featured e-commerce platforms</span>
                            </li>

                            <li class="flex items-start gap-3 slide-in-left stagger-4">
                                <svg class="w-5 h-5 text-blue-600 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                <span>SEO optimization for higher search engine ranking</span>
                            </li>
                        </ul>
                    </div>

                    <!-- Image (RIGHT) -->
                    <div class="slide-in-right">
                        <div class="image-wrapper rounded-2xl overflow-hidden shadow-lg">
                            <img src="asset/web.png"
                                alt="Website Development"
                                class="w-full h-full object-cover">
                        </div>
                    </div>
                </div>

                <!-- Mobile Development -->
                <div class="grid md:grid-cols-2 gap-12 items-center mt-20" data-section="mobile">
                    <!-- Image (LEFT) -->
                    <div class="order-2 md:order-1 slide-in-left">
                        <div class="image-wrapper rounded-2xl overflow-hidden shadow-lg">
                            <img src="asset/mobile.png"
                                alt="Mobile Development"
                                class="w-full h-full object-cover">
                        </div>
                    </div>

                    <!-- Content (RIGHT) -->
                    <div class="order-1 md:order-2 slide-in-right">
                        <h3 class="text-3xl font-bold mb-6 text-gray-900">Mobile Development</h3>
                        <p class="text-gray-600 mb-6 leading-relaxed">
                            We build modern mobile applications that are fast, responsive, and user-friendly to support your business needs.
                        </p>

                        <ul class="space-y-3 text-gray-700">
                            <li class="flex items-start gap-3 slide-in-right stagger-1">
                                <svg class="w-5 h-5 text-purple-600 mt-0.5 flex-shrink-0" fill="currentColor"
                                    viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span>High-performance iOS applications</span>
                            </li>

                            <li class="flex items-start gap-3 slide-in-right stagger-2">
                                <svg class="w-5 h-5 text-purple-600 mt-0.5 flex-shrink-0" fill="currentColor"
                                    viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span>Modern and fast Android applications</span>
                            </li>

                            <li class="flex items-start gap-3 slide-in-right stagger-3">
                                <svg class="w-5 h-5 text-purple-600 mt-0.5 flex-shrink-0" fill="currentColor"
                                    viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span>Cross-Platform Apps (Flutter / React Native)</span>
                            </li>

                            <li class="flex items-start gap-3 slide-in-right stagger-4">
                                <svg class="w-5 h-5 text-purple-600 mt-0.5 flex-shrink-0" fill="currentColor"
                                    viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span>Custom POS systems & business applications</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- E-Commerce Section -->
                <div class="grid md:grid-cols-2 gap-12 items-center" data-section="E-Commerce">
                    <!-- Content (LEFT) -->
                    <div class="slide-in-left">
                        <h3 class="text-3xl font-bold mb-6 text-gray-900">E-Commerce</h3>
                        <p class="text-gray-600 mb-6 leading-relaxed">
                            We create modern and scalable e-commerce solutions tailored to your business.
                            From single-brand stores to multi-vendor marketplaces, our platforms are optimized
                            for speed, security, and seamless user experience.
                        </p>

                        <ul class="space-y-3 text-gray-700">
                            <li class="flex items-start gap-3 slide-in-left stagger-1">
                                <svg class="w-5 h-5 text-blue-600 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                <span>Fully-featured Online Store with product catalog and checkout</span>
                            </li>

                            <li class="flex items-start gap-3 slide-in-left stagger-2">
                                <svg class="w-5 h-5 text-blue-600 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                <span>Payment gateway integration (QRIS, e-wallet, virtual accounts)</span>
                            </li>

                            <li class="flex items-start gap-3 slide-in-left stagger-3">
                                <svg class="w-5 h-5 text-blue-600 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                <span>Multi-vendor marketplace capabilities</span>
                            </li>

                            <li class="flex items-start gap-3 slide-in-left stagger-4">
                                <svg class="w-5 h-5 text-blue-600 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                <span>Inventory and order management with ERP integration</span>
                            </li>

                            <li class="flex items-start gap-3 slide-in-left stagger-5">
                                <svg class="w-5 h-5 text-blue-600 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                <span>SEO optimized for better visibility and traffic</span>
                            </li>
                        </ul>
                    </div>

                    <!-- Image (RIGHT) -->
                    <div class="slide-in-right">
                        <div class="image-wrapper rounded-2xl overflow-hidden">
                            <img src="asset/e-commerce.png"
                                alt="E-Commerce Platform"
                                class="w-full h-full object-cover">
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
                        <a href="https://www.instagram.com/bridgein.tech?igsh=MWR5YmtuZG9jNmk2dQ==" class="w-10 h-10 bg-white/10 hover:bg-white/20 rounded-full flex items-center justify-center transition-all duration-300 hover:scale-110">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                            </svg>
                        </a>
                        <a href="https://www.instagram.com/bridgein.tech?igsh=MWR5YmtuZG9jNmk2dQ==" class="w-10 h-10 bg-white/10 hover:bg-white/20 rounded-full flex items-center justify-center transition-all duration-300 hover:scale-110">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                            </svg>
                        </a>
                        <a href="https://www.instagram.com/bridgein.tech?igsh=MWR5YmtuZG9jNmk2dQ==" class="w-10 h-10 bg-white/10 hover:bg-white/20 rounded-full flex items-center justify-center transition-all duration-300 hover:scale-110">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z" />
                            </svg>
                        </a>
                        <a href="https://www.instagram.com/bridgein.tech?igsh=MWR5YmtuZG9jNmk2dQ==" class="w-10 h-10 bg-white/10 hover:bg-white/20 rounded-full flex items-center justify-center transition-all duration-300 hover:scale-110">
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

    prevBtn.style.opacity = "0.3";
    prevBtn.style.cursor = "not-allowed";
    prevBtn.disabled = true;

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

    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const slideElements = entry.target.querySelectorAll('.slide-in-left, .slide-in-right');

                slideElements.forEach(element => {
                    element.classList.add('visible');
                });

                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    document.querySelectorAll('[data-section]').forEach(section => {
        observer.observe(section);
    });

    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');

    mobileMenuButton.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });
</script>

</html>