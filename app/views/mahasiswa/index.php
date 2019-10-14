<div class="container mt-3">

	<div class="row">
		<div class="col-lg-6">
			<?php Flasher::flash(); ?>
		</div>
	</div>

	<div class="row mb-3">
		<div class="col-lg-6">
			<button type="button" class="btn btn-primary editDataButton" data-toggle="modal" data-target="#formModal">
					Add Mahasiswa Data
			</button>
		</div>
	</div>

	<div class="row mb-3">
		<div class="col-lg-6">
			<form action="<?= BASEURL; ?>/mahasiswa/search" method="post">
				<div class="input-group ">
					<input type="text" class="form-control" placeholder="search mahasiswa..." name="keyword" id='keyword' autocomplete="off" >
					<div class="input-group-append">
						<button class="btn btn-dark" type="submit" id="searchButton">Search</button>
					</div>
				</div>
			</form>
		</div>
	</div>
	
	<div class="row">
		<div class="col-lg-6">
			<h3>Daftar Mahasiswa</h3>
			<ul class="list-group">
				  <?php  foreach ($data['mhs'] as $mhs ) : ?>
				  <li class="list-group-item">
				  	<?= $mhs['name']; ?>
					 <a href="<?= BASEURL; ?>/mahasiswa/delete/<?= $mhs['id']; ?>" class="badge badge-danger float-right ml-1" onclick="return confirm('are you sure?');">delete</a> 
					 <a href="<?= BASEURL; ?>/mahasiswa/edit/<?= $mhs['id']; ?>" class="badge badge-success float-right ml-1 tampilModalUbah" data-toggle="modal" data-target="#formModal" data-id="<?= $mhs['id']; ?>">edit</a>
					 <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>" class="badge badge-dark float-right ml-1">detail</a>
				  		
				  </li>
				  <?php endforeach; ?>	
			</ul>
						
		</div>
	</div>

</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="modalTitleLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalTitleLabel">Add Mahasiswa Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

		<form action="<?= BASEURL; ?>/mahasiswa/add" method="post">
			<input type="hidden" name="id" id="id">
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

			<div class="form-group">
				<label for="course">Course</label>
				<select class="form-control" id="course" name="course">
					<option value="Information Technology">Information Technology</option>
					<option value="Artificial Intelligence">Artificial Intelligence</option>
					<option value="Information Management">Information Management</option>
					<option value="Software Engineering">Software Engineering</option>
					<option value="Networking">Networking</option>
					<option value="Data Science">Data Science</option>
				</select>
			</div>

			

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Add Data</button>
		</form>
      </div>
    </div>
  </div>
</div>
