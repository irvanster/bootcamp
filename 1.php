<?php

function biodata()
{
    $json->name = "Tofa Maulana Irvan";
    $json->address = "Jl. Banjiran RT03/RW01, Warungasem 51252, Kabupaten Batang";
    $json->hobbies = array(
        'programming',
        'membaca',
        'jogging',
        'traveling',
    );
    $json->is_married = false;
    $json->school = "SMK Syafi'i Akrom Kota Pekalongan";
    //array of obj
    $json->skills = [
        [
            'web' => [
                'css',
                'HTML',
                'PHP',
                'Laravel',
                'Javascript',
            ],
            'networking' => [
                'Mikrotik',
            ],
        ],
    ];
    $result = json_encode($json);
    return $result;
}
echo '<pre>'.biodata().'</pre>';

?>