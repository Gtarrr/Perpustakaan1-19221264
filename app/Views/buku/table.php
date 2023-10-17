<a href="<?= base_url('buku/form') ?>">Tambah Data</a>
<table border="1">
    <thead>
        <tr>
            <th>judul</th>
            <th>edisi</th>
            <th>cetakan</th>
            <th>sinopsis</th>
            <th>tb_kategori_id</th>
            <th>tb_penerbit_id</th>
            <th>isbn</th>
            <th>penulis</th>
            <th>ubah</th>
            <th>delete</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($data_buku as $baris) : ?>
            <tr>
                <td><?= $baris['judul'] ?></td>
                <td><?= $baris['edisi'] ?></td>
                <td><?= $baris['cetakan'] ?></td>
                <td><?= $baris['sinopsis'] ?></td>
                <td><?= $baris['tb_kategori_id'] ?></td>
                <td><?= $baris['tb_penerbit_id'] ?></td>
                <td><?= $baris['isbn'] ?></td>
                <td><?= $baris['penulis'] ?></td>
                <td><a href="<?= base_url('buku/edit/') . $baris['id'] ?>">Edit</a></td>
                <td>
                    <form onsubmit="return confirm('apakah yakin ingin hapus data buku?')" method="post" action="<?= base_url('buku/hapus') ?>">
                        <input type="hidden" name="id" value="<?= $baris['id'] ?>" />
                        <button>Hapus</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>