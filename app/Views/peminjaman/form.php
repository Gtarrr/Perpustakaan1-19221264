<form method="post" action="<?= base_url('peminjaman/simpan') ?>">
   <input type="hidden" name="id" value="<?= $data['id'] ?? '' ?>" />
   <label>tgl_peminjaman</label>
   <input type="date" name="tgl_peminjaman" value="<?= $data['tgl_peminjaman'] ?? '' ?>" />
   <br />
   <label>tgl_harus_kembali</label>
   <input type="date" name="tgl_harus_kembali" value="<?= $data['tgl_harus_kembali'] ?? '' ?>" />
   <br />
   <label>tgl_kembali</label>
   <input type="date" name="tgl_kembali" value="<?= $data['tgl_kembali'] ?? '' ?>" />
   <br />
   <label>tb_pengguna_id_peminjaman</label>
   <input type="text" name="tb_pengguna_id_peminjaman" value="<?= $data['tb_pengguna_id_peminjaman'] ?? '' ?>" />
   <br />
   <label>tb_pengguna_id_pengembalian</label>
   <input type="text" name="tb_pengguna_id_pengembalian" value="<?= $data['tb_pengguna_id_pengembalian'] ?? '' ?>" />
   <br />
   <label>anggota_id</label>
   <input type="text" name="anggota_id" value="<?= $data['anggota_id'] ?? '' ?>" />
   <br />
   <label>tb_koleksibuku</label>
   <input type="text" name="tb_koleksibuku" value="<?= $data['tb_koleksibuku'] ?? '' ?>" />
   <br />
   <button>simpan</button>
</form>