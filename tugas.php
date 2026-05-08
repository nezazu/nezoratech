<html>
<table width="100%" border="0" cellpadding="50" cellspacing="0" bgcolor="#1F6FEB">
    <tr>
        <td>
            <table width="95%" align="center" border="0" cellpadding="30" cellspacing="0" bgcolor="#EAEAEA">
                <tr>
                    <td>
                        <font face="Georgia" size="5" color="#333333" align=center><b>Output Data Registrasi</b></font>
                        <hr color="#EEEEEE">
                        <br>
                        
                        <table border="0" cellpadding="5" cellspacing="0">
                            <?php
                                echo "<tr><td width='150'><font face='Georgia' size='2'>Nama Lengkap</font><td>: <font face='Georgia' size='2'>" . $_POST["nama"] . "</font>";
                                echo "<tr><td><font face='Georgia' size='2'>Email</font><td>: <font face='Georgia' size='2'>" . $_POST["email"] . "</font>";
                                echo "<tr><td><font face='Georgia' size='2'>Tujuan</font><td>: <font face='Georgia' size='2'>" . $_POST["tujuan"] . "</font>";
                                echo "<tr><td><font face='Georgia' size='2'>Layanan</font><td>: <font face='Georgia' size='2'>" . $_POST["layanan"] . "</font>";
                                
                                $fasilitas1 = isset($_POST["f1"]) ? $_POST["f1"] : "";
                                $fasilitas2 = isset($_POST["f2"]) ? $_POST["f2"] : "";
                                echo "<tr><td><font face='Georgia' size='2'>Fasilitas</font><td>: <font face='Georgia' size='2'>" . $fasilitas1 . " " . $fasilitas2 . "</font>";
                                
                                echo "<tr><td valign='top'><font face='Georgia' size='2'>Pesan</font><td>: <font face='Georgia' size='2'>" . $_POST["pesan"] . "</font>";
                            ?>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
</html>
