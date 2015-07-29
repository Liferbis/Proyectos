
<?php session_start();
?>
<html>
<script language="JavaScript" >
function asigna_nombre()
{
  var codigo1=document.formul.cod_rec.value;
  var codigo2=document.formul.glo_rec.value;
  window.opener.document.formul.cod_rec.value=codigo1;
  window.opener.document.formul.glo_rec.value=codigo2;
}
function asigna_error()
{
  window.opener.document.formul.cod_rec.value="";
  window.opener.document.formul.glo_rec.value="";
  window.opener.document.formul.cod_rec.focus();
}
</script>

<head>
<title>Búsqueda de Recursos </title>
</head>
<body bgcolor="#ffe8b0" topmargin=5 leftmargin=10 rightmargin=0 marginwidth=0 marginheight=0 >
<font face="Verdana, Arial, Helvetica, sans-serif" size=1>
<br>
<?php

// este ejemplo esta hecho con oracle debes remplazar algunos parametros de la consulta
  $conn = ocinlogon($pub_user,$pub_pass,$pub_serv);
  $sql  = "SELECT rec_cod, rec_glosa ";
  $sql .= "FROM salud.recursos ";
  $sql .= "WHERE rec_cod = $cod_rec ";
  $sql .= "ORDER BY rec_glosa";
  $stmt = ociparse($conn,$sql);
  OCIDefineByName($stmt,"REC_COD",$cod);
  OCIDefineByName($stmt,"REC_GLOSA",$descrip);
  ociexecute($stmt);
  if (@OCIFetch($stmt))
  {
    echo "<form name='formul' method='get' action='busca_rec_agenda.php'>";
    echo "  <input type=hidden name='cod_rec' value='$cod'>";
    echo "  <input type=hidden name='glo_rec' value='$descrip'>";
    echo "</form>";
    echo "<script languaje='JavaScript'>asigna_nombre();</script>";
  }else{
    echo "<script languaje='JavaScript'>asigna_error();</script>";
    echo "<script languaje='JavaScript'>alert('Información NO encontrada!!');</script>";
  }
  ocifreestatement($stmt);
  ocilogoff($conn);
  echo "<script languaje='JavaScript'>window.close();</script>";
?>
</body>
</html>