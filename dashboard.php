<!DOCTYPE html>
<html lang="id" class="h-full bg-gray-50">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rinci. - Sistem Informasi Analisis Pengeluaran Mahasiswa</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Chart.js CDN -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- Google Fonts: Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        brand: {
                            50: '#fff7ed',
                            100: '#ffedd5',
                            500: '#f97316',
                            600: '#ea580c',
                            PRIMARY: '#FF6B00',
                            DARK: '#111827',
                            MUTED: '#6B7280'
                        }
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    <style>
        body { font-family: 'Inter', sans-serif; }
        .custom-scrollbar::-webkit-scrollbar { width: 6px; height: 6px; }
        .custom-scrollbar::-webkit-scrollbar-track { background: #f1f1f1; }
        .custom-scrollbar::-webkit-scrollbar-thumb { background: #d1d5db; border-radius: 4px; }
        .custom-scrollbar::-webkit-scrollbar-thumb:hover { background: #9ca3af; }
        
        @media print {
            .no-print { display: none !important; }
            .print-only { display: block !important; }
            body { background: white !important; }
            .print-container { width: 100% !important; margin: 0 !important; padding: 0 !important; }
        }
    </style>
</head>
<body class="h-full text-gray-800 bg-gray-50 flex flex-col md:flex-row overflow-hidden">

    <!-- Mobile Header -->
    <header class="md:hidden bg-white border-b border-gray-200 p-4 flex justify-between items-center z-20 no-print">
        <div class="flex items-center space-x-2">
            <div class="w-8 h-8 rounded-lg bg-orange-600 flex items-center justify-center text-white font-bold text-xl">R</div>
            <span class="text-xl font-bold tracking-tight text-gray-900">Rinci<span class="text-orange-600">.</span></span>
        </div>
        <button id="mobile-menu-btn" class="p-2 rounded-md text-gray-600 hover:bg-gray-100 focus:outline-none">
            <i data-lucide="menu" class="w-6 h-6"></i>
        </button>
    </header>

    <!-- Overlay for mobile drawer -->
    <div id="mobile-overlay" class="fixed inset-0 bg-black/50 z-30 hidden md:hidden transition-opacity duration-300"></div>

    <!-- Sidebar Navigation -->
    <aside id="sidebar" class="fixed md:static inset-y-0 left-0 transform -translate-x-full md:translate-x-0 w-64 bg-white border-r border-gray-200 flex flex-col justify-between z-40 transition-transform duration-300 ease-in-out h-full no-print">
        <div class="flex flex-col h-full">
            <!-- App Logo -->
            <div class="p-6 border-b border-gray-100 hidden md:flex items-center space-x-3">
                <div class="w-9 h-9 rounded-xl bg-gradient-to-tr from-orange-600 to-amber-500 flex items-center justify-center text-white font-bold text-xl shadow-md shadow-orange-500/20">R</div>
                <div>
                    <h1 class="text-xl font-bold tracking-tight text-gray-900">Rinci<span class="text-orange-600">.</span></h1>
                    <p class="text-xs text-gray-400 font-medium">Sistem Analisis Keuangan</p>
                </div>
            </div>

            <!-- Navigation Links -->
            <nav class="p-4 space-y-1 flex-1 overflow-y-auto custom-scrollbar">
                <p class="px-3 text-xs font-semibold text-gray-400 uppercase tracking-wider mb-2">Menu Utama</p>
                
                <a href="#dashboard" onclick="switchTab('dashboard')" id="nav-dashboard" class="nav-item flex items-center space-x-3 px-3 py-2.5 rounded-lg text-sm font-medium text-orange-600 bg-orange-50 transition-colors">
                    <i data-lucide="layout-dashboard" class="w-5 h-5"></i>
                    <span>Dashboard</span>
                </a>
                
                <a href="#transaksi" onclick="switchTab('transaksi')" id="nav-transaksi" class="nav-item flex items-center space-x-3 px-3 py-2.5 rounded-lg text-sm font-medium text-gray-600 hover:bg-gray-50 hover:text-gray-900 transition-colors">
                    <i data-lucide="arrow-left-right" class="w-5 h-5"></i>
                    <span>Transaksi</span>
                </a>

                <a href="#anggaran" onclick="switchTab('anggaran')" id="nav-anggaran" class="nav-item flex items-center space-x-3 px-3 py-2.5 rounded-lg text-sm font-medium text-gray-600 hover:bg-gray-50 hover:text-gray-900 transition-colors">
                    <i data-lucide="pie-chart" class="w-5 h-5"></i>
                    <span>Anggaran</span>
                </a>

                <a href="#analisis" onclick="switchTab('analisis')" id="nav-analisis" class="nav-item flex items-center space-x-3 px-3 py-2.5 rounded-lg text-sm font-medium text-gray-600 hover:bg-gray-50 hover:text-gray-900 transition-colors">
                    <i data-lucide="line-chart" class="w-5 h-5"></i>
                    <span>Analisis Pengeluaran</span>
                </a>

                <a href="#laporan" onclick="switchTab('laporan')" id="nav-laporan" class="nav-item flex items-center space-x-3 px-3 py-2.5 rounded-lg text-sm font-medium text-gray-600 hover:bg-gray-50 hover:text-gray-900 transition-colors">
                    <i data-lucide="file-text" class="w-5 h-5"></i>
                    <span>Laporan Keuangan</span>
                </a>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <a href="logout.php" class="nav-item flex items-center justify-center space-x-3 px-3 py-2.5 rounded-lg text-sm font-medium text-white bg-orange-500 hover:bg-orange-600 transition-colors">
    <i data-lucide="log-out" class="w-5 h-5"></i>
    <span>Logout</span>
</a>
               
            </nav>

            <!-- Student Profile Summary -->
            
        </div>
    </aside>

    <!-- Main Content Area -->
    <div class="flex-1 flex flex-col h-full overflow-hidden bg-gray-50">
        
        <!-- Top Navbar Header -->
        <header class="bg-white border-b border-gray-200 py-3.5 px-6 flex items-center justify-between no-print z-10">
            <div class="flex items-center space-x-4">
                <h2 id="page-title" class="text-xl font-bold text-gray-900">Dashboard</h2>
            </div>

            <div class="flex items-center space-x-3">
                <!-- Search Bar Global -->
                <div class="relative hidden sm:block w-64">
                    <i data-lucide="search" class="w-4 h-4 absolute left-3 top-1/2 -translate-y-1/2 text-gray-400"></i>
                    <input type="text" placeholder="Cari transaksi, anggaran..." class="w-full pl-9 pr-4 py-2 text-xs bg-gray-50 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500/20 focus:border-orange-500 transition-all">
                </div>

                <!-- Alert Badge / Notification -->
                <button onclick="switchTab('anggaran')" class="relative p-2 rounded-lg text-gray-500 hover:bg-gray-100 transition-colors" title="Notifikasi Anggaran">
                    <i data-lucide="bell" class="w-5 h-5"></i>
                    <span class="absolute top-1.5 right-1.5 w-2.5 h-2.5 bg-orange-600 rounded-full ring-2 ring-white"></span>
                </button>

                <div class="h-6 w-px bg-gray-200"></div>

                <!-- Quick Action Button -->
                <button onclick="openModal()" class="flex items-center space-x-1.5 bg-orange-600 hover:bg-orange-700 text-white px-3.5 py-2 rounded-lg text-xs font-semibold shadow-sm shadow-orange-600/30 transition-all">
                    <i data-lucide="plus" class="w-4 h-4"></i>
                    <span class="hidden sm:inline">Tambah Transaksi</span>
                </button>
            </div>
            
        </header>

        <!-- Dynamic Tab Body Content -->
        <main class="flex-1 overflow-y-auto p-4 md:p-6 custom-scrollbar print-container" id="main-container">

            <!-- 1. TAB DASHBOARD -->
            <div id="tab-dashboard" class="tab-content space-y-6">
                <!-- Stat Cards Grid -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                    <div class="bg-white p-5 rounded-xl border border-gray-100 shadow-sm flex items-center justify-between">
                        <div>
                            <p class="text-xs font-medium text-gray-500">Total Pemasukan (Bulan Ini)</p>
                            <h3 id="stat-pemasukan" class="text-xl font-bold text-gray-900 mt-1">Rp 0</h3>
                            <span class="inline-flex items-center text-[11px] font-medium text-emerald-600 mt-2">
                                <i data-lucide="trending-up" class="w-3 h-3 mr-1"></i> +8.2% dari bln lalu
                            </span>
                        </div>
                        <div class="w-11 h-11 rounded-xl bg-emerald-50 text-emerald-600 flex items-center justify-center">
                            <i data-lucide="arrow-down-left" class="w-6 h-6"></i>
                        </div>
                    </div>

                    <div class="bg-white p-5 rounded-xl border border-gray-100 shadow-sm flex items-center justify-between">
                        <div>
                            <p class="text-xs font-medium text-gray-500">Total Pengeluaran (Bulan Ini)</p>
                            <h3 id="stat-pengeluaran" class="text-xl font-bold text-gray-900 mt-1">Rp 0</h3>
                            <span class="inline-flex items-center text-[11px] font-medium text-rose-600 mt-2">
                                <i data-lucide="trending-down" class="w-3 h-3 mr-1"></i> Hemat 4% vs Limit
                            </span>
                        </div>
                        <div class="w-11 h-11 rounded-xl bg-rose-50 text-rose-600 flex items-center justify-center">
                            <i data-lucide="arrow-up-right" class="w-6 h-6"></i>
                        </div>
                    </div>

                    <div class="bg-white p-5 rounded-xl border border-gray-100 shadow-sm flex items-center justify-between">
                        <div>
                            <p class="text-xs font-medium text-gray-500">Saldo Saat Ini</p>
                            <h3 id="stat-saldo" class="text-xl font-bold text-gray-900 mt-1">Rp 0</h3>
                            <span class="inline-flex items-center text-[11px] font-medium text-gray-500 mt-2">
                                Rasio Tabungan: <strong class="text-gray-700 ml-1">24%</strong>
                            </span>
                        </div>
                        <div class="w-11 h-11 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center">
                            <i data-lucide="wallet" class="w-6 h-6"></i>
                        </div>
                    </div>

                    <div class="bg-white p-5 rounded-xl border border-gray-100 shadow-sm flex items-center justify-between border-l-4 border-l-orange-500">
                        <div>
                            <p class="text-xs font-medium text-gray-500">Kategori Over Budget</p>
                            <h3 id="stat-overbudget-count" class="text-xl font-bold text-orange-600 mt-1">0 Kategori</h3>
                            <span id="stat-overbudget-desc" class="text-[11px] font-medium text-gray-500 mt-2 block truncate">
                                Semua kategori aman
                            </span>
                        </div>
                        <div class="w-11 h-11 rounded-xl bg-orange-50 text-orange-600 flex items-center justify-center">
                            <i data-lucide="alert-triangle" class="w-6 h-6"></i>
                        </div>
                    </div>
                </div>

                <!-- Charts Section -->
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                    <!-- Daily Expense Trend (2 Cols) -->
                    <div class="lg:col-span-2 bg-white p-5 rounded-xl border border-gray-100 shadow-sm flex flex-col justify-between">
                        <div class="flex justify-between items-center mb-4">
                            <div>
                                <h4 class="font-bold text-gray-900 text-sm">Tren Pengeluaran Harian</h4>
                                <p class="text-xs text-gray-400">Aktivitas pengeluaran selama bulan Oktober 2026</p>
                            </div>
                            <span class="text-xs bg-gray-100 text-gray-600 px-2.5 py-1 rounded-md font-medium">Bulan Ini</span>
                        </div>
                        <div class="relative h-64 w-full">
                            <canvas id="chart-trend-dashboard"></canvas>
                        </div>
                    </div>

                    <!-- Category Breakdown (1 Col) -->
                    <div class="bg-white p-5 rounded-xl border border-gray-100 shadow-sm flex flex-col justify-between">
                        <div class="flex justify-between items-center mb-4">
                            <div>
                                <h4 class="font-bold text-gray-900 text-sm">Pengeluaran per Kategori</h4>
                                <p class="text-xs text-gray-400">Proporsi penggunaan dana</p>
                            </div>
                        </div>
                        <div class="relative h-56 w-full flex items-center justify-center">
                            <canvas id="chart-category-dashboard"></canvas>
                        </div>
                    </div>
                </div>

                <!-- Recent Transactions Table -->
                <div class="bg-white rounded-xl border border-gray-100 shadow-sm overflow-hidden">
                    <div class="p-5 border-b border-gray-100 flex justify-between items-center">
                        <div>
                            <h4 class="font-bold text-gray-900 text-sm">Transaksi Terbaru</h4>
                            <p class="text-xs text-gray-400">5 riwayat transaksi terakhir Anda</p>
                        </div>
                        <button onclick="switchTab('transaksi')" class="text-xs text-orange-600 hover:text-orange-700 font-semibold flex items-center">
                            Lihat Semua <i data-lucide="chevron-right" class="w-4 h-4 ml-0.5"></i>
                        </button>
                    </div>

                    <div class="overflow-x-auto">
                        <table class="w-full text-left text-xs">
                            <thead class="bg-gray-50 text-gray-500 font-medium uppercase border-b border-gray-100">
                                <tr>
                                    <th class="py-3 px-4">Tanggal</th>
                                    <th class="py-3 px-4">Kategori</th>
                                    <th class="py-3 px-4">Keterangan</th>
                                    <th class="py-3 px-4">Jenis</th>
                                    <th class="py-3 px-4 text-right">Nominal</th>
                                </tr>
                            </thead>
                            <tbody id="recent-transactions-list" class="divide-y divide-gray-100 text-gray-700">
                                <!-- Dynamic JS Injection -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- 2. TAB TRANSAKSI -->
            <div id="tab-transaksi" class="tab-content hidden space-y-6">
                <!-- Filter Bar & Control -->
                <div class="bg-white p-4 rounded-xl border border-gray-100 shadow-sm flex flex-col md:flex-row gap-3 justify-between items-stretch md:items-center">
                    <div class="flex flex-col sm:flex-row gap-2 flex-1">
                        <!-- Search Box -->
                        <div class="relative flex-1">
                            <i data-lucide="search" class="w-4 h-4 absolute left-3 top-1/2 -translate-y-1/2 text-gray-400"></i>
                            <input type="text" id="filter-search" oninput="applyFilters()" placeholder="Cari keterangan / catatan..." class="w-full pl-9 pr-4 py-2 text-xs border border-gray-200 rounded-lg focus:outline-none focus:border-orange-500">
                        </div>
                        <!-- Filter Jenis -->
                        <select id="filter-jenis" onchange="applyFilters()" class="px-3 py-2 text-xs border border-gray-200 rounded-lg focus:outline-none focus:border-orange-500 bg-white">
                            <option value="ALL">Semua Jenis</option>
                            <option value="PEMASUKAN">Pemasukan</option>
                            <option value="PENGELUARAN">Pengeluaran</option>
                        </select>
                        <!-- Filter Kategori -->
                        <select id="filter-kategori" onchange="applyFilters()" class="px-3 py-2 text-xs border border-gray-200 rounded-lg focus:outline-none focus:border-orange-500 bg-white">
                            <option value="ALL">Semua Kategori</option>
                            <option value="Makanan">Makanan & Minuman</option>
                            <option value="Indekos">Indekos / Tempat Tinggal</option>
                            <option value="Edukasi">Edukasi & Buku</option>
                            <option value="Hiburan">Hiburan & Gaya Hidup</option>
                            <option value="Transportasi">Transportasi</option>
                            <option value="Lain-lain">Lain-lain</option>
                        </select>
                    </div>

                    <div class="flex items-center space-x-2">
                        <button onclick="exportCSV()" class="flex items-center space-x-1 border border-gray-200 text-gray-600 hover:bg-gray-50 px-3 py-2 rounded-lg text-xs font-medium transition-colors">
                            <i data-lucide="download" class="w-3.5 h-3.5"></i>
                            <span>Export CSV</span>
                        </button>
                        <button onclick="openModal()" class="flex items-center space-x-1 bg-orange-600 hover:bg-orange-700 text-white px-3.5 py-2 rounded-lg text-xs font-semibold shadow-sm transition-colors">
                            <i data-lucide="plus" class="w-4 h-4"></i>
                            <span>Tambah Data</span>
                        </button>
                    </div>
                </div>

                <!-- Full Transactions Table -->
                <div class="bg-white rounded-xl border border-gray-100 shadow-sm overflow-hidden flex flex-col">
                    <div class="overflow-x-auto">
                        <table class="w-full text-left text-xs">
                            <thead class="bg-gray-50 text-gray-500 font-medium uppercase border-b border-gray-100">
                                <tr>
                                    <th class="py-3.5 px-4">Tanggal</th>
                                    <th class="py-3.5 px-4">Kategori</th>
                                    <th class="py-3.5 px-4">Keterangan</th>
                                    <th class="py-3.5 px-4">Jenis</th>
                                    <th class="py-3.5 px-4 text-right">Nominal</th>
                                    <th class="py-3.5 px-4 text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody id="all-transactions-list" class="divide-y divide-gray-100 text-gray-700">
                                <!-- Dynamic JS Injection -->
                            </tbody>
                        </table>
                    </div>

                    <!-- Empty State Placeholder -->
                    <div id="empty-state" class="hidden p-8 text-center">
                        <div class="w-12 h-12 bg-gray-100 text-gray-400 rounded-full flex items-center justify-center mx-auto mb-3">
                            <i data-lucide="inbox" class="w-6 h-6"></i>
                        </div>
                        <h4 class="text-sm font-semibold text-gray-800">Tidak ada data transaksi</h4>
                        <p class="text-xs text-gray-400 mt-1">Coba sesuaikan kata kunci pencarian atau filter Anda.</p>
                    </div>

                    <!-- Table Footer / Stats Summary -->
                    <div class="p-4 bg-gray-50 border-t border-gray-100 flex justify-between items-center text-xs text-gray-500">
                        <span id="transaksi-count-label">Menampilkan 0 data</span>
                        <div class="flex items-center space-x-2">
                            <button class="px-2.5 py-1 border border-gray-200 bg-white rounded text-gray-400 cursor-not-allowed">Previous</button>
                            <span class="font-medium text-gray-700">1</span>
                            <button class="px-2.5 py-1 border border-gray-200 bg-white rounded text-gray-400 cursor-not-allowed">Next</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 3. TAB ANGGARAN -->
            <div id="tab-anggaran" class="tab-content hidden space-y-6">
                <!-- Summary Banner -->
                <div class="bg-gradient-to-r from-orange-600 to-amber-600 rounded-xl p-6 text-white shadow-md flex flex-col md:flex-row justify-between items-start md:items-center gap-4">
                    <div>
                        <span class="text-xs uppercase tracking-wider font-semibold opacity-80">Ringkasan Anggaran Bulan Ini</span>
                        <h3 class="text-2xl font-bold mt-1" id="anggaran-total-summary">Rp 0 / Rp 0</h3>
                        <p class="text-xs opacity-90 mt-1">Kelola batas maksimal belanja bulanan Anda agar keuangan tetap sehat.</p>
                    </div>
                    <button onclick="openModalAnggaran()" class="bg-white text-orange-600 hover:bg-orange-50 font-semibold px-4 py-2 rounded-lg text-xs shadow transition-colors">
                        Atur Batas Anggaran
                    </button>
                </div>

                <!-- Budget Cards Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5" id="budget-cards-container">
                    <!-- Dynamic JS Injection -->
                </div>
            </div>

            <!-- 4. TAB ANALISIS PENGELUARAN -->
            <div id="tab-analisis" class="tab-content hidden space-y-6">
                <!-- Insight Highlight Card -->
                <div class="bg-amber-50 border border-amber-200 rounded-xl p-4 flex items-start space-x-3">
                    <div class="p-2 bg-amber-500 text-white rounded-lg mt-0.5">
                        <i data-lucide="lightbulb" class="w-5 h-5"></i>
                    </div>
                    <div>
                        <h4 class="text-xs font-bold text-amber-900 uppercase tracking-wide">Insight Utama Bulan Ini</h4>
                        <p class="text-xs text-amber-800 mt-1 leading-relaxed" id="analisis-insight-text">
                            Pengeluaran terbesar Anda terpusat pada kategori <strong id="insight-top-category">Indekos</strong> dan <strong id="insight-second-category">Makanan</strong> (sekitar 68% dari total dana). Rata-rata konsumsi harian Anda adalah <strong>Rp 42.500/hari</strong>.
                        </p>
                    </div>
                </div>

                <!-- Comparative Chart Section -->
                <div class="bg-white p-5 rounded-xl border border-gray-100 shadow-sm">
                    <div class="flex justify-between items-center mb-4">
                        <div>
                            <h4 class="font-bold text-gray-900 text-sm">Perbandingan Anggaran vs Realisasi</h4>
                            <p class="text-xs text-gray-400">Evaluasi efisiensi setiap batas kategori pengeluaran</p>
                        </div>
                    </div>
                    <div class="relative h-72 w-full">
                        <canvas id="chart-analisis-compare"></canvas>
                    </div>
                </div>

                <!-- Breakdown Cards & Tips -->
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                    <!-- Daily Average & Breakdown -->
                    <div class="lg:col-span-2 bg-white p-5 rounded-xl border border-gray-100 shadow-sm">
                        <h4 class="font-bold text-gray-900 text-sm mb-4">Rincian Efisiensi Kategori</h4>
                        <div class="space-y-4" id="analisis-breakdown-list">
                            <!-- Dynamic JS Injection -->
                        </div>
                    </div>

                    <!-- Financial Tips Mahasiswa -->
                    <div class="bg-white p-5 rounded-xl border border-gray-100 shadow-sm flex flex-col justify-between">
                        <div>
                            <h4 class="font-bold text-gray-900 text-sm mb-3">Rekomendasi Hemat "Rinci."</h4>
                            <ul class="space-y-3 text-xs text-gray-600">
                                <li class="flex items-start space-x-2">
                                    <i data-lucide="check-circle-2" class="w-4 h-4 text-emerald-500 flex-shrink-0 mt-0.5"></i>
                                    <span>Gunakan promo katering mingguan untuk menekan biaya makanan harian.</span>
                                </li>
                                <li class="flex items-start space-x-2">
                                    <i data-lucide="check-circle-2" class="w-4 h-4 text-emerald-500 flex-shrink-0 mt-0.5"></i>
                                    <span>Batasi jajan kopi kekinian maksimal 2 kali seminggu.</span>
                                </li>
                                <li class="flex items-start space-x-2">
                                    <i data-lucide="check-circle-2" class="w-4 h-4 text-emerald-500 flex-shrink-0 mt-0.5"></i>
                                    <span>Manfaatkan Wi-Fi kampus untuk menghemat kuota internet seluler.</span>
                                </li>
                            </ul>
                        </div>
                        <div class="mt-6 pt-4 border-t border-gray-100 bg-orange-50/50 p-3 rounded-lg border border-orange-100 text-center">
                            <span class="text-[11px] text-orange-700 font-medium">Proyeksi Tabungan Bulan Depan</span>
                            <p class="text-lg font-bold text-orange-600 mt-0.5">Rp 350.000</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 5. TAB LAPORAN KEUANGAN -->
            <div id="tab-laporan" class="tab-content hidden space-y-6">
                <!-- Report Controls & Selector -->
                <div class="bg-white p-4 rounded-xl border border-gray-100 shadow-sm flex flex-col sm:flex-row justify-between items-center gap-3 no-print">
                    <div class="flex items-center space-x-2">
                        <i data-lucide="calendar" class="w-4 h-4 text-gray-400"></i>
                        <span class="text-xs font-medium text-gray-700">Periode Laporan:</span>
                        <select id="report-month" class="text-xs border border-gray-200 rounded-lg p-2 focus:outline-none focus:border-orange-500 bg-white">
                            <option value="10-2026">Oktober 2026</option>
                            <option value="09-2026">September 2026</option>
                        </select>
                    </div>

                    <button onclick="window.print()" class="flex items-center space-x-1.5 bg-gray-900 hover:bg-black text-white px-4 py-2 rounded-lg text-xs font-semibold shadow-sm transition-colors">
                        <i data-lucide="printer" class="w-4 h-4"></i>
                        <span>Cetak / Export PDF</span>
                    </button>
                </div>

                <!-- Printable Report Sheet Container -->
                <div class="bg-white p-6 md:p-8 rounded-xl border border-gray-100 shadow-sm space-y-6">
                    <!-- Report Header -->
                    <div class="border-b border-gray-200 pb-5 flex justify-between items-start">
                        <div>
                            <h2 class="text-2xl font-bold text-gray-900">LAPORAN KEUANGAN MAHASISWA</h2>
                            <p class="text-xs text-gray-500 mt-0.5">Sistem Informasi Analisis Pengeluaran "Rinci."</p>
                        </div>
                        <div class="text-right">
                            <span class="text-xs text-gray-400">Periode</span>
                            <p class="text-sm font-bold text-orange-600">Oktober 2026</p>
                        </div>
                    </div>

                    <!-- Student Info Summary -->
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 bg-gray-50 p-4 rounded-lg text-xs">
                        <div>
                            <span class="text-gray-400 block">Nama Mahasiswa</span>
                            <strong class="text-gray-800">Budi Santoso</strong>
                        </div>
                        <div>
                            <span class="text-gray-400 block">NIM / Jurusan</span>
                            <strong class="text-gray-800">21081010045 / IF</strong>
                        </div>
                        <div>
                            <span class="text-gray-400 block">Net Savings</span>
                            <strong id="laporan-net-saving" class="text-emerald-600">Rp 0</strong>
                        </div>
                        <div>
                            <span class="text-gray-400 block">Status Anggaran</span>
                            <span id="laporan-status-badge" class="inline-block px-2 py-0.5 text-[10px] rounded font-semibold bg-emerald-100 text-emerald-700">Terkendali</span>
                        </div>
                    </div>

                    <!-- Executive Financial Summary Cards -->
                    <div class="grid grid-cols-3 gap-4 text-center">
                        <div class="p-3 border border-gray-100 rounded-lg bg-gray-50/30">
                            <span class="text-[11px] text-gray-500">Total Pemasukan</span>
                            <p id="laporan-total-pemasukan" class="text-base font-bold text-gray-900 mt-1">Rp 0</p>
                        </div>
                        <div class="p-3 border border-gray-100 rounded-lg bg-gray-50/30">
                            <span class="text-[11px] text-gray-500">Total Pengeluaran</span>
                            <p id="laporan-total-pengeluaran" class="text-base font-bold text-rose-600 mt-1">Rp 0</p>
                        </div>
                        <div class="p-3 border border-gray-100 rounded-lg bg-gray-50/30">
                            <span class="text-[11px] text-gray-500">Sisa Saldo</span>
                            <p id="laporan-sisa-saldo" class="text-base font-bold text-emerald-600 mt-1">Rp 0</p>
                        </div>
                    </div>

                    <!-- Chart Monthly Stack Bar -->
                    <div class="no-print">
                        <h4 class="font-bold text-gray-900 text-xs uppercase tracking-wider mb-3">Ringkasan Cashflow Bulanan</h4>
                        <div class="relative h-52 w-full">
                            <canvas id="chart-laporan-stack"></canvas>
                        </div>
                    </div>

                    <!-- Budget Warning Check Indicators -->
                    <div>
                        <h4 class="font-bold text-gray-900 text-xs uppercase tracking-wider mb-3">Evaluasi Batas Anggaran Kategori</h4>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-3" id="laporan-budget-checks">
                            <!-- Dynamic JS Injection -->
                        </div>
                    </div>

                    <!-- Footer Signoff for Print -->
                    <div class="pt-8 border-t border-gray-200 hidden print-only flex justify-between text-xs">
                        <div>
                            <p class="text-gray-400">Dicetak secara otomatis melalui:</p>
                            <p class="font-bold text-gray-800">Sistem Informasi "Rinci."</p>
                        </div>
                        <div class="text-right">
                            <p class="text-gray-400">Surabaya, 31 Oktober 2026</p>
                            <br><br>
                            <p class="font-bold text-gray-800">Budi Santoso</p>
                        </div>
                    </div>
                </div>
            </div>

        </main>
    </div>

    <!-- Modal Form Tambah / Edit Transaksi -->
    <div id="modal-transaksi" class="fixed inset-0 bg-black/50 z-50 flex items-center justify-center hidden p-4">
        <div class="bg-white rounded-xl shadow-xl w-full max-w-md overflow-hidden transform transition-all">
            <div class="px-6 py-4 border-b border-gray-100 flex justify-between items-center bg-gray-50">
                <h3 id="modal-title" class="font-bold text-gray-900 text-sm">Tambah Transaksi Baru</h3>
                <button onclick="closeModal()" class="text-gray-400 hover:text-gray-600">
                    <i data-lucide="x" class="w-5 h-5"></i>
                </button>
            </div>
            
            <form id="form-transaksi" onsubmit="handleSaveTransaction(event)" class="p-6 space-y-4">
                <input type="hidden" id="input-id">

                <div>
                    <label class="block text-xs font-semibold text-gray-700 mb-1">Tanggal Transaksi</label>
                    <input type="date" id="input-tanggal" required class="w-full px-3 py-2 text-xs border border-gray-200 rounded-lg focus:outline-none focus:border-orange-500">
                </div>

                <div class="grid grid-cols-2 gap-3">
                    <div>
                        <label class="block text-xs font-semibold text-gray-700 mb-1">Jenis</label>
                        <select id="input-jenis" onchange="toggleCategoryOptions()" required class="w-full px-3 py-2 text-xs border border-gray-200 rounded-lg focus:outline-none focus:border-orange-500 bg-white">
                            <option value="PENGELUARAN">Pengeluaran</option>
                            <option value="PEMASUKAN">Pemasukan</option>
                        </select>
                    </div>

                    <div>
                        <label class="block text-xs font-semibold text-gray-700 mb-1">Kategori</label>
                        <select id="input-kategori" required class="w-full px-3 py-2 text-xs border border-gray-200 rounded-lg focus:outline-none focus:border-orange-500 bg-white">
                            <!-- Populated via JS -->
                        </select>
                    </div>
                </div>

                <div>
                    <label class="block text-xs font-semibold text-gray-700 mb-1">Nominal (Rp)</label>
                    <input type="number" id="input-nominal" min="1000" placeholder="e.g. 25000" required class="w-full px-3 py-2 text-xs border border-gray-200 rounded-lg focus:outline-none focus:border-orange-500">
                </div>

                <div>
                    <label class="block text-xs font-semibold text-gray-700 mb-1">Keterangan / Catatan</label>
                    <input type="text" id="input-keterangan" placeholder="e.g. Makan Siang Warteg" required class="w-full px-3 py-2 text-xs border border-gray-200 rounded-lg focus:outline-none focus:border-orange-500">
                </div>

                <div class="pt-3 flex justify-end space-x-2">
                    <button type="button" onclick="closeModal()" class="px-4 py-2 border border-gray-200 text-gray-600 rounded-lg text-xs font-medium hover:bg-gray-50">Batal</button>
                    <button type="submit" class="px-4 py-2 bg-orange-600 hover:bg-orange-700 text-white rounded-lg text-xs font-semibold shadow-sm">Simpan</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Modal Form Atur Anggaran Kategori -->
    <div id="modal-anggaran" class="fixed inset-0 bg-black/50 z-50 flex items-center justify-center hidden p-4">
        <div class="bg-white rounded-xl shadow-xl w-full max-w-sm overflow-hidden">
            <div class="px-6 py-4 border-b border-gray-100 flex justify-between items-center bg-gray-50">
                <h3 class="font-bold text-gray-900 text-sm">Atur Batas Anggaran Kategori</h3>
                <button onclick="closeModalAnggaran()" class="text-gray-400 hover:text-gray-600">
                    <i data-lucide="x" class="w-5 h-5"></i>
                </button>
            </div>
            
            <form id="form-anggaran" onsubmit="handleSaveBudget(event)" class="p-6 space-y-4">
                <div>
                    <label class="block text-xs font-semibold text-gray-700 mb-1">Pilih Kategori</label>
                    <select id="budget-input-kategori" class="w-full px-3 py-2 text-xs border border-gray-200 rounded-lg focus:outline-none focus:border-orange-500 bg-white">
                        <option value="Makanan">Makanan & Minuman</option>
                        <option value="Indekos">Indekos / Tempat Tinggal</option>
                        <option value="Edukasi">Edukasi & Buku</option>
                        <option value="Hiburan">Hiburan & Gaya Hidup</option>
                        <option value="Transportasi">Transportasi</option>
                        <option value="Lain-lain">Lain-lain</option>
                    </select>
                </div>

                <div>
                    <label class="block text-xs font-semibold text-gray-700 mb-1">Batas Maksimal Bulanan (Rp)</label>
                    <input type="number" id="budget-input-limit" min="10000" placeholder="e.g. 800000" required class="w-full px-3 py-2 text-xs border border-gray-200 rounded-lg focus:outline-none focus:border-orange-500">
                </div>

                <div class="pt-3 flex justify-end space-x-2">
                    <button type="button" onclick="closeModalAnggaran()" class="px-4 py-2 border border-gray-200 text-gray-600 rounded-lg text-xs font-medium hover:bg-gray-50">Batal</button>
                    <button type="submit" class="px-4 py-2 bg-orange-600 hover:bg-orange-700 text-white rounded-lg text-xs font-semibold shadow-sm">Simpan Anggaran</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Toast Notification Box -->
    <div id="toast" class="fixed bottom-5 right-5 z-50 transform translate-y-20 opacity-0 transition-all duration-300 bg-gray-900 text-white px-4 py-3 rounded-lg shadow-lg flex items-center space-x-2 text-xs">
        <i data-lucide="info" id="toast-icon" class="w-4 h-4 text-orange-400"></i>
        <span id="toast-message">Pesan notifikasi...</span>
    </div>

    <!-- Application State & Script Logic -->
    <script>
        // Sample State Initialization Data
        let state = {
            budgets: {
                "Makanan": 800000,
                "Indekos": 700000,
                "Edukasi": 300000,
                "Hiburan": 250000,
                "Transportasi": 200000,
                "Lain-lain": 150000
            },
            transactions: [
                { id: '1', tanggal: '2026-10-01', jenis: 'PEMASUKAN', kategori: 'Kiriman Orang Tua', nominal: 2500000, keterangan: 'Uang Saku Bulanan Oktober' },
                { id: '2', tanggal: '2026-10-01', jenis: 'PENGELUARAN', kategori: 'Indekos', nominal: 700000, keterangan: 'Sewa Kamar Kost Oktober' },
                { id: '3', tanggal: '2026-10-03', jenis: 'PENGELUARAN', kategori: 'Makanan', nominal: 250000, keterangan: 'Belanja Sembako Mingguan' },
                { id: '4', tanggal: '2026-10-05', jenis: 'PENGELUARAN', kategori: 'Edukasi', nominal: 180000, keterangan: 'Buku Pemrograman Web PHP/MySQL' },
                { id: '5', tanggal: '2026-10-08', jenis: 'PENGELUARAN', kategori: 'Makanan', nominal: 320000, keterangan: 'Makan Harian & Kopi Kampus' },
                { id: '6', tanggal: '2026-10-12', jenis: 'PENGELUARAN', kategori: 'Hiburan', nominal: 220000, keterangan: 'Nonton Bioskop & Langganan Spotify' },
                { id: '7', tanggal: '2026-10-15', jenis: 'PENGELUARAN', kategori: 'Transportasi', nominal: 110000, keterangan: 'Isi Bensin Motor Bulanan' },
                { id: '8', tanggal: '2026-10-18', jenis: 'PEMASUKAN', kategori: 'Beasiswa / Freelance', nominal: 450000, keterangan: 'Fee Asisten Praktikum Lab' },
                { id: '9', tanggal: '2026-10-20', jenis: 'PENGELUARAN', kategori: 'Makanan', nominal: 270000, keterangan: 'Makan Bersama Kelompok Tugas' }
            ]
        };

        // Chart Global Instances
        let chartTrendInstance = null;
        let chartCategoryInstance = null;
        let chartAnalisisCompareInstance = null;
        let chartLaporanStackInstance = null;

        // Initialize Application
        window.addEventListener('DOMContentLoaded', () => {
            lucide.createIcons();
            setupMobileMenu();
            renderAll();
            // Set current date on transaction input default
            document.getElementById('input-tanggal').valueAsDate = new Date();
        });

        // Mobile Menu Drawer Handlers
        function setupMobileMenu() {
            const btn = document.getElementById('mobile-menu-btn');
            const sidebar = document.getElementById('sidebar');
            const overlay = document.getElementById('mobile-overlay');

            btn.addEventListener('click', () => {
                sidebar.classList.remove('-translate-x-full');
                overlay.classList.remove('hidden');
            });

            overlay.addEventListener('click', () => {
                sidebar.classList.add('-translate-x-full');
                overlay.classList.add('hidden');
            });
        }

        // Tab Switcher Function
        function switchTab(tabId) {
            document.querySelectorAll('.tab-content').forEach(el => el.classList.add('hidden'));
            document.getElementById(`tab-${tabId}`).classList.remove('hidden');

            document.querySelectorAll('.nav-item').forEach(el => {
                el.classList.remove('text-orange-600', 'bg-orange-50');
                el.classList.add('text-gray-600');
            });

            const activeNav = document.getElementById(`nav-${tabId}`);
            if (activeNav) {
                activeNav.classList.add('text-orange-600', 'bg-orange-50');
                activeNav.classList.remove('text-gray-600');
            }

            // Update Header Title
            const titles = {
                'dashboard': 'Dashboard',
                'transaksi': 'Daftar Transaksi',
                'anggaran': 'Kelola Anggaran Kategori',
                'analisis': 'Analisis & Insight Pengeluaran',
                'laporan': 'Laporan Keuangan Mahasiswa'
            };
            document.getElementById('page-title').innerText = titles[tabId] || 'Dashboard';

            // Hide Mobile Sidebar if open
            document.getElementById('sidebar').classList.add('-translate-x-full');
            document.getElementById('mobile-overlay').classList.add('hidden');

            // Re-render relevant view charts
            setTimeout(() => {
                renderCharts();
            }, 50);
        }

        // Format Currency Helper
        function formatRp(amount) {
            return new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR', maximumFractionDigits: 0 }).format(amount);
        }

        // Main Calculation Engine
        function computeMetrics() {
            let totalPemasukan = 0;
            let totalPengeluaran = 0;
            let pengeluaranPerKategori = {
                "Makanan": 0, "Indekos": 0, "Edukasi": 0, "Hiburan": 0, "Transportasi": 0, "Lain-lain": 0
            };

            state.transactions.forEach(t => {
                if (t.jenis === 'PEMASUKAN') {
                    totalPemasukan += t.nominal;
                } else {
                    totalPengeluaran += t.nominal;
                    if (pengeluaranPerKategori[t.kategori] !== undefined) {
                        pengeluaranPerKategori[t.kategori] += t.nominal;
                    } else {
                        pengeluaranPerKategori["Lain-lain"] += t.nominal;
                    }
                }
            });

            let saldo = totalPemasukan - totalPengeluaran;

            // Check over budget
            let overBudgetCategories = [];
            Object.keys(state.budgets).forEach(cat => {
                if ((pengeluaranPerKategori[cat] || 0) > state.budgets[cat]) {
                    overBudgetCategories.push(cat);
                }
            });

            return { totalPemasukan, totalPengeluaran, saldo, pengeluaranPerKategori, overBudgetCategories };
        }

        // Render Everything
        function renderAll() {
            const metrics = computeMetrics();

            // 1. Dashboard Metrics
            document.getElementById('stat-pemasukan').innerText = formatRp(metrics.totalPemasukan);
            document.getElementById('stat-pengeluaran').innerText = formatRp(metrics.totalPengeluaran);
            document.getElementById('stat-saldo').innerText = formatRp(metrics.saldo);
            
            const overCount = metrics.overBudgetCategories.length;
            document.getElementById('stat-overbudget-count').innerText = `${overCount} Kategori`;
            if (overCount > 0) {
                document.getElementById('stat-overbudget-desc').innerText = `Melebihi limit: ${metrics.overBudgetCategories.join(', ')}`;
                document.getElementById('stat-overbudget-desc').classList.add('text-rose-600');
            } else {
                document.getElementById('stat-overbudget-desc').innerText = `Semua kategori aman & terkendali`;
                document.getElementById('stat-overbudget-desc').classList.remove('text-rose-600');
            }

            // Recent Transactions Table (5 Items)
            const recentList = document.getElementById('recent-transactions-list');
            recentList.innerHTML = '';
            const sortedRecent = [...state.transactions].reverse().slice(0, 5);
            
            sortedRecent.forEach(t => {
                const tr = document.createElement('tr');
                tr.className = 'hover:bg-gray-50/80 transition-colors';
                const badgeColor = t.jenis === 'PEMASUKAN' ? 'bg-emerald-50 text-emerald-700' : 'bg-rose-50 text-rose-700';
                tr.innerHTML = `
                    <td class="py-3 px-4 font-medium text-gray-500">${t.tanggal}</td>
                    <td class="py-3 px-4"><span class="px-2 py-0.5 rounded text-[10px] font-semibold bg-gray-100 text-gray-700">${t.kategori}</span></td>
                    <td class="py-3 px-4 font-semibold text-gray-800">${t.keterangan}</td>
                    <td class="py-3 px-4"><span class="px-2 py-0.5 rounded text-[10px] font-semibold ${badgeColor}">${t.jenis}</span></td>
                    <td class="py-3 px-4 text-right font-bold ${t.jenis === 'PEMASUKAN' ? 'text-emerald-600' : 'text-gray-900'}">${t.jenis === 'PEMASUKAN' ? '+' : '-'}${formatRp(t.nominal)}</td>
                `;
                recentList.appendChild(tr);
            });

            // 2. All Transactions Tab Table
            renderTransactionTable();

            // 3. Anggaran Cards
            renderBudgetCards(metrics);

            // 4. Analisis Tab Data
            renderAnalisisView(metrics);

            // 5. Laporan Tab Data
            renderLaporanView(metrics);

            // Charts
            renderCharts();
            lucide.createIcons();
        }

        // Render Transaction List with Filters
        function renderTransactionTable() {
            const listContainer = document.getElementById('all-transactions-list');
            const emptyState = document.getElementById('empty-state');
            const searchVal = document.getElementById('filter-search').value.toLowerCase();
            const jenisVal = document.getElementById('filter-jenis').value;
            const katVal = document.getElementById('filter-kategori').value;

            listContainer.innerHTML = '';

            let filtered = state.transactions.filter(t => {
                const matchesSearch = t.keterangan.toLowerCase().includes(searchVal) || t.kategori.toLowerCase().includes(searchVal);
                const matchesJenis = jenisVal === 'ALL' || t.jenis === jenisVal;
                const matchesKat = katVal === 'ALL' || t.kategori === katVal;
                return matchesSearch && matchesJenis && matchesKat;
            });

            document.getElementById('transaksi-count-label').innerText = `Menampilkan ${filtered.length} dari ${state.transactions.length} data`;

            if (filtered.length === 0) {
                emptyState.classList.remove('hidden');
            } else {
                emptyState.classList.add('hidden');
                filtered.reverse().forEach(t => {
                    const tr = document.createElement('tr');
                    tr.className = 'hover:bg-gray-50/80 transition-colors border-b border-gray-100';
                    const badgeColor = t.jenis === 'PEMASUKAN' ? 'bg-emerald-50 text-emerald-700 border border-emerald-200' : 'bg-rose-50 text-rose-700 border border-rose-200';
                    tr.innerHTML = `
                        <td class="py-3 px-4 text-gray-500 font-medium">${t.tanggal}</td>
                        <td class="py-3 px-4"><span class="px-2 py-0.5 rounded text-[10px] font-semibold bg-gray-100 text-gray-700 border border-gray-200">${t.kategori}</span></td>
                        <td class="py-3 px-4 font-semibold text-gray-900">${t.keterangan}</td>
                        <td class="py-3 px-4"><span class="px-2 py-0.5 rounded text-[10px] font-semibold ${badgeColor}">${t.jenis}</span></td>
                        <td class="py-3 px-4 text-right font-bold ${t.jenis === 'PEMASUKAN' ? 'text-emerald-600' : 'text-gray-900'}">${t.jenis === 'PEMASUKAN' ? '+' : '-'}${formatRp(t.nominal)}</td>
                        <td class="py-3 px-4 text-center">
                            <div class="flex items-center justify-center space-x-1">
                                <button onclick="editTransaction('${t.id}')" class="p-1 text-gray-400 hover:text-orange-600 rounded">
                                    <i data-lucide="edit-3" class="w-4 h-4"></i>
                                </button>
                                <button onclick="deleteTransaction('${t.id}')" class="p-1 text-gray-400 hover:text-rose-600 rounded">
                                    <i data-lucide="trash-2" class="w-4 h-4"></i>
                                </button>
                            </div>
                        </td>
                    `;
                    listContainer.appendChild(tr);
                });
            }
            lucide.createIcons();
        }

        function applyFilters() {
            renderTransactionTable();
        }

        // Render Budget Cards
        function renderBudgetCards(metrics) {
            const container = document.getElementById('budget-cards-container');
            container.innerHTML = '';

            let totalLimit = 0;
            let totalSpent = 0;

            Object.keys(state.budgets).forEach(cat => {
                const limit = state.budgets[cat];
                const spent = metrics.pengeluaranPerKategori[cat] || 0;
                const remaining = limit - spent;
                const percent = Math.min(Math.round((spent / limit) * 100), 100);

                totalLimit += limit;
                totalSpent += spent;

                let progressColor = 'bg-emerald-500';
                let statusText = 'Aman';
                let statusBadge = 'bg-emerald-50 text-emerald-700 border-emerald-200';

                if (percent >= 90) {
                    progressColor = 'bg-rose-500';
                    statusText = spent > limit ? 'Over Budget!' : 'Hampir Habis';
                    statusBadge = 'bg-rose-50 text-rose-700 border-rose-200';
                } else if (percent >= 70) {
                    progressColor = 'bg-amber-500';
                    statusText = 'Peringatan';
                    statusBadge = 'bg-amber-50 text-amber-700 border-amber-200';
                }

                const card = document.createElement('div');
                card.className = 'bg-white p-5 rounded-xl border border-gray-100 shadow-sm flex flex-col justify-between space-y-4';
                card.innerHTML = `
                    <div class="flex justify-between items-start">
                        <div>
                            <h4 class="font-bold text-gray-900 text-sm">${cat}</h4>
                            <p class="text-xs text-gray-400 mt-0.5">Batas: ${formatRp(limit)}</p>
                        </div>
                        <span class="px-2 py-0.5 rounded text-[10px] font-semibold border ${statusBadge}">${statusText}</span>
                    </div>

                    <div>
                        <div class="flex justify-between text-xs font-semibold mb-1.5">
                            <span class="text-gray-500">Terpakai: ${formatRp(spent)}</span>
                            <span class="${remaining < 0 ? 'text-rose-600' : 'text-gray-700'}">${percent}%</span>
                        </div>
                        <div class="w-full bg-gray-100 rounded-full h-2 overflow-hidden">
                            <div class="${progressColor} h-2 rounded-full transition-all duration-500" style="width: ${percent}%"></div>
                        </div>
                    </div>

                    <div class="pt-2 border-t border-gray-50 flex justify-between items-center text-xs">
                        <span class="text-gray-400">Sisa Anggaran:</span>
                        <strong class="${remaining < 0 ? 'text-rose-600' : 'text-emerald-600'}">${formatRp(remaining)}</strong>
                    </div>
                `;
                container.appendChild(card);
            });

            document.getElementById('anggaran-total-summary').innerText = `${formatRp(totalSpent)} / ${formatRp(totalLimit)}`;
        }

        // Render Analisis Tab
        function renderAnalisisView(metrics) {
            const list = document.getElementById('analisis-breakdown-list');
            list.innerHTML = '';

            // Sort categories by expenditure
            const sortedCats = Object.keys(metrics.pengeluaranPerKategori).sort((a, b) => metrics.pengeluaranPerKategori[b] - metrics.pengeluaranPerKategori[a]);
            
            if(sortedCats.length >= 2) {
                document.getElementById('insight-top-category').innerText = sortedCats[0];
                document.getElementById('insight-second-category').innerText = sortedCats[1];
            }

            sortedCats.forEach(cat => {
                const spent = metrics.pengeluaranPerKategori[cat];
                const limit = state.budgets[cat] || 1;
                const ratio = Math.round((spent / metrics.totalPengeluaran) * 100) || 0;

                const item = document.createElement('div');
                item.className = 'flex items-center justify-between p-3 bg-gray-50 rounded-lg border border-gray-100';
                item.innerHTML = `
                    <div class="flex items-center space-x-3">
                        <div class="w-8 h-8 rounded-lg bg-orange-100 text-orange-600 flex items-center justify-center font-bold text-xs">
                            ${cat.substring(0,2).toUpperCase()}
                        </div>
                        <div>
                            <h5 class="text-xs font-bold text-gray-900">${cat}</h5>
                            <span class="text-[10px] text-gray-400">${ratio}% dari seluruh pengeluaran</span>
                        </div>
                    </div>
                    <div class="text-right">
                        <p class="text-xs font-bold text-gray-900">${formatRp(spent)}</p>
                        <span class="text-[10px] text-gray-400">Limit: ${formatRp(limit)}</span>
                    </div>
                `;
                list.appendChild(item);
            });
        }

        // Render Laporan Tab
        function renderLaporanView(metrics) {
            document.getElementById('laporan-total-pemasukan').innerText = formatRp(metrics.totalPemasukan);
            document.getElementById('laporan-total-pengeluaran').innerText = formatRp(metrics.totalPengeluaran);
            document.getElementById('laporan-sisa-saldo').innerText = formatRp(metrics.saldo);
            document.getElementById('laporan-net-saving').innerText = formatRp(metrics.saldo);

            const checksContainer = document.getElementById('laporan-budget-checks');
            checksContainer.innerHTML = '';

            Object.keys(state.budgets).forEach(cat => {
                const spent = metrics.pengeluaranPerKategori[cat] || 0;
                const limit = state.budgets[cat];
                const isOver = spent > limit;

                const div = document.createElement('div');
                div.className = `p-3 rounded-lg border flex justify-between items-center text-xs ${isOver ? 'bg-rose-50 border-rose-200 text-rose-800' : 'bg-emerald-50 border-emerald-200 text-emerald-800'}`;
                div.innerHTML = `
                    <div class="flex items-center space-x-2">
                        <i data-lucide="${isOver ? 'alert-triangle' : 'check-circle'}" class="w-4 h-4"></i>
                        <span class="font-semibold">${cat}</span>
                    </div>
                    <span>${formatRp(spent)} / ${formatRp(limit)} (${isOver ? 'Terlampaui' : 'Aman'})</span>
                `;
                checksContainer.appendChild(div);
            });
        }

        // Render Chart.js Visualizations
        function renderCharts() {
            const metrics = computeMetrics();

            // 1. Dashboard Daily Trend (Line Chart)
            const ctxTrend = document.getElementById('chart-trend-dashboard');
            if (ctxTrend) {
                if (chartTrendInstance) chartTrendInstance.destroy();
                chartTrendInstance = new Chart(ctxTrend, {
                    type: 'line',
                    data: {
                        labels: ['1 Oct', '5 Oct', '10 Oct', '15 Oct', '20 Oct', '25 Oct', '30 Oct'],
                        datasets: [{
                            label: 'Pengeluaran (Rp)',
                            data: [700000, 250000, 180000, 320000, 220000, 110000, 270000],
                            borderColor: '#f97316',
                            backgroundColor: 'rgba(249, 115, 22, 0.08)',
                            fill: true,
                            tension: 0.35,
                            borderWidth: 2,
                            pointRadius: 4,
                            pointBackgroundColor: '#ea580c'
                        }]
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        plugins: { legend: { display: false } },
                        scales: {
                            y: { grid: { color: '#f3f4f6' }, ticks: { font: { size: 10 } } },
                            x: { grid: { display: false }, ticks: { font: { size: 10 } } }
                        }
                    }
                });
            }

            // 2. Dashboard Category Doughnut Chart
            const ctxCat = document.getElementById('chart-category-dashboard');
            if (ctxCat) {
                if (chartCategoryInstance) chartCategoryInstance.destroy();
                chartCategoryInstance = new Chart(ctxCat, {
                    type: 'doughnut',
                    data: {
                        labels: Object.keys(metrics.pengeluaranPerKategori),
                        datasets: [{
                            data: Object.values(metrics.pengeluaranPerKategori),
                            backgroundColor: ['#f97316', '#3b82f6', '#10b981', '#f59e0b', '#8b5cf6', '#6b7280'],
                            borderWidth: 0
                        }]
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        plugins: {
                            legend: { position: 'bottom', labels: { boxWidth: 10, font: { size: 10 } } }
                        },
                        cutout: '70%'
                    }
                });
            }

            // 3. Analisis Compare Bar Chart
            const ctxCompare = document.getElementById('chart-analisis-compare');
            if (ctxCompare) {
                if (chartAnalisisCompareInstance) chartAnalisisCompareInstance.destroy();
                const cats = Object.keys(state.budgets);
                const limits = cats.map(c => state.budgets[c]);
                const spents = cats.map(c => metrics.pengeluaranPerKategori[c] || 0);

                chartAnalisisCompareInstance = new Chart(ctxCompare, {
                    type: 'bar',
                    data: {
                        labels: cats,
                        datasets: [
                            { label: 'Batas Anggaran', data: limits, backgroundColor: '#e5e7eb', borderRadius: 6 },
                            { label: 'Realisasi Pengeluaran', data: spents, backgroundColor: '#f97316', borderRadius: 6 }
                        ]
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        plugins: { legend: { position: 'top', labels: { font: { size: 11 } } } },
                        scales: {
                            y: { grid: { color: '#f3f4f6' }, ticks: { font: { size: 10 } } },
                            x: { grid: { display: false }, ticks: { font: { size: 10 } } }
                        }
                    }
                });
            }

            // 4. Laporan Stack Bar Chart
            const ctxStack = document.getElementById('chart-laporan-stack');
            if (ctxStack) {
                if (chartLaporanStackInstance) chartLaporanStackInstance.destroy();
                chartLaporanStackInstance = new Chart(ctxStack, {
                    type: 'bar',
                    data: {
                        labels: ['Agustus', 'September', 'Oktober'],
                        datasets: [
                            { label: 'Pemasukan', data: [2200000, 2400000, metrics.totalPemasukan], backgroundColor: '#10b981', borderRadius: 4 },
                            { label: 'Pengeluaran', data: [1900000, 2050000, metrics.totalPengeluaran], backgroundColor: '#f43f5e', borderRadius: 4 }
                        ]
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        plugins: { legend: { position: 'bottom', labels: { font: { size: 10 } } } },
                        scales: {
                            y: { grid: { color: '#f3f4f6' }, ticks: { font: { size: 10 } } },
                            x: { grid: { display: false }, ticks: { font: { size: 10 } } }
                        }
                    }
                });
            }
        }

        // Transaction Modal Controllers
        function openModal(editId = null) {
            document.getElementById('modal-transaksi').classList.remove('hidden');
            toggleCategoryOptions();

            if (editId) {
                const item = state.transactions.find(t => t.id === editId);
                if (item) {
                    document.getElementById('modal-title').innerText = 'Edit Transaksi';
                    document.getElementById('input-id').value = item.id;
                    document.getElementById('input-tanggal').value = item.tanggal;
                    document.getElementById('input-jenis').value = item.jenis;
                    toggleCategoryOptions();
                    document.getElementById('input-kategori').value = item.kategori;
                    document.getElementById('input-nominal').value = item.nominal;
                    document.getElementById('input-keterangan').value = item.keterangan;
                }
            } else {
                document.getElementById('modal-title').innerText = 'Tambah Transaksi Baru';
                document.getElementById('form-transaksi').reset();
                document.getElementById('input-id').value = '';
                document.getElementById('input-tanggal').valueAsDate = new Date();
            }
        }

        function closeModal() {
            document.getElementById('modal-transaksi').classList.add('hidden');
        }

        function toggleCategoryOptions() {
            const jenis = document.getElementById('input-jenis').value;
            const selectKat = document.getElementById('input-kategori');
            selectKat.innerHTML = '';

            if (jenis === 'PEMASUKAN') {
                const options = ['Kiriman Orang Tua', 'Beasiswa / Freelance', 'Tabungan', 'Lain-lain'];
                options.forEach(o => selectKat.add(new Option(o, o)));
            } else {
                const options = ['Makanan', 'Indekos', 'Edukasi', 'Hiburan', 'Transportasi', 'Lain-lain'];
                options.forEach(o => selectKat.add(new Option(o, o)));
            }
        }

        function handleSaveTransaction(e) {
            e.preventDefault();
            const id = document.getElementById('input-id').value;
            const tanggal = document.getElementById('input-tanggal').value;
            const jenis = document.getElementById('input-jenis').value;
            const kategori = document.getElementById('input-kategori').value;
            const nominal = parseFloat(document.getElementById('input-nominal').value);
            const keterangan = document.getElementById('input-keterangan').value;

            if (id) {
                // Update
                const index = state.transactions.findIndex(t => t.id === id);
                if (index !== -1) {
                    state.transactions[index] = { id, tanggal, jenis, kategori, nominal, keterangan };
                    showToast('Transaksi berhasil diperbarui');
                }
            } else {
                // Create
                const newId = Date.now().toString();
                state.transactions.push({ id: newId, tanggal, jenis, kategori, nominal, keterangan });
                showToast('Transaksi baru berhasil ditambahkan');
            }

            closeModal();
            renderAll();
        }

        function editTransaction(id) {
            openModal(id);
        }

        function deleteTransaction(id) {
            state.transactions = state.transactions.filter(t => t.id !== id);
            showToast('Transaksi telah dihapus');
            renderAll();
        }

        // Budget Modal Controllers
        function openModalAnggaran() {
            document.getElementById('modal-anggaran').classList.remove('hidden');
        }

        function closeModalAnggaran() {
            document.getElementById('modal-anggaran').classList.add('hidden');
        }

        function handleSaveBudget(e) {
            e.preventDefault();
            const cat = document.getElementById('budget-input-kategori').value;
            const limit = parseFloat(document.getElementById('budget-input-limit').value);

            state.budgets[cat] = limit;
            showToast(`Batas anggaran ${cat} diperbarui menjadi ${formatRp(limit)}`);
            closeModalAnggaran();
            renderAll();
        }

        // Mock Export CSV Functional Trigger
        function exportCSV() {
            let csvContent = "data:text/csv;charset=utf-8,Tanggal,Jenis,Kategori,Keterangan,Nominal\n";
            state.transactions.forEach(t => {
                csvContent += `${t.tanggal},${t.jenis},${t.kategori},"${t.keterangan}",${t.nominal}\n`;
            });
            const encodedUri = encodeURI(csvContent);
            const link = document.createElement("a");
            link.setAttribute("href", encodedUri);
            link.setAttribute("download", "Laporan_Transaksi_Rinci.csv");
            document.body.appendChild(link);
            link.click();
            document.body.removeChild(link);
            showToast('Mengekspor data ke file CSV...');
        }

        // Toast Notification Trigger
        function showToast(message) {
            const toast = document.getElementById('toast');
            document.getElementById('toast-message').innerText = message;
            toast.classList.remove('translate-y-20', 'opacity-0');

            setTimeout(() => {
                toast.classList.add('translate-y-20', 'opacity-0');
            }, 3000);
        }
    </script>
</body>
</html>