<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
<?php echo $this->session->flashdata('alert_msg'); ?>

<h1 class="page-header"><?php echo $judul;?></h1>
	
	<form class="form-horizontal" method="POST" action="<?=site_url('Siswa/act_tambah')?>">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Nama</label>
    <div class="col-sm-10">
      <input type="text" name="nama" class="form-control" placeholder="NAMA">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Alamat</label>
    <div class="col-sm-10">
      <input type="text" name="alamat" class="form-control" placeholder="ALAMAT">
    </div>
    </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Kelas</label>
    <div class="col-sm-10">
      <select class="form-control" name="id_kelas">
      
      <option value=""> --- pilih kelas ---- </option>
      <?php foreach ($kelas as $key => $value): ?>
        <option value="<?=$value->id_kelas?>"><?=$value->nama_kelas?></option>
      <?php endforeach ?>
        
      </select>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <a href="<?=site_url('Siswa')?>" class="btn btn-default">Kembali</a>
      <button type="submit" class="btn btn-success">simpan</button>
    </div>
  </div>
</form>
</div>