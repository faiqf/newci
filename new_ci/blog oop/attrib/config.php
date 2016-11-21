<?php




class database{
// var $host = 'localhost';
// var $root = 'root';
// var $pass = '';
	var $db = 'blog';

	var $query = "select * 

	from
	tb_thumbail";


	
	public function __construct(){
		$conn = mysql_connect('localhost','root','');
		mysql_select_db($this->db);
		$this->result = mysql_query($this->query);
		$this->data = mysql_fetch_array($this->result);
	}
	// public function Judul(){
	// 	echo "<h1>".$this->data['Judul']."</h1>";
	// }
	
	// public function tanggal(){
	// 	echo"<h5>".$this->data['Tanggal']."</h5>" ;
	// }
	
	// // public function author(){
	// // 	echo "<strong>".$this->data['nama_author'];
	// // }
	
	// public function isi(){
	// 	echo $this->data['Konten'];
	// }

	public function artikel()
	{
		$conn = mysql_connect('localhost','root','');
		mysql_select_db("blog");
		$query = "select * from tb_thumbail";

		$result = mysql_query($query);
		while ($data = mysql_fetch_array($result)) {
			?>


				<div class="col-sm-6 col-md-4">
					<div class="thumbnail">
						<img src="attrib/images/<?php echo $data['Gambar'];?>" alt="...">
						<div class="caption">
							<?php 
							echo "<h3><h1>".$data['Judul']."</h1></h3>";
							echo"<p><h5>".$data['Tanggal']."</h5></p>" ;
							echo "<p>".$data['Konten']."<p>";
							?>
							<p><a href="attrib/rangka/artikel/<?php echo $data['Link']; ?>" class="btn btn-primary" role="button">Baca selengkapnya</a></p>
						</div>
					</div>
				</div>

			<?php
		} 

	}

}

$run = new database;
// $run->judul();
// $run->tanggal();
// // $run->author();
// $run->isi();
?>
