<?php
$data = [
    'name' => 'onion',
    'age' => '23',
    'word' => '遇到困難時不要抱怨，既然改變不了過去，那麼就努力改變未來。',
];

function dd($data)
{
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}

// dd($data);

$myJSON = json_encode($data);

echo $myJSON;