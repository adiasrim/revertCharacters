<?php
//$result = revertCharacters("Привет! Давно не виделись.");
//echo $result; || Тевирп! Онвад ен ьсиледив.
namespace App;
class Characters
{
    public function revertCharacters(string $string): string
    {
        $reversed = "";
        $store = "";
        for ($i = 0; $i < strlen($string); $i++) {
            if ($string[$i] == " ") {
                $reversed .= $store . " ";
                $store = "";
                continue;
            }
            $store = $string[$i] . $store;
        }
        $reversed .= $store;

        return $reversed;
    }
}