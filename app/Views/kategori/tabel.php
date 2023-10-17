<a href="<?=base_url('kategori/form')?>">Tambah Data</a>
<table border="1">
<thead>
    <tr>
        <th>kategori</th>
        <th>kode_dcc</th>
        <th>ubah</th>
        <th>hapus</th>
    </tr>
</thead>
<tbody>
   <?php foreach($data_kategori as $baris):?>
    <tr>
        <td><?=$baris['kategori']?></td>
        <td><?=$baris['kode_dcc']?></td>
        <td><a href="<?=base_url('kategori/edit/'). $baris['id']?>">edit </a></td>
        <td>
            <form onsubmit="return confirm('apakah mau di hapus?')" method="post" action="<?=base_url('kategori/hapus')?>">
                <input type="hidden" name="id" value="<?=$baris['id']?>"/>
                <button>hapus</button>
            </form>
        </td>

    </tr>
    <?php endforeach?>
</tbody>
</table>