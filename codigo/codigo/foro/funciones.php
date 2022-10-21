<?php
function parsearTags($mensaje)
{
    $mensaje = str_replace("[citar]", "<blockquote><hr width='100%' size='2'>", $mensaje);
    $mensaje = str_replace("[/citar]", "<hr width='100%' size='2'></blockquote>", $mensaje);
    return $mensaje;
}
?>
