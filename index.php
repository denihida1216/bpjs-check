<!doctype html>
<html lang="en">
<?php
function base_url()
{
    return dirname($_SERVER['SCRIPT_FILENAME']);
}
?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://rsudalihsan.com/simrs/assets/dist/img/logo.png">

    <title>Dashboard Check Bridging BPJS-SIMRS RSUD ALIHSAN</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/starter-template/">

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.0/examples/starter-template/starter-template.css" rel="stylesheet">
</head>

<body>

    <nav class="navbar navbar-expand-md navbar-light bg-light fixed-top">
        <a class="navbar-brand" href="#">Dashboard Check Bridging BPJS</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a href="#" class="btn btn-primary" id="btn_test_all">Test All</a>
                </li>
            </ul>
        </div>
    </nav>

    <main role="main" class="container">

        <div class="row">
            <div class="col-12">
                <h3>Dashboard Koneksi Server BPJS Vclaim <a href="#" class="btn btn-primary" id="btn_test_all_vclaim">Test All</a></h3>
                <div class="row">
                    <div class="col-12 col-sm-3 mb-3">
                        <div class="card bg-secondary" id="card_rencana_kontrol">
                            <div class="card-body text-white">
                                <h5 class="card-title" id="status_rencana_kontrol">-</h5>
                                <h6 class="card-subtitle mb-2">Rencana Kontrol</h6>
                                <p class="card-text" id="time_rencana_kontrol">-</p>
                                <a href="#" class="btn btn-primary" id="btn_rencana_kontrol">Test Ping</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-3 mb-3">
                        <div class="card bg-secondary" id="card_list_multi_rujukan">
                            <div class="card-body text-white">
                                <h5 class="card-title" id="status_list_multi_rujukan">-</h5>
                                <h6 class="card-subtitle mb-2">List Multi Rujukan</h6>
                                <p class="card-text" id="time_list_multi_rujukan">-</p>
                                <a href="#" class="btn btn-primary" id="btn_list_multi_rujukan">Test Ping</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-3 mb-3">
                        <div class="card bg-secondary" id="card_get_data_nokartu">
                            <div class="card-body text-white">
                                <h5 class="card-title" id="status_get_data_nokartu">-</h5>
                                <h6 class="card-subtitle mb-2">Get Data No.Kartu</h6>
                                <p class="card-text" id="time_get_data_nokartu">-</p>
                                <a href="#" class="btn btn-primary" id="btn_get_data_nokartu">Test Ping</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-3 mb-3">
                        <div class="card bg-secondary" id="card_get_data_sep">
                            <div class="card-body text-white">
                                <h5 class="card-title" id="status_get_data_sep">-</h5>
                                <h6 class="card-subtitle mb-2">Get Data SEP</h6>
                                <p class="card-text" id="time_get_data_sep">-</p>
                                <a href="#" class="btn btn-primary" id="btn_get_data_sep">Test Ping</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-3 mb-3">
                        <div class="card bg-secondary" id="card_jumlah_sep">
                            <div class="card-body text-white">
                                <h5 class="card-title" id="status_jumlah_sep">-</h5>
                                <h6 class="card-subtitle mb-2">Jumlah SEP</h6>
                                <p class="card-text" id="time_jumlah_sep">-</p>
                                <a href="#" class="btn btn-primary" id="btn_jumlah_sep">Test Ping</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-3 mb-3">
                        <div class="card bg-secondary" id="card_delete_sep">
                            <div class="card-body text-white">
                                <h5 class="card-title" id="status_delete_sep">-</h5>
                                <h6 class="card-subtitle mb-2">Delete SEP</h6>
                                <p class="card-text" id="time_delete_sep">-</p>
                                <a href="#" class="btn btn-primary" id="btn_delete_sep">Test Ping</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-3 mb-3">
                        <div class="card bg-secondary" id="card_update_sep">
                            <div class="card-body text-white">
                                <h5 class="card-title" id="status_update_sep">-</h5>
                                <h6 class="card-subtitle mb-2">Update SEP</h6>
                                <p class="card-text" id="time_update_sep">-</p>
                                <a href="#" class="btn btn-primary" id="btn_update_sep">Test Ping</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-3 mb-3">
                        <div class="card bg-secondary" id="card_insert_sep">
                            <div class="card-body text-white">
                                <h5 class="card-title" id="status_insert_sep">-</h5>
                                <h6 class="card-subtitle mb-2">Insert SEP</h6>
                                <p class="card-text" id="time_insert_sep">-</p>
                                <a href="#" class="btn btn-primary" id="btn_insert_sep">Test Ping</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <h3>Dashboard Koneksi Server BPJS Antrol <a href="#" class="btn btn-primary" id="btn_test_all_antrol">Test All</a></h3>
                <div class="row">
                    <div class="col-12 col-sm-3 mb-3">
                        <div class="card bg-secondary" id="card_dashboard_perhari">
                            <div class="card-body text-white">
                                <h5 class="card-title" id="status_dashboard_perhari">-</h5>
                                <h6 class="card-subtitle mb-2">Dashboard Perhari</h6>
                                <p class="card-text" id="time_dashboard_perhari">-</p>
                                <a href="#" class="btn btn-primary" id="btn_dashboard_perhari">Test Ping</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-3 mb-3">
                        <div class="card bg-secondary" id="card_dashboard_perbulan">
                            <div class="card-body text-white">
                                <h5 class="card-title" id="status_dashboard_perbulan">-</h5>
                                <h6 class="card-subtitle mb-2">Dashboard Perbulan</h6>
                                <p class="card-text" id="time_dashboard_perbulan">-</p>
                                <a href="#" class="btn btn-primary" id="btn_dashboard_perbulan">Test Ping</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-3 mb-3">
                        <div class="card bg-secondary" id="card_data_list_taskid">
                            <div class="card-body text-white">
                                <h5 class="card-title" id="status_data_list_taskid">-</h5>
                                <h6 class="card-subtitle mb-2">Data List Taskid</h6>
                                <p class="card-text" id="time_data_list_taskid">-</p>
                                <a href="#" class="btn btn-primary" id="btn_data_list_taskid">Test Ping</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-3 mb-3">
                        <div class="card bg-secondary" id="card_get_jadwal_dokter">
                            <div class="card-body text-white">
                                <h5 class="card-title" id="status_get_jadwal_dokter">-</h5>
                                <h6 class="card-subtitle mb-2">Get Jadwal Dokter</h6>
                                <p class="card-text" id="time_get_jadwal_dokter">-</p>
                                <a href="#" class="btn btn-primary" id="btn_get_jadwal_dokter">Test Ping</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main><!-- /.container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <script>
        window.jQuery || document.write('<script src="https://getbootstrap.com/docs/4.0/assets/js/vendor/jquery-slim.min.js"><\/script>')
    </script>
    <script src="https://getbootstrap.com/docs/4.0/assets/js/vendor/popper.min.js"></script>
    <script src="https://getbootstrap.com/docs/4.0/dist/js/bootstrap.min.js"></script>
    <script>
        //check connection
        function check_connection(vurl, vcategory) {
            var vcard = "#card_" + vcategory
            var vstatus = "#status_" + vcategory
            var vtime = "#time_" + vcategory
            var vbtn = "#btn_" + vcategory
            var ajaxTime = new Date().getTime()
            $(vcard).removeClass("bg-success").removeClass("bg-danger")
            $(vcard).addClass("bg-secondary")
            $(vstatus).text("-")
            $(vtime).text("-")
            $(vbtn).text("Sending...").attr("disabled", "disabled")
            $.ajax({
                url: vurl,
                type: 'GET',
                success: function(response) {
                    $(vbtn).text("Test Ping").removeAttr("disabled")
                    var totalTime = new Date().getTime() - ajaxTime;
                    $(vcard).addClass("bg-success")
                    $(vstatus).text("Terhubung")
                    // 10 detik = 10000
                    if (totalTime >= 10000) {
                        $(vcard).addClass("bg-danger")
                        $(vstatus).text("Server Sibuk")
                    }
                    if (totalTime >= 1000) {
                        totalTime = (totalTime / 1000) + "s"
                    } else {
                        totalTime = totalTime + "ms"
                    }
                    $(vtime).text("Time : " + totalTime)
                },
                error: function() {
                    var totalTime = new Date().getTime() - ajaxTime;
                    if (totalTime >= 1000) {
                        totalTime = (totalTime / 1000) + "s"
                    } else {
                        totalTime = totalTime + "ms"
                    }
                    $(vtime).text("Time : " + totalTime)
                    $(vbtn).text("Test Ping").removeAttr("disabled")
                    $(vcard).addClass("bg-danger")
                    $(vstatus).text("Terputus")
                }
            })
        }

        // test all
        $("#btn_test_all").click(function() {
            rencana_kontrol()
            list_multi_rujukan()
            get_data_nokartu()
            get_data_sep()
            jumlah_sep()
            delete_sep()
            update_sep()
            insert_sep()
            dashboard_perhari()
            dashboard_perbulan()
            data_list_taskid()
            get_jadwal_dokter()
        });

        $("#btn_test_all_vclaim").click(function() {
            rencana_kontrol()
            list_multi_rujukan()
            get_data_nokartu()
            get_data_sep()
            jumlah_sep()
            delete_sep()
            update_sep()
            insert_sep()
        });

        $("#btn_test_all_antrol").click(function() {
            dashboard_perhari()
            dashboard_perbulan()
            data_list_taskid()
            get_jadwal_dokter()
        });

        // bridging vclaim
        $("#btn_rencana_kontrol").click(function() {
            if ($(this).attr("disabled") == "disabled") {
                return false;
            } else {
                rencana_kontrol()
            }
        })

        function rencana_kontrol() {
            var vcategory = "rencana_kontrol"
            var vurl = "./backend.php/" + vcategory
            check_connection(vurl, vcategory)
        }

        $("#btn_list_multi_rujukan").click(function() {
            if ($(this).attr("disabled") == "disabled") {
                return false;
            } else {
                list_multi_rujukan()
            }
        })

        function list_multi_rujukan() {
            var vcategory = "list_multi_rujukan"
            var vurl = "./backend.php/" + vcategory
            check_connection(vurl, vcategory)
        }

        $("#btn_get_data_nokartu").click(function() {
            if ($(this).attr("disabled") == "disabled") {
                return false;
            } else {
                get_data_nokartu()
            }
        })

        function get_data_nokartu() {
            var vcategory = "get_data_nokartu"
            var vurl = "./backend.php/" + vcategory
            check_connection(vurl, vcategory)
        }

        $("#btn_get_data_sep").click(function() {
            if ($(this).attr("disabled") == "disabled") {
                return false;
            } else {
                get_data_sep()
            }
        })

        function get_data_sep() {
            var vcategory = "get_data_sep"
            var vurl = "./backend.php/" + vcategory
            check_connection(vurl, vcategory)
        }

        $("#btn_jumlah_sep").click(function() {
            if ($(this).attr("disabled") == "disabled") {
                return false;
            } else {
                jumlah_sep()
            }
        })

        function jumlah_sep() {
            var vcategory = "jumlah_sep"
            var vurl = "./backend.php/" + vcategory
            check_connection(vurl, vcategory)
        }

        $("#btn_delete_sep").click(function() {
            if ($(this).attr("disabled") == "disabled") {
                return false;
            } else {
                delete_sep()
            }
        })

        function delete_sep() {
            var vcategory = "delete_sep"
            var vurl = "./backend.php/" + vcategory
            check_connection(vurl, vcategory)
        }

        $("#btn_update_sep").click(function() {
            if ($(this).attr("disabled") == "disabled") {
                return false;
            } else {
                update_sep()
            }
        })

        function update_sep() {
            var vcategory = "update_sep"
            var vurl = "./backend.php/" + vcategory
            check_connection(vurl, vcategory)
        }

        $("#btn_insert_sep").click(function() {
            if ($(this).attr("disabled") == "disabled") {
                return false;
            } else {
                insert_sep()
            }
        })

        function insert_sep() {
            var vcategory = "insert_sep"
            var vurl = "./backend.php/" + vcategory
            check_connection(vurl, vcategory)
        }

        // bridging antrol
        $("#btn_dashboard_perhari").click(function() {
            if ($(this).attr("disabled") == "disabled") {
                return false;
            } else {
                dashboard_perhari()
            }
        })

        function dashboard_perhari() {
            var vcategory = "dashboard_perhari"
            var vurl = "./backend.php/" + vcategory
            check_connection(vurl, vcategory)
        }

        $("#btn_dashboard_perbulan").click(function() {
            if ($(this).attr("disabled") == "disabled") {
                return false;
            } else {
                dashboard_perbulan()
            }
        })

        function dashboard_perbulan() {
            var vcategory = "dashboard_perbulan"
            var vurl = "./backend.php/" + vcategory
            check_connection(vurl, vcategory)
        }

        $("#btn_data_list_taskid").click(function() {
            if ($(this).attr("disabled") == "disabled") {
                return false;
            } else {
                data_list_taskid()
            }
        })

        function data_list_taskid() {
            var vcategory = "data_list_taskid"
            var vurl = "./backend.php/" + vcategory
            check_connection(vurl, vcategory)
        }

        $("#btn_get_jadwal_dokter").click(function() {
            if ($(this).attr("disabled") == "disabled") {
                return false;
            } else {
                get_jadwal_dokter()
            }
        })

        function get_jadwal_dokter() {
            var vcategory = "get_jadwal_dokter"
            var vurl = "./backend.php/" + vcategory
            check_connection(vurl, vcategory)
        }
    </script>

</body>

</html>