<?php

if(isset($_POST['submit'])){

    $creat_db = new DB();

    if($creat_db->is_connection()){
        
        $cv_db = get_directory_path().'cv.sql';
        $get_databse = file_get_contents($cv_db);

        if($creat_db->query($get_databse) == true){
            $DBsetting = new DB();
            $setting = $DBsetting->table('setting')->get();

            $data['favicon'] = $setting->favicon;
            $data['site_name'] = input_exists('site_name');
            $data['admin_name'] = input_exists('admin_name');
            $data['admin_password'] = input_exists('admin_password');
            $data['site_description'] = input_exists('site_description');
            $data['site_tags'] = input_exists('site_tags');
            $data['language'] = input_exists('language');
            $data['site_status'] = input_exists('site_status');
            $data['primary_color'] = $setting->primary_color;
            $data['secondary_color'] = $setting->secondary_color;
            
            $confirm_password = input_exists('confirm_password');

            if(strcmp($data['admin_password'] , $confirm_password ) != 0 ) :
                back();
                die();
            endif;

            $save = $DBsetting->update('setting',$setting->id,$data);

            if($save == true){
                // redirect('/admin/?url=login');
                redirect('/install/?url=step-four');
            }else{
                $_SESSION['Error'] = $lang['Data is not updated, we have a problem during the update'];
                back();
            }


        }

        // redirect('/install/?url=step-four');
    }else{
        echo "no connection";
    }
}