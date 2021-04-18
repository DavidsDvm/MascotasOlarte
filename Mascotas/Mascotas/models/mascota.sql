create database Mascotas;
use Mascotas;

create table Usuario
(
idUsuario varchar (12) primary key AUTO_INCREMENT,
nombreUsuario varchar (50),
apellidoUsuario varchar (50),
correoUsuario varchar (50),
telefonoUsuario numeric (20),
direccionUsuario varchar (50),
passwordUsuario varchar (20),
rolUsuario varchar (20),
estadoUsuario bit
);

create table Medico
(
idMedico varchar (12) primary key,
nombreMedico varchar (50),
apellidoMedico varchar (50),
telefonoMedico numeric (20),
correoMedico varchar (100),
tarjetaProfesional varchar (50),
especialidadMedico varchar (50),
estadoMedico bit,
idUsuarioFK varchar (12),
foreign key	(idUsuarioFK) references Usuario (idUsuario)
);

create table Paciente
(
idPaciente varchar(12) primary key not null,
nombrePaciente varchar(50) not null,
apellidoPaciente varchar(50) not null,
correoPaciente varchar(100) not null,
telefonoPaciente varchar(20) not null,
direccionPaciente varchar(100) not null,
fechaNacimiento date not null,
estadoPaciente bit not null,
idUsuarioFK varchar(12),
foreign key (idUsuarioFK) references Usuario (idUsuario)
);

create table Agenda
(
idAgenda varchar(4) primary key not null,
fechaAgenda date not null,
horaAgenda time,
Consultorio varchar(2),
estadoAgenda bit,
idPacienteFK varchar(12),
idMedicoFK varchar(12),
foreign key (idPacienteFK) references Paciente (idPaciente),
foreign key (idMedicoFK) references Medico (idMedico)
);

create table Historia_Clinica
(
idHistoria varchar(6) primary key not null,
estatura double,
peso double,
antecedentesFamiliares text,
alergias text,
enfermedadesPadecidas text,
idPacienteFK varchar(12),
foreign key (idPacienteFK) references Paciente (idPaciente)
);

create table Examen
(
idExamen varchar (20) primary key,
Valor numeric,
fechaExamen date,
tipoExamen varchar(50),
idHistoriaFK varchar(6),
foreign key (idHistoriaFK) references Historia_Clinica (idHistoria)
);

create table Consulta_Medica
(
idConsulta varchar(20) primary key not null,
horaAtencion time,
motivoConsulta text,
enfermedad text,
idHistoriaFK varchar(6),
foreign key (idHistoriaFK) references Historia_Clinica (idHistoria)
);

create table Diagnostico
(
idDiagnostico varchar (20)  primary key,
Describcion text,
idConsultafk varchar(20),
foreign key (idConsultafk) references Consulta_Medica (idConsulta)
);

-- datos de usuario --
insert into Usuario(idUsuario, nombreUsuario, apellidoUsuario, correoUsuario, telefonoUsuario, direccionUsuario, passwordUsuario, rolUsuario, estadoUsuario) values ('1', 'Carlos', 'Domingo', 'CarlosDomingo@gmail.com', '3216745658', 'cll 64 a #54-65', 'carlosdomingo321', 'usuario', true);
insert into Usuario(idUsuario, nombreUsuario, apellidoUsuario, correoUsuario, telefonoUsuario, direccionUsuario, passwordUsuario, rolUsuario, estadoUsuario) values ('2', 'Camilo', 'Gracia', 'CamilitoGra@gmail.com', '3216564567', 'cr 22 a #54-12 sur', 'iGiANtRaTElT', 'usuario', true);
insert into Usuario(idUsuario, nombreUsuario, apellidoUsuario, correoUsuario, telefonoUsuario, direccionUsuario, passwordUsuario, rolUsuario, estadoUsuario) values ('3', 'Alberto', 'Martinez', 'Alber3Mart@gmail.com', '32167455767', 'diag 23 a #21-65 sur', 'entiousister', 'usuario', true);
insert into Usuario(idUsuario, nombreUsuario, apellidoUsuario, correoUsuario, telefonoUsuario, direccionUsuario, passwordUsuario, rolUsuario, estadoUsuario) values ('4', 'Rodrigo', 'Lopez', 'RodigroLopez33@gmail.com', '32167456545', 'cll 78 a #54-32 ', 'noatehoctown', 'usuario', true);
insert into Usuario(idUsuario, nombreUsuario, apellidoUsuario, correoUsuario, telefonoUsuario, direccionUsuario, passwordUsuario, rolUsuario, estadoUsuario) values ('5', 'Antonio', 'Sanchez', 'mrsanchez43@gmail.com', '3216745687', 'cll 21 a #23-65 sur', 'stryacamuseq', 'usuario', true);
insert into Usuario(idUsuario, nombreUsuario, apellidoUsuario, correoUsuario, telefonoUsuario, direccionUsuario, passwordUsuario, rolUsuario, estadoUsuario) values ('6', 'Jose', 'Gonzalez', 'gonzagonza33@gmail.com', '3146745678', 'cr 3 a #54-1 sur', 'rantinkainuc', 'usuario', true);
insert into Usuario(idUsuario, nombreUsuario, apellidoUsuario, correoUsuario, telefonoUsuario, direccionUsuario, passwordUsuario, rolUsuario, estadoUsuario) values ('7', 'Francisco', 'Gomez', 'francisco666@gmail.com', '3116745678', 'cll 55 a #54-65 norte', 'icienyancert', 'usuario', false);
insert into Usuario(idUsuario, nombreUsuario, apellidoUsuario, correoUsuario, telefonoUsuario, direccionUsuario, passwordUsuario, rolUsuario, estadoUsuario) values ('8', 'Juan', 'Fernandez', 'juanFernandez44@gmail.com', '3206745678', 'cll 7 a #56-1 sur', 'arquinewncer', 'usuario', true);
insert into Usuario(idUsuario, nombreUsuario, apellidoUsuario, correoUsuario, telefonoUsuario, direccionUsuario, passwordUsuario, rolUsuario, estadoUsuario) values ('9', 'Manuel', 'Moreno', 'Manutomoreno@hotmail.com', '3226745678', 'cr 7 a #54-65 ', 'anceanapardw', 'usuario', true);
insert into Usuario(idUsuario, nombreUsuario, apellidoUsuario, correoUsuario, telefonoUsuario, direccionUsuario, passwordUsuario, rolUsuario, estadoUsuario) values ('10', 'Pedro', 'Jimenez', 'pedrojimenez55@yahoo.es', '3106745678', 'cll 12 a #23-32 sur', 'sivandeldere', 'usuario', true);
insert into Usuario(idUsuario, nombreUsuario, apellidoUsuario, correoUsuario, telefonoUsuario, direccionUsuario, passwordUsuario, rolUsuario, estadoUsuario) values ('11', 'Jesus', 'Perez', 'jesusitoperez2@gmail.com', '3116755678', 'cll 44 a #54-65 norte', 'critophylven', 'usuario', true);
insert into Usuario(idUsuario, nombreUsuario, apellidoUsuario, correoUsuario, telefonoUsuario, direccionUsuario, passwordUsuario, rolUsuario, estadoUsuario) values ('12', 'Angel', 'Rodriguez', 'mrangel4@gmail.com', '3216744678', 'diag 55 a #43-12 sur', 'enalestaincl', 'usuario', true);
insert into Usuario(idUsuario, nombreUsuario, apellidoUsuario, correoUsuario, telefonoUsuario, direccionUsuario, passwordUsuario, rolUsuario, estadoUsuario) values ('13', 'Miguel', 'Navarro', 'miguelitonavas44@gmail.com', '3116755678', 'cll 44 a #6-65 ', 'sigationdula', 'usuario', true);
insert into Usuario(idUsuario, nombreUsuario, apellidoUsuario, correoUsuario, telefonoUsuario, direccionUsuario, passwordUsuario, rolUsuario, estadoUsuario) values ('14', 'Javier', 'Ruiz', 'donjavier55@gmail.com', '3104866462', 'cll 77 a #54-13 sur', 'nturaxiconsm', 'usuario', true);
insert into Usuario(idUsuario, nombreUsuario, apellidoUsuario, correoUsuario, telefonoUsuario, direccionUsuario, passwordUsuario, rolUsuario, estadoUsuario) values ('15', 'Jose Antonio', 'Diaz', 'joseantonito4@gmail.com', '3116746678', 'cr 88 a #12-54 norte', 'eradavegroun', 'usuario', true);
insert into Usuario(idUsuario, nombreUsuario, apellidoUsuario, correoUsuario, telefonoUsuario, direccionUsuario, passwordUsuario, rolUsuario, estadoUsuario) values ('16', 'David', 'Serrano', 'david.serrano@hotmail.com', '3216445778', 'cll 31 a #54-32 sur', 'aletimplayap', 'usuario', true);
insert into Usuario(idUsuario, nombreUsuario, apellidoUsuario, correoUsuario, telefonoUsuario, direccionUsuario, passwordUsuario, rolUsuario, estadoUsuario) values ('17', 'Carlos', 'Hernandez', 'Carloshernandez5@gmail.com', '3206757678', 'cll 23 a #56-2 sur', 'reutiverdlia', 'usuario', false);
insert into Usuario(idUsuario, nombreUsuario, apellidoUsuario, correoUsuario, telefonoUsuario, direccionUsuario, passwordUsuario, rolUsuario, estadoUsuario) values ('18', 'Jose Luis', 'MUÑOZ', 'joseluisito544@gmail.com', '3216545278', 'diag 53 a #54-56 sur', 'hiperteaphon', 'usuario', true);
insert into Usuario(idUsuario, nombreUsuario, apellidoUsuario, correoUsuario, telefonoUsuario, direccionUsuario, passwordUsuario, rolUsuario, estadoUsuario) values ('19', 'Alejandro', 'Saez', 'migaticasaez@gmail.com', '3216847678', 'cll 64 a #2-87 sur', 'astervoliclo', 'usuario', true);
insert into Usuario(idUsuario, nombreUsuario, apellidoUsuario, correoUsuario, telefonoUsuario, direccionUsuario, passwordUsuario, rolUsuario, estadoUsuario) values ('20', 'Miguel Angel', 'Romero', 'romerito@outlook.com', '3216245278', 'cll 15 a #65-98 ', 'esiecadjandu', 'usuario', true);
insert into Usuario(idUsuario, nombreUsuario, apellidoUsuario, correoUsuario, telefonoUsuario, direccionUsuario, passwordUsuario, rolUsuario, estadoUsuario) values ('21', 'Javier', 'Rubio', 'rubidiojavier2@gmail.com', '3216145671', 'cr 64 a #45-54 ', 'logrecticker', 'usuario', true);
insert into Usuario(idUsuario, nombreUsuario, apellidoUsuario, correoUsuario, telefonoUsuario, direccionUsuario, passwordUsuario, rolUsuario, estadoUsuario) values ('22', 'Rafael', 'Alfaro', 'rafaelalfato@yahoo.es', '3216741171', 'cll 45 a #32-1 norte', 'arshurexpach', 'usuario', true);
insert into Usuario(idUsuario, nombreUsuario, apellidoUsuario, correoUsuario, telefonoUsuario, direccionUsuario, passwordUsuario, rolUsuario, estadoUsuario) values ('23', 'Daniel', 'Molina', 'danielmolin6@gmail.com', '3216554567', 'cll 34 a #54-23 sur', 'ipluragathat', 'usuario', true);
insert into Usuario(idUsuario, nombreUsuario, apellidoUsuario, correoUsuario, telefonoUsuario, direccionUsuario, passwordUsuario, rolUsuario, estadoUsuario) values ('24', 'Jose', 'Lazano', 'joselazano8@gmail.com', '3216745673', 'diag 23 a #21-25 ', 'aterogetyptu', 'usuario', true);
insert into Usuario(idUsuario, nombreUsuario, apellidoUsuario, correoUsuario, telefonoUsuario, direccionUsuario, passwordUsuario, rolUsuario, estadoUsuario) values ('25', 'Pablo', 'Castillo', 'pablocastillo@cloudmail.com', '3216754678', 'cll 21 a #65-65 sur', 'oriscountion', 'usuario', true);

