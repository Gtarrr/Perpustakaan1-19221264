<h3>Selamat Datang DiPustakawan<?= $pengguna['nama_lengkap'] ?? '' ?>
    <?php if ($pengguna('tingkat') == 'PUS') {
    } else {
        echo "Administrator";
    } ?></h3>

<ul>
    <li><a href="<?= base_url('anggota') ?>">Anggota</a></li>
    <li><a href="<?= base_url('kategori') ?>">Kategori</a></li>
    <li><a href="<?= base_url('penerbit') ?>">Penerbit</a></li>
    <li><a href="<?= base_url("") ?>">Buku</a></li>
    <li><a href="<?= base_url("") ?>">Koleksi Buku</a></li>
    <li><a href="<?= base_url("") ?>">Peminjaman</a></li>
</ul>