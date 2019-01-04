<?php

include 'base_config.php';
/**
 * condo gruop field
 */
$array_cond_grp = [
    'Property_Feature' => ['Prop_feat4_out', 'Prop_feat5_out', 'Prop_feat6_out', 'Prop_feat3_out', 'Prop_feat1_out', 'Prop_feat2_out'],
    ' Ameinties' => ['Bldg_amen1_out', 'Bldg_amen2_out', 'Bldg_amen3_out', 'Bldg_amen4_out', 'Bldg_amen5_out', 'Bldg_amen6_out'],
    'Basement' => ['Bsmt1_out', 'Bsmt2_out'],
    'Locker' => ['Locker_lev_unit', 'Locker_unit', 'Locker', 'Locker_num'],
    'Washrooms' => ['Bath_tot', 'Wcloset_p1', 'Wcloset_p2', 'Wcloset_p3', 'Wcloset_p4', 'Wcloset_p5', 'Wcloset_t1', 'Wcloset_t1lvl'],
    'Bedrooms' => ['Br_plus', 'Br'],
    'Area' => ['Area', 'Area_code'],
    'Heat' => ['Fuel', 'Heat_inc', 'Heating', 'Fpl_num'],
    'Designation' => ['Spec_des1_out', 'Spec_des2_out', 'Spec_des3_out', 'Spec_des4_out', 'Spec_des5_out', 'Spec_des6_out'],
    'Status' => ['Lsc', 'Status'],
    'Restrictions' => ['Easement_rest1', 'Easement_rest2', 'Easement_rest3', 'Easement_rest4'],
    'Descreption' => ['Ad_text', 'Vend_pis'],
    'Power' => ['Alt_power1', 'Alt_power2'],
    'Construction' => ['Constr1_out', 'Constr2_out', 'Corp_num', 'Maint', 'Furnished', 'Condo_corp'],
    'Kitchen' => ['Kit_plus'],
    'Laundry' => ['Laundry', 'Laundry_lev'],
    'Balcony' => ['Patio_ter'],
    'Shore_allow' => ['Shore_allow', 'Shoreline1', 'Shoreline2', 'Shoreline_exp'],
    'Sewage' => ['Sewage1', 'Sewage2'],
    'Handi_equipped' => ['Handi_equipped'],
    'A_c' => ['A_c'],
    'Addl_mo_fee' => ['Addl_mo_fee'],
    'All_inc' => ['All_inc'],
    'Apt_num' => ['Apt_num'],
    'Cable' => ['Cable'],
    'Cac_inc' => ['Cac_inc'],
    'Central_vac' => ['Central_vac'],
    'Com_coopb' => ['Com_coopb'],
    'Comel_inc' => ['Comel_inc'],
    'Cond' => ['Cond'],
    'Condo_exp' => ['Condo_exp'],
    'Insur_bldg' => ['Insur_bldg'],
    'Internet' => ['Internet'],
    'Pets' => ['Pets'],
    'Pr_lsc' => ['Pr_lsc'],
    'Pvt_ent' => ['Pvt_ent'],
    'Hydro_inc' => ['Hydro_inc'],
    'Retirement' => ['Retirement'],
    'Uffi' => ['Uffi'],
    'Unit_num' => ['Unit_num'],
];
$common_group = [
    'date' => ['Dt_sus', 'Dt_ter', 'Pix_updt', 'Oh_date1', 'Oh_date2', 'Oh_date3', 'Oh_dt_stamp', 'Oh_to1', 'Oh_to2', 'Oh_to3', 'Oh_from1', 'Oh_from2', 'Oh_from3', 'Cd', 'Cndsold_xd', 'Input_date', 'Ld', 'Occ', 'Td', 'Unavail_dt', 'Vtour_updt', 'Xd', 'Xdtd'],
    'Municipality' => ['Municipality', 'Municipality_code', 'Municipality_district'],
    'price' => ['Lp_dol', 'Orig_dol', 'Perc_dif', 'Sp_dol'],
    'Community' => ['Community'],
    'Tour_url' => ['Tour_url'],
    'Street' => ['St_sfx', 'St_num', 'St_dir', 'St', 'Cross_st'],
    'Address' => ['Disp_addr', 'Addr', 'County', 'Parcel_id'],
    'Type' => ['S_r', 'Type_own_srch', 'Type_own1_out'],
    'Elevator' => ['Elevator'],
    'Rural_Services' => ['Rural_svc1', 'Rural_svc2', 'Rural_svc3', 'Rural_svc4', 'Rural_svc5'],
    'Garage' => ['Gar', 'Gar_type'],
    'Tax' => ['Cond_txinc', 'Taxes', 'Yr'],
    'Green_pis' => ['Green_pis'],
    'Map' => ['Mmap_col', 'Mmap_page', 'Mmap_row'],
    'Broker' => ['Rltr'],
    'Extras' => ['Extras'],
    'property_Area' => ['Sqft', 'Style'],
    'Zip' => ['Zip'],
    'Zoning' => ['Zoning'],
    'Dom' => ['Dom'],
    'Cert_lvl' => ['Cert_lvl'],
    'Energy_cert' => ['Energy_cert'],
    'Tv' => ['Tv'],
    'Ml_num' => ['Ml_num'],
    'Parking' => ['Tot_park_spcs', 'Prkg_inc', 'Park_spcs', 'Park_spc2', 'Park_spc1', 'Park_lgl_desc2', 'Park_lgl_desc1', 'Park_fac', 'Park_desig_2', 'Park_desig', 'Park_chgs'],
    'Water' => ['Water', 'Water_exp', 'Wtr_suptyp', 'Water_inc', 'Water_body', 'Water_type', 'Water_front', 'Water_feat1', 'Water_feat2', 'Water_feat3', 'Water_feat4', 'Water_feat5', 'Water_acc_bldg1', 'Water_acc_bldg2', 'Water_del_feat1', 'Water_del_feat2'],
    'Total_Rooms' => ['rms'],
    'Room1' => ['Rm1_out', 'Rm1_wth', 'Rm1_len', 'Rm1_dc2_out', 'Rm1_dc1_out', 'Level1'],
    'Room2' => ['Rm2_out', 'Rm2_wth', 'Rm2_len', 'Rm2_dc2_out', 'Rm2_dc1_out', 'Level2'],
    'Room3' => ['Rm3_out', 'Rm3_wth', 'Rm3_len', 'Rm3_dc2_out', 'Rm3_dc1_out', 'Level3'],
    'Room4' => ['Rm4_out', 'Rm4_wth', 'Rm4_len', 'Rm4_dc2_out', 'Rm4_dc1_out', 'Level4'],
    'Room5' => ['Rm5_out', 'Rm5_wth', 'Rm5_len', 'Rm5_dc2_out', 'Rm5_dc1_out', 'Level5'],
    'Room6' => ['Rm6_out', 'Rm6_wth', 'Rm6_len', 'Rm6_dc2_out', 'Rm6_dc1_out', 'Level6'],
    'Room7' => ['Rm7_out', 'Rm7_wth', 'Rm7_len', 'Rm7_dc2_out', 'Rm7_dc1_out', 'Level7'],
    'Room8' => ['Rm8_out', 'Rm8_wth', 'Rm8_len', 'Rm8_dc2_out', 'Rm8_dc1_out', 'Level8'],
    'Room9' => ['Rm9_out', 'Rm9_wth', 'Rm9_len', 'Rm9_dc2_out', 'Rm9_dc1_out', 'Level9'],
    'Room10' => ['Rm10_out', 'Rm10_wth', 'Rm10_len', 'Rm10_dc2_out', 'Rm10_dc1_out', 'Level10'],
    'Room11' => ['Rm11_out', 'Rm11_wth', 'Rm11_len', 'Rm11_dc2_out', 'Rm11_dc1_out', 'Level11'],
    'Room12' => ['Rm12_out', 'Rm12_wth', 'Rm12_len', 'Rm12_dc2_out', 'Rm12_dc1_out', 'Level12'],
    'created_date' => ['created_date'],
    'updated_date' => ['updated_date'],
    'Image_path' => [''],
    'pClassName' => ['pClassName']
];
$commericial_group = [
    'Area_infl1_out' => ['Area_infl1_out'],
    'Area_infl2_out' => ['Area_infl2_out'],
    'Bay_size1' => ['Bay_size1'],
    'Bay_size1_in' => ['Bay_size1_in'],
    'Bay_size2' => ['Bay_size2'],
    'Bay_size2_in' => ['Bay_size2_in'],
    'Bus_type' => ['Bus_type'],
    'Ceil_ht' => ['Ceil_ht'],
    'Ceil_ht_in' => ['Ceil_ht_in'],
    'Chattels' => ['Chattels'],
    'Com_chgs' => ['Com_chgs'],
    'Com_cn_fee' => ['Com_cn_fee'],
    'Crane' => ['Crane'],
    'Days_open' => ['Days_open'],
    'Dba' => ['Dba'],
    'Depth' => ['Depth'],
    'Employees' => ['Employees'],
    'Exp_actest' => ['Exp_actest'],
    'Fin_stmnt' => ['Fin_stmnt'],
    'Franchise' => ['Franchise'],
    'Freestandg' => ['Freestandg'],
    'Front_ft' => ['Front_ft'],
    'Ind_area' => ['Ind_area'],
    'Ind_areacd' => ['Ind_areacd'],
    'Inventory' => ['Inventory'],
    'Irreg' => ['Irreg'],
    'Llbo' => ['Llbo'],
    'Lot' => ['Lot_code', 'Lotsz_code', 'Lp_code'],
    'Net_inc' => ['Net_inc'],
    'Occ' => ['Occ'],
    'Off_areacd' => ['Off_areacd'],
    'Oper_exp' => ['Oper_exp'],
    'Other' => ['Other'],
    'Out_storg' => ['Out_storg'],
    'Perc_bldg' => ['Perc_bldg'],
    'Prop_type' => ['Prop_type'],
    'Rail' => ['Rail'],
    'Retail_a' => ['Retail_a'],
    'Retail_ac' => ['Retail_ac'],
    'Seats' => ['Seats'],
    'doorfitheight' => ['Shpdrsdlhtft', 'Shpdrsdlhtin', 'Shpdrsdlnu', 'Shpdrsdlwdft', 'Shpdrsdlwdin', 'Shpdrsdmhtft', 'Shpdrsdmhtin', 'Shpdrsdmnu', 'Shpdrsdmwdft', 'Shpdrsdmwdin', 'Shpdrsglhtft', 'Shpdrsglhtin', 'Shpdrsglnu', 'Shpdrsglwdft', 'Shpdrsglwdin', 'Shpdrstlhtft', 'Shpdrstlhtin', 'Shpdrstlnu', 'Shpdrstlwdft', 'Shpdrstlwdin'],
    'Sewer' => ['Sewer'],
    'Soil_test' => ['Soil_test'],
    'Sprinklers' => ['Sprinklers'],
    'Terms' => ['Terms'],
    'Tot_area' => ['Tot_area'],
    'Utilities' => ['Utilities'],
    'Vac_perc' => ['Vac_perc'],
    'Vend_pis' => ['Vend_pis'],
    'Volts' => ['Volts'],
    'Volts' => ['Volts'],
];
$delete_group = [
    'Deleted_timestamp' => ['Deleted_timestamp'],
    'Ml_num'=>['Ml_num']
];
$temp_record = Array();
$array_data = Array();
$status=0;
// find the data from trebdirect
$trebdi_data =$trebdirect->find([], ['limit' => $_args->limit]);

