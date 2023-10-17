<a href="<?= base_url('peminjaman/form') ?>">Tambah Data</a>
<table border="1">
    <thead>
        <tr>
            <th>tgl_peminjaman</th>
            <th>tgl_harus_kembali</th>
            <th>tgl_kembali</th>
            <th>tb_pengguna_id_peminjaman</th>
            <th>tb_pengguna_id_pengembalian</th>
            <th>tb_anggota_id</th>
            <th>tb_koleksibuku_id</th>
            <th>delete</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($data_anggota as $baris) : ?>
            <tr>
                <td><?= $baris['tgl_peminjaman'] ?></td>
                <td><?= $baris['tgl_harus_kembali'] ?></td>
                <td><?= $baris['tgl_kembali'] ?></td>
                <td><?= $baris['tb_pengguna_id_peminjaman'] ?></td>
                <td><?= $baris['tb_pengguna_id_pengembalian'] ?></td>
                <td><?= $baris['tb_anggota_id'] ?></td>
                <td><?= $baris['tb_koleksibuku_id'] ?></td>
                <td><?= $baris['alamat'] ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>