<?php
 if(isset($_POST['legajo'])){ 
    //Guarda el legajo que llego vía ajax. en una varibale.
    $legajo = $_POST['legajo'];
    //Lista de empleados.
    $empleados = array(
       array('legajo' => '10001', 'nombre' => 'Rosa', 'apellido' => 'Martines', 'departamento' => 'Marketing', 'Saldo' => '50$', 'Lugar' => 'Ventas'),
       array('legajo' => '10002', 'nombre' => 'Estefany', 'apellido' => 'Duran', 'departamento' => 'Sistemas', 'Saldo' => '200$', 'Lugar' => 'Area de informatica'),
       array('legajo' => '10003', 'nombre' => 'Cornelio', 'apellido' => 'Gonzalez', 'departamento' => 'Recursos Humanos', 'Saldo' => '150$', 'Lugar' => 'data-center')
    );
    //Variable que guardará los datos del empleado a buscar. Por defecto guardará null.
    $empleado = null;
    foreach($empleados as $item){
       //Verifica si el legajo es uno de los que está en la lista.
       if($item['legajo'] == $legajo){
          //Guarda los datos del empleado que fue encontrado y finaliza el ciclo del foreach.
          $empleado = $item;
          break;
       }
    }
    if($empleado){
       $empleado = json_encode($empleado);
    } 
    echo $empleado; 
 }else{
    echo ':(';
 } 
?>