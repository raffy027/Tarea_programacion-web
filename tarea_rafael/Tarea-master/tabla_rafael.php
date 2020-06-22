<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla periodica </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>La Tabla Periódica De Los Elementos</h1>
<div class="tabla5">
<table> 

<?php



//todos los elementos de la tabla


$datos_de_la_tabla = array(array(
'1 <br> H <br> Hirogeno',
'2 <br> He <br> Helio',
'3 <br> Li <br> Litio',
'4 <br> Be <br> Berillio',
'5 <br> B <br> Boro',
'6 <br> C <br> Carbono',
'7 <br> N <br> Nitrogeno',
'8 <br> O <br> Oxigeno',
'9 <br> F <br> Fluor',
'10 <br> Ne <br> Neon',
'11 <br> Na <br> Sodio',
'12 <br> Mg <br> Magnecio',
'13 <br> Al <br> Alumnio',
'14 <br> Si <br> Silicio',
'15 <br> P <br> Fosforo',
'16 <br> S <br> Azufre',
'17 <br> Cl <br> Cloro',
'18 <br> Ar <br> Argon',
'19 <br> K <br> Potasio',
'20 <br> Ca <br> Calcio',
'21 <br> Sc <br> Escadio',
'22 <br> Ti <br> Titanio',
'23 <br> V <br> Vanadio',
'24 <br> Cr <br> Cromo',
'25 <br> Mn <br> Manganeso',
'26 <br> Fe <br> Hierro',
'27 <br> Co <br> Cobalto',
'28 <br> Ni <br> Niquel',
'29 <br> Cu <br> Cobre',
'30 <br> Zn <br> Zinc',
'31 <br> Ga <br> Galio',
'32 <br> Gr <br> Germanio',
'33 <br> As <br> Arsenico',
'34 <br> Se <br> Selenio',
'35 <br> Br <br> Bromo',
'36 <br> Kr <br> Kripton',     
'37 <br> Rb <br> Rubidio',
'38 <br> Sr <br> Estroncio',
'39 <br> Y <br> Itrio',
'40 <br> Zr <br> Circonio',
'41 <br> Nb <br> Niobio',
'42 <br> Mo <br> Molibdeno',
'43 <br> Tc <br> Tecnecio',
'44 <br> Ru <br> Rutenio',
'45 <br> Rh <br> Rodio',
'46 <br> Pd <br> Paladio',
'47 <br> Ag <br> Plata',
'48 <br> Cd <br> Cadmnio',
'49 <br> In <br> Indio',
'50 <br> Sn <br> Estaño',
'51 <br> Sb <br> Antimonio',
'52 <br> Te <br> Telurio',
'53 <br> I <br> Yodo',
'54 <br> Xe <br> Xenon',
'55 <br> Cs <br> Calsio',    
'56 <br> Ba <br> Bario',
'57 71<br>La-Lu<br>Lantanidos',
'72 <br> Hf <br> Hanfnio',
'73 <br> Ta <br> Tantalo',
'74 <br> W <br> Wolframio',
'75 <br> Re <br> Renio',
'76 <br> Os <br> Osmio',
'77 <br> Ir <br> Iridio',
'78 <br> Pt <br> Platino',
'79 <br> Au <br> Oro',
'80 <br> Hg <br> Mercurio',
'81 <br> Tl <br> Talio',
'82 <br> Pb <br> Plomo',
'83 <br> Bi <br> Bismuto',
'84 <br> Po <br> Polonio',
'85 <br> At <br> Astato',
'86 <br> Rn <br> Randon',  
'87 <br> Fr <br> Francio',
'88 <br> Ra <br> Radio',
'89 103<br>Ac-Lr<br>Antinidos',
'104 <br> Rf <br> Rutherfordio',
'105 <br> Db <br> Dubnio',
'106 <br> Sg <br> Seaborgio',
'107 <br> Bh <br> Bohirio',
'108 <br> Hs <br> Hasio',
'109 <br> Mt <br> Meltnerio',
'110 <br> Ds <br> Darmstatio',
'111 <br> Rg <br> Roetgenio',
'112 <br> Cn <br> Copernicio',
'113 <br> Nh <br> Nihonio',
'114 <br> Fl <br> Flerovio',
'115 <br> Mc <br> Mascovio',
'116 <br> Lv <br> Livermorio',
'117 <br> Ts <br> Teneso',
'118 <br> Og <br> Oganeson',
'57 <br> La <br> Lantano',
'58 <br> Ce <br> Cerio',
'59 <br> Pr <br> Praseodimio',
'60 <br> Nd <br> Neodimio',
'61 <br> Pm <br> Prometio',
'62 <br> Sm <br> Samario',
'63 <bR> Eu <br> Europio',
'64 <br> Gd <br> Gadolnio',
'65 <br> Tb <br> Terbio',
'66 <br> Dy <br> Disprosio',
'67 <br> Ho <br> Holmio',
'68 <br> Er <br> Erbio',
'69 <br> Tm <br> Tulio',
'70 <br> Yb <br> Lu',
'71 <br> Lu <br> Lutecio',
'89 <br> Ac <br> Actinio',
'90 <br> Th <br> Torio',
'91 <br> Pa <br> Protactinio',
'92 <br> U <br> Uranio',
'93 <br> Np <br> Neptunio',
'94 <br> Pu <br> Plutonio',
'95 <br> Am <br> Americio',
'96 <br> Cm <br> Curio',
'97 <br> Bk <br> Berkelio',
'98 <br> Cf <br> Californio',
'99 <br> Es <br> Einstenio',
'100 <br> Fm <br> Fermio',
'101 <br> Md <br> Mendelevio',
'102 <br> No <br> Nobelio',
'103 <br> Lr <br> Lawrencio',
'Alcalinos',
'Alcalinoterreos',
'Metales de Trancision/Bloque D',
'Lantanidos',
'Actinidos',
'Otros metales',
'Metaloides',
'Otros no Metales',
'Halogeneos',
'Gases Nobles',



));

 

