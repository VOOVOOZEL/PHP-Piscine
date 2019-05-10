<?php 

class Tyrion extends Lannister {
    public function sleepWith($person) {
        if ($person instanceof Stark) {
            print "Let's do this.\n";
        }
        else {
            print "Not even if I'm drunk !\n";
        }
    }
}
?>