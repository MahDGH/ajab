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
	
    $token='248206495:AAHyIaRu5f4P5223R5AMOQFn5vBR2Sue2ZA';
    $result = objectToArray($string);
    $user_id = $result['message']['chat']['id'];
    $text = $result['message']['text'];
	
		$arr = explode(" ", $text);
	if($result['message']['from']['id']=="121259997"&&rand(1,25)==12)
	{
		$text_reply = 'وز زر مفت نزن';
		$reply=$result['message']['message_id'];
	}
	if(strpos($text, 'pnanegan') !== false || strpos($text, 'Pnanegan') !== false || strpos($text, 'PNANEGAN') !== false)
		$text_reply=urlencode('<i> پیننگان پسر شود'.chr(10).'پی تو پسر نمی شود</i>');
	else if($result['message']['sticker']['emoji']=='✅' || strpos($text, 'احمدی نژاد')!== false)
	{
		switch(rand(1,20)){
		case 1:
			$text_reply=urlencode('وعده ی ما بهار 96✌✌'.chr(10).'جیگردار نژاد');  
			break;
		case 2:
			$text_reply=urlencode('وعده ی ما بهار 96✌✌'.chr(10).'خشکسالی شده ای بارش باران برگرد');
			break;
		case 3:
			$text_reply=urlencode('وعده ی ما بهار 96✌✌'.chr(10).'بیمار خنده های توام بیشتر بخند');
			break;
		case 4:
			$text_reply=urlencode('وعده ی ما بهار 96✌✌'.chr(10).'انگلستان جزیره ای کوچک در غرب آفریقاست');
			break;
		case 5:
			$text_reply=urlencode('وعده ی ما بهار 96✌✌'.chr(10).'عباسیان ۱۰ پیامبر را کشتند');
			break;
		case 6:
			$text_reply=urlencode('وعده ی ما بهار 96✌✌'.chr(10).'<i>با مردم رنجدیده محشور شدی</i>'.chr(10).'<i>کابوس شبانه زر و زور شدی</i>'.chr(10).'<i>دست تو نمک نداشت ای ظلم ستیز</i>'.chr(10).'<i>مظلوم ترین رئیس جمهور شدی</i>');
			break;
		case 7:
			$text_reply=urlencode('وعده ی ما بهار 96✌✌'.chr(10).'<i>شعار هر چی مرده</i>'.chr(10).'<i>احمدی بر میگرده</i>');
			break;
		case 8:
			$text_reply=urlencode('وعده ی ما بهار 96✌✌'.chr(10).'آبو بریز اونجا که میسوزه');
			break;
		case 9:
			$text_reply=urlencode('وعده ی ما بهار 96✌✌'.chr(10).'لولو برد');
			break;
		case 10:
			$text_reply=urlencode('وعده ی ما بهار 96✌✌'.chr(10).'یک دختر 16 ساله به کمک برادرش در زیرزمین خانه اش انرژی هسته ای کشف کرده است');
			break;
		case 11:
			$text_reply=urlencode('وعده ی ما بهار 96✌✌'.chr(10).'آنقدر قطعنامه بدهید تا قطعنامه‌دانتان شما پاره شود.');
			break;
		case 12:
			$text_reply=urlencode('وعده ی ما بهار 96✌✌'.chr(10).' اگر خیلی عرضه دارید، اوضاع کشورهای خود را جمع و جور کنید و به ملتهای خود برسید. شما نمیتوانید آب بینی خود را بالا بکشید.');
			break;
		case 13:
			$text_reply=urlencode('وعده ی ما بهار 96✌✌'.chr(10).'همه اش کشک است، طرف راه می رفت میگفت ابرقدرت، قدر قدرت ...‌ ای زکی.');
			break;
		case 14:
			$text_reply=urlencode('وعده ی ما بهار 96✌✌'.chr(10).'باید چهار ماهواره به فضا پرتاب کنیم تا هر ننه قمری کلید آن را پایین نیاورد.');
			break;
		case 15:
			$text_reply=urlencode('وعده ی ما بهار 96✌✌'.chr(10).'من نوکر ملت هستم، نوکر همه هستم، نوکر شما هم هستم، اما الان رئیس‌جمهور این کشور هستم. می‌خواهم از حقوق اساسی ملت دفاع کنم.');
			break;
		case 16:
			$text_reply=urlencode('وعده ی ما بهار 96✌✌'.chr(10).'چطور باید از دولت دفاع کنیم، چطور باید از حق دفاع کنیم؟ شما راه آن را بفرمایید، ما همان را عمل می‌کنیم.');
			break;
		case 17:
			$text_reply=urlencode('وعده ی ما بهار 96✌✌'.chr(10).'من می‌توانم در مورد پرونده آموزشی یک خانمی با شما صحبت کنم؟ بگم؟ بگم؟');
			break;
		case 18:
			$text_reply=urlencode('وعده ی ما بهار 96✌✌'.chr(10).'احمدی نژاد، معجزه هزاره سوم');
			break;	
		case 19:
			$text_reply=urlencode('وعده ی ما بهار 96✌✌'.chr(10).'آن مرد که میگفت هلوکاست حقیقت ندارد در قلب های ملت است');
			break;	
		case 20:
			$text_reply=urlencode('وعده ی ما بهار 96✌✌'.chr(10).'این هم از آن حرف‌هاست. احمدی‌نژاد و خانه نشینی و استراحت؟! اکثر افراد می‌گویند یه کم استراحت کن و به خودت برس. مطمئن باشید که‌این وصله‌ها به دولت نمی‌چسبد و من همواره سعی کردم با یک ادبیات صحیح و منطقی و درست در خصوص ولایت تعریف کنم.');
			break;	
		}
		$reply=$result['message']['message_id'];
	}//مظلومترین رئیس جمهور
	else if(strpos($text, 'ترامپ')!== false||strpos($text, 'Trump')!== false||strpos($text, 'trump')!== false)
	{
		if(rand(1,2)==2)
			$text_reply=urlencode('وعده ی ما نوامبر 2016✌✌'.chr(10).'MAKE AMERICA GREAT AGAIN');  
		else
			$text_reply=urlencode('وعده ی ما نوامبر 2016✌✌'.chr(10).'The beauty of me is that I’m very rich.');
		$reply=$result['message']['message_id'];
	}//مظلومترین رئیس جمهور
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
	else if(strpos($text, 'برگذار') !== false)
	{
		$text_reply = '*برگزار ';
		$reply=$result['message']['message_id'];
	}// برگزار
	else if(strpos($text, 'کارگذار') !== false)
	{
		$text_reply = '*کارگزار ';
		$reply=$result['message']['message_id'];
	}// برگزار
	else if(strpos($text, 'بارگزار') !== false)
	{
		$text_reply = '*بارگذار ';
		$reply=$result['message']['message_id'];
	}// بارگذار
	else if(strpos($text, 'سپاس') !== false && strpos($text, 'گذار') !== false)
	{
		$text_reply = '*گزار';
		$reply=$result['message']['message_id'];
	}// بارگذار
	else if(strpos($text, 'گاها') !== false || strpos($text, 'گاهن') !== false || strpos($text, 'خواهشن') !== false || strpos($text, 'خواهشا') !== false || strpos($text, 'دومن') !== false || strpos($text, 'سومن') !== false|| strpos($text, 'ناچارا') !== false || strpos($text, 'ناچارن') !== false)
	{
		$text_reply = 'بر سر کلمات فارسی تنوین می گذارند. بی حیاها';
		$reply=$result['message']['message_id'];
	}// تنوین
	else if(strpos($text, 'اجالتن') !== false || strpos($text, 'اجالتا') !== false)
	{
		$text_reply = '*عجالتا';
		$reply=$result['message']['message_id'];
	}// عجالتا
	else if(strpos($text, 'حتا') !== false)
	{
		$text_reply = '<i>حتی</i> یک کودن به تمام معنا هم بلده اینو درست بنویسه';
		$reply=$result['message']['message_id'];
	}// حتی	
	else if(strpos($text, 'انظباط') !== false || strpos($text, 'منظبط') !== false)
	{
		$text_reply = '<i>انضباط</i> شرط لازمه نداشتن غلط املایی است';
		$reply=$result['message']['message_id'];
	}// انضباط	
	else if(strpos($text, 'وحله') !== false)
	{
		$text_reply = 'شما در <i>وهله</i> اول برو املای کلماتو یاد بگیر بعد چت کن';
		$reply=$result['message']['message_id'];
	}// وهله
	else if(strpos($text, 'متوصل') !== false || strpos($text, 'توصل') !== false)
	{
		$text_reply = 'از دست شما بی سوادان به خدای یکتا <i>توسل</i> می جویم';
		$reply=$result['message']['message_id'];
	}// توسل
	else if(strpos($text, 'چتوری') !== false || strpos($text, 'چتور') !== false)
	{
		$text_reply = '<i> چطوری </i> یه نفر میتونه انقدر بی سواد باشه';
		$reply=$result['message']['message_id'];
	}// چطوری
	else if(strpos($text, 'ترجیه') !== false)
	{
		$text_reply = '<i>ترجیح</i>میدم به میزان حماقت پشت این غلط املایی فکر نکنم';
		$reply=$result['message']['message_id'];
	}// ترجیح
	else if(strpos($text, 'توجیح') !== false)
	{
		$text_reply = 'این غلط املایی <i>توجیه</i> ناپذیره';
		$reply=$result['message']['message_id'];
	}// توجیه
	/*else if(strpos($text, 'MPT') !== false || strpos($text, 'M.P.T.') !== false || strpos($text, 'ام پی تی') !== false || strpos($text, 'ام.پی.تی') !== false)
	{
		$text_reply = '#کریمیـقدوسی';
		$reply=$result['message']['message_id'];
	}// جواد	
	else if(strpos($text, 'صگ') !== false)
	{
		$text_reply = 'گل مکانی برو بمیر';
		$reply=$result['message']['message_id'];
	}// سگ*/
	else if(strpos($text, 'گزارشات') !== false || strpos($text, 'آزمایشات') !== false || strpos($text, 'پیشنهادات') !== false || strpos($text, 'دستورات'))
	{
		$text_reply = 'ته کلمات فارسی ات نذارید. غلط است دیگر';
		$reply=$result['message']['message_id'];
	}// ات سر فارسی	
	else if(strpos($text, 'بزنگ') !== false||strpos($text, 'زنگید') !== false||strpos($text, 'میزنگ') !== false||strpos($text, 'می زنگ') !== false)
	{
		$text_reply = 'بی سوااااددددد فارسی رو به فنا نده';
		$reply=$result['message']['message_id'];
	}//زنگیدن
	else if($result['message']['left_chat_participant']['id']!=0)
	{
		$text_reply = urlencode('<i>خداحافظ گل ناز🌷🌷🌷'.chr(10).'لبت به خنده شد باز😊😊😊'.chr(10).'امیدوارم دوست من🙏🙏🙏'.chr(10).'تو رو ببینمت باز✋✋✋</i>');
		$reply=$result['message']['message_id'];
	}
	else if(strpos($text, 'وز ساکت') !== false||strpos($text, 'وز ساکت') !== false)
		$text_reply = 'vez ostad '.$result['message']['from']['first_name'].' mifarmayand <b>zer moft nazan</b>';
	/*else if(strpos($text, 'is real') !== false||strpos($text, 'iz') !== false)
		$text_reply = $arr[0].'is real';*/
	else if(strpos($text, 'برخیز') !== false||strpos($text, 'بلند شو') !== false||strpos($text, 'پاشو')!==false)
		$text_reply = urlencode('<i>من اگر بنشینم'.chr(10).'تو اگر بنشینی'.chr(10).'او اگر بنشیند'.chr(10).'چه کسی برخیزد؟'.chr(10).'چه کسی برخیزد؟؟؟؟'.chr(10).'چه کسی برخیزد؟؟؟؟؟؟؟؟</i>');
	else if(strpos($text, 'بشین') !== false||strpos($text, 'بنشین') !== false)
		$text_reply = urlencode('<i>من اگر برخیزم'.chr(10).'تو اگر برخیزی'.chr(10).'او اگر برخیزد'.chr(10).'چه کسی بنشیند؟'.chr(10).'چه کسی بنشیند؟؟؟؟'.chr(10).'چه کسی بنشیند؟؟؟؟؟؟؟؟</i>');
	else if(strpos($text, 'پی ننه') !== false||strpos($text, 'pnane') !== false||strpos($text, 'پي ننه') !== false||strpos($text, 'پیننه') !== false)
		$text_reply = '🎤🎤🎤<i>پی ننه کو؟ پی ننه کو؟ پی ننه پی ننه پی ننه کو؟</i>🎤🎤🎤';
	/*else if(strpos($text, 'دبه') !== false || strpos($text, '10be') !== false || strpos($text, 'dabbe') !== false || strpos($text, 'دببه') !== false)
		$text_reply = '<i>خااالص</i>';*/
	else if(strpos($text, 'بکتاش') !== false||strpos($text, 'baktash') !== false||strpos($text, 'bakt') !== false||strpos($text, 'بکت') !== false||strpos($text, '@bk7sh') !== false||strpos($text, '@Bk7sh') !== false)
		$text_reply = '🎤🎤🎤<i>بکتاش آفت شهپر مهوش پریوش چه بد کرد غلط کرد شوهر کرد همه رو در به در کرد</i>🎤🎤🎤';
	else if(strpos($text, 'وزننه') !== false)
		$text_reply = 'وزننه نسخه جدید پی ننه';
	else if(strpos($text, 'استا')!==false)
		if(rand(1,2)==2)
			$text_reply ="استاعاععااااد";  
		else
			$text_reply ="اسستاععععد";
	else if(strpos($text, 'خدا')!==false && strpos($text, 'لعنتت')!==false&& $result['message']['reply_to_message']['message_id']!=0)
	{
		$reply=$result['message']['reply_to_message']['message_id'];
		if(rand(1,2)==2)
			$text_reply ="لعنت و نفرین جاودان خداوند بر تو باد";  
		else	
			$text_reply ="خدا به زمین گرم بزنتت";
	}
	else if($result['message']['from']['username']=="aryakowsary" || $result['message']['from']['username']=="A_H_P_A"|| $result['message']['from']['username']=="kianoosh76")
	{
		if(strpos($text, 'سماق')!==false && $result['message']['from']['username']=="A_H_P_A"){
			if(strpos($text, 'به نظرت')!==false)
	      			$text_reply = 'بندازیمش تو سطل زباله! بندازیمش تو سطل زباله!';  
	      		else if(strpos($text, 'هستی')!==false )
	      			$text_reply = 'حی و حاضر';  
		}
			else if($arr[1] == 'مرغه')
	      		$text_reply = 'کی از همه مرغ تره؟ '.$arr[0].' '.$arr[0].' '.$arr[0].' '.$arr[0];  
	    	else if($arr[1] == 'ساکت' || $arr[1] == 'خفه')
	      		$text_reply = $arr[0].' استاد میفرمایند '.$arr[1];  
      		else if($arr[1]== 'زر'	)
      			$text_reply = $arr[0].' استاد میفرمایند زر مفت نزن ';  
      		else if($arr[1] == 'چرت' || $arr[1] == 'چرند')
      			$text_reply = $arr[0].' استاد میفرمایند چرت نگو ';  
      		else if(strpos($arr[1], 'باهات')!==false && strpos($arr[2], 'موافقم')!==false){
      			if($arr[0] !== 'من' && $arr[0] !== 'منم')
      				$text_reply = $arr[0].' استاد '.$arr[1].' موافقه ';  
      			else
      				$text_reply = ' استاد '.$arr[1].' موافقه ';  
			$reply=$result['message']['message_id'];
      		}
      		else if(strpos($arr[1], 'باهات')!==false && strpos($arr[2], 'مخالفم')!==false&&!(strpos($arr[0], 'من')!==false))
      			$text_reply = $arr[0].' برو بمیر ';  	
		
 		else	
	      		$text_reply = '';
			
	}
	/*else
	{
		
		if((strpos($text, 'پویا')!==false || strpos($text, 'آریا')!==false || strpos($text, 'کیانوش')!==false) && (strpos($text, 'زر نزن')!==false || strpos($text, 'خفه شو')!==false ||strpos($text, 'چرت نگو')!==false||strpos($text, 'ساکت')!==false)){
			if(rand(1,2)==2)
				$text_reply='چه خزعبلی واسه خودت بلغور میکنی ';
			else
				$text_reply ="بدمت دست لاتای دور و ور پی ننه؟";
			$reply=$result['message']['message_id'];
		}
		else if(($result['message']['reply_to_message']['from']['username']=="kianoosh76" || $result['message']['reply_to_message']['from']['username']=="A_H_P_A" || $result['message']['reply_to_message']['from']['username']=="aryakowsary") && (strpos($text, 'زر نزن')!==false || strpos($text, 'خفه شو')!==false ||strpos($text, 'چرت نگو')!==false||strpos($text, 'ساکت')!==false))
		{
			if(rand(1,2)==2)
				$text_reply='چه خزعبلی واسه خودت بلغور میکنی ';
			else
				$text_reply ="بدمت دست لاتای دور و ور پی ننه؟";
			$reply=$result['message']['message_id'];
		}*/
		else
		{
			$text_reply = '';
			if(rand(1,400)==2)
			{
			$text_reply = $result['message']['from']['first_name'].' zer nazan';
			$reply=$result['message']['message_id'];
			$url = 'https://api.telegram.org/bot'.$token.'/sendMessage?chat_id='.$user_id;
			$url .= '&text=' .$text_reply;
			$url .= '&reply_to_message_id=' .$reply;
			$url .= '&parse_mode=html';
			$res = file_get_contents($url);
			$text_reply = urlencode("This message is generated randomly to stop nonsensical chit-chats.".chr(10)."For more information, contact gmail@somag.be");
			$reply='';
			}
		}
	/*}*/
    $url = 'https://api.telegram.org/bot'.$token.'/sendMessage?chat_id='.$user_id;
    $url .= '&text=' .$text_reply;
	$url .= '&reply_to_message_id=' .$reply;
	$url .= '&parse_mode=html';
    $res = file_get_contents($url);
	?>
</body>
</html>
