Strings and Patterns. Questions I answered wrong:<br/>
11<br>
'hello ' . 1 + 2 . '34' wordt: <?= 'hello ' . 1 + 2 . '34';?><br>
12<br>
<?= substr_replace ('john', 'jenny', 0, 8); ?><br>
20<br>
<?= strtok("This is\tan example\nstring", " ");echo strtok("\t");;echo strtok(" \n");echo strtok("\t ");?><br>
21<br>
<?= count(md5("1"))."\n"; echo count(md5("1asdasd", true));
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
Functions; fopen, fgets, fgetss, fseek, rewind, file_get_contents, unlink, ftell, fread,