<?php

/**
 * 
 */
class User 
{
	private $mssv;
	private $ten;
	private $ngaysinh;
	private $lop;


	public function xuatUser()
	{
		echo "Thông tin user : ";
		echo "<hr>";
		echo "MSSV : ".$this->mssv."<br>";
		echo "ten : ".$this->ten."<br>";
		echo "ngaysinh : ".$this->ngaysinh."<br>";	
		echo "Lop : ".$this->lop."<br>";
	}


	public function __construct($ms,$ten,$ngaysinh,$lop)
	{	
		$this->mssv= $ms;
		$this->ten = $ten;
		$this->ngaysinh = $ngaysinh;
		$this->lop = $lop;
	}

	public function __destruct()
	class User {

    private $username;
    private $email;
    private $password;
    private $gioitinh;
    private $sothich;

    public function __construct($name, $mail, $pass, $sthich, $gtinh) {
        $this->username = $name;
        $this->email = $mail;
        $this->password = $pass;
        $this->sothich = $sthich;
        $this->gioitinh = $gtinh;
    }

    public function showUser() {
        echo "Tên: " . $this->username . "<br>";
        echo "Email: " . $this->email . "<br>";
        echo "Sở thích: " . $this->sothich . "<br>";
        echo "Giới tính: " . $this->gioitinh . "<br>";
    }

    public function get_password() {
        return $this->password;
    }

    public function get_email() {
        return $this->email;
    }

    public function get_username() {
        return $this->username;
    }

     public function get_sothich() {
        return $this->sothich;
    }

    public function get_gioitinh() {
        return $this->gioitinh;
    }
}





?>