<!DOCTYPE html>
<!
* Sign-up page part 2 for Green Bois profiles
* Created in PhpStorm.
* implements Bootstrap
* @author Brian Kiehn
* @version 3.0
* @date 5/5/2019
>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Custom Stylesheet-->
    <link rel="stylesheet" href="styles/frog.css">

    <title>Personal Information</title>
</head>
<body>
    <h1>Profile</h1>
    <section class="container-fluid border">
        <form class ="row" method ="post" action ="#">
            <div class="col-sm-4">
                <label>Email:</label>
                    <input class = "form-control" type ="text" name ="em"  value =<?= ($em) ?>>
                <label>State</label>
                <select class="form-control" name='st'>
                    <option>Pick a State</option>
                    <?php foreach (($states?:[]) as $stateChoices): ?>
                        <option><?= ($stateChoices) ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="col-sm-4">
                <label>Biography</label>
                <textarea class="form-control" name ="bio" rows="10" cols="60"><?= ($bio) ?></textarea>
            </div>
            <div>
                <button type ="submit">Next</button>
                <button type ="reset">Reset</button>
            </div>
        </form>
    </section>
</body>
</html>