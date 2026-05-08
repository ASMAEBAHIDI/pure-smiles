<!DOCTYPE html>
<html lang="fr" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Admin - Pure Smiles</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
    
        [data-theme="light"] {
            --bg-body: #f0f2f5;
            --bg-card: #ffffff;
            --text-primary: #1e293b;
            --text-secondary: #64748b;
            --border-color: #e2e8f0;
            --sidebar-bg: linear-gradient(135deg, #1e293b 0%, #0f172a 100%);
            --sidebar-text: #94a3b8;
            --topbar-bg: #ffffff;
            --shadow: rgba(0,0,0,0.05);
        }

        [data-theme="dark"] {
            --bg-body: #0f172a;
            --bg-card: #1e293b;
            --text-primary: #f1f5f9;
            --text-secondary: #94a3b8;
            --border-color: #334155;
            --sidebar-bg: linear-gradient(135deg, #0f172a 0%, #020617 100%);
            --sidebar-text: #64748b;
            --topbar-bg: #1e293b;
            --shadow: rgba(0,0,0,0.2);
        }

        body {
            background: var(--bg-body);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            transition: background 0.3s ease;
            color: var(--text-primary);
        }

        /* Sidebar */
        .admin-sidebar {
            width: 280px;
            background: var(--sidebar-bg);
            min-height: 100vh;
            position: fixed;
            left: 0;
            top: 0;
            transition: all 0.3s;
            z-index: 1000;
        }

        .admin-content {
            margin-left: 280px;
            padding: 20px;
            transition: all 0.3s;
        }

        .admin-sidebar .nav-link {
            color: var(--sidebar-text);
            padding: 12px 20px;
            border-radius: 10px;
            margin-bottom: 5px;
            transition: all 0.3s;
        }

        .admin-sidebar .nav-link:hover {
            background: #334155;
            color: white;
        }

        .admin-sidebar .nav-link.active {
            background: #002093;
            color: white;
        }

        .admin-sidebar .nav-link i {
            width: 25px;
            margin-right: 10px;
        }

        .admin-topbar {
            background: var(--topbar-bg);
            padding: 15px 20px;
            border-radius: 10px;
            margin-bottom: 20px;
            box-shadow: 0 2px 4px var(--shadow);
            transition: all 0.3s;
        }

        .card, .stat-card {
            background: var(--bg-card);
            border: 1px solid var(--border-color);
            transition: all 0.3s;
        }

        .text-muted {
            color: var(--text-secondary) !important;
        }

        .table {
            color: var(--text-primary);
        }

        .table-light {
            background-color: var(--border-color);
        }

        .alert {
            background: var(--bg-card);
            border-color: var(--border-color);
        }

    
        .theme-toggle {
            background: var(--bg-body);
            border: 1px solid var(--border-color);
            border-radius: 50px;
            padding: 8px 16px;
            cursor: pointer;
            transition: all 0.3s;
            color: var(--text-primary);
        }

        .theme-toggle:hover {
            transform: scale(1.05);
        }

        @media (max-width: 768px) {
            .admin-sidebar {
                transform: translateX(-100%);
            }
            .admin-sidebar.show {
                transform: translateX(0);
            }
            .admin-content {
                margin-left: 0;
            }
        }
    </style>
</head>
<body>

    <div class="admin-sidebar" id="adminSidebar">
        <div class="p-4">
            <div class="text-center mb-4">
                
                <h4 class="text-white mt-2">Pure Smiles</h4>
                <p class="text-secondary small">Administration</p>
            </div>
            <hr class="bg-secondary">
            <nav class="nav flex-column">
                <a class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}" href="{{ route('admin.dashboard') }}">
                    <i class="fas fa-tachometer-alt"></i> Dashboard
                </a>
                <a class="nav-link {{ request()->routeIs('admin.doctors.*') ? 'active' : '' }}" href="{{ route('admin.doctors.index') }}">
                    <i class="fas fa-user-md"></i> Médecins
                </a>
                <a class="nav-link {{ request()->routeIs('admin.services.*') ? 'active' : '' }}" href="{{ route('admin.services.index') }}">
                    <i class="fas fa-tooth"></i> Services
                </a>
                <a class="nav-link {{ request()->routeIs('admin.appointments.*') ? 'active' : '' }}" href="{{ route('admin.appointments.index') }}">
                    <i class="fas fa-calendar-check"></i> Rendez-vous
                </a>
                <a class="nav-link {{ request()->routeIs('admin.testimonials.*') ? 'active' : '' }}" href="{{ route('admin.testimonials.index') }}">
                    <i class="fas fa-star"></i> Témoignages
                </a>
            </nav>
            <hr class="bg-secondary my-4">
            <nav class="nav flex-column">
                <a class="nav-link" href="{{ route('home') }}">
                    <i class="fas fa-globe"></i> Voir le site
                </a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="nav-link w-100 text-start btn btn-link" style="border: none;">
                        <i class="fas fa-sign-out-alt"></i> Déconnexion
                    </button>
                </form>
            </nav>
        </div>
    </div>

    
    <div class="admin-content">
        <div class="admin-topbar d-flex justify-content-between align-items-center">
            <div>
                <button class="btn btn-sm btn-outline-secondary d-md-none" id="toggleSidebar">
                    <i class="fas fa-bars"></i>
                </button>
                <span class="ms-2">Bonjour, <strong>{{ auth()->user()->name }}</strong></span>
            </div>
            <div class="d-flex align-items-center gap-3">
                
                <button class="theme-toggle" id="themeToggle">
                    <i class="fas fa-sun me-1" id="themeIcon"></i>
                    <span id="themeText">Clair</span>
                </button>
                
            </div>
        </div>

        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="fas fa-check-circle me-2"></i> {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <i class="fas fa-exclamation-triangle me-2"></i> {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        
        document.getElementById('toggleSidebar')?.addEventListener('click', function() {
            document.getElementById('adminSidebar').classList.toggle('show');
        });

        
        const themeToggle = document.getElementById('themeToggle');
        const themeIcon = document.getElementById('themeIcon');
        const themeText = document.getElementById('themeText');
        

        const savedTheme = localStorage.getItem('adminTheme') || 'light';
        document.documentElement.setAttribute('data-theme', savedTheme);
        updateThemeUI(savedTheme);

        function updateThemeUI(theme) {
            if (theme === 'dark') {
                themeIcon.className = 'fas fa-moon me-1';
                themeText.textContent = 'Sombre';
            } else {
                themeIcon.className = 'fas fa-sun me-1';
                themeText.textContent = 'Clair';
            }
        }

        themeToggle?.addEventListener('click', () => {
            const currentTheme = document.documentElement.getAttribute('data-theme');
            const newTheme = currentTheme === 'light' ? 'dark' : 'light';
            document.documentElement.setAttribute('data-theme', newTheme);
            localStorage.setItem('adminTheme', newTheme);
            updateThemeUI(newTheme);
        });
    </script>
</body>
</html>