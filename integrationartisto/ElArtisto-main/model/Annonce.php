<?PHP
class Annonce{
private ?int $id = null;
private ?string $categorie = null;
private ?string $nom = null;
private ?int $prix = null;
private ?string $descr = null;
private ?string $img = null;
private ?int $boosted = null;
private ?int $host = null;

function __construct(string $categorie, string $nom, int $prix, string $descr, string $img, int $host){

$this->categorie=$categorie;
$this->nom=$nom;
$this->prix=$prix;
$this->descr=$descr;
$this->img=$img;
$this->host = $host;
}

function getId(): int{
return $this->id;
}
function getNom(): string{
return $this->nom;
}
function getCategorie(): string{
return $this->categorie;
}
function getPrix(): int{
return $this->prix;
}
function getDescr(): string{
return $this->descr;
}

function getImg(): string{
    return $this->img;
}

function getBoosted(): int{
    return $this->boosted;
}

function getHost(): int{
    return $this->host;
}

function setId(int $id): void{
$this->id=$id;
}
function setNom(string $nom): void{
$this->nom=$nom;
}
function setCategorie(string $categorie): void{
$this->categorie=$categorie;
}
function setPrix(int $prix): void{
$this->prix=$prix;
}
function setDescr(string $descr): void{
$this->descr=$descr;
}

function setImg(string $img): void{
    $this->img=$img;
}
function setBoosted(int $boosted): void{
    $this->boosted=$boosted;
    }

}
