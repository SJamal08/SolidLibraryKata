<?php   

    class Membre
        {
            private $identifiant;

            public function __construct($identifiant)
            {
              
              $this->identifiant = $identifiant;
            }

            public function getIdentifiant()
                {
                    return $this->identifiant;
                }

        }

?>