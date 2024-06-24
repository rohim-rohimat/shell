<?php
    class DataBahanBakar{
        private $HargaSSuper;
        private $HargaSVPower;
        private $HargaSVPowerDiesel;
        private $HargaSVPowerNitro;
        public $jenisYangDipilih;
        public $totalLiter;
        protected $totalPembayaran;

        public function setHarga ($valSSuper,$valSVPower,$valSVPowerDiesel,$valSVPowerNitro){
            $this->HargaSSuper = $valSSuper;
            $this->HargaSVPower = $valSVPower;
            $this->HargaSVPowerDiesel = $valSVPowerDiesel;
            $this->HargaSVPowerNitro = $valSVPowerNitro;
        }

        public function getHarga(){
            $semuaDataSolar["S Super"] = $this->HargaSSuper;
            $semuaDataSolar["S V-Power"] = $this->HargaSVPower;
            $semuaDataSolar["S V-Power Diesel"] = $this->HargaSVPowerDiesel;
            $semuaDataSolar["S V-Power Nitro"] = $this->HargaSVPowerNitro;
            return $semuaDataSolar;
        }
    }

    class pembelian extends DataBahanBakar{
        public function totalHarga(){
            $this->totalPembayaran = $this->getHarga()[$this->jenisYangDipilih] * $this->totalLiter;
        }

        public function cetakBukti(){
            echo "------------------------------------------------";
            echo "<br>";
            echo "Jenis Bahan Bakar : " . $this->jenisYangDipilih;
            echo "<br>";
            echo "Total Liter : " . $this->totalLiter;
            echo "<br>";
            echo "Harga Bayar : RP. " . number_format($this->totalPembayaran, 0,',','.');
            echo "<br>";
            echo "------------------------------------------------";
        }
    }
?>