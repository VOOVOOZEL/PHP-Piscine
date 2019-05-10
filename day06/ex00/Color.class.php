<?php

Class Color{
    public $red = 0;
    public $green = 0;
    public $blue = 0;
    static $verbose = False;
    
    public function doc() 
    {
        return file_get_contents('Color.doc.txt');
    }
    
    public function __construct(array $kwargs)
    {
        if (array_key_exists('rgb', $kwargs))
        {
            $this->red = $kwargs['rgb'] >> 16 & 0xFF;
            $this->green = $kwargs['rgb'] >> 8 & 0xFF;
            $this->blue = $kwargs['rgb'] & 0xFF;
        }
        else if (array_key_exists('red', $kwargs) && array_key_exists('green', $kwargs) && array_key_exists('blue', $kwargs))
        {
            $this->red = $kwargs['red'];
            $this->green = $kwargs['green'];
            $this->blue = $kwargs['blue'];
        }
        if (self::$verbose)
            print ($this . " constructed.\n");
        return ;
    }

    public function __destruct()
    {
        if (self::$verbose)
            print ($this . " destructed.\n");
        return ;
    }

    public function __ToString()
    {
         return (sprintf("Color( red: %3d, green: %3d, blue: %3d )", $this->red, $this->green, $this->blue));
    }
    
    public function add(Color $add)
    {
        return ( new Color(array('red' => $this->red + $add->red, 'green' => $this->green + $add->green, 'blue' => $this->blue + $add->blue)));
    }

    public function sub(Color $add)
    {
        return ( new Color(array('red' => $this->red - $add->red, 'green' => $this->green - $add->green, 'blue' => $this->blue - $add->blue)));
    }

    public function mult($mult)
    {
        return ( new Color(array('red' => $this->red * $mult, 'green' => $this->green * $mult, 'blue' => $this->blue * $mult)));
    }
}
?>