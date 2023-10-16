<a href="<?= base_url('koleksibuku/form') ?>">Tambah Data</a>
<table border="1">
    <thead>
        <tr>
            <th>tb_buku_id</th>
            <th>nomor_koleksi</th>
            <th>status_koleksi</th>
            <th>ubah</th>
            <th>delete</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($data_koleksibuku as $baris) : ?>
            <tr>
                <td><?= $baris['tb_buku_id'] ?></td>
                <td><?= $baris['nomor_koleksi'] ?></td>
                <td><?= $baris['status_koleksi'] ?></td>
                <td><a href="<?= base_url('koleksibuku/edit/') . $baris['id'] ?>">Edit</a></td>
                <td>
                    <form onsubmit="return confirm('apakah yakin ingin hapus data koleksibuku ?')" method="post" action="<?= base_url('koleksibuku/hapus') ?>">
                        <input type="hidden" name="id" value="<?= $baris['id'] ?>" />
                        <button>Hapus</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>