<form method="post" action="<?=base_url('penerbit/simpan') ?>">
    <input type="hidden" name="id" value="<?= $data['id'] ?? '' ?>" />
    <label>penerbit</label>
    <input type="penerbit" name="penerbit" value="<?= $data['penerbit'] ?? '' ?>" />
    <br />
    <label>kota</label>
    <input type="kota" name="kota" value="<?= $data['kota'] ?? '' ?>" />
    <br />
    <button>simpan</button>
</form>