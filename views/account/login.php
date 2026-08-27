<!DOCTYPE html>
<html lang="en" data-astro-cid-sckkx6r4>

<head>
    <?php require 'public/includes/header.inc.php' ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</head>

<body data-page-type="landing" data-astro-cid-sckkx6r4>

    <?php require 'public/includes/navbar.inc.php' ?>


    <main>


        <section class="benefits benefits--compact" data-component="trust" data-astro-cid-jfl2tvw5>
            <div class="benefits__inner" data-astro-cid-jfl2tvw5>

                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8 card">
                        <form class="mt-5 lg_form alert">
                            <div class="row row-gap-4">
                                <div class="col-12">
                                    <input type="text" name="email" class="form-control" placeholder="Email Address" required>
                                </div>
                                <div class="col-12">
                                    <div class="password-content">
                                        <input type="password" name="pass1" class="form-control" id="sinPassword"
                                            placeholder="Password">
                                        <div class="password-show-toggle">
                                            <i class="fa-regular fa-eye-slash"></i>
                                            <i class="fa-regular fa-eye"></i>
                                        </div>
                                    </div>
                                </div>
                               
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary w-100">Sign In</button>
                                </div>
                                
                               
                            </div>

                            <div class="info m-1">
                                <?php if (isset($_GET['loginRequired'])) echo "<div class='alert alert-danger'> Login needed to get you back to your previous page. 
                    </div>"; ?>
                                <?php if (isset($_GET['error'])) echo "<div class='alert alert-danger'> {$_GET['error']}
                    </div>"; ?>
                            </div>


                        </form>
                    </div>
                </div>
            </div>
        </section>






        <?php require 'public/includes/footer.inc.php' ?>
</body>

</html>