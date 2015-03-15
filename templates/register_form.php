   <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h2 class="panel-title"><strong>Register</strong></h2>
                    </div>
                    <div class="panel-body">
                        <form action="register.php" method="post" role="form">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="User name" name="username" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name="email" type="email" >
                                </div>               
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password again" name="confirmation" type="password" value="">
                                </div>                                
                                <button class="btn btn-danger btn-outline">Register <span class="glyphicon glyphicon-registration-mark"> </span></button>
                               <br/> <a href="login.php">Or Login From Here</a>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


