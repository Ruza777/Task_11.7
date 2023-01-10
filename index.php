<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>PHP-Start</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <caption>Задание 1. Таблица истинности PHP</caption>
<table>

    <tr class="them">
        <td>A</td>
        <td>B</td>
        <td>!A</td>
        <td>A||B</td>
        <td>A&&B</td>
        <td>A xor B</td>
        
    </tr>
    <tr>
        <td><?php echo $a1=0; ?></td>
        <td><?php echo $b1=0; ?></td>
        <td><?php var_export (!$a1); ?></td>
        <td><?php var_export ($a1||$b1); ?></td>
        <td><?php var_export ($a1 && $b1); ?></td>
        <td><?php var_export ($a1 xor $b1); ?></td>
    </tr>
    <tr>
        <td><?php echo $a1; ?></td>
        <td><?php echo $b2=1 ; ?></td>
        <td><?php var_export (!$a1); ?></td>
        <td><?php var_export ($a1 || $b2); ?></td>
        <td><?php var_export ($a1 && $b2); ?></td>
        <td><?php var_export ($a1 xor $b2); ?></td>
    </tr>
    <tr>
        <td><?php echo $a2=1; ?></td>
        <td><?php echo $b1 ; ?></td>
        <td><?php var_export (!$a2); ?></td>
        <td><?php var_export ($a2 || $b1); ?></td>
        <td><?php var_export ($a2 && $b1); ?></td>
        <td><?php var_export ($a2 xor $b1); ?></td>
    <tr>
        <td><?php echo $a2; ?></td>
        <td><?php echo $b2; ?></td>
        <td><?php var_export (!$a2); ?></td>
        <td><?php var_export ($a2 || $b2); ?></td>
        <td><?php var_export ($a2 && $b2); ?></td>
        <td><?php var_export ($a2 xor $b2); ?></td>
    </tr>
</table>
<br>


<caption>Задание 2. Гибкое сравнение в PHP</caption>

<table>
<tr class="them">

        <td></td>
        <td><?php echo $a='True'; ?> </td>
        <td><?php echo $b='false'; ?></td>
        <td><?php echo $c=1; ?></td>
        <td><?php echo $d=0; ?></td>
        <td><?php echo $f=-1; ?></td>
        <td><?php echo $g='1'; ?></td>
        <td><?php echo $h='null'; ?></td>
        <td><?php echo $j='php'; ?></td>
</tr>  
<tr>
    <td><?php echo $a; ?></td>
    <td><?php var_export ($a==$a); ?></td>
    <td><?php var_export ($b==$a); ?></td>
    <td><?php var_export ($c==$a); ?></td>
    <td><?php var_export ($d==$a); ?></td>
    <td><?php var_export ($f==$a); ?></td>
    <td><?php var_export ($g==$a); ?></td>
    <td><?php var_export ($h==$a); ?></td>
    <td><?php var_export ($j==$a); ?></td>
</tr>      
<tr>
    <td><?php echo $b; ?></td>
    <td><?php var_export ($a==$b); ?></td>
    <td><?php var_export ($b==$b); ?></td>
    <td><?php var_export ($c==$b); ?></td>
    <td><?php var_export ($d==$b); ?></td>
    <td><?php var_export ($f==$b); ?></td>
    <td><?php var_export ($g==$b); ?></td>
    <td><?php var_export ($h==$b); ?></td>
    <td><?php var_export ($j==$b); ?></td>
</tr>  
<tr>
    <td><?php echo $c; ?></td>
    <td><?php var_export ($a==$c); ?></td>
    <td><?php var_export ($b==$c); ?></td>
    <td><?php var_export ($c==$c); ?></td>
    <td><?php var_export ($d==$c); ?></td>
    <td><?php var_export ($f==$c); ?></td>
    <td><?php var_export ($g==$c); ?></td>
    <td><?php var_export ($h==$c); ?></td>
    <td><?php var_export ($j==$c); ?></td>
</tr>  
<tr>
    <td><?php echo $d;?></td>
    <td><?php var_export ($a==$d); ?></td>
    <td><?php var_export ($b==$d); ?></td>
    <td><?php var_export ($c==$d); ?></td>
    <td><?php var_export ($d==$d); ?></td>
    <td><?php var_export ($f==$d); ?></td>
    <td><?php var_export ($g==$d); ?></td>
    <td><?php var_export ($h==$d); ?></td>
    <td><?php var_export ($j==$d); ?></td>
</tr>  
<tr>
    <td><?php echo $f; ?></td>
    <td><?php var_export ($a==$f); ?></td>
    <td><?php var_export ($b==$f); ?></td>
    <td><?php var_export ($c==$f); ?></td>
    <td><?php var_export ($d==$f); ?></td>
    <td><?php var_export ($f==$f); ?></td>
    <td><?php var_export ($g==$f); ?></td>
    <td><?php var_export ($h==$f); ?></td>
    <td><?php var_export ($j==$f); ?></td>
</tr>  
<tr>
    <td><?php echo $g; ?></td>
    <td><?php var_export ($a==$g); ?></td>
    <td><?php var_export ($b==$g); ?></td>
    <td><?php var_export ($c==$g); ?></td>
    <td><?php var_export ($d==$g); ?></td>
    <td><?php var_export ($f==$g); ?></td>
    <td><?php var_export ($g==$g); ?></td>
    <td><?php var_export ($h==$g); ?></td>
    <td><?php var_export ($j==$g); ?></td>
</tr>  
<tr>
    <td><?php echo $h; ?></td>
    <td><?php var_export ($a==$h); ?></td>
    <td><?php var_export ($b==$h); ?></td>
    <td><?php var_export ($c==$h); ?></td>
    <td><?php var_export ($d==$h); ?></td>
    <td><?php var_export ($f==$h); ?></td>
    <td><?php var_export ($g==$h); ?></td>
    <td><?php var_export ($h==$h); ?></td>
    <td><?php var_export ($j==$h); ?></td>
