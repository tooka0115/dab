@extends('layouts.app')

@section('content')
    @if (Auth::check())
        <?php $user = Auth::user(); ?>

2017年

<table class="table table-bordered">
	<tbody>
		<tr>
			<td>収支</td>
			<td>大区分</td>
			<td>小区分</td>
			<td>1月</td>
			<td>2月</td>
			<td>3月</td>
			<td>4月</td>
			<td>5月</td>
			<td>6月</td>
			<td>7月</td>
			<td>8月</td>
			<td>9月</td>
			<td>10月</td>
			<td>11月</td>
			<td>12月</td>
			<td>総計</td>
		</tr>
		<tr>
			<td rowspan="6">収入</td>
			<td rowspan="2">本業</td>
			<td>夫手取り</td>
			<td><?php print $husband201701; ?></td>
			<td><?php print $husband201702; ?></td>
			<td><?php print $husband201703; ?></td>
			<td><?php print $husband201704; ?></td>
			<td><?php print $husband201705; ?></td>
			<td><?php print $husband201706; ?></td>
			<td><?php print $husband201707; ?></td>
			<td><?php print $husband201708; ?></td>
			<td><?php print $husband201709; ?></td>
			<td><?php print $husband201710; ?></td>
			<td><?php print $husband201711; ?></td>
			<td><?php print $husband201712; ?></td>
			<td><?php print $husbandtotal; ?></td>
		</tr>
		<tr>
			<td>妻手取り</td>
			<td><?php print $wife201701; ?></td>
			<td><?php print $wife201702; ?></td>
			<td><?php print $wife201703; ?></td>
			<td><?php print $wife201704; ?></td>
			<td><?php print $wife201705; ?></td>
			<td><?php print $wife201706; ?></td>
			<td><?php print $wife201707; ?></td>
			<td><?php print $wife201708; ?></td>
			<td><?php print $wife201709; ?></td>
			<td><?php print $wife201710; ?></td>
			<td><?php print $wife201711; ?></td>
			<td><?php print $wife201712; ?></td>
			<td><?php print $wifetotal; ?></td>
		</tr>
		<tr>
			<td colspan="2">本業　集計</td>
			<td><?php print $main201701; ?></td>
			<td><?php print $main201702; ?></td>
			<td><?php print $main201703; ?></td>
			<td><?php print $main201704; ?></td>
			<td><?php print $main201705; ?></td>
			<td><?php print $main201706; ?></td>
			<td><?php print $main201707; ?></td>
			<td><?php print $main201708; ?></td>
			<td><?php print $main201709; ?></td>
			<td><?php print $main201710; ?></td>
			<td><?php print $main201711; ?></td>
			<td><?php print $main201712; ?></td>
			<td><?php print $maintotal; ?></td>
		</tr>
		<tr>
			<td>本業以外</td>
			<td>ポイントサイト</td>
 			<td><?php print $pointsite201701; ?></td>
			<td><?php print $pointsite201702; ?></td>
			<td><?php print $pointsite201703; ?></td>
			<td><?php print $pointsite201704; ?></td>
			<td><?php print $pointsite201705; ?></td>
			<td><?php print $pointsite201706; ?></td>
			<td><?php print $pointsite201707; ?></td>
			<td><?php print $pointsite201708; ?></td>
			<td><?php print $pointsite201709; ?></td>
			<td><?php print $pointsite201710; ?></td>
			<td><?php print $pointsite201711; ?></td>
			<td><?php print $pointsite201712; ?></td>
			<td><?php print $pointsitetotal; ?></td>
		</tr>
		<tr>
			<td colspan="2">本業以外　集計</td>
 			<td><?php print $sub201701; ?></td>
			<td><?php print $sub201702; ?></td>
			<td><?php print $sub201703; ?></td>
			<td><?php print $sub201704; ?></td>
			<td><?php print $sub201705; ?></td>
			<td><?php print $sub201706; ?></td>
			<td><?php print $sub201707; ?></td>
			<td><?php print $sub201708; ?></td>
			<td><?php print $sub201709; ?></td>
			<td><?php print $sub201710; ?></td>
			<td><?php print $sub201711; ?></td>
			<td><?php print $sub201712; ?></td>
			<td><?php print $subtotal; ?></td>
		</tr>
		<tr>
			<td colspan="2">収入集計</td>
 			<td><?php print $income201701; ?></td>
			<td><?php print $income201702; ?></td>
			<td><?php print $income201703; ?></td>
			<td><?php print $income201704; ?></td>
			<td><?php print $income201705; ?></td>
			<td><?php print $income201706; ?></td>
			<td><?php print $income201707; ?></td>
			<td><?php print $income201708; ?></td>
			<td><?php print $income201709; ?></td>
			<td><?php print $income201710; ?></td>
			<td><?php print $income201711; ?></td>
			<td><?php print $income201712; ?></td>
			<td><?php print $incometotal; ?></td>
		</tr>
		<tr>
			<td rowspan="41">支出</td>
			<td>居住費</td>
			<td>家賃</td>
 			<td><?php print $rent201701; ?></td>
			<td><?php print $rent201702; ?></td>
			<td><?php print $rent201703; ?></td>
			<td><?php print $rent201704; ?></td>
			<td><?php print $rent201705; ?></td>
			<td><?php print $rent201706; ?></td>
			<td><?php print $rent201707; ?></td>
			<td><?php print $rent201708; ?></td>
			<td><?php print $rent201709; ?></td>
			<td><?php print $rent201710; ?></td>
			<td><?php print $rent201711; ?></td>
			<td><?php print $rent201712; ?></td>
			<td><?php print $renttotal; ?></td>
		</tr>
		<tr>
			<td colspan="2">居住費集計</td>
 			<td><?php print $livingexpenses201701; ?></td>
			<td><?php print $livingexpenses201702; ?></td>
			<td><?php print $livingexpenses201703; ?></td>
			<td><?php print $livingexpenses201704; ?></td>
			<td><?php print $livingexpenses201705; ?></td>
			<td><?php print $livingexpenses201706; ?></td>
			<td><?php print $livingexpenses201707; ?></td>
			<td><?php print $livingexpenses201708; ?></td>
			<td><?php print $livingexpenses201709; ?></td>
			<td><?php print $livingexpenses201710; ?></td>
			<td><?php print $livingexpenses201711; ?></td>
			<td><?php print $livingexpenses201712; ?></td>
			<td><?php print $livingexpensestotal; ?></td>
		</tr>
		<tr>
			<td rowspan="2">食費</td>
			<td>食品</td>
 			<td><?php print $food201701; ?></td>
			<td><?php print $food201702; ?></td>
			<td><?php print $food201703; ?></td>
			<td><?php print $food201704; ?></td>
			<td><?php print $food201705; ?></td>
			<td><?php print $food201706; ?></td>
			<td><?php print $food201707; ?></td>
			<td><?php print $food201708; ?></td>
			<td><?php print $food201709; ?></td>
			<td><?php print $food201710; ?></td>
			<td><?php print $food201711; ?></td>
			<td><?php print $food201712; ?></td>
			<td><?php print $foodtotal; ?></td>
		</tr>
		<tr>
			<td>外食</td>
 			<td><?php print $eatingout201701; ?></td>
			<td><?php print $eatingout201702; ?></td>
			<td><?php print $eatingout201703; ?></td>
			<td><?php print $eatingout201704; ?></td>
			<td><?php print $eatingout201705; ?></td>
			<td><?php print $eatingout201706; ?></td>
			<td><?php print $eatingout201707; ?></td>
			<td><?php print $eatingout201708; ?></td>
			<td><?php print $eatingout201709; ?></td>
			<td><?php print $eatingout201710; ?></td>
			<td><?php print $eatingout201711; ?></td>
			<td><?php print $eatingout201712; ?></td>
			<td><?php print $eatingouttotal; ?></td>
		</tr>
		<tr>
			<td colspan="2">食費集計</td>
 			<td><?php print $foodexpense201701; ?></td>
			<td><?php print $foodexpense201702; ?></td>
			<td><?php print $foodexpense201703; ?></td>
			<td><?php print $foodexpense201704; ?></td>
			<td><?php print $foodexpense201705; ?></td>
			<td><?php print $foodexpense201706; ?></td>
			<td><?php print $foodexpense201707; ?></td>
			<td><?php print $foodexpense201708; ?></td>
			<td><?php print $foodexpense201709; ?></td>
			<td><?php print $foodexpense201710; ?></td>
			<td><?php print $foodexpense201711; ?></td>
			<td><?php print $foodexpense201712; ?></td>
			<td><?php print $foodexpense2017total; ?></td>
		</tr>
		<tr>
			<td rowspan="4">光熱水費</td>
			<td>ガス</td>
 			<td><?php print $gas201701; ?></td>
			<td><?php print $gas201702; ?></td>
			<td><?php print $gas201703; ?></td>
			<td><?php print $gas201704; ?></td>
			<td><?php print $gas201705; ?></td>
			<td><?php print $gas201706; ?></td>
			<td><?php print $gas201707; ?></td>
			<td><?php print $gas201708; ?></td>
			<td><?php print $gas201709; ?></td>
			<td><?php print $gas201710; ?></td>
			<td><?php print $gas201711; ?></td>
			<td><?php print $gas201712; ?></td>
			<td><?php print $gastotal; ?></td>
		</tr>
		<tr>
			<td>水道</td>
 			<td><?php print $water201701; ?></td>
			<td><?php print $water201702; ?></td>
			<td><?php print $water201703; ?></td>
			<td><?php print $water201704; ?></td>
			<td><?php print $water201705; ?></td>
			<td><?php print $water201706; ?></td>
			<td><?php print $water201707; ?></td>
			<td><?php print $water201708; ?></td>
			<td><?php print $water201709; ?></td>
			<td><?php print $water201710; ?></td>
			<td><?php print $water201711; ?></td>
			<td><?php print $water201712; ?></td>
			<td><?php print $water2017total; ?></td>
		</tr>
		<tr>
			<td>電気</td>
 			<td><?php print $electric201701; ?></td>
			<td><?php print $electric201702; ?></td>
			<td><?php print $electric201703; ?></td>
			<td><?php print $electric201704; ?></td>
			<td><?php print $electric201705; ?></td>
			<td><?php print $electric201706; ?></td>
			<td><?php print $electric201707; ?></td>
			<td><?php print $electric201708; ?></td>
			<td><?php print $electric201709; ?></td>
			<td><?php print $electric201710; ?></td>
			<td><?php print $electric201711; ?></td>
			<td><?php print $electric201712; ?></td>
			<td><?php print $electric2017total; ?></td>
		</tr>
		<tr>
			<td>灯油</td>
 			<td><?php print $kerosene201701; ?></td>
			<td><?php print $kerosene201702; ?></td>
			<td><?php print $kerosene201703; ?></td>
			<td><?php print $kerosene201704; ?></td>
			<td><?php print $kerosene201705; ?></td>
			<td><?php print $kerosene201706; ?></td>
			<td><?php print $kerosene201707; ?></td>
			<td><?php print $kerosene201708; ?></td>
			<td><?php print $kerosene201709; ?></td>
			<td><?php print $kerosene201710; ?></td>
			<td><?php print $kerosene201711; ?></td>
			<td><?php print $kerosene201712; ?></td>
			<td><?php print $kerosene2017total; ?></td>
		</tr>
		<tr>
			<td colspan="2">光熱水費　集計</td>
 			<td><?php print $utilitycost201701; ?></td>
			<td><?php print $utilitycost201702; ?></td>
			<td><?php print $utilitycost201703; ?></td>
			<td><?php print $utilitycost201704; ?></td>
			<td><?php print $utilitycost201705; ?></td>
			<td><?php print $utilitycost201706; ?></td>
			<td><?php print $utilitycost201707; ?></td>
			<td><?php print $utilitycost201708; ?></td>
			<td><?php print $utilitycost201709; ?></td>
			<td><?php print $utilitycost201710; ?></td>
			<td><?php print $utilitycost201711; ?></td>
			<td><?php print $utilitycost201712; ?></td>
			<td><?php print $utilitycost2017total; ?></td>
		</tr>
		<tr>
			<td rowspan="3">車関係</td>
			<td>ガソリン</td>
 			<td><?php print $gasoline201701; ?></td>
			<td><?php print $gasoline201702; ?></td>
			<td><?php print $gasoline201703; ?></td>
			<td><?php print $gasoline201704; ?></td>
			<td><?php print $gasoline201705; ?></td>
			<td><?php print $gasoline201706; ?></td>
			<td><?php print $gasoline201707; ?></td>
			<td><?php print $gasoline201708; ?></td>
			<td><?php print $gasoline201709; ?></td>
			<td><?php print $gasoline201710; ?></td>
			<td><?php print $gasoline201711; ?></td>
			<td><?php print $gasoline201712; ?></td>
			<td><?php print $gasoline2017total; ?></td>
		</tr>
		<tr>
			<td>交通費</td>
 			<td><?php print $transportexpenses201701; ?></td>
			<td><?php print $transportexpenses201702; ?></td>
			<td><?php print $transportexpenses201703; ?></td>
			<td><?php print $transportexpenses201704; ?></td>
			<td><?php print $transportexpenses201705; ?></td>
			<td><?php print $transportexpenses201706; ?></td>
			<td><?php print $transportexpenses201707; ?></td>
			<td><?php print $transportexpenses201708; ?></td>
			<td><?php print $transportexpenses201709; ?></td>
			<td><?php print $transportexpenses201710; ?></td>
			<td><?php print $transportexpenses201711; ?></td>
			<td><?php print $transportexpenses201712; ?></td>
			<td><?php print $transportexpenses2017total; ?></td>
		</tr>
		<tr>
			<td>整備等</td>
 			<td><?php print $maintenance201701; ?></td>
			<td><?php print $maintenance201702; ?></td>
			<td><?php print $maintenance201703; ?></td>
			<td><?php print $maintenance201704; ?></td>
			<td><?php print $maintenance201705; ?></td>
			<td><?php print $maintenance201706; ?></td>
			<td><?php print $maintenance201707; ?></td>
			<td><?php print $maintenance201708; ?></td>
			<td><?php print $maintenance201709; ?></td>
			<td><?php print $maintenance201710; ?></td>
			<td><?php print $maintenance201711; ?></td>
			<td><?php print $maintenance201712; ?></td>
			<td><?php print $maintenance2017total; ?></td>
		</tr>
		<tr>
			<td colspan="2">車関係　集計</td>
 			<td><?php print $car201701; ?></td>
			<td><?php print $car201702; ?></td>
			<td><?php print $car201703; ?></td>
			<td><?php print $car201704; ?></td>
			<td><?php print $car201705; ?></td>
			<td><?php print $car201706; ?></td>
			<td><?php print $car201707; ?></td>
			<td><?php print $car201708; ?></td>
			<td><?php print $car201709; ?></td>
			<td><?php print $car201710; ?></td>
			<td><?php print $car201711; ?></td>
			<td><?php print $car201712; ?></td>
			<td><?php print $car2017total; ?></td>
		</tr>
		<tr>
			<td>日用雑貨費</td>
			<td>日用品</td>
 			<td><?php print $dailynecessities201701; ?></td>
			<td><?php print $dailynecessities201702; ?></td>
			<td><?php print $dailynecessities201703; ?></td>
			<td><?php print $dailynecessities201704; ?></td>
			<td><?php print $dailynecessities201705; ?></td>
			<td><?php print $dailynecessities201706; ?></td>
			<td><?php print $dailynecessities201707; ?></td>
			<td><?php print $dailynecessities201708; ?></td>
			<td><?php print $dailynecessities201709; ?></td>
			<td><?php print $dailynecessities201710; ?></td>
			<td><?php print $dailynecessities201711; ?></td>
			<td><?php print $dailynecessities201712; ?></td>
			<td><?php print $dailynecessities2017total; ?></td>
		</tr>
		<tr>
			<td colspan="2">日用雑貨費　集計</td>
 			<td><?php print $conveniencegoods201701; ?></td>
			<td><?php print $conveniencegoods201702; ?></td>
			<td><?php print $conveniencegoods201703; ?></td>
			<td><?php print $conveniencegoods201704; ?></td>
			<td><?php print $conveniencegoods201705; ?></td>
			<td><?php print $conveniencegoods201706; ?></td>
			<td><?php print $conveniencegoods201707; ?></td>
			<td><?php print $conveniencegoods201708; ?></td>
			<td><?php print $conveniencegoods201709; ?></td>
			<td><?php print $conveniencegoods201710; ?></td>
			<td><?php print $conveniencegoods201711; ?></td>
			<td><?php print $conveniencegoods201712; ?></td>
			<td><?php print $conveniencegoods2017total; ?></td>
		</tr>
		<tr>
			<td rowspan="2">通信費</td>
			<td>インターネット</td>
 			<td><?php print $internet201701; ?></td>
			<td><?php print $internet201702; ?></td>
			<td><?php print $internet201703; ?></td>
			<td><?php print $internet201704; ?></td>
			<td><?php print $internet201705; ?></td>
			<td><?php print $internet201706; ?></td>
			<td><?php print $internet201707; ?></td>
			<td><?php print $internet201708; ?></td>
			<td><?php print $internet201709; ?></td>
			<td><?php print $internet201710; ?></td>
			<td><?php print $internet201711; ?></td>
			<td><?php print $internet201712; ?></td>
			<td><?php print $internet2017total; ?></td>
		</tr>
			<td>携帯</td>
 			<td><?php print $mobile201701; ?></td>
			<td><?php print $mobile201702; ?></td>
			<td><?php print $mobile201703; ?></td>
			<td><?php print $mobile201704; ?></td>
			<td><?php print $mobile201705; ?></td>
			<td><?php print $mobile201706; ?></td>
			<td><?php print $mobile201707; ?></td>
			<td><?php print $mobile201708; ?></td>
			<td><?php print $mobile201709; ?></td>
			<td><?php print $mobile201710; ?></td>
			<td><?php print $mobile201711; ?></td>
			<td><?php print $mobile201712; ?></td>
			<td><?php print $mobile2017total; ?></td>
		</tr>
		<tr>
			<td colspan="2">通信費　集計</td>
 			<td><?php print $communicationcosts201701; ?></td>
			<td><?php print $communicationcosts201702; ?></td>
			<td><?php print $communicationcosts201703; ?></td>
			<td><?php print $communicationcosts201704; ?></td>
			<td><?php print $communicationcosts201705; ?></td>
			<td><?php print $communicationcosts201706; ?></td>
			<td><?php print $communicationcosts201707; ?></td>
			<td><?php print $communicationcosts201708; ?></td>
			<td><?php print $communicationcosts201709; ?></td>
			<td><?php print $communicationcosts201710; ?></td>
			<td><?php print $communicationcosts201711; ?></td>
			<td><?php print $communicationcosts201712; ?></td>
			<td><?php print $communicationcosts2017total; ?></td>
		</tr>
			<td>保険</td>
			<td>生命保険</td>
 			<td><?php print $lifeinsurance201701; ?></td>
			<td><?php print $lifeinsurance201702; ?></td>
			<td><?php print $lifeinsurance201703; ?></td>
			<td><?php print $lifeinsurance201704; ?></td>
			<td><?php print $lifeinsurance201705; ?></td>
			<td><?php print $lifeinsurance201706; ?></td>
			<td><?php print $lifeinsurance201707; ?></td>
			<td><?php print $lifeinsurance201708; ?></td>
			<td><?php print $lifeinsurance201709; ?></td>
			<td><?php print $lifeinsurance201710; ?></td>
			<td><?php print $lifeinsurance201711; ?></td>
			<td><?php print $lifeinsurance201712; ?></td>
			<td><?php print $lifeinsurance2017total; ?></td>
		</tr>
		<tr>
			<td colspan="2">保険　集計</td>
 			<td><?php print $insurance201701; ?></td>
			<td><?php print $insurance201702; ?></td>
			<td><?php print $insurance201703; ?></td>
			<td><?php print $insurance201704; ?></td>
			<td><?php print $insurance201705; ?></td>
			<td><?php print $insurance201706; ?></td>
			<td><?php print $insurance201707; ?></td>
			<td><?php print $insurance201708; ?></td>
			<td><?php print $insurance201709; ?></td>
			<td><?php print $insurance201710; ?></td>
			<td><?php print $insurance201711; ?></td>
			<td><?php print $insurance201712; ?></td>
			<td><?php print $insurance2017total; ?></td>
		</tr>
		<tr>
			<td rowspan="2">医療費</td>
			<td>病院</td>
 			<td><?php print $hospital201701; ?></td>
			<td><?php print $hospital201702; ?></td>
			<td><?php print $hospital201703; ?></td>
			<td><?php print $hospital201704; ?></td>
			<td><?php print $hospital201705; ?></td>
			<td><?php print $hospital201706; ?></td>
			<td><?php print $hospital201707; ?></td>
			<td><?php print $hospital201708; ?></td>
			<td><?php print $hospital201709; ?></td>
			<td><?php print $hospital201710; ?></td>
			<td><?php print $hospital201711; ?></td>
			<td><?php print $hospital201712; ?></td>
			<td><?php print $hospital2017total; ?></td>
		</tr>
			<td>薬</td>
 			<td><?php print $medicine201701; ?></td>
			<td><?php print $medicine201702; ?></td>
			<td><?php print $medicine201703; ?></td>
			<td><?php print $medicine201704; ?></td>
			<td><?php print $medicine201705; ?></td>
			<td><?php print $medicine201706; ?></td>
			<td><?php print $medicine201707; ?></td>
			<td><?php print $medicine201708; ?></td>
			<td><?php print $medicine201709; ?></td>
			<td><?php print $medicine201710; ?></td>
			<td><?php print $medicine201711; ?></td>
			<td><?php print $medicine201712; ?></td>
			<td><?php print $medicine2017total; ?></td>
		</tr>
		<tr>
			<td colspan="2">医療費　集計</td>
 			<td><?php print $medical201701; ?></td>
			<td><?php print $medical201702; ?></td>
			<td><?php print $medical201703; ?></td>
			<td><?php print $medical201704; ?></td>
			<td><?php print $medical201705; ?></td>
			<td><?php print $medical201706; ?></td>
			<td><?php print $medical201707; ?></td>
			<td><?php print $medical201708; ?></td>
			<td><?php print $medical201709; ?></td>
			<td><?php print $medical201710; ?></td>
			<td><?php print $medical201711; ?></td>
			<td><?php print $medical201712; ?></td>
			<td><?php print $medical2017total; ?></td>
		</tr>
			<td rowspan="3">交際費</td>
			<td>お祝い</td>
 			<td><?php print $celebration201701; ?></td>
			<td><?php print $celebration201702; ?></td>
			<td><?php print $celebration201703; ?></td>
			<td><?php print $celebration201704; ?></td>
			<td><?php print $celebration201705; ?></td>
			<td><?php print $celebration201706; ?></td>
			<td><?php print $celebration201707; ?></td>
			<td><?php print $celebration201708; ?></td>
			<td><?php print $celebration201709; ?></td>
			<td><?php print $celebration201710; ?></td>
			<td><?php print $celebration201711; ?></td>
			<td><?php print $celebration201712; ?></td>
			<td><?php print $celebration2017total; ?></td>
		</tr>
			<td>お土産</td>
 			<td><?php print $souvenir201701; ?></td>
			<td><?php print $souvenir201702; ?></td>
			<td><?php print $souvenir201703; ?></td>
			<td><?php print $souvenir201704; ?></td>
			<td><?php print $souvenir201705; ?></td>
			<td><?php print $souvenir201706; ?></td>
			<td><?php print $souvenir201707; ?></td>
			<td><?php print $souvenir201708; ?></td>
			<td><?php print $souvenir201709; ?></td>
			<td><?php print $souvenir201710; ?></td>
			<td><?php print $souvenir201711; ?></td>
			<td><?php print $souvenir201712; ?></td>
			<td><?php print $souvenir2017total; ?></td>
		</tr>
			<td>人付き合い</td>
 			<td><?php print $socialdisposition201701; ?></td>
			<td><?php print $socialdisposition201702; ?></td>
			<td><?php print $socialdisposition201703; ?></td>
			<td><?php print $socialdisposition201704; ?></td>
			<td><?php print $socialdisposition201705; ?></td>
			<td><?php print $socialdisposition201706; ?></td>
			<td><?php print $socialdisposition201707; ?></td>
			<td><?php print $socialdisposition201708; ?></td>
			<td><?php print $socialdisposition201709; ?></td>
			<td><?php print $socialdisposition201710; ?></td>
			<td><?php print $socialdisposition201711; ?></td>
			<td><?php print $socialdisposition201712; ?></td>
			<td><?php print $socialdisposition2017total; ?></td>
		</tr>
		<tr>
			<td colspan="2">交際費　集計</td>
 			<td><?php print $entertainmentexpenses201701; ?></td>
			<td><?php print $entertainmentexpenses201702; ?></td>
			<td><?php print $entertainmentexpenses201703; ?></td>
			<td><?php print $entertainmentexpenses201704; ?></td>
			<td><?php print $entertainmentexpenses201705; ?></td>
			<td><?php print $entertainmentexpenses201706; ?></td>
			<td><?php print $entertainmentexpenses201707; ?></td>
			<td><?php print $entertainmentexpenses201708; ?></td>
			<td><?php print $entertainmentexpenses201709; ?></td>
			<td><?php print $entertainmentexpenses201710; ?></td>
			<td><?php print $entertainmentexpenses201711; ?></td>
			<td><?php print $entertainmentexpenses201712; ?></td>
			<td><?php print $entertainmentexpenses2017total; ?></td>
		</tr>
		<tr>
			<td rowspan="2">教養娯楽費</td>
			<td>娯楽</td>
 			<td><?php print $amusement201701; ?></td>
			<td><?php print $amusement201702; ?></td>
			<td><?php print $amusement201703; ?></td>
			<td><?php print $amusement201704; ?></td>
			<td><?php print $amusement201705; ?></td>
			<td><?php print $amusement201706; ?></td>
			<td><?php print $amusement201707; ?></td>
			<td><?php print $amusement201708; ?></td>
			<td><?php print $amusement201709; ?></td>
			<td><?php print $amusement201710; ?></td>
			<td><?php print $amusement201711; ?></td>
			<td><?php print $amusement201712; ?></td>
			<td><?php print $amusement2017total; ?></td>
		</tr>
			<td>趣味</td>
 			<td><?php print $hobby201701; ?></td>
			<td><?php print $hobby201702; ?></td>
			<td><?php print $hobby201703; ?></td>
			<td><?php print $hobby201704; ?></td>
			<td><?php print $hobby201705; ?></td>
			<td><?php print $hobby201706; ?></td>
			<td><?php print $hobby201707; ?></td>
			<td><?php print $hobby201708; ?></td>
			<td><?php print $hobby201709; ?></td>
			<td><?php print $hobby201710; ?></td>
			<td><?php print $hobby201711; ?></td>
			<td><?php print $hobby201712; ?></td>
			<td><?php print $hobby2017total; ?></td>
		</tr>
		<tr>
			<td colspan="2">教養娯楽費　集計</td>
 			<td><?php print $recreationalexpenses201701; ?></td>
			<td><?php print $recreationalexpenses201702; ?></td>
			<td><?php print $recreationalexpenses201703; ?></td>
			<td><?php print $recreationalexpenses201704; ?></td>
			<td><?php print $recreationalexpenses201705; ?></td>
			<td><?php print $recreationalexpenses201706; ?></td>
			<td><?php print $recreationalexpenses201707; ?></td>
			<td><?php print $recreationalexpenses201708; ?></td>
			<td><?php print $recreationalexpenses201709; ?></td>
			<td><?php print $recreationalexpenses201710; ?></td>
			<td><?php print $recreationalexpenses201711; ?></td>
			<td><?php print $recreationalexpenses201712; ?></td>
			<td><?php print $recreationalexpenses2017total; ?></td>
		</tr>
		<tr>
			<td rowspan="6">その他経費</td>
			<td>家具家電</td>
 			<td><?php print $furnitureelectronics201701; ?></td>
			<td><?php print $furnitureelectronics201702; ?></td>
			<td><?php print $furnitureelectronics201703; ?></td>
			<td><?php print $furnitureelectronics201704; ?></td>
			<td><?php print $furnitureelectronics201705; ?></td>
			<td><?php print $furnitureelectronics201706; ?></td>
			<td><?php print $furnitureelectronics201707; ?></td>
			<td><?php print $furnitureelectronics201708; ?></td>
			<td><?php print $furnitureelectronics201709; ?></td>
			<td><?php print $furnitureelectronics201710; ?></td>
			<td><?php print $furnitureelectronics201711; ?></td>
			<td><?php print $furnitureelectronics201712; ?></td>
			<td><?php print $furnitureelectronics2017total; ?></td>
		</tr>
		<tr>
			<td>雑費</td>
 			<td><?php print $miscellaneousexpenses201701; ?></td>
			<td><?php print $miscellaneousexpenses201702; ?></td>
			<td><?php print $miscellaneousexpenses201703; ?></td>
			<td><?php print $miscellaneousexpenses201704; ?></td>
			<td><?php print $miscellaneousexpenses201705; ?></td>
			<td><?php print $miscellaneousexpenses201706; ?></td>
			<td><?php print $miscellaneousexpenses201707; ?></td>
			<td><?php print $miscellaneousexpenses201708; ?></td>
			<td><?php print $miscellaneousexpenses201709; ?></td>
			<td><?php print $miscellaneousexpenses201710; ?></td>
			<td><?php print $miscellaneousexpenses201711; ?></td>
			<td><?php print $miscellaneousexpenses201712; ?></td>
			<td><?php print $miscellaneousexpenses2017total; ?></td>
		</tr>
		<tr>
			<td>仕事関係</td>
 			<td><?php print $workrelation201701; ?></td>
			<td><?php print $workrelation201702; ?></td>
			<td><?php print $workrelation201703; ?></td>
			<td><?php print $workrelation201704; ?></td>
			<td><?php print $workrelation201705; ?></td>
			<td><?php print $workrelation201706; ?></td>
			<td><?php print $workrelation201707; ?></td>
			<td><?php print $workrelation201708; ?></td>
			<td><?php print $workrelation201709; ?></td>
			<td><?php print $workrelation201710; ?></td>
			<td><?php print $workrelation201711; ?></td>
			<td><?php print $workrelation201712; ?></td>
			<td><?php print $workrelation2017total; ?></td>
		</tr>
		<tr>
			<td>被服</td>
 			<td><?php print $clothing201701; ?></td>
			<td><?php print $clothing201702; ?></td>
			<td><?php print $clothing201703; ?></td>
			<td><?php print $clothing201704; ?></td>
			<td><?php print $clothing201705; ?></td>
			<td><?php print $clothing201706; ?></td>
			<td><?php print $clothing201707; ?></td>
			<td><?php print $clothing201708; ?></td>
			<td><?php print $clothing201709; ?></td>
			<td><?php print $clothing201710; ?></td>
			<td><?php print $clothing201711; ?></td>
			<td><?php print $clothing201712; ?></td>
			<td><?php print $clothing2017total; ?></td>
		</tr>
		<tr>
			<td>理美容費</td>
 			<td><?php print $beautycare201701; ?></td>
			<td><?php print $beautycare201702; ?></td>
			<td><?php print $beautycare201703; ?></td>
			<td><?php print $beautycare201704; ?></td>
			<td><?php print $beautycare201705; ?></td>
			<td><?php print $beautycare201706; ?></td>
			<td><?php print $beautycare201707; ?></td>
			<td><?php print $beautycare201708; ?></td>
			<td><?php print $beautycare201709; ?></td>
			<td><?php print $beautycare201710; ?></td>
			<td><?php print $beautycare201711; ?></td>
			<td><?php print $beautycare201712; ?></td>
			<td><?php print $beautycare2017total; ?></td>
		</tr>
		<tr>
			<td>借入金返済（無利子）</td>
 			<td><?php print $repayment201701; ?></td>
			<td><?php print $repayment201702; ?></td>
			<td><?php print $repayment201703; ?></td>
			<td><?php print $repayment201704; ?></td>
			<td><?php print $repayment201705; ?></td>
			<td><?php print $repayment201706; ?></td>
			<td><?php print $repayment201707; ?></td>
			<td><?php print $repayment201708; ?></td>
			<td><?php print $repayment201709; ?></td>
			<td><?php print $repayment201710; ?></td>
			<td><?php print $repayment201711; ?></td>
			<td><?php print $repayment201712; ?></td>
			<td><?php print $repayment2017total; ?></td>
		</tr>
		<tr>
			<td colspan="2">その他経費　集計</td>
 			<td><?php print $other201701; ?></td>
			<td><?php print $other201702; ?></td>
			<td><?php print $other201703; ?></td>
			<td><?php print $other201704; ?></td>
			<td><?php print $other201705; ?></td>
			<td><?php print $other201706; ?></td>
			<td><?php print $other201707; ?></td>
			<td><?php print $other201708; ?></td>
			<td><?php print $other201709; ?></td>
			<td><?php print $other201710; ?></td>
			<td><?php print $other201711; ?></td>
			<td><?php print $other201712; ?></td>
			<td><?php print $other2017total; ?></td>
		</tr>
		<tr>
			<td>年金</td>
			<td>国民年金追納</td>
 			<td><?php print $pension201701; ?></td>
			<td><?php print $pension201702; ?></td>
			<td><?php print $pension201703; ?></td>
			<td><?php print $pension201704; ?></td>
			<td><?php print $pension201705; ?></td>
			<td><?php print $pension201706; ?></td>
			<td><?php print $pension201707; ?></td>
			<td><?php print $pension201708; ?></td>
			<td><?php print $pension201709; ?></td>
			<td><?php print $pension201710; ?></td>
			<td><?php print $pension201711; ?></td>
			<td><?php print $pension201712; ?></td>
			<td><?php print $pension2017total; ?></td>
		</tr>
		<tr>
			<td colspan="2">年金　集計</td>
 			<td><?php print $nationalpension201701; ?></td>
			<td><?php print $nationalpension201702; ?></td>
			<td><?php print $nationalpension201703; ?></td>
			<td><?php print $nationalpension201704; ?></td>
			<td><?php print $nationalpension201705; ?></td>
			<td><?php print $nationalpension201706; ?></td>
			<td><?php print $nationalpension201707; ?></td>
			<td><?php print $nationalpension201708; ?></td>
			<td><?php print $nationalpension201709; ?></td>
			<td><?php print $nationalpension201710; ?></td>
			<td><?php print $nationalpension201711; ?></td>
			<td><?php print $nationalpension201712; ?></td>
			<td><?php print $nationalpension2017total; ?></td>
		</tr>
		<tr>
			<td colspan="2">支出集計</td>
 			<td><?php print $spending201701; ?></td>
			<td><?php print $spending201702; ?></td>
			<td><?php print $spending201703; ?></td>
			<td><?php print $spending201704; ?></td>
			<td><?php print $spending201705; ?></td>
			<td><?php print $spending201706; ?></td>
			<td><?php print $spending201707; ?></td>
			<td><?php print $spending201708; ?></td>
			<td><?php print $spending201709; ?></td>
			<td><?php print $spending201710; ?></td>
			<td><?php print $spending201711; ?></td>
			<td><?php print $spending201712; ?></td>
			<td><?php print $spending2017total; ?></td>
		</tr>
		<tr>
			<td colspan="3">収支</td>
<td><?php print $income201701-$spending201701; ?></td>
<td><?php print $income201702-$spending201702; ?></td>
<td><?php print $income201703-$spending201703; ?></td>
<td><?php print $income201704-$spending201704; ?></td>
<td><?php print $income201705-$spending201705; ?></td>
<td><?php print $income201706-$spending201706; ?></td>
<td><?php print $income201707-$spending201707; ?></td>
<td><?php print $income201708-$spending201708; ?></td>
<td><?php print $income201709-$spending201709; ?></td>
<td><?php print $income201710-$spending201710; ?></td>
<td><?php print $income201711-$spending201711; ?></td>
<td><?php print $income201712-$spending201712; ?></td>
<td><?php print $incometotal-$spending2017total; ?></td>
		</tr>
	</tbody>
</table>

@endif

@endsection