-- datos de medicos --

insert into Medico(idMedico, nombreMedico, apellidoMedico, telefonoMedico, correoMedico, tarjetaProfesional, especialidadMedico, estadoMedico) values ('1', 'Arturo', 'Quevedo', '3117607876', 'arturi2quevedo@gmail.com', '777831', 'veterinaria', true);
insert into Medico(idMedico, nombreMedico, apellidoMedico, telefonoMedico, correoMedico, tarjetaProfesional, especialidadMedico, estadoMedico) values ('2', 'Luis', 'Picazo', '3153208876', 'aherir@99927xl.com', '300498', 'veterinaria', false);
insert into Medico(idMedico, nombreMedico, apellidoMedico, telefonoMedico, correoMedico, tarjetaProfesional, especialidadMedico, estadoMedico) values ('3', 'Pablo', 'Ortega', '3143297876', 'pablitocalvito2@yopmail.com', '6810', 'veterinaria', true);
insert into Medico(idMedico, nombreMedico, apellidoMedico, telefonoMedico, correoMedico, tarjetaProfesional, especialidadMedico, estadoMedico) values ('4', 'Juan Antonio', 'Morcillo', '3123407876', 'juanitoanto@gmail.com', '264213', 'veterinaria', true);
insert into Medico(idMedico, nombreMedico, apellidoMedico, telefonoMedico, correoMedico, tarjetaProfesional, especialidadMedico, estadoMedico) values ('5', 'Joaquin', 'Cano', '3103207866', 'joaquinca24@hotmail.com', '352467', 'veterinaria', true);
insert into Medico(idMedico, nombreMedico, apellidoMedico, telefonoMedico, correoMedico, tarjetaProfesional, especialidadMedico, estadoMedico) values ('6', 'Sergio', 'Cuenca', '3213207876', 'segiocuenc4@gmail.com', '232180', 'veterinaria', false);
insert into Medico(idMedico, nombreMedico, apellidoMedico, telefonoMedico, correoMedico, tarjetaProfesional, especialidadMedico, estadoMedico) values ('7', 'Fernando', 'Garrido', '3225207876', 'fernandogarrid0@outlook.com', '539998', 'veterinaria', true);
insert into Medico(idMedico, nombreMedico, apellidoMedico, telefonoMedico, correoMedico, tarjetaProfesional, especialidadMedico, estadoMedico) values ('8', 'Juan carlos', 'Torres', '3233277876', 'juancarloz3@gmail.com', '224984', 'veterinaria', false);
insert into Medico(idMedico, nombreMedico, apellidoMedico, telefonoMedico, correoMedico, tarjetaProfesional, especialidadMedico, estadoMedico) values ('9', 'Andres', 'Corcoles', '3243207576', 'andrescorco6@yahoo.com', '157693', 'veterinaria', true);
insert into Medico(idMedico, nombreMedico, apellidoMedico, telefonoMedico, correoMedico, tarjetaProfesional, especialidadMedico, estadoMedico) values ('10', 'Jose Manuel', 'Gil', '3253203876', 'josegil55@gmail.com', '497399', 'veterinaria', false);
insert into Medico(idMedico, nombreMedico, apellidoMedico, telefonoMedico, correoMedico, tarjetaProfesional, especialidadMedico, estadoMedico) values ('11', 'Jose Maria', 'Ortiz', '3213507876', 'juanjosemaria5@gmail.com', '970529', 'veterinaria', true);
insert into Medico(idMedico, nombreMedico, apellidoMedico, telefonoMedico, correoMedico, tarjetaProfesional, especialidadMedico, estadoMedico) values ('12', 'Ramon', 'Calero', '3143209876', 'ramonescale5@yahoo.es', '760634', 'veterinaria', true);
insert into Medico(idMedico, nombreMedico, apellidoMedico, telefonoMedico, correoMedico, tarjetaProfesional, especialidadMedico, estadoMedico) values ('13', 'Raul', 'Valero', '3103204876', 'raulitoval3@gmail.com', '580546', 'veterinaria', true);
insert into Medico(idMedico, nombreMedico, apellidoMedico, telefonoMedico, correoMedico, tarjetaProfesional, especialidadMedico, estadoMedico) values ('14', 'Alberto', 'Cebrian', '3120207876', 'albertincebri@gmail.com', '600013', 'veterinaria', true);
insert into Medico(idMedico, nombreMedico, apellidoMedico, telefonoMedico, correoMedico, tarjetaProfesional, especialidadMedico, estadoMedico) values ('15', 'Enrique', 'Rodenas', '3123200876', 'enriquerode4@hotmail.com', '559993', 'veterinaria', false);
insert into Medico(idMedico, nombreMedico, apellidoMedico, telefonoMedico, correoMedico, tarjetaProfesional, especialidadMedico, estadoMedico) values ('16', 'Alvaro', 'Alarcon', '3133207076', 'alvaritoalar0@gmail.com', '310980', 'veterinaria', true);
insert into Medico(idMedico, nombreMedico, apellidoMedico, telefonoMedico, correoMedico, tarjetaProfesional, especialidadMedico, estadoMedico) values ('17', 'Vicente', 'Blazques', '3143407876', 'vicenteblaz3@yahoo.es', '433468', 'veterinaria', true);
insert into Medico(idMedico, nombreMedico, apellidoMedico, telefonoMedico, correoMedico, tarjetaProfesional, especialidadMedico, estadoMedico) values ('18', 'Emilio', 'nunes', '3153207576', 'emilionunesz@gmail.com', '738374', 'veterinaria', false);
insert into Medico(idMedico, nombreMedico, apellidoMedico, telefonoMedico, correoMedico, tarjetaProfesional, especialidadMedico, estadoMedico) values ('19', 'Francisco Jose', 'Pardo', '3143207976', 'franciscojosepardo5@enayu.com', '54771', 'veterinaria', true);
insert into Medico(idMedico, nombreMedico, apellidoMedico, telefonoMedico, correoMedico, tarjetaProfesional, especialidadMedico, estadoMedico) values ('20', 'Diego', 'Moya', '3113207845', 'diegiyomaradona5@gmail.com', '814476', 'veterinaria', true);
insert into Medico(idMedico, nombreMedico, apellidoMedico, telefonoMedico, correoMedico, tarjetaProfesional, especialidadMedico, estadoMedico) values ('21', 'Julian', 'Tebar', '3123206576', 'teamofanilu23@outlook.com', '160202', 'veterinaria', false);
insert into Medico(idMedico, nombreMedico, apellidoMedico, telefonoMedico, correoMedico, tarjetaProfesional, especialidadMedico, estadoMedico) values ('22', 'Jorge', 'Requena', '3103207870', 'jorgeequena4@gmail.com', '436503', 'veterinaria', true);
insert into Medico(idMedico, nombreMedico, apellidoMedico, telefonoMedico, correoMedico, tarjetaProfesional, especialidadMedico, estadoMedico) values ('23', 'Alfonso', 'Arenas', '3203207876', 'alfonsoarenas@openmail.com', '769705', 'veterinaria', false);
insert into Medico(idMedico, nombreMedico, apellidoMedico, telefonoMedico, correoMedico, tarjetaProfesional, especialidadMedico, estadoMedico) values ('24', 'Adrian', 'Ballesteros', '3213507876', 'balleteritos64@gmail.com', '646452', 'veterinaria', false);
insert into Medico(idMedico, nombreMedico, apellidoMedico, telefonoMedico, correoMedico, tarjetaProfesional, especialidadMedico, estadoMedico) values ('25', 'Ruben', 'Collado', '3223207889', 'rubenbladescola@hotmail.com', '431677', 'veterinaria', false);

