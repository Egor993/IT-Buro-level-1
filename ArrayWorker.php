<?php

    class ArrayWorker {
        protected $array = [];
        
        public function __construct()
        {
            $this->fill();
            $this->reindex();
        }
    
        protected function fill(){
            for($i = 0; $i < 5; $i++){
                $this->$array[$i] = rand(0,100);
            }
        }
    
        protected function reindex(){
            $key_min = array_keys($this->$array, min($this->$array))[0];
            $key_max = array_keys($this->$array, max($this->$rray))[0];
            $value_max = max($this->$array);
            $value_min = min($this->$array);
            $this->$array[$key_min] = $value_max;
            $this->$array[$key_max] = $value_min;
        }
    
        public function dump(){
            return array_keys($this->$array, min($this->$array))[0] + array_keys($this->$array, max($this->$rray))[0];
        }
    }
?>

