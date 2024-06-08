<?php
include 'config.php';
$admin = new Admin();


$stmt=$admin->ret("SELECT * FROM `doctor`");
$doc=$stmt->rowCount();

$stmt2=$admin->ret("SELECT * FROM `appointment` WHERE `ap_status`='accepted'");
$pat=$stmt2->rowCount();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>HOSPITO</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <!-- <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div> -->
    <!-- Spinner End -->




    <?php
    include 'navbar.php';
    ?>


    <!-- Header Start -->
    <div class="container-fluid header bg-primary p-0 mb-5">
        <div class="row g-0 align-items-center flex-column-reverse flex-lg-row">
            <div class="col-lg-6 p-5 wow fadeIn" data-wow-delay="0.1s">
                <h1 class="display-4 text-white mb-5">Good Health Is The Root Of All Happiness</h1>
                <div class="row g-4">
                    <div class="col-sm-4">
                        <div class="border-start border-light ps-4">
                            <h2 class="text-white mb-1" data-toggle="counter-up"><?php echo $doc ?></h2>
                            <p class="text-light mb-0">Expert Doctors</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="border-start border-light ps-4">
                            <h2 class="text-white mb-1" data-toggle="counter-up"><?php echo $pat ?></h2>
                            <p class="text-light mb-0">Patient</p>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                <div class="owl-carousel header-carousel">
                    <div class="owl-carousel-item position-relative">
                        <img class="img-fluid" src="img/doc2.jpg" alt="">
                        <div class="owl-carousel-text">
                            <h1 class="display-1 text-white mb-0">Neurology</h1>
                        </div>
                    </div>
                    <div class="owl-carousel-item position-relative">
                        <img class="img-fluid" src="img/doc3.jpg" alt="">
                        <div class="owl-carousel-text">
                            <h1 class="display-1 text-white mb-0">Gynacology</h1>
                        </div>
                    </div>
                    <div class="owl-carousel-item position-relative">
                        <img class="img-fluid" src="img/doc4.jpg" alt="">
                        <div class="owl-carousel-text">
                            <h1 class="display-1 text-white mb-0">Orthopedics</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="d-flex flex-column">
                        <img class="img-fluid rounded w-75 align-self-end" src="img/about-1.jpg" alt="">
                        <img class="img-fluid rounded w-50 bg-white pt-3 pe-3" src="img/about-2.jpg" alt="" style="margin-top: -25%;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <p class="d-inline-block border rounded-pill py-1 px-4">About Us</p>
                    <h1 class="mb-4">Why You Should Trust Us? Get Know About Us!</h1>
                    <p>Expertise and Qualified Staff: Hospitals typically employ highly trained and skilled medical professionals, including doctors, nurses, technicians, and specialists. These professionals undergo extensive education, training, and licensing processes to ensure their competency and expertise in providing medical care.</p>

