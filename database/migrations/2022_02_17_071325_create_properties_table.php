<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();

            $table->text('property_type', 20)->comment('Property Type');
            $table->text('Ml_num', 8)->nullable()->comment('MLS#');
            $table->text('Status', 1)->nullable()->comment('Status');

            $table->text('Potl', 1)->nullable()->comment('Parcel of Tied Land');
            $table->float('Tot_park_spcs', 5, 2)->nullable()->comment('Total Parking Spaces');
            $table->text('Link_yn', 10)->nullable()->comment('Link');
            $table->text('Link_Comment', 50)->nullable()->comment('Link Comment');
            $table->text('Water_feat1', 50)->nullable()->comment('Water Features1');
            $table->text('Water_feat2', 50)->nullable()->comment('Water Features2');
            $table->text('Water_feat3', 50)->nullable()->comment('Water Features3');
            $table->text('Water_feat4', 50)->nullable()->comment('Water Features4');
            $table->text('Water_feat5', 50)->nullable()->comment('Water Features5');
            $table->text('Shoreline1', 50)->nullable()->comment('Shoreline1');
            $table->text('Shoreline2', 50)->nullable()->comment('Shoreline2');
            $table->text('Shore_allow', 50)->nullable()->comment('Shoreline Allowance');
            $table->text('Shoreline_exp', 50)->nullable()->comment('Shoreline Exposure');
            $table->text('Alt_power1', 50)->nullable()->comment('SAlternative Power1');
            $table->text('Alt_power2', 50)->nullable()->comment('SAlternative Power2');
            $table->text('Retirement', 50)->nullable()->comment('Retirement');
            $table->text('Rltr', 120)->nullable()->comment('List Brokerage');
            $table->text('Rm1_dc1_out', 50)->nullable()->comment('Room 1 Desc 1');
            $table->text('Rm1_dc2_out', 50)->nullable()->comment('Room 1 Desc 2');
            $table->text('Rm1_dc3_out', 50)->nullable()->comment('Room 1 Desc 3');
            $table->float('Rm1_len', 8, 2)->nullable()->comment('Room 1 Length');
            $table->text('Rm1_out', 50)->nullable()->comment('Room 1');
            $table->float('Rm1_wth', 8, 2)->nullable()->comment('Room 1 Width');
            $table->text('Rm10_dc1_out', 80)->nullable()->comment('Room 10 Desc 1');
            $table->text('Rm10_dc2_out', 80)->nullable()->comment('Room 10 Desc 2');
            $table->text('Rm10_dc3_out', 80)->nullable()->comment('Room 10 Desc 3');
            $table->float('Rm10_len', 8, 2)->nullable()->comment('Room 10 Length');
            $table->text('Rm10_out', 50)->nullable()->comment('Room 10');
            $table->float('Rm10_wth', 8, 2)->nullable()->comment('Room 10 Width');
            $table->text('Rm11_dc1_out', 80)->nullable()->comment('Room 11 Desc 1');
            $table->text('Rm11_dc2_out', 80)->nullable()->comment('Room 11 Desc 2');
            $table->text('Rm11_dc3_out', 80)->nullable()->comment('Room 11 Desc 3');
            $table->float('Rm11_len', 8, 2)->nullable()->comment('Room 11 Length');
            $table->float('Rm11_wth', 8, 2)->nullable()->comment('Room 11 Width');
            $table->text('Rm12_dc1_out', 80)->nullable()->comment('Room 12 Desc 1');
            $table->text('Rm12_dc2_out', 80)->nullable()->comment('Room 12 Desc 2');
            $table->text('Rm12_dc3_out', 80)->nullable()->comment('Room 12 Desc 3');
            $table->float('Rm12_len', 8, 2)->nullable()->comment('Room 12 Length');
            $table->text('Rm12_out', 90)->nullable()->comment('Room 12');
            $table->float('Rm12_wth', 8, 2)->nullable()->comment('Room 12 Width');
            $table->text('Rm2_dc1_out', 80)->nullable()->comment('Room 2 Desc 1');
            $table->text('Rm2_dc2_out', 80)->nullable()->comment('Room 2 Desc 2');
            $table->text('Rm2_dc3_out', 80)->nullable()->comment('Room 2 Desc 3');
            $table->float('Rm2_len', 8, 2)->nullable()->comment('Room 2 Length');
            $table->text('Rm2_out', 50)->nullable()->comment('Room 2');
            $table->float('Rm2_wth', 8, 2)->nullable()->comment('Room 2 Width');
            $table->text('Rm3_dc1_out', 80)->nullable()->comment('Room 3 Desc 1');
            $table->text('Rm3_dc2_out', 80)->nullable()->comment('Room 3 Desc 2');
            $table->text('Rm3_dc3_out', 80)->nullable()->comment('Room 3 Desc 3');
            $table->float('Rm3_len', 8, 2)->nullable()->comment('Room 3 Length');
            $table->text('Rm3_out', 50)->nullable()->comment('Room 3');
            $table->float('Rm3_wth', 8, 2)->nullable()->comment('Room 3 Width');
            $table->text('Rm4_dc1_out', 50)->nullable()->comment('Room 4 Desc 1');
            $table->text('Heating', 50)->nullable()->comment('Heat Type');
            $table->text('Hydro_inc', 10)->nullable()->comment('Hydro Included');
            $table->text('Irreg', 50)->nullable()->comment('Lot Irregularities');
            $table->float('Kit_plus', 3, 1)->nullable()->comment('Kitchens Plus');
            $table->text('Laundry', 30)->nullable()->comment('Laundry Access');
            $table->text('Laundry_lev', 20)->nullable()->comment('Laundry Level');
            $table->text('Legal_desc', 80)->nullable()->comment('Legal Description');
            $table->text('Level1', 30)->nullable()->comment('Level 1');
            $table->text('Level10', 30)->nullable()->comment('Level 10');
            $table->text('Level11', 30)->nullable()->comment('Level 11');
            $table->text('Level12', 30)->nullable()->comment('Level 12');
            $table->text('Level2', 30)->nullable()->comment('Level 2');
            $table->text('Level3', 30)->nullable()->comment('Level 3');
            $table->text('Level4', 30)->nullable()->comment('Level 4');
            $table->text('Level5', 30)->nullable()->comment('Level 5');
            $table->text('Level6', 30)->nullable()->comment('Level 6');
            $table->text('Level7', 30)->nullable()->comment('Level 7');
            $table->text('Level8', 30)->nullable()->comment('Level 8');
            $table->text('Level9', 30)->nullable()->comment('Level 9');
            $table->text('Lotsz_code', 30)->nullable()->comment('Lot Size Code');
            $table->float('Lp_dol', 11, 1)->nullable()->comment('List Price');
            $table->text('Lse_terms', 20)->nullable()->comment('Leased Terms');
            $table->float('Mmap_col', 3, 2)->nullable()->comment('Map Column #');
            $table->float('Mmap_page', 4, 2)->nullable()->comment('Map #');
            $table->text('Mmap_row', 10)->nullable()->comment('Map Row');
            $table->text('Acres', 30)->nullable()->comment('Acreage');
            $table->longText('Ad_text')->nullable()->comment('Remarks For Clients');
            $table->float('Addl_mo_fee', 10, 2)->nullable()->comment('Addl Monthly Fees');
            $table->text('Addr', 50)->nullable()->comment('Address');
            $table->text('All_inc', 10)->nullable()->comment('All Inclusive');
            $table->text('Apt_num', 50)->nullable()->comment('Apt/Unit');
            $table->float('Ass_year', 8, 2)->nullable()->comment('Assessment Year');
            $table->float('Bath_tot', 5, 2)->nullable()->comment('Washrooms');
            $table->text('Portion_property_lease1_out', 150)->nullable()->comment('PortionPropertyLease1');
            $table->text('Portion_property_lease2_out', 150)->nullable()->comment('PortionPropertyLease2');
            $table->text('Portion_property_lease3_out', 150)->nullable()->comment('PortionPropertyLease3');
            $table->text('Portion_property_lease4_out', 150)->nullable()->comment('PortionPropertyLease4');
            $table->text('Portion_property_lease_srch', 150)->nullable()->comment('PortionPropertyLeaseSrch');
            $table->text('Portion_lease_comments', 60)->nullable()->comments('PortionLeaseComments');
            $table->text('Assignment', 10)->nullable()->comment('Assignment');
            $table->text('Fractional_ownership', 10)->nullable()->comment('FractionalOwnership');

            $table->text('Rm4_dc3_out', 40)->nullable()->comment('Room 4 Desc 3');
            $table->text('Rm4_dc2_out', 50)->nullable()->comment('Room 4 Desc 2');
            $table->float('Rm4_len', 5, 2)->nullable()->comment('Room 4 Length');
            $table->text('Rm4_out', 9)->nullable()->comment('Room 4');
            $table->float('Rm4_wth', 5, 2)->nullable()->comment('Room 4 Width');
            $table->text('Rm5_dc1_out', 20)->nullable()->comment('Room 5 Desc 1');
            $table->text('Rm5_dc2_out', 20)->nullable()->comment('Room 5 Desc 2');
            $table->text('Rm5_dc3_out', 20)->nullable()->comment('Room 5 Desc 3');
            $table->float('Rm5_len', 5, 2)->nullable()->comment('Room 5 Length');
            $table->text('Rm5_out', 9)->nullable()->comment('Room 5');
            $table->float('Rm5_wth', 5, 2)->nullable()->comment('Room 5 Width');
            $table->text('Rm6_dc1_out', 20)->nullable()->comment('Room 6 Desc 1');
            $table->text('Rm6_dc2_out', 20)->nullable()->comment('Room 6 Desc 2');
            $table->text('Rm6_dc3_out', 20)->nullable()->comment('Room 6 Desc 3');
            $table->float('Rm6_len', 5, 2)->nullable()->comment('Room 6 Length');
            $table->text('Rm6_out', 9)->nullable()->comment('Room 6');
            $table->float('Rm6_wth', 5, 2)->nullable()->comment('Room 6 Width');
            $table->text('Rm7_dc1_out', 20)->nullable()->comment('Room 7 Desc 1');
            $table->text('Rm7_dc2_out', 20)->nullable()->comment('Room 7 Desc 2');
            $table->float('Rm7_len', 5, 2)->nullable()->comment('Room 7 Length');
            $table->text('Rm7_out', 9)->nullable()->comment('Room 7');
            $table->float('Rm7_wth', 5, 2)->nullable()->comment('Room 7 Width');
            $table->text('Rm8_dc1_out', 20)->nullable()->comment('Room 8 Desc 1');
            $table->text('Rm8_dc2_out', 20)->nullable()->comment('Room 8 Desc 2');
            $table->text('Rm8_dc3_out', 20)->nullable()->comment('Room 8 Desc 3');
            $table->float('Rm8_len', 5, 2)->nullable()->comment('Room 8 Length');
            $table->text('Rm8_out', 9)->nullable()->comment('Room 8');
            $table->float('Rm8_wth', 5, 2)->nullable()->comment('Room 8 Width');
            $table->text('Rm9_dc1_out', 20)->nullable()->comment('Room 9 Desc 1');
            $table->text('Rm9_dc2_out', 20)->nullable()->comment('Room 9 Desc 2');
            $table->text('Rm9_dc3_out', 20)->nullable()->comment('Room 9 Desc 3');
            $table->float('Rm9_len', 5, 2)->nullable()->comment('Room 9 Length');
            $table->text('Rm9_out', 9)->nullable()->comment('Room 9');
            $table->float('Rm9_wth', 5, 2)->nullable()->comment('Room 9 Width');
            $table->float('Rms', 5, 2)->nullable()->comment('Rooms');
            $table->float('Rooms_plus', 5, 2)->nullable()->comment('Rooms +');
            $table->text('S_r', 9)->nullable()->comment('Sale/Lease');
            $table->text('Sewer', 15)->nullable()->comment('Sewers');
            $table->text('Spec_des1_out', 27)->nullable()->comment('Special Designation1');
            $table->text('Spec_des2_out', 27)->nullable()->comment('Special Designation2');
            $table->text('Spec_des3_out', 27)->nullable()->comment('Special Designation3');
            $table->text('Spec_des4_out', 27)->nullable()->comment('Special Designation4');
            $table->text('Spec_des5_out', 27)->nullable()->comment('Special Designation5');
            $table->text('Sqft', 9)->nullable()->comment('Approx Square Footage');
            $table->text('St', 20)->nullable()->comment('Street Name');
            $table->text('St_dir', 1)->nullable()->comment('Street Direction');
            $table->text('St_num', 7)->nullable()->comment('Street #');
            $table->text('St_sfx', 4)->nullable()->comment('Street Abbreviation');
            $table->text('Style', 16)->nullable()->comment('Style');
            $table->float('Taxes', 9, 2)->nullable()->comment('Taxes');
            $table->text('Tour_url', 100)->nullable()->comment('Virtual Tour URL');
            $table->text('Community_code', 20)->nullable()->comment('Community Code');
            $table->text('Area_code', 4)->nullable()->comment('Area Code');
            $table->float('Tv', 9, 2)->nullable()->comment('Assessment');
            $table->text('Type_own_srch', 7)->nullable()->comment('Type');
            $table->text('Type_own1_out', 18)->nullable()->comment('Type');
            $table->text('Uffi', 12)->nullable()->comment('UFFI');
            $table->text('Util_cable', 1)->nullable()->comment('Utilities-Cable');
            $table->text('Util_tel', 1)->nullable()->comment('Utilities-Telephone');
            $table->text('Vend_pis', 10)->nullable()->comment('Seller Property Info Statement');
            $table->date('Vtour_updt', 10)->nullable()->comment('Virtual Tour Upload Date');
            $table->text('Water', 9)->nullable()->comment('Water');
            $table->text('Water_inc', 1)->nullable()->comment('Water Included');
            $table->text('Waterfront', 8)->nullable()->comment('Waterfront');
            $table->float('Wcloset_p1', 5, 1)->nullable()->comment('Washrooms Type 1 # Pcs');
            $table->float('Wcloset_p2', 5, 1)->nullable()->comment('Washrooms Type 2 # Pcs');
            $table->float('Wcloset_p3', 5, 1)->nullable()->comment('Washrooms Type 3 # Pcs');
            $table->float('Wcloset_p4', 5, 1)->nullable()->comment('Washrooms Type 4 # Pcs');
            $table->float('Wcloset_p5', 5, 1)->nullable()->comment('Washrooms Type 5 # Pcs');
            $table->text('Wcloset_t1lvl', 8)->nullable()->comment('Washrooms Type 1 Level');
            $table->float('Wcloset_t2', 5, 1)->nullable()->comment('Washrooms Type 2');
            $table->text('Wcloset_t2lvl', 8)->nullable()->comment('Washrooms Type 2 Level');
            $table->float('Wcloset_t3', 3, 1)->nullable()->comment('Washrooms Type 3');
            $table->text('Wcloset_t3lvl', 8)->nullable()->comment('Washrooms Type 3 Level');
            $table->float('Wcloset_t4', 3, 1)->nullable()->comment('Washrooms Type 4');
            $table->text('Wcloset_t4lvl', 8)->nullable()->comment('Washrooms Type 4 Level');
            $table->float('Wcloset_t5', 3, 1)->nullable()->comment('Washrooms Type 5');
            $table->text('Wcloset_t5lvl', 8)->nullable()->comment('Washrooms Type 5 Level');
            $table->text('Wtr_suptyp', 12)->nullable()->comment('Water Supply Types');
            $table->float('Yr', 4, 2)->nullable()->comment('Tax Year');
            $table->text('Yr_built', 5)->nullable()->comment('Approx Age');
            $table->text('Zip', 7)->nullable()->comment('Postal Code');
            $table->text('Zoning', 40)->nullable()->comment('Zoning');
            $table->float('Br', 5, 1)->nullable()->comment('Bedrooms');
            $table->float('Br_plus', 5, 1)->nullable()->comment('Bedrooms +');
            $table->text('Bsmt1_out', 12)->nullable()->comment('Basement1');
            $table->text('Bsmt2_out', 12)->nullable()->comment('Basement2');
            $table->text('Cable', 1)->nullable()->comment('Cable TV Included');
            $table->text('Cac_inc', 1)->nullable()->comment('CAC Included');
            $table->text('Central_vac', 1)->nullable()->comment('Central Vac');
            $table->text('Comel_inc', 1)->nullable()->comment('Common Elements Included');
            $table->text('Comp_pts', 1)->nullable()->comment('Fronting On (NSEW)');
            $table->text('Constr1_out', 16)->nullable()->comment('Exterior1');
            $table->text('Constr2_out', 16)->nullable()->comment('Exterior2');
            $table->text('County', 16)->nullable()->comment('Province');
            $table->text('Cross_st', 30)->nullable()->comment('Directions/Cross Streets');
            $table->text('Den_fr', 1)->nullable()->comment('Family Room');
            $table->text('Heat_inc', 1)->nullable()->comment('Heat Included');
            $table->text('Rm11_out', 9)->nullable()->comment('Room 11');
            $table->text('Rm7_dc3_out', 20)->nullable()->comment('Room 7 Desc 3');
            $table->text('Spec_des6_out', 27)->nullable()->comment('Special Designation6');
            $table->float('Wcloset_t1', 5, 1)->nullable()->comment('Washrooms Type 1');
            $table->text('Water_body', 20)->nullable()->comment('Water Body Name');
            $table->text('Water_type', 5)->nullable()->comment('Water Body Type');
            $table->float('Water_front', 8, 2)->nullable()->comment('Water Frontage');
            $table->text('Access_prop1', 19)->nullable()->comment('Access To Property1');
            $table->text('Easement_rest1', 16)->nullable()->comment('Easements Restrictions1');
            $table->text('Easement_rest2', 16)->nullable()->comment('Easements Restrictions2');
            $table->text('Easement_rest3', 16)->nullable()->comment('Easements Restrictions3');
            $table->text('Easement_rest4', 16)->nullable()->comment('Easements Restrictions4');
            $table->text('Rural_svc1', 17)->nullable()->comment('Rural Services1');
            $table->text('Rural_svc2', 17)->nullable()->comment('Rural Services2');
            $table->text('Rural_svc3', 17)->nullable()->comment('Rural Services3');
            $table->text('Rural_svc4', 17)->nullable()->comment('Rural Services4');
            $table->text('Rural_svc5', 17)->nullable()->comment('Rural Services5');
            $table->text('Water_acc_bldg1', 20)->nullable()->comment('Waterfront Accessory Bldgs1');
            $table->text('Water_acc_bldg2', 20)->nullable()->comment('Waterfront Accessory Bldgs2');
            $table->text('Water_del_feat1', 14)->nullable()->comment('Water Delivery Features1');
            $table->text('Water_del_feat2', 14)->nullable()->comment('Water Delivery Features2');
            $table->text('Sewage1', 14)->nullable()->comment('Sewage1');
            $table->text('Sewage2', 14)->nullable()->comment('Sewage2');
            $table->float('Depth', 8, 2)->nullable()->comment('Lot Depth');
            $table->text('Disp_addr', 1)->nullable()->comment('Display Address On Internet');
            $table->text('Drive', 10)->nullable()->comment('Drive');
            $table->text('Elec', 1)->nullable()->comment('Utilities-Hydro');
            $table->text('Elevator', 7)->nullable()->comment('Elevator');
            $table->text('Extras', 240)->nullable()->comment('Extras');
            $table->text('Farm_agri', 12)->nullable()->comment('Farm/Agriculture');
            $table->text('Fpl_num', 1)->nullable()->comment('Fireplace/Stove');
            $table->float('Front_ft', 10, 2)->nullable()->comment('Lot Front');
            $table->text('Fuel', 9)->nullable()->comment('Heat Source');
            $table->text('Furnished', 4)->nullable()->comment('Furnished');
            $table->float('Gar_spaces', 5, 2)->nullable()->comment('Garage Spaces');
            $table->text('Gar_type', 16)->nullable()->comment('Garage Type');
            $table->text('Gas', 1)->nullable()->comment('Utilities-Gas');
            $table->float('Num_kit', 3, 1)->nullable()->comment('Kitchens');
            $table->text('Occ', 14)->nullable()->comment('Possession Remarks');
            $table->text('A_c', 11)->nullable()->comment('Air Conditioning');
            $table->text('Access_prop2', 19)->nullable()->comment('Access To Property2');
            $table->text('Oth_struc1_out', 14)->nullable()->comment('Other Structures1');
            $table->text('Oth_struc2_out', 14)->nullable()->comment('Other Structures2');
            $table->text('Outof_area', 16)->nullable()->comment('Out of Area Municipality');
            $table->text('Parcel_id', 9)->nullable()->comment('PIN#');
            $table->float('Park_chgs', 8, 2)->nullable()->comment('Park Cost/Mo');
            $table->float('Park_spcs', 6, 2)->nullable()->comment('Parking Spaces');
            $table->text('Pool', 8)->nullable()->comment('Pool');
            $table->text('Prkg_inc', 1)->nullable()->comment('Parking Included');
            $table->text('Prop_feat1_out', 18)->nullable()->comment('Property Features1');
            $table->text('Prop_feat2_out', 18)->nullable()->comment('Property Features2');
            $table->text('Prop_feat3_out', 18)->nullable()->comment('Property Features3');
            $table->text('Prop_feat4_out', 18)->nullable()->comment('Property Features4');
            $table->text('Prop_feat5_out', 18)->nullable()->comment('Property Features5');
            $table->text('Prop_feat6_out', 18)->nullable()->comment('Property Features6');
            $table->text('Pvt_ent', 1)->nullable()->comment('Private Entrance');
            $table->text('Municipality_district', 44)->nullable()->comment('Municipality District');
            $table->text('Municipality', 40)->nullable()->comment('Municipality');
            $table->date('Pix_updt', 10)->nullable()->comment('Pix updated date');
            $table->date('Timestamp_sql', 10)->nullable()->comment('Updated timestamp');
            $table->text('Municipality_code', 10)->nullable()->comment('Municp Code');
            $table->text('Area', 40)->nullable()->comment('Area');
            $table->text('Community', 44)->nullable()->comment('Community');
            $table->date('Idx_dt', 10)->nullable()->comment('IDX updated date');
            $table->text('Exp_actest', 3)->nullable()->comment('Expenses Actual/Estimated');
            $table->text('Fin_stmnt', 1)->nullable()->comment('Financial Statement');
            $table->text('Franchise', 1)->nullable()->comment('Franchise');
            $table->text('Freestandg', 1)->nullable()->comment('Freestanding');
            $table->float('Gross_inc', 9, 2)->nullable()->comment('Gross Income/Sales');
            $table->float('Heat_exp', 7, 2)->nullable()->comment('Heat Expenses');
            $table->text('Hours_open', 7)->nullable()->comment('Hours Open');
            $table->float('Hydro_exp', 7, 2)->nullable()->comment('Hydro Expense');
            $table->float('Ind_area', 7, 2)->nullable()->comment('Industrial Area');
            $table->text('Ind_areacd', 16)->nullable()->comment('Industrial Area Code');
            $table->float('Insur', 7, 2)->nullable()->comment('Insurance Expense');
            $table->float('Inventory', 9, 2)->nullable()->comment('Estim Inventory Values At Cost');
            $table->text('Llbo', 1)->nullable()->comment('LLBO');
            $table->text('Lot_code', 8)->nullable()->comment('Lot/Bldg/Unit Code');
            $table->text('Lp_code', 11)->nullable()->comment('List Price Code');
            $table->float('Maint', 7, 2)->nullable()->comment('Maintenance');
            $table->float('Mgmt', 7, 2)->nullable()->comment('Management Expense');
            $table->float('Minrenttrm', 3, 2)->nullable()->comment('Minimum Rental Term');
            $table->float('Net_inc', 9, 2)->nullable()->comment('Net Income Before Debt');
            $table->float('Oa_area', 7, 2)->nullable()->comment('Office/Apt Area');
            $table->text('Occupancy', 7)->nullable()->comment('Occupancy');
            $table->text('Off_areacd', 16)->nullable()->comment('Office/Apt Area Code');
            $table->float('Oper_exp', 9, 2)->nullable()->comment('Operating Expenses');
            $table->float('Other', 7, 2)->nullable()->comment('Other Expenses');
            $table->text('Out_storg', 1)->nullable()->comment('Outside Storage');
            $table->float('Perc_bldg', 3, 2)->nullable()->comment('% Building');
            $table->float('Amps', 4, 2)->nullable()->comment('Amps');
            $table->text('Area_infl1_out', 15)->nullable()->comment('Area Influences1');
            $table->text('Area_infl2_out', 15)->nullable()->comment('Area Influences2');
            $table->float('Bay_size1', 2, 2)->nullable()->comment('Bay Size Width Feet');
            $table->float('Bay_size1_in', 2, 2)->nullable()->comment('Bay Size Width Inches');
            $table->float('Bay_size2', 2, 2)->nullable()->comment('Bay Size Length Feet');
            $table->float('Bay_size2_in', 2, 2)->nullable()->comment('Bay Size Length Inches');
            $table->text('Bus_type', 28)->nullable()->comment('Use');
            $table->float('Ceil_ht', 2, 2)->nullable()->comment('Clear Height Feet');
            $table->float('Ceil_ht_in', 2, 2)->nullable()->comment('Clear Height Inches');
            $table->text('Chattels', 10)->nullable()->comment('Chattels');
            $table->float('Com_chgs', 5, 2)->nullable()->comment('Common Area Upcharge');
            $table->float('Com_cn_fee', 9, 2)->nullable()->comment('Commercial Condo Fees');
            $table->text('Crane', 1)->nullable()->comment('Crane');
            $table->text('Days_open', 1)->nullable()->comment('Days Open');
            $table->text('Dba', 37)->nullable()->comment('Business/Building Name');
            $table->float('Employees', 3, 2)->nullable()->comment('Employees');
            $table->float('Seats', 4, 2)->nullable()->comment('Seats');
            $table->float('Shpdrsdlhtft', 2, 2)->nullable()->comment('Drive-In Level Shipping Doors Height Feet');
            $table->float('Shpdrsdlhtin', 4, 2)->nullable()->comment('Drive-In Level Shipping Doors Height Inches');
            $table->float('Shpdrsdlnu', 4, 2)->nullable()->comment('Drive-In Level Shipping Doors');
            $table->float('Shpdrsdlwdft', 4, 2)->nullable()->comment('Drive-In Level Shipping Doors Width Feet');
            $table->float('Shpdrsdlwdin', 4, 2)->nullable()->comment('Drive-In Level Shipping Doors Width Inches');
            $table->float('Shpdrsdmhtft', 4, 2)->nullable()->comment('Double Man Shipping Doors Height Feet');
            $table->float('Shpdrsdmhtin', 4, 2)->nullable()->comment('Double Man Shipping Doors Height Inches');
            $table->float('Shpdrsdmnu', 4, 2)->nullable()->comment('Double Man Shipping Doors #');
            $table->float('Shpdrsdmwdft', 4, 2)->nullable()->comment('Double Man Shipping Doors Width Feet');
            $table->float('Shpdrsdmwdin', 4, 2)->nullable()->comment('Double Man Shipping Doors Width Inches');
            $table->float('Shpdrsglhtft', 4, 2)->nullable()->comment('Grade Level Shipping Doors Height Feet');
            $table->float('Shpdrsglhtin', 4, 2)->nullable()->comment('Grade Level Shipping Doors Height Inches');
            $table->float('Shpdrsglnu', 4, 2)->nullable()->comment('Grade Level Shipping Doors #');
            $table->float('Shpdrsglwdft', 4, 2)->nullable()->comment('Grade Level Shipping Doors Width Feet');
            $table->float('Shpdrsglwdin', 4, 2)->nullable()->comment('Grade Level Shipping Doors Width Inches');
            $table->float('Shpdrstlhtft', 4, 2)->nullable()->comment('Truck Level Shipping Doors Height Feet');
            $table->float('Shpdrstlhtin', 4, 2)->nullable()->comment('Truck Level Shipping Doors Height Inches');
            $table->float('Shpdrstlnu', 4, 2)->nullable()->comment('Truck Level Shipping Doors #');
            $table->float('Shpdrstlwdft', 4, 2)->nullable()->comment('Truck Level Shipping Doors Width Feet');
            $table->float('Shpdrstlwdin', 4, 2)->nullable()->comment('Truck Level Shipping Doors Width Inches');
            $table->text('Soil_test', 12)->nullable()->comment('Soil Test');
            $table->text('Sprinklers', 4)->nullable()->comment('Sprinklers');
            $table->text('Survey', 1)->nullable()->comment('Survey');
            $table->float('Taxes_exp', 7, 2)->nullable()->comment('Taxes Expense');
            $table->float('Terms', 3, 2)->nullable()->comment('Maximum Rental Term');
            $table->float('Tot_area', 10, 1)->nullable()->comment('Total Area');
            $table->text('Tot_areacd', 50)->nullable()->comment('Total Area Code');
            $table->float('Trlr_pk_spt', 5, 2)->nullable()->comment('# Trailer Parking Spots');
            $table->text('Type_taxes', 10)->nullable()->comment('Type Taxes');
            $table->text('Utilities', 5)->nullable()->comment('Utilities');
            $table->float('Vac_perc', 9, 2)->nullable()->comment('Vacancy Allowance');
            $table->float('Volts', 3, 2)->nullable()->comment('Volts');
            $table->float('Water_exp', 7, 2)->nullable()->comment('Water Expense');
            $table->float('Yr_exp', 6, 2)->nullable()->comment('Year Expenses');
            $table->float('Perc_rent', 3, 2)->nullable()->comment('Percentage Rent');
            $table->text('Prop_type', 30)->nullable()->comment('Category');
            $table->text('Rail', 1)->nullable()->comment('Rail');
            $table->float('Retail_a', 7, 2)->nullable()->comment('Retail Area');
            $table->text('Retail_ac', 16)->nullable()->comment('Retail Area Code');
            $table->text('Cond_txinc', 3)->nullable()->comment('Condo Taxes Included');
            $table->text('Condo_corp', 4)->nullable()->comment('Condo Registry Office');
            $table->text('Condo_exp', 2)->nullable()->comment('Exposure');
            $table->float('Corp_num', 4, 2)->nullable()->comment('Condo Corp#');
            $table->text('Ens_lndry', 3)->nullable()->comment('Ensuite Laundry');
            $table->float('Gar', 3, 2)->nullable()->comment('Garage/Park Spaces');
            $table->text('Insur_bldg', 1)->nullable()->comment('Building Insurance Included');
            $table->text('Sewage_srch', 8)->nullable()->comment('Sewage Search');
            $table->text('Locker_lev_unit', 3)->nullable()->comment('Locker Level');
            $table->text('Locker_unit', 4)->nullable()->comment('Locker Unit');
            $table->text('Access_prop_srch', 8)->nullable()->comment('Access To Property Search');
            $table->text('Water_feat_srch', 20)->nullable()->comment('Water Features Search');
            $table->text('Shoreline_srch', 10)->nullable()->comment('Shoreline Search');
            $table->text('Pets', 8)->nullable()->comment('Pets Permitted');
            $table->text('Park_desig', 10)->nullable()->comment('Parking Type');
            $table->text('Park_desig_2', 10)->nullable()->comment('Parking Type2');
            $table->text('Park_fac', 10)->nullable()->comment('Parking/Drive');
            $table->text('Park_lgl_desc1', 15)->nullable()->comment('Parking Legal Description');
            $table->text('Park_lgl_desc2', 15)->nullable()->comment('Parking Legal Description2');
            $table->text('Park_spc1', 4)->nullable()->comment('Parking Spot #1');
            $table->text('Park_spc2', 4)->nullable()->comment('Parking Spot #2');
            $table->text('Patio_ter', 4)->nullable()->comment('Balcony');
            $table->text('Lease_term', 10)->nullable()->comment('Lease Term');
            $table->text('Locker', 17)->nullable()->comment('Locker');
            $table->text('Locker_num', 4)->nullable()->comment('Locker #');
            $table->text('Alt_power_srch', 8)->nullable()->comment('Alternative Power Search');
            $table->text('Easement_rest_srch', 20)->nullable()->comment('Easements Restrictions Search');
            $table->text('Rural_svc_srch', 20)->nullable()->comment('Rural Services Search');
            $table->text('Water_acc_bldg_srch', 8)->nullable()->comment('Waterfront Accessory Bldgs Search');
            $table->text('Water_del_feat_srch', 8)->nullable()->comment('Water Delivery Features Search');
            $table->text('Stories', 3)->nullable()->comment('Level');
            $table->text('Unit_num', 4)->nullable()->comment('Unit #');
            $table->text('Share_perc', 6)->nullable()->comment('# Shares %');
            $table->text('Bldg_amen1_out', 27)->nullable()->comment('BuildingAmenities1');
            $table->text('Bldg_amen2_out', 27)->nullable()->comment('BuildingAmenities2');
            $table->text('Bldg_amen3_out', 27)->nullable()->comment('BuildingAmenities3');
            $table->text('Bldg_amen4_out', 27)->nullable()->comment('BuildingAmenities4');
            $table->text('Bldg_amen5_out', 27)->nullable()->comment('BuildingAmenities5');
            $table->text('Bldg_amen6_out', 27)->nullable()->comment('BuildingAmenities6');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('properties');
    }
}
