<?php
	
	/* Création de la classe Salarié*/
	class Salarie
	{
		private $Matricule;

		private $Nom;

		private $Prénom;

		private $Salaire;

		private $TauxCS;

		private $TauxCP;

		private $SalaireNet;

		private $CoutEntreprise;

		public function setSalaire($Salaire)
		{
			$this->Salaire=$Salaire;
		}

		public function setTauxCS ($TauxCS)
		{
			$this->TauxCS=$TauxCS;
		}

		public function setTauxCP($TauxCP)
		{
			$this->TauxCP=$TauxCP;
		}

		public function __construct($ma,$nom,$pre,$sal,$tauxcs,$tauxcp)
		{
			$this->Matricule = $ma; 
			$this->Nom = $nom;
			$this->Prenom = $pre;
			$this->Salaire = $sal;
			$this->TauxCS = $tauxcs;
			$this->TauxCP = $tauxcp;
			$this->CalculSalaireNet();
			$this->CalculCoutEntreprise();
			$this->Detail();
		}

		public function Detail()
		{
			echo "Matricule : ".$this->Matricule."<br>Nom :  ".$this->Nom." <br>Prénom : ".$this->Prenom."
	
			<br>Salaire BRUT : ".$this->Salaire." euros.
			<br>Montant des Charges Sociales : ".$this->TauxCS=($this->Salaire*($this->TauxCS/100))." euros.
			<br> Salaire NET : ".$this->SalaireNet." euros.
			<br> Coût de l'entreprise :".$this->CoutEntreprise."
			<br>Montant des Charges Patronales : ".$this->TauxCS=($this->Salaire*($this->TauxCP/100))." euros.";
			
		}

		public function CalculSalaireNet ()
		{
			$this->SalaireNet = $this->Salaire - ($this->Salaire * $this->TauxCS/100);
		}

		public function CalculCoutEntreprise ()
		{
			$this->CoutEntreprise = $this->Salaire + ($this->Salaire * $this->TauxCP/100);
		}

	}
?>