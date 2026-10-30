<!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- Font Awesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <style>
        :root {
            --primary: #4F46E5;
            --primary-light: #818CF8;
            --primary-bg: #EEF2FF;
            --text-dark: #1F2937;
            --text-gray: #6B7280;
            --bg-body: #F3F4F6;
            --bg-card: #FFFFFF;
            --border: #E5E7EB;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter', sans-serif;
        }

        body {
            background-color: var(--bg-body);
            display: flex;
            min-height: 100vh;
            color: var(--text-dark);
        }

        /* --- SIDEBAR --- */
        .sidebar {
            width: 250px;
            background: var(--bg-card);
            border-right: 1px solid var(--border);
            padding: 20px 0;
            display: flex;
            flex-direction: column;
            position: fixed;
            height: 100vh;
        }

        .logo {
            padding: 0 20px 30px 20px;
            font-size: 20px;
            font-weight: 700;
            color: var(--primary);
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .logo i { font-size: 24px; }

        .menu-label {
            font-size: 11px;
            text-transform: uppercase;
            color: var(--text-gray);
            font-weight: 600;
            padding: 0 20px;
            margin-bottom: 10px;
            letter-spacing: 0.5px;
        }

        .nav-menu {
            list-style: none;
        }

        .nav-item {
            padding: 12px 20px;
            display: flex;
            align-items: center;
            gap: 15px;
            color: var(--text-gray);
            font-size: 14px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.2s;
            text-decoration: none;
        }

        .nav-item:hover {
            color: var(--primary);
            background: var(--primary-bg);
            border-right: 3px solid var(--primary);
        }

        .nav-item.active {
            color: var(--primary);
            background: var(--primary-bg);
            border-right: 3px solid var(--primary);
        }

        /* --- MAIN CONTENT --- */
        .main-content {
            margin-left: 250px;
            flex: 1;
            padding: 20px 30px;
            width: calc(100% - 250px);
        }

        /* Navbar */
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
            background: var(--bg-card);
            padding: 15px 20px;
            border-radius: 12px;
            box-shadow: 0 1px 3px rgba(0,0,0,0.05);
            position: relative; /* Penting untuk z-index dropdown */
            z-index: 10;
        }

        .search-bar {
            display: flex;
            align-items: center;
            background: var(--bg-body);
            padding: 10px 15px;
            border-radius: 8px;
            width: 300px;
        }

        .search-bar input {
            border: none;
            background: transparent;
            outline: none;
            margin-left: 10px;
            width: 100%;
            font-size: 14px;
        }

        .search-bar i { color: var(--text-gray); }

        .user-profile {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .user-profile .icon-btn {
            background: var(--bg-body);
            border: none;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            cursor: pointer;
            color: var(--text-gray);
            transition: 0.2s;
        }

        .user-profile .icon-btn:hover {
            background: var(--border);
        }

        /* --- DROPDOWN STYLES (BARU) --- */
        .user-info {
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 14px;
            font-weight: 600;
            cursor: pointer;
            position: relative;
            padding: 5px 10px;
            border-radius: 8px;
            transition: background 0.2s;
        }

        .user-info:hover {
            background: var(--bg-body);
        }

        .user-info img {
            width: 35px;
            height: 35px;
            border-radius: 50%;
            object-fit: cover;
        }

        .dropdown-menu {
            display: none;
            position: absolute;
            top: 110%;
            right: 0;
            background: var(--bg-card);
            min-width: 200px;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
            border-radius: 12px;
            border: 1px solid var(--border);
            padding: 8px 0;
            z-index: 1000;
        }

        .dropdown-menu.show {
            display: block;
            animation: fadeInDown 0.2s ease-out forwards;
        }

        @keyframes fadeInDown {
            from { opacity: 0; transform: translateY(-10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .dropdown-item {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 10px 20px;
            color: var(--text-dark);
            text-decoration: none;
            font-size: 13px;
            font-weight: 500;
            transition: background 0.2s, color 0.2s;
        }

        .dropdown-item:hover {
            background: var(--primary-bg);
            color: var(--primary);
        }

        .dropdown-divider {
            height: 1px;
            background: var(--border);
            margin: 6px 0;
        }

        .dropdown-item.logout {
            color: #EF4444;
        }

        .dropdown-item.logout:hover {
            background: #FEF2F2;
            color: #DC2626;
        }
        /* --- AKHIR DROPDOWN STYLES --- */

        /* Page Title */
        .page-title {
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 20px;
        }

        /* --- GRID LAYOUT --- */
        .dashboard-grid {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 20px;
            margin-bottom: 20px;
        }

        .bottom-grid {
            display: grid;
            grid-template-columns: 1fr 1fr 1.5fr;
            gap: 20px;
        }

        /* Card Style */
        .card {
            background: var(--bg-card);
            border-radius: 16px;
            padding: 20px;
            box-shadow: 0 1px 3px rgba(0,0,0,0.05);
        }

        .card-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
        }

        .card-title {
            font-size: 14px;
            font-weight: 600;
            color: var(--text-dark);
        }

        .btn-report {
            font-size: 12px;
            color: var(--primary);
            background: var(--primary-bg);
            border: none;
            padding: 6px 12px;
            border-radius: 6px;
            cursor: pointer;
            font-weight: 600;
            transition: 0.2s;
        }
        
        .btn-report:hover {
            background: #E0E7FF;
        }

        /* Specific Card Contents */
        .revenue-value {
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 5px;
        }

        .trend {
            font-size: 12px;
            color: #10B981;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .trend.down { color: #EF4444; }

        .date-sub {
            font-size: 12px;
            color: var(--text-gray);
            margin-top: 5px;
            margin-bottom: 15px;
        }

        /* Chart Containers */
        .chart-container {
            position: relative;
            height: 150px;
            width: 100%;
        }
        
        .chart-container.donut {
            height: 180px;
            display: flex;
            justify-content: center;
        }

        .donut-center-text {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            pointer-events: none;
        }

        .donut-center-text h4 { font-size: 12px; color: var(--text-gray); }
        .donut-center-text p { font-size: 16px; font-weight: 700; color: var(--text-dark); }

        /* Rating Section */
        .rating-circles {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            justify-content: center;
            align-items: center;
            margin-top: 20px;
        }

        .circle {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: white;
            font-weight: 700;
            font-size: 18px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }
        
        .circle span { font-size: 10px; font-weight: 500; margin-top: 2px; }
        .circle-1 { background: linear-gradient(135deg, #a855f7, #8b5cf6); width: 90px; height: 90px; }
        .circle-2 { background: linear-gradient(135deg, #06b6d4, #3b82f6); width: 110px; height: 110px; font-size: 24px; }
        .circle-3 { background: linear-gradient(135deg, #f59e0b, #f97316); width: 130px; height: 130px; font-size: 28px; }

        /* Food List */
        .food-list { list-style: none; }
        .food-item {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 10px 0;
            border-bottom: 1px solid var(--border);
        }
        .food-item:last-child { border-bottom: none; }
        .food-info { display: flex; align-items: center; gap: 12px; }
        .food-img {
            width: 40px;
            height: 40px;
            border-radius: 8px;
            background: #F3F4F6;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 20px;
        }
        .food-name { font-size: 13px; font-weight: 600; }
        .food-price { font-size: 12px; color: var(--text-gray); font-weight: 500; }

        /* Responsive */
        @media (max-width: 1024px) {
            .dashboard-grid, .bottom-grid { grid-template-columns: 1fr; }
            .sidebar { width: 80px; }
            .sidebar .menu-label, .sidebar .nav-item span { display: none; }
            .sidebar .nav-item { justify-content: center; }
            .main-content { margin-left: 80px; width: calc(100% - 80px); }
        }
    </style>
</head>
<body>

    <!-- SIDEBAR -->
    <aside class="sidebar">
        <div class="logo">
            <i class="fa-solid fa-bowl-food"></i> <span>foodbox</span>
        </div>
        
        <div class="menu-label">FITUR</div>
        <ul class="nav-menu">
            <a href="dashboard.php" class="nav-item active">
                <i class="fa-solid fa-border-all"></i> <span>Dashboard</span>
            </a>
            <a href="transaksi.php" class="nav-item">
                <i class="fa-solid fa-burger"></i> <span>Transaksi</span>
            </a>
            <a href="stock.php" class="nav-item">
                <i class="fa-solid fa-book-open"></i> <span>Stock</span>
            </a>
        </ul>

        <div class="menu-label" style="margin-top: 30px;">OTHERS</div>
        <ul class="nav-menu">
            <a href="#" class="nav-item">
                <i class="fa-solid fa-gear"></i> <span>Settings</span>
            </a>
            <a href="#" class="nav-item">
                <i class="fa-solid fa-credit-card"></i> <span>Payment</span>
            </a>
            <a href="#" class="nav-item">
                <i class="fa-solid fa-user"></i> <span>Accounts</span>
            </a>
            <a href="#" class="nav-item">
                <i class="fa-solid fa-circle-question"></i> <span>Help</span>
            </a>
        </ul>
    </aside>