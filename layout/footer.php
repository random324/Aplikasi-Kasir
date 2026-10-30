    <!-- SCRIPT -->
    <script>
        // --- LOGIKA DROPDOWN PROFIL (BARU) ---
        const userProfileBtn = document.getElementById('userProfileBtn');
        const userDropdown = document.getElementById('userDropdown');

        // Toggle dropdown saat diklik
        userProfileBtn.addEventListener('click', function(e) {
            userDropdown.classList.toggle('show');
            e.stopPropagation(); // Mencegah event bubbling agar tidak langsung tertutup
        });

        // Tutup dropdown jika user mengklik di luar area profil
        document.addEventListener('click', function(e) {
            if (!userProfileBtn.contains(e.target)) {
                userDropdown.classList.remove('show');
            }
        });
        // --- AKHIR LOGIKA DROPDOWN ---


        // --- CHART JS ---
        Chart.defaults.font.family = "'Inter', sans-serif";
        Chart.defaults.color = '#6B7280';

        // 1. Revenue Bar Chart
        const ctxRevenue = document.getElementById('revenueChart').getContext('2d');
        new Chart(ctxRevenue, {
            type: 'bar',
            data: {
                labels: ['01', '02', '03', '04', '05', '06', '07'],
                datasets: [
                    {
                        label: 'Last 6 days',
                        data: [40, 70, 45, 60, 85, 50, 40],
                        backgroundColor: '#4F46E5',
                        borderRadius: 4,
                        barPercentage: 0.6
                    },
                    {
                        label: 'Last Week',
                        data: [30, 50, 30, 40, 60, 35, 25],
                        backgroundColor: '#E5E7EB',
                        borderRadius: 4,
                        barPercentage: 0.6
                    }
                ]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: { legend: { display: false } },
                scales: {
                    y: { display: false, beginAtZero: true },
                    x: { grid: { display: false }, border: { display: false } }
                }
            }
        });

        // 2. Order Time Doughnut Chart
        const ctxOrderTime = document.getElementById('orderTimeChart').getContext('2d');
        new Chart(ctxOrderTime, {
            type: 'doughnut',
            data: {
                labels: ['Afternoon', 'Evening', 'Morning'],
                datasets: [{
                    data: [49, 32, 19],
                    backgroundColor: ['#4F46E5', '#818CF8', '#C7D2FE'],
                    borderWidth: 0,
                    cutout: '75%'
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: { legend: { display: false } }
            }
        });

        // 3. Order Line Chart
        const ctxOrder = document.getElementById('orderChart').getContext('2d');
        new Chart(ctxOrder, {
            type: 'line',
            data: {
                labels: ['01', '02', '03', '04', '05', '06', '07'],
                datasets: [
                    {
                        label: 'Last 6 days',
                        data: [20, 45, 30, 50, 40, 60, 80],
                        borderColor: '#4F46E5',
                        backgroundColor: 'rgba(79, 70, 229, 0.1)',
                        borderWidth: 2,
                        tension: 0.4,
                        fill: true,
                        pointRadius: 0
                    },
                    {
                        label: 'Last Week',
                        data: [15, 25, 20, 35, 30, 45, 50],
                        borderColor: '#D1D5DB',
                        borderWidth: 2,
                        tension: 0.4,
                        pointRadius: 0
                    }
                ]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: { legend: { display: false } },
                scales: {
                    y: { display: false, beginAtZero: true },
                    x: { grid: { display: false }, border: { display: false } }
                }
            }
        });

        // Sidebar Active State
        const navItems = document.querySelectorAll('.nav-item');
        navItems.forEach(item => {
            item.addEventListener('click', function(e) {
                navItems.forEach(nav => nav.classList.remove('active'));
                this.classList.add('active');
            });
        });
    </script>
</body>
</html>