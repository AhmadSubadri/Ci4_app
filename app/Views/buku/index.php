<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">No</th>
            <th scope="col">Sampul</th>
            <th scope="col">Judul Buku</th>
            <th scope="col">Penulis Buku</th>
            <th scope="col">Penerbit Buku</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($buku as $row):?>
        <tr>
            <th scope="row"><?= $row->id;?></th>
            <td><img src="/img/<?= $row->sampul;?>" alt="" width="100px"></td>
            <td><?= $row->judul;?></td>
            <td><?= $row->penulis;?></td>
            <td><?= $row->penerbit;?></td>
            <td>
                <a href="" class="btn btn-info btn-sm btn-edit" data-id="<?= $row->id ?>"
                    data-judul="<?= $row->judul;?>" data-penulis="<?= $row->penulis;?>"
                    data-penerbit="<?= $row->penerbit;?>">Edit</a>
                <a href="" class="btn btn-danger btn-sm btn-delete" data-id="<?= $row->id;?>">Delete</a>
            </td>
        </tr>
        <?php endforeach;?>
    </tbody>
</table>