?>










<?php 


for($m=0;$m<count($datos_de_la_tabla);$m++){?>

<tr>

<th class="Verde"><?php echo $datos_de_la_tabla[$m][0]?></th>
<td colspan="16"></td>
<th class="azul"><?php echo $datos_de_la_tabla[$m][1]?></th>

</tr>

<tr>
<th class="blanco"><?php echo $datos_de_la_tabla[$m][2]?></th>
<th class="moradoClaro"><?php echo $datos_de_la_tabla[$m][3]?></th>
<td colspan="10"></td>
<th class="AmarilloColor"><?php echo $datos_de_la_tabla[$m][4]?></th>
<th class="Verde"><?php echo $datos_de_la_tabla[$m][5]?></th>
<th class="Verde"><?php echo $datos_de_la_tabla[$m][6]?></th>
<th class="Verde"><?php echo $datos_de_la_tabla[$m][7]?></th>
<th class="azulOscuro"><?php echo $datos_de_la_tabla[$m][8]?></th>
<th class="azul"><?php echo $datos_de_la_tabla[$m][9]?></th>

</tr>

<tr>
<th class="blanco"><?php echo $datos_de_la_tabla[$m][10]?></th>
<th class="moradoClaro"><?php echo $datos_de_la_tabla[$m][11]?></th>
<td colspan="10"></td>
<th class="AmarilloColor2"><?php echo $datos_de_la_tabla[$m][12]?></th>
<th class="AmarilloColor"><?php echo $datos_de_la_tabla[$m][13]?></th>
<th class="Verde"><?php echo $datos_de_la_tabla[$m][14]?></th>
<th class="Verde"><?php echo $datos_de_la_tabla[$m][15]?></th>
<th class="azulOscuro"><?php echo $datos_de_la_tabla[$m][16]?></th>
<th class="azul"><?php echo $datos_de_la_tabla[$m][17]?></th>


</tr>
<tr>
<th class="blanco"><?php echo $datos_de_la_tabla[$m][18]?></th>
<th class="moradoClaro"><?php echo $datos_de_la_tabla[$m][19]?></th>
<th class="amarillo"><?php echo $datos_de_la_tabla[$m][20]?></th>
<th class="amarillo"><?php echo $datos_de_la_tabla[$m][21]?></th>
<th class="amarillo"><?php echo $datos_de_la_tabla[$m][22]?></th>
<th class="amarillo"><?php echo $datos_de_la_tabla[$m][23]?></th>
<th class="amarillo"><?php echo $datos_de_la_tabla[$m][24]?></th>
<th class="amarillo"><?php echo $datos_de_la_tabla[$m][25]?></th>
<th class="amarillo"><?php echo $datos_de_la_tabla[$m][26]?></th>
<th class="amarillo"><?php echo $datos_de_la_tabla[$m][27]?></th>
<th class="amarillo"><?php echo $datos_de_la_tabla[$m][28]?></th>
<th class="amarillo"><?php echo $datos_de_la_tabla[$m][29]?></th>
<th class="AmarilloColor2"><?php echo $datos_de_la_tabla[$m][30]?></th>
<th class="AmarilloColor"><?php echo $datos_de_la_tabla[$m][31]?></th>
<th class="AmarilloColor"><?php echo $datos_de_la_tabla[$m][32]?></th>
<th class="Verde"><?php echo $datos_de_la_tabla[$m][33]?></th>
<th class="azulOscuro"><?php echo $datos_de_la_tabla[$m][34]?></th>
<th class="azul"><?php echo $datos_de_la_tabla[$m][35]?></th>


</tr>
 
</tr>
<tr>
<th class="blanco"><?php echo $datos_de_la_tabla[$m][36]?></th>
<th class="moradoClaro"><?php echo $datos_de_la_tabla[$m][37]?></th>
<th class="amarillo"><?php echo $datos_de_la_tabla[$m][38]?></th>
<th class="amarillo"><?php echo $datos_de_la_tabla[$m][39]?></th>
<th class="amarillo"><?php echo $datos_de_la_tabla[$m][40]?></th>
<th class="amarillo"><?php echo $datos_de_la_tabla[$m][41]?></th>
<th class="amarillo"><?php echo $datos_de_la_tabla[$m][42]?></th>
<th class="amarillo"><?php echo $datos_de_la_tabla[$m][43]?></th>
<th class="amarillo"><?php echo $datos_de_la_tabla[$m][44]?></th>
<th class="amarillo"><?php echo $datos_de_la_tabla[$m][45]?></th>
<th class="amarillo"><?php echo $datos_de_la_tabla[$m][46]?></th>
<th class="amarillo"><?php echo $datos_de_la_tabla[$m][47]?></th>
<th class="AmarilloColor2"><?php echo $datos_de_la_tabla[$m][48]?></th>
<th class="AmarilloColor2"><?php echo $datos_de_la_tabla[$m][49]?></th>
<th class="AmarilloColor"><?php echo $datos_de_la_tabla[$m][50]?></th>
<th class="AmarilloColor"><?php echo $datos_de_la_tabla[$m][51]?></th>
<th class="azulOscuro"><?php echo $datos_de_la_tabla[$m][52]?></th>
<th class="azul"><?php echo $datos_de_la_tabla[$m][53]?></th>


</tr>



<tr>
<th class="blanco"><?php echo $datos_de_la_tabla[$m][54]?></th>
<th class="moradoClaro"><?php echo $datos_de_la_tabla[$m][55]?></th>
<th class="amarilloClaro"><?php echo $datos_de_la_tabla[$m][56]?></th>
<th class="amarillo"><?php echo $datos_de_la_tabla[$m][57]?></th>
<th class="amarillo"><?php echo $datos_de_la_tabla[$m][58]?></th>
<th class="amarillo"><?php echo $datos_de_la_tabla[$m][59]?></th>
<th class="amarillo"><?php echo $datos_de_la_tabla[$m][60]?></th>
<th class="amarillo"><?php echo $datos_de_la_tabla[$m][61]?></th>
<th class="amarillo"><?php echo $datos_de_la_tabla[$m][62]?></th>
<th class="amarillo"><?php echo $datos_de_la_tabla[$m][63]?></th>
<th class="amarillo"><?php echo $datos_de_la_tabla[$m][64]?></th>
<th class="amarillo"><?php echo $datos_de_la_tabla[$m][65]?></th>
<th class="AmarilloColor2"><?php echo $datos_de_la_tabla[$m][66]?></th>
<th class="AmarilloColor2"><?php echo $datos_de_la_tabla[$m][67]?></th>
<th class="AmarilloColor2"><?php echo $datos_de_la_tabla[$m][68]?></th>
<th class="AmarilloColor"><?php echo $datos_de_la_tabla[$m][69]?></th>
<th class="azulOscuro"><?php echo $datos_de_la_tabla[$m][70]?></th>
<th class="azul"><?php echo $datos_de_la_tabla[$m][71]?></th>

</tr>
<tr>
<th class="blanco"><?php echo $datos_de_la_tabla[$m][72]?></th>
<th class="moradoClaro"><?php echo $datos_de_la_tabla[$m][73]?></th>
<th class="amarilloOscuro1"><?php echo $datos_de_la_tabla[$m][74]?></th>
<th class="amarillo"><?php echo $datos_de_la_tabla[$m][75]?></th>
<th class="amarillo"><?php echo $datos_de_la_tabla[$m][76]?></th>
<th class="amarillo"><?php echo $datos_de_la_tabla[$m][77]?></th>
<th class="amarillo"><?php echo $datos_de_la_tabla[$m][78]?></th>
<th class="amarillo"><?php echo $datos_de_la_tabla[$m][79]?></th>
<th class="amarillo"><?php echo $datos_de_la_tabla[$m][80]?></th>
<th class="amarillo"><?php echo $datos_de_la_tabla[$m][81]?></th>
<th class="amarillo"><?php echo $datos_de_la_tabla[$m][82]?></th>
<th class="amarillo"><?php echo $datos_de_la_tabla[$m][83]?></th>
<th class="AmarilloColor2"><?php echo $datos_de_la_tabla[$m][84]?></th>
<th class="AmarilloColor2"><?php echo $datos_de_la_tabla[$m][85]?></th>
<th class="AmarilloColor2"><?php echo $datos_de_la_tabla[$m][86]?></th>
<th class="AmarilloColor2"><?php echo $datos_de_la_tabla[$m][87]?></th>
<th class="azulOscuro"><?php echo $datos_de_la_tabla[$m][88]?></th>
<th class="azul"><?php echo $datos_de_la_tabla[$m][89]?></th>


</tr>
 
 

 </table>

</div>

<div class="tabla_rafael">  
<table> 
 

<tr>
<th class="amarilloClaro"><?php echo $datos_de_la_tabla[$m][90]?></th>
<th class="amarilloClaro"><?php echo $datos_de_la_tabla[$m][91]?></th>
<th class="amarilloClaro"><?php echo $datos_de_la_tabla[$m][92]?></th>
<th class="amarilloClaro"><?php echo $datos_de_la_tabla[$m][93]?></th>
<th class="amarilloClaro"><?php echo $datos_de_la_tabla[$m][94]?></th>
<th class="amarilloClaro"><?php echo $datos_de_la_tabla[$m][95]?></th>
<th class="amarilloClaro"><?php echo $datos_de_la_tabla[$m][96]?></th>
<th class="amarilloClaro"><?php echo $datos_de_la_tabla[$m][97]?></th>
<th class="amarilloClaro"><?php echo $datos_de_la_tabla[$m][98]?></th>
<th class="amarilloClaro"><?php echo $datos_de_la_tabla[$m][99]?></th>
<th class="amarilloClaro"><?php echo $datos_de_la_tabla[$m][100]?></th>
<th class="amarilloClaro"><?php echo $datos_de_la_tabla[$m][101]?></th>
<th class="amarilloClaro"><?php echo $datos_de_la_tabla[$m][102]?></th>
<th class="amarilloClaro"><?php echo $datos_de_la_tabla[$m][103]?></th>
<th class="amarilloClaro"><?php echo $datos_de_la_tabla[$m][104]?></th>
</tr>
<tr>
<th class="amarilloOscuro1"><?php echo $datos_de_la_tabla[$m][105]?></th>
<th class="amarilloOscuro1"><?php echo $datos_de_la_tabla[$m][106]?></th>
<th class="amarilloOscuro1"><?php echo $datos_de_la_tabla[$m][107]?></th>
<th class="amarilloOscuro1"><?php echo $datos_de_la_tabla[$m][108]?></th>
<th class="amarilloOscuro1"><?php echo $datos_de_la_tabla[$m][109]?></th>
<th class="amarilloOscuro1"><?php echo $datos_de_la_tabla[$m][110]?></th>
<th class="amarilloOscuro1"><?php echo $datos_de_la_tabla[$m][111]?></th>
<th class="amarilloOscuro1"><?php echo $datos_de_la_tabla[$m][112]?></th>
<th class="amarilloOscuro1"><?php echo $datos_de_la_tabla[$m][113]?></th>
<th class="amarilloOscuro1"><?php echo $datos_de_la_tabla[$m][114]?></th>
<th class="amarilloOscuro1"><?php echo $datos_de_la_tabla[$m][115]?></th>
<th class="amarilloOscuro1"><?php echo $datos_de_la_tabla[$m][116]?></th>
<th class="amarilloOscuro1"><?php echo $datos_de_la_tabla[$m][117]?></th>
<th class="amarilloOscuro1"><?php echo $datos_de_la_tabla[$m][118]?></th>
<th class="amarilloOscuro1"><?php echo $datos_de_la_tabla[$m][119]?></th>
</tr>

 
      
</table>

</div>


<div class="tabla_rafael">

<div class="flex"> 
 <h3 class="item1">Metales</h3>
 <div class="item3"></div>
 <h3 class="item2">No metales</h3>

 </div>
    <table>  
    <tr>
    <th class="blanco"> <?php echo $datos_de_la_tabla[$m][120]?></th>
    <th class="moradoClaro"> <?php echo $datos_de_la_tabla[$m][121]?></th>
    <th class="amarillo"> <?php echo $datos_de_la_tabla[$m][122]?></th>
    <th class="amarilloClaro"> <?php echo $datos_de_la_tabla[$m][123]?></th>
    <th class="amarilloOscuro1"> <?php echo $datos_de_la_tabla[$m][124]?></th>
    <th class="AmarilloColor2"> <?php echo $datos_de_la_tabla[$m][125]?></th>
    <th class="AmarilloColor"> <?php echo $datos_de_la_tabla[$m][126]?></th>
    <th class="Verde"> <?php echo $datos_de_la_tabla[$m][127]?></th>
    <th class="azulOscuro"> <?php echo $datos_de_la_tabla[$m][128]?></th>
    <th class="azul"> <?php echo $datos_de_la_tabla[$m][129]?></th>
    </tr>
    </table>
</div>
    <?php }
      ?>

<footer class="footer mt-auto py-3 bg-dark">
  <div class="container">
    <span class="text-muted">Rafael Duarte Rosario  2018-6662</span>
    
  </div>
</footer>

</body>
</html>
