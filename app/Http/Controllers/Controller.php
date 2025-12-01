<?php

namespace App\Http\Controllers;

abstract class Controller
{
    //hapus policy
    public function destroy($id)
    {
        $this->authorize('delete', $file);
    }
}
