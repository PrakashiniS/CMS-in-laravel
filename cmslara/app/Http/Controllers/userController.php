<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\ComplaintsDetail;
use App\Models\Faculty;
use App\Models\Manager;
use App\Models\Worker;
use App\Models\WorkerDetail;
use App\Models\WorkerTaskdet;
class userController extends Controller{
    //faculty main
    public function facul(){
        $facpend=  ComplaintsDetail::whereIn('status',['1','2','4','6','8','9'])->get();
        $facwork=ComplaintsDetail::whereIn('status',['7','10','11','17','18'])->get();
        $faccom=ComplaintsDetail::where('status','16')->get();
        $facrej=ComplaintsDetail::whereIn('status',['3','5','19','20'])->get();
        $facres=ComplaintsDetail::where('status',['15'])->get();
        $facpending = Complaintsdetail::whereIn('status', ['1','2','4','6','8','9'])->count();
        $facworkinprog = Complaintsdetail::whereIn('status', ['7','10','11','17','18'])->count();
        $faccompleted = Complaintsdetail::where('status', '16')->count();
        $facrejected = Complaintsdetail::whereIn('status',['3','5','19','20'])->count();   
        $facreassigned = Complaintsdetail::whereIn('status',['15'])->count();     
        return view(('faculty'),compact('facpend','facwork','facrej','faccom','facres','facpending','facworkinprog','faccompleted','facrejected','facreassigned'));
    }
    // main page
    public function admin(){
        return view ('index');
    }
    //infra status
    public function pending(){
        $pend=  ComplaintsDetail::where('status',1)->get();
        $app=ComplaintsDetail::whereIn('status',['2', '4','6', '7', '10', '11', '15', '17', '18', '13'])->get();
        $com=ComplaintsDetail::where('status',16)->get();
        $rej=ComplaintsDetail::whereIn('status',['3','5','19','20'])->get();
        $pending = Complaintsdetail::whereIn('status', ['1'])->count();
       $facinfra=Complaintsdetail::whereIn('status',['2'])->count();
        $workinprog = Complaintsdetail::whereIn('status', ['2', '4','6', '7', '10', '11', '15', '17', '18', '13'])->count();
        $completed = Complaintsdetail::where('status', '16')->count();
        $rejected = Complaintsdetail::whereIn('status', ['3','5','19','20'])->count();     
        return view(('infra'),compact('pend','app','rej','com','pending','workinprog','completed','rejected','facinfra'));

    }
    //faculty info infra 
    public function faculty($id){
        try{
    $user = ComplaintsDetail::findOrFail($id);
      return response() ->json ([
        'status'=>200,
        'data'=>[
            'faculty_name'=>$user->faculty_name,
            'faculty_contact'=>$user->faculty_contact,
            'faculty_mail'=>$user->faculty_mail] 
        ]);
  

    }catch (\Exception $e){
        return response()->json([
            'status'=>500,
            'message'=>'Error occured'
        ]);
    }
}
//problem description infra
public function problem($id){
    try{
$des = ComplaintsDetail::findOrFail($id);
  return response() ->json ([
    'status'=>200,
    'data'=>[
        'type_of_problem'=>$des->type_of_problem,
'block_venue'=>$des->block_venue,
'venue_name'=>$des->venue_name,

        'problem_description'=>$des->problem_description]
        
    ]);
}catch (\Exception $e){
    return response()->json([
        'status'=>500,
        'message'=>'Error occured'
    ]);
}
}
//approve button infra
public function approve($id){
    $appr = ComplaintsDetail::findorFail($id);
    $appr->status='2';
    $appr->save();
}
//reject button infra
public function reject( Request $req,$id){
    try{
    $reje = ComplaintsDetail::findorFail($id);
    $reje->reason=$req->rejfeedfac;
    $reje->status= '3';
    $reje->save();
    return response() ->json ([
    'status'=>200,
    'message'=>'Complaint rejected successfully'
    ]);
}
catch (\Exception $e){
    return response->json([
  'status'=>500,
        'message'=>'Error occured'
    ]);

}
}
//feedback infra
public function feedback($id){
    try{
$des = ComplaintsDetail::findOrFail($id);
  return response() ->json ([
    'status'=>200,
    'data'=>[
        'reason'=>$des->reason
]
        
    ]);
}catch (\Exception $e){
    return response()->json([
        'status'=>500,
        'message'=>'Error occured'
    ]);
}
}
// before image infra
public function image($id){
    try{
        $img=ComplaintsDetail::findorFail($id);
        return response() ->json([
            'status'=>200,
            'data'=>[
              
                'images'=>$img->images
            ]
            ]);

    } catch (\Exception $e){
        return response()->json([
            'status'=>500,
            'message'=>'Image not found'
        ]);
    }
}
//after image infra
public function afimage($id){
        $task_id = Manager::where('problem_id',$id)->pluck('task_id');
        $photo = WorkerTaskdet::whereIn('task_id',$task_id)->select('after_photo')->first();

        return response()->json([
            "status"=>200,
          
            'data'=>$photo

        ]);
}
//raise complaint faculty
public function raise(Request $req){
    try{
        ComplaintsDetail::create($req->all());
        return response()->json([
'status'=>200,
'message'=>'Complaint raised successfully'
        ]);
    }
    catch (\Exception $e){
return response()->json([
    'status'=>500,
    'message'=>'Error occured while raising complaint'
]);
    }

}
}

