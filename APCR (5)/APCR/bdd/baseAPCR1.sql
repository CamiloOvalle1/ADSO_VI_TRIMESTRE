drop database baseAPCR;
create database baseAPCR;
USE baseAPCR;


-- -----------------------------------------------------
-- Table `administrador`
-- -----------------------------------------------------
CREATE TABLE administrador (id_admin varchar(45) NOT NULL, nombres_admin VARCHAR(45) NOT NULL, clave VARCHAR(45) NOT NULL,
  PRIMARY KEY (id_admin));

-- -----------------------------------------------------
-- Table `BaseAPCR`.`residente` - registro
-- -----------------------------------------------------
CREATE TABLE residente (identificacion varchar(45) NOT NULL, nombres_usuario VARCHAR(45) NOT NULL,
  correo VARCHAR(45) NOT NULL, torre VARCHAR(45) NOT NULL, apartamento varchar(45) NOT NULL, celular varchar(45) NOT NULL, 
  clave VARCHAR(45) NOT NULL,
  PRIMARY KEY (identificacion));
select * from residente;
  
-- -----------------------------------------------------
-- Table `BaseAPCR`.`pago_admin`
-- -----------------------------------------------------
CREATE TABLE pago_admin (num_factura varchar(45) NOT NULL, identificacion varchar(45) NOT NULL, forma_de_pago VARCHAR(45) NOT NULL,
fecha DATE NOT NULL, valor_pago varchar(45) NOT NULL,
PRIMARY KEY (num_factura));
alter table pago_admin add foreign key(identificacion) references residente(identificacion);

-- -----------------------------------------------------
-- Table `BaseAPCR`.`certificado_pagos`
-- -----------------------------------------------------
CREATE TABLE certificado_pagos(fecha_pago DATE NOT NULL, identificacion varchar(45) NOT NULL, fecha_expedicion DATE NOT NULL, 
valor_pago varchar(45)NOT NULL,
PRIMARY KEY (fecha_pago));

alter table certificado_pagos add foreign key(identificacion) references residente(identificacion);

-- -----------------------------------------------------
-- Table `BaseAPCR`.`admin_porteria`
-- -----------------------------------------------------
CREATE TABLE admin_porteria(id_admin_porteria varchar(45) NOT NULL, id_admin varchar(45) NOT NULL, nombres_porteria VARCHAR(45) NOT NULL,
  identificacion varchar(45) NOT NULL, clave VARCHAR(45) NOT NULL,
  PRIMARY KEY (id_admin_porteria));
  alter table admin_porteria add foreign key(id_admin) references administrador(id_admin);

-- -----------------------------------------------------
-- Table `BaseAPCR`.`mensajeria`
-- -----------------------------------------------------
CREATE TABLE mensajeria (tipo_mensaje varchar(45) NOT NULL, identificacion varchar(45) NOT NULL, id_admin_porteria varchar(45) NOT NULL,
id_admin varchar(45) NOT NULL, confirmacion_recibido varchar(45) NOT NULL, recibo_pago_admin VARCHAR(45) NOT NULL,
PRIMARY KEY (tipo_mensaje));
alter table mensajeria add foreign key(identificacion) references residente(identificacion);
alter table mensajeria add foreign key(id_admin_porteria) references admin_porteria(id_admin_porteria);
alter table mensajeria add foreign key(id_admin) references administrador(id_admin);

-- -----------------------------------------------------
-- Table `BaseAPCR`.`mensajes`
-- -----------------------------------------------------
CREATE TABLE mensajes (tipo_mensaje varchar(45) NOT NULL, mensaje_masivo VARCHAR(45) NULL, mensaje_administrativo VARCHAR(45) NULL,
  recibos_pago VARCHAR(45) NULL, otros_paquetes VARCHAR(45) NULL);
  alter table mensajes add foreign key(tipo_mensaje) references mensajeria(tipo_mensaje);
  
-- -----------------------------------------------------
-- Table `BaseAPCR`.`prestamo_zona_comun`
-- -----------------------------------------------------
CREATE TABLE prestamo_zona_comun (id_prestamo varchar(45) not NULL, id_zona_comun varchar(45) NOT NULL, nombre_zona_zomun VARCHAR(45) NOT NULL,
  id_admin varchar(45) NOT NULL, identificacion varchar(45) not NULL, id_admin_porteria varchar(45) NOT NULL, fecha_uso DATE NOT NULL,
  hora_uso VARCHAR(45) NOT NULL, fecha_solicitud DATE NOT NULL, prestamo_zona_comuncol VARCHAR(45) NOT NULL,
  PRIMARY KEY (id_prestamo));
  
  alter table prestamo_zona_comun add foreign key(id_admin) references administrador(id_admin);
  alter table prestamo_zona_comun add foreign key(identificacion) references residente(identificacion);
  alter table prestamo_zona_comun add foreign key(id_admin_porteria) references admin_porteria(id_admin_porteria);
  

-- -----------------------------------------------------
-- Table `BaseAPCR`.`estado`
-- -----------------------------------------------------
CREATE TABLE estado (id_zona_comun varchar(45) NOT NULL, nombre_zona_comun VARCHAR(45) NOT NULL, id_prestamo varchar(45) not NULL,
  estado_solicitud VARCHAR(45) NOT NULL);
  alter table estado add foreign key(id_prestamo) references prestamo_zona_comun(id_prestamo);
  

-- -----------------------------------------------------
-- Table `BaseAPCR`.`parqueadero`
-- -----------------------------------------------------
CREATE TABLE parqueadero (id_ubicacion varchar(45) NOT NULL, id_admin varchar(45) NOT NULL, identificacion varchar(45) NOT NULL,
  tipo_vehiculo VARCHAR(45) NOT NULL,
  PRIMARY KEY (id_ubicacion));
  
  alter table parqueadero add foreign key(id_admin) references administrador(id_admin);
  alter table parqueadero add foreign key(identificacion) references residente(identificacion);
  
  select * from parqueadero;
 

-- -----------------------------------------------------
-- Table `BaseAPCR`.`comunal`
-- -----------------------------------------------------
CREATE TABLE comunal (id_ubicacion varchar(45) NOT NULL, fecha_inicio varchar(45) NOT NULL, fecha_fin DATE NOT NULL, estado varchar(45));
alter table comunal add foreign key(id_ubicacion) references parqueadero(id_ubicacion);
select * from comunal;

-- -----------------------------------------------------
-- Table `BaseAPCR`.`visitantes`
-- -----------------------------------------------------
CREATE TABLE visitantes (id_ubicacion varchar(45) NOT NULL, fecha_solicitud DATE NOT NULL, fecha_uso DATE NOT NULL, hora_uso VARCHAR(45) NOT NULL,
hora_entrega VARCHAR(45) NOT NULL, estado varchar(45));
alter table visitantes add foreign key(id_ubicacion) references parqueadero(id_ubicacion);
select * from visitantes;

  

