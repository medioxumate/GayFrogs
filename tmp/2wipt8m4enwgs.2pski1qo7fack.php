<!DOCTYPE html>
<!
* Sign-up page part 3 for Green Bois profiles
* Created in PhpStorm.
* implements Bootstrap
* @author Brian Kiehn
* @version 3.0
* @date 5/12/2019
>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Custom Stylesheet-->
    <link rel="stylesheet" href="styles/frog.css">

    <title>Personal Information</title>
</head>
<body>
<h1>Profile</h1>
    <section class="container-fluid">
        <form method ="post" action ="profile">
            <div class ="row">
                <div class="col-12">
                    <p>In-door Interests</p>
                </div>
                <?php foreach (($in?:[]) as $inOption): ?>
                    <div class="col-3">
                    <label><input type="checkbox" name="in[]" value="<?= ($inOption) ?>"
                        <?php if (!empty($in) && in_array($inOption, $in)): ?>
                            checked="checked"
                        <?php endif; ?>
                        ><?= ($inOption) ?></label>
                    </div>
                <?php endforeach; ?>
            </div>
            <!--<div class="col-3">
                    <label><input type ="checkbox" name ="in[]" id="tv" value ="tv">tv</label>
                </div>
                <div class="col-3">
                    <label><input type ="checkbox" name ="in[]" id="pz" value ="puzzles">puzzles</label>
                </div>
                <div class="col-3">
                    <label><input type ="checkbox" name ="in[]" id="mi" value ="movies">movies</label>
                </div>
                <div class="col-3">
                    <label><input type ="checkbox" name ="in[]" id="rd" value ="reading">reading</label>
                </div>
                <div class="col-3">
                    <label><input type ="checkbox" name ="in[]" id="ck" value ="cooking">cooking</label>
                </div>
                <div class="col-3">
                    <label><input type ="checkbox" name ="in[]" id="pc" value ="playing cards">playing cards</label>
                </div>
                <div class="col-3">
                    <label><input type ="checkbox" name ="in[]" id="bg" value ="board games">board games</label>
                </div>
                <div class="col-3">
                    <label><input type ="checkbox" name ="in[]" id="vg" value ="video games">video games</label>
                </div>
            </div>-->
            <div class ="row">
                <div class ="col-12">
                    <p>Out-door Interests</p>
                </div>
                <?php foreach (($out?:[]) as $outOption): ?>
                    <div class="col-3">
                        <label><input type="checkbox" name="out[]" value="<?= ($outOption) ?>"
                            <?php if (!empty($out) && in_array($outOption, $out)): ?>
                                checked="checked"
                            <?php endif; ?>
                            ><?= ($outOption) ?></label>
                    </div>
                <?php endforeach; ?>
            </div>
                <!--<div class ="col-3">
                    <label><input type ="checkbox" name ="out[]" id="sw" value ="swimming">swimming</label>
                </div>
                <div class ="col-3">
                    <label><input type ="checkbox" name ="out[]" id="hp" value ="hopping">hopping</label>
                </div>
                <div class ="col-3">
                    <label><input type ="checkbox" name ="out[]" id="sg" value ="singing">singing</label>
                </div>
                <div class ="col-3">
                    <label><input type ="checkbox" name ="out[]" id="fl" value ="floating">floating</label>
                </div>
                <div class ="col-3">
                    <label><input type ="checkbox" name ="out[]" id="cl" value ="collecting">collecting</label>
                </div>
                <div class ="col-3">
                    <label><input type ="checkbox" name ="out[]" id="cr" value ="croaking">croaking</label>
                </div>
            </div>-->
            <div class ="row">
                <button type ="submit">Next</button>
                <button type ="reset">Reset</button>
            </div>
        </form>
    </section>
</body>
</html>