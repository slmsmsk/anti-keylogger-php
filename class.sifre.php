<?php
	class sifre{
	
		static public function olustur($sifre = 'cyber-warrior',$s_sayi = 1){
			
			$k_sayi = strlen($sifre);
			if($s_sayi > $k_sayi or !is_numeric($s_sayi) or $s_sayi < 1){
				$s_sayi = 1;
			}
			
			if($_POST and isset($_POST['sifre']) and $_POST['sifre']){
			
				$dizi = array();
				$dizi = str_split($sifre);
			
				$post = array($_POST);
				unset($_POST['sifre']);
				
				foreach($_POST as $key => $value){
					if($dizi[$key] != $value){
						$sonuc = false;
						break;
					}else{
						$sonuc = true;
					}
				}
				
				if($sonuc){
					print '<font color="green">Eşleştirme başarılı.</font>';
				}else{
					print '<font color="red">Eşleştirme başarısız!</font>';
				}
				
			
			}else{
			
				// Şifredeki karakter sayısı hesaplanıyor.
				$k_sayi = strlen($sifre);
				
				// Şifre karakterleri dizide depolanıyor.
				$dizi = array();
				$dizi = str_split($sifre);			
				
				$sayilar= array();
				$i=0;
				while($i<$s_sayi){
				
					$rastgele=rand(1,$k_sayi);
						if (in_array($rastgele,$sayilar)){
							continue;
						}else{
							$sayilar[]=$rastgele;
						$i++;
						}
						
				}
				sort($sayilar);
				
				print '<form action="" method="post">';
				
					for($i = 0; $i<=$k_sayi-1; $i++){
						if(in_array($i,$sayilar)){
							print '<input type="text"  name="'.$i.'" class="required"  required="required"/>';
						}else{
							print '<input type="text" class="readonly" value="*" readonly="readonly" />';
						}
						if($i == $k_sayi-1){
							print '<input type="hidden" name="sifre" value="1" />';
						}
					}
				
				print '<button>Gönder</button>';
				print '</form>';
				
			}
		
		}
	
	}
?>
