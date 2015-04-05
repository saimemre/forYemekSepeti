<?php

class Solution {
    private $array;
    private $returnArray;

    public function getArray(){
        return $this->array;
    }

    public function setArray(array $array){
        if(count($array) > 0){
            $this->array = $array;
        }
    }

    //gelen arrayin her elemanını döndürerek eleman harici yeni bir hesaplama arrayi oluşturuldu($proccesArray), sonrasında procces methodunda gönderildi.
    public function newArray(){
        if(count($this->array) > 0){
            foreach ($this->array as $key => $value) {
                $proccesArray = $this->array;
                unset($proccesArray[$key]);
                $this->returnArray[] = $this->procces($key,$proccesArray);
            }

            return $this->returnArray;
        }
    }

    // yukarda oluşturulan her array burada elemanları çarpıp toplanarak toplam döndürüldü.
    private function procces($key, array $proccesArray){
        $total = 0;
        foreach ($proccesArray as $k => $value) {
            $total += $this->array[$key] * $value;
        }
        return $total;
    }


}

$array = array(1,45,55,44,6,2);

$solution = new Solution();
$solution->setArray($array);
print_r($solution->getArray());
print_r($solution->newArray());