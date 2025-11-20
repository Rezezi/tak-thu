<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Business Solutions Inc.')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    animation: {
                        'fade-in': 'fadeIn 0.5s ease-in-out',
                        'slide-up': 'slideUp 0.6s ease-out',
                        'bounce-gentle': 'bounceGentle 2s infinite'
                    },
                    backdropBlur: {
                        'xs': '2px'
                    }
                }
            }
        }
    </script>
    <style>
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes slideUp {
            from { transform: translateY(20px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }

        @keyframes bounceGentle {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-5px); }
        }
    </style>
</head>
<body class="bg-gradient-to-br from-slate-50 to-white min-h-screen flex flex-col">
    <nav class="bg-white/80 backdrop-blur-md border-b border-slate-200/50 shadow-sm z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <a href="/" class="text-2xl font-bold text-gray-900">Business Solutions</a>
                </div>
                <div class="hidden md:flex items-center space-x-8">
                    <a href="/" class="text-gray-900 hover:text-blue-600 px-3 py-2 font-medium transition-colors duration-200">Home</a>
                    <a href="/about" class="text-gray-500 hover:text-blue-600 px-3 py-2 font-medium transition-colors duration-200">About</a>
                    <a href="/services" class="text-gray-500 hover:text-blue-600 px-3 py-2 font-medium transition-colors duration-200">Services</a>
                    <a href="/contact" class="text-gray-500 hover:text-blue-600 px-3 py-2 font-medium transition-colors duration-200">Contact</a>
                    <a href="/admin/login" class="text-gray-500 hover:text-blue-600 px-3 py-2 font-medium transition-colors duration-200">Admin</a>
                </div>
                <div class="-mr-2 flex items-center md:hidden">
                    <button id="mobile-menu-button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-blue-500">
                        <span class="sr-only">Open main menu</span>
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <div class="hidden md:hidden" id="mobile-menu">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                <a href="/" class="block px-3 py-2 rounded-md text-base font-medium text-gray-900 hover:text-blue-600">Home</a>
                <a href="/about" class="block px-3 py-2 rounded-md text-base font-medium text-gray-500 hover:text-blue-600">About</a>
                <a href="/services" class="block px-3 py-2 rounded-md text-base font-medium text-gray-500 hover:text-blue-600">Services</a>
                <a href="/contact" class="block px-3 py-2 rounded-md text-base font-medium text-gray-500 hover:text-blue-600">Contact</a>
                <a href="/admin/login" class="block px-3 py-2 rounded-md text-base font-medium text-gray-500 hover:text-blue-600">Admin</a>
            </div>
        </div>
    </nav>

    <main class="flex-grow">
        @yield('content')
    </main>

    <footer class="bg-gradient-to-r from-slate-700 to-slate-900 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-xl font-semibold mb-4">Company Info</h3>
                    <p class="text-slate-300 mb-4">We provide innovative business solutions to help your company grow and succeed in today's competitive market.</p>
                    <p class="text-slate-300">© {{ date('Y') }} Business Solutions Inc. All rights reserved.</p>
                </div>
                <div>
                    <h3 class="text-xl font-semibold mb-4">Quick Links</h3>
                    <ul class="space-y-2">
                        <li><a href="/" class="text-slate-300 hover:text-white transition-colors duration-200">Home</a></li>
                        <li><a href="/about" class="text-slate-300 hover:text-white transition-colors duration-200">About Us</a></li>
                        <li><a href="/services" class="text-slate-300 hover:text-white transition-colors duration-200">Services</a></li>
                        <li><a href="/contact" class="text-slate-300 hover:text-white transition-colors duration-200">Contact</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-xl font-semibold mb-4">Our Services</h3>
                    <ul class="space-y-2">
                        <li><a href="/services#software" class="text-slate-300 hover:text-white transition-colors duration-200">Software Development</a></li>
                        <li><a href="/services#cloud" class="text-slate-300 hover:text-white transition-colors duration-200">Cloud Solutions</a></li>
                        <li><a href="/services#analytics" class="text-slate-300 hover:text-white transition-colors duration-200">Data Analytics</a></li>
                        <li><a href="/services#security" class="text-slate-300 hover:text-white transition-colors duration-200">Cybersecurity</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-xl font-semibold mb-4">Contact Us</h3>
                    <address class="not-italic text-slate-300 mb-4">
                        123 Business Street<br>
                        Suite 100<br>
                        New York, NY 10001
                    </address>
                    <p class="text-slate-300 mb-2">Phone: (123) 456-7890</p>
                    <p class="text-slate-300">Email: info@businesssolutions.com</p>
                </div>
            </div>
            <div class="mt-8 pt-8 border-t border-slate-700 text-center text-slate-400">
                <p>Made with ❤️ by LaraCopilot</p>
            </div>
        </div>
    </footer>

    <script>
        $(document).ready(function() {
            $('#mobile-menu-button').click(function() {
                $('#mobile-menu').toggleClass('hidden');
            });

            // Smooth scrolling for anchor links
            $('a[href*="#"]:not([href="#"])').click(function() {
                if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
                    var target = $(this.hash);
                    target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
                    if (target.length) {
                        $('html, body').animate({
                            scrollTop: target.offset().top - 80
                        }, 1000);
                        return false;
                    }
                }
            });
        });
    </script>
</body>
</html>