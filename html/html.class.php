<?php
class html{
	protected $title;
	public function __construct($title = ''){
		$this->title = $title;
	}
	
	protected function get_head(){
		$r  = '<head>';
		$r .= '<title>'.$this->title.'</title>';
		$r .= '</head>';
		
		return $;
	}
	
	protected function get_body(){}
	
	public function __toString(){
		$r = '<!DOCTYPE HTML>';
		$r .= '<html>';
		$r .= $this->get_head();
		$r .= $this->get_body();		
		$r .= '</html>';
	}
}
?>
