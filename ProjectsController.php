<?php

namespace App\Http\Controllers\Projects;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\DB;

class ProjectsController extends Controller
{
    
    public function index(){

        $user_id = session('id');
        $projects = DB::table('project')->where('assigned_user', 'like', '%'.$user_id.'%')->get()->map(function ($item, $key) {
            return (array) $item;
        })->all();
        //$projects = $query->toArray();
        $ret_data = [
			'title' => 'Manage Projects',
			'heading' => 'Manage Projects',
            'siteURL' => (!empty($projects)) ? $projects : NULL,
		];
        return view('template/template_dashboard',$ret_data);

    }
}