-- datos paciente--

insert into Paciente(idPaciente, nombrePaciente, apellidoPaciente, correoPaciente, telefonoPaciente, direccionPaciente, fechaNacimiento,estadoPaciente) values (1, 'Andres', 'Rivera', 'andresriv@cloudmail.com', '300 58904738', 'cr 73 a #61-34 norte', '2011/2/3', false);
insert into Paciente(idPaciente, nombrePaciente, apellidoPaciente, correoPaciente, telefonoPaciente, direccionPaciente, fechaNacimiento,estadoPaciente) values (2, 'Joan', ' Paez', 'paezjoan@hotmailmail.com', '317 6678504', 'cll 98 b #43-43 norte', '2016/09/20', true);
insert into Paciente(idPaciente, nombrePaciente, apellidoPaciente, correoPaciente, telefonoPaciente, direccionPaciente, fechaNacimiento,estadoPaciente) values (3, 'Jorge', 'Cortes', 'jorgecortes@gmail.com', '320 5890734', 'cr 19 a #91-31 sur', '2016/04/20', false);
insert into Paciente(idPaciente, nombrePaciente, apellidoPaciente, correoPaciente, telefonoPaciente, direccionPaciente, fechaNacimiento,estadoPaciente) values (4, 'Oscar', 'Pinto', 'pintoosc@cloudmail.com', '318 6031338', 'cr 35 a #57-89 sur', '2014/08/28', false);
insert into Paciente(idPaciente, nombrePaciente, apellidoPaciente, correoPaciente, telefonoPaciente, direccionPaciente, fechaNacimiento,estadoPaciente) values (5, 'Andrea', 'Rincon', 'andrearin@gmail.com', '315 3589167', 'cr 46 a #49-20 sur', '2018/03/09', false);
insert into Paciente(idPaciente, nombrePaciente, apellidoPaciente, correoPaciente, telefonoPaciente, direccionPaciente, fechaNacimiento,estadoPaciente) values (6, 'Maria', 'Fernandez', 'mariafer@cloudmail.com', '300 5198250', 'cr 115 a #98-45 norte', '2017/06/19', true);
insert into Paciente(idPaciente, nombrePaciente, apellidoPaciente, correoPaciente, telefonoPaciente, direccionPaciente, fechaNacimiento,estadoPaciente) values (7, 'Carlos', 'Lopez', 'carlitos@cloudmail.com', '316 45504738', 'cr 79 a #89-43 norte', '2014/05/17', false);
insert into Paciente(idPaciente, nombrePaciente, apellidoPaciente, correoPaciente, telefonoPaciente, direccionPaciente, fechaNacimiento,estadoPaciente) values (8, 'Jose', 'Rivero', 'joseriv@cloudmail.com', '300 9994635', 'cll 22 a #62-35 sur', '2016/12/15', false);
insert into Paciente(idPaciente, nombrePaciente, apellidoPaciente, correoPaciente, telefonoPaciente, direccionPaciente, fechaNacimiento,estadoPaciente) values (9, 'Orlando', 'Bermudez', 'orlandobev@gmail.com', '300 3939044', 'cr 24 a #15-40 sur', '2019/04/09', true);
insert into Paciente(idPaciente, nombrePaciente, apellidoPaciente, correoPaciente, telefonoPaciente, direccionPaciente, fechaNacimiento,estadoPaciente) values (10, 'Roman', 'Torres', 'romantorres@cloudmail.com', '300 23104738', 'cr 70 a #30-35 norte', '2018/10/24', true);
insert into Paciente(idPaciente, nombrePaciente, apellidoPaciente, correoPaciente, telefonoPaciente, direccionPaciente, fechaNacimiento,estadoPaciente) values (11, 'Henry', 'Rojas', 'rojashenry@cloudmail.com', '300 58174158', 'cr 17 a #49-49 sur', '2016/02/13', false);
insert into Paciente(idPaciente, nombrePaciente, apellidoPaciente, correoPaciente, telefonoPaciente, direccionPaciente, fechaNacimiento,estadoPaciente) values (12, 'Jessica', 'Correa', 'jessicacorrea@hotmail.com', '316 36504738', 'cr 37 a #62-62 sur', '2019/02/15', false);
insert into Paciente(idPaciente, nombrePaciente, apellidoPaciente, correoPaciente, telefonoPaciente, direccionPaciente, fechaNacimiento,estadoPaciente) values (13, 'Lina', 'Rodriguez', 'linarodri@gmail.com', '300 56404773', 'cr 73 a #77-33 norte', '2020/01/01', true);
insert into Paciente(idPaciente, nombrePaciente, apellidoPaciente, correoPaciente, telefonoPaciente, direccionPaciente, fechaNacimiento,estadoPaciente) values (14, 'Sofia', 'Jimenez', 'sofiajimenez@hotmail.com', '317 9704738', 'cr 29 a #49-511 sur', '2019/06/17', false);
insert into Paciente(idPaciente, nombrePaciente, apellidoPaciente, correoPaciente, telefonoPaciente, direccionPaciente, fechaNacimiento,estadoPaciente) values (15, 'Carles', 'Puyol', 'carlespuyol@gmail.com', '317 54904430', 'cr 71 a #69-34 norte', '2015/12/12', true);
insert into Paciente(idPaciente, nombrePaciente, apellidoPaciente, correoPaciente, telefonoPaciente, direccionPaciente, fechaNacimiento,estadoPaciente) values (16, 'Valerin', 'Ortiz', 'ortizvale@gmail.com', '318 31404738', 'cr 72 a #67-76 norte', '2015/01/21', true);
insert into Paciente(idPaciente, nombrePaciente, apellidoPaciente, correoPaciente, telefonoPaciente, direccionPaciente, fechaNacimiento,estadoPaciente) values (17, 'Julio', 'Perez', 'julioperez@hotmail.com', '316 61084738', 'cr 44 a #44-38 sur', '2016/01/12', false);
insert into Paciente(idPaciente, nombrePaciente, apellidoPaciente, correoPaciente, telefonoPaciente, direccionPaciente, fechaNacimiento,estadoPaciente) values (18, 'John', 'Duque', 'johnduque@hotmail.com', '315 58156138', 'cr 50 a #28-32 sur', '2016/12/23', true);
insert into Paciente(idPaciente, nombrePaciente, apellidoPaciente, correoPaciente, telefonoPaciente, direccionPaciente, fechaNacimiento,estadoPaciente) values (19, 'Wilker', 'Fariñez', 'wilkerfariñez@gmail.com', '318 7889143', 'cr 84 a #67-55 norte', '2018/04/07', false);
insert into Paciente(idPaciente, nombrePaciente, apellidoPaciente, correoPaciente, telefonoPaciente, direccionPaciente, fechaNacimiento,estadoPaciente) values (20, 'Jefferson', 'Martinez', 'jeffersonmartinez@hotmail.com', '317 58904738', 'cr 39 a #42-50 sur', '2016/12/18', false);
insert into Paciente(idPaciente, nombrePaciente, apellidoPaciente, correoPaciente, telefonoPaciente, direccionPaciente, fechaNacimiento,estadoPaciente) values (21, 'Juliana', 'Tovar', 'julitovar@hotmail.com', '315 32056136', 'cr 48 a #82-82 sur', '2018/10/20', true);
insert into Paciente(idPaciente, nombrePaciente, apellidoPaciente, correoPaciente, telefonoPaciente, direccionPaciente, fechaNacimiento,estadoPaciente) values (22, 'Valentina', 'Suarez', 'suarezvalentina@hotmail.com', '316 6318543', 'cll 100 a #28-32 norte', '2019/08/23', true);
insert into Paciente(idPaciente, nombrePaciente, apellidoPaciente, correoPaciente, telefonoPaciente, direccionPaciente, fechaNacimiento,estadoPaciente) values (23, 'Valeria', 'Rodriguez', 'valeriarodriguez@gmail.com', '300 31256138', 'cr 14 a #37-31 sur', '2013/01/09', true);
insert into Paciente(idPaciente, nombrePaciente, apellidoPaciente, correoPaciente, telefonoPaciente, direccionPaciente, fechaNacimiento,estadoPaciente) values (24, 'Andres', 'Escobar', 'escobarandres@hotmail.com', '320 3814904', 'cr 39 a #61-21 sur', '2015/06/22', true);
insert into Paciente(idPaciente, nombrePaciente, apellidoPaciente, correoPaciente, telefonoPaciente, direccionPaciente, fechaNacimiento,estadoPaciente) values (25, 'Jeison', 'Cabrera', 'jeisoncabrera@cloudmail.com', '3216680678', 'cll 24 a #69-96 sur', '2013/11/02', false);

