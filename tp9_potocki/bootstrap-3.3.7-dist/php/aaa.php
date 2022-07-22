<?php
// Enunciado:
// buscar una palabra en una frase y poder identificar cuantas veces aparece la palabra en la frase.

// Puede utilizar el lenguaje de programación que mas comodo te sientas.

// Dada a una palabra, buscarla en una frase y devolver cuantas veces aparece en ella, 
// en el caso que la palabra no aparezca en la frase, devolver null o 0
// Tanto la frase como la palabra deben ser parametro de una funcion.

// Por ejemplo: Buscando la palabra "palabras"
// Hola Soy Ruben y estoy buscando palabras en una frase, 
// las palabras las tengo que poder contar programaticamente y ver cuantas palabras devuelve la consola. 
// en el caso que no existan las palabras seleccionadas devolver 0. 
// Devuelve: 4

$text = 'palabras';
$textFind = 'Hola Soy Ruben y estoy buscando palabras en una frase, las palabras las tengo que poder contar programaticamente y ver cuantas palabras devuelve la consola. en el caso que no existan las palabras seleccionadas devolver 0';
$auxText = '';
$countText = 0;
findText($textFind, $text);

function findText($textFind, $text){
    $objetos = explode(" ", $textFind);
    foreach($objetos as $fila){
        echo $fila;
    }
    // for($i = 0; $i < strlen($textFind); $i++){
    //     if(!strpos($textFind, " ")){
    //         $auxText = $textFind[$i];
    //     }else{
    //         $auxText = null;
    //     }
    //     // echo "<br>".$textFind[$i];
    //     if ($auxText == $text){
    //         echo $auxText;
    //         $countText += 1; 
    //     }
    // }
    // $string1 = strval($countText);
    // echo $string1;
}

    
?>