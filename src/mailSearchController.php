<?php
namespace MailList\GmailList;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;


class mailSearchController extends Controller
{
    public function getMail()
    {
        $mailContent="";
        $conn   = imap_open('{imap.gmail.com:993/imap/ssl}INBOX', 'bhpshekhar4@gmail.com', 'Shekhar4$', OP_READONLY);


        $some   = imap_search($conn, 'SUBJECT "Critical security alert"', 0);
        $msgnos = imap_search($conn, 'ALL');
        $uids   = imap_search($conn, 'ALL', SE_UID);
        if($conn){
            foreach($some as $email_number) {
            $output="";

            $match_email = imap_fetchbody($conn,$email_number, 1);
            $match_email= quoted_printable_decode($match_email);
            $output.= '<div class="body" style="border:2px solid gray; margin:50px; padding:50px">' .$match_email.'</div>';
            }
        $mailContent = $output;
        }
        else {
        $mailContent = "Cannot connect to server";
        }
        echo $mailContent;
        //return view('welcomePhani', compact('mailContent'));
        //return view('welcomePhani')->with('mailContent', $mailContent);
        //return view("welcomePhani",['mailContent'=>'this is the mail content <br/>'.$mailContent]);
    }

}
