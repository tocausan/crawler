<? include("layout/head.php") ?>

	<?php 
			
		/*
			open connection to sqliteDB
		*/
		
		// open sqlite database
		class sqliteDB extends SQLite3
		{
			function __construct()
			{
				$this->open('sqliteDB/crawler.sqlite');
			}
		}		
		$sqliteDB = new sqliteDB();
		
		// set sql request
		$sql = " SELECT * from crawler; ";
	?>
	
<table class="small-12">
	
	<?php	
		
		// exec sql request
		$ret = $sqliteDB->query($sql);
		while($row = $ret->fetchArray(SQLITE3_ASSOC) ){ ?>
			<tr>
				<td><?=$row['ID']?></td>
				<td><?=$row['SOURCE']?></td>
				<td><?=$row['URL']?></td>
			</tr>
		<? } ?>
</table>
<? include("layout/footer.php") ?>