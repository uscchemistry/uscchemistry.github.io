<?php
$content = file_get_contents('https://calendar.google.com/calendar/embed?src=lkbnld2d4r618gvimnuisgp5nmgp6ulu%40import.calendar.google.com&ctz=America%2FLos_Angeles');
$content = str_replace('</title>','</title><base href="https://www.google.com/calendar/" />', $content);
$content = str_replace('</head>','<link rel="stylesheet" href="https://uscchemistry.github.io/docs/google-calendar/custom_calendar.css" /></head>', $content);
echo $content;