-- datos agenda --

insert into Agenda(idAgenda, fechaAgenda, horaAgenda, Consultorio, estadoAgenda ) values ('1', '2008/12/11', '16:10:52', '30', true);
insert into Agenda(idAgenda, fechaAgenda, horaAgenda, Consultorio, estadoAgenda ) values ('2', '2008/06/08', '4:22:44', '32', true);
insert into Agenda(idAgenda, fechaAgenda, horaAgenda, Consultorio, estadoAgenda ) values ('3', '2013/04/26', '18:22:40', '43', false);
insert into Agenda(idAgenda, fechaAgenda, horaAgenda, Consultorio, estadoAgenda ) values ('4', '2017/08/25', '12:40:07', '50', true);
insert into Agenda(idAgenda, fechaAgenda, horaAgenda, Consultorio, estadoAgenda ) values ('5', '2010/08/27', '18:22:40', '34', false);
insert into Agenda(idAgenda, fechaAgenda, horaAgenda, Consultorio, estadoAgenda ) values ('6', '2018/01/30', '12:19:03', '30', true);
insert into Agenda(idAgenda, fechaAgenda, horaAgenda, Consultorio, estadoAgenda ) values ('7', '2007/11/26', '8:34:09', '33', false);
insert into Agenda(idAgenda, fechaAgenda, horaAgenda, Consultorio, estadoAgenda ) values ('8', '2013/10/06', '19:38:40', '50', true);
insert into Agenda(idAgenda, fechaAgenda, horaAgenda, Consultorio, estadoAgenda ) values ('9', '2016/11/07', '19:47:39', '41', false);
insert into Agenda(idAgenda, fechaAgenda, horaAgenda, Consultorio, estadoAgenda ) values ('10', '2009/02/14', '16:50:24', '31', false);
insert into Agenda(idAgenda, fechaAgenda, horaAgenda, Consultorio, estadoAgenda ) values ('11', '2015/01/13', '21:26:00', '43', true);
insert into Agenda(idAgenda, fechaAgenda, horaAgenda, Consultorio, estadoAgenda ) values ('12', '2019/02/25', '17:42:31', '34', true);
insert into Agenda(idAgenda, fechaAgenda, horaAgenda, Consultorio, estadoAgenda ) values ('13', '2014/03/10', '13:36:02', '32', true);
insert into Agenda(idAgenda, fechaAgenda, horaAgenda, Consultorio, estadoAgenda ) values ('14', '2015/12/09', '2:07:12', '42', true);
insert into Agenda(idAgenda, fechaAgenda, horaAgenda, Consultorio, estadoAgenda ) values ('15', '2009/04/21', '19:01:30', '35', true);
insert into Agenda(idAgenda, fechaAgenda, horaAgenda, Consultorio, estadoAgenda ) values ('16', '2018/05/21', '15:24:07', '45', true);
insert into Agenda(idAgenda, fechaAgenda, horaAgenda, Consultorio, estadoAgenda ) values ('17', '2016/10/14', '15:24:07', '46', false);
insert into Agenda(idAgenda, fechaAgenda, horaAgenda, Consultorio, estadoAgenda ) values ('18', '2019/07/27', '14:35:33', '36', true);
insert into Agenda(idAgenda, fechaAgenda, horaAgenda, Consultorio, estadoAgenda ) values ('19', '2009/06/16', '5:32:05', '47', false);
insert into Agenda(idAgenda, fechaAgenda, horaAgenda, Consultorio, estadoAgenda ) values ('20', '2008/02/11', '21:30:19', '38', true);
insert into Agenda(idAgenda, fechaAgenda, horaAgenda, consultorio, estadoAgenda ) values ('21', '2012/09/04', '12:32:35', '50', true);
insert into Agenda(idAgenda, fechaAgenda, horaAgenda, Consultorio, estadoAgenda ) values ('22', '2019/06/11', '7:47:54', '39', false);
insert into Agenda(idAgenda, fechaAgenda, horaAgenda, Consultorio, estadoAgenda ) values ('23', '2007/02/06', '10:57:34', '30', true);
insert into Agenda(idAgenda, fechaAgenda, horaAgenda, Consultorio, estadoAgenda ) values ('24', '2014/10/19', '1:14:56', '49', false);
insert into Agenda(idAgenda, fechaAgenda, horaAgenda, Consultorio, estadoAgenda ) values ('25', '2010/08/09', '4:46:31', '11', false);

