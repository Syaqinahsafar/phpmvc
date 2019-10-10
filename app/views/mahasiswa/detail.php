<div class="container mt-5">

	<div class="card" style="width: 18rem;">
	  <div class="card-body">
	    <h5 class="card-title"><?= $data['mhs']['name']; ?></h5>
	    <h6 class="card-subtitle mb-2 text-muted"><?= $data['mhs']['matric']; ?></h6>
	    <p class="card-text"><?= $data['mhs']['email']; ?></p>
	    <p class="card-text"><?= $data['mhs']['course']; ?></p>
	    <a href="<?= BASEURL; ?>/mahasiswa" class="card-link">Back</a>
	  </div>
	</div>

</div>	