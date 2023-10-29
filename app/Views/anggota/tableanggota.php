<a href="<?= base_url('anggota/form') ?>">Tambah Data</a>
<table border="1">
    <thead>
        <tr>
            <th>email</th>
            <th>nama_lengkap</th>
            <th>jenis_kelamin</th>
            <th>alamat</th>
            <th>ubah</th>
            <th>delete</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($data_anggota as $baris) : ?>
            <tr>
                <td><?= $baris['email'] ?></td>
                <td><?= $baris['nama_lengkap'] ?></td>
                <td><?= $baris['jenis_kelamin'] ?></td>
                <td><?= $baris['alamat'] ?></td>
                <td>
                    <img src="<?= base_url('anggota/foto/' . $baris['id'] . '.png') ?>" style="width:100px" />
                </td>
                <td><a href="<?= base_url('anggota/edit/') . $baris['id'] ?>">Edit</a></td>
                <td>
                    <form onsubmit="return confirm('apakah yakin ingin hapus data anggota?')" method="post" action="<?= base_url('anggota/hapus') ?>">
                        <input type="hidden" name="id" value="<?= $baris['id'] ?>" />
                        <button>Hapus</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>