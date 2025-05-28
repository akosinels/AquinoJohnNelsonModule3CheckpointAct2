<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Laravel App')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        dark: {
                            'bg-primary': '#0f172a',
                            'bg-secondary': '#1e293b',
                            'text-primary': '#f8fafc',
                            'text-secondary': '#94a3b8',
                            'border': '#334155',
                            'accent': '#3b82f6'
                        }
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-dark-bg-primary text-dark-text-primary min-h-screen">
    <!-- Navigation -->
    <nav class="bg-dark-bg-secondary border-b border-dark-border">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex">
                    <div class="flex-shrink-0 flex items-center">
                        <a href="/" class="text-xl font-bold text-dark-text-primary">Laravel App</a>
                    </div>
                    <div class="hidden sm:ml-6 sm:flex sm:space-x-8">
                        <a href="/" class="border-transparent text-dark-text-secondary hover:text-dark-text-primary hover:border-dark-accent inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                            Home
                        </a>
                        <a href="/customer/1/John/123" class="border-transparent text-dark-text-secondary hover:text-dark-text-primary hover:border-dark-accent inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                            Sample Customer
                        </a>
                        <a href="/item/1/Product/100" class="border-transparent text-dark-text-secondary hover:text-dark-text-primary hover:border-dark-accent inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                            Sample Item
                        </a>
                        <a href="/order/1/John/ORD001/2024-03-20" class="border-transparent text-dark-text-secondary hover:text-dark-text-primary hover:border-dark-accent inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                            Sample Order
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Page Content -->
    <main class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-dark-bg-secondary border-t border-dark-border mt-auto">
        <div class="max-w-7xl mx-auto py-4 px-4 sm:px-6 lg:px-8">
            <p class="text-center text-dark-text-secondary text-sm">
                &copy; {{ date('Y') }} Laravel App. All rights reserved.
            </p>
        </div>
    </footer>
</body>
</html> 