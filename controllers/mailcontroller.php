<?php 
class mailcontroller extends controller
{
    function mail()
    {
        $traloilienhe = new traloilienhe;
        $lienhekh = new lienhekh;
        $repMails = $traloilienhe->get();
        $mails = $lienhekh->get();
        // $repMailsTrash = $traloilienhe->trash();
        // $mailsTrash = $lienhekh->trash();
        $this->view('views/hethong/list-mail',[
            'mails'=>$mails,
            'myMails'=>$repMails,
            // 'repMailsTrash'=>$repMailsTrash,
            // 'mailsTrash'=>$mailsTrash
        ]);
    }

    function maildetail(){
        $mail               = (new lienhekh)->find($_GET['id']);
        $repMail            = (new traloilienhe)->getRepMail($mail->id);
        $mail->nguoi_tao    = (new khachhang)->find($mail->nguoi_tao);
        for($i = 0 ; $i< count($repMail);$i++)
        {
            $repMail[$i]->nguoi_tao = (new user)->find($repMail[$i]->nguoi_tra_loi);
        }
        echo json_encode(array('data'=>$mail,'repMail'=>$repMail));
    }

    function delete(){
        $msg = 'Có lỗi xảy ra!';
        $status = 'danger';
        if($_GET['id'])
        {
            $delete = (new lienhekh)->delete($_GET['id']);
            if($delete)
            {
                $msg = 'Thêm thành công!';
                $status = 'success';
            }
        }
        chuyentrang(href('mail','mail'),['msg'=>$msg,'status'=>$status]);
    }

    function reply(){
        
        if($_POST)
        {
            $rep = (new traloilienhe)->insert($_POST);
            if($rep)
            {
                $msg = 'Trả lời mail thành công!';
                $status = 'success';
            }else
            {
                $msg = 'Có lỗi xảy ra!';
                $status = 'danger';
            }
            chuyentrang(href('mail','mail'),['msg'=>$msg,'status'=>$status]);
        }
        if($_GET['id'])
        {
            $mail = (new lienhekh)->find($_GET['id']);
            if($mail)
            {
                $this->view('views/hethong/rep-mail',['id'=>$_GET['id'],'mail'=>$mail]);
            }
        }else{
            $msg = 'Có lỗi xảy ra!';
            $status = 'danger';
            chuyentrang(href('mail','mail'),['msg'=>$msg,'status'=>$status]);
        }
    }
}