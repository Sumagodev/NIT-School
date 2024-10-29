<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\Exportable;
// use App\Models\User;
use App\Models\ {
    Roles,
    Permissions,
    TblArea,
    User,
    VoterInformation,
    Casts,
};

class UsersExportFilter implements FromCollection, WithHeadings,ShouldAutoSize
// class UsersExportFilter implements FromCollection,ShouldAutoSize
{
    use Exportable;
    protected $register_user;

    protected $data_output;

    public function __construct($request)
    {
        // dd($request);
        $castId = $request->input('cast_new_id');
        $talukaId = $request->input('tal_new_id');
        $villageId = $request->input('vil_new_id');

           

        $query = VoterInformation::leftJoin('tbl_area as taluka_user', 'voter_information.taluka_id', '=', 'taluka_user.location_id')
        ->leftJoin('tbl_area as village_user', 'voter_information.village_id', '=', 'village_user.location_id')
        ->leftJoin('users', 'voter_information.added_by', '=', 'users.id')
        ->leftJoin('casts', 'voter_information.cast', '=', 'casts.id')
		->leftJoin('gender', 'voter_information.gender', '=', 'gender.id')
		->leftJoin('wards', 'voter_information.ward_no', '=', 'wards.id')
        ->where('voter_information.is_active','1')
        ->select('voter_information.f_name as voter_f_name','voter_information.m_name as voter_m_name','voter_information.l_name as voter_l_name',
        'voter_information.id as voter_info_id','users.id','users.f_name','users.m_name','users.l_name',
        'taluka_user.name as taluka','village_user.name as village','voter_information.mobile_number','voter_information.date_of_birth',
				'casts.cast_name','gender.gender_name',
                'voter_information.ward_no','voter_information.other_cast_name','voter_information.voter_id','wards.ward_name')
        ->orderBy('voter_information.id', 'desc');
if ($request->filled('tal_new_id')) {
    $query->where('voter_information.taluka_id', $talukaId);
}
if ($request->filled('vil_new_id')) {
    $query->where('voter_information.village_id', $villageId);
}
if ($request->filled('cast_new_id')) {
    $query->where('voter_information.cast', $castId);
}
        // dd($query->get());
        //   $data_output = 
        $this->data_output = $query->get();
        
    }

    public function collection()
    {

        $data = $this->data_output->map(function ($item) {
            $fullName = $item->voter_f_name . ' ' . $item->voter_m_name . ' ' . $item->voter_l_name;
            $item->fullName = $fullName;
            unset($item->voter_f_name);
            unset($item->voter_m_name);
            unset($item->voter_l_name);

            if($item->ward_no != '')
            {
                $wardNo=$item->ward_name;
            }else{
                $wardNo='';
            }

            if($item->cast != '999999')
            {
                $castName=$item->cast_name;
            }else{
                $castName=$item->other_cast_name;
            }

            return [
                'Voter Name' => $fullName,
                'Mobile Number' => $item->mobile_number,
                'Taluka' => $item->taluka,
                'Village' => $item->village,
                'Ward No.' => $wardNo,
                'Voter ID No.' => $item->voter_id,
                'Cast' => $castName,
                'Gender' => $item->gender_name,
                'Date Of Birth' => $item->date_of_birth,
            ];
        });
        
        return $data;
    }

    public function headings(): array
    {
        return [
            'Voter Name',
            'Mobile Number',
            'Taluka',
            'Village',
            'Ward No.',
            'Voter ID No.',
            'Cast',
            'Gender',
            'Date Of Birth',
        ];
    }
}
