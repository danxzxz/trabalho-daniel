<?php 

namespace app\models;

use DateTimeImmutable;

class Livro {

    private int $id;
    private string $titulo;
    private string $dataLancamento;
    private ?string $pais;
    private ?int $paginas;
    private ?string $genero;
    private ?string $capa;
    private DateTimeImmutable $criadoEm;

    

    /**
     * Get the value of id
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Set the value of id
     */
    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of titulo
     */
    public function getTitulo(): string
    {
        return $this->titulo;
    }

    /**
     * Set the value of titulo
     */
    public function setTitulo(string $titulo): self
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get the value of dataLancamento
     */
    public function getDataLancamento(): string
    {
        return $this->dataLancamento;
    }

    /**
     * Set the value of dataLancamento
     */
    public function setDataLancamento(string $dataLancamento): self
    {
        $this->dataLancamento = $dataLancamento;

        return $this;
    }

    /**
     * Get the value of pais
     */
    public function getPais(): ?string
    {
        return $this->pais;
    }

    /**
     * Set the value of pais
     */
    public function setPais(?string $pais): self
    {
        $this->pais = $pais;

        return $this;
    }

    /**
     * Get the value of paginas
     */
    public function getPaginas(): ?float
    {
        return $this->paginas;
    }

    /**
     * Set the value of paginas
     */
    public function setPaginas(?float $paginas): self
    {
        $this->paginas = $paginas;

        return $this;
    }

    /**
     * Get the value of genero
     */
    public function getGenero(): ?string
    {
        return $this->genero;
    }

    /**
     * Set the value of genero
     */
    public function setGenero(?string $genero): self
    {
        $this->genero = $genero;

        return $this;
    }

    /**
     * Get the value of capa
     */
    public function getCapa(): ?string
    {
        return $this->capa;
    }

    /**
     * Set the value of capa
     */
    public function setCapa(?string $capa): self
    {
        $this->capa = $capa;

        return $this;
    }

    /**
     * Get the value of criadoEm
     */
    public function getCriadoEm(): DateTimeImmutable
    {
        return $this->criadoEm;
    }

    /**
     * Set the value of criadoEm
     */
    public function setCriadoEm(DateTimeImmutable $criadoEm): self
    {
        $this->criadoEm = $criadoEm;

        return $this;
    }
}