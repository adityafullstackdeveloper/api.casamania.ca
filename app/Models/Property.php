<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    protected $fillable = [

        'Ml_num',
        'Status',
        'Potl',
        'Tot_park_spcs',
        'Link_yn',
        'Link_Comment',
        'Water_feat1',
        'Water_feat2',
        'Water_feat3',
        'Water_feat4',
        'Water_feat5',
        'Shoreline1',
        'Shoreline2',
        'Shore_allow',
        'Shoreline_exp',
        'Alt_power1',
        'Alt_power2',
        'Retirement',
        'Rltr',
        'Rm1_dc1_out',
        'Rm1_dc2_out',
        'Rm1_dc3_out',
        'Rm1_len',
        'Rm1_out',
        'Rm1_wth',
        'Rm10_dc1_out',
        'Rm10_dc2_out',
        'Rm10_dc3_out',
        'Rm10_len',
        'Rm10_out',
        'Rm10_wth',
        'Rm11_dc1_out',
        'Rm11_dc2_out',
        'Rm11_dc3_out',
        'Rm11_len',
        'Rm11_wth',
        'Rm12_dc1_out',
        'Rm12_dc2_out',
        'Rm12_dc3_out',
        'Rm12_len',
        'Rm12_out',
        'Rm12_wth',
        'Rm2_dc1_out',
        'Rm2_dc2_out',
        'Rm2_dc3_out',
        'Rm2_len',
        'Rm2_out',
        'Rm2_wth',
        'Rm3_dc1_out',
        'Rm3_dc2_out',
        'Rm3_dc3_out',
        'Rm3_len',
        'Rm3_out',
        'Rm3_wth',
        'Rm4_dc1_out',
        'Heating',
        'Hydro_inc',
        'Irreg',
        'Kit_plus',
        'Laundry',
        'Laundry_lev',
        'Legal_desc',
        'Level1',
        'Level10',
        'Level11',
        'Level12',
        'Level2',
        'Level3',
        'Level4',
        'Level5',
        'Level6',
        'Level7',
        'Level8',
        'Level9',
        'Lotsz_code',
        'Lp_dol',
        'Lse_terms',
        'Mmap_col',
        'Mmap_page',
        'Mmap_row',
        'Acres',
        'Ad_text',
        'Addl_mo_fee',
        'Addr',
        'All_inc',
        'Apt_num',
        'Ass_year',
        'Bath_tot',
        'Portion_property_lease1_out',
        'Portion_property_lease2_out',
        'Portion_property_lease3_out',
        'Portion_property_lease4_out',
        'Portion_property_lease_srch',
        'Portion_lease_comments',
        'Assignment',
        'Fractional_ownership',
        'Rm4_dc3_out',
        'Rm4_dc2_out',
        'Rm4_len',
        'Rm4_out',
        'Rm4_wth',
        'Rm5_dc1_out',
        'Rm5_dc2_out',
        'Rm5_dc3_out',
        'Rm5_len',
        'Rm5_out',
        'Rm5_wth',
        'Rm6_dc1_out',
        'Rm6_dc2_out',
        'Rm6_dc3_out',
        'Rm6_len',
        'Rm6_out',
        'Rm6_wth',
        'Rm7_dc1_out',
        'Rm7_dc2_out',
        'Rm7_len',
        'Rm7_out',
        'Rm7_wth',
        'Rm8_dc1_out',
        'Rm8_dc2_out',
        'Rm8_dc3_out',
        'Rm8_len',
        'Rm8_out',
        'Rm8_wth',
        'Rm9_dc1_out',
        'Rm9_dc2_out',
        'Rm9_dc3_out',
        'Rm9_len',
        'Rm9_out',
        'Rm9_wth',
        'Rms',
        'Rooms_plus',
        'S_r',
        'Sewer',
        'Spec_des1_out',
        'Spec_des2_out',
        'Spec_des3_out',
        'Spec_des4_out',
        'Spec_des5_out',
        'Sqft',
        'St',
        'St_dir',
        'St_num',
        'St_sfx',
        'Style',
        'Taxes',
        'Tour_url',
        'Community_code',
        'Area_code',
        'Tv',
        'Type_own_srch',
        'Type_own1_out',
        'Uffi',
        'Util_cable',
        'Util_tel',
        'Vend_pis',
        'Vtour_updt',
        'Water',
        'Water_inc',
        'Waterfront',
        'Wcloset_p1',
        'Wcloset_p2',
        'Wcloset_p3',
        'Wcloset_p4',
        'Wcloset_p5',
        'Wcloset_t1lvl',
        'Wcloset_t2',
        'Wcloset_t2lvl',
        'Wcloset_t3',
        'Wcloset_t3lvl',
        'Wcloset_t4',
        'Wcloset_t4lvl',
        'Wcloset_t5',
        'Wcloset_t5lvl',
        'Wtr_suptyp',
        'Yr',
        'Yr_built',
        'Zip',
        'Zoning',
        'Br',
        'Br_plus',
        'Bsmt1_out',
        'Bsmt2_out',
        'Cable',
        'Cac_inc',
        'Central_vac',
        'Comel_inc',
        'Comp_pts',
        'Constr1_out',
        'Constr2_out',
        'County',
        'Cross_st',
        'Den_fr',
        'Heat_inc',
        'Rm11_out',
        'Rm7_dc3_out',
        'Spec_des6_out',
        'Wcloset_t1',
        'Water_body',
        'Water_type',
        'Water_front',
        'Access_prop1',
        'Easement_rest1',
        'Easement_rest2',
        'Easement_rest3',
        'Easement_rest4',
        'Rural_svc1',
        'Rural_svc2',
        'Rural_svc3',
        'Rural_svc4',
        'Rural_svc5',
        'Water_acc_bldg1',
        'Water_acc_bldg2',
        'Water_del_feat1',
        'Water_del_feat2',
        'Sewage1',
        'Sewage2',
        'Depth',
        'Disp_addr',
        'Drive',
        'Elec',
        'Elevator',
        'Extras',
        'Farm_agri',
        'Fpl_num',
        'Front_ft',
        'Fuel',
        'Furnished',
        'Gar_spaces',
        'Gar_type',
        'Gas',
        'Num_kit',
        'Occ',
        'A_c',
        'Access_prop2',
        'Oth_struc1_out',
        'Oth_struc2_out',
        'Outof_area',
        'Parcel_id',
        'Park_chgs',
        'Park_spcs',
        'Pool',
        'Prkg_inc',
        'Prop_feat1_out',
        'Prop_feat2_out',
        'Prop_feat3_out',
        'Prop_feat4_out',
        'Prop_feat5_out',
        'Prop_feat6_out',
        'Pvt_ent',
        'Municipality_district',
        'Municipality',
        'Pix_updt',
        'Timestamp_sql',
        'Municipality_code',
        'Area',
        'Community',
        'Idx_dt',
        'Exp_actest',
        'Fin_stmnt',
        'Franchise',
        'Freestandg',
        'Gross_inc',
        'Heat_exp',
        'Hours_open',
        'Hydro_exp',
        'Ind_area',
        'Ind_areacd',
        'Insur',
        'Inventory',
        'Llbo',
        'Lot_code',
        'Lp_code',
        'Maint',
        'Mgmt',
        'Minrenttrm',
        'Net_inc',
        'Oa_area',
        'Occupancy',
        'Off_areacd',
        'Oper_exp',
        'Other',
        'Out_storg',
        'Perc_bldg',
        'Amps',
        'Area_infl1_out',
        'Area_infl2_out',
        'Bay_size1',
        'Bay_size1_in',
        'Bay_size2',
        'Bay_size2_in',
        'Bus_type',
        'Ceil_ht',
        'Ceil_ht_in',
        'Chattels',
        'Com_chgs',
        'Com_cn_fee',
        'Crane',
        'Days_open',
        'Dba',
        'Employees',
        'Seats',
        'Shpdrsdlhtft',
        'Shpdrsdlhtin',
        'Shpdrsdlnu',
        'Shpdrsdlwdft',
        'Shpdrsdlwdin',
        'Shpdrsdmhtft',
        'Shpdrsdmhtin',
        'Shpdrsdmnu',
        'Shpdrsdmwdft',
        'Shpdrsdmwdin',
        'Shpdrsglhtft',
        'Shpdrsglhtin',
        'Shpdrsglnu',
        'Shpdrsglwdft',
        'Shpdrsglwdin',
        'Shpdrstlhtft',
        'Shpdrstlhtin',
        'Shpdrstlnu',
        'Shpdrstlwdft',
        'Shpdrstlwdin',
        'Soil_test',
        'Sprinklers',
        'Survey',
        'Taxes_exp',
        'Terms',
        'Tot_area',
        'Tot_areacd',
        'Trlr_pk_spt',
        'Type_taxes',
        'Utilities',
        'Vac_perc',
        'Volts',
        'Water_exp',
        'Yr_exp',
        'Perc_rent',
        'Prop_type',
        'Rail',
        'Retail_a',
        'Retail_ac',
        'Cond_txinc',
        'Condo_corp',
        'Condo_exp',
        'Corp_num',
        'Ens_lndry',
        'Gar',
        'Insur_bldg',
        'Sewage_srch',
        'Locker_lev_unit',
        'Locker_unit',
        'Access_prop_srch',
        'Water_feat_srch',
        'Shoreline_srch',
        'Pets',
        'Park_desig',
        'Park_desig_2',
        'Park_fac',
        'Park_lgl_desc1',
        'Park_lgl_desc2',
        'Park_spc1',
        'Park_spc2',
        'Patio_ter',
        'Lease_term',
        'Locker',
        'Locker_num',
        'Alt_power_srch',
        'Easement_rest_srch',
        'Rural_svc_srch',
        'Water_acc_bldg_srch',
        'Water_del_feat_srch',
        'Stories',
        'Unit_num',
        'Share_perc',
        'Bldg_amen1_out',
        'Bldg_amen2_out',
        'Bldg_amen3_out',
        'Bldg_amen4_out',
        'Bldg_amen5_out',
        'Bldg_amen6_out',

    ];

    public function images()
    {
        return $this->hasMany('App\Models\PropertyImage', 'property_ml_num', 'Ml_num');
    }

    public function image()
    {
        return $this->hasOne('App\Models\PropertyImage', 'property_ml_num', 'Ml_num');
    }

    public function hasImage()
    {
        return $this->hasOne('App\Models\PropertyImage', 'property_ml_num', 'Ml_num');
    }
}
