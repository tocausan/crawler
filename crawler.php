<pre>

<?php
	
	$website = $_GET["website"];
	echo $website." crawled !<hr>";
	
	
	function crawl_page($url, $depth = 5)
	{
		
		static $seen = array();
		if (isset($seen[$url]) || $depth === 0) {
			return;
		}
		
		$seen[$url] = true;
		
		// data
		$data = array();
		$i = 0;
		
		// DOM
		$dom = new DOMDocument('1.0');
		$dom->loadHTMLFile($url);
		
		// looking for "a" elements
		$anchors = $dom->getElementsByTagName('a');
		foreach ($anchors as $element) {
			
			// get "href" content
			$href = $element->getAttribute('href');
			
			
			
			
			if (0 !== strpos($href, 'http')) {
				$path = '/' . ltrim($href, '/');
				if (extension_loaded('http')) {
					$href = http_build_url($url, array('path' => $path));
				} else {
					$parts = parse_url($url);
					$href = $parts['scheme'] . '://';
					if (isset($parts['user']) && isset($parts['pass'])) {
						$href .= $parts['user'] . ':' . $parts['pass'] . '@';
					}
					$href .= $parts['host'];
					if (isset($parts['port'])) {
						$href .= ':' . $parts['port'];
					}
					$href .= $path;
					$host = $parts['host'];
				
					// set data
					$data[$host][$i++] = $href;
				}
			}
			
			
			crawl_page($href, $depth - 1);
		}
		
		/*
		######
		# SQLITEDB
		######
		class sqliteDB extends SQLite3
		{
			function __construct()
			{
				$this->open('sqliteDB/crawler.sqlite');
			}
		}
		$sqliteDB = new sqliteDB();
		*/
		
		
		foreach ($data as $source => $subdata)
		{
			echo $source."<br>";
			foreach ($subdata as $key => $value)
			{					
				echo $value."<br>";
				/*
				// set data in sqliteDB
				if(!$sqliteDB){ ?> ! <? } else { ?> > <? }
				$sql = "
					INSERT INTO crawler ( SOURCE, URL)
					VALUES ('$source', '$value');
				";
				$ret = $sqliteDB->exec($sql);
				if(!$ret){
					echo $sqliteDB->lastErrorMsg();
				} else {
					echo "data inserted";
				}
				*/
				
			}
			echo "<hr>";
		}
		
		
	}
	crawl_page("$website", 2);
	
	
?>

</pre>
