<?php
include 'layout/head.php';
?>
    <title>Kasir Dashboard</title>
<?php
include 'layout/sidebar.php';
?>

    <!-- MAIN CONTENT -->
    <main class="main-content">
        <?php 
        include 'layout/navbar.php';
        ?>

        <h1 class="page-title">Dashboard</h1>

        <!-- TOP ROW GRID -->
        <div class="dashboard-grid">
            <!-- Revenue Card -->
            <div class="card">
                <div class="card-header">
                    <span class="card-title">Revenue</span>
                    <button class="btn-report">View Report</button>
                </div>
                <div class="revenue-value">IDR 7.852.000</div>
                <div class="trend"><i class="fa-solid fa-arrow-trend-up"></i> 2.5% <span style="color: var(--text-gray); font-weight: 400; margin-left: 5px;">vs last week</span></div>
                <div class="date-sub">Sales from 1-12 Dec, 2020</div>
                <div class="chart-container">
                    <canvas id="revenueChart"></canvas>
                </div>
            </div>

            <!-- Order Time Card -->
            <div class="card">
                <div class="card-header">
                    <span class="card-title">Order Time</span>
                    <button class="btn-report">View Report</button>
                </div>
                <div class="date-sub">From 1-8 Dec, 2020</div>
                <div class="chart-container donut">
                    <canvas id="orderTimeChart"></canvas>
                    <div class="donut-center-text">
                        <h4>Afternoon</h4>
                        <p>1.890 orders</p>
                    </div>
                </div>
                <div style="display: flex; justify-content: space-between; font-size: 11px; margin-top: 15px; font-weight: 500;">
                    <div><span style="color: #4F46E5;">●</span> Afternoon <br><b style="margin-left: 12px;">49%</b></div>
                    <div><span style="color: #818CF8;">●</span> Evening <br><b style="margin-left: 12px;">32%</b></div>
                    <div><span style="color: #C7D2FE;">●</span> Morning <br><b style="margin-left: 12px;">19%</b></div>
                </div>
            </div>
        </div>

        <!-- BOTTOM ROW GRID -->
        <div class="bottom-grid">
            <!-- Your Rating Card -->
            <div class="card">
                <div class="card-header">
                    <span class="card-title">Your Rating</span>
                </div>
                <div class="date-sub" style="margin-bottom: 0;">Lorem ipsum dolor sit amet, consectetur</div>
                <div class="rating-circles">
                    <div class="circle circle-1">85% <span>Regular</span></div>
                    <div class="circle circle-2">92% <span>Excellent</span></div>
                    <div class="circle circle-3">85% <span>Food Taste</span></div>
                </div>
            </div>

            <!-- Most Ordered Food Card -->
            <div class="card">
                <div class="card-header">
                    <span class="card-title">Most Ordered Food</span>
                </div>
                <div class="date-sub" style="margin-bottom: 5px;">Adipiscing elit, sed do eiusmod tempor</div>
                <ul class="food-list">
                    <li class="food-item">
                        <div class="food-info">
                            <div class="food-img">🥗</div>
                            <div>
                                <div class="food-name">Fresh Salad Bowl</div>
                                <div class="food-price">Rp 45.000</div>
                            </div>
                        </div>
                    </li>
                    <li class="food-item">
                        <div class="food-info">
                            <div class="food-img">🍜</div>
                            <div>
                                <div class="food-name">Chicken Noodle</div>
                                <div class="food-price">Rp 75.000</div>
                            </div>
                        </div>
                    </li>
                    <li class="food-item">
                        <div class="food-info">
                            <div class="food-img">🥤</div>
                            <div>
                                <div class="food-name">Smoothie Fruits</div>
                                <div class="food-price">Rp 40.000</div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>

            <!-- Order Chart Card -->
            <div class="card">
                <div class="card-header">
                    <span class="card-title">Order</span>
                    <button class="btn-report">View Report</button>
                </div>
                <div class="revenue-value">2.568</div>
                <div class="trend down"><i class="fa-solid fa-arrow-trend-down"></i> 3.5% <span style="color: var(--text-gray); font-weight: 400; margin-left: 5px;">vs last week</span></div>
                <div class="date-sub">Sales from 1-8 Dec, 2020</div>
                <div class="chart-container">
                    <canvas id="orderChart"></canvas>
                </div>
            </div>
        </div>
    </main>

<?php 
include 'layout/footer.php';
?>