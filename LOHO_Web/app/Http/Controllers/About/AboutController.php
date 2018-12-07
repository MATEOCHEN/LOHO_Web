<?php

namespace app\http\Controllers\About;

use App\Http\Controllers\Controller;

class AboutController extends Controller{
    public function History(){
        return view('About\loho_history');
    }

    public function Location() {
        return view('About\loho_location');
    }

    public function Tour() {
        return view('About\loho_tour');
    }

    public function Glory() {
        return view('About\loho_glory');
    }

    public function Award() {
        return view('About\loho_award');
    }

    public function Apperance() {
        return view('About\loho_apperance');
    }

    public function Megazine() {
        return view('About\loho_megazine');
    }

    public function Video() {
        return view('About\loho_video');
    }

    public function NetReport() {
        return view('About\loho_netreport');
    }
}
?>