<?php 
error_reporting(0);
// obtener el numero de resgitros dentro de la tabla Usuario 
$CUsuuario = "SELECT * FROM Usuario";
$EUsuario = $ConectionBd->query($CUsuuario);
$TUsuarios = $EUsuario->num_rows;
$On = 1;
// obtener el numero de resgistros registrados en el año 2023
$userReg = "SELECT * FROM Usuario WHERE (FechaReg) BETWEEN '2022-01-01' AND '2023-12-31'";
$userRegE = $ConectionBd->query($userReg);
$TuserReg = $userRegE->num_rows;
// obtener el numero de registro dentro de tipos de usuario
$CTUsuario = "SELECT * FROM TUsuario";
$ECTUsuario = $ConectionBd->query($CTUsuario);
$TTUsuario = $ECTUsuario->num_rows;
// obtener el numero de usuarios tipo super usuario 
$SuperU = "SELECT * FROM Usuario WHERE Id_TUsuario = 1";
$SuperUe = $ConectionBd->query($SuperU);
$TSuperU = $SuperUe->num_rows;
// obtener el numero de usuarios tipo administrativo
$AdminU = "SELECT * FROM Usuario WHERE Id_TUsuario = 2";
$AdminUe = $ConectionBd->query($AdminU);
$TAdminU = $AdminUe->num_rows;
// obtener el numero de usaurios docentes
$DocenteUser = "SELECT * FROM Usuario WHERE Id_TUsuario = 3";
$DocenteUserE = $ConectionBd->query($DocenteUser);
$TDocenteUser = $DocenteUserE->num_rows; 
// obtener el numero de usuarios de tipo alumno 
$AlumnoUser = "SELECT * FROM Usuario WHERE Id_TUsuario = 4";
$AlumnoUserE = $ConectionBd->query($AlumnoUser);
$TAlumnoUserUser = $AlumnoUserE->num_rows; 
// obtener los usuarios en online
$OnUser = "SELECT * FROM Usuario WHERE Online = 1";
$COnUser = $ConectionBd->QUERY($OnUser);
$TCOnUser = $COnUser->num_rows;
// extraer el totas de usuarios activos 
$UserAct = "SELECT * FROM Usuario WHERE EstatusUser = 1";
$UserActE = $ConectionBd->query($UserAct);
$TUserAct = $UserActE->num_rows;
// consulta para extraer categorias de materiales 
$CatMaterial = "SELECT * FROM CategoriaMaterial";
$ECatMaterial = $ConectionBd->query($CatMaterial);
// fecha para dasboard
$FechaD = date('d-m-Y');
// obtener todos los datos de los usuarios con inner join de la plataforma
$UsuariosG = "SELECT U.Id_Usuario, U.Nombre, U.ApellidoP, U.ApellidoM, U.Telefono, U.Email,
U.Id_Plantel, U.Id_TUsuario, U.UserName, U.FechaReg ,U.Password, U.Online, U.EstatusUser,
U.ImgUser, P.Id_Plantel, P.NombrePlantel, P.DireccionPlantel, P.EmailPlantel, 
TU.Id_TUsuario, TU.NTUsuario, ES.Id_EstatusUser, ES.DEstatusUser FROM Usuario U INNER JOIN
Plantel P ON U.Id_Plantel =P.Id_Plantel INNER JOIN TUsuario TU ON U.Id_TUsuario = TU.Id_TUsuario 
INNER JOIN EstatusUser ES ON U.EstatusUser = ES.Id_EstatusUser"; 
$EjecutaUserG = $ConectionBd->query($UsuariosG);
// cusultar total de materiales consumibles
$Tmateriales = "SELECT * FROM Materiales WHERE Id_CatMaterial = 1";
$ETmateriales = $ConectionBd->query($Tmateriales);
$TotalesM = $ETmateriales->num_rows;
// consultar total materiales Activos 
$TmaterialesA = "SELECT * FROM Materiales WHERE Id_CatMaterial = 2";
$ETmaterialesA = $ConectionBd->query($TmaterialesA);
$TotalesMA = $ETmaterialesA->num_rows;
// consulta para extraer informacion sobre materiales 
$Materiales = "SELECT M.Id_Material, M.NomMaterial, M.DescripMaterial, M.Id_CatMaterial, M.Cantidad, M.Stok, M.ImgMaterial, 
C.Id_Categoria, C.NombreCate FROM Materiales M INNER JOIN CategoriaMaterial C ON M.Id_CatMaterial = C.Id_Categoria";
$EMateriales = $ConectionBd->query($Materiales);
$TotalMateriales = $EMateriales->num_rows;
?>