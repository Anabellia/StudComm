<?PHP
/**
 * Spintax - A helper class to process Spintax strings.
 * @name Spintax
 */
class Spintax{
    
    public function setSeed($seed)
    {
        srand($seed);
    }
    
    public function process($text, $name, $gender)
    {
        
        
        $firstDespin = preg_replace_callback('/\{(((?>[^\{\}]+)|(?R))*?)\}/x', array($this, 'replace'), $text );



        $parts = explode(' ', $name);
        $name_first = array_shift($parts);
        $name_last = array_pop($parts);
        $name_middle = trim(implode(' ', $parts));
        
        if($gender == 'male'){
            $gend_him_her = 'him';
            $gend_her_he = 'he';
            $gend_shees_his = 'his';
        }elseif($gender == 'female'){
            $gend_him_her = 'her';
            $gend_her_he = 'she';
            $gend_shees_his = 'shees';
        }

        $replace_name = str_replace ('XXX', $name_first, $firstDespin);
        dd ($replace_name);

        return $replace_name;

        /* $parts = explode(' ', 'Billy Bobby Johnson');
        $name_first = array_shift($parts);
        $name_last = array_pop($parts);
        $name_middle = trim(implode(' ', $parts));

        echo 'First: ' . $name_first . ', ';
        echo 'Last: ' . $name_last . ', ';
        echo 'Middle: ' . $name_middle . '.'; */

    }

    public function replace($text)
    {
        $text = $this->process($text[1]);
        $parts = explode('|', $text);
        return $parts[array_rand($parts)];
    }
}


/* EXAMPLE USAGE */

$spintax = new Spintax();
$string = "{Hello|Howdy|Hola} to you, {Mr.|Mrs.|Ms.} {Smith|Williams|Davis}!"."\n";
echo $spintax->process($string);

/* NESTED SPINNING EXAMPLE */

echo $spintax->process("{Hello|Howdy|Hola} to you, {Mr.|Mrs.|Ms.} {{Jason|Malina|Sara}|Williams|Davis}")."\n";

/* SET SEED EXAMPLE */
// Sets the seed for the random function. As result, the spin will always output the same text
// no matter how many times you process it. Text Id 100 will always be Hello
$idText = 100;
$spintax->setSeed($idText);
$textId100 = $spintax->process("{Hello|Hi!} {man|guy}")."\n";
echo $textId100;