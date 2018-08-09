/*  esta es la que ioncrementa las revisiones*/
create procedure MaquinariaConrevision1
@Nuevamarca varchar(10),@NuevoUsuario varchar(50) ,@NuevoDepto varchar (50),--maquinaria
@Nencargado varchar(50),@NuevoCosto Money, @nuevaFecha datetime,  --Repearacion
@NuevaCausa varchar(60) ,@Mamnto char (10)
as

declare @count as smallInt
declare @Mid as SMALLINT
declare @Tid as smallint
declare @reg as int
declare @band as int

select @count = count (*)
   from dbo.MAQUINAs
	WHERE marca=@Nuevamarca and usuario=@NuevoUsuario and depto_adscrito=@NuevoDepto 
      	if @count >0
	begin 
		print 'Esta maquina ya está dada de alta'
	set @band =1
	--return
        end

begin transaction /*  inicia la transaccion??*/
  
	if @count<=0
	begin
	insert into dbo.MAQUINAs(marca,usuario,depto_adscrito,fecha_compra)
	values(@NuevaMarca,@NuevoUsuario,@NuevoDepto,getDate());
	PRINT 'SE AÑADIO UN REGISTRO A LA BASE DE DATOS'
	end

select @Mid = clave
   from dbo.MAquinas
	where marca=@NuevaMarca and usuario=@NuevoUsuario and depto_adscrito=@NuevoDepto

    if @Mid is null
	begin
	print 'clabe de Maquinaria no valida'
	rollback
	return
	end
/*seleccionar la llave del taller encargado de la reparacion*/

select @Tid =numero
   from dbo.TALLER
	where Encargado =@Nencargado

   if @Tid is null
	begin
	print 'clabe de TALLER no valida'
	rollback
	return
	end

/*seleccionar las de revisiones*/
	
/*   select @RFi = fecha_entrada
   from dbo.REVISIONES
	where clave_maquina=@Mid and clave_taller=@Tid*/


select @reg = total
	from dbo.Reportes
	where maqu=@Mid
	set @reg= @reg+1

   

	

if @band =1
	begin
	insert into revisiones (clave_maquina,clave_taller,fecha_entrada,causa,supervisor,precio,tipo)
		values (@Mid,@Tid,getDate(),@NuevaCausa,02,@NuevoCosto,@Mamnto)

	update dbo. REPORTES
	set TOTAL=@reg
	where @Mid =maqu
	print 'modificando Registro!!'
	end
else
	begin
	 insert into revisiones (clave_maquina,clave_taller,fecha_entrada,causa,supervisor,precio,tipo)
		values (@Mid,@Tid,getDate(),@NuevaCausa,02,@NuevoCosto,@Mamnto)
	
   insert into reportes (maqu,total)values (@Mid,1)	
	end
	
commit
go