<p>Regulatory Oversight: Hospitals are subject to regulatory oversight by governmental bodies and healthcare organizations. They must adhere to strict standards and guidelines to maintain their accreditation and licenses. Regular inspections and audits help ensure that hospitals meet these standards, providing a level of assurance for patients.</p>
                    <p class="mb-4">Advanced Technology and Facilities: Hospitals often invest in advanced medical technology, equipment, and facilities. This enables them to offer a wide range of diagnostic tests, treatment options, and surgical procedures. Having access to state-of-the-art equipment can enhance the quality of care and improve patient outcomes.</p>
                    <p><i class="far fa-check-circle text-primary me-3"></i>Quality health care</p>
                    <p><i class="far fa-check-circle text-primary me-3"></i>Only Qualified Doctors</p>
                    <p><i class="far fa-check-circle text-primary me-3"></i>Medical Research Professionals</p>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="d-inline-block border rounded-pill py-1 px-4">Services</p>
                <h1>Health Care Solutions</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item bg-light rounded h-100 p-5">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4" style="width: 65px; height: 65px;">
                            <i class="fa fa-heartbeat text-primary fs-4"></i>
                        </div>
                        <h4 class="mb-3">Cardiology</h4>
                        <p class="mb-4">Cardiology is the branch of medicine that focuses on the study, diagnosis, and treatment of disorders related to the cardiovascular system, which includes the heart and blood vessels.
                            Cardiologists are the medical specialists who are trained in this field and specialize in preventing, diagnosing, and treating conditions that affect the heart and blood vessels.</p>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item bg-light rounded h-100 p-5">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4" style="width: 65px; height: 65px;">
                            <i class="fa fa-x-ray text-primary fs-4"></i>
                        </div>
                        <h4 class="mb-3">Pulmonary</h4>
                        <p class="mb-4">It is a branch of medicine that deals with the diagnosis and treatment of diseases related to the respiratory system, particularly the lungs. Pulmonologists are medical specialists who specialize in this field. </p>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item bg-light rounded h-100 p-5">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4" style="width: 65px; height: 65px;">
                            <i class="fa fa-brain text-primary fs-4"></i>
                        </div>
                        <h4 class="mb-3">Neurology</h4>
                        <p class="mb-4">Neurology is a branch of medicine that deals with the study, diagnosis, and treatment of disorders of the nervous system. The nervous system includes the brain, spinal cord, and peripheral nerves. Neurologists are medical specialists who specialize in this field. </p>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item bg-light rounded h-100 p-5">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4" style="width: 65px; height: 65px;">
                            <i class="fa fa-wheelchair text-primary fs-4"></i>
                        </div>
                        <h4 class="mb-3">Orthopedics</h4>
                        <p class="mb-4">Orthopedics, also known as orthopedic surgery, is a medical specialty that focuses on the diagnosis, treatment, and prevention of conditions and injuries related to the musculoskeletal system. The musculoskeletal system includes the bones, joints, ligaments, tendons, muscles, and nerves. Orthopedic surgeons are medical specialists who specialize in this field.</p>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item bg-light rounded h-100 p-5">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4" style="width: 65px; height: 65px;">
                            <i class="fa fa-tooth text-primary fs-4"></i>
                        </div>
                        <h4 class="mb-3">Dental Surgery</h4>
                        <p class="mb-4">Dental surgery, also known as oral surgery or oral and maxillofacial surgery, is a specialized branch of dentistry that focuses on diagnosing and treating conditions, injuries, and defects related to the teeth, jawbones, and soft tissues of the oral and maxillofacial region. Dental surgeons, or oral and maxillofacial surgeons, are dental specialists who have completed additional training in this field.</p>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item bg-light rounded h-100 p-5">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4" style="width: 65px; height: 65px;">
                            <i class="fa fa-vials text-primary fs-4"></i>
                        </div>
                        <h4 class="mb-3">Laboratory</h4>
                        <p class="mb-4">Laboratory, in the context of healthcare and medicine, refers to a facility where scientific experiments, tests, and analyses are conducted to aid in the diagnosis, monitoring, and research of various diseases and conditions. Medical laboratories play a crucial role in healthcare by providing valuable information to healthcare professionals for making accurate diagnoses and treatment decisions.</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Feature Start -->
    <div class="container-fluid bg-primary overflow-hidden my-5 px-lg-0">
        <div class="container feature px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-6 feature-text py-5 wow fadeIn" data-wow-delay="0.1s">
                    <div class="p-lg-5 ps-lg-0">
                        <p class="d-inline-block border rounded-pill text-light py-1 px-4">Features</p>
                        <h1 class="text-white mb-4">Why Choose Us</h1>
                        <p class="text-white mb-4 pb-2">Trusting a hospital is important because it involves the well-being and care of individuals seeking medical treatment.
                            Here are several reasons why people typically place their trust in hospitals:</p>

                           <p class="text-white mb-4 pb-2"> Qualified Healthcare Professionals: Hospitals typically employ highly trained and qualified healthcare professionals, including doctors, nurses, and other support staff. These professionals have undergone rigorous education, training, and licensing processes to provide quality care.</p>

                            <p class="text-white mb-4 pb-2">Accreditation and Regulation: Hospitals undergo accreditation processes and are subject to regulatory oversight by government authorities or independent organizations. These evaluations ensure that hospitals meet specific standards related to patient safety, quality of care, infection control, and other essential aspects of healthcare delivery.</p>

                            <p class="text-white mb-4 pb-2">Established Protocols and Procedures: Hospitals have established protocols, guidelines, and standard operating procedures in place to ensure consistent and evidence-based care. These protocols are designed to prioritize patient safety, minimize errors, and promote efficient and effective treatment.</p>
                        <div class="row g-4">
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light" style="width: 55px; height: 55px;">
                                        <i class="fa fa-user-md text-primary"></i>
                                    </div>
                                    <div class="ms-4">
                                        <p class="text-white mb-2">Experience</p>
                                        <h5 class="text-white mb-0">Doctors</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light" style="width: 55px; height: 55px;">
                                        <i class="fa fa-check text-primary"></i>
                                    </div>
                                    <div class="ms-4">
                                        <p class="text-white mb-2">Quality</p>
                                        <h5 class="text-white mb-0">Services</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light" style="width: 55px; height: 55px;">
                                        <i class="fa fa-comment-medical text-primary"></i>
                                    </div>
                                    <div class="ms-4">
                                        <p class="text-white mb-2">Positive</p>
                                        <h5 class="text-white mb-0">Consultation</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light" style="width: 55px; height: 55px;">
                                        <i class="fa fa-headphones text-primary"></i>
                                    </div>
                                    <div class="ms-4">
                                        <p class="text-white mb-2">24 Hours</p>
                                        <h5 class="text-white mb-0">Support</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pe-lg-0 wow fadeIn" data-wow-delay="0.5s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100" src="img/feature.jpg" style="object-fit: cover;" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->






    <!-- Testimonial Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="d-inline-block border rounded-pill py-1 px-4">Testimonial</p>
                <h1>What Say Our Patients!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">

                <?php
                $stmt = $admin->ret("SELECT * FROM `feedback` INNER JOIN `patient` ON patient.pat_id=feedback.pat_id");
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
                    <div class="testimonial-item text-center">
                        <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4" src="controller/<?php echo $row['pat_img'] ?>" style="width: 100px; height: 100px;">
                        <div class="testimonial-text rounded text-center p-4">
                            <p><?php echo $row['feed'] ?></p>
                            <h5 class="mb-1"><?php echo $row['pat_name'] ?></h5>
                            <!-- <span class="fst-italic">Profession</span> -->
                        </div>
                    </div>
                <?php }

                ?>


            </div>
        </div>
    </div>

    <div style="padding: 100px;">
        <h2>Write down your feedback.</h2>
        <div>
            <form action="controller/feedback.php" method="POST">
                <div class="form-group">
                    <textarea name="feed" placeholder="Write...." class="form-control" required></textarea>
                </div>
                <div class="form-group mt-3">
                    <?php
                    if (!isset($_SESSION['pid'])) { ?>
                        <a href="login.php" class="btn btn-primary">Submit</a>
                    <?php } else { ?>
                        <button type="submit" name="send" class="btn btn-primary">Submit</button>
                    <?php }
                    ?>

                </div>
            </form>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Footer Start -->
    <?php
    include 'footer.php';


    ?>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>