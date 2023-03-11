<?php
// task 1

function generateUsers(int $count, int $ageStart, int $ageFinish, string ...$names){
    $users = [];
    for ($i = 0; $i < $count; $i++){
        $randomAge = mt_rand($ageStart, $ageFinish);
        $randomName = $names[mt_rand(0, (count($names)-1))];
        $user = [
            'name' => $randomName,
            'age' => $randomAge
        ];
        array_push( $users, $user);
    }
    return $users;
}
