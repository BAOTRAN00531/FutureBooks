
<?php 
function lichsu_select($iduser)
{
    $sql = ("SELECT * FROM `donhang` WHERE iduser=$iduser AND TINHTRANG='0'");
    $list = pdo_query($sql);
    return $list;
}
function lichsu_commented( $iduser , $idsp )
{
    $sql = ("SELECT * FROM `donhang` WHERE iduser=$iduser AND ");
    
}
function lichsu_select_all()
{
    $sql = ("SELECT * FROM `donhang`");
    $list = pdo_query($sql);
    return $list;
}
function lichsu_delete( $iddh )
{
    $sql = ("DELETE FROM `donhang` WHERE IDDH = $iddh");
    pdo_execute($sql);
}
?>