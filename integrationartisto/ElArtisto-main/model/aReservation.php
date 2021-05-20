<?PHP
class reservation{
private ?int $reference=null;
private ?int $id=null;
private ?string $firstname = null;
private ?string $lastname = null;
private ?string $email = null;

function __construct(string $id,string $firstname, string $lastname, string $email){

$this->id=$id;
$this->firstname=$firstname;
$this->lastname=$lastname;
$this->email=$email;
}

function getReference(): string{
return $this->reference;
}
function getId(): int{
return $this->id;
}
function getFirstname(): string{
return $this->firstname;
}
function getLastname(): string{
return $this->lastname;
}
function getEmail(): string{
return $this->email;
}


function setReference(string $reference): void{
$this->reference=$reference;
}
function setId(int $id): void{
$this->id=$id;
}
function setFirstname(string $firstname): void{
$this->firstname=$firstname;
}
function setLastname(string $lastname): void{
$this->lastname=$lastname;
}
function setEmail(string $email): void{
$this->email=$email;
}
function setCategorie(string $categorie): void{
$this->categorie=$categorie;
}



}
?>