<?php
require_once('vendor/autoload.php');

class Backend
{
    //key bpjs
    protected $dataBpjs = ""; //masukan X-cons-id
    protected $secretKeyBpjs = ""; //masukan secretkey
    protected $userKeyBpjs = ""; //masukan user_key antrol
    protected $userKeyBpjs2 = ""; //user_key user_key vclaim

    public function __construct()
    {
        //
    }

    public function index()
    {
        header('Content-Type: application/json; charset=utf-8');
        $uri = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
        if (isset($uri[3])) {
            if ($uri[3] == "rencana_kontrol") {
                $this->rencana_kontrol();
            } else if ($uri[3] == "dashboard_perhari") {
                $this->dashboard_perhari();
            } else if ($uri[3] == "list_multi_rujukan") {
                $this->list_multi_rujukan();
            } else if ($uri[3] == "get_data_nokartu") {
                $this->get_data_nokartu();
            } else if ($uri[3] == "get_data_sep") {
                $this->get_data_sep();
            } else if ($uri[3] == "jumlah_sep") {
                $this->jumlah_sep();
            } else if ($uri[3] == "delete_sep") {
                $this->delete_sep();
            } else if ($uri[3] == "update_sep") {
                $this->update_sep();
            } else if ($uri[3] == "insert_sep") {
                $this->insert_sep();
            } else if ($uri[3] == "dashboard_perhari") {
                $this->dashboard_perhari();
            } else if ($uri[3] == "dashboard_perbulan") {
                $this->dashboard_perbulan();
            } else if ($uri[3] == "data_list_taskid") {
                $this->data_list_taskid();
            } else if ($uri[3] == "get_jadwal_dokter") {
                $this->get_jadwal_dokter();
            }
        } else {
            echo json_encode([
                "metadata" => [
                    "message" => "NOT FOUND",
                    "code" => 404
                ]
            ]);
        }
    }

    function BpjsSend($method = "GET", $url, $data = "", $content = "application/json")
    {
        // Computes the timestamp
        date_default_timezone_set('UTC');
        $tStamp = strval(time() - strtotime('1970-01-01 00:00:00'));
        // Computes the signature by hashing the salt with the secret key as the key
        $signature = hash_hmac('sha256', $this->dataBpjs . "&" . $tStamp, $this->secretKeyBpjs, true);
        $encodedSignature = base64_encode($signature);

        $headers = array(
            "Content-Type: application/json",
            'X-cons-id:' . $this->dataBpjs,
            'X-timestamp:' . $tStamp,
            'X-signature:' . $encodedSignature,
            'user_key:' . $this->userKeyBpjs
        );

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, $method);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        if ($method != 'GET') {
            curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
        }

        $response = curl_exec($curl);

