<a href="<?= base_url('pengguna/form') ?>">Tambah Data</a>
<table border="1">
    <thead>
        <tr>
            <th>email</th>
            <th>nama_lengkap</th>
            <th>tingkat</th>
            <th>ubah</th>
            <th>delete</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($data_pengguna as $baris) : ?>
            <tr>
                <td><?= $baris['email'] ?></td>
                <td><?= $baris['nama_lengkap'] ?></td>
                <td><?= $baris['tingkat'] ?></td>
                <td><a href="<?= base_url('pengguna/edit/') . $baris['id'] ?>">Edit</a></td>
                <td>
                    <form onsubmit="return confirm('apakah yakin ingin hapus data pengguna?')" method="post" action="<?= base_url('pengguna/hapus') ?>">
                        <input type="hidden" name="id" value="<?= $baris['id'] ?>" />
                        <button>Hapus</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>