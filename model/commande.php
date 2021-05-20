
<?PHP
	class commande{
		private  $idPro = null;
		private $quantite = null;
		private $Prix = null;
		private  $prix_total = null;
   		 private  $modeP = null;

        private  $id = null;
		
		function __construct( $idPro,$quantite,$Prix,$prix_total,$modeP){
			$this->$idPro=$idPro;
			$this->quantite=$quantite;
			$this->Prix=$Prix;
            $this->prix_total=$prix_total;
            $this->modeP=$modeP;

		}
       
        function getidPro(): string{
			return $this->idPro;

		}
		
		function getquantite(): int{
			return $this->quantite;
		}
	

		function getPrix(): int{
			return $this->Prix;
		}
		
		function getprix_total(): float{
			return $this->prix_total;
		}
    function getmodeP(): string{
			return $this->modeP;
		}
        function getid(): int{
			return $this->id;
		}
		
        
		function setidPro(string $idPro): void{
			$this->idPro=$idPro;
		}
		function setquantite(int $quantite): void{
			$this->quantite=$quantite;
		}

		function setPrix(int $Prix): void{
			$this->Priix=$Prix;
		}
		
		function setprix_total(float $prix_total): void{
			$this->prix_total=$prix_total;
		}
    function setmodeP(string $modeP): void{
			$this->modeP=$modeP;
		}
		
	}
?>