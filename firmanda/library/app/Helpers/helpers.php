<?php

use App\Models\Transaction;
use Carbon\Carbon;

function date_convert($value)
{
    return date('d/m/y - h:i:s', strtotime($value));
}
if (!function_exists('getNotifications')) {
    function getNotifications()
    {
        // Ambil tanggal saat ini
        $today = Carbon::now()->toDateString();

        // Query untuk mendapatkan transaksi yang hampir jatuh tempo (misalnya 2 hari sebelum date_end)
        $notifications = Transaction::whereDate('date_end', '<', Carbon::now()->toDateString())
            ->whereHas('transactionDetails', function ($query) {
                $query->where('status', 'borrowed');
            })
            ->get();
        // Format notifikasi
        $result = [];
        foreach ($notifications as $transaction) {
            $result[] = "Transaksi ID: {$transaction->id} akan jatuh tempo pada {$transaction->date_end}.";
        }

        return $result;
    }
}
