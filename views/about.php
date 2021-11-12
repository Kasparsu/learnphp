<?php include 'partials/header.php';?>
    <h1>About us</h1>

    <table>
        <thead>
            <th>Id</th>
            <th>Name</th>
            <th>Description</th>
            <th>Birth Date</th>
        </thead>
        <tbody>
            <?php foreach($persons as $person): ?>
            <tr>
                <td><?=$person['id']?></td>
                <td><?=$person['name']?></td>
                <td><?=$person['description']?></td>
                <td><?=$person['birth_date']?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

<?php include 'partials/footer.php';?>