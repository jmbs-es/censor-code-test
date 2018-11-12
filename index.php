<?php
error_reporting(E_ALL); 
/**
 * Simple script to replace banned words by asterisk with the same lenght as the replaced word
 */
$text = 'Aquel que dijo: "mas vale tener suerte que talento",
                conocia la esencia de la vida. La gente tiene miedo a
                reconocer que gran parte de la vida depende de la suerte,
                asusta pensar cuantas cosas escapan a nuestro control.';
$words = ['suerte', 'talento', 'vida'];
$text = preg_replace_callback('~(?:'.implode('|',$words).')~i', function($matches){
    return str_repeat('*', strlen($matches[0]));
}, $text);
echo $text; 

echo '<br>';
echo '<br>';

$text = 'Conseguir lo que quieres es tan dificil
                como no conseguir lo que quieres. Porque entonces tienes
                que averiguar que hacer con ello,
                en lugar de averiguar que hacer sin ello.';
$words = ['conseguir', 'averiguar', 'que'];
$text = preg_replace_callback('~\b(?:'.implode('|',$words).')\b~i', function($matches){
    return str_repeat('*', strlen($matches[0]));
}, $text);
echo $text; 

/*
$text = preg_replace_callback('~(?:'.implode('|',$words).')~i', function($matches){
    return str_repeat('*', strlen($matches[0]));
}, $text);
*/

echo '<br>expected:<br>';
echo '********* lo *** quieres es tan dificil
                como no ********* lo *** quieres. Porque entonces tienes
                *** ********* *** hacer con ello,
                en lugar de ********* *** hacer sin ello.';
echo '<br>';

/**
 * With Loop and special chars like á in más
 */
 $words = ['suerte', 'talento', 'vida', 'más'];
$text = 'Aquel que dijo: "más vale tener suerte que talento",
                conocia la esencia de la vida. La gente tiene miedo a
                reconocer que gran parte de la vida depende de la suerte,
                asusta pensar cuantas cosas escapan a nuestro control.';

foreach ($words as $word) {
    $text = preg_replace_callback("~\b$word\b~i", function($matches) use ($word) {
        return str_ireplace($word, str_repeat('*', mb_strlen($word)), $matches[0]);
    }, $text);
}
echo $text, PHP_EOL;
