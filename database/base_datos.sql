create database proyecto_estadia;
  use proyecto_estadia;
  create table usuarios(
    usuario varchar(30) not null primary key,
    nombre varchar(30) not null,
    apellido_p varchar(30) not null,
    apellido_m varchar(30) not null,
    correo varchar(60) not null,
    tipo_usuario varchar(30) not null,
    status varchar(30) not null default 'Activo',
    password varchar(255) not null
  );

  create table materia(
    id_materia int not null primary key auto_increment,
    usuario varchar(30) not null,
    nombre_materia varchar(50) not null,
    periodo varchar(30) not null,
    carrera varchar(100) not null,
    grupo varchar(40) not null,
    FOREIGN KEY (usuario) REFERENCES usuarios (usuario)
  );
  create table planeacion(
    id_planeacion int not null primary key auto_increment,
    id_materia int not null,
    usuario varchar(30) not null,
    materia varchar(50) not null,
    numero_unidad varchar(2) not null,
    nombre_unidad varchar(255) not null,
    horas_practicas int(2) not null,
    horas_teoricas int(2) not null,
    fecha_inic_planec varchar(10) not null,
    fecha_ter_planec varchar(10) not null,
    fecha_inic_ejec varchar(10) not null,
    fecha_ter_ejec varchar(10) not null,
    actividades_doc varchar(255) not null,
    actividades_estd varchar(255) not null,
    inst_evaluac varchar(100) not null,
    evidencia varchar(100) not null,
    ponderacion varchar(4) not null,
    observaciones varchar(255) not null,
    estado varchar(30) not null default 'incompleta',
    FOREIGN KEY (usuario) REFERENCES usuarios (usuario),
    FOREIGN KEY (id_materia) REFERENCES materia (id_materia)
    );

    create table horario(
      id_horario int not null primary key auto_increment,
      usuario varchar(30) not null,
      grupo varchar(30) not null,
      materia varchar(50) not null,
      lunes_inicio varchar(10),
      lunes_termino varchar(10),
      lugar_lunes varchar(50),
      martes_inicio varchar(10),
      martes_termino varchar(10),
      lugar_martes varchar(50),
      miercoles_inicio varchar(10),
      miercoles_termino varchar(10),
      lugar_miercoles varchar(50),
      jueves_inicio varchar(10),
      jueves_termino varchar(10),
      lugar_jueves varchar(50),
      viernes_inicio varchar(10),
      viernes_termino varchar(10),
      lugar_viernes varchar(50),
      sabado_inicio varchar(10),
      sabado_termino varchar(10),
      lugar_sabado varchar(50),
      FOREIGN KEY (usuario) REFERENCES usuarios (usuario)
    );

    create table clases(
      id_clase int not null primary key auto_increment,
      usuario varchar(30) not null,
      edificio varchar(20) not null,
      aula varchar(20) not null,
      hora_inicio varchar(10) not null,
      hora_fin varchar(10),
      fecha varchar(10) not null,
      FOREIGN KEY (usuario) REFERENCES usuarios (usuario)
    );
