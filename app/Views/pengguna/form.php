<form method="post" action="<?= base_url('pengguna/simpan') ?>">
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
    <lebel>tingkat</lebel>
    <select name='tingkat'>
        <option value="" disabled selected>-Pilih Tingkat-</option>
        <option value="ADM">ADM</option>
        <option value="PUS">PUS</option>
    </select>
    <br />
    <button method="post" action="<?= base_url('pengguna') ?? '' ?>">simpan</button>
</form>