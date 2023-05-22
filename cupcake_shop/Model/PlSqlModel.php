<?php
include '../Model/DBConnection.php';

function getMaxSalary() {
    // Enable output buffering
    ini_set('oci8.output_buffering', 'On');

    // PL/SQL block to get maximum salary
    $sql = "DECLARE
                Maxsal_var number(20) := 0;
            BEGIN
                select MAX(EMPLOYEE_SALARY) into Maxsal_var from SALARAYSCALE;
                dbms_output.put_line('Maximum Salary: ' || Maxsal_var);
            END;";  
            
    $conn = connection(); // Use your appropriate connection function or code

    $stmt = oci_parse($conn, $sql);
    oci_execute($stmt);

    oci_close($conn);
}


?>