-- datos historia_clinica --

insert into Historia_Clinica(idHistoria, estatura, peso, antecedentesFamiliares, alergias, enfermedadesPadecidas ) values ('1', '15', '3', 'nn', 'Dermatitis', 'Ninguna');
insert into Historia_Clinica(idHistoria, estatura, peso, antecedentesFamiliares, alergias, enfermedadesPadecidas ) values ('2', '25', '3', 'nn', 'Ninguna', 'Problemas cardiacos');
insert into Historia_Clinica(idHistoria, estatura, peso, antecedentesFamiliares, alergias, enfermedadesPadecidas ) values ('3', '20', '3', 'nn', 'Alimentaria', 'Ninguna');
insert into Historia_Clinica(idHistoria, estatura, peso, antecedentesFamiliares, alergias, enfermedadesPadecidas ) values ('4', '21', '2.5', 'nn', 'Dermatitis', 'Antrosis');
insert into Historia_Clinica(idHistoria, estatura, peso, antecedentesFamiliares, alergias, enfermedadesPadecidas ) values ('5', '28', '3.1', 'nn', 'Alimentaria', 'Ninguna');
insert into Historia_Clinica(idHistoria, estatura, peso, antecedentesFamiliares, alergias, enfermedadesPadecidas ) values ('6', '100', '25', 'nn', 'Dermatitis', 'Problemas dentales');
insert into Historia_Clinica(idHistoria, estatura, peso, antecedentesFamiliares, alergias, enfermedadesPadecidas ) values ('7', '65', '15', 'nn', 'Dermatitis', 'Ninguna');
insert into Historia_Clinica(idHistoria, estatura, peso, antecedentesFamiliares, alergias, enfermedadesPadecidas ) values ('8', '45', '12', 'nn', 'Ninguna', 'Problemas cardiacos');
insert into Historia_Clinica(idHistoria, estatura, peso, antecedentesFamiliares, alergias, enfermedadesPadecidas ) values ('9', '17', '2', 'nn', 'Dermatitis', 'Ninguna');
insert into Historia_Clinica(idHistoria, estatura, peso, antecedentesFamiliares, alergias, enfermedadesPadecidas ) values ('10', '28', '3', 'nn', 'A medicamentos', 'Ninguna');
insert into Historia_Clinica(idHistoria, estatura, peso, antecedentesFamiliares, alergias, enfermedadesPadecidas ) values ('11', '33', '3.2', 'nn', 'Dermatitis', 'Ninguna');
insert into Historia_Clinica(idHistoria, estatura, peso, antecedentesFamiliares, alergias, enfermedadesPadecidas ) values ('12', '34', '3', 'nn', 'Dermatitis', 'Ninguna');
insert into Historia_Clinica(idHistoria, estatura, peso, antecedentesFamiliares, alergias, enfermedadesPadecidas ) values ('13', '20', '2', 'nn', 'Ninguna', 'Ninguna');
insert into Historia_Clinica(idHistoria, estatura, peso, antecedentesFamiliares, alergias, enfermedadesPadecidas ) values ('14', '37', '4', 'nn', 'Dermatitis', 'Ninguna');
insert into Historia_Clinica(idHistoria, estatura, peso, antecedentesFamiliares, alergias, enfermedadesPadecidas ) values ('15', '22', '3', 'nn', 'Ninguna', 'Ninguna');
insert into Historia_Clinica(idHistoria, estatura, peso, antecedentesFamiliares, alergias, enfermedadesPadecidas ) values ('16', '34', '4', 'nn', 'Ninguna', 'Problemas dentales');
insert into Historia_Clinica(idHistoria, estatura, peso, antecedentesFamiliares, alergias, enfermedadesPadecidas ) values ('17', '88', '22', 'nn', 'Dermatitis', 'Ninguna');
insert into Historia_Clinica(idHistoria, estatura, peso, antecedentesFamiliares, alergias, enfermedadesPadecidas ) values ('18', '101', '26', 'nn', 'A medicamentos', 'Ninguna');
insert into Historia_Clinica(idHistoria, estatura, peso, antecedentesFamiliares, alergias, enfermedadesPadecidas ) values ('19', '100', '24', 'nn', 'Dermatitis', 'Antrosis');
insert into Historia_Clinica(idHistoria, estatura, peso, antecedentesFamiliares, alergias, enfermedadesPadecidas ) values ('20', '70', '20', 'nn', 'A medicamentos', 'Ninguna');
insert into Historia_Clinica(idHistoria, estatura, peso, antecedentesFamiliares, alergias, enfermedadesPadecidas ) values ('21', '65', '18', 'nn', 'Ninguna', 'Sordera');
insert into Historia_Clinica(idHistoria, estatura, peso, antecedentesFamiliares, alergias, enfermedadesPadecidas ) values ('22', '82', '23', 'nn', 'Ninguna', 'Ninguna');
insert into Historia_Clinica(idHistoria, estatura, peso, antecedentesFamiliares, alergias, enfermedadesPadecidas ) values ('23', '46', '7', 'nn', 'Alimentaria', 'Antrosis');
insert into Historia_Clinica(idHistoria, estatura, peso, antecedentesFamiliares, alergias, enfermedadesPadecidas ) values ('24', '67', '10', 'nn', 'Ninguna', 'Ninguna');
insert into Historia_Clinica(idHistoria, estatura, peso, antecedentesFamiliares, alergias, enfermedadesPadecidas ) values ('25', '55', '6', 'nn', 'Dermatitis', 'Antrosis');

-- datos examen --

