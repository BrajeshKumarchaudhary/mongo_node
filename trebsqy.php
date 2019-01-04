<?php

include 'base_config.php';
/**
 * condo gruop field
 */
$array_cond_grp = [
'Property_Feature' => ['Insur_bldg','Prop_feat4_out', 'Prop_feat5_out', 'Prop_feat6_out', 'Prop_feat3_out', 'Prop_feat1_out', 'Prop_feat2_out'],
 'Ameinties' => ['Bldg_amen1_out', 'Bldg_amen2_out', 'Bldg_amen3_out', 'Bldg_amen4_out', 'Bldg_amen5_out', 'Bldg_amen6_out'],
 'Basement' => ['Bsmt1_out', 'Bsmt2_out'],
 'Locker' => ['Locker_lev_unit', 'Locker_unit', 'Locker', 'Locker_num'],
 'Washrooms' => ['Bath_tot', 'wcloset_p1','wcloset_p2','wcloset_p3','wcloset_p4','wcloset_p5','wcloset_t1','wcloset_t1lvl','wcloset_t2','wcloset_t2lvl', 'wcloset_t3', 'wcloset_t3lvl', 'wcloset_t4', 'wcloset_t4lvl', 'wcloset_t5', 'wcloset_t5lvl'],
 'Bedrooms' => ['Br_plus', 'Br'],
 'Area' => ['Area', 'Area_code','Unit_num'],
 'Heat' => ['Fuel', 'Heat_inc', 'Heating', 'Fpl_num'],
 'Designation' => ['Spec_des1_out', 'Spec_des2_out', 'Spec_des3_out', 'Spec_des4_out', 'Spec_des5_out', 'Spec_des6_out'],
 'Status' => ['Lsc', 'Status'],
 'Restrictions' => ['Easement_rest1', 'Easement_rest2', 'Easement_rest3', 'Easement_rest4'],
 'Descreption' => ['Ad_text', 'Vend_pis'],
 'Power' => ['Alt_power1', 'Alt_power2'],
 'Exterior' => ['Condo_exp','Constr1_out', 'Constr2_out', 'Corp_num', 'Maint', 'Furnished', 'Condo_corp','Patio_ter'],
 'Kitchen' => 'Kit_plus',
 'Laundry' => ['Laundry', 'Laundry_lev'],
 'Shore_allow' => ['Shore_allow', 'Shoreline1', 'Shoreline2', 'Shoreline_exp'],
 'Sewage' => ['Sewage1', 'Sewage2'],
 'Handi_equipped' => 'Handi_equipped',
 'A_c' => 'A_c',
 'Addl_mo_fee' => 'Addl_mo_fee',
 'All_inc' => 'All_inc',
 'Apt_num' => 'Apt_num',
 'Cable' => 'Cable',
 'include_cost' => ['heat_inc', 'Hydro_inc', 'water_inc', 'cable', 'condo_txinc', 'cac_inc', 'comel_inc', 'insure_bldg', 'prkg_inc'],
 'Com_coopb' => 'Com_coopb',
 'Cond' => 'Cond',
 'Internet' => 'Internet',
 'Interior' => ['Pets','Uffi','Elevator','Central_vac'],
 'Pr_lsc' => 'Pr_lsc',
 'Pvt_ent' => 'Pvt_ent',
 'Retirement' => 'Retirement',
];
$common_group = [
    'date' => ['Dt_sus', 'Dt_ter', 'Pix_updt', 'Oh_date1', 'Oh_date2', 'Oh_date3', 'Oh_dt_stamp', 'Oh_to1', 'Oh_to2', 'Oh_to3', 'Oh_from1', 'Oh_from2', 'Oh_from3', 'Cd', 'Cndsold_xd', 'Input_date', 'Ld', 'Occ', 'Td', 'Unavail_dt', 'Vtour_updt', 'Xd', 'Xdtd'],
    'Municipality' => ['Municipality', 'Municipality_code', 'Municipality_district'],
    'price' => ['Lp_dol', 'Orig_dol', 'Perc_dif', 'Sp_dol'],
    'Community' => 'Community',
    'Tour_url' => 'Tour_url',
    'Street' => ['St_sfx', 'St_num', 'St_dir', 'St', 'Cross_st'],
    'Address' => ['Disp_addr', 'Addr', 'County', 'Parcel_id'],
    'Type' => ['Type_own_srch', 'Type_own1_out'],
    'S_r' => 'S_r',
    'Rural_Services' => ['Rural_svc1', 'Rural_svc2', 'Rural_svc3', 'Rural_svc4', 'Rural_svc5'],
    'Garage' => ['Gar', 'Gar_type'],
    'Tax' => ['Cond_txinc', 'Taxes', 'Yr'],
    'Green_pis' => 'Green_pis',
    'Map' => ['Mmap_col', 'Mmap_page', 'Mmap_row'],
    'Broker' => 'Rltr',
    'Extras' => 'Extras',
    'property_Area' => ['Sqft', 'Style'],
    'Zip' => 'Zip',
    'Zoning' => 'Zoning',
    'Dom' => 'Dom',
    'Energy_cert' => ['Energy_cert', 'Cert_lvl'],
    'Tv' => 'Tv',
    'Ml_num' => 'Ml_num',
    'Parking' => ['Tot_park_spcs', 'Prkg_inc', 'Park_spcs', 'Park_spc2', 'Park_spc1', 'Park_lgl_desc2', 'Park_lgl_desc1', 'Park_fac', 'Park_desig_2', 'Park_desig', 'Park_chgs'],
    'Water' => ['Water', 'Water_exp', 'Wtr_suptyp', 'Water_inc', 'Water_body', 'Water_type', 'Water_front', 'Water_feat1', 'Water_feat2', 'Water_feat3', 'Water_feat4', 'Water_feat5', 'Water_acc_bldg1', 'Water_acc_bldg2', 'Water_del_feat1', 'Water_del_feat2'],
    'Total_Rooms' => 'Rms',
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
    'sync_date' => 'sync_date',
    'Image_path' => [''],
    'pClassName' => 'pClassName',
    'updated_timestamp' => 'Timestamp_sql'
];
$commericial_group = [
    'Area_Influences' => ['Area_infl1_out', 'Area_infl2_out'],
    'Bay_size' => ['Bay_size1', 'Bay_size1_in', 'Bay_size2', 'Bay_size2_in'],
    'Bus_type' => 'Bus_type',
    'clear_height' => ['Ceil_ht', 'Ceil_ht_in'],
    'Crane' => 'Crane',
    'building_name' => 'Dba',
    'Employees' => 'Employees',
    'Franchise' => 'Franchise',
    'Freestandg' => 'Freestandg',
    'Ind_area' => ['Ind_area', 'Ind_areacd'],
    'Lot' => ['Lot_code', 'Lotsz_code', 'Lp_code', 'Depth', 'front_ft', 'irreg'],
    'Occ' => 'Occ',
    'office_area' => ['oa_area', 'Off_areacd'],
    'Out_storg' => 'Out_storg',
    'Perc_bldg' => 'Perc_bldg',
    'Prop_type' => 'Prop_type',
    'Rail' => 'Rail',
    'Retail_Area' => ['Retail_a', 'Retail_ac'],
    'Finacial_info' => ['hours_open', 'Days_open', 'Chattels', 'Fin_stmnt', 'yr_exp', 'Net_inc', 'Vac_perc', 'Seats', 'Llbo', 'insur', 'other', 'Inventory', 'Com_chgs', 'Com_cn_fee', 'Exp_actest', 'Oper_exp', 'heat_exp', 'hydro_exp', 'water_exp', 'gross_inc', ''],
    'ship_door' => ['Shpdrsdlhtft', 'Shpdrsdlhtin', 'Shpdrsdlnu', 'Shpdrsdlwdft', 'Shpdrsdlwdin', 'Shpdrsdmhtft', 'Shpdrsdmhtin', 'Shpdrsdmnu', 'Shpdrsdmwdft', 'Shpdrsdmwdin', 'Shpdrsglhtft', 'Shpdrsglhtin', 'Shpdrsglnu', 'Shpdrsglwdft', 'Shpdrsglwdin', 'Shpdrstlhtft', 'Shpdrstlhtin', 'Shpdrstlnu', 'Shpdrstlwdft', 'Shpdrstlwdin'],
    'Sewer' => 'Sewer',
    'Soil_test' => 'Soil_test',
    'Sprinklers' => 'Sprinklers',
    'Terms' => 'Terms',
    'Tot_area' => 'Tot_area',
    'Utilities' => 'Utilities',
    'Vend_pis' => 'Vend_pis',
    'Volts' => 'Volts',
    'survey' => 'survey'
];
$delete_group = [
    'Deleted_timestamp' => ['Deleted_timestamp'],
    'Ml_num' => ['Ml_num']
];
$temp_record = Array();
$array_data = Array();
$is_import = Array();
$status = 0;
$trebdi_data = $trebdirect->find(['is_imported' => 0], ['limit' => (int) $_args->limit]);
foreach ($trebdi_data as $entry) {
    $array_data = $entry->getArrayCopy();
    $array_data['sync_date'] = date('d-m-Y h-i-s');
    // check in temp
    if (!empty($temp_record)) {
        for ($i = 0; $i < count($temp_record); $i++) {
            if (($temp_record[$i]['Ml_num'] == $array_data['Ml_num'])) {
                $status = $status++;
            }
        }
    }
    if ($status == 1) {
        print_r("data is duplicate for this" . $array_data['Ml_num']);
    } else {
        $existing_document = (array) $trebsqy->findOne(['Ml_num' => $array_data['Ml_num'], 'is_active' => 1]);

        if (!empty($existing_document)) {
            // for deleted document
            if ($array_data['pClassName'] == 'DeletedProperty') {
                $updateResult = $trebsqy->updateOne(
                        ['Ml_num' => $array_data['Ml_num']], ['$set' => ['is_active' => -1, 'deleted_date' => date('y-m-d h-i-s')]], ['upsert' => true]
                );
            } else {

                if (($existing_document['updated_timestamp']) == $array_data['Timestamp_sql']) {
                    $log_filename = "log";
                    $log_file_data = $log_filename . '/log_Duplicate' . date('d-M-Y h-i-s') . '.log';
                    file_put_contents($log_file_data, "data already exist for-" . $array_data['Ml_num'] . "\n", FILE_APPEND);
                } else {
                    $is_import[] = $array_data['oid'];
                    $new_response = SqyDataMapper::mapData($array_data, $array_cond_grp, $common_group, $delete_group, $commericial_group);
                    $new_response['revision_date'] = date('d-m-s h-i-s');
                    if (isset($existing_document['ref_id'])) {
                        $new_response['ref_id'] = $exist_data['ref_id'];
                    } else {
                        $new_response['ref_id'] = $existing_document['_id'];
                    }
                    $new_response['is_active'] = 1;
                    $insertOneResult = $trebsqy->insertOne($new_response);
                    $updateResult = $trebsqy->updateOne(
                            ['_id' => $existing_document['_id']], ['$set' => ['is_active' => 0]], ['upsert' => true]
                    );
                }
            }
        } else {
            // new Documents
            $is_import[] = $array_data['_id'];
            $new_data = SqyDataMapper::mapData($array_data, $array_cond_grp, $common_group, $delete_group, $commericial_group);
            $new_data['is_active'] = 1;
            $temp_record[] = $new_data;
        }
    }
    if (count($temp_record) > 10) {
        $res = SqyDataMapper::insertData($temp_record, $trebsqy);
        $temp_record = [];
    }
    if (count($is_import) > 10) {
        $res = SqyDataMapper::update_trebdirect($is_import, $trebdirect);
        $is_import = [];
    }
}

