<html>
<title>Welcome!</title>
<body bgcolor ="yellow">
<?php
$string = json_decode(file_get_contents('php://input'));
    function objectToArray( $object )
    {
        if( !is_object( $object ) && !is_array( $object ) )
        {
            return $object;
        }
        if( is_object( $object ) )
        {
            $object = get_object_vars( $object );
        }
        return array_map( 'objectToArray', $object );
    }
	
    $token='99331505:AAEQcTOdUSAPxN2d8tYOd-_DTjtg49EgV5k';
    $result = objectToArray($string);
    $user_id = $result['message']['chat']['id'];
    $text = $result['message']['text'];
	
		$arr = explode(" ", $text);
	if(strpos($result['message']['entities'][0]['type'],'bot_command')!==false)
	{
		$text_reply='این دستور فیک است اه';
		$reply=$result['message']['message_id'];
	}
	else if(strpos($result['message']['entities'][0]['type'],'bot_command')!==false)
	{
		$text_reply='دست آورد های تقریبی برجام';
		$reply=$result['message']['message_id'];
	}// کامند ها
	else if(strpos($text, 'بزار') !== false)
	{
		$text_reply = 'بذار*';
		$reply=$result['message']['message_id'];
	}
	else if(strpos($text, 'میزار') !== false||strpos($text, 'می زار') !== false)
	{
		$text_reply = 'می ذار*';
		$reply=$result['message']['message_id'];
	}
	else if(strpos($text, 'گزاشت') !== false)
	{
		$text_reply = 'گذاشت*';
		$reply=$result['message']['message_id'];
	}// بذار
	else if(strpos($text, 'گاها') !== false || strpos($text, 'گاهن') !== false || strpos($text, 'خواهشن') !== false || strpos($text, 'خواهشا') !== false)
	{
		$text_reply = 'بر سر کلمات فارسی تنوین می گذارند. بی حیاها';
		$reply=$result['message']['message_id'];
	}// تنوین
	else if(strpos($text, 'حتا') !== false)
	{
		$text_reply = '*حتی';
		$reply=$result['message']['message_id'];
	}// حتی	
	else if(strpos($text, 'MPT') !== false || strpos($text, 'M.P.T.') !== false || strpos($text, 'ام پی تی') !== false || strpos($text, 'ام.پی.تی') !== false)
	{
		$text_reply = 'استاد کریمی قدوسی';
		$reply=$result['message']['message_id'];
	}// جواد	
	else if(strpos($text, 'خوانواده') !== false)
	{
		$text_reply = 'خانواده';
		$reply=$result['message']['message_id'];
	}// خوا استثنا
	else if($result['message']['from']['id']=="121259997"&&rand(12,25)==12)
	{
		$text_reply = '<b>وز زر مفت نزن</b>';
		$reply=$result['message']['message_id'];
	}
	else if(strpos($text, 'وز ساکت') !== false||strpos($text, 'وز ساکت') !== false)
	{
		$text_reply = 'vez ostad '.$result['message']['from']['first_name'].' mifarmayand zer moft nazan';
	}
	else if(strpos($text, 'پی ننه') !== false||strpos($text, 'pnane') !== false||strpos($text, 'پي ننه') !== false||strpos($text, 'پیننه') !== false)
		$text_reply = '🎤🎤🎤<i>پی ننه کو؟ پی ننه کو؟ پی ننه پی ننه پی ننه کو؟</i>🎤🎤🎤';
	else if(strpos($text, 'بکتاش') !== false||strpos($text, 'baktash') !== false)
		$text_reply = '🎤🎤🎤<i>بکتاش آفت شهپر مهوش پریوش چه بد کرد غلط کرد شوهر کرد همه رو در به در کرد</i>🎤🎤🎤';
	else if(strpos($text, 'وزننه') !== false)
		$text_reply = 'وزننه نسخه جدید پی ننه';
	else if(strpos($text, 'استا')!==false)
      		$text_reply = ' استاعاعاعاعاااااادد ';  
	else if($result['message']['from']['username']=="aryakowsary" || $result['message']['from']['username']=="A_H_P_A"|| $result['message']['from']['username']=="kianoosh76")
	{
	    	if($arr[1] == 'ساکت' || $arr[1] == 'خفه')
	      		$text_reply = $arr[0].' استاد میفرمایند '.$arr[1];  
      		else if(strpos($arr[1], 'زر') !== false	)
      			$text_reply = $arr[0].' استاد میفرمایند زر مفت نزن ';  
      		else if($arr[1] == 'چرت' || $arr[1] == 'چرند')
      			$text_reply = $arr[0].' استاد میفرمایند چرت نگو ';  
      		else if(strpos($arr[1], 'باهات')!==false && strpos($arr[2], 'موافقم')!==false&&!(strpos($arr[0], 'من')!==false))
      			$text_reply = $arr[0].' استاد '.$arr[1].' موافقه ';  
      		else if(strpos($arr[1], 'باهات')!==false && strpos($arr[2], 'مخالفم')!==false&&!(strpos($arr[0], 'من')!==false))
      			$text_reply = $arr[0].' برو بمیر ';  
		      else if(strpos($text, 'خدا')!==false && strpos($text, 'لعنتت')!==false&& $result['message']['reply_to_message']['message_id']!=0)
			  {
				$reply=$result['message']['reply_to_message']['message_id'];
				if(rand(1,2)==2)
					$text_reply ="لعنت و نفرین جاودان خداوند بر تو باد";  
				else
					$text_reply ="خدا به زمین گرم بزنتت";
			  }
		
 		else	
	      		$text_reply = '';
	}
	else
	{
		if((strpos($text, 'پویا')!==false || strpos($text, 'آریا')!==false || strpos($text, 'کیانوش')!==false) && (strpos($text, 'زر نزن')!==false || strpos($text, 'خفه شو')!==false ||strpos($text, 'چرت نگو')!==false||strpos($text, 'ساکت')!==false)){
			$text_reply='چه خزعبلی واسه خودت بلغور میکنی ';
			$reply=$result['message']['message_id'];
		}
		else
		{
			$text_reply = '';
			if(rand(1,100)==20)
			{
			$text_reply = $result['message']['from']['first_name'].' zer nazan';
			$reply=$result['message']['message_id'];
			}
		}
	}
    $url = 'https://api.telegram.org/bot'.$token.'/sendMessage?chat_id='.$user_id;
    $url .= '&text=' .$text_reply;
	$url .= '&reply_to_message_id=' .$reply;
	$url .= '&parse_mode=html';
    $res = file_get_contents($url);
	?>
</body>
</html>
