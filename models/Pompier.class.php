<?php
class Pompier
{
	// Attributs
	private $_matricule;
	private $_nomPompier;
	private $_prenomPompier;
	private $_dateNaissPompier;
	private $_telPompier;
	private $_sexePompier;
	private $_idGrade;
	

	public function __construct(array $donnees)
	{
		$this->hydrate($donnees);
	}

	public function hydrate(array $donnees)
	{
		foreach ($donnees as $key => $value) {
			$method = 'set'.ucfirst($key);

			if (method_exists($this, $method))
			{
				$this->$method($value);
			}
		}
	}

	// Getters

	public function getMatricule()
	{
		return $this->_matricule;
	}

	public function getNomPompier()
	{
		return $this->_nomPompier;
	}

	public function getPrenomPompier()
	{
		return $this->_prenomPompier;
	}

	public function getDateNaissPompier()
	{
		return $this->_dateNaissPompier;
	}

	public function getTelPompier()
	{
		return $this->_telPompier;
	}

	public function getSexePompier()
	{
		return $this->_sexePompier;
	}

	public function getIdGrade()
	{
		return $this->_idGrade;
	}
    
	// Setters

	public function setMatricule($id)
	{
		$id = (int) $id;
		if ($id > 0)
		{
			$this->_matricule= $id;
		}	
	}

	public function setNomPompier($nom)
	{
		if (is_string($nom))
		{
			$this->_nomPompier = $nom;
		}	
	}

	public function setPrenomPompier($prenom)
	{
		if (is_string($prenom))
		{
			$this->_prenomPompier = $prenom;
		}	
	}

	public function setDateNaissPompier($date)
	{

		$this->_dateNaissPompier = $date;

	}
	
	public function setTelPompier($tel)
	{
		$this->_telPompier = $tel;
	}

    public function setSexePompier($sexe)
	{
		$this->_sexePompier = $sexe;
	}

	public function setIdGrade($grade)
	{
		$this->_idGrade = $grade;
	}

}
?>