foreach ($trebdi_data as $entry) {
    $array_data = $entry->getArrayCopy();
    $array_data['created_date'] = date('d-m-Y h-i-s');
    $array_data['pClassName'] = 'condo';
    // check in temp
    
  for ($i = 0; $i <10; $i++) {
     if (($temp_record[$i]['Ml_num']['Ml_num'] == $array_data['Ml_num'])) {
           $status=$status++;
            }
  }
        if($status==1)
        {
           print_r("data is duplicate for this Ml_num");  
        }
        else {
            // check in db
          $existing_document = (array)$trebsqy->findOne(['Ml_num.Ml_num' =>$array_data['Ml_num']]);
            if (!empty($existing_document)) {
                foreach ($existing_document as $key=>$value)
                {
                    foreach ($value as $k=>$v)
                    {
                        $exist_data[$k]=$v;
                    }  
                }
                $ref_id=$exist_data['oid'];
                $data_id[]=$array_data['oid'];
                unset($array_data['_id']);
                unset($exist_data['oid']);
                $diff= array_diff($array_data, $exist_data);
                if(empty($diff))
                {
                 //value exist
                $log_filename = "log";
                $log_file_data = $log_filename . '/log_Duplicate' . date('d-M-Y') . '.log';
                file_put_contents($log_file_data, "data already exist for-" . $data_array['Ml_num'] . "\n", FILE_APPEND);
                }
               else {
                $new_response = SqyDataMapper::mapData($array_data, $array_cond_grp, $common_group, $delete_group, $commericial_group);
                $insertOneResult = $trebsqy->insertOne($new_response);
                $pid=(array)$insertOneResult->getInsertedId();
                $revision = [
                    'revision_date' => date('d-m-s h-i-s'),
                    'ref_id' =>$pid['oid'],
                    'type_revision' => 'published',
                             ];
                $insertOneResult = $trebsqy_publish->insertOne($revision);
                $updateResult = $trebsqy_publish->updateOne(
                       ['ref_id' =>$ref_id],
                       ['$set' =>['type_revision'=>'History']],
                       [ 'upsert'=> true ]
                     );
            }
                
            } else {
                $new_response = SqyDataMapper::mapData($array_data, $array_cond_grp, $common_group, $delete_group, $commericial_group);
                $temp_record[]=$new_response;
               
                  }
        }
    
   
}