insert into Examen(idExamen, Valor, fechaExamen, tipoExamen) values ('1', '20401', '2017/07/09', 'corte');
insert into Examen(idExamen, Valor, fechaExamen, tipoExamen) values ('2', '1000', '2018/05/03', 'consulta');
insert into Examen(idExamen, Valor, fechaExamen, tipoExamen) values ('3', '20401', '2018/09/12', 'corte');
insert into Examen(idExamen, Valor, fechaExamen, tipoExamen) values ('4', '50000', '2018/03/23', 'completo');
insert into Examen(idExamen, Valor, fechaExamen, tipoExamen) values ('5', '20401', '2018/10/25', 'corte');
insert into Examen(idExamen, Valor, fechaExamen, tipoExamen) values ('6', '20401', '2018/10/19', 'corte');
insert into Examen(idExamen, Valor, fechaExamen, tipoExamen) values ('7', '20401', '2018/06/07', 'corte');
insert into Examen(idExamen, Valor, fechaExamen, tipoExamen) values ('8', '20401', '2019/02/03', 'corte');
insert into Examen(idExamen, Valor, fechaExamen, tipoExamen) values ('9', '20401', '2019/12/17', 'corte');
insert into Examen(idExamen, Valor, fechaExamen, tipoExamen) values ('10', '1000', '2017/11/22', 'consulta');
insert into Examen(idExamen, Valor, fechaExamen, tipoExamen) values ('11', '1000', '2018/01/27', 'consulta');
insert into Examen(idExamen, Valor, fechaExamen, tipoExamen) values ('12', '20401', '2019/06/27', 'corte');
insert into Examen(idExamen, Valor, fechaExamen, tipoExamen) values ('13', '20401', '2017/07/21', 'corte');
insert into Examen(idExamen, Valor, fechaExamen, tipoExamen) values ('14', '20401', '2019/05/15', 'corte');
insert into Examen(idExamen, Valor, fechaExamen, tipoExamen) values ('15', '20401', '2018/03/06', 'corte');
insert into Examen(idExamen, Valor, fechaExamen, tipoExamen) values ('16', '50000', '2018/01/13', 'completo');
insert into Examen(idExamen, Valor, fechaExamen, tipoExamen) values ('17', '20401', '2019/01/17', 'corte');
insert into Examen(idExamen, Valor, fechaExamen, tipoExamen) values ('18', '20401', '2019/01/15', 'corte');
insert into Examen(idExamen, Valor, fechaExamen, tipoExamen) values ('19', '20401', '2019/09/14', 'corte');
insert into Examen(idExamen, Valor, fechaExamen, tipoExamen) values ('20', '20401', '2018/02/10', 'corte');
insert into Examen(idExamen, Valor, fechaExamen, tipoExamen) values ('21', '20401', '2018/11/29', 'corte');
insert into Examen(idExamen, Valor, fechaExamen, tipoExamen) values ('22', '1000', '2017/12/05', 'consulta');
insert into Examen(idExamen, Valor, fechaExamen, tipoExamen) values ('23', '20401', '2017/08/30', 'corte');
insert into Examen(idExamen, Valor, fechaExamen, tipoExamen) values ('24', '20401', '2019/05/26', 'corte');
insert into Examen(idExamen, Valor, fechaExamen, tipoExamen) values ('25', '20401', '2017/07/07', 'corte');

-- datos Consulta_Medica --

insert into Consulta_Medica(idConsulta, horaAtencion, motivoConsulta, enfermedad ) values ('1', '7:46:59', 'No come la mascota', 'LEISHMANIOSIS');
insert into Consulta_Medica(idConsulta, horaAtencion, motivoConsulta, enfermedad ) values ('2', '4:09:40', 'Lleva un tiempo sin una consulta', 'Ninguna');
insert into Consulta_Medica(idConsulta, horaAtencion, motivoConsulta, enfermedad ) values ('3', '4:12:15', 'No come la mascota', 'Ninguna');
insert into Consulta_Medica(idConsulta, horaAtencion, motivoConsulta, enfermedad ) values ('4', '9:54:42', 'Comportamiento extraño', 'LEISHMANIOSIS');
insert into Consulta_Medica(idConsulta, horaAtencion, motivoConsulta, enfermedad ) values ('5', '14:02:13', 'Sus residuos son raros', 'Brucelosis');
insert into Consulta_Medica(idConsulta, horaAtencion, motivoConsulta, enfermedad ) values ('6', '18:20:38', 'No come la mascota', 'LEISHMANIOSIS');
insert into Consulta_Medica(idConsulta, horaAtencion, motivoConsulta, enfermedad ) values ('7', '14:21:25', 'Lleva un tiempo sin una consulta', 'Ninguna');
insert into Consulta_Medica(idConsulta, horaAtencion, motivoConsulta, enfermedad ) values ('8', '15:10:03', 'Lleva un tiempo sin una consulta', 'Ninguna');
insert into Consulta_Medica(idConsulta, horaAtencion, motivoConsulta, enfermedad ) values ('9', '23:39:42', 'No come la mascota', 'Sordera');
insert into Consulta_Medica(idConsulta, horaAtencion, motivoConsulta, enfermedad ) values ('10', '3:46:57', 'No come la mascota', 'LEISHMANIOSIS');
insert into Consulta_Medica(idConsulta, horaAtencion, motivoConsulta, enfermedad ) values ('11', '19:07:38', 'Comportamiento extraño', 'Ninguna');
insert into Consulta_Medica(idConsulta, horaAtencion, motivoConsulta, enfermedad ) values ('12', '5:57:35', 'No come la mascota', 'LEISHMANIOSIS');
insert into Consulta_Medica(idConsulta, horaAtencion, motivoConsulta, enfermedad ) values ('13', '0:26:53', 'No come la mascota', 'Ninguna');
insert into Consulta_Medica(idConsulta, horaAtencion, motivoConsulta, enfermedad ) values ('14', '14:32:17', 'Comportamiento extraño', 'LEISHMANIOSIS');
insert into Consulta_Medica(idConsulta, horaAtencion, motivoConsulta, enfermedad ) values ('15', '17:39:54', 'No come la mascota', 'LEISHMANIOSIS');
insert into Consulta_Medica(idConsulta, horaAtencion, motivoConsulta, enfermedad ) values ('16', '19:46:48', 'Lleva un tiempo sin una consulta', 'LEISHMANIOSIS');
insert into Consulta_Medica(idConsulta, horaAtencion, motivoConsulta, enfermedad ) values ('17', '7:03:14', 'Comportamiento extraño', 'LEISHMANIOSIS');
insert into Consulta_Medica(idConsulta, horaAtencion, motivoConsulta, enfermedad ) values ('18', '11:58:34', 'No come la mascota', 'Ninguna');
insert into Consulta_Medica(idConsulta, horaAtencion, motivoConsulta, enfermedad ) values ('19', '19:30:18', 'No come la mascota', 'LEISHMANIOSIS');
insert into Consulta_Medica(idConsulta, horaAtencion, motivoConsulta, enfermedad ) values ('20', '12:58:58', 'Lleva un tiempo sin una consulta', 'Ninguna');
insert into Consulta_Medica(idConsulta, horaAtencion, motivoConsulta, enfermedad ) values ('21', '19:44:09', 'No come la mascota', 'LEISHMANIOSIS');
insert into Consulta_Medica(idConsulta, horaAtencion, motivoConsulta, enfermedad ) values ('22', '0:08:51', 'Comportamiento extraño', 'LEISHMANIOSIS');
insert into Consulta_Medica(idConsulta, horaAtencion, motivoConsulta, enfermedad ) values ('23', '5:44:38', 'No come la mascota', 'Brucelosis');
insert into Consulta_Medica(idConsulta, horaAtencion, motivoConsulta, enfermedad ) values ('24', '9:28:25', 'No come la mascota', 'LEISHMANIOSIS');
insert into Consulta_Medica(idConsulta, horaAtencion, motivoConsulta, enfermedad ) values ('25', '22:41:34', 'Sus residuos son raros', 'Ninguna');


-- datos diagnostico --

insert into Diagnostico(idDiagnostico, Describcion) values ('1', 'Tenia Cancer estomacal');
insert into Diagnostico(idDiagnostico, Describcion) values ('2', 'El perro se encuentra en muy buenas condiciones');
insert into Diagnostico(idDiagnostico, Describcion) values ('3', 'Tenia paracitos, se le deben colocar inyecciones');
insert into Diagnostico(idDiagnostico, Describcion) values ('4', 'El canino estaba desnutrido');
insert into Diagnostico(idDiagnostico, Describcion) values ('5', 'Tenia paracitos, se le deben colocar inyecciones');
insert into Diagnostico(idDiagnostico, Describcion) values ('6', 'El perro se encuentra en muy buenas condiciones');
insert into Diagnostico(idDiagnostico, Describcion) values ('7', 'La gata estaba embarazada');
insert into Diagnostico(idDiagnostico, Describcion) values ('8', 'Le dio una infeccion en la parte de la cola');
insert into Diagnostico(idDiagnostico, Describcion) values ('9', 'Tenia paracitos, se le deben colocar inyecciones');
insert into Diagnostico(idDiagnostico, Describcion) values ('10', 'El perro se encuentra en muy buenas condiciones');
insert into Diagnostico(idDiagnostico, Describcion) values ('11', 'Tenia rabia el canino');
insert into Diagnostico(idDiagnostico, Describcion) values ('12', 'Le dio una infeccion en la parte de la cola');
insert into Diagnostico(idDiagnostico, Describcion) values ('13', 'La gata estaba embarazada');
insert into Diagnostico(idDiagnostico, Describcion) values ('14', 'El perro se encuentra en muy buenas condiciones');
insert into Diagnostico(idDiagnostico, Describcion) values ('15', 'La tortuga al parecer se le dificultaba la salida de huevos');
insert into Diagnostico(idDiagnostico, Describcion) values ('16', 'Le dio una infeccion en la parte de la cola');
insert into Diagnostico(idDiagnostico, Describcion) values ('17', 'Tenia paracitos, se le deben colocar inyecciones');
insert into Diagnostico(idDiagnostico, Describcion) values ('18', 'El perro se encuentra en muy buenas condiciones');
insert into Diagnostico(idDiagnostico, Describcion) values ('19', 'El canino estaba desnutrido');
insert into Diagnostico(idDiagnostico, Describcion) values ('20', 'Tenia Cancer estomacal');
insert into Diagnostico(idDiagnostico, Describcion) values ('21', 'Tenia paracitos, se le deben colocar inyecciones');
insert into Diagnostico(idDiagnostico, Describcion) values ('22', 'El perro se encuentra en muy buenas condiciones');
insert into Diagnostico(idDiagnostico, Describcion) values ('23', 'Tenia rabia el canino');
insert into Diagnostico(idDiagnostico, Describcion) values ('24', 'Tenia Cancer estomacal');
insert into Diagnostico(idDiagnostico, Describcion) values ('25', 'El perro se encuentra en muy buenas condiciones');



