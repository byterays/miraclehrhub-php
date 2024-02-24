<section class="countries-list background-gray py-5">
    <div class="container">
        <div class="sec-title text-center">
            <h3 class="sec-title__title upper-bar text-success">Jobs By Country</h3><!-- /.sec-title__title -->
        </div>
        <div class="row">
            <div class="col-md-12">
                <center>
                    <?php
                    $countries = [

                        ["name" => "U.A.E", "flag" => "united-arab-emirates.png", "jobs" => "85"],
                        ["name" => "Cyprus", "flag" => "cyprus.png", "jobs" => "245"],
                        ["name" => "Malaysia", "flag" => "malaysia.png", "jobs" => "215 "],
                        ["name" => "Saudi Arabia", "flag" => "saudi-arabia.png", "jobs" => "183"],
                        ["name" => "Singapore", "flag" => "singapore.png", "jobs" => "75"],
                        ["name" => "Qatar", "flag" => "qatar.png", "jobs" => "169"],
                        ["name" => "Oman", "flag" => "oman.png", "jobs" => "95"],
                        ["name" => "Bahrain", "flag" => "bahrain.png", "jobs" => "180"],

                    ];
                    foreach ($countries as $country) {
                        echo "<a class='btn btn-warning' href='#'><i><img width='40' src='assets/images/flags/" . $country["flag"] . "'/></i>" . $country["name"] . " (" . $country["jobs"] . ")</a>";
                    }
                    ?>
                </center>
            </div>
        </div>
    </div>
</section>