Strings and Patterns. Questions I answered wrong:<br/>
11<br>
'hello ' . 1 + 2 . '34' wordt: <?= 'hello ' . 1 + 2 . '34';?><br>
'hello ' . 1 + 2 . '34' wordt: <?= ((('hello ' . 1) + 2) . '34');?><br>
'6' . 1 + 2 . '34' wordt: <?= '6' . 1 + 2 . '34';?><br>
12<br>
<?= substr_replace ('john', 'jenny', 0, 8); ?><br>
20<br>
<?= strtok("This is\tan example\nstring", " ");echo strtok("\t");;echo strtok(" \n");echo strtok("\t ");?><br>
21<br>
<?= file_get_contents();
count(md5("1"))."\n"; echo count(md5("1asdasd", true));
strstr("sdfsdf", "d");?><br>

Security<br>
<br>

Webfeatures<br>
11<br>
The function dl()
The settings in php.ini to disable this function: dl_enable = 0 and add it to the list of disabled functions<br>
16<br>
select-box: <br>
multiple select: tag's property has to be a 'read array', so like 'whatever[]'<br>
id of the options: if no id is specified, then it's value becomes the id<br>
<br>
INPUT/OUTPUT<br>
6 & 7 & 8 & 10<br>
Functions; fopen, fgets, fgetss, fseek, rewind, file_get_contents, unlink, ftell, fread,<br>
<br>
70 Questions<br>

 2) Using class name as construct function if no __construct is defined in the class<br>
 3) SimpleXMLElement adding elements: $library->AddChild("d","booktitle")<br>
 4)<br>
 5) array_walk<br>
 6) Domdocument::loadHTML(file_get_contents(''));<br>
 8) http://php.net/manual/en/pdostatement.fetch.php<br>
 9) preg_match returns 1/0 if no third parameter is given<br>
10) PDO::query()<br>
12)<br>
14)<br>
17) ord('a') = 97 en ord('A')=65<br>
19) php.ini settings: allow_url_include en open_basedir zijn directives<br>
22)<br>
23)<br>
24)<br>
...<br>
67) late static binding nog eens doornemen, ah static::<br>
