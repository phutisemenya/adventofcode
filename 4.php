<?php
/*
 * High-Entropy Passphrases 
 */
class PassPhrase
{
	public function validatePass($passphrase = "")
	{
		$message = $passphrase." is valid \n";		// Default return message
		if(!empty($passphrase))
		{
			$pass = strtolower($passphrase);	// convert string to lower-case
			$strArr = explode(" ",$pass);		// Convert string to array
			$data = array();
			
			foreach ($strArr as $key => $item)
			{
				$str = trim($item);		// Remove whitespacies
				
				if (isset($data[$str]))	// Check if $str is isset
				{
					$data[$str] += 1;
				} else {
					$data[$str] = 1;
				}
				
				if ($data[$str] > 1)
				{
					$message = $passphrase." is not valid \n";
					break;
				}
			}
						
		}
		return $message;
	}
}

$PassPhrase = new PassPhrase();
print $PassPhrase->validatePass("aa bb cc dd ee");
print $PassPhrase->validatePass("aa bb cc dd aa");
print $PassPhrase->validatePass("aa bb cc dd aaa");
print $PassPhrase->validatePass("bdwdjjo avricm cjbmj ran lmfsom ivsof");
?>
