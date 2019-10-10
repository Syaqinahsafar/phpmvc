<div class="container mt-3">
	
	<div class="row">
		<div class="col-6">
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#formModal">
  				Add Mahasiswa Data
			</button>	
			<br><br>
			<h3>Daftar Mahasiswa</h3>
			<ul class="list-group">
				  <?php  foreach ($data['mhs'] as $mhs ) : ?>
				  <li class="list-group-item d-flex justify-content-between align-items-center">
				  	<?= $mhs['name']; ?>
				  	<a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>" class="badge badge-dark">detail</a>
				  		
				  </li>
				  <?php endforeach; ?>	
			</ul>
						
		</div>
	</div>

</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="modalTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalTitle">Add Mahasiswa Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

		<form action="<?= BASEURL; ?>/mahasiswa/add" method="post">
			<div class="form-group">
				<label for="name">Name</label>
				<input type="text" class="form-control" id="name" name="name">
			</div>

			<div class="form-group">
				<label for="matric">Matric</label>
				<input type="number" class="form-control" id="matric" name="matric">
			</div>

			<div class="form-group">
				<label for="email">Email</label>
				<input type="email" class="form-control" id="email" name="email">
			</div>

			

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Add Data</button>
		</form>
      </div>
    </div>
  </div>
</div>
