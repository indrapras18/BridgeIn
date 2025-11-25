<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BridgeIn - Digital Transformation Partner</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
        .gradient-bg {
            background: linear-gradient(135deg, #1e40af 0%, #3b82f6 50%, #60a5fa 100%);
        }
        .wave-bg {
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1440 320'%3E%3Cpath fill='%233b82f6' fill-opacity='0.3' d='M0,96L48,112C96,128,192,160,288,160C384,160,480,128,576,122.7C672,117,768,139,864,149.3C960,160,1056,160,1152,138.7C1248,117,1344,75,1392,53.3L1440,32L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z'%3E%3C/path%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: bottom;
            background-size: cover;
        }
    </style>
</head>
<body class="bg-white">
    <!-- Navigation -->
    <nav class="bg-blue-900 text-white py-4 px-6">
        <div class="container mx-auto flex justify-between items-center">
            <div class="flex items-center space-x-2">
                <div class="w-8 h-8 bg-blue-500 rounded-full flex items-center justify-center">
                    <span class="text-white font-bold">B</span>
                </div>
                <span class="text-xl font-bold">BridgeIn.</span>
            </div>
            <ul class="hidden md:flex space-x-8">
                <li><a href="#" class="hover:text-blue-300 transition">Home</a></li>
                <li><a href="#services" class="hover:text-blue-300 transition">Services</a></li>
                <li><a href="#portfolio" class="hover:text-blue-300 transition">Portfolio</a></li>
                <li><a href="#contact" class="hover:text-blue-300 transition">Contact</a></li>
            </ul>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="gradient-bg wave-bg text-white py-20 px-6 relative overflow-hidden">
        <div class="container mx-auto text-center relative z-10">
            <h1 class="text-4xl md:text-6xl font-bold mb-6">
                Build Better, Faster, and Smarter
            </h1>
            <p class="text-lg md:text-xl mb-8 max-w-3xl mx-auto opacity-90">
                BridgeIn is your trusted partner in Digital Transformation.<br>
                We deliver cutting-edge software solutions and IT consulting services to<br>
                help businesses thrive in the digital era.
            </p>
            <button class="bg-white text-blue-600 px-8 py-3 rounded-full font-semibold hover:bg-blue-50 transition shadow-lg">
                Contact Us
            </button>
            
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
    </section>

    <!-- Services Section -->
    <section id="services" class="py-20 px-6 bg-gray-50">
        <div class="container mx-auto">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-4">Our Services</h2>
            <p class="text-center text-gray-600 mb-12">
                Use a few services or use them all, let the BridgeIn team<br>
                take care of all of your technology needs.
            </p>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 max-w-6xl mx-auto">
                <!-- Website Development -->
                <div class="bg-blue-700 text-white rounded-2xl p-8 hover:shadow-xl transition">
                    <div class="w-12 h-12 bg-white/20 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Website Development</h3>
                    <ul class="space-y-2 text-sm opacity-90">
                        <li>• Landing Page</li>
                        <li>• Company Profile</li>
                        <li>• E-Commerce</li>
                    </ul>
                </div>

                <!-- Mobile Development -->
                <div class="bg-blue-800 text-white rounded-2xl p-8 hover:shadow-xl transition">
                    <div class="w-12 h-12 bg-white/20 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M7 2a2 2 0 00-2 2v12a2 2 0 002 2h6a2 2 0 002-2V4a2 2 0 00-2-2H7zm3 14a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Mobile Development</h3>
                    <ul class="space-y-2 text-sm opacity-90">
                        <li>• iOS Apps</li>
                        <li>• Android Apps</li>
                    </ul>
                </div>

                <!-- E-Commerce -->
                <div class="bg-blue-700 text-white rounded-2xl p-8 hover:shadow-xl transition">
                    <div class="w-12 h-12 bg-white/20 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-3">E-Commerce</h3>
                    <ul class="space-y-2 text-sm opacity-90">
                        <li>• Online Store</li>
                        <li>• Payment Integration</li>
                    </ul>
                </div>

                <!-- Point of Sales -->
                <div class="bg-blue-800 text-white rounded-2xl p-8 hover:shadow-xl transition">
                    <div class="w-12 h-12 bg-white/20 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M4 4a2 2 0 00-2 2v1h16V6a2 2 0 00-2-2H4z"></path>
                            <path fill-rule="evenodd" d="M18 9H2v5a2 2 0 002 2h12a2 2 0 002-2V9zM4 13a1 1 0 011-1h1a1 1 0 110 2H5a1 1 0 01-1-1zm5-1a1 1 0 100 2h1a1 1 0 100-2H9z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Point of Sales</h3>
                    <ul class="space-y-2 text-sm opacity-90">
                        <li>• Cashier System</li>
                        <li>• Inventory Management</li>
                    </ul>
                </div>

                <!-- Digital Marketing -->
                <div class="bg-blue-700 text-white rounded-2xl p-8 hover:shadow-xl transition">
                    <div class="w-12 h-12 bg-white/20 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M2 5a2 2 0 012-2h7a2 2 0 012 2v4a2 2 0 01-2 2H9l-3 3v-3H4a2 2 0 01-2-2V5z"></path>
                            <path d="M15 7v2a4 4 0 01-4 4H9.828l-1.766 1.767c.28.149.599.233.938.233h2l3 3v-3h2a2 2 0 002-2V9a2 2 0 00-2-2h-1z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Digital Marketing</h3>
                    <ul class="space-y-2 text-sm opacity-90">
                        <li>• SEO Optimization</li>
                        <li>• Social Media Ads</li>
                        <li>• Content Marketing</li>
                    </ul>
                </div>

                <!-- Enterprise System -->
                <div class="bg-blue-800 text-white rounded-2xl p-8 hover:shadow-xl transition">
                    <div class="w-12 h-12 bg-white/20 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M6 6V5a3 3 0 013-3h2a3 3 0 013 3v1h2a2 2 0 012 2v3.57A22.952 22.952 0 0110 13a22.95 22.95 0 01-8-1.43V8a2 2 0 012-2h2zm2-1a1 1 0 011-1h2a1 1 0 011 1v1H8V5zm1 5a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                            <path d="M2 13.692V16a2 2 0 002 2h12a2 2 0 002-2v-2.308A24.974 24.974 0 0110 15c-2.796 0-5.487-.46-8-1.308z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Enterprise System</h3>
                    <ul class="space-y-2 text-sm opacity-90">
                        <li>• ERP System</li>
                        <li>• Custom Software</li>
                        <li>• Business Reporting</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Tech Stack Section -->
    <section class="py-20 px-6 bg-white">
        <div class="container mx-auto">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-4">Tech Stack</h2>
            <p class="text-center text-gray-600 mb-12">Powered by modern and reliable technologies</p>
            
            <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-8 gap-8 max-w-6xl mx-auto items-center">
                <div class="flex flex-col items-center">
                    <div class="w-16 h-16 bg-gray-100 rounded-lg flex items-center justify-center mb-2">
                        <span class="text-2xl font-bold text-blue-600">N</span>
                    </div>
                    <span class="text-sm text-gray-600">Next.js</span>
                </div>
                <div class="flex flex-col items-center">
                    <div class="w-16 h-16 bg-gray-100 rounded-lg flex items-center justify-center mb-2">
                        <span class="text-2xl font-bold text-blue-400">R</span>
                    </div>
                    <span class="text-sm text-gray-600">React</span>
                </div>
                <div class="flex flex-col items-center">
                    <div class="w-16 h-16 bg-gray-100 rounded-lg flex items-center justify-center mb-2">
                        <span class="text-2xl font-bold text-green-600">V</span>
                    </div>
                    <span class="text-sm text-gray-600">Vue.js</span>
                </div>
                <div class="flex flex-col items-center">
                    <div class="w-16 h-16 bg-gray-100 rounded-lg flex items-center justify-center mb-2">
                        <span class="text-2xl font-bold text-indigo-600">L</span>
                    </div>
                    <span class="text-sm text-gray-600">Laravel</span>
                </div>
                <div class="flex flex-col items-center">
                    <div class="w-16 h-16 bg-gray-100 rounded-lg flex items-center justify-center mb-2">
                        <span class="text-2xl font-bold text-green-500">N</span>
                    </div>
                    <span class="text-sm text-gray-600">Node.js</span>
                </div>
                <div class="flex flex-col items-center">
                    <div class="w-16 h-16 bg-gray-100 rounded-lg flex items-center justify-center mb-2">
                        <span class="text-2xl font-bold text-blue-500">TS</span>
                    </div>
                    <span class="text-sm text-gray-600">TypeScript</span>
                </div>
                <div class="flex flex-col items-center">
                    <div class="w-16 h-16 bg-gray-100 rounded-lg flex items-center justify-center mb-2">
                        <span class="text-2xl font-bold text-purple-600">F</span>
                    </div>
                    <span class="text-sm text-gray-600">Flutter</span>
                </div>
                <div class="flex flex-col items-center">
                    <div class="w-16 h-16 bg-gray-100 rounded-lg flex items-center justify-center mb-2">
                        <span class="text-2xl font-bold text-gray-700">DB</span>
                    </div>
                    <span class="text-sm text-gray-600">Database</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Previous Works Section -->
    <section id="portfolio" class="py-20 px-6 bg-gray-50">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Our Previous Works</h2>
            <p class="text-gray-600 mb-12 max-w-2xl mx-auto">
                Some cool list of how we have done a project and<br>
                delivered quality that met our client's expectations
            </p>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl mx-auto">
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition">
                    <div class="h-48 bg-gradient-to-br from-blue-400 to-blue-600"></div>
                    <div class="p-6">
                        <h3 class="font-bold text-xl mb-2">Project Name 1</h3>
                        <p class="text-gray-600 text-sm">Web Development</p>
                    </div>
                </div>
                
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition">
                    <div class="h-48 bg-gradient-to-br from-purple-400 to-purple-600"></div>
                    <div class="p-6">
                        <h3 class="font-bold text-xl mb-2">Project Name 2</h3>
                        <p class="text-gray-600 text-sm">Mobile App</p>
                    </div>
                </div>
                
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition">
                    <div class="h-48 bg-gradient-to-br from-green-400 to-green-600"></div>
                    <div class="p-6">
                        <h3 class="font-bold text-xl mb-2">Project Name 3</h3>
                        <p class="text-gray-600 text-sm">Enterprise System</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-blue-900 text-white py-12 px-6">
        <div class="container mx-auto text-center">
            <div class="flex items-center justify-center space-x-2 mb-4">
                <div class="w-10 h-10 bg-blue-500 rounded-full flex items-center justify-center">
                    <span class="text-white font-bold">B</span>
                </div>
                <span class="text-2xl font-bold">BridgeIn.</span>
            </div>
            <p class="text-blue-200 mb-6">Your Trusted Partner in Digital Transformation</p>
            <div class="flex justify-center space-x-6 mb-6">
                <a href="#" class="hover:text-blue-300 transition">Home</a>
                <a href="#services" class="hover:text-blue-300 transition">Services</a>
                <a href="#portfolio" class="hover:text-blue-300 transition">Portfolio</a>
                <a href="#contact" class="hover:text-blue-300 transition">Contact</a>
            </div>
            <p class="text-sm text-blue-300">&copy; 2024 BridgeIn. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>