<?php

require('src/functions.php');
// task 1
$someArray = ['первая строка ', 'вторая строка ', 'третья строка ', 'четвертая строка ', 'пятая строка ', 'шестая строка '];
echoString($someArray, true);

// task 2
calcEverything('-', 96, 4, 2, 2);
echo '<br><br><br>';

// task 3
multiplicationTable(8, 8);

// task 4
unixTime();

// task 5
strFunctions();


// task 6
makeReadFile();
