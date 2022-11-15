
<!DOCTYPE html>
<html>

<head>
    <!--  metadata -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login</title>


    <!--  stylesheets  -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"
        type="text/css">

    <link rel="stylesheet" type="text/css" media="screen" href="css/index.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/reset.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/generic.css">

    <!--  scripts  -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="/js/findGetParameter.js" type='text/javascript'></script>


    <script>
        $(document).ready(function () {

            if (findGetParameter("logout")) {
                $("#messagePlaceholder").html('<div class="alert alert-success" role="alert">Logout successful, cya next time!</div >');
            } else if (findGetParameter("error")) {
                $("#messagePlaceholder").html('<div class="alert alert-danger" role="alert">Oops something went wrong, we think it\'s your username or password.</div >');
            }


        });
    </script>
    <script type="text/javascript">
        function validate() {
            if ($("#username").val() == "" && $("#password").val() == "") {
                $("#messagePlaceholder").html('<div class="alert alert-danger" role="alert">Username and password are required</div >');
                $("#username").focus();
                return false;
            }
            if ($("#username").val() == "") {
                $("#messagePlaceholder").html('<div class="alert alert-danger" role="alert">Username is required</div >');
                $("#username").focus();
                return false;
            }
            if ($("#password").val() == "") {
                $("#messagePlaceholder").html('<div class="alert alert-danger" role="alert">Password is required</div >');
                $("#password").focus();
                return false;
            }
        }
    </script>
</head>

<body>
    <main class="bg backgroundGif ">
        <!-- <div class="backgroundWrapper">
            <div class="backgroundGif"></div>
        </div> -->
        <div class="row h-100">
            <div id="col" class="col-md-12 my-auto">
                <section class="container card ">
                    <!-- <div class="container-bg"></div> -->
                    <div class="card-body">
                        <div class="logo">
                            <?php
                            $date = date("D M Y H:I:S");
                            echo $date;
                            ?>

                        </div>
                        <form action="/login" method="POST">
                            <!--                        <form novalidate>-->
                            <span id="messagePlaceholder"></span>
                            <div class="form-group">
                                <label for="username">Username:</label>
                                <input type="text" class="form-control" id="username" name="username"
                                    placeholder="Enter Username" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" placeholder="Enter Password"
                                    name="password" required>
                            </div>
                            <!-- <div class="form-check">
                <input type="checkbox" class="form-check-input" id="">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div> -->
                            <button id="submit" type="submit" class="btn btn-primary w-100">Login</button>
                        </form>
                    </div>
                </section>
            </div>
        </div>
    </main>
    <!-- <footer id="pageFooter"></footer> -->
</body>

</html>