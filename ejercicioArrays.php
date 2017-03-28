<?php

    // 0 harcodear un array
    // 1 constructor
    // 2 [$i]
    // 3 [con numeros random, no secuencial]
    // 4 array_push( , );
    // 5 arrays asociativos
    //unset($array[10])
    //unset($array)
    //print_r($array);

    //0
    echo "harcodear un array";
    $cero = [
        "elemento_uno",
        "elemento_dos",
        "elemento_tres",
    ];
    var_dump($cero);
    echo "<br>";

    //1 objeto
    $uno = new arrayObject(
        array(
            "elemento_uno",
            "elemento_dos",
            "elemento_tres",
        )
    );
    var_dump($uno);
    echo "<br>";

    //2
    for ($i=0;$i<3;$i++)
        $dos[$i] = $i + 1000;
    var_dump($dos);
    echo "<br>";

    //3
    $tres[10] = 1000;
    $tres[54] = 5432;
    $tres[14] = 4324;
    // si le hago un foreach sale solo 3 elementos.
    foreach($tres as $item)
        echo $item . "<br>";
    // asi tambien
    var_dump($tres);
    //trato de mostrar todos. si no se seteo ningun valor no se devuelve nada.
    for ($i=0;$i<55;$i++)
        echo $tres[$i] . " - ";
    echo "<br>";

    //4
    $cuatro = array(); // necesita ser un array sino no anda.
    array_push($cuatro, "hola","chau");
    var_dump($cuatro);
    echo "<br>";

    //5
    $cinco = array(
        "clave" => 1234,
        "clave1" => 2342,
        "clave2" => 6565,
        array(
            1,
            2,
            array(
                "uno",
                2,
            ),
        ),
    );
    print_r($cinco);
    echo "<br>";
    var_dump($cinco);

?>
