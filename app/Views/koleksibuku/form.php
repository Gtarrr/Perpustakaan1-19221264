<form method="post" action="<?= base_url('koleksibuku/simpan') ?>">
    <input type="hidden" name="id" value="<?= $data['id'] ?? '' ?>" />
    <lebel>tb_buku_id</lebel>
    <input type="text" name="tb_buku_id" value="<?= $data['tb_buku_id'] ?? '' ?>" />
    <br />
    <lebel>nomor_koleksi</lebel>
    <input type="text" name="nomor_koleksi" value="<?= $data['nomor_koleksi'] ?? '' ?>" />
    <br />
    <lebel>status_koleksi</lebel>
    <input type="text" name="status_koleksi" value="<?= $data['status_koleksi'] ?? '' ?>" />
    <br />
    <button>simpan</button>
</form>