<h1>Hands-on Activity<h1>
<?php

$student_id = 1;
$table = array(
    "header"=> array(
    "studentid",
    "firstname" ,
    "middlename" ,
    "lastname" ,
    "section" ,
    "course" ,
    "year level" 
    ),

    "body" => [
        array(
        "firstname" =>"Firstname",
        "middlename" => "Middlename",
        "lastname" => "Lastname",
        "section" => "Section",
        "course" => "Course",
        "year level" => "Year level"
        ),
    
    array(
        "firstname" =>"Firstname",
        "middlename" => "Middlename",
        "lastname" => "Lastname",
        "section" => "Section",
        "course" => "Course",
        "year level" => "Year level"
    ),

    array(
        "firstname" =>"Firstname",
        "middlename" => "Middlename",
        "lastname" => "Lastname",
        "section" => "Section",
        "course" => "Course",
        "year level" => "Year level"
    ),
   
    array(
       "firstname" =>"Firstname",
        "middlename" => "Middlename",
        "lastname" => "Lastname",
        "section" => "Section",
        "course" => "Course",
        "year level" => "Year level"
    ), 

    array(
        "firstname" =>"Firstname",
        "middlename" => "Middlename",
        "lastname" => "Lastname",
        "section" => "Section",
        "course" => "Course",
        "year level" => "Year level"
    ),
    array(
        "firstname" =>"Firstname",
        "middlename" => "Middlename",
        "lastname" => "Lastname",
        "section" => "Section",
        "course" => "Course",
        "year level" => "Year level"
    ),

    array(
        "firstname" =>"Firstname",
        "middlename" => "Middlename",
        "lastname" => "Lastname",
        "section" => "Section",
        "course" => "Course",
        "year level" => "Year level"
    ),

    array(
        "firstname" =>"Firstname",
        "middlename" => "Middlename",
        "lastname" => "Lastname",
        "section" => "Section",
        "course" => "Course",
        "year level" => "Year level"
    ),

    array(
        "firstname" =>"Firstname",
        "middlename" => "Middlename",
        "lastname" => "Lastname",
        "section" => "Section",
        "course" => "Course",
        "year level" => "Year level"
    ),

    array(
        "firstname" =>"Firstname",
        "middlename" => "Middlename",
        "lastname" => "Lastname",
        "section" => "Section",
        "course" => "Course",
        "year level" => "Year level"
    ),

                        
    

    ]


);
?>

<table border="1">
    <thead>
        <?php
        foreach ($table['header'] as $header) {
            echo "<th>$header</th>";
        }
        ?>
    </thead>
    <tbody>
        <?php
        foreach ($table['body'] as $index => $row) {
            echo "<tr>";
            echo "<td>" . ($student_id + $index) . "</td>";
            foreach ($table['header'] as $header) {
                if ($header != "studentid") {
                    echo "<td>" . (isset($row[$header]) ? $row[$header] : '') . "</td>";
                }
            }
            echo "</tr>";
        }
        ?>
    </tbody>
</table>