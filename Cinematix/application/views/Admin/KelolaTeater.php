<!-- Begin Page Content -->
<div class="container-fluid">

<div class="row">
    <div class="col-md-6">
        <?= $this->session->flashdata('message'); ?>
        <?= form_error('idTeater', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
        <?= form_error('NamaTeater', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <a href="" class="btn btn-primary addTeaterbtn" style="margin-bottom:10px;padding:10px" data-toggle="modal" data-target="#teaterModal">Tambah Data Teater</a>
    </div>
</div>

<!-- DataTales  -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h2 class="m-0 font-weight-bold text-primary">List Teater</h2>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" >
                <thead class="text-center">
                    <tr>
                        <th>idTeater</th>
                        <th>NamaTeater</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($teater as $te) : ?>
                    <tr >
                        <td><?= $te['idTeater']; ?></td>
                        <td><?= $te['NamaTeater']; ?></td>
                        <td class="d-flex justify-content-center">
                            <button type="button" class="btn btn-secondary EditTeaterbtn" data-toggle="modal" data-target="#teaterModal" data-teater_id="<?= $te['idTeater'] ?>">Edit</button>
                            <a href="<?= base_url(); ?>Teater/delTeater/<?= $te['idTeater']; ?>" class="btn btn-danger btn-icon-split btn-sm ml-2 delTeaterbtn" onclick="return confirm('Apakah Anda yakin untuk menghapus data ini ?');">
                                <span class="text">Hapus</span>
                            </a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modal -->
<!-- Modal Add/Edit Teater -->
<div class="modal fade" id="teaterModal" tabindex="-1" role="dialog" aria-labelledby="teaterModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="LabelteaterModal">Form Tambah Teater</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post" enctype="multipart/form-data" id="TeaterForm" action="<?= base_url('Teater/addTeater'); ?>">
                <input type="hidden" name="idlama" id="idlama">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="formGroupExampleInput">Id Teater</label>
                        <input type="text" class="form-control" id="idTeater" name="idTeater">
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput">Nama Teater</label>
                        <input type="text" class="form-control" id="NamaTeater" name="NamaTeater">
                    </div>
                </div>
                <div class="modal-footer footer-teater">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->