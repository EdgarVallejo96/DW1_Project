/*     Esto se mete en el área de tablas volcadas en proyecto_db para resetear la db.     */

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `asesores`
--
ALTER TABLE `asesores`
  MODIFY `id_asesor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT =1001;;
--
-- AUTO_INCREMENT de la tabla `asignacion_catedratico`
--
ALTER TABLE `asignacion_catedratico`
  MODIFY `id_asignacion_catedratico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1001;;
--
-- AUTO_INCREMENT de la tabla `catedraticos`
--
ALTER TABLE `catedraticos`
  MODIFY `id_catedratico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1001;
--
-- AUTO_INCREMENT de la tabla `catedratico_postulado`
--
ALTER TABLE `catedratico_postulado`
  MODIFY `id_postulante` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1001;
--
-- AUTO_INCREMENT de la tabla `empleado_laborando`
--
ALTER TABLE `empleado_laborando`
  MODIFY `id_empleado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1001;
  
ALTER TABLE `DIRECCIONES`
  MODIFY `id_address` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1001;