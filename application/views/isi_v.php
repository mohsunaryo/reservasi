 <!-- Contact Section -->
    <section id="login">
        <div class="container">
            
            <div class="row">
                <div class="col-lg-6 col-lg-offset-3">
                    <div class="login-panel panel panel-default">
                        <div class="col-lg-12 text-center">
                            <br>
                            <h2>Login</h2>
                            <hr class="star-primary">
                        </div>
                        
                        <div class="panel-login">
                            <div class="panel-body">
                                <form class="form-signin" role="form" method="post" action="<?php echo base_url(); ?>menu">
                                   <fieldset>
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Username" name="username" type="text" autofocus>
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                        </div>
                                        <button class="btn btn-lg btn-success btn-block" type="submit" name="login">Login</button>
                                        
                                    </fieldset>
                                </form>
                                <!-- <form name="form1" method="post" action="#">
                                    <input type="text" name="nama">
                                    <input type="submit" name="submit">
                                </form> -->
                                 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>