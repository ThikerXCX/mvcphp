<div class="container mt-3">

	<div class="row">
		<div class="clo-lg-6">
			<?php Flasher::flash(); ?>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-6">
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#formmodal">
			  Tambah Data mahasiswa
			</button>
			<br><br>
			<h3> Daftar Mahasiswa</h3>
				<ul class="list-group ">
					<?php foreach ($data['mhs'] as $mhs) :?>
				 		<li class="list-group-item d-flex justify-content-between align-items-center">
				 			<?= $mhs['nama'];?>
				 			<a href="<?= BASEURL;?>/Mahasiswa/detail/<?= $mhs['id'];?>" class="badge badge-primary">Detail Mahasiswa</a>
				 		</li>
				 	<?php endforeach ?>
				</ul>
		</div>
	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="formmodal" tabindex="-1" aria-labelledby="judulmodal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="judulmodal">Tambah Data Mahasiswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL;?>/Mahasiswa/tambah" method="post">
        	<div class="form-group">
			    <label for="nama">Nama</label>
			    <input type="text" class="form-control" id="nama" name="nama">
			</div>

			<div class="form-group">
			    <label for="nrp">NRP</label>
			    <input type="number" class="form-control" id="nrp" name="nrp">
			</div>

			<div class="form-group">
			    <label for="email">EMAIL</label>
			    <input type="text" class="form-control" id="email" name="email">
			</div>

			<div class="form-group">
			    <label for="jurusan">jurusan</label>
			    <select class="form-control" id="jurusan" name="jurusan">
			      <option value="teknik informatika">Teknik Informatika</option>
			      <option value="sistem informasi">Sistem Informasi</option>
			    </select>
			  </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
    </form>
      </div>
    </div>
  </div>
</div>