        <form action="contacto.php" method="post">
                <fieldset>
                    <legend><?php echo $message;?></legend>
                    <label for="Nombre">Nombre: </label>
                    <input type="text" name="Nombre" id="Nombre">
                    <label for="email">Email: </label>
                    <input type="email" name="Email" id="Email">
                    <label for="Asunto">Asunto: </label>
                    <input type="text" name="Asunto" id="Asunto">
                    <label for="Mensaje">¿Qué nos quieres contar?</label>
                    <textarea name="Mensaje" rows="10" cols="100" id="Mensaje"></textarea>
                    <div id="secret">
		              <input type="text" name="direccion" id="direccion">
		            </div>
                    <input type="submit" value="Enviar" value="send">
                </fieldset>
            </form>