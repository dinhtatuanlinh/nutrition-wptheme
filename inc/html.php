<?php

class ZendvnHtml{
	
	public function __construct($options = null){

	}
	
	//Phần tử TEXTBOX
	public function textbox($name = '', $value = '', $attr = array(), $options = null){
		require_once TAIFE_THEME_INC_DIR . '/html/HtmlTextbox.php';		
		return HtmlTextbox::create($name, $value, $attr, $options);
	}	
	
	//Phần tử FILEUPLOAD
	public function fileupload($name = '', $value = '', $attr = array(), $options = null){
		require_once TAIFE_THEME_INC_DIR . '/html/HtmlFileupload.php';
		return HtmlFileupload::create($name, $value, $attr, $options);
	}
	
	//Phần tử PASSWORD
	public function password($name = '', $value = '', $attr = array(), $options = null){
		require_once TAIFE_THEME_INC_DIR . '/html/HtmlPassword.php';
		return HtmlPassword::create($name, $value, $attr, $options);
	}
	
	//Phần tử HIDDEN
	public function hidden($name = '', $value = '', $attr = array(), $options = null){
		require_once TAIFE_THEME_INC_DIR . '/html/HtmlHidden.php';
		return HtmlHidden::create($name, $value, $attr, $options);
	}

	//Phần tử BUTTON - SUBMIT - RESET
	public function button($name = '', $value = '', $attr = array(), $options = null){
		require_once TAIFE_THEME_INC_DIR . '/html/HtmlButton.php';
		return HtmlButton::create($name, $value, $attr, $options);
	}
	
	//Phần tử TEXTAREA
	public function textarea($name = '', $value = '', $attr = array(), $options = null){
		require_once TAIFE_THEME_INC_DIR . '/html/HtmlTextarea.php';
		return HtmlTextarea::create($name, $value, $attr, $options);
	}
	
	//Phần tử RADIO
	public function radio($name = '', $value = '', $attr = array(), $options = null){
		require_once TAIFE_THEME_INC_DIR . '/html/HtmlRadio.php';
		return HtmlRadio::create($name, $value, $attr, $options);
	}
	
	//Phần tử CHECKBOX
	public function checkbox($name = '', $value = '', $attr = array(), $options = null){
		require_once TAIFE_THEME_INC_DIR . '/html/HtmlCheckbox.php';
		return HtmlCheckbox::create($name, $value, $attr, $options);
	}
		
	//Phần tử SELECTBOX
	public function selectbox($name = '', $value = '', $attr = array(), $options = null){
		require_once TAIFE_THEME_INC_DIR . '/html/HtmlSelectbox.php';
		return HtmlSelectbox::create($name, $value, $attr, $options);
	}
	
}