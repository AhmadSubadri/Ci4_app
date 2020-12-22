<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">ID Buku</th>
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
                <a href="javascript:;" class="btn btn-info btn-sm btn-edit" data-id="<?= $row->id ?>"
                    data-judul="<?= $row->judul;?>" data-penulis="<?= $row->penulis;?>"
                    data-penerbit="<?= $row->penerbit;?>" data-target="#editModal" role="button"
                    data-toggle="modal">Edit</a>
                <a href="javascript:;" role="button" data-toggle="modal" class="btn btn-danger btn-sm btn-delete"
                    data-id="<?= $row->id;?>" data-target="#deleteModal">Delete</a>
            </td>
        </tr>
        <?php endforeach;?>
    </tbody>
</table>

<form action="/Buku/save" method="post">
    <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New Buku</h5>
                    <button type="button" class="close" data-dismiss="modal" ari-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Judul</label>
                        <input type="text" class="form-control" name="judul" placeholder="Judul">
                    </div>
                    <div class="form-group">
                        <label>Slug</label>
                        <input type="text" class="form-control" name="slug" placeholder="Slug">
                    </div>
                    <div class="form-group">
                        <label>Penulis</label>
                        <input type="text" class="form-control" name="penulis" placeholder="Penulis">
                    </div>
                    <div class="form-group">
                        <label>Penerbit</label>
                        <input type="text" class="form-control" name="penerbit" placeholder="Penerbit">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
    </div>
</form>


<form action="/Buku/update" method="post">
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Buku</h5>
                    <button type="button" class="close" data-dismiss="modal" ari-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Judul</label>
                        <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul">
                    </div>
                    <div class="form-group">
                        <label>Slug</label>
                        <input type="text" class="form-control" id="slug" name="slug" placeholder="Slug">
                    </div>
                    <div class="form-group">
                        <label>Penulis</label>
                        <input type="text" class="form-control" id="penulis" name="penulis" placeholder="Penulis">
                    </div>
                    <div class="form-group">
                        <label>Penerbit</label>
                        <input type="text" class="form-control" id="penerbit" name="penerbit" placeholder="Penerbit">
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="hidden" name="id" id="id" class="id">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </div>
        </div>
    </div>
</form>


<form action="/Buku/delete" method="post">
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New Buku</h5>
                    <button type="button" class="close" data-dismiss="modal" ari-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h4>Apakah ingin menghapus data ini ?</h4>
                </div>
                <div class="modal-footer">
                    <input type="hidden" name="id" class="id" id="id">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                    <button type="submit" class="btn btn-primary">Yes</button>
                </div>
            </div>
        </div>
    </div>
</form>