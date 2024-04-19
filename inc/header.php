 <?php
    require('admin/inc/db_config.php');
    require('admin/inc/essentials.php');

    
    $contact_q = "SELECT * FROM `contact_details` WHERE `sr_no`=?";
    $values = [1];
    $contact_r = mysqli_fetch_assoc(select($contact_q, $values, 'i'));
    
    $setting_q = "SELECT * FROM `settings` WHERE `sr_no`=?";
    $setting_r = mysqli_fetch_assoc(select($setting_q, $values, 'i'));
  
 ?>
 
 <nav
    class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="index.php"><?php echo $setting_r['site_title'] ?></a>
        <button class="navbar-toggler shadow-none" type="button"
            data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link me-2"
                        href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link me-2" href="rooms.php">Rooms</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link me-2" href="facilities.php">Facilities</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link me-2" href="contact.php">Contact us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link me-2" href="about.php">About</a>
                </li>
            </ul>
            <div class="d-flex">
                <button type="button"
                    class="btn btn-outline-dark shadow-none me-lg-3 me-2"
                    data-bs-toggle="modal" data-bs-target="#loginModal">
                    Login
                </button>
                <button type="button" class="btn btn-outline-dark shadow-none"
                    data-bs-toggle="modal" data-bs-target="#registerModal">
                    Register
                </button>
            </div>
        </div>
 </nav>

 <div class="modal fade" id="loginModal" data-bs-backdrop="static"
        data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form>
                    <div class="modal-header">
                        <h5 class="modal-title d-flex align-items-center">
                            <i class="bi bi-person-circle fs-3 me-2"></i> User
                            Login
                        </h5>
                        <button type="reset" class="btn-close shadow-none"
                            data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="exampleInputEmail1"
                                class="form-label">Email
                                address</label>
                            <input type="email"
                                class="form-control shadow-none">
                        </div><div class="mb-4">
                            <label for="exampleInputEmail1"
                                class="form-label">Password</label>
                            <input type="password"
                                class="form-control shadow-none">
                        </div>
                        <div
                            class="d-flex align-items-center justify-content-between mb-1">
                            <button type="submit"
                                class="btn btn-dark shadow-none">LOGIN</button>
                            <a href="/hotel_booking"
                                class="text-secondary text-decoration-none">Forget
                                Password?</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
 </div>

 <div class="modal fade" id="registerModal" data-bs-backdrop="static"
        data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form>
                    <div class="modal-header">
                        <h5 class="modal-title d-flex align-items-center">
                            <i class="bi bi-person-plus-fill fs-3 me-2"></i>
                            User
                            Registration
                        </h5>
                        <button type="reset" class="btn-close shadow-none"
                            data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <span
                            class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">Note:</span>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="exampleInputEmail1"
                                        class="form-label">Name</label>
                                    <input type="text"
                                        class="form-control shadow-none">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="exampleInputEmail1"
                                        class="form-label">Email</label>
                                    <input type="email"
                                        class="form-control shadow-none">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="exampleInputEmail1"
                                        class="form-label">Phone
                                        Number</label>
                                    <input type="number"
                                        class="form-control shadow-none">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="exampleInputEmail1"
                                        class="form-label">Picture</label>
                                    <input type="file"
                                        class="form-control shadow-none">
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="exampleInputEmail1"
                                        class="form-label">Address</label>
                                    <textarea class="form-control shadow-none"
                                        rows="1"></textarea>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="exampleInputEmail1"
                                        class="form-label">Pincode</label>
                                    <input type="number"
                                        class="form-control shadow-none">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="exampleInputEmail1"
                                        class="form-label">Date of
                                        birth</label>
                                    <input type="date"
                                        class="form-control shadow-none">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="exampleInputEmail1"
                                        class="form-label">Password</label>
                                    <input type="password"
                                        class="form-control shadow-none">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="exampleInputEmail1"
                                        class="form-label">Confirm
                                        Password</label>
                                    <input type="password"
                                        class="form-control shadow-none">
                                </div>
                            </div>
                        </div>
                        <div class="text-center my-1">
                            <button type="submit"
                                class="btn btn-dark shadow-none">REGISTER</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
 </div>