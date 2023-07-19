<?php 
error_reporting(0);
// obtener el numero de resgitros dentro de la tabla Usuario 
$CUsuuario = "SELECT * FROM Usuario";
$EUsuario = $ConectionBd->query($CUsuuario);
$TUsuarios = $EUsuario->num_rows;
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
// obtener el numero de usuarios tipo final
$FinalU = "SELECT * FROM Usuario WHERE Id_TUsuario = 3";
$FinalUe = $ConectionBd->query($FinalU);
$FinalU = $FinalUe->num_rows;
// obtener los usuarios en online
$OnUser = "SELECT * FROM Usuario WHERE Online = 1";
$COnUser = $ConectionBd->QUERY($OnUser);
$TCOnUser = $COnUser->num_rows;
// extraer el totas de usuarios activos 
$UserAct = "SELECT * FROM Usuario WHERE EstatusUser = 1";
$UserActE = $ConectionBd->query($UserAct);
$TUserAct = $UserActE->num_rows;
// obtener los registros toatales de materiales
$CMateriales = "SELECT * FROM Materiales";
$EMateriales = $ConectionBd->query($CMateriales);
$TMateriales = $EMateriales->num_rows;
// obtener el numero de registros en solicitudes
$CSolicitudes = "SELECT * FROM SolicitudMaterial";
$ESolicitud = $ConectionBd->query($CSolicitudes);
$TSolicitudes = $ESolicitud->num_rows;
// obtener el numero de registros en Laboratorios
$CLaboratorios = "SELECT * FROM Laboratorios";
$ELaboratorios = $ConectionBd->query($CLaboratorios);
$TLaboratorios = $ELaboratorios->num_rows;
// obtener el numero de registros en Planteles
$CPlanteles = "SELECT * FROM Plantel";
$EPlanteles = $ConectionBd->query($CPlanteles);
$TPlanteles = $EPlanteles->num_rows;
// fecha para dasboard
$FechaD = date('d-m-Y');

?>