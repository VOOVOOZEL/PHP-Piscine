<?php 
    class NightsWatch {
        private $_com = array("");

        public function recruit($person) {
            array_push($this->_com, $person);
        }

        public function fight() {
            if (isset($this->_com)) {
                foreach ($this->_com as $fighter) {
                    if ($fighter instanceof IFighter) {
                        $fighter->fight();
                    }
                }
            }
        }
    }
?>