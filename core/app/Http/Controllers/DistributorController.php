<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use DB;

session_start();

class DistributorController extends Controller
{
    //user gpx file upload report
    public function summaryUpload()
    {
        $user = auth()->user();
        $u_id = $user->id;
        $gpxes = SGpx::where('user_id', '=', $u_id)->get()->all();
        return view('admin.report.uploadReport')->with(compact('gpxes'));
    }


    public function orderDetails(Request $request)
    { 
        $data = DB::select("SELECT `code`,`name` FROM test7.`td_item` WHERE 1 limit 1");


        //print("This polygon has an area of " . $area);
        return view('admin.report.demo')->with('data', $data);

    }
    public function ItemSummary(Request $request)
    {
        $data = DB::select("SELECT `code`,`name` FROM test7.`td_item` WHERE 1 limit 1");
        $sr = DB::select("SELECT t3.aemp_name, t3.aemp_usnm, t3.id FROM mydb_uae.`tl_srdi` t1 INNER JOIN mydb_uae.tm_dlrm t2 ON t1.dlrm_id = t2.id INNER JOIN mydb_uae.tm_aemp t3 ON t1.aemp_id = t3.id WHERE t2.dlrm_code = '18'");


        //print("This polygon has an area of " . $area);
        return view('admin.report.item_summary')->with('sr', $sr)->with('data', $data);

    }

    public function distributorOrderItemSummaryFilter(Request $request)
    {
        $from_date = '2020-10-01';
        $srid = '3';
        $dlr = '14053';

        if ($srid != '') {
            $sql = "SELECT
  t1.ordm_date,
  t4.slgp_name,
  t8.amim_name,
  t8.amim_code,
  t7.ordd_uprc,
  sum(t7.ordd_qnty) as t_qnty,
  sum(t7.ordd_oamt) as t_amnt
FROM mydb_uae.`tt_ordm` t1
  INNER JOIN mydb_uae.tm_slgp t4 ON t1.slgp_id = t4.id
  INNER JOIN mydb_uae.tt_ordd t7 ON t1.id = t7.ordm_id
  INNER JOIN mydb_uae.tm_amim t8 ON t7.amim_id = t8.id
WHERE t1.ordm_date='$from_date' and t1.dlrm_id='18' AND t1.aemp_id='$srid' GROUP BY t8.amim_code, t1.ordm_date";
        } else {
            $sql = "SELECT
  t1.ordm_date,
  t4.slgp_name,
  t8.amim_name,
  t8.amim_code,
  t7.ordd_uprc,
  sum(t7.ordd_qnty) as t_qnty,
  sum(t7.ordd_oamt) as t_amnt
FROM mydb_uae.`tt_ordm` t1
  INNER JOIN mydb_uae.tm_slgp t4 ON t1.slgp_id = t4.id
  INNER JOIN mydb_uae.tt_ordd t7 ON t1.id = t7.ordm_id
  INNER JOIN mydb_uae.tm_amim t8 ON t7.amim_id = t8.id
WHERE t1.ordm_date='$from_date' and t1.dlrm_id='$dlr' GROUP BY t8.amim_code, t1.ordm_date";
        }

        DB::connection($this->db)->select(DB::raw("SET sql_mode=''"));
        $srData = DB::connection($this->db)->select(DB::raw($sql));

        return $srData;
    }
}
