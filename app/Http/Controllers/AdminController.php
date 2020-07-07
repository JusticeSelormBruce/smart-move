<?php

namespace App\Http\Controllers;

use App\classes\DeleteFile;
use App\Comment;
use App\Contact;
use App\Images;
use App\Post;
use App\University;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{

    public function AnnouncementIndex()
    {
        $announcements = Post::where('user_id', Auth::id())->orderByDesc('id')->get();
        return view('admin.announcement.index', compact('announcements'));
    }

    public function CreateAnnouncement()
    {
        return view('admin.announcement.create');
    }

    public function StoreAnnouncement()
    {
        $model = new Post();
        Post::create($model->announcementData());
        return redirect('announcement-index')->with('msg', 'Announcement Created Successfully');
    }

    public function EditAnnouncementIndex($id)
    {
        $data = Post::whereId($id)->first();
        return view('admin.announcement.edit', compact('data'));
    }

    public function PatchAnnouncement(Request $request)
    {
        $model = new Post();
        $model->updateAnnouncement($request->id);
        return back()->with('msg', 'Post Updated Successfully');
    }

    public function UpdateAttachment(Request $request)
    {
        $model = new Post();
        $path = $model->getAttachmentPath($request->attachment);
        $model->updateAttachment($request->id, $path);
        return back()->with('msg', 'Post Updated Successfully');
    }

    public function DeleteAnnouncement($id)
    {
        Post::whereId($id)->delete();
        $delFile = new DeleteFile();
        $delFile->removeFile('Post', $id, 'attachment');
        return back()->with('msg', 'Post Deleted Successfully');
    }
    public function UniversityIndex()
    {
        $uni_details = University::where('user_id', Auth::id())->get();
        $logo = Images::where('university_id', Auth::user()->university->id)->get()->first();
        return view('university.index', compact('uni_details', 'logo'));
    }

    public function SaveUniversityDetails(Request $request)
    {

        $details = $this->ValidateBasicDetails();
        University::create($details);
        return back()->with('msg', 'University   Details Saved Successfully');
    }
    public function UpdateUniversityDetails($id)
    {
        $details = $this->ValidateBasicDetails();
        University::whereId($id)->update($details);
        return back()->with('msg', 'University   Details Updated Successfully');
    }
    public function ContactIndex()
    {
        $uni_details = University::where('user_id', Auth::id())->get()->first();

        if ($uni_details != null) {
            $uni_contact_details = Contact::where('university_id', Auth::user()->university->id)->get();
            return view('university.contact.index', compact('uni_contact_details'));
        } else {
            $uni_contact_details = null;
            return view('university.contact.index', compact('uni_contact_details'));
        }
    }

    public function SaveUniversityContactDetails()
    {


        $details = $this->ValidateContactDetails() + ['university_id' => Auth::user()->university->id];
        Contact::create($details);
        return back()->with('msg', 'Contact Details Saved Successfully');
    }

    public function UpdateUniversityContact(Request $request)
    {
        $details = $this->ValidateContactDetails();
        Contact::whereId($request->id)->update(['phone' => $details['phone']]);
        return back()->with('msg', 'Contact Details updated Successfully');
    }
    public function DeleteUniversityDetails($id)
    {
        University::whereId($id)->delete();
        return back()->with('msg', 'University deleted Successfully');
    }

    public function DeleteContact($id)
    {
        Contact::whereId($id)->delete();
        return back()->with('msg', 'Contact deleted Successfully');
    }

    public function SaveUniversityLogo()
    {

        $image = new Images();
        $data = $image->LogoData();
        Images::create($data);
        return back()->with('msg', 'Logo Uploaded Successfully');
    }

    public function companyPage($id)
    {
        $comment = Comment::where('university_id', $id)->get()->all();
        $company_details = University::find($id);
        return view('university.page.index', compact('company_details', 'comment'));
    }
    public function  ValidateBasicDetails()
    {
        return  request()->validate([
            'name' => "required|string",
            'url' => "required|string",
            'description' => "",
            'user_id' => "required|numeric"
        ]);
    }
    public function ValidateContactDetails()
    {
        return  request()->validate([
            'phone' => "required|string"
        ]);
    }

    public function postComment(Request $request)
    {
        $data = ['university_id' => $request->university_id, 'comment' => $request->comment, 'user_id' => Auth::id()];
        Comment::create($data);
        return back()->with('msg', 'Thank you for your comment, we will go through and make sure to always bring you the best services');
    }
    public function UpdateComment(Request $request)
    {

        Comment::whereId($request->id)->update(['comment' => $request->comment]);
        return back()->with('msg', 'Comment Updated Successfully');
    }
    public function deleteComment($id)
    {
        Comment::whereId($id)->delete();
        return back()->with('msg', 'comment Deleted Successfully');
    }
    public function SearchAnything(Request $request)
    {
        $result =   DB::table('universities')->where('name', 'Like', '%' . $request->search . '%')->paginate(15);
        if ($result != null) {
         
        } else {

            $result =   DB::table('universities')->where('description', 'Like', '%' . $request->search . '%')->paginate(15);
        }

        return view('admin.search.main',compact('result'));
    }
}
