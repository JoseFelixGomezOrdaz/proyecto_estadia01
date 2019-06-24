create database proyecto_estadia;
  use proyecto_estadia;
  create table usuarios(
    usuario varchar(30) not null primary key,
    nombre varchar(30) not null,
    apellido_p varchar(30) not null,
    apellido_m varchar(30) not null,
    telefono varchar(10) not null,
    correo varchar(60) not null,
    tipo_usuario varchar(30) not null,
    password varchar(255) not null
  );


  create table planeacion(
    id_planeacion int not null primary key auto_increment,
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
    FOREIGN KEY (usuario) REFERENCES usuarios (usuario)
    );

    create table horario(
      id_horario int not null primary key auto_increment,
      usuario varchar(30) not null,
      grupo varchar(30) not null,
      materia varchar(50) not null,
      lunes_inicio varchar(10),
      lunes_termino varchar(10),
      martes_inicio varchar(10),
      martes_termino varchar(10),
      miercoles_inicio varchar(10),
      miercoles_termino varchar(10),
      jueves_inicio varchar(10),
      jueves_termino varchar(10),
      viernes_inicio varchar(10),
      viernes_termino varchar(10),
      sabado_inicio varchar(10),
      sabado_termino varchar(10),
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
