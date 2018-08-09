
insert into maquinas (marca,usuario,depto_adscrito,fecha_compra,precio_compra)
values ('DELL','Alonso Crus Venajamin','DIR. DE OPERACIONES','2/27/1994', 10000.00);

insert into maquinas (marca,usuario,depto_adscrito,fecha_compra,precio_compra)
values ('LENOVO','Carlo Madarin Gayos','DIR. DE OPERACIONES','2/27/1996', 1000.00);



/*INSERT PARA SUPERVISORES*/

insert into Supervisor (nombre_supervisor,titulo,especialidad)
		values ('Armando Casillas Román','DR','ARQUITECTURA DE SERVIDORES');

insert into Supervisor (nombre_supervisor,titulo,especialidad)
		values ('Tomás Cerda Lopez','MTRO','CIENCIAS DE LA COMPUTACION');

insert into Supervisor (nombre_supervisor,titulo,especialidad)
		values ('Andres Tomas Castillo','MTRO','SISTEMAS DE INFORMACION');

/*INSERTS   PARA TALLERES!!*/

insert into TALLER (Encargado,numero_trabajadores,presupuesto)
  values ('TEC. Solano Lopes Carlos',10,100000.00);

insert into TALLER (Encargado,numero_trabajadores,presupuesto)
  values ('TEC. Castillo Contreras Jose',13,180000.00);

insert into TALLER (Encargado,numero_trabajadores,presupuesto)
  values ('TEC. Castillo Bartolo Juan',13,100000.00);

insert into TALLER (Encargado,numero_trabajadores,presupuesto)
  values ('TEC. Castillo Rivera Anonimo',12,150000.00);

insert into TALLER (Encargado,numero_trabajadores,presupuesto)
  values ('ING. Viberos Samtiaho Jose jorge',20,100000000);



/* INSERTS  PARA REVISIOES!!

ojo si no insertta realizar de nuevo, por que puede que el getDate este retornando
la misma hora y exista una llave duplicada
*/  


insert into Revisiones (clave_maquina, clave_taller,fecha_entrada,empleado,causa,SUPERVISOR,PRECIO,tipo)
values (1,2,getdate(),'Casimiro laroa','Fallas De paginacion',2,1000.00,'preventivo');

insert into Revisiones (clave_maquina, clave_taller,fecha_entrada,empleado,causa,SUPERVISOR,PRECIO,tipo)
values (1,2,getdate(),'Casimiro laroa','overclocking Calienta Porcesador',2,1400.00,'preventivo');

insert into Revisiones (clave_maquina, clave_taller,fecha_entrada,empleado,causa,SUPERVISOR,PRECIO,tipo)
values (2,1,getdate(),'larosa X','overclocking Calienta Porcesador',2,1300.00,'preventivo');

insert into Revisiones (clave_maquina, clave_taller,fecha_entrada,empleado,causa,SUPERVISOR,PRECIO,tipo)
values (2,1,getDate(),'larosa X','Fallas paginacion',3,1200.00,'preventivo');

insert into reportes (maqu,total)
values (1,10);
insert into reportes (maqu,total)
values (2,15);