</tr>  
<tr>
    <td><?php echo $j; ?></td>
    <td><?php var_export ($a==$j); ?></td>
    <td><?php var_export ($b==$j); ?></td>
    <td><?php var_export ($c==$j); ?></td>
    <td><?php var_export ($d==$j); ?></td>
    <td><?php var_export ($f==$j); ?></td>
    <td><?php var_export ($g==$j); ?></td>
    <td><?php var_export ($h==$j); ?></td>
    <td><?php var_export ($j==$j); ?></td>
</tr>  
</table>
<br>


<caption>Задание 3.Жёсткое сравнение в PHP</caption>
<table>
<tr class="them">

        <td></td>
        <td><?php echo $a; ?></td>
        <td><?php echo $b; ?></td>
        <td><?php echo $c; ?></td>
        <td><?php echo $d; ?></td>
        <td><?php echo $f; ?></td>
        <td><?php echo $g; ?></td>
        <td><?php echo $h; ?></td>
        <td><?php echo $j; ?></td>
</tr>  
<tr>
    <td><?php echo $a; ?></td>
    <td><?php var_export ($a===$a); ?></td>
    <td><?php var_export ($b===$a); ?></td>
    <td><?php var_export ($c===$a); ?></td>
    <td><?php var_export ($d===$a); ?></td>
    <td><?php var_export ($f===$a); ?></td>
    <td><?php var_export ($g===$a); ?></td>
    <td><?php var_export ($h===$a); ?></td>
    <td><?php var_export ($j===$a); ?></td>
</tr>      
<tr>
    <td><?php echo $b; ?></td>
    <td><?php var_export ($a===$b); ?></td>
    <td><?php var_export ($b===$b); ?></td>
    <td><?php var_export ($c===$b); ?></td>
    <td><?php var_export ($d===$b); ?></td>
    <td><?php var_export ($f===$b); ?></td>
    <td><?php var_export ($g===$b); ?></td>
    <td><?php var_export ($h===$b); ?></td>
    <td><?php var_export ($j===$b); ?></td>
</tr>  
<tr>
    <td><?php echo $c; ?></td>
    <td><?php var_export ($a===$c); ?></td>
    <td><?php var_export ($b===$c); ?></td>
    <td><?php var_export ($c===$c); ?></td>
    <td><?php var_export ($d===$c); ?></td>
    <td><?php var_export ($f===$c); ?></td>
    <td><?php var_export ($g===$c); ?></td>
    <td><?php var_export ($h===$c); ?></td>
    <td><?php var_export ($j===$c); ?></td>
</tr>  
<tr>
    <td><?php echo $d;?></td>
    <td><?php var_export ($a===$d); ?></td>
    <td><?php var_export ($b===$d); ?></td>
    <td><?php var_export ($c===$d); ?></td>
    <td><?php var_export ($d===$d); ?></td>
    <td><?php var_export ($f===$d); ?></td>
    <td><?php var_export ($g===$d); ?></td>
    <td><?php var_export ($h===$d); ?></td>
    <td><?php var_export ($j===$d); ?></td>
</tr>  
<tr>
    <td><?php echo $f; ?></td>
    <td><?php var_export ($a===$f); ?></td>
    <td><?php var_export ($b===$f); ?></td>
    <td><?php var_export ($c===$f); ?></td>
    <td><?php var_export ($d===$f); ?></td>
    <td><?php var_export ($f===$f); ?></td>
    <td><?php var_export ($g===$f); ?></td>
    <td><?php var_export ($h===$f); ?></td>
    <td><?php var_export ($j===$f); ?></td>
</tr>  
<tr>
    <td><?php echo $g; ?></td>
    <td><?php var_export ($a===$g); ?></td>
    <td><?php var_export ($b===$g); ?></td>
    <td><?php var_export ($c===$g); ?></td>
    <td><?php var_export ($d===$g); ?></td>
    <td><?php var_export ($f===$g); ?></td>
    <td><?php var_export ($g===$g); ?></td>
    <td><?php var_export ($h===$g); ?></td>
    <td><?php var_export ($j===$g); ?></td>
</tr>  
<tr>
    <td><?php echo $h; ?></td>
    <td><?php var_export ($a===$h); ?></td>
    <td><?php var_export ($b===$h); ?></td>
    <td><?php var_export ($c===$h); ?></td>
    <td><?php var_export ($d===$h); ?></td>
    <td><?php var_export ($f===$h); ?></td>
    <td><?php var_export ($g===$h); ?></td>
    <td><?php var_export ($h===$h); ?></td>
    <td><?php var_export ($j===$h); ?></td>
</tr>  
<tr>
    <td><?php echo $j; ?></td>
    <td><?php var_export ($a===$j); ?></td>
    <td><?php var_export ($b===$j); ?></td>
    <td><?php var_export ($c===$j); ?></td>
    <td><?php var_export ($d===$j); ?></td>
    <td><?php var_export ($f===$j); ?></td>
    <td><?php var_export ($g===$j); ?></td>
    <td><?php var_export ($h===$j); ?></td>
    <td><?php var_export ($j===$j); ?></td>
</tr>  
</table>
<br>
<br>

<p>Выводы о гибком и жестком сравнении.</p>
<p> Как и положенно при гибком сравнении оператор == пытается преобразовать переменные в числа, <br>
а при жестком сравнении сравниваются переменные без преобразований.<br>
Это видно при сравнении строчной переменной '1' ($g='1') с числовой переменной 1 ($c=1). </p>


</body>



</html>