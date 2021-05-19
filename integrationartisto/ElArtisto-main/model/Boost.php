<?PHP
class Boost{
private ?int $id = null;
private ?string $type = null;
private ?int $nombre = null;
private ?int $prixtotal = null;

function __construct(string $type,int $nombre){

$this->type=$type;    
$this->nombre=$nombre;
$this->prixtotal=$nombre*2;
}

function getId(): int{
return $this->id;
}
function getType(): string{
return $this->type;
}
function getNombre(): int{
return $this->nombre;
}
function getPrix(): int{
return $this->prixtotal;
}

function setId(int $id): void{
$this->id=$id;
}
function setType(string $type): void{
$this->type=$type;
}
function setNombre(int $nombre): void{
$this->nombre=$nombre;
}
function setPrix(int $prixtotal): void{
$this->prixtotal=$prixtotal;
}

}
?>