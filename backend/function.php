<?php

function totalHeroes($conn){
    return mysqli_num_rows(
        mysqli_query($conn,"SELECT * FROM heroes")
    );
}

function totalItems($conn){
    return mysqli_num_rows(
        mysqli_query($conn,"SELECT * FROM items")
    );
}

function totalTeams($conn){
    return mysqli_num_rows(
        mysqli_query($conn,"SELECT * FROM teams")
    );
}
