<?php


namespace App\Http\Controllers;


use App\Barangay;
use App\Municipality;
use App\Province;
use App\Region;

class DataController extends Controller
{
    public function getRegions() {
        return Region::all();
    }

    public function getRegion($region_id) {
        $query = Region::where('id', '=', $region_id);
        return $query->first();
    }

    public function getRegionProvinces($region_id) {
        return Province::where('region_id', '=', $region_id)->get();
    }

    public function getAllProvinces() {
        return Province::orderBy('name', 'asc')->get();
    }

    public function getProvince($province_id) {
        return Province::where('id', '=', $province_id)->first();
    }

    public function getProvinceMunicipalities($province_id) {
        return Municipality::where('province_id', '=', $province_id)->get();
    }

    public function getMunicipalities() {
        return Municipality::orderBy('name', 'asc')->paginate(100);
    }

    public function getMunicipality($municipality_id) {
        return Municipality::where('id', '=', $municipality_id)->first();
    }

    public function getMunicipalityBarangays($municipality_id) {
        return Barangay::where('municipality_id', '=', $municipality_id)->get();
    }

    public function getBarangays() {
        return Barangay::orderBy('name', 'asc')->paginate(100);
    }

    public function getBarangay($barangay_id) {
        return Barangay::where('id', '=', $barangay_id)->first();
    }
}
