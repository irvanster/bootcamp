<?php
function sn()
{
    $template   = 'XX99-XX99-99XX-99XX';
    $k = strlen($template);
    $sn = '';
    for ($i=0; $i<$k; $i++)
    {
        switch($template[$i])
        {
            case 'X': $sn .= chr(rand(65,90)); break;
            case '9': $sn .= rand(0,9); break;
            case '-': $sn .= '-';  break; 
        }
    }
    return $sn;
}
echo '<pre>';

for ($i=0; $i < 300; $i++) echo sn(), '<br/>';

echo '</pre>';
?>    