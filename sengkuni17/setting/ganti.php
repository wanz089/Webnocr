<?php

$pertama = "<?php \n";
$terakhir = "?>";


$put = fopen("data.php","w") or die("Cannot write to path");
		 fwrite($put,$pertama);
		 fwrite($put,'$nama = "'.$_GET['nama'].'";');
		 fwrite($put,"\n");
		 fwrite($put,'$mailzz = "'.$_GET['mailzz'].'";');
		 fwrite($put,"\n");
		 fwrite($put,$terakhir);
		 fclose($put);
echo '200';