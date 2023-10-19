<?php
    use PHPUnit\Framework\TestCase;

    require_once "WordCount.php";

    class SimpleTest extends TestCase{
        public function testCountWords(){
            $Wc = new WordCount();
            $TestSentence = "My name is Joko"; // 4 Kata
            $WordCount = $Wc->countWords($TestSentence);
            $this->assertEquals(3, $WordCount);
        }
    }
?>