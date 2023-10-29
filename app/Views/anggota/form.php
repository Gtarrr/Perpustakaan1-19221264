<form enctype="multipart/form-data" method="post" action="<?= base_url('anggota/simpan') ?>">
    <input type="hidden" name="id" value="<?= $data['id'] ?? '' ?>" />
    <lebel>email</lebel>
    <input type="email" name="email" value="<?= $data['email'] ?? '' ?>" />
    <br />
    <span> <?= $validation?->getError('email') ?? '' ?> </span><br />

    <lebel>kata sandi</lebel>
    <input type="password" name="katasandi" value="<?= $data['katasandi'] ?? '' ?>" />
    <br />
    <span> <?= $validation?->getError('katasandi') ?? '' ?> </span><br />

    <lebel>nama lengkap</lebel>
    <input type="text" name="nama_lengkap" value="<?= $data['nama_lengkap'] ?? '' ?>" />
    <br />
    <span> <?= $validation?->getError('nama_lengkap') ?? '' ?> </span><br />

    <lebel>jenis kelamin</lebel>
    <input type="radio" name="jenis_kelamin" value="L" <?= ($data['jenis_kelamin'] ?? '') == 'L' ? 'checked' : '' ?> />laki-laki
    <input type="radio" name="jenis_kelamin" value="P" <?= ($data['jenis_kelamin'] ?? '') == 'P' ? 'checked' : '' ?> />Perempuan
    <br />
    <lebel>alamat</lebel>
    <input type="text" name="alamat" value="<?= $data['alamat'] ?? '' ?>" />
    <br />
    <lebel>alamat</lebel>
    <input type="text" name="alamat" value="<?= $data['alamat'] ?? '' ?>" />
    <br />
    <label>Foto</label>
    <input type="file" name="foto" />
    <br />
    <button>simpan</button>
</form>