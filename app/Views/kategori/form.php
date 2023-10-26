<form method="post" action="<?=base_url('kategori/simpan')?>">
    <input type="hidden" name="id" value="<?=$data['id']??''?>"/>
     <label>kategori</label>
     <input type="kategori" name="kategori" value="<?=$data['kategoti']??''?>"/>
    </br>
     <label>kode_dcc</label>
     <input type="number" name="kode_dcc" value="<?=$data['kode_dcc']??''?>"/>
    </br>
    <button>simpan</button>
</form>