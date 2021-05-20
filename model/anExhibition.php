<?PHP
class exhibition{
private ?int $id=null;
private ?string $title = null;
private ?string $date = null;
private ?string $emplacement = null;
private ?string $heure = null;
private ?string $categorie = null;
private ?string $prix_ticket = null;
private ?string $host=null;
private ?string $nplaces=null;

function __construct(string $title, string $date, string $emplacement, string $heure, string $categorie, string $prix_ticket, string $host, string $nplaces){

$this->title=$title;
$this->date=$date;
$this->emplacement=$emplacement;
$this->heure=$heure;
$this->categorie=$categorie;
$this->prix_ticket=$prix_ticket;
$this->host=$host;
$this->nplaces=$nplaces;
}

function getTitle(): string{
return $this->title;
}
function getId(): int{
return $this->id;
}
function getDate(): string{
return $this->date;
}
function getEmplacement(): string{
return $this->emplacement;
}
function getHeure(): string{
return $this->heure;
}
function getCategorie(): string{
return $this->categorie;
}
function getPrix_ticket(): float{
return $this->prix_ticket;
}
function getHost(): string{
    return $this->host;
}
function getNplaces(): string{
    return $this->nplaces;
}


function setTitle(string $title): void{
$this->title=$title;
}
function setId(int $id): void{
$this->id=$id;
}
function setDate(string $date): void{
$this->date=$date;
}
function setEmplacement(string $emplacement): void{
$this->emplacement=$emplacement;
}
function setHeure(string $heure): void{
$this->heure=$heure;
}
function setCategorie(string $categorie): void{
$this->categorie=$categorie;
}
function setPrix_ticket(string $prix_ticket): void{
$this->prix_ticket=$prix_ticket;
}
function setHost(string $host): void{
    $this->host=$host;
}
function setNplaces(string $nplaces): void{
    $this->nplaces=$nplaces;
}


}
?>