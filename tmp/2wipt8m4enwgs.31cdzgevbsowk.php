<!DOCTYPE html>
<!
* Results page for Green Bois profiles
* Created in PhpStorm.
* implements Bootstrap
* @author Brian Kiehn
* @version 2.0
* @date 4/20/2019
>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <!-- Custom Stylesheet-->
        <link rel="stylesheet" href="styles/frog.css">

        <title>Profile</title>
    </head>
    <body>
<section class ="row">
    <div class="col-6 border">
        <p>Name: <?= ($SESSION['fn']) ?> <?= ($SESSION['ln']) ?></p>
    </div>
    <div class ="col-6 border">
        <?= ($SESSION['bio'])."
" ?>
    </div>
    <div class ="col border">
        <p>Gender: <?= ($SESSION['g']) ?></p>
    </div>
    <div class ="col border">
        <p>Age: <?= ($SESSION['age']) ?></p>
    </div>
    <div class ="col border">
        <p>Phone: <?= ($SESSION['ph']) ?></p>
    </div>
    <div class ="col border">
        <p>Email: <?= ($SESSION['em']) ?></p>
    </div>
    <div class ="col border">
        <p>State: <?= ($SESSION['st']) ?></p>
    </div>
    <div class ="col border">
        <p>Interests:
            <?php foreach (($SESSION['in']?:[]) as $indoor): ?>
                <?= ($indoor)."
" ?>
            <?php endforeach; ?>
            <?php foreach (($SESSION['out']?:[]) as $outdoor): ?>
                <?= ($outdoor) ?> <br>
            <?php endforeach; ?>
        </p>
    </div>
</section>
<section class ="row">

</section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    </body>
</html>