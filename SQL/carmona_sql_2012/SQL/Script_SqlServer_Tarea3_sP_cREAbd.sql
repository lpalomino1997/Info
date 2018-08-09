create table Maquinas (
clave int identity (1,1) not null primary key  ,
marca varchar (11) not null  
default ('DELL') 
check (marca in ('DELL','COMPAQ', 'HP','ACER','PC_ENLINEA','LENOVO')),
usuario varchar(50) ,
depto_adscrito varchar(50),
fecha_compra datetime check (fecha_compra <= getDate()),
precio_compra money check (precio_compra >=100.0),
fecha_ultima_revision datetime check (fecha_ultima_revision <= getDate())

);


create table Supervisor(
Supervisor_id int Identity (2,1) primary key not null,
nombre_supervisor varchar (25),
titulo varchar (10) default ('ING') CHECK (titulo in ('MTRO','DR')),
especialidad varchar (30) default ('MANTENIMIENTO DE PC´S') 

);

create table taller (
numero  INT identity (1,1) not null primary key,
Encargado varchar(50) not null unique,
numero_trabajadores integer check (numero_trabajadores >=1 and numero_trabajadores <=21),
presupuesto money  check (presupuesto>= 12000.00)
);

create table revisiones(
clave_maquina integer not null ,
clave_taller integer not null,
fecha_entrada datetime ,
empleado varchar(50),
causa varchar(60),
supervisor int,
precio money check(precio >100.00)  ,
num_reporte integer identity (1,1),

tipo char (10) check( tipo in ('preventivo','correctivo')) ,

primary key (clave_maquina,clave_taller,fecha_entrada) ,

   foreign key (clave_maquina) references  Maquinas (clave)
       on delete cascade
       on update cascade,
foreign key (supervisor) references Supervisor (Supervisor_id),

   foreign key (clave_taller) references  taller (numero)
       on delete cascade
       on update cascade


);


CREATE TABLE REPORTES (
maqu INT  primary key,
total int,

  foreign key (maqu) references MAQUINAS (clave)
	on delete cascade
	on update cascade
	
);