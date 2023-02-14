<div class="container">
    <br>
    <br>
    <br>
    <br>
    <br>
</div>
<!-- End of breadcurmb section
        ============================================= -->

<!-- Start of team section
        ============================================= -->
<section id="sa-team-inner" class="sa-team-inner-section inner-page-padding mt-4">
    <div class="container">
        <div class="sa-team-=inner-contenb">
            <div class="row">
                <div class="col text-center">
                    <table class="table table-primary">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Bagian</th>
                                <th>Foto</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($get_team_all as $gtall) : ?>
                                <tr>
                                    <td><?= $gtall['nama'] ?></td>
                                    <td><?= $gtall['bagian'] ?></td>
                                    <td>
                                        <img height="150" width="150" src="<?= base_url('assets/file_upload/teams/') . $gtall['foto'] ?>" alt="" srcset="">
                                    </td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>

                </div>
                <!-- 
                <div class="col-lg-3 col-md-6">
                    <div class="sa-team-inner-inner-box">
                        <div class="str-team-img-text position-relative">
                            <div class="str-team-img">
                                <img src="assets/img/startup/team/tm1.jpg" alt="">
                            </div>
                            <div class="str-team-text text-center str-headline pera-content">
                                <h4>Andrea Luies</h4>
                                <span>Head in Design</span>
                                <p>As a app web crawler to expertiy, I help to do organi
                                    iozat top of creature.
                                </p>
                                <div class="str-social-team">
                                    <a href="#"><i class="fab fa-facebook-f "></i></a>
                                    <a href="#"><i class="fab fa-behance"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-dribbble"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="sa-team-inner-inner-box">
                        <div class="str-team-img-text position-relative">
                            <div class="str-team-img">
                                <img src="assets/img/startup/team/tm2.jpg" alt="">
                            </div>
                            <div class="str-team-text text-center str-headline pera-content">
                                <h4>Andrea Luies</h4>
                                <span>Head in Design</span>
                                <p>As a app web crawler to expertiy, I help to do organi
                                    iozat top of creature.
                                </p>
                                <div class="str-social-team">
                                    <a href="#"><i class="fab fa-facebook-f "></i></a>
                                    <a href="#"><i class="fab fa-behance"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-dribbble"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="sa-team-inner-inner-box">
                        <div class="str-team-img-text position-relative">
                            <div class="str-team-img">
                                <img src="assets/img/startup/team/tm3.jpg" alt="">
                            </div>
                            <div class="str-team-text text-center str-headline pera-content">
                                <h4>Andrea Luies</h4>
                                <span>Head in Design</span>
                                <p>As a app web crawler to expertiy, I help to do organi
                                    iozat top of creature.
                                </p>
                                <div class="str-social-team">
                                    <a href="#"><i class="fab fa-facebook-f "></i></a>
                                    <a href="#"><i class="fab fa-behance"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-dribbble"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="sa-team-inner-inner-box">
                        <div class="str-team-img-text position-relative">
                            <div class="str-team-img">
                                <img src="assets/img/startup/team/tm4.jpg" alt="">
                            </div>
                            <div class="str-team-text text-center str-headline pera-content">
                                <h4>Andrea Luies</h4>
                                <span>Head in Design</span>
                                <p>As a app web crawler to expertiy, I help to do organi
                                    iozat top of creature.
                                </p>
                                <div class="str-social-team">
                                    <a href="#"><i class="fab fa-facebook-f "></i></a>
                                    <a href="#"><i class="fab fa-behance"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-dribbble"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="sa-team-inner-inner-box">
                        <div class="str-team-img-text position-relative">
                            <div class="str-team-img">
                                <img src="assets/img/startup/team/tm5.jpg" alt="">
                            </div>
                            <div class="str-team-text text-center str-headline pera-content">
                                <h4>Andrea Luies</h4>
                                <span>Head in Design</span>
                                <p>As a app web crawler to expertiy, I help to do organi
                                    iozat top of creature.
                                </p>
                                <div class="str-social-team">
                                    <a href="#"><i class="fab fa-facebook-f "></i></a>
                                    <a href="#"><i class="fab fa-behance"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-dribbble"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="sa-team-inner-inner-box">
                        <div class="str-team-img-text position-relative">
                            <div class="str-team-img">
                                <img src="assets/img/startup/team/tm6.jpg" alt="">
                            </div>
                            <div class="str-team-text text-center str-headline pera-content">
                                <h4>Andrea Luies</h4>
                                <span>Head in Design</span>
                                <p>As a app web crawler to expertiy, I help to do organi
                                    iozat top of creature.
                                </p>
                                <div class="str-social-team">
                                    <a href="#"><i class="fab fa-facebook-f "></i></a>
                                    <a href="#"><i class="fab fa-behance"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-dribbble"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="sa-team-inner-inner-box">
                        <div class="str-team-img-text position-relative">
                            <div class="str-team-img">
                                <img src="assets/img/startup/team/tm7.jpg" alt="">
                            </div>
                            <div class="str-team-text text-center str-headline pera-content">
                                <h4>Andrea Luies</h4>
                                <span>Head in Design</span>
                                <p>As a app web crawler to expertiy, I help to do organi
                                    iozat top of creature.
                                </p>
                                <div class="str-social-team">
                                    <a href="#"><i class="fab fa-facebook-f "></i></a>
                                    <a href="#"><i class="fab fa-behance"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-dribbble"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="sa-team-inner-inner-box">
                        <div class="str-team-img-text position-relative">
                            <div class="str-team-img">
                                <img src="assets/img/startup/team/tm8.jpg" alt="">
                            </div>
                            <div class="str-team-text text-center str-headline pera-content">
                                <h4>Andrea Luies</h4>
                                <span>Head in Design</span>
                                <p>As a app web crawler to expertiy, I help to do organi
                                    iozat top of creature.
                                </p>
                                <div class="str-social-team">
                                    <a href="#"><i class="fab fa-facebook-f "></i></a>
                                    <a href="#"><i class="fab fa-behance"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-dribbble"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="sa-team-inner-inner-box">
                        <div class="str-team-img-text position-relative">
                            <div class="str-team-img">
                                <img src="assets/img/startup/team/tm9.jpg" alt="">
                            </div>
                            <div class="str-team-text text-center str-headline pera-content">
                                <h4>Andrea Luies</h4>
                                <span>Head in Design</span>
                                <p>As a app web crawler to expertiy, I help to do organi
                                    iozat top of creature.
                                </p>
                                <div class="str-social-team">
                                    <a href="#"><i class="fab fa-facebook-f "></i></a>
                                    <a href="#"><i class="fab fa-behance"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-dribbble"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="sa-team-inner-inner-box">
                        <div class="str-team-img-text position-relative">
                            <div class="str-team-img">
                                <img src="assets/img/startup/team/tm10.jpg" alt="">
                            </div>
                            <div class="str-team-text text-center str-headline pera-content">
                                <h4>Andrea Luies</h4>
                                <span>Head in Design</span>
                                <p>As a app web crawler to expertiy, I help to do organi
                                    iozat top of creature.
                                </p>
                                <div class="str-social-team">
                                    <a href="#"><i class="fab fa-facebook-f "></i></a>
                                    <a href="#"><i class="fab fa-behance"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-dribbble"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="sa-team-inner-inner-box">
                        <div class="str-team-img-text position-relative">
                            <div class="str-team-img">
                                <img src="assets/img/startup/team/tm11.jpg" alt="">
                            </div>
                            <div class="str-team-text text-center str-headline pera-content">
                                <h4>Andrea Luies</h4>
                                <span>Head in Design</span>
                                <p>As a app web crawler to expertiy, I help to do organi
                                    iozat top of creature.
                                </p>
                                <div class="str-social-team">
                                    <a href="#"><i class="fab fa-facebook-f "></i></a>
                                    <a href="#"><i class="fab fa-behance"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-dribbble"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="sa-team-inner-inner-box">
                        <div class="str-team-img-text position-relative">
                            <div class="str-team-img">
                                <img src="assets/img/startup/team/tm12.jpg" alt="">
                            </div>
                            <div class="str-team-text text-center str-headline pera-content">
                                <h4>Andrea Luies</h4>
                                <span>Head in Design</span>
                                <p>As a app web crawler to expertiy, I help to do organi
                                    iozat top of creature.
                                </p>
                                <div class="str-social-team">
                                    <a href="#"><i class="fab fa-facebook-f "></i></a>
                                    <a href="#"><i class="fab fa-behance"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-dribbble"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="saasio-pagination text-center ul-li">
                <ul>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a class="active" href="#">3</a></li>
                    <li><a href="#">...</a></li>
                    <li><a href="#">10</a></li>
                </ul>
            </div> -->
            </div>
        </div>
</section>