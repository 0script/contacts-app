<?php

    function processAddContactForm(){

        if(isset($_POST['firstname'])){
            echo "Data received";
        }   
    }

    processAddContactForm();

    echo '
        <form id="addcontactform" class="row g-3>
            <div class="col-md-6">
                <label for="firstname" class="form-label">First Name</label>
                <input type="text" class="form-control" name="firstname" id="firstname" required>
            </div>
            
            <div class="col-md-6">
                <label for="lastname" class="form-label">Last Name</label>
                <input type="text" class="form-control" id="lastname" required>
            </div>

            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Email</label>
                <input type="email" class="form-control" id="inputEmail4" required>
            </div>
            
            <div class="col-md-6">
                <label for="phone" class="form-label">Tel</label>
                <input type="text" class="form-control" id="phone" required>
            </div>
            
            <div class="col-12">
                <label for="inputAddress" class="form-label">Address</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
            </div>
            
            <div class="col-12">
                <label for="inputAddress2" class="form-label">Address 2</label>
                <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
            </div>
            
            <div class="col-md-6">
                <label for="inputCity" class="form-label">City</label>
                <input type="text" class="form-control" id="inputCity">
            </div>
            
            <div class="col-md-4">
                <label for="inputState" class="form-label">State</label>
                <select id="inputState" class="form-select">
                    <option selected>Select State...</option>
                    <option>Kigali</option>
                    <option>Giseni</option>
                    <option>Muzanze</option>
                </select>
            </div>
            
            <div class="col-md-2">
                <label for="inputZip" class="form-label">Zip</label>
                <input type="text" class="form-control" id="inputZip">
            </div>
            
            <div class="col-12">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                        Check me out
                    </label>
                </div>
            </div>
            
            <div class="col-12">
                <button type="submit" class="btn btn-primary" id="submit-contact">Sign in</button>
            </div>
        </form>';

?>
