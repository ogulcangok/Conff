<?php
	class Core {
		
		/************************
		 *************************
		 * FORMAT
		 *************************
		 ************************/
		function format_str_clean($str) {
			setlocale(LC_ALL, 'en_US.UTF8');
			$clean=$str;
			$clean = str_replace("ı", 'i', $clean);
			$clean = iconv('UTF-8', 'ASCII//TRANSLIT', $clean);
			$clean = preg_replace("/[^a-zA-Z0-9\/_| -]/", '', $clean);
			$clean = strtolower(trim($clean, '-'));
			$clean = preg_replace("/[\/_| -]+/", '-', $clean);
			return $clean;
		}
		function format_str_ucase($str){
			$search=array("i","ü");
			$replace=array("İ","ü");
			$tmp=str_replace($search,$replace,$str);
			$result=mb_strtoupper($tmp,'UTF-8');
			return $result;
		}
		function format_date($date,$locale=NULL){
			$date=new DateTime($date);			
			$month=array("January","February","March","April","May","June","July","August","September","October","November","December");
			$day=array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");
				switch($locale){
					case "":
						$date=date_format($date, 'F d, Y');
						$month_locale=$month;
						$day_locale=$day;
						break;
					case "tr":
						$date=date_format($date, 'd F, Y');
						$month_locale=array("Ocak","Şubat","Mart","Nisan","Mayıs","Haziran","Temmuz","Ağustos","Eylül","Ekim","Kasım","Aralık");
						$day_locale=array("Pazar","Pazartesi","Salı","Çarşamba","Perşembe","Cuma","Cumartesi");
						break;
				}
			$date=str_replace($month,$month_locale,$date);
			$date=str_replace($day,$day_locale,$date);
			return $date;
		}
		function format_time($value){
			$result=$value;
			if($value=="00:00:00"){ $result=' '; }
			return $result;
		}
		
		/************************
		 *************************
		 * HTTP
		 *************************
		 ************************/
		var $http_get_default;
		function http_get($url=NULL){
			if(!$url) { $url=$_GET['get']; }
			$result=explode("/",$url);
			if($this->http_get_default){
				foreach($this->http_get_default as $key=>$val){
					if(!$result[$key]){						
						$result[$key]=$val;
					}
				}				
			}
			return $result;
		}
		function navigate($url){
			echo '
				<script>
					document.location="'.$url.'";
				</script>
			';
		}
		
		var $header_css;
		function http_header_add_css($url){
			$this->header_css.= '	<link href="'.$url.'" rel="stylesheet" type="text/css" />
			';
		}
		var $header_js;
		function http_header_add_js($url){
			$this->header_js.='	<script src="'.$url.'"></script>
			';
		}
		function http_header(){
			$url=$this->http_get();
			$result='';			
			$result.= '
				<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
                <html xmlns="http://www.w3.org/1999/xhtml">
                <meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
				<head>
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <meta charset="utf-8">
                <meta http-equiv="x-ua-compatible" content="ie=edge">

			';
			$result.=$this->http_meta();
            $result.= '
                <link rel="shortcut icon" type="image/x-icon" href="'.HTTP_SERVER.HTTP_LIB.'img/logo/conff.ico" />
                <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800" rel="stylesheet" type="text/css">
                <link href="https://fonts.googleapis.com/css?family=Raleway:400,300,500,600,700,800" rel="stylesheet" type="text/css">
			';
			$result.=$this->header_css;
			$result.=$this->header_js;
			$result.= '</head>';
			return $result;
		}
		function http_meta(){
			$base=new base;
			$url=$this->http_get();
			$result.=$base->set_meta();
			$result.='
				<meta content="'.META_TITLE.'" name="page-topic" />
				<meta content="'.META_EMAIL.'" http-equiv="Reply-to" />
				<meta content="'.META_CREATION.'" name="creation_Date" />
				<meta content="'.HTTP_SERVER.'" name="expires" />				
				<meta content="'.HTTP_TITLE.'" name="Yahoo" />
				<meta content="'.HTTP_TITLE.'" name="Dmoz" />
				<meta content="'.HTTP_TITLE.'" name="Altavista" /> 
				<meta content="'.HTTP_TITLE.'" name="Scooter" />
				<meta content="'.META_ABSTRACT.'" name="abstract" />
				<meta content="'.META_LANGUAGE.'" name="language" />
				<meta content="'.HTTP_TITLE.'" name="subject" />				
				<meta content="'.HTTP_TITLE.'" name="owner" />
				<meta content="'.HTTP_TITLE.'" name="copyright" />
				<meta content="'.HTTP_SERVER.'" name="address" />
				<meta content="'.HTTP_TITLE.' - '.META_EMAIL.'" name="author" />
				<meta content="general" name="page-type" />
				<meta content="2 days" name="revisit-after" />
				<meta content="no-cache" http-equiv="pragma" />
				<meta content="Worldwide" name="global" />
				<meta content="no-cache" http-equiv="cache-control" />
				<meta content="index, all" name="googlebot" />
				<meta content="index, all" name="msnbot" />
				<meta content="general" name="rating" />
				<meta content="Conff" name="publisher" />				
				<meta content="Conff" name="designer" />
				<meta content="document" name="resource-type" />
				<meta name="distribution" content="global"/>
				<meta name="audience" content="All"/>
				<meta name="robots" content="index,follow"/>
			';
			return $result;
		}
		function http_get_url() {
			$pageURL = 'http';
			if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
			$pageURL .= "://";
			if ($_SERVER["SERVER_PORT"] != "80") {
				$pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
			} else {
				$pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
			}
			return $pageURL;
		}
		
		/************************
		 *************************
		 * DATABASE
		 *************************
		 ************************/
		var $db_connection;
		function db_connect(){
			$this->db_connection=mysql_connect(DB_HOST , DB_USER , DB_PASSWORD);
			mysql_select_db(DB_DATABASE);
			mysql_query("SET NAMES 'utf8'"); 
			mysql_query("SET CHARACTER SET utf8"); 
			mysql_query("SET COLLATION_CONNECTION = 'utf8_unicode_ci'"); 
			return true;
		}
		function db_disconnect(){
			if( gettype($this->db_connection) == "resource") {
    			mysql_close($this->db_connection);
			}
		}
		function db_query($sql){
			if($this->db_connect()){
				$query=mysql_query($sql);
				$this->db_disconnect();
				return $query;
			}
		}
		function db_gbid($table,$id){ //get by id
			$sql="SELECT * FROM `".$table."` WHERE `id`='".$id."' LIMIT 1";
			$query=$this->db_query($sql);
			if(mysql_num_rows($query)){
				$data=mysql_fetch_array($query);
				return $data;
			} else {
				return false;
			}
		}
		function db_sbid($table,$id,$key,$value){ //set by id
			$sql="UPDATE `".$table."` SET `".$key."`='".$value."' WHERE `id`='".$id."' LIMIT 1";
			$query=$this->db_query($sql);
		}

		
		/************************
		 *************************
		 * FILE
		 *************************
		 ************************/
		function file_ext($file){
			$ext = pathinfo($file, PATHINFO_EXTENSION);
			return $ext;
		}
		function file_upload($source,$path,$ui=NULL){
			//source=$_FILES
			//path=Yeni dosya yolu
			//ui=true uniqid dosya adı
			$pass=true;
			$blacklist=array('bat','exe','cmd','sh','php','php3','php4','phtml','pl','cgi','386','dll','com','torrent','js','app','jar','pif','vb','vbscript','wsf','asp','cer','csr','jsp','drv','sys','ade','adp','bas','chm','cpl','crt','csh','fxp','hlp','hta','inf','ins','isp','jse','htaccess','htpasswd','ksh','lnk','mdb','mde','mdt','mdw','msc','msi','msp','mst','ops','pcd','prg','reg','scr','sct','shb','shs','url','vbe','vbs','wsc','wsf','wsh');
			$ext = $this->file_ext($source['name']);
			if(in_array($ext,$blacklist)){ $pass=false; }
			if($pass){
				if($ui){
					$filename=uniqid().'.'.$ext;
				} else {
					$filename=$this->format_str_clean(basename($source['name'],'.'.$ext)).'.'.$ext;	
				}
				$destination=$path.$filename;
		    	if(move_uploaded_file($source['tmp_name'],$destination)){
		            return $filename;
		        }
			}
			return false; 
        }
		

		/************************
		 *************************
		 * EMAIL
		 *************************
		 ************************/
		function email($args){
			if(EMAIL_PROTOCOL=="smtp"){ return $this->email_smtp($args); }
			if(EMAIL_PROTOCOL=="php"){ return $this->email_php($args); }
		}
		function email_php($args){
			$headers = "Content-Type: text/html; charset=utf-8\r\n";
			$headers .= "From: ".$args['from_name']." <".$args['from'].">\r\n";	
			if (@mail($args['to'], $args['subject'], $args['body'], $headers)){
				return true;
			} else {
				return false;
			}		
		}
		function email_smtp($args){			
			$mail = new PHPMailer();	
			$mail->IsHTML(true);
			$mail->Host=EMAIL_HOST;
			$mail->Port=EMAIL_PORT;
			$mail->Username = EMAIL_USER;
			$mail->Password = EMAIL_PASSWORD;
			$mail->From=$args['from'];
			$mail->FromName=$args['from_name'];						
			$mail->Subject=$args['subject'];
			$mail->Body=$args['body'];
			$mail->AddAddress($args['to']);
			$mail->CharSet="UTF-8";
						
			if($mail->Send()){
				return true;
			} else {
				return false;
			}
		}

		
		/************************
		 *************************
		 * SECURE
		 *************************
		 ************************/
		function secure_encode($input){
			return base64_encode(base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, md5($this->key), $input, MCRYPT_MODE_CBC, md5(md5($this->key)))));
		}
		function secure_decode($input){
			return rtrim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, md5($this->key), base64_decode(base64_decode($input)), MCRYPT_MODE_CBC, md5(md5($this->key))), "\0");
		}
		function secure_number(){
			$w=200;
			$h=50;
			$font=SECURE_BOTFONT;
			$file=SECURE_BOTFILE;
			
			$text=rand(111111,999999);
			
			// Create the image 
			$im = imagecreatetruecolor($w, $h); 

			// Create some colors 
			$white = imagecolorallocate($im, 225, 225, 225); 
			$black = imagecolorallocate($im, 0, 0, 0); 
			imagefilledrectangle($im, 0, 0, $w, $h, $white); 

			// Add the text 
			$x=40; 
			$y=35; 
			$font_size=32; 
			$angle=0; 
			$total_width=0; 
			$counter=0; 

			for($i=0; $i<strlen($text); $i++) { 
    			$dimensions = imagettfbbox($font_size, $angle, $font, substr($text,$i,1)); 
    			$total_width+=($dimensions[2]); 
			} 
			
			
			$dimensions = imagettfbbox($font_size, $angle, $font, $text); 
			$difference=$dimensions[2]-$total_width; 

			imagettftext($im, $font_size, $angle, $x+1, $y+1, $black, $font, $text); 
			imagettftext($im, $font_size, $angle, $x, $y, $black, $font, $text); 

			$x2=$x+$total_width+$difference+2; 

			imagepng($im,$file); 			
			imagedestroy($im);
			
			return array(
				"val"=>$this->secure_encode($text)
				,"src"=>HTTP_SERVER.SECURE_BOTFILE
			);
		}
		function secure_email($email){
			if(filter_var($email, FILTER_VALIDATE_EMAIL)){ 
				return true;
			}else{ 
				return false;
			} 
		}

	}
?>
