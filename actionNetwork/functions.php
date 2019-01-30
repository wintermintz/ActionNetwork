<?php require_once($_SERVER['DOCUMENT_ROOT']."/_sanitize/sanitize_input.php");$var_arr = get_defined_vars();sanitize_vars($var_arr);?>
<?php require_once($_SERVER['DOCUMENT_ROOT']."/_sanitize/sanitize_input.php");$var_arr = get_defined_vars();
sanitize_vars($var_arr);?>
<?php function clean_search($searchString){
$search = stripslashes(trim($searchString));
$search2 = str_replace("&", " ", $search);
$search2 = str_replace("  ", " ", $search2);
$search2 = str_replace("\?", "%", $search2);
$search2 = str_replace("\"", "%", $search2);

$search2 = str_replace("\;", "%", $search2);
$search2 = str_replace("'", "%", $search2);
$search2 = str_replace(" ", "%", $search2);
$search2 = str_replace("%%", "%", $search2);
$search2 = mysql_real_escape_string($search2);
return $search2;}

function clean_result($searchString){
$search = stripslashes(trim($searchString));
$search2 = str_replace("&", " ", $search);
$search2 = str_replace("  ", " ", $search2);
$search2 = str_replace("\?", "%", $search2);
$search2 = str_replace("\"", "%", $search2);

$search2 = str_replace("\;", "%", $search2);

$search2 = str_replace(" ", "%", $search2);
$search2 = str_replace("%%", "%", $search2);


$search2 = str_replace("%", " ", $search2);
return $search2;}
function sanitize( $input )
    {
        // $input = preg_replace( "/[".chr(0)."-".chr(31)."]/", "", $input );
        $input = preg_replace( "/[".chr(127)."]/", "", $input );
        $input = preg_replace( "/[".chr(192).chr(193).chr(194).chr(195).chr(196).chr(197)."]/", "A", $input );
        $input = preg_replace( "/[".chr(198)."]/", "AE", $input );
        $input = preg_replace( "/[".chr(199)."]/", "C", $input );
        $input = preg_replace( "/[".chr(208)."]/", "D", $input );
        $input = preg_replace( "/[".chr(200).chr(201).chr(202).chr(203)."]/", "E", $input );
        $input = preg_replace( "/[".chr(204).chr(205).chr(206).chr(207)."]/", "I", $input );
        $input = preg_replace( "/[".chr(209)."]/", "N", $input );
        $input = preg_replace( "/[".chr(210).chr(211).chr(212).chr(213).chr(214).chr(216)."]/", "O", $input );
        $input = preg_replace( "/[".chr(140)."]/", "OE", $input );
        $input = preg_replace( "/[".chr(222)."]/", "P", $input );
        $input = preg_replace( "/[".chr(138).chr(154)."]/", "S", $input );
        $input = preg_replace( "/[".chr(217).chr(218).chr(219).chr(220)."]/", "U", $input );
        $input = preg_replace( "/[".chr(159).chr(221)."]/", "Y", $input );
        $input = preg_replace( "/[".chr(142)."]/", "Z", $input );
        $input = preg_replace( "/[".chr(224).chr(225).chr(226).chr(227).chr(228).chr(229)."]/", "a", $input );
        $input = preg_replace( "/[".chr(230)."]/", "ae", $input );
        $input = preg_replace( "/[".chr(231)."]/", "c", $input );
        $input = preg_replace( "/[".chr(232).chr(233).chr(234).chr(235)."]/", "e", $input );
        $input = preg_replace( "/[".chr(131)."]/", "f", $input );
        $input = preg_replace( "/[".chr(236).chr(237).chr(238).chr(239)."]/", "i", $input );
        $input = preg_replace( "/[".chr(241)."]/", "n", $input );
        $input = preg_replace( "/[".chr(242).chr(243).chr(244).chr(245).chr(246).chr(248).chr(240)."]/", "o", $input );
        $input = preg_replace( "/[".chr(156)."]/", "oe", $input );
        $input = preg_replace( "/[".chr(254)."]/", "p", $input );
        $input = preg_replace( "/[".chr(223)."]/", "s", $input );
        $input = preg_replace( "/[".chr(181).chr(249).chr(250).chr(251).chr(252)."]/", "u", $input );
        $input = preg_replace( "/[".chr(215)."]/", "x", $input );
        $input = preg_replace( "/[".chr(253).chr(255)."]/", "y", $input );
        $input = preg_replace( "/[".chr(158)."]/", "z", $input );
        $input = preg_replace( "/[".chr(129).chr(141).chr(143).chr(144).chr(157)."]/", " ", $input );
        $input = preg_replace( "/[".chr(130).chr(145).chr(146).chr(180)."]/", chr(39), $input );
        $input = preg_replace( "/[".chr(132).chr(147).chr(148)."]/", chr(34), $input );
        $input = preg_replace( "/[".chr(139)."]/", chr(60), $input );
        $input = preg_replace( "/[".chr(155)."]/", chr(62), $input );
        $input = preg_replace( "/[".chr(171)."]/", chr(60).chr(60), $input );
        $input = preg_replace( "/[".chr(187)."]/", chr(62).chr(62), $input );
        $input = preg_replace( "/[".chr(136)."]/", chr(94), $input );
        $input = preg_replace( "/[".chr(161)."]/", chr(33), $input );
        $input = preg_replace( "/[".chr(191)."]/", chr(63), $input );
        $input = preg_replace( "/[".chr(152)."]/", chr(126), $input );
        $input = preg_replace( "/[".chr(160)."]/", chr(32), $input );
        $input = preg_replace( "/[".chr(133)."]/", "...", $input );
        $input = preg_replace( "/[".chr(150).chr(151).chr(175)."]/", "-", $input );
        $input = preg_replace( "/[".chr(166)."]/", "|", $input );
        $input = preg_replace( "/[".chr(134).chr(135)."]/", "+", $input );
        $input = preg_replace( "/[".chr(149)."]/", "*", $input );
        $input = preg_replace( "/[".chr(183)."]/", ".", $input );
        $input = preg_replace( "/[".chr(184)."]/", ",", $input );
        $input = preg_replace( "/[".chr(185)."]/", "1", $input );
        $input = preg_replace( "/[".chr(178)."]/", "2", $input );
        $input = preg_replace( "/[".chr(179)."]/", "3", $input );
        $input = preg_replace( "/[".chr(188)."]/", "1/4", $input );
        $input = preg_replace( "/[".chr(189)."]/", "1/2", $input );
        $input = preg_replace( "/[".chr(190)."]/", "3/4", $input );
        $input = preg_replace( "/[".chr(128).chr(137).chr(153).chr(162).chr(163).chr(164).chr(165).chr(167).chr(168).chr(169).chr(170).chr(172).chr(173).chr(174).chr(176).chr(177).chr(182).chr(186).chr(247)."]/", "", $input );

        return $input;
    }


$var_arr = get_defined_vars();

$post_arr = $var_arr['_POST'];
$post_key = array_keys($post_arr);

$get_arr = $var_arr['_GET'];
$get_key = array_keys($get_arr);

for ($p_a = 0; $p_a < sizeof($post_key); $p_a++)
{
$_POST[$post_key[$p_a]] = filter_var($_POST[$post_key[$p_a]], FILTER_SANITIZE_SPECIAL_CHARS);
}

for ($g_a = 0; $g_a < sizeof($get_key); $g_a++)
{
$_GET[$get_key[$g_a]] = filter_var($_GET[$get_key[$g_a]], FILTER_SANITIZE_SPECIAL_CHARS);
}	

?>