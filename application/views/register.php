<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Inscrivez_vous </title>
    <link rel="stylesheet" href="<?= base_url()?>assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url()?>assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="<?= base_url()?>assets/css/register.css">
</head>


<style type="text/css">

    body{
        background-color:whitesmoke;
    }
  
</style>
<body>
    <section class="login-clean">
        <form action="<?= base_url()?>Statics/register" method="post">
            <center><h3>Inscription</h3></center>
            <br>
            <input class="form-control" type="text" name="pseudo" placeholder="Pseudo">
            <div class="illustration"></div>
            <div class="mb-4"><input class="form-control" type="text" name="email" placeholder="Email"></div>
            
            <div class="mb-4"><input type="text" class="form-control" name="tel" id="" placeholder="Telephone"></div>
            <input class="form-control" type="password" name="pwd" placeholder="Mot de passe">
            <div class="mb-4"><button class="btn btn-primary d-block w-100" type="submit">S'inscrire</button></div><a class="forgot" href="#">Mots de passe oubliee?</a>
        </form>
    </section>
    <script src="<?= base_url()?>assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>