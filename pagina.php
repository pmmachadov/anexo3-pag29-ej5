<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- Crea una función que devuelva una matriz escalar bidimensional con los valores de
    la tabla de multiplicar del 1 al 10. A continuación crea otra función que reciba como
    parámetro la matriz y muestre sus valores en una tabla. -->

    <?php


include 'funlib.php';
echo "<table border = 1>";
echo "<tr>";
echo "  <td> Pablo  </td>";
echo "  <td> Machado </td>";
echo "</tr>";
echo "<td> " . "Ejercicio" . "</td>";
echo "<td> " . "anexo2-pag29-ej4" . "</td>";
echo "</tr>";
echo "<td> " . "tablaMultiplicar()" . "</td>";
echo "<td> " . "1	2	3	4	5	6	7	8	9	10
2	4	6	8	10	12	14	16	18	20
3	6	9	12	15	18	21	24	27	30
4	8	12	16	20	24	28	32	36	40
5	10	15	20	25	30	35	40	45	50
6	12	18	24	30	36	42	48	54	60
7	14	21	28	35	42	49	56	63	70
8	16	24	32	40	48	56	64	72	80
9	18	27	36	45	54	63	72	81	90
10	20	30	40	50	60	70	80	90	100" . "</td>";
echo "</tr>";
echo "</table>";
    function tablaMultiplicar()
    {
        $tabla = array();
        for ($i = 1; $i <= 10; $i++) {
            for ($j = 1; $j <= 10; $j++) {
                $tabla[$i][$j] = $i * $j;
            }
        }
        return $tabla;
    }

    function mostrarTabla($tabla)
    {
        echo "<table border='1'>";
        for ($i = 1; $i <= 10; $i++) { //El codigo funciona asi: $tabla[1][1] = 1*1 = 1, $tabla[1][2] = 1*2 = 2, $tabla[1][3] = 1*3 = 3, etc...
            echo "<tr>";
            for ($j = 1; $j <= 10; $j++) {
                echo "<td>" . $tabla[$i][$j] . "</td>"; //El codigo funciona asi: 1 2 3 4 5 6 7 8 9 10 2 4 6 8 10 12 14 16 18 20 3 6 9 12 15 18 21 24 27 30 4 8 12 16 20 24 28 32 36 40 5 10 15 20 25 30 35 40 45 50 6 12 18 24 30 36 42 48 54 60 7 14 21 28 35 42 49 56 63 70 8 16 24 32 40 48 56 64 72 80 9 18 27 36 45 54 63 72 81 90 10 20 30 40 50 60 70 80 90 100
            }
            echo "</tr>";
        }
        echo "</table>";
    }
    // Aqui se trabaja con una matriz bidimensional, que es una matriz de matrices. En este caso se multiplica 1 por 1, 1 por 2, 1 por 3, hasta 10 por 10. El resultado se almacena en la matriz $tabla. La función devuelve la matriz $tabla. La función mostrarTabla recibe como parámetro la matriz $tabla y la muestra en una tabla.
    $tabla = tablaMultiplicar();
    mostrarTabla($tabla);
    ?>

</body>

</html>