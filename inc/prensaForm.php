<div id="content">
            <form id="prensaForm" action="prensa.php" method="post">
                <fieldset>
                    <legend><?php echo $message;?></legend>
                    
                    <label for="Nombre">Nombre: </label>
                    <input type="text" name="Nombre" id="Nombre">
                    
                    <label for="Apellido">Apellido(s): </label>
                    <input type="text" name="Apellido" id="Apellido">
                    
                    <label for="Medio">Nombre del medio: </label>
                    <input type="text" name="Medio" id="Medio">
                    
                    <label for="Cargo">Cargo: </label>
                    <input type="text" name="Cargo" id="Cargo">
                    
                    <label for="telefono">Teléfono Móvil: </label>
                    <input type="tel" name="Telefono" id="Telefono">
                    
                    <label for="email">Email: </label>
                    <input type="email" name="Email" id="Email">
                    
                    <div id="secret">
		              <input type="text" name="direccion" id="direccion">
		            </div>
                    <input type="submit" value="Enviar" value="send">
                </fieldset>
            </form>
        </div>