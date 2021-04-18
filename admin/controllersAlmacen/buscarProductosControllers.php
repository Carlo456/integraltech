<?php
//Si se ha pulsado el botón de buscar
if (isset($_POST['search'])) {
    //Recogemos las claves enviadas
    $keywords = $_POST['keywords'];

    //Conectamos con la base de datos en la que vamos a buscar
    $conexion = mysql_connect("localhost", "root", " ");
    mysql_select_db("integraltech", $conexion);

    $query = "SELECT id, nombre, marca, modelo DATE_FORMAT(post_date, '%d-%m-%Y') as fecha
                FROM productos
                WHERE status = '1'
                AND (contenido LIKE '%" . $keywords . "%'
                OR titulo LIKE '%" . $keywords . "%')
                ORDER BY fecha desc";

    $query_searched = mysql_query($query, $conexion);

    $count_results = mysql_num_rows($query_searched);

    //Si ha resultados
    if ($count_results > 0) {

        echo '<h2>Se han encontrado '.$count_results.' resultados.</h2>';

        echo '<ul>';
        while ($row_searched = mysql_fetch_array($query_searched)) {
            //En este caso solo mostramos los datos de busqueda que son:
            echo '<li><a href="#">'.$row_searched['id'].' ('.$row_searched['nombre'].' ('.$row_searched['modelo'].' ('.$row_searched['marca'].')</a></li>';
        }
        echo '</ul>';
    }
    else {
        //Si no hay registros encontrados
        echo '<h2>No se encuentran resultados con los criterios de búsqueda.</h2>';
    }
}
?>
