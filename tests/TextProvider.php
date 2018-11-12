<?php

namespace Tests;

class TextProvider
{

    public static function get()
    {
        return [
            [
                ['suerte', 'talento', 'vida'],
                'Aquel que dijo: "mas vale tener suerte que talento",
                conocia la esencia de la vida. La gente tiene miedo a
                reconocer que gran parte de la vida depende de la suerte,
                asusta pensar cuantas cosas escapan a nuestro control.',
                'Aquel que dijo: "mas vale tener ****** que *******",
                conocia la esencia de la ****. La gente tiene miedo a
                reconocer que gran parte de la **** depende de la ******,
                asusta pensar cuantas cosas escapan a nuestro control.'
            ],
            [
                ['conseguir', 'averiguar', 'que'],
                'Conseguir lo que quieres es tan dificil
                como no conseguir lo que quieres. Porque entonces tienes
                que averiguar que hacer con ello,
                en lugar de averiguar que hacer sin ello.',
                '********* lo *** quieres es tan dificil
                como no ********* lo *** quieres. Porque entonces tienes
                *** ********* *** hacer con ello,
                en lugar de ********* *** hacer sin ello.'
            ]
        ];
    }

}
