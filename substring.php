<?php 
$s="abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!\"#$%&'()*+,-./:;<=>?@[\\]^_`{|}~ ";
function sub($s)
{
    $max=0;
    $mes='';
    $lmes='';
    $cnt=0;
    for($i1=0;$i1<=(strlen($s)-1);$i1++)
    {
        for($i2=$i1;$i2<=(strlen($s)-1);$i2++)
        {
            if(!preg_match('/'.preg_quote($s[$i2],'/').'/',$mes))
            {
              $mes.=$s[$i2];
              $cnt++;

            }
            else
            {
             if($cnt>$max)
             {
                $max=$cnt;    
                $lmes=$mes;    
             }
             $cnt=0;
             $mes='';
             break;
            }
        }
    }
    print($lmes. " ");
    if($cnt>$max)
    {
        return $cnt;
    }
    else
    {
        return $max;
    }
}
print(sub($s));
?>