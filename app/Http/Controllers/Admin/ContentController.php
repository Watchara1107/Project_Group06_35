<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\AssignOp\Concat;

class ContentController extends Controller
{
    public function index(){
        $contact = Contact::all();
        return view('admin.content.index',compact('contact'));
        }
    public function createform(){
            return view('admin.content.create');
        }
    public function insert(Request $request){
        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->message = $request->message;
        $contact->save();
        alert()->success('ข้อความถูกส่งแล้ว','ขอบคุณที่ติดต่อเรา');
        return redirect()->back();
    }

    public function delete($id){
        $con = Contact::find($id);
        $con->delete();
        alert()->success('ลบข้อมูลเรียบร้อยแล้ว','');

        return redirect()->back();
    }
}
