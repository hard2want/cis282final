<?php 
if (isset($_POST['submit'])){
    $search = mysqli_real_escape_string($connect, $_POST['search']);
    $query = "
    SELECT u.id, u.cohort_id, u.first_name, u.last_name, u.email, SUM(sa.points_earned) as earnedPoints, sum(a.points) as points

    FROM cis282final.users u, cis282final.student_assessments sa, cis282final.assessments a
    
    WHERE
    u.first_name LIKE '%$search%'
    OR u.last_name LIKE '%$search%'
    AND sa.user_id = u.id
    AND sa.assessment_id = a.assessment_id
    GROUP BY u.id
    ";
    $searchResults = mysqli_query($connect, $query);
} // end if
 // note - expand your search via products p, categories c and then change the where to use c.category LIKE... p.product_name LIKE, etc.

?>

<!--  
$query = "
    SELECT *
    FROM users u
    WHERE
    u.first_name LIKE '%$search%'
    OR u.last_name LIKE '%$search%'
    ";

  -->