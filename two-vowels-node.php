<?php

    class Node{
        public $data;
        public $next;

        public function __construct($data){
            $this->data = $data;
            $this->next = null;
        }
    }

    class LinkedList{
        public $head;
        
        public function __construct(){
            $this->head = null;
        }

        public function append($data){
            $newNode = new Node($data);
            
            if($this->head === null){
                $this->head = $newNode;
                return;
            }

            $current = $this->head;

            while($current->next !== null){
                $current = $current->next;
            }
            $current->next = $newNode;
        }

        function countNumberOfVowels($string){
            $count = 0;
            $vowels = ['a', 'e', 'i', 'o', 'u'];
            $n = strlen($string);
            for($i = 0; $i < $n; $i++){
                if(in_array(strtolower($string[$i]), $vowels)){
                    $count++;
                }
            }

            return $count;
        }

        function printNodesWithTwoVowels(){
            $current = $this->head;
            while($current !== null){
                if($this->countNumberOfVowels($current->data) === 2){
                    echo "{$current->data}\n";
                }

                $current = $current->next;
            }
        }

    }

    $LinkedList = new LinkedList();
    $LinkedList->append("fatima");
    $LinkedList->append("Apple");
    $LinkedList->append("hii");
    $LinkedList->append("hello");
    $LinkedList->append("php");
    $LinkedList->append("vowels");
    $LinkedList->append("noVowels");

    echo "Nodes with only 2 vowels:\n";
    $LinkedList->printNodesWithTwoVowels();

?>