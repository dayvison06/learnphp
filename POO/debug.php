<?php

class HighSchoolSweetheart
{
    public function firstLetter(string $name): string
    {
        return substr(trim($name),0 ,1);
    }

    public function initial(string $name): string
    {
        $letter = $this->firstLetter($name);
        return strtoupper($letter).".";
    }

    public function initials(string $name): string
    {

        $nameFull = explode(' ', $name);
        $name_part = '';
        
        for ($i=0; $i < count($nameFull) ; $i++) { 
            
            $name_part = $name_part . $this->initial($nameFull[$i])." ";
        }
        
        return trim($name_part);
    }

    public function pair(string $sweetheart_a, string $sweetheart_b): string
    {
        throw new \BadFunctionCallException("Implement the function");
    }
}

$h = new HighSchoolSweetheart();
echo $h->initials("Dayvison Rocha Pereira Santos");
