<?php include 'partials/header.php';?>
    <form method="POST" action="/response?name=martin&sname=suursalu" enctype="multipart/form-data">
        <input type="text" placeholder="Enter name" name="name">
        <input type="number" name="age">
        <input type="file" name="image">
        <input type="submit">
    </form>
<?php include 'partials/footer.php';?>