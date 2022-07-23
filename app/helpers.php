<?php
  
function formatDateTime($date){
    return \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('d/m/Y - H:i');    
}
   
function formatMoney($money)
{
    $clean_money = str_replace('.','',$money);

    return number_format($clean_money,2,",",".");
}


function percentDiscount($price)
{
    $porcentagem = 40;
    return  round($price - ($price * $porcentagem / 100));

}


function sumPrices($data)
{
    $amount = 0;
    
    foreach ($data as  $value) {
        $amount += $value['price'];
    }

    return $amount;
}