-- Realice 7 consultas empleando operadores relaciones y logicos. Según aplique. --

select * from Usuario where idUsuario>=10;
select * from Usuario where idUsuario<>14;
select * from Usuario where telefonoUsuario=3206757678;
select * from Medico where estadoMedico=1;
select * from Medico where estadoMedico=0;
select * from Usuario where estadoUsuario=1;
select * from Usuario where estadoUsuario=0;

-- Realice 3 consultas empleando busqueda de patrones (like y not like). Según aplique. --

select * from Examen where tipoExamen like'Corte%';
select * from Usuario where telefonoUsuario like '314%' ;
select * from Usuario where telefonoUsuario not like '321%';
select * from Medico where telefonoMedico like '%34%' ;
select * from Diagnostico where Describcion like 'E%s' ;

-- Realiece 5 consultas por agrupamiento de registros (GroupBy). --

select count(idDiagnostico), Describcion from Diagnostico group by Describcion;
select count(idExamen), Valor, tipoExamen from Examen group by Valor;
select count(idMedico), nombreMedico from Medico group by nombreMedico;
select count(idMedico), apellidoMedico from Medico group by apellidoMedico;
select count(idMedico), nombreMedico, apellidoMedico from Medico group by apellidoMedico, nombreMedico;

-- Elimine 5 registros. --

delete from Examen where Valor<>'20401';
delete from Examen where Valor<>'1000';
delete from Examen where tipoExamen="corte";
delete from Diagnostico where idDiagnostico>=22;
delete from Usuario where estadoUsuario='0';

Select * from Agenda;
Select * from Historia_Clinica;
Select * from Paciente;
Select * from Consulta_Medica;
Select * from Usuario;
Select * from Paciente where nombre = 'Andres';
Select * from Usuario where idUsuario = 21;
Select * from Usuario where nombre = 'Alberto';
Select * from Consulta_Medica where horaAtencion = '12:15';
Select * from Historia_Clinica where alergia = 'Dermatitis';
Select * from Agenda where Consultorio = 40;
Select * from Usuario where nombre = 'Carlos';
Select * from Medico where apellidoMedico = 'Alarcon';
Select * from Agenda where fechaAgenda = '10/3/2020';
Select * from Diagnostico where idDiagnostico >= 5;
Select * from Examen where valor <= 20401;
Select * from Usuario where apellidoUsuario <> 'Perez';
Select * from Consulta_Medica where idConsulta <> 'Ninguna' ;
Select * from Historia_Clinica where peso <> '3kg';
Select * from Diagnostico where idDiagnostico = 3 ;

update Usuario set nombre = 'Carles' where nombre = 'Carlos';
update Agenda set fechaAgenda = '11/3/2020' where fechaAgenda = '10/3/2020';
update Examen set valor = '20400' where valor = '20401';
update Historia_Clinica set alergia  = 'Dermatitis' where alergia = 'Dermatitis por pulgas';
update Consulta_Medica set horaAtencion = '12:20' where horaAtencion = '12:15';
update Historia_Clinica set peso = '3.1' where peso = '3kg';
update Historia_Clinica set estatura = '101cm' where estatura = '100cm';

Select * from Usuario order by idUsuario desc, nombreUsuario asc;
select * from Medico;
drop table Usuario;
drop table Medico;
drop table Paciente;
drop table Historia_clinica;
drop table Examen;
drop table Diagnostico;
drop table Consulta_medica;
drop table Agenda;

select nombreMedico, apellidoMedico, correoUsuario, passwordUsuario from Usuario, Medico where Usuario.idUsuario = Medico.idUsuarioFK and Usuario.estadoUsuario = true and Medico.estadoMedico = true;
select nombreMedico, apellidoMedico, correoUsuario, passwordUsuario from Usuario inner join Medico on Usuario.idUsuario = Medico.idUsuarioFK and Usuario.estadoUsuario = true and Medico.estadoMedico = true;

select nombrePaciente, apellidoPaciente, Estatura, Peso from Paciente, Historia_Clinica where Paciente.idPaciente = Historia_Clinica.idPacienteFK and Historia_Clinica.Estatura>=60;
select nombrePaciente, apellidoPaciente, Estatura, Peso from Paciente inner join Historia_Clinica on Paciente.idPaciente = Historia_Clinica.idPacienteFK and Historia_Clinica.Estatura>=60;

select nombrePaciente, apellidoPaciente, fechaAgenda, horaAgenda from Paciente, Agenda where Paciente.idPaciente = Agenda.idPacienteFK and Agenda.horaAgenda >= '16:00:00';
select nombrePaciente, apellidoPaciente, fechaAgenda, horaAgenda from Paciente inner join Agenda on Paciente.idPaciente = Agenda.idPacienteFK and Agenda.horaAgenda >= '16:00:00';

-- 15-05-2020 --

select nombreMedico, apellidoMedico, fechaAgenda, horaAgenda, Consultorio, estadoAgenda from Medico inner join Agenda on Medico.idMedico=Agenda.idMedicoFK where nombreMedico="Camila Andrea" and apellidoMedico="Espinoza Rivera" having fechaAgenda like '2020-05-%';

select nombrePaciente, apellidoPaciente, idHistoria from Paciente left join Historia_Clinica on Paciente.idPaciente=Historia_Clinica.idPacienteFK where idHistoria is null;

select nombrePaciente, apellidoPaciente, Estatura, Peso, antecendentesFamiliares, Alergias, enfermedadesPadecidas from Paciente inner join Historia_Clinica on Paciente.idPaciente=Historia_Clinica.idPacienteFK;

select nombrePaciente, apellidoPaciente, horaAtencion, motivoConsulta from Paciente inner join Historia_Clinica on Paciente.idPaciente=Historia_Clinica.idPacienteFK inner join Consulta_Medica on Historia_Clinica.idHistoria=Consulta_Medica.idHistoriaFK where nombrePaciente='Juan Felipe' and apellidoPaciente='Reyes Jurado';

select nombrePaciente, apellidoPaciente, fechaExamen, tipoExamen from Paciente inner join Historia_Clinica on Paciente.idPaciente=Historia_Clinica.idPacienteFK inner join Examen on Historia_Clinica.idHistoria=Examen.idHistoriaFK where nombrePaciente='Juan Felipe' and apellidoPaciente='Reyes Jurado';

select nombrePaciente, apellidoPaciente, horaAtencion, Descripcion from paciente inner join Historia_Clinica on Paciente.idPaciente=Historia_Clinica.idPacienteFK inner join Consulta_Medica on Historia_Clinica.idHistoria=Consulta_Medica.idHistoriaFK inner join Diagnostico on Consulta_Medica.idConsulta=Diagnostico.idConsultaFK where nombrePaciente='Juan Felipe' and apellidoPaciente='Reyes Jurado';


