<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Home;
use App\Mail\sendMail;
use App\Mail\SusMail;
use Illuminate\Support\Facades\Mail;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;

use Intervention\Image\ImageManagerStatic as Image;

class HoemsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        return view('admin.home',);
    }

    // public function homeFetch()
    // {

    //     $students = Home::all();
    //     return response()->json([
    //         'students' => $students,
    //     ]);
    // }


    public function allhomes(Request $request)
    {


        $homes = Home::orderBy('id', 'DESC')->get();
        return datatables()->of($homes)
            ->addIndexColumn()
            ->addColumn('action', function ($row) {

                if (!Auth::user()->status == 0) {
                    $html = ' <div class="left"><button type="button" value = "' . $row->id . '" class="btn btn-primary editbtn" >Edit</button><button type="button" value = "' . $row->id . '" class="btn btn-success" data-toggle="modal" data-target="#viewAbout">View</button><button type="button" value = "' . $row->id . '" class="btn btn-danger deletebtn" >Delete</button></div> ';


                    return $html;
                } else {
                    return 'Cancel';;
                }
            })->editColumn('status', function ($row) {
                if ($row->status == 1) return 'Active';
                if ($row->status == 0) return 'Deactive';
                return 'Cancel';
            })->addColumn('image', function ($artist) {
                $url = asset('/storage/files/' . $artist->image);
                $html = ' <a href=' . $url . ' class="venobox" data-gall="gallery01"><img src=' . $url . ' border="0" width="40" class="img-rounded" align="center" /></a>';
                return $html;
            })->rawColumns(['image', 'action', 'status'])->make(true);

        return response();
    }


    public function store(Request $request)
    {





        $homes = new Home();
        $homes->name = $request->name;
        $homes->titleone = $request->titleone;
        $homes->titletwo = $request->titletwo;
        $homes->titlethree = $request->titlethree;
        $homes->descriptions = $request->descriptions;
        $homes->link1 = $request->link1;
        $homes->link2 = $request->link2;
        $homes->link3 = $request->link3;
        $homes->link4 = $request->link4;
        $homes->link5 = $request->link5;
        $image_one = $request->image;


        $image_one_name = hexdec(uniqid()) . '.' . $image_one->getClientOriginalExtension();
        Image::make($image_one)->resize(1920, 1114)->save('storage/files/' . $image_one_name);
        $homes->image = $image_one_name;
        $homes->save();

        return response()->json(['code' => 1, 'msg' => 'New Home has been saved successfully']);
    }



    public function edit($id)
    {
        $homes = Home::find($id);
        if ($homes) {
            return response()->json([
                'status' => 200,
                'student' => $homes,
            ]);
        } else {
            return response()->json([
                'status' => 404,
                'message' => 'No Student Found.'
            ]);
        }
    }


    public function update(Request $request, $id)
    {


        $homes = Home::find($id);

        if ($homes) {
            $homes->name = $request->name;
            $homes->titleone = $request->titleone;
            $homes->titletwo = $request->titletwo;
            $homes->titlethree = $request->titlethree;
            $homes->descriptions = $request->descriptions;
            $homes->link1 = $request->link1;
            $homes->link2 = $request->link2;
            $homes->link3 = $request->link3;
            $homes->link4 = $request->link4;
            $homes->link5 = $request->link5;
            $image_one = $request->image;




            if (empty($request->file('image'))) {
                $update = $homes->save();
            } else {

                if ($request->file('image')) {


                    $path = 'storage/files/' . $homes->image;
                    if (File::exists($path)) {
                        File::delete($path);
                    }

                    $image_one_name = hexdec(uniqid()) . '.' . $image_one->getClientOriginalExtension();
                    Image::make($image_one)->resize(1920, 1114)->save('storage/files/' . $image_one_name);
                    $homes->image = $image_one_name;

                    $homes->save();
                }
            }
            $homes->save();
            return response()->json([
                'status' => 200,
                'message' => 'Student Updated Successfully.'
            ]);
        } else {
            return response()->json([
                'status' => 404,
                'message' => 'No Student Found.'
            ]);
        }
    }


    public function destroy($id)
    {
        $homes = Home::find($id);
        if ($homes) {

            $path = 'storage/files/' . $homes->image;
            File::delete($path);
            $homes->delete();
            return response()->json([
                'status' => 200,
                'message' => 'Student Deleted Successfully.'
            ]);
        } else {
            return response()->json([
                'status' => 404,
                'message' => 'No Student Found.'
            ]);
        }
    }


    public function conatctstore(Request $request)
    {

        $validatedData = $request->validate([
            'name' => 'required|',
            'email' => 'required|',
            'comment' =>  'required|',


        ]);
        $homes = new Contact();
        $homes->name = $request->name;
        $homes->email = $request->email;
        $homes->comment = $request->comment;
        $homes->save();



        $details =   array(
            'name' => $request->name,
            'comment' => $request->comment,
        );

        Mail::to('Kamrulzamantonmoy@gmail.com')->send(new sendMail($details));

        return response()->json([
            'status' => 200,
            'success' => 'Data Added Successfully.'
        ]);
    }

    public function contact()
    {

        return view('admin.contact',);
    }



    public function contacthomes(Request $request)
    {


        $contact = Contact::orderBy('id', 'DESC')->get();
        return datatables()->of($contact)
            ->addIndexColumn()
            ->addColumn('action', function ($row) {

                if (!Auth::user()->status == 0) {
                    $html = ' <div class="left"><button type="button" value = "' . $row->id . '" class="btn btn-success viewbtn" >View</button><button type="button" value = "' . $row->id . '" class="btn btn-danger deletebtn" >Delete</button></div> ';


                    return $html;
                } else {
                    return 'Cancel';;
                }
            })->editColumn('status', function ($row) {
                if ($row->status == 1) return 'Read';
                if ($row->status == 0) return 'Unread';
                return 'Cancel';
            })->rawColumns(['action', 'status'])->make(true);

        return response();
    }

    public function contactdestroy($id)
    {
        $contact = Contact::find($id);
        if ($contact) {
            $contact->delete();
            return response()->json([
                'status' => 200,
                'message' => 'Student Deleted Successfully.'
            ]);
        } else {
            return response()->json([
                'status' => 404,
                'message' => 'No Student Found.'
            ]);
        }
    }

    public function susstore(Request $request)
    {

        Mail::to('Kamrulzamantonmoy@gmail.com')->send(new SusMail());

        return response()->json(['code' => 1, 'message' => 'Thank you']);
    }

    public function contactview($id)
    {

        $contact = Contact::find($id);



        if ($contact) {
            Contact::where('id', $id)->update(['status' => 1,]);
            return response()->json([
                'status' => 200,
                'student' => $contact,
            ]);
        } else {
            return response()->json([
                'status' => 404,
                'message' => 'No Student Found.'
            ]);
        }

        return response()->json([
            'students' => $contact,
        ]);
    }
}
