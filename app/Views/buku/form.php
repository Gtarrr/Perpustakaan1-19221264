<form method="post" action="<?= base_url('buku/simpan') ?>">
    <input type="hidden" name="id" value="<?= $data['id'] ?? '' ?>" />
    <lebel>judul</lebel>
    <input type="text" name="judul" value="<?= $data['judul'] ?? '' ?>" />
    <br />
    <lebel>edisi</lebel>
    <input type="text" name="edisi" value="<?= $data['edisi'] ?? '' ?>" />
    <br />
    <lebel>cetakan</lebel>
    <input type="text" name="cetakan" value="<?= $data['cetakan'] ?? '' ?>" />
    <br />
    <lebel>sinopsis</lebel>
    <input type="text" name="sinopsis" value="<?= $data['sinopsis'] ?? '' ?>" />
    <br />
    <lebel>tb_kategori_id</lebel>
    <input type="text" name="tb_kategori_id" value="<?= $data['tb_kategori_id'] ?? '' ?>" />
    <br />
    <lebel>tb_penerbit_id</lebel>
    <input type="text" name="tb_penerbit_id" value="<?= $data['tb_penerbit_id'] ?? '' ?>" />
    <br />
    <lebel>isbn</lebel>
    <input type="text" name="isbn" value="<?= $data['isbn'] ?? '' ?>" />
    <br />
    <lebel>penulis</lebel>
    <input type="text" name="penulis" value="<?= $data['penulis'] ?? '' ?>" />
    <button>simpan</button>
</form>