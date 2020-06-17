<table>
    <tr>
        <th>Employee name</th>
        <th>Salary</th>
    </tr>

    <?php
    $result = $pdo->query("SELECT id, name, salary FROM employees");
    while (list($id, $name, $salary) = $result->fetch(PDO::FETCH_NUM)) {
        echo " <tr>\n" .
            "  <td><a href=\"info.php?id=$id\">$name</a></td>\n" .
            "  <td>$salary</td>\n" .
            " </tr>\n";
    }

    ?>

</table>
