<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ConductingExamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('conducting_exams')->insert([
            [
                'name_en' => 'Order of conducting the exams at the Academy',
                'name_am' => 'Ակադեմիայում քննությունների անցկացման կարգ',
                'name_ru' => 'Порядок проведения экзаменов в Академии',
                'pdf' => 'full-time-education/conducting-exams/TPa6KOr9LBWuRz5d8OGtHIQ5Tkfn4yv8KTrWHzJD.pdf',
            ],
            [
                'name_en' => 'Procedure of organizing and conducting the exams of persons included in the list of candidates for investigators of Investigative Committee of the RA and servants of the Department of Investigative Committee of the RA',
                'name_am' => 'ՀՀ քննչական կոմիտեի քննիչների թեկնածությունների ցուցակում ընդգրկված անձանց և ՀՀ քննչական կոմիտեի դեպարտամենտի պետական ծառայողների քննությունների կազմակերպման և անցկացման կարգ',
                'name_ru' => 'Порядок организации и проведения экзаменов лиц включенных в список кандидатов на должности следователей Следственного комитета РА и государственных служащих в Департаменте Следственного комитета РА',
                'pdf' => 'full-time-education/conducting-exams/NbHYspRpnS5ywnD5CXrFjVNVdfu9x7R2RZRljSMD.pdf',
            ],
        ]);
    }
}
