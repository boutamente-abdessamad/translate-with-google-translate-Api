<?php 
//function 
		use Stichoza\GoogleTranslate\TranslateClient;
	    function translate_fun($text){
	    require 'tra/vendor/autoload.php';
		$tr = new TranslateClient(null,'en');; 
		$tr->setUrlBase('http://translate.google.cn/translate_a/single');
		echo $tr->translate($text);
	    }
//USE
translate_fun('TEXT'); ?>