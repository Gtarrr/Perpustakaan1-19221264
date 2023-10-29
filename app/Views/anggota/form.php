<form method="post" action="<?= base_url('anggota/simpan') ?>">
    <input type="hidden" name="id" value="<?= $data['id'] ?? '' ?>" />
    <lebel>email</lebel>
    <input type="email" name="email" value="<?= $data['email'] ?? '' ?>" />
    <br />
    <lebel>kata sandi</lebel>
    <input type="password" name="katasandi" value="<?= $data['katasandi'] ?? '' ?>" />
    <br />
    <lebel>nama lengkap</lebel>
    <input type="text" name="nama_lengkap" value="<?= $data['nama_lengkap'] ?? '' ?>" />
    <br />
    <lebel>jenis kelamin</lebel>
    <input type="text" name="jenis_kelamin" value="<?= $data['jenis_kelamin'] ?? '' ?>" />
    <br />
    <lebel>alamat</lebel>
    <input type="text" name="alamat" value="<?= $data['alamat'] ?? '' ?>" />
    <br />
    <button>simpan</button>
</form>