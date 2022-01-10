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
## String-Punkt-Verbingung:
	    
`echo` "Anwendung der String-Punkt-Verbingung anhang eines Beispiels "."</p>";
```shell
 $a=10;
 $b =".Euro";
 echo $a . $b ."</p>";
```
echo "Reihenfolge der Inkrementiereung ++"."</p>";
$a = 7;
 $b= 3;
 # $a++ -> erst werden a und b addiert (7 + 3 = 10), anschließend wird $a inkrementiert.
 #D.h. für die Addition wird noch der alte Wert von $a benutzt.
 $erg=$a++ + $b ."</p>";
 echo $erg;
 $a = 7;
 $b= 3;
 # ++$a -> als erstes wird $a inkrementiert, danach werden $a und $b addiert (also 8 + 3 = 11).
 # D.h. für die Addition wird der neue Wert von $a benutzt.
 $erg= ++$a + $b ."</p>";
 echo $erg;

  # Mit Trennzeichen teilen >>strtok<<
  echo "Vierter Test" ."</p>";
  $a = "PHP ist immer toll";
  echo "Teil 1:".strtok($a," ")."</p>";
  echo "Teil 2:".strtok(" ")."</p>";
  echo "Teil 3:".strtok(" ")."</p>";
  echo "Teil 4:".strtok(" ")."</p>";

  # Mit Trennzeichen teilen >>strtok<< mit einer while-Schleife alternativ
  echo "Funfter Test" ."</p>";
  $a = "PHP ist  toll";
  $i = 1;#Wozu ist die eins hier?
 $start = strtok($a,"");
 while ($start){
   $name = "teil".$i;
   $$name = $start;
   $start = strtok("");
   $i++;
 }
 echo "Ohne leere Zeichen in der String, hat man als EG:"."</p>";
 echo "Teile 1: ".strtok($a,"") ."</p>";
 echo "Teile 2: ".strtok(" ") ."</p>";
 echo "Teile 3: ".strtok("") ."</p>";
 
 echo "Mit leere Zeichen in der String, hat man als EG:"."</p>";
 echo "Teile 1: ".strtok($a," ") ."</p>";
 echo "Teile 2: ".strtok(" ") ."</p>";
 echo "Teile 3: ".strtok("") ."<hr/>";
 
  
     echo "7.2.5 String und arrays"."</p>";
     echo "BSP 7.8 :Der string wird bei jeden Leerzeichen geteilt"."</p>"; 
     echo "und die einzelne Elemente der Arrays ausgegeben"."</p>";
     $a = "PHP ist toll";
     $string = explode(" ",$a);
     foreach($string as $element ){
     echo $element."<hr/>";
     }
     
  
     echo "BSP 7.6 :String anhang von leerzeichen und punkt in Einzelneteile zerlegen"."</p>";
     echo("Syntx:array explode(separator, OriginalString, NoOfElements)"."</p>");
      echo"BSP : "."</p>";
         // original string,hat 5 Elemente.
         $OriginalString = "Hello, How can we help you?";
          
         // Ohne optional parameter(NoOfElements):(werden alle Elemente gezeigt von 0 bis 5)
         print_r(explode(" ",$OriginalString));
         //Mit positive NoOfElements(werden die Elemente von 0 bis 4 gezeigt)
         print_r(explode(" ",$OriginalString,3));
         // Mit negative NoOfElements(werden  die 2 letzte Elemente nicht gezeigt)
         print_r(explode(" ",$OriginalString,-2));
         print_r(explode(" ",$OriginalString,2)."<hr/>");
     
         echo"7.13: Array in String verwandeln "."</p>";
         echo"Syntax: implode(Verbindungszeichen,Arrays) "."</p>";
         echo"Ohne Verbindungszeichen,werden elemente direkte aneinandergehängt"."</p>";
         echo"BSP : "."</p>";
         $werte = array("PHP","ist","toll"."<hr/>"."<hr/>");
         $ergebnis = implode(" ",$werte);
         echo $ergebnis;
     
         echo" 7.15:" ."</p>";
         echo "Buchstaben eines Strings in kleinbuchstaben umwandeln: "."</p>";
         $a = "Php IsT tolL"."</p>";
         echo strtolower($a);
     
         echo "Buchstaben eines Strings in Großbuchstaben umwandeln: "."</p>";
         $a = "Php IsT tolL"."</p>";
         echo strtoupper($a);
     
         echo "Erste zeichen eines Strings in einen Großbuchstaben verwandeln: "."</p>";
         $a = "php ist toll"."<hr/>";
         echo ucfirst($a);
     
     
         echo"7.4.1: Zeichen ausschneiden  mit >>substr(String,Startposition,Länge)<< "."</p>";
     echo "Position in einem String: -> 01234......-4-3-2-1 <-"."</p>";
     echo "String : der zugeschnittene String"."</p>";
     echo "Startposition: wo das abschneiden anfängt"."</p>";
     echo "Länge: optimal"."</p>";
     echo "Beispiele: "."</p>";
     
     $a = "PHP ist Toll";
     
         echo substr($a,4)."</p>";
       echo substr($a,4,3)."</p>";
       echo substr($a,-4)."</p>";
       echo substr($a,1,-1)."</p>";
       echo substr($a,8,-3)."<hr/>";
     
       echo "7.4.2 Whitespaces entfernen"."</p>";
       echo "BSP 1: mit trim(String), Whitespace am Anfang und
        am Ende der String entfernen"."</p>";
       $a = "  Leerzeichen  "."</p>";
       echo "Viele ".trim($a);
       echo "BSP 2: mit ltrim(String), Whitespace nur am Anfang der String entfernen"."</p>";
       $a = "  Leerzeichen  ";
       echo "Viele ".trim($a)."</p>";
       echo "BSP 3: mit rtrim(String) oder chop(String),
       Whitespace nur am Ende der  String entfernen"."</p>";
       $a = "  Leerzeichen  ";
       echo "Viele ".trim($a)."<hr/>";
     
     echo "7.5 : Suchen und Ersetzen "."</p>";
     echo "Die Funktion strpos(String,Suchstring,Beginn)
     ist für die Suche einer Position zuständig "."</p>";
     echo"BSP 1 : (abhängig von Groß und Kleinbuchstaben)"."</p>";
     $a = "Die blauen Reiter.";
     echo"Ausbage: " .strpos($a,"blau").": weil die Buchstabe >>b<< an der 4te Position liegt"."</p>";
     
     echo"BSP 2 : (Mit undefinierter Suchstring ,statt blau,rlau )"."</p>";
     $a = "Die blauen Reiter.";
     echo "Ausbage: ".strpos($a,"rlau")." :keine Ausgabe ,weil für rlau kein Suchstring vorliegt"."</p>";
     
     echo"BSP 3 : (Mit negativen Offset)"."</p>";
     $a = "Die blauen Reiter.";
     echo "Ausbage: ".strpos($a,"blau",-14).": entspricht -14 ,wenn von Ende der String aus gezählt wird.   "."</p>";
     
     echo"BSP 4 : (unabhängig von  Groß und Kleinbuchstaben)"."</p>";
     $a = "Die blauen Reiter.";
     echo "Ausbage: ".stripos($a,"Blau").": funktioniert genau so für >>blau<<"."</p>";
     
     echo"BSP 5 : Funktion strrpos(String,Suchstring) ist das Gegenstück von strpos(),
     Hier lauft die Suche von Links nach Rechts"."</p>";
     $a = "Die blauen Reiter.";
     echo"Ausbage: " .strrpos($a,"R").": abhängig von Groß und Kleinbuchstaben"."<hr/>";
     
     echo" 7.12 Reststring :
     liefert den Rest des Srings,wenn Suchstring auftaucht.
     Der Suchstring ist in Reststring enthalten"."</p>";
     $a = "Die blauen Reiter.";
     echo "Ausbage: ".strstr($a,"laue")."</p>";
     
     echo"strchr(String,Suchstring) ist das Alias(Also funktioniert genau so wie ) zu strstr()"."</p>";
     $a = "Die blauen Reiter.";
     echo "Ausbage: ".strchr($a,"laue")."<hr/>";
     
     
     echo "7.19 Haufigkeit des Vorkommens : "."</p>";
     echo "Die Funktion substr_count(String,Suchstring,Länge)  zählt, "."</p>";
     echo "wie oft einen Suchstring(eine Buchstabe) in einen String vorkommt"."</p>";
     $a = "Eine blauen Reiter.";
     echo "Ausbage: ".substr_count($a,"e")." Mal , Aber abhängig von Groß und Kleinbuchstaben"."<hr/>";
     
     echo "7.21 : Mehrere Zeichen suchen"."</p>";
     echo "Die Funktion strpbrk(String,Zeichen) erlaubt die Suche nach mehrere Zeichen"."</p>";
     echo "Sobalt eines der Zeichen gefunden wurde ,wird der gesamte String ausgegeben"."</p>";
     $a = "Die blauen Reiter.";
     echo "Ausgabe : ".strpbrk($a, "uxayi.")."  Dabei geht der Suchstring von Link nach Recht"."<hr/>";
     
     
     
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
