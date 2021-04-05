<form id='register' action="register.php" method="POST">
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="name">Name</label>
            <input type="name" class="form-control" id="name" name="name">
        </div>
        <div class="form-group col-md-6">
            <label for="surname">Surname</label>
            <input type="surname" class="form-control" id="surname" name="surname">
        </div>
    </div>
    <div class="col-12">
        <label for="inputEmail4" class="form-label">Email</label>
        <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
    </div>

    <div class="col-12">
        <label for="inputPassword2" class="form-label">Password</label>
        <input type="password" class="form-control" id="inputPassword2" placeholder="Password">
    </div>
    <div class="row">
        <div class="col">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                    1 posms
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                <label class="form-check-label" for="flexRadioDefault2">
                    2 posms
                </label>
            </div>
        </div>
        <div class="col">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
                <label class="form-check-label" for="flexRadioDefault1">
                    3 posms
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault4" checked>
                <label class="form-check-label" for="flexRadioDefault2">
                    4 posms
                </label>
            </div>
        </div>
        <!--close "col"-->
        <!--close "col"-->
    </div>
    <!--close "row"-->
    <div class="col-12">
        <button type="submit" class="btn btn-primary signbutton">Sign in</button>
    </div>
</form>