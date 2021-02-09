<?php   

    class Emprunt
    {
        private $emprunteur;
        private $livre;
        private $dateExpiration;

        public function __construct($emprunteur, $livre , $dateExpiration)
        {
          
          $this->emprunteur = $emprunteur;
          $this->livre = $livre;
          $this->dateExpiration = $dateExpiration;
        }

        public function getEmprunteur()
            {
                return $this->emprunteur;
            }

        public function getLivre()
            {
                return $this->livre;
            }

        public function getDateExpiration()
            {
                return $this->dateExpiration;
            }
    }

?>