<?php
session_start();
include 'layout/head.php';
require 'config/database.php';
?>
    <title>Input_barang</title>
<?php
include 'layout/sidebar.php';

?>
<style>
    :root {
        --primary: #4F46E5;
        --primary-bg: #EEF2FF;
        --text-dark: #1F2937;
        --text-gray: #6B7280;
        --bg-body: #F3F4F6;
        --bg-card: #FFFFFF;
        --border: #E5E7EB;
    }

    /* Form Layout */
    .form-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 15px;
        margin-bottom: 20px;
    }

    .form-group {
        display: flex;
        flex-direction: column;
        gap: 6px;
    }

    .form-group label {
        font-size: 12px;
        font-weight: 600;
        color: var(--text-gray);
    }

    .form-group input, 
    .form-group select {
        padding: 12px 15px;
        border: 1px solid var(--border);
        border-radius: 8px;
        font-size: 14px;
        outline: none;
        transition: all 0.2s ease;
        background-color: var(--bg-card);
        color: var(--text-dark);
    }

    .form-group input:focus, 
    .form-group select:focus {
        border-color: var(--primary);
        box-shadow: 0 0 0 3px var(--primary-bg);
    }

    .form-group input::placeholder {
        color: #9CA3AF;
    }

    /* Button Submit */
    .btn-submit {
        background: var(--primary);
        color: white;
        border: none;
        padding: 12px 20px;
        border-radius: 8px;
        cursor: pointer;
        font-weight: 600;
        font-size: 14px;
        transition: background 0.2s;
        display: inline-flex;
        align-items: center;
        gap: 8px;
    }

    .btn-submit:hover {
        background: #4338CA;
    }

    /* Table Styles */
    .table-responsive {
        overflow-x: auto;
        margin-top: 30px;
        border: 1px solid var(--border);
        border-radius: 8px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        font-size: 13px;
        text-align: left;
    }

    th, td {
        padding: 14px 16px;
        border-bottom: 1px solid var(--border);
    }

    th {
        background: #F9FAFB;
        font-weight: 600;
        color: var(--text-gray);
        text-transform: uppercase;
        font-size: 11px;
        letter-spacing: 0.5px;
    }

    tbody tr:last-child td {
        border-bottom: none;
    }

    tbody tr:hover {
        background: #F9FAFB;
    }

    /* Badge Kategori */
    .badge-kategori {
        background: var(--primary-bg);
        color: var(--primary);
        padding: 4px 8px;
        border-radius: 6px;
        font-weight: 600;
        font-size: 11px;
        display: inline-block;
    }

    /* Button Hapus */
    .btn-delete {
        background: #FEF2F2;
        color: #EF4444;
        border: none;
        padding: 6px 10px;
        border-radius: 6px;
        cursor: pointer;
        font-size: 12px;
        font-weight: 500;
        transition: 0.2s;
        display: inline-flex;
        align-items: center;
        gap: 5px;
    }

    .btn-delete:hover {
        background: #FEE2E2;
        color: #DC2626;
    }
</style>

    <!-- MAIN CONTENT -->
    <main class="main-content">

        <?php 
        include 'layout/navbar.php';
        ?>

        <h1 class="page-title">Input Barang</h1>

        <?php if (isset($_SESSION['success'])): ?>
            <div class="alert success"><?= $_SESSION['success']; ?></div>
            <?php unset($_SESSION['success']); ?>
        <?php endif; ?>

        <?php if (isset($_SESSION['error'])): ?>
            <div class="alert error"><?= $_SESSION['error']; ?></div>
            <?php unset($_SESSION['error']); ?>
            
        <?php endif; ?>
        <br>
        <form action="proses_input_barang.php" method="POST">
            <div class="form-grid">
                <div class="form-group">
                    <label for="kode">Kode Barang</label>
                    <input type="text" id="kode" name="kode" placeholder="Contoh: KTG-001" required>
                </div>
                <div class="form-group">
                    <label for="namaSupplier">Nama Barang</label>
                    <input type="text" id="namaSupplier" name="nama" placeholder="Contoh: Dove" required>
                </div>
                <div class="form-group">
                    <label for="namaSupplier">Nama Supplier</label>
                    <input type="text" id="namaSupplier" name="supplier" placeholder="Contoh: PT. Makmur Jaya" required>
                </div>
                <div class="form-group">
                    <label for="kategori">Kategori</label>
                    <select id="kategori" name="kategori" required>
                        <option value="" disabled selected>Pilih Kategori</option>
                        <option value="Minuman">Minuman</option>
                        <option value="Cemilan">Cemilan</option>
                        <option value="Shampo">Shampo</option>
                        <option value="Sabun">Sabun</option>
                        <option value="Kosmetik">Kosmetik</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="hargaSupplier">Harga Supplier (Rp)</label>
                    <input type="number" id="hargaSupplier" name="harga_supplier" placeholder="Contoh: 15000" required>
                </div>
                <div class="form-group">
                    <label for="hargaJual">Harga Jual (Rp)</label>
                    <input type="number" id="hargaJual" name="harga_jual" placeholder="Contoh: 20000" required>
                </div>
            </div>
            
            <button type="submit" name="submit" class="btn-submit">
                <i class="fa-solid fa-plus"></i> Simpan Data
            </button>
        </form>
    </main>

<?php 
include 'layout/footer.php';
?>