<a href="<?=base_url('peminjaman/form')?>">Tambah Data</a>
<table border="1">
    <thead>
        <tr>
            <th>tgl_peminjaman</th>
            <th>tgl_harus_kembali</th>
            <th>tgl_kembali</th>
            <th>tb_pengguna_id_peminjaman</th>
            <th>tb_pengguna_id_pengembalian</th>
            <th>tb_anggota_id</th>
            <th>tb_koleksibuku</th> 
            <th>ubah</th>
            <th>hapus</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($data_peminjaman as $baris) : ?>
            <tr>
                <td><?= $baris['tgl_peminjaman'] ?></td>
                <td><?= $baris['tgl_harus_kembali'] ?></td>
                <td><?= $baris['tgl_kembali'] ?></td>
                <td><?= $baris['tb_pengguna_id_peminjaman'] ?></td>
                <td><?= $baris['tb_pengguna_id_pengembalian'] ?></td>
                <td><?= $baris['tb_anggota_id'] ?></td>
                <td><?= $baris['tb_koleksibuku'] ?></td>
                <td><a href="<?= base_url('peminjaman/edit/') . $baris['id'] ?>">Edit</a></td>
                <td>
                    <form onsubmit="return confirm('apakah yakin ingin hapus data peminjaman?')" method="post" action="<?= base_url('peminjaman/hapus') ?>">
                        <input type="hidden" name="id" value="<?= $baris['id'] ?>" />
                        <button>Hapus</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?> 
    </tbody>
</table>