class SqyDataMapper {

    public static function mapData($data_array, $array_cond_grp, $common_group, $commericial_group) {
        if (!isset($data_array['pClassName'])) {
            $log_filename = "log";
            $log_file_data = $log_filename . '/log_' . date('d-M-Y') . '.log';
            file_put_contents($log_file_data, "class type does not exist for-" . $data_array['Ml_num'] . "\n", FILE_APPEND);
        }
        switch ($data_array['pClassName']) {
            case 'CondoProperty':
                $field_group = array_merge($array_cond_grp, $common_group);
                foreach ($field_group as $key => $value) {
                    if (is_array($value)) {
                        $d[$key] = (array_intersect_key($data_array, array_flip($value)));
                    } else {
                        $d[$key] = $data_array[$value];
                    }
                }
                return $d;
                break;
            case 'CommercialProperty':
                $field_group = array_merge($common_group, $commericial_group);
                foreach ($field_group as $key => $value) {
                    if (is_array($value)) {
                        $d[$key] = (array_intersect_key($data_array, array_flip($value)));
                    } else {
                        $d[$key] = $data_array[$value];
                    }
                }
                return $d;
                break;
            case 'ResidentialProperty':
                $field_group = array_merge($array_cond_grp, $common_group);
                foreach ($field_group as $key => $value) {
                    if (is_array($value)) {
                        $d[$key] = (array_intersect_key($data_array, array_flip($value)));
                    } else {
                        $d[$key] = $data_array[$value];
                    }
                }
                return $d;
                break;
            default :
                print_r("class type does not exist for" . $data_array['Ml_num']);
                break;
        }
    }

    public static function insertData($temp_data, $trebsqy) {
        $insertedResult = $trebsqy->insertMany($temp_data);
    }

    //update trebdirect
    public static function update_trebdirect($is_import, $trebdirect) {
        foreach ($is_import as $k => $v) {
            $updateResult = $trebdirect->updateOne(
                    ['_id' => $v], ['$set' => ['is_imported' => 1]], ['upsert' => true]
            );
        }
    }

}
