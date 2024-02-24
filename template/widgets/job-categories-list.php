<section class="job-categories ">
    <div class="container">
    <div class="sec-title text-center">
            <h3 class="sec-title__title upper-bar text-success">Jobs By Category</h3><!-- /.sec-title__title -->
        </div>
        <div class="row">
            <div class="col-md-12">
                <center>
                    <?php
                    $job_categories = [
                        ["name" => "Security Guard"],
                        ["name" => "Hotel and Restaurant"],
                        ["name" => "Administration"],
                        ["name" => "Administration"],
                        ["name" => "Contruction"],
                        ["name" => "Manufacturing"],
                        ["name" => "Engineering"],
                        ["name" => "Facilities and Property Services"],

                    ];
                    foreach ($job_categories as $category) {
                        echo "<a class='btn btn-warning' href='#'>" . $category["name"] . "</a>";
                    }
                    ?>
                </center>
            </div>
        </div>
    </div>
</section>