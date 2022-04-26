<?php

namespace App\Controllers;

use App\Models\Payment;
use Symfony\Component\HttpFoundation\Request;

class PaymentController
{
    public function index()
    {
        $request = Request::createFromGlobals();
        $payment = new Payment();
        $all_data = $payment->getAll();
        $flash = [];
        if (
            $request->query->has("date_from") &&
            $request->query->has("date_to") &&
            $request->query->has("amount")
        ) {
            $valid = $this->isPayment($all_data, $request->query->get("date_from"), $request->query->get("date_to"), $request->query->get("amount"));
            if ($valid) {
                $flash = ['status' => 1, 'flash' => 'success', 'message' => 'Đủ điều kiện đăng ký'];
            } else {
                $flash = ['status' => 0, 'flash' => 'danger', 'message' => 'Không đủ điều kiện đăng ký'];
            }
        }
        require_once APP_ROOT . '/views/index.php';
    }

    public function isPayment($data, $date_from, $date_to, $money)
    {
        $total = 0;
        $date_range1 = $this->getDatesFromRange($date_from, $date_to);
        foreach ($data as $v) {
            $date_range2 = $this->getDatesFromRange($v['date_from'], $v['date_to']);
            $intersect = array_intersect($date_range1, $date_range2);
            if (count($intersect) > 0) {
                $total += $v['amount'];
            }
        }
        return $total <= $money;
    }
    function getDatesFromRange($start, $end, $format = 'Y-m-d')
    {

        // Declare an empty array
        $array = array();

        // Variable that store the date interval
        // of period 1 day
        $interval = new \DateInterval('P1D');

        $realEnd = new \DateTime($end);
        $realEnd->add($interval);

        $period = new \DatePeriod(new \DateTime($start), $interval, $realEnd);

        // Use loop to store date into array
        foreach ($period as $date) {
            $array[] = $date->format($format);
        }

        // Return the array elements
        return $array;
    }
}
