<<a href="<?=base_url('penerbit/form')?>">Tambah Data</a>
<table border="1">
<thead>
    <tr>
        <th>penerbit</th>
        <th>kota</th>
    </tr>
</thead>
<tbody>
    <?php foreach($data_penerbit as $baris):?>
        <tr>
            <td><?=$baris['penerbit']?></td>
            <td><?=$baris['kota']?></td>
            <td><a href="<?=base_url('penerbit/edit/'). $baris['id']?>">edit </a></td>

        </tr>
        <?php endforeach;?>
</tbody>
</table>