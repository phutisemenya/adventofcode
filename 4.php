class PassPhrase
{
	public function validatePass($passphrase = "")
	{
		$message = $passphrase." is not valid \n";
		if(!empty($passphrase))
		{
			$message = $passphrase." is valid \n";
			$pass = strtolower($passphrase);	// convert string to lower-case
			$strArr = explode(" ",$pass);		// Convert string to array
			$data = array();
			
			foreach ($strArr as $key => $item)
			{
				$str = trim($item);		// Remove whitespacies
				
				$word = (isset($data[$str])) ? $data[$str] += 1 : $data[$str] = 1;
				
				if ($word > 1)
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
