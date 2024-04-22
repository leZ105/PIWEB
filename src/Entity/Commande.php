<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\CommandeRepository;

#[ORM\Entity]
class Commande
{
    #[ORM\Column(name: "numC", type: "string", length: 20, nullable: false)]
    private $numc;

    #[ORM\Column(name: "adresseC", type: "string", length: 20, nullable: false)]
    private $adressec;

    #[ORM\Column(name: "panier", type: "string", length: 20, nullable: false)]
    private $panier;

    #[ORM\Column(name: "idResto", type: "integer", nullable: false)]
    private $idresto;

    #[ORM\Column(name: "price", type: "integer", nullable: false)]
    private $price;

    #[ORM\Column(name: "status", type: "string", length: 255, nullable: false)]
    private $status;

    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "NONE")]
    #[ORM\OneToOne(targetEntity: "Resto")]
    #[ORM\JoinColumn(name: "id_resto", referencedColumnName: "id_resto")]
    private $idCommande;

    public function getNumc(): ?string
    {
        return $this->numc;
    }

    public function setNumc(string $numc): static
    {
        $this->numc = $numc;

        return $this;
    }

    public function getAdressec(): ?string
    {
        return $this->adressec;
    }

    public function setAdressec(string $adressec): static
    {
        $this->adressec = $adressec;

        return $this;
    }

    public function getPanier(): ?string
    {
        return $this->panier;
    }

    public function setPanier(string $panier): static
    {
        $this->panier = $panier;

        return $this;
    }

    public function getIdresto(): ?int
    {
        return $this->idresto;
    }

    public function setIdresto(int $idresto): static
    {
        $this->idresto = $idresto;

        return $this;
    }

    public function getPrice(): ?int
    {
        return $this->price;
    }

    public function setPrice(int $price): static
    {
        $this->price = $price;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): static
    {
        $this->status = $status;

        return $this;
    }

    public function getIdCommande(): ?Resto
    {
        return $this->idCommande;
    }

    public function setIdCommande(?Resto $idCommande): static
    {
        $this->idCommande = $idCommande;

        return $this;
    }
}
