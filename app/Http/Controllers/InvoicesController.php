<?php

namespace App\Http\Controllers;

use App\Invoices;
use App\Repositories\InvoiceRepository;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class InvoicesController extends Controller
{
    //
    protected $invoiceRepo;

    /**
     * InvoicesController constructor.
     * @param $invoiceRepo
     */
    public function __construct(InvoiceRepository $invoiceRepo)
    {
        $this->invoiceRepo = $invoiceRepo;
    }

    public function index()
    {

        if( !Auth::check() ) {
            return "Forbidden!";
        }

        $invoices = $this->transform
        $this->invoiceRepo->all();

        return view('invoices',compact('invoices'));

//        $data['invoices'] = $formatted_invoices;
//        return view('invoices',$data);

    }

    private function transform($database_invoices)
    {
        return $database_invoices;
    }
}
