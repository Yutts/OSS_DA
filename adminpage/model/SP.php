<?php
class SanPham {

    private $tensp;

    private $hinh;
    private $gia;
    private $soluong;
    private $mausac;
    private $ram;
    private $dungluong;
    private $mota;
    private $hang;

    public function __construct($ten, $sl, $gia, $mau,$dungluong,$ram,$mota,$hang,$hinh) {
        $this->tensp = $ten;
        $this->soluong = $sl;
        $this->gia = $gia;
        $this->mausac = $mau;
        $this->dungluong = $dungluong;
        $this->ram = $ram;
        $this->mota = $mota;
        $this->hang = $hang;
        $this->hinh = $hinh;
       
    }

 

    public function get_tensp() {
        return $this->tensp;
    }

    public function get_soluong() {
        return $this->soluong;
    }

    public function get_gia() {
        return $this->gia;
    }

     public function get_mausac() {
        return $this->mausac;
    }

    public function get_dungluong() {
        return $this->dungluong;
    }

    public function get_ram() {
        return $this->ram;
    }

     public function get_mota() {
        return $this->mota;
    }

    public function get_hang() {
        return $this->hang;
    }

    public function get_hinh() {
        return $this->hinh;
    }


}

?>