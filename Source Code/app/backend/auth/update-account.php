<?php
require_once 'app/backend/core/Init.php';

if (Input::exists()) {
    $validate = new Validation();
    $validation = $validate->check($_POST, array(
        'current_password'  => array(
            'required'  => true,
            'min'       => 6,
            'verify'     => 'password'
            ),
        'new_password'  => array(
            'optional'  => true,
            'min'       => 6,
            'bind'      => 'confirm_new_password'
            ),
        'confirm_new_password' => array(
            'optional'  => true,
            'min'       => 6,
            'match'   => 'new_password',
            'bind' => 'new_password',
            ),
    ));
    if ($validation->passed()) {
 
        
            if ($validation->optional()) {
                $result = $user->update(array(
                    'password' => Password::hash(Input::get('new_password'))
                ));
                if ($result) {
                    Session::flash('user-update-success', 'Updated password successfully!');
                    Redirect::to('index.php');
                } else {
                    echo '<div class="alert alert-danger"><strong></strong>Cannot update password</div>';
                }
            }
    } else {
        echo '<div class="alert alert-danger"><strong></strong>' . cleaner($validation->error()) . '</div>';
    }
}
