@include('partialsOne._header')
@include('flash-message')
<br>
<div class="container">

    <div class="row">
        <div class="col-xs-12 col-lg-9 col-sm-9 col-md-9">
            <h3><b>Register</b></h3>
            <br>

            <form action="{{route('maxRegister' )}}" method="post">
                @csrf
                <div class="row">
                    <div class="col-lg-6 col-xs-12 col-sm-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">First Name</label>
                            <input type="text"  name="first" class="form-control" id="exampleInputEmail1" placeholder="First Name" required>
                        </div>
                    </div>

                    <div class="col-lg-offset-0 col-lg-6 col-xs-12 col-sm-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Last Name</label>
                            <input type="text" name="last" class="form-control" id="exampleInputEmail1" placeholder="Last Name" required>
                        </div>
                    </div>

                    <div class="col-lg-offset-0 col-lg-6 col-xs-12 col-sm-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email" required>
                        </div>
                    </div>


                    <div class="col-lg-offset-0 col-lg-3 col-xs-12 col-sm-6">
                        <div class="form-group">
                            <label for="Gender" class="select">Role</label>
                            <select class="form-control" name="role">
                                <option value="0">Customer</option>
                                <option value="2">Vendor</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-lg-offset-0 col-lg-3 col-xs-12 col-sm-12">
                        <div class="form-group">
                            <label for="Gender" class="select">City</label>
                            <input type="text" name="address" class="form-control" id="exampleInputEmail1" placeholder="Ruiru" required>
                        </div>
                    </div>

                    <div class="col-lg-offset-0 col-lg-6 col-xs-12 col-sm-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Cell Phone</label>
                            <input type="text" name="phone" class="form-control" id="exampleInputEmail1" placeholder="(+254) 71000000" required>
                        </div>
                    </div>
<br>
                    <div class="col-lg-offset-0 col-lg-4 col-xs-12 col-sm-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Password</label>
                            <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="col-lg-offset-0 col-lg-4 col-xs-12 col-sm-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Confirm Password</label>
                            <input type="password" class="form-control" id="password-confirm" placeholder="Confirm Password" required>
                        </div>
                    </div>

                    <div class="col-lg-offset-0 col-lg-12 col-xs-12" id="passwordConfirm">
                            <label class="alert-danger" >Password does not match</label>
                    </div>

                    <div class="col-lg-offset-0 col-lg-12 col-xs-12">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" value="">
                                Agree Terms and Condition</label>
                        </div>
                    </div>

                </div><!--/ Row-->
                <hr>
                <button class="btn btn-success" id="register">Register</button>
            </form>
            <div class="col-lg-offset-0 col-lg-12 col-xs-12">
                    <label>
                        Already have an account?</label> <a href="{{url('login')}}">Login</a>
                </div>
            </div>

        </div> <!-- /Main Content -->
        <br />
        <br />
    </div>
<style>
    .header-logo{
        padding: 10px;
        width: 100px;
    }
</style>


@include('Partials._footer')
<script>
    $( "#progress-button" ).click(function() {
        $("#progress-menu").toggleClass('hidden-xs');
    });
    $("#password-confirm").keyup(function() {
        if ($("#password").val() != $("#password-confirm").val()) {
            $("#passwordConfirm").fadeIn('slow');

        } else {
            $("#passwordConfirm").fadeOut('slow');

        }

        if ($("#password").val() != $("#password-confirm").val()) {
            $('#register').attr('disabled',true);
        }
        else{
           $('#register').removeAttr('disabled')
        }
    });

</script>
