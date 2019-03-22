<?php

$numeroaletorio= rand(0, 50063860);
$numerodigitado= -1;
$tentativas= 0;

while ($numerodigitado!=$numeroaletorio)
    {print "Digite um número e tente acertar: ";
    $numerodigitado= (int)fgets(STDIN);

    if ($numerodigitado>$numeroaletorio)
    {print "\nNúmero maior do que o certo\n";}

    if ($numerodigitado<$numeroaletorio)
    {print "\nNúmero menor do que o certo\n";}
    
    $tentativas++;}

print "\nNúmero certo\nVocê acertou... depois de $tentativas tentativas\n";
