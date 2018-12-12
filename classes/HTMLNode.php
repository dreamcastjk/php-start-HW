<?php

class HTMLNode implements IPrintDocument {

    //use NodeTrait;

    //узел дом элемента
    public $nodeTitle;

    //весь документ
    public $document;

    //конструктор
    public function __construct($nodeTitle){

        $this->nodeTitle = $nodeTitle;
        $this->document = [];

    }//__construct

    //вывод документа
    function PrintDocument($document){

        $result = $this->nodeTitle . "</br>";

        if (count($this->document)  > 0){

            foreach ($this->document as $item){

                echo $result .= $item->PrintDocument($item);

            }//foreach
        }//if

//        foreach ($document as $key => $value){
//
//            //echo $key . " " . $value;
//
//            print_r($value);
//
//        }//foreach

    }//PrintDocument

    //добавление дочернего узла
    function AddNode($node){

        array_push($this->document, $node);

    }//AddNode

}//HTMLNode


?>