<html>
    <head>
	<link rel="stylesheet" type="text/css" href="style.css">
        <title>PHP Test-Container</title>
    </head>
    <body>
<div class='message'>
        <h1>Hey Valentin</h1>
        <h2>Wann wollen wir am Sonntag für PHP treffen ?</h2>
        <h3>Was passt dir am besten, vor oder nach dem Tanzen ?</h3>
</div>
      
<script> alert("wir werden uns die Aufgaben bei tanzen teilen,einer macht Musik der andere macht controlle");</script>



<?php 

$a = "Die blauen Reiter.";
echo "Ausgabe : ";
var_dump(str_starts_with($a,"Die"));
var_dump(str_ends_with($a,"."));

echo" 7.5.2 Suchen & Ersetzen:  "."</p>";
echo"Mit der funktion substr_replace(String,Ersatz,Startposition,länge) Funktioniert wie substr()"."</p>";
echo"Dabei sind negative Werte sowohl für den startposition  als auch für die Länge möglich"."</p>";
echo"angegebene Bereich werden nicht ausgeschnitten sondern ersetzt "."</p>";
$a = "Die roten Reiter.";
echo"Ausgabe : ".substr_replace($a,"blauen",4,5)."<hr/>";

echo"7.25 Such & Ersetz : "."</p>";
echo"braucht man substr_replace(Suchstring,Ersatz,String)"."</p>";
$a = "jippieeejey";
echo "Ausgabe : ".str_replace("e","i",$a)." .Hier werden alle >>e<< in >>i<< ausgetauscht"."<hr/>";

echo"Mehrere Zeichen ersetzen : "."</p>";
echo"Die Funktion strtr(String,Suchstring,Ersatz) funktioniert wie die strpbrk() : "."</p>";
echo"BSP 1 : "."</p>";
$a = (" er arbeitet und Hotel ");
echo "Ausgabe 1: ". strtr($a,"und","ins")."</p>";

echo "Die Funktion strtr(String,Array) funktioniert genau sowie strtr(String,Suchstring,Ersatz) aus BSP 1 "."</p>";
echo"BSP 2 : "."</p>";
$a = (" er arbeitet und Hotel ");
echo "Ausgabe 2: ". strtr($a,array("und"=>"ins"))."<hr/>";

echo "7.29 : Entwerten mit Backslash"."<br/>\n ";
echo "addslashes() und stripslashes() sind vor allem fuer Datenbankabfragen wichtig."."<br/>\n ";
echo "Mit addslashes(String) werden alle Vorkommen von betimmten Zeichen mit Backslash geschuetzt."."<br/>\n ";
   
echo "BSP 1 : "."<br/>\n ";
$string = "PHP ' s string functions ";
$result = addslashes($string);
echo $result."<br/>\n ";

echo "BSP 2 : "."<br/>\n ";
$string = 'PHP " s string functions ';
$result = addslashes($string);
echo $result."<br/>\n ";

echo "BSP 3 : "."<br/>\n ";
$string = "PH \ s string functions ";
$result = addslashes($string);
echo $result."<br/>\n ";

echo "wir verwenden  stripslashes(String), 
um die Entwertung addslashes() wieder Ruckgangig zu machen. Dabei werden Sonderzeichen wie \n ignoriert "."<br/>\n ";
echo "BSP 4 : "."<br/>\n ";
$string = "PHP's \string\ functions ";
$result = stripslashes($string);
echo $result."<br/>\n ";

echo "BSP 5 : "."<br/>\n ";
$a = ' Caesar sagte : "Ich kam,sah und siegte! " ';
$a = addslashes($a);
echo"Mit Backslash  :".$a;
$a = stripslashes($a);
echo"<br /> Ohne : ".$a."<hr/>";

echo" Entwerten-fuer reguläre Ausdruecke  ist ähnlich wie in SQL: "."<br/>\n ";
echo"Die PHP-Funktion quotemeta() wird verwendet, 
um einen umgekehrten Schrägstrich vor einigen vordefinierten Meta-Zeichen in der Zeichenfolge hinzuzufügen "."<br/>\n ";
echo"vordefinierten Meta-Zeichen: . \\ + * ? [^]  ( $ ) "."<br/>\n ";
echo "BSP :"."<br/>\n ";
$a = "Ergibt 50  * (5-3) 100?";
echo quotemeta($a)."<br/>\n ";
echo "Zum Rueckwandeln stripslashesa() verwenden : "."<br/>\n ";
$a = "Ergibt 50  * (5-3) 100?";
echo stripslashes($a)."<hr/>";


echo" 7.31 : Sonderzeichen umwandeln mit htmlentities(): "."<br/>\n ";
echo" Alle HTML relevante Sonderzeichen in einem String koennen mit der Funktion htmlentities() umwandeln"."<br/>\n ";
echo" BSP: "."<br/>\n";
$a = 'Umlaute : "Ä","ä","Ö","ö","Ü","ü"'; 
echo"Ohne Umwandlung: ".$a."<br/>\n";
echo" Mit Umwandlung : ".htmlentities($a)."</p>";

echo" Die Funktion htmlspecialchars(String , Anfuehrungszeichen, Zeichensatz) funktiniert genau so wie htmlentities()"."<br/>\n ";
echo "KONVERTIERT ABER NICHT ALLLE  HTML_ Sonderzeichen. konvertiert werden <>, ' ," ."<br/>\n ";


?>
    
<hr>
Ich habe nämlich viel Frauen für dich am Sonntag
<div class="center">
  <div class="wave"></div>
  <div class="wave"></div>
  <div class="wave"></div>
  <div class="wave"></div>
  <div class="wave"></div>
  <div class="wave"></div>
  <div class="wave"></div>
  <div class="wave"></div>
  <div class="wave"></div>
  <div class="wave"></div>

</div>

    </body>
</html>