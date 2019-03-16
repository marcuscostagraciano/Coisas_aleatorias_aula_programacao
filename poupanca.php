<?php

$dinheiro=0;
print "Poupar até quantos reais? ";
$pouparate= (float) fgets(STDIN);

print "Poupar de quanto em quanto? ";
$poupardinheirinhos= (float) fgets(STDIN);

while ($dinheiro < $pouparate)
 {$dinheiro= ($dinheiro+$poupardinheirinhos)+($dinheiro*0.37);
  $mesesguardados= $dinheiro/$poupardinheirinhos;
  }

$dinheiro= round($dinheiro, 2);
$mesesguardados= round($mesesguardados);
$anos= $mesesguardados/12;
  
print "\nVocê economizou $mesesguardados meses até ter $dinheiro reais\n";
