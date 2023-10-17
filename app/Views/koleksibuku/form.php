<form method="post" action="<?= base_url('koleksibuku/simpan') ?>">
    <input type="hidden" name="id" value="<?= $data['id'] ?? '' ?>" />
    <lebel>tb_buku_id</lebel>
    <input type="text" name="tb_buku_id" value="<?= $data['tb_buku_id'] ?? '' ?>" />
    <br />
    <lebel>nomor_koleksi</lebel>
    <input type="number" name="nomor_koleksi" value="<?= $data['nomor_koleksi'] ?? '' ?>" />
    <br />
    <lebel>status_koleksi</lebel>
    <input type="radio" name="status_koleksi" value="A<?= $data['status_koleksi'] ?? '' ?>" />A
    <input type="radio" name="status_koleksi" value="P<?= $data['status_koleksi'] ?? '' ?>" />P
    <input type="radio" name="status_koleksi" value="H<?= $data['status_koleksi'] ?? '' ?>" />H
    <input type="radio" name="status_koleksi" value="R<?= $data['status_koleksi'] ?? '' ?>" />R
    <br />
    <button>simpan</button>
</form>