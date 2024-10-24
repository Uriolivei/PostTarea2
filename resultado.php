<?php
           if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Captura y sanitiza los datos del formulario
            $ciudad = htmlspecialchars($_POST['ciudad']);
            $name = htmlentities($_POST['name']);
            $civil = htmlentities($_POST['civil']);

            echo "<h2>Datos enviados</h2>";

            if (isset($_POST['musica']) && is_array($_POST['musica'])) {
                echo "Música favorita: ";
                // Iterar sobre los géneros seleccionados
                foreach ($_POST['musica'] as $value) {
                    echo htmlspecialchars($value). ", "; 
                }
            } else {
                echo "<p>No has seleccionado ningún género de música.</p>";
            }
             echo "<br><br>";

                switch ($ciudad) {
                    case 'lima':
                        echo " Su ciudad natal es Lima<br>";
                        break;
                    case 'pucallpa':
                        echo " Su ciudad natal es Pucallpa<br>";
                        break;
                    case 'arequipa':
                        echo " Su ciudad natal es Arequipa<br>";
                        break;
                    case 'iquitos':
                        echo " Su ciudad natal es Iquitos<br>";
                        break;
                    case 'cuzco':
                        echo " Su ciudad natal es Cuzco<br>";
                        break;
            
                    default:
                        echo " Opción no válida<br>";
                        break;
                }
                echo "<p>Nombre: $name</p>";

                switch ($civil) {
                    case 'soltero':
                        echo " Su estado civil es Soltero<br>";
                        break;
                    case 'casado':
                        echo " Su estado civil es Casado";
                        break;
            
                    default:
                        echo " Opción no válida<br>";
                        break;
                }
                
            }
            echo "<script>
            Swal.fire({
            title: '¡Éxito!'
            text: 'Formulario enviado correctamente',
            icon: 'success'
        });
        </script>";
?>