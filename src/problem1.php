<?php
class Problem1
{
    private $total;
    
    public function __construct()
    {}
    
    public function getAnswer($max, $multiples)
    {
        $this->total = 0;
        $usedNumbers = array();

        for ($i = ($max - 1); $i > 0; $i--) {
            $this->total += $this->getValueIfMultipleOf($i, $multiples);
        }
               
        return $this->total;
    }

    private function getValueIfMultipleOf($value, $multiples)
    {
        foreach ($multiples as $multiple) {
            if (($value % $multiple) == 0) {
                return $value;
            }    
        }
        return 0;
    }            
}

$correctAnswer = 233168;
$problem = new Problem1();
$startTime = microtime(true);
$answer = $problem->getAnswer(1000, array(3, 5));
$endTime = microtime(true);
echo "<pre>";
echo "Answer: $answer - " . (($answer == $correctAnswer) ? "Correct":"Incorrect") . "\n";
echo "Elapsed Time: " . ($endTime - $startTime);
echo "</pre>";
