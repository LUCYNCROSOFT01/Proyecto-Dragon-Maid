<?php
echo"<br>";echo"<br>";
echo"<h1>FACTURA DE PEDIDOS</h1>";
$FechaIng=$_POST['FechaIng'];
$Horaped=$_POST['Horaped'];
$Nombre=$_POST['Nombre'];
$Cantidad= $_POST['Cantidad'];
$Producto= $_POST['Producto'];
$Precio= $_POST['Precio'];
$Telefono=$_POST['Telefono'];
$Celular= $_POST['Celular'];
$Direccion= $_POST['Direccion'];
$porcentaje=$_POST['porcentaje'];

$Total=$Cantidad * $Precio;
$Descuento=$Total*$porcentaje/100;
$Netoapagar=$Total-$Descuento;

echo"<h3>FechaIng:".$FechaIng;
echo"<br>";
echo "Horaped:".$Horaped;
echo"<br>";
echo "Nombre:".$Nombre;
echo"<br>";
echo "Producto:".$Producto;
echo"<br>";
echo "Precio:".$Precio;
echo"<br>";
echo "Direccion:".$Direccion;
echo"<br>";
echo "Telefono:".$Telefono;
echo"<br>";
echo "Celular:".$Celular;
echo"<br>"; 
echo "Cantidad:".$Cantidad;
echo"<br>";
echo "El total es:".$Total;
echo"<br>";
echo"El descuento es:".$Descuento;
echo"<br>";
echo"El netoapagar:".$Netoapagar;
echo"<br></h3>";

?>

<?php
    $servidor = "localhost";
    $nombreusuario = "root";
    $password = "";
    $db = "cakeart";

    $conexion = mysqli_connect($servidor, $nombreusuario, $password, $db);

    if($conexion->connect_error){
        die("Conexión fallida");
    }

$sql = "SELECT * FROM `facturacakeart`;";
$query="INSERT INTO `facturacakeart` (`FechaIng`, `Horaped`, `Nombre`, `Producto`, `Precio`, `Direccion`, `Telefono`, `Celular`, `Cantidad`, `Total`, `Descuento`, `Neto a pagar`) VALUES ('$FechaIng', '$Horaped', '$Nombre', '$Producto', '$Precio', '$Direccion', '$Telefono', '$Celular', '$Cantidad', '$Total', '$Descuento', '$Netoapagar')"

?>