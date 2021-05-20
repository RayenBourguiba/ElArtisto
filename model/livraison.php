<?PHP
	class livraison{
		private $nom = null;
		private  $prenom = null;
		private $adresse = null;
		private  $telephone = null;
        private  $id = null;
		private $idCommande = null;
		
		function __construct( $nom,$prenom,$adresse,$telephone,$idCommande){
			
			$this->nom=$nom;
			$this->prenom=$prenom;
			$this->adresse=$adresse;
            $this->telephone=$telephone;
			$this->idCommande=$idCommande;
			
		}
       
		function getnom(): string{
			return $this->nom;
		}
		function getprenom(): string{
			return $this->prenom;
		}
        function getadresse(): string{
			return $this->adresse;

		}
			
		function gettelephone(): int{
			return $this->telephone;
		}
        function getId(): int{
			return $this->id;
		}
		function getIdCommande(): int{
			return $this->idCommande;
		}

		
        function setnom(string $nom): void{
			$this->nom=$nom;
		}
		function setprenom(string $prenom): void{
			$this->prenom=$prenom;
		}
		function setadresse(string $adresse): void{
			$this->adresse=$adresse;
		}
		
		function settelephone(int $telephone): void{
			$this->telephone=$telephone;
		}
		function setIdCommande(int $idCommande): void{
			$this->idCommande=$idCommande;
		}
        
		
	}
?>