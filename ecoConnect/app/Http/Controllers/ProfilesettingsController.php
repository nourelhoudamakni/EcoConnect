<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilesettingsController extends Controller
{
    public function profileInformation() {

        return view('frontOffice/updateProfile');

   }
   public function profileSettings() {

    return view('frontOffice/settingsProfile');

}
public function updatePassword() {

    return view('frontOffice/updatePassword');

}
}
