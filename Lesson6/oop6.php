<?php
    class WordCounter{
        const ASC = 1;
        const DESC = 2;
        private $words;

        function __construct($fileName)
        {
            $file_content = file_get_contents($fileName);
            $this->words = array_count_values(str_word_count($file_content, 1));
        }

        public function count($order)
        {
            if ($order == self::ASC) {
                asort($this->words);
            } else if ($order == self::DESC) {
                arsort($this->words);
            }
            foreach ($this->words as $key => $val) {
                echo "<p> $key = $val </p>";
            }
        }
    }

    $wc = new WordCounter("wordss.txt");
    $wc->count(WordCounter::ASC);
    echo "<hr/>";
    $wc->count(WordCounter::DESC);
?>