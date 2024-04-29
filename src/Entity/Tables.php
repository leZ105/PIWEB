<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\TablesRepository;

#[ORM\Entity]
class Tables
{
    #[ORM\Column(name: "table_id", type: "integer", nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private $tableId;

    #[ORM\Column(name: "nom_zone", type: "string", length: 255, nullable: false)]
    private $nomZone;

    #[ORM\Column(name: "capacite_t", type: "integer", nullable: false)]
    private $capaciteT;

    public function getTableId(): ?int
    {
        return $this->tableId;
    }

    public function getNomZone(): ?string
    {
        return $this->nomZone;
    }

    public function setNomZone(string $nomZone): static
    {
        $this->nomZone = $nomZone;

        return $this;
    }

    public function getCapaciteT(): ?int
    {
        return $this->capaciteT;
    }

    public function setCapaciteT(int $capaciteT): static
    {
        $this->capaciteT = $capaciteT;

        return $this;
    }
}
