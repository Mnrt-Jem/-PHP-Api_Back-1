<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CompanyRepository")
 */
class Company
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $company_name;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $company_status;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $company_logo;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $company_commentary;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $company_category;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $company_address;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $company_comp_address;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $company_postcode;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $company_city;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $company_phone;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $company_fax;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $company_website;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $company_creationDate;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $company_siret;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $company_codeNaf;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $company_source;

    /**
     * @ORM\Column(type="datetime")
     */
    private $company_createdAt;

    /**
     * @ORM\Column(type="datetime")
     */
    private $company_updatedAt;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\ActivityArea", inversedBy="company_id")
     */
    private $activityArea;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\NbSalary", inversedBy="company_id")
     */
    private $nbSalary;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCompanyName(): ?string
    {
        return $this->company_name;
    }

    public function setCompanyName(string $company_name): self
    {
        $this->company_name = $company_name;

        return $this;
    }

    public function getCompanyStatus(): ?string
    {
        return $this->company_status;
    }

    public function setCompanyStatus(?string $company_status): self
    {
        $this->company_status = $company_status;

        return $this;
    }

    public function getCompanyLogo(): ?string
    {
        return $this->company_logo;
    }

    public function setCompanyLogo(?string $company_logo): self
    {
        $this->company_logo = $company_logo;

        return $this;
    }

    public function getCompanyCommentary(): ?string
    {
        return $this->company_commentary;
    }

    public function setCompanyCommentary(?string $company_commentary): self
    {
        $this->company_commentary = $company_commentary;

        return $this;
    }

    public function getCompanyCategory(): ?string
    {
        return $this->company_category;
    }

    public function setCompanyCategory(?string $company_category): self
    {
        $this->company_category = $company_category;

        return $this;
    }

    public function getCompanyAddress(): ?string
    {
        return $this->company_address;
    }

    public function setCompanyAddress(?string $company_address): self
    {
        $this->company_address = $company_address;

        return $this;
    }

    public function getCompanyCompAddress(): ?string
    {
        return $this->company_comp_address;
    }

    public function setCompanyCompAddress(?string $company_comp_address): self
    {
        $this->company_comp_address = $company_comp_address;

        return $this;
    }

    public function getCompanyPostcode(): ?string
    {
        return $this->company_postcode;
    }

    public function setCompanyPostcode(?string $company_postcode): self
    {
        $this->company_postcode = $company_postcode;

        return $this;
    }

    public function getCompanyCity(): ?string
    {
        return $this->company_city;
    }

    public function setCompanyCity(?string $company_city): self
    {
        $this->company_city = $company_city;

        return $this;
    }

    public function getCompanyPhone(): ?string
    {
        return $this->company_phone;
    }

    public function setCompanyPhone(?string $company_phone): self
    {
        $this->company_phone = $company_phone;

        return $this;
    }

    public function getCompanyFax(): ?string
    {
        return $this->company_fax;
    }

    public function setCompanyFax(?string $company_fax): self
    {
        $this->company_fax = $company_fax;

        return $this;
    }

    public function getCompanyWebsite(): ?string
    {
        return $this->company_website;
    }

    public function setCompanyWebsite(?string $company_website): self
    {
        $this->company_website = $company_website;

        return $this;
    }

    public function getCompanyCreationDate(): ?\DateTimeInterface
    {
        return $this->company_creationDate;
    }

    public function setCompanyCreationDate(?\DateTimeInterface $company_creationDate): self
    {
        $this->company_creationDate = $company_creationDate;

        return $this;
    }

    public function getCompanySiret(): ?string
    {
        return $this->company_siret;
    }

    public function setCompanySiret(?string $company_siret): self
    {
        $this->company_siret = $company_siret;

        return $this;
    }

    public function getCompanyCodeNaf(): ?string
    {
        return $this->company_codeNaf;
    }

    public function setCompanyCodeNaf(?string $company_codeNaf): self
    {
        $this->company_codeNaf = $company_codeNaf;

        return $this;
    }

    public function getCompanySource(): ?string
    {
        return $this->company_source;
    }

    public function setCompanySource(?string $company_source): self
    {
        $this->company_source = $company_source;

        return $this;
    }

    public function getCompanyCreatedAt(): ?\DateTimeInterface
    {
        return $this->company_createdAt;
    }

    public function setCompanyCreatedAt(?\DateTimeInterface $company_createdAt): self
    {
        $this->company_createdAt = $company_createdAt;

        return $this;
    }

    public function getCompanyUpdatedAt(): ?\DateTimeInterface
    {
        return $this->company_updatedAt;
    }

    public function setCompanyUpdatedAt(\DateTimeInterface $company_updatedAt): self
    {
        $this->company_updatedAt = $company_updatedAt;

        return $this;
    }

    public function getActivityArea(): ?ActivityArea
    {
        return $this->activityArea;
    }

    public function setActivityArea(?ActivityArea $activityArea): self
    {
        $this->activityArea = $activityArea;

        return $this;
    }

    public function getNbSalary(): ?NbSalary
    {
        return $this->nbSalary;
    }

    public function setNbSalary(?NbSalary $nbSalary): self
    {
        $this->nbSalary = $nbSalary;

        return $this;
    }
}
