<?php
namespace App\Repositories;
use App\Invoices;
/**
 * Created by PhpStorm.
 * User: pau
 * Date: 18/01/16
 * Time: 18:01
 */
class InvoiceRepository
{
    public function getAllInvoicesFromDatabase()
    {
        return Invoices::all();
    }

}