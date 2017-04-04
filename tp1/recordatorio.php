<?php
    /*
        FINAL ==========
        final function name(){}
        La palabra reservada final se usa para definir un metodo en una clase y que
        ninguno de sus hijos pueda sobreescribir el metodo.

        El metodo magico function  __toString se usa para cuando uno quiere hacer
        un echo del objeto.

        ITERFACES ==========
        Se puede heredar de una sola clase pero se pueden implementar muchas interfaces,
        pasadas como un array de interfaces. Estas son declaraciones de funciones,
        las cuales en la clase que las utilice tendra que implementar.
        interface nombre{
            public function un_metodo();
            public function otro_metodo();
        }
        y luego en la clase que se quiera usar puede usarse asi:
        class persona extens otherClass implements nombre{
            //definicion de la clase.
        }

        INSTANCEOF ============
        Permite saber si un objeto es de una cierta clase.

        ABSTRACT ============
        Una clase abstracta no se puede instanciar. Puede tener metodos abstractos y
        no abstractos. Puede tener constructor.
        Toda clase que herede de ella debera dar implementacion a todos los metodos abstractos.
        heredando los no abstractos.
    */

?>