-- 12-06-2020 --
DELIMITER $$
DROP PROCEDURE IF EXISTS consultarTablaCompletaMedico $$
CREATE PROCEDURE consultarTablaCompletaMedico()
BEGIN
SELECT * FROM Medico order by idMedico ASC;
END $$


DELIMITER $$
DROP PROCEDURE IF EXISTS RegistrarMedico $$
CREATE PROCEDURE RegistrarMedico(IN id bigint, IN nombre varchar(50), IN apellido varchar(50), IN telefono varchar(20), IN correo varchar(100), IN tarjetaProff varchar(50), IN especialidad varchar(50), IN iduser bigint)
BEGIN
INSERT INTO Medico VALUES (id,nombre,apellido,telefono,correo,tarjetaProff,especialidad,'Activo',iduser);
END $$

Call RegistrarMedico(16,'Arturo','calle','3213214444','arturocalle@medicosun.com','654357','veterinaria',18);

DELIMITER $$
DROP PROCEDURE IF EXISTS RegistrarUsuario $$
CREATE PROCEDURE RegistrarUsuario(IN id bigint, IN nombre varchar(50), IN apellido varchar(50), IN correo varchar(100), IN telefono varchar(20), IN direccion varchar(50), IN pass varchar(20), IN rol varchar(20))
BEGIN
INSERT INTO Medico VALUES (id,nombre,apellido,correo,telefono,direccion,pass,rol,'Activo');
END $$

Call RegistrarUsuario(19,'Carlos','Madrazzo','madrazzocar@gmail.com','3214456456','cll 45 #45-45','notesabesmicontrajajaosi','paciente');

DELIMITER $$
DROP PROCEDURE IF EXISTS RegistrarPaciente $$
CREATE PROCEDURE RegistrarPaciente(IN id bigint, IN nombre varchar(50), IN apellido varchar(50), IN direccion varchar(20), IN telefono varchar(20), IN correo varchar(100), IN nacimiento date, IN iduser bigint)
BEGIN
INSERT INTO Paciente VALUES (id,nombre,apellido,direccion,telefono,correo,nacimiento,'Activo',iduser);
END $$

Call RegistrarPaciente(15,'juan','duarte','cll 46 #46-46','3113113112','juanduate@yahoo.es',1992-04-03,19);

DELIMITER $$
DROP PROCEDURE IF EXISTS RegistrarAgenda $$
CREATE PROCEDURE RegistrarAgenda(IN id bigint, IN fecha date, IN hora datetime, IN numeroconsultorio varchar(2), IN idmedico varchar(12), IN idpaciente bigint)
BEGIN
INSERT INTO Agenda VALUES (id,fecha,hora,numeroconsultorio,'activo',idmedico,idpaciente);
END $$

Call RegistrarAgenda(20,2020-04-02,12:30,02,16,19);

DELIMITER $$
DROP PROCEDURE IF EXISTS RegistrarDiagnostico $$
CREATE PROCEDURE RegistrarDiagnostico(IN id bigint, IN describcion text, IN idconsulta bigint)
BEGIN
INSERT INTO Diagnostico VALUES (id,describcion,idconsulta);
END $$

Call RegistrarDiagnostico(16,'Estaba con una parasitosis aguda, se procedio a darle laxantes y purgadores caninos', 21);



DELIMITER $$
DROP PROCEDURE IF EXISTS ConsultarExamenesPorApellidoDePaciente $$
CREATE PROCEDURE ConsultarExamenesPorPaciente(IN apellido varchar(50))
BEGIN
SELECT nombrePaciente, apellidoPaciente, telefonoPaciente, enfermedadesPadecidas, tipoExamen,fechaExamen FROM Paciente INNER JOIN Historia_Clinica ON Paciente.idPaciente=Historia_Clinica.idPacienteFK INNER JOIN Examen ON Historia_Clinica.idHistoria=Examen.idHistoriaFK WHERE apellidoPaciente=apellido;
END$$

call ConsultarExamenesPorPaciente('rojas');

DELIMITER $$
DROP PROCEDURE IF EXISTS ConsultarFechaAgendaPorPaciente $$
CREATE PROCEDURE ConsultarFechaAgendaPorPaciente(IN apellido varchar(50))
BEGIN
SELECT nombrePaciente, apellidoPaciente, fechaAgenda, horaAgenda, Consultorio from Paciente inner join Agenda on Paciente.idPaciente=Agenda.idPacienteFK where apellidoPaciente=apellido;
END$$

DELIMITER $$
DROP PROCEDURE IF EXISTS consulta_usuario $$
CREATE PROCEDURE consulta_usuario(IN _idUsuario varchar(50))
BEGIN
select * from usuario where idUsuario=_idUsuario;
END$$


call ConsultarFechaAgendaPorPaciente('perez');

DELIMITER $$
DROP PROCEDURE IF EXISTS ConsultarMotivoConsultaPorPaciente $$
CREATE PROCEDURE ConsultarMotivoConsultaPorPaciente(IN apellido varchar(50))
BEGIN
SELECT nombrePaciente, apellidoPaciente, horaAtencion, motivoConsulta from Paciente inner join Historia_clinica on Paciente.idPaciente=Historia_clinica.idPacienteFK inner join Consulta_Medica on Historia_clinica.idHistoria=Consulta_Medica.idHistoriaFK where apellidoPaciente=apellido;
END$$

call ConsultarMotivoConsultaPorPaciente('Ortiz');

DELIMITER $$
DROP PROCEDURE IF EXISTS ConsultarDiagnosticoPorPaciente $$
CREATE PROCEDURE ConsultarMotivoConsultaPorPaciente(IN apellido varchar(50))
BEGIN
SELECT nombrePaciente, apellidoPaciente, Descripcion from Paciente inner join Historia_clinica on Paciente.idPaciente=Historia_clinica.idPacienteFK inner join Consulta_Medica on Historia_clinica.idHistoria=Consulta_Medica.idHistoriaFK inner join Diagnostico on Consulta_Medica.idConsulta=Diagnostico.idConsultaFK where apellidoPaciente=apellido;
END$$

Call ConsultarMotivoConsultaPorPaciente('Gutierrez');

DELIMITER $$
DROP PROCEDURE IF EXISTS ConsultarAgendasDeUnMedicoPorApellido $$
CREATE PROCEDURE ConsultarAgendasDeUnMedicoPorApellido(IN apellido varchar(50))
BEGIN
SELECT nombreMedico, apellidoMedico, idAgenda, fechaAgenda, horaAgenda, Consultorio from Medico inner join Agenda on Medico.idMedico=Agenda.idMedicoFK where apellidoMedico=apellido;
END$$

Call ConsultarAgendasDeUnMedicoPorApellido("Garzon");

-----  24-07-2020  ------

DELIMITER |
CREATE TRIGGER ImpedirMedicosNoActivosOInactivos BEFORE INSERT ON Medico
FOR EACH ROW
BEGIN
	if(NEW.estadoMedico<>'Activo')or(NEW.estadoMedico<>'Inactivo')then
		SIGNAL SQLSTATE '45000' SET MESSAGE_TEXT='Solo se permiten registrar medicos activos o inactivos';
    end if;
END
|

insert into Medico values (22,'Julio','Contreras','3213213211','JulioCont@gmail.com','55642','Veterinaria','ocupado','22');

DELIMITER |
CREATE TRIGGER NoAgendasDeEsteDia BEFORE INSERT ON Agenda
FOR EACH ROW
BEGIN
IF(NEW.fechaAgenda=(SELECT CURDATE())) THEN
SIGNAL SQLSTATE '45000' SET MESSAGE_TEXT='No se permiten agendas del mismo dia';
END IF;
END
|

insert into Agenda values(25,'2020-07-24',(SELECT NOW()), '208', 1, 23,5);
