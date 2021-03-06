<!DOCTYPE html>
<!
* Sign-up page part 1 for Green Bois profiles
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
    <h1>Personal Information</h1>
    <section class ="container-fluid">
        <form method ="Post" action ="#">
            <div class ="col border">
                <div class ="row">
                    <label>First Name</label>
                        <input class = "form-control" type ="text" name ="fn" value =<?= ($fn) ?>>
                </div>
                <div class ="row">
                    <label>Last Name</label>
                        <input class = "form-control" type ="text" name ="ln" value =<?= ($ln) ?>>
                </div>
                <div class ="row">
                    <label>Age</label>
                        <input class = "form-control" type ="text" name ="age" value =<?= ($age) ?>>
                </div>
                <div class ="row">
                    <label>Gender:
                        <input type ="radio" name ="g" id ="m" value="Male"><label for ="m">Male</label>
                        <input type ="radio" name ="g" id ="f" value ="Female"><label for ="f">Female</label>
                        <input type ="radio" name ="g" id ="b" value ="Both"><label for ="b">Both</label>
                        <input type ="radio" name ="g" id ="o" value ="Other"><label for ="o">Other</label>
                    </label>
                </div>
                <div class ="row">
                    <label>Phone Number</label>
                        <input class = "form-control" type ="text" name ="ph" value =<?= ($ph) ?>>
                </div>
                <div class ="row">
                    <p>Premium Membership</p><br>
                    <label><input type ="checkbox">Sign me up!
                    </label>
                </div>
                <div class ="row float-right">
                    <button type ="submit">Next</button>
                    <button type ="reset">Reset</button>
                </div>
            </div>
        </form>
    </section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>