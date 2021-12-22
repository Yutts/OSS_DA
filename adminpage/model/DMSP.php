<?php

/**
 * 
 */
class DMSP
{
	private $tendm;
	private $soluong;
	




	public function __construct($ten,$sl)
	{	
		$this->tendm= $ten;
		$this->soluong = $sl;
		
	}

	public function __destruct(){

    }

  

    public function get_tendm() {
        return $this->tendm;
    }

    public function get_soluong() {
        return $this->soluong;
    }

   
}





?>