if (count($temp_record) > 10) {
    $res = SqyDataMapper::insertData($temp_record, $trebsqy,$trebsqy_publish,$data_id);
    $temp_record =[];
    $data_id=[];
}

class SqyDataMapper {

    public static function mapData($data_array, $array_cond_grp, $common_group, $delete_group, $commericial_group) {
        if (!isset($data_array['pClassName'])) {
            $log_filename = "log";
            $log_file_data = $log_filename . '/log_' . date('d-M-Y') . '.log';
            file_put_contents($log_file_data, "class type does not exist for-" . $data_array['Ml_num'] . "\n", FILE_APPEND);
        }
        switch ($data_array['pClassName']) {
            case 'condo':
                $field_group = array_merge($array_cond_grp, $common_group);
                
                foreach ($field_group as $key => $value) {
                    $d[$key] = (array_intersect_key($data_array, array_flip($value)));
                }
                return $d;
                break;
            case 'commerical':
                $field_group = array_merge($common_group, $commericial_group);
                foreach ($field_group as $key => $value) {
                    $d[$key] = (array_intersect_key($data_array, array_flip($value)));
                }
                return $d;
                break;
            case 'residential':
                $field_group = array_merge($array_cond_grp, $common_group);
                foreach ($field_group as $key => $value) {
                    $d[$key] = (array_intersect_key($data_array, array_flip($value)));
                }
                return $d;
                break;
            case 'DeletedProperty':
                break;
            default :
                print_r("class type does not exist for" . $data_array['Ml_num']);
                break;
        }
    }
    public static function insertData($temp_data, $trebsqy,$trebsqy_publish,$data_id) {
        // update the field is_imported
        $temp=array();
        $insertedResult = $trebsqy->insertMany($temp_data);
        $document_id=(array)$insertedResult->getInsertedIds();
        foreach ($document_id as $args)
        {
             $p_id=(array)$args;
            $pdata['ref_id']=$p_id['oid'];
            $pdata['created_date']=date('d-m-s h-i-s');
            $pdata['type_revision']='publish'; 
            $temp[]=$pdata;
            $pdata=[];
        }
      $insertedResult = $trebsqy_publish->insertMany($temp);
      die("successfully");
      // update the flag in trebdirect
    //  foreach ($data_id as $k=>$value)
      //{
          
      //}
        
        
    }

}
