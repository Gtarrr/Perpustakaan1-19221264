<form method="post" action="<?= base_url('peminjaman/simpan') ?>">
    <input type="hidden" name="id" value="<?= $data['id'] ?? '' ?>" />
    <lebel>tgl_peminjaman</lebel>
    <input type="date" name="tgl_peminjaman" value="<?= $data['tgl_peminjaman'] ?? '' ?>" />
    <br />
    <lebel>tgl_harus_kembali</lebel>
    <input type="date" name="tgl_harus_kembali" value="<?= $data['tgl_harus_kembali'] ?? '' ?>" />
    <br />
    <lebel>tgl_kembali</lebel>
    <input type="date" name="tgl_kembali" value="<?= $data['tgl_kembali'] ?? '' ?>" />
    <br />
    <lebel>tb_pengguna_id_peminjaman</lebel>
    <input type="text" name="tb_pengguna_id_peminjaman" value="L<?= $data['tb_pengguna_id_peminjaman'] ?? '' ?>" />
    <br />
    <lebel>tb_pengguna_id_pengembalian</lebel>
    <input type="text" name="tb_pengguna_id_pengembalian" value="<?= $data['tb_pengguna_id_pengembalian'] ?? '' ?>" />
    <br />
    <lebel>tb_anggota_id</lebel>
    <input type="text" name="tb_anggota_id" value="<?= $data['tb_anggota_id'] ?? '' ?>" />
    <br />
    <lebel>tb_koleksibuku_id</lebel>
    <input type="text" name="tb_koleksibuku_id" value="<?= $data['tb_koleksibuku_id'] ?? '' ?>" />
    <br />
    <lebel>denda</lebel>
    <input type="string" name="denda" value="<?= $data['denda'] ?? '' ?>" />
    <br />
    <button>simpan</button>
</form>