        curl_close($curl);
        return $response;
    }

    // Dashboard Koneksi Server BPJS Vclaim
    public function rencana_kontrol()
    {
        $noSuratKontrol = "0301R0010120K000003";
        $data = "";
        $url = "https://apijkn.bpjs-kesehatan.go.id/vclaim-rest/RencanaKontrol/noSuratKontrol/{$noSuratKontrol}";
        $result = $this->BpjsSend("GET", $url, $data);

        echo $result;
    }

    public function list_multi_rujukan()
    {
        $Peserta = ""; //silahkan isi no nik ktp / no bpjs peserta untuk test
        $data = "";
        $url = "https://apijkn.bpjs-kesehatan.go.id/vclaim-rest/Rujukan/List/Peserta/{$Peserta}";
        $result1 = $this->BpjsSend("GET", $url, $data);
        $url = "https://apijkn.bpjs-kesehatan.go.id/vclaim-rest/Rujukan/RS/List/Peserta/{$Peserta}";
        $result2 = $this->BpjsSend("GET", $url, $data);

        echo json_encode([
            "result1" => json_decode($result1),
            "result2" => json_decode($result2),
        ]);
    }

    public function get_data_nokartu()
    {
        $nokartu = ""; //silahkan isi no bpjs peserta untuk test
        $nik = ""; //silahkan isi no ktp peserta untuk test
        $tglSEP = date("Y-m-d");
        $data = "";
        $url = "https://apijkn.bpjs-kesehatan.go.id/vclaim-rest/Peserta/nokartu/{$nokartu}/tglSEP/{$tglSEP}";
        $result1 = $this->BpjsSend("GET", $url, $data);
        $url = "https://apijkn.bpjs-kesehatan.go.id/vclaim-rest/Peserta/nik/{$nik}/tglSEP/{$tglSEP}";
        $result2 = $this->BpjsSend("GET", $url, $data);

        echo json_encode([
            "result1" => json_decode($result1),
            "result2" => json_decode($result2),
        ]);
    }

    public function get_data_sep()
    {
        $SEP = ""; //silahkan isi no sep peserta untuk test
        $data = "";
        $url = "https://apijkn.bpjs-kesehatan.go.id/vclaim-rest/SEP/{$SEP}";
        $result = $this->BpjsSend("GET", $url, $data);

        echo $result;
    }

    public function jumlah_sep()
    {
        $JenisRujukan = "2";
        $Rujukan = ""; //silahkan isi no rujukan peserta untuk test
        $data = "";
        $url = "https://apijkn.bpjs-kesehatan.go.id/vclaim-rest/Rujukan/JumlahSEP/{$JenisRujukan}/{$Rujukan}";
        $result = $this->BpjsSend("GET", $url, $data);

        echo $result;
    }

    public function delete_sep()
    {
        $data = json_encode([
            "t_sep" => [
                "noSep" => "", //silahkan isi no sep peserta untuk test
                "user" => "Coba Ws"
            ]
        ]);
        $url = "https://apijkn.bpjs-kesehatan.go.id/vclaim-rest/SEP/Delete";
        $result = $this->BpjsSend("DELETE", $url, $data);

        echo $result;
    }

    public function update_sep()
    {
        $data = array(
            "request" => array(
                "t_sep" => array(
                    "noSep" => "", //silahkan isi no sep peserta untuk test
                    "klsRawat" => array(
                        "klsRawatHak" => "3",
                        "klsRawatNaik" => "",
                        "pembiayaan" => "",
                        "penanggungJawab" => ""
                    ),
                    "noMR" => "00469120",
                    "catatan" => "",
                    "diagAwal" => "E10",
                    "poli" => array(
                        "tujuan" => "IGD",
                        "eksekutif" => "0"
                    ),
                    "cob" => array(
                        "cob" => "0"
                    ),
                    "katarak" => array(
                        "katarak" => "0"
                    ),
                    "jaminan" => array(
                        "lakaLantas" => "0",
                        "penjamin" => array(
                            "tglKejadian" => "",
                            "keterangan" => "",
                            "suplesi" => array(
                                "suplesi" => "0",
                                "noSepSuplesi" => "",
                                "lokasiLaka" => array(
                                    "kdPropinsi" => "",
                                    "kdKabupaten" => "",
                                    "kdKecamatan" => ""
                                )
                            )
                        )
                    ),
                    "dpjpLayan" => "46",
                    "noTelp" => "08522038363",
                    "user" => "Cobaws"
                )
            )
        );
        $url = "https://apijkn.bpjs-kesehatan.go.id/vclaim-rest/SEP/2.0/update";
        $result = $this->BpjsSend("PUT", $url, $data);

        echo $result;
    }

    public function insert_sep()
    {
        $data = array(
            "request" => array(
                "t_sep" => array(
                    "noKartu" => "0001105689835",
                    "tglSep" => "2021-07-30",
                    "ppkPelayanan" => "0301R011",
                    "jnsPelayanan" => "1",
                    "klsRawat" => array(
                        "klsRawatHak" => "2",
                        "klsRawatNaik" => "1",
                        "pembiayaan" => "1",
                        "penanggungJawab" => "Pribadi"
                    ),
                    "noMR" => "MR9835",
                    "rujukan" => array(
                        "asalRujukan" => "2",
                        "tglRujukan" => "2021-07-23",
                        "noRujukan" => "RJKMR9835001",
                        "ppkRujukan" => "0301R011"
                    ),
                    "catatan" => "testinsert RI",
                    "diagAwal" => "E10",
                    "poli" => array(
                        "tujuan" => "",
                        "eksekutif" => "0"
                    ),
                    "cob" => array(
                        "cob" => "0"
                    ),
                    "katarak" => array(
                        "katarak" => "0"
                    ),
                    "jaminan" => array(
                        "lakaLantas" => "0",
                        "noLP" => "12345",
                        "penjamin" => array(
                            "tglKejadian" => "",
                            "keterangan" => "",
                            "suplesi" => array(
                                "suplesi" => "0",
                                "noSepSuplesi" => "",
                                "lokasiLaka" => array(
                                    "kdPropinsi" => "",
                                    "kdKabupaten" => "",
                                    "kdKecamatan" => ""
                                )
                            )
                        )
                    ),
                    "tujuanKunj" => "0",
                    "flagProcedure" => "",
                    "kdPenunjang" => "",
                    "assesmentPel" => "",
                    "skdp" => array(
                        "noSurat" => "0301R0110721K000021",
                        "kodeDPJP" => "31574"
                    ),
                    "dpjpLayan" => "",
                    "noTelp" => "081111111101",
                    "user" => "Coba Ws"
                )
            )
        );
        $url = "https://apijkn.bpjs-kesehatan.go.id/vclaim-rest/SEP/2.0/insert";
        $result = $this->BpjsSend("POST", $url, $data);

        echo $result;
    }

    // Dashboard Koneksi Server BPJS Antrol
    public function dashboard_perhari()
    {
        $this->userKeyBpjs = $this->userKeyBpjs2;
        $tanggal = date("Y-m-d");
        $waktu = time();
        $data = "";
        $url = "https://apijkn.bpjs-kesehatan.go.id/antreanrs/dashboard/waktutunggu/tanggal/{$tanggal}/waktu/{$waktu}";
        $result = $this->BpjsSend("GET", $url, $data);

        echo $result;
    }

    public function dashboard_perbulan()
    {
        $this->userKeyBpjs = $this->userKeyBpjs2;
        $bulan = date("m");
        $tahun = date("Y");
        $waktu = time();
        $data = "";
        $url = "https://apijkn.bpjs-kesehatan.go.id/antreanrs/dashboard/waktutunggu/bulan/{$bulan}/tahun/{$tahun}/waktu/{$waktu}";
        $result = $this->BpjsSend("GET", $url, $data);
        echo $result;
    }

    public function data_list_taskid()
    {
        $this->userKeyBpjs = $this->userKeyBpjs2;
        $data = json_encode([
            'kodebooking' => '2301000051', //silahkan isi no kodebooking antrian untuk test
        ]);
        $url = "https://apijkn.bpjs-kesehatan.go.id/antreanrs/antrean/getlisttask";
        $result = $this->BpjsSend("POST", $url, $data);
        echo $result;
    }

    public function get_jadwal_dokter($kodepoli = "INT")
    {
        $this->userKeyBpjs = $this->userKeyBpjs2;
        $tanggal = date("Y-m-d");
        $data = "";
        $url = "https://apijkn.bpjs-kesehatan.go.id/antreanrs/jadwaldokter/kodepoli/{$kodepoli}/tanggal/{$tanggal}";
        $result = $this->BpjsSend("GET", $url, $data);
        echo $result;
    }
}

$backend = new Backend();
$backend->index();
