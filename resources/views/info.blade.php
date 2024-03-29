@extends('layouts.info1')
@section('content')
	<div style="position: relative; left:16.7%;">
<a href="#" align="center" style="font-size:18px;line-height:2.5; color:#4E4E4E; position:relative;left:1%; bottom: 8px;">Главная</a>
		<a align="center" style="font-size:18px;line-height:2.5; color:#909090; position:relative;left:1%; bottom:8px"> / </a>
			<a h align="center" style="font-size:18px;line-height:2.5; color:#4E4E4E; position:relative;left:1%; bottom: 8px;">О нас</a>

	</div>
	<ul id="my_menu">

	<li><a href="/info/oblast_akkreditazii"><span>Область аккредитации</span></a></li>
	<li><a id="btn1" href="#"><span>Оборудование</span></a></li>
	<li><a id="btn3" href="#"><span>Испытания</span></a></li>
	<li><a href="/info/mikrobiologiya"><span>Микробиология</span></a></li>
	<li><a href="/info/proizvodstvenniy_control"><span>Производственный контроль</span></a></li>
</ul>


<script>
		$(document).ready(function(){

				$('#btn1').click(function(){
						$.ajax({
								url: "/info/oborudovanie",
								cache: false,
								success: function(html){
										$("#banner6").html(html);
								}
						});
				});

				$('#btn3').click(function(){
						$.ajax({
								url: "/info/ispitaniya",
								cache: false,
								success: function(html){
										$("#banner6").html(html);
								}
						});
				});

				$('#btn2').click(function(){
						$.ajax({
								url: "page2.html",
								cache: false,
								success: function(html){
										$("#content").html(html);
								}
						});
				});

		});
</script>

<div id="banner6" style="width: 907px; "><br>
	<div style="text-align: center;">
	<b style="font-size:25px;line-height:1.5;color: #000; ">Область аккредитации</b><br>
	</div>

	<div style="padding-left:15px;padding-right: 15px; font: 'Open Sans', sans-serif;     color: #212121;">
	<p style="text-align: justify;"><u>Область аккредитации испытательной лаборатории ФБУ &quot;Новосибирский ЦСМ&quot; включает испытания следующих видов продукции:</u></p>

	<ul>
	<li style="text-align: justify;">Хлебобулочные и макаронные изделия</li>
	<li style="text-align: justify;">Продукция сахарной промышленности</li>
	<li style="text-align: justify;">Изделия кондитерские сахаристые и мучные</li>
	<li style="text-align: justify;">Продукция масложировой промышленности</li>
	<li style="text-align: justify;">Продукция консервной и овощесушильной промышленности</li>
	<li style="text-align: justify;">Продукция винодельческой промышленности</li>
	<li style="text-align: justify;">Продукция ликероводочной, спиртовой, пивоваренной промышленности</li>
	<li style="text-align: justify;">Продукция производства безалкогольных напитков</li>
	<li style="text-align: justify;">Питьевая вода</li>
	<li style="text-align: justify;">БАД на растительной основе</li>
	<li style="text-align: justify;">Парфюмерно-косметическая продукция</li>
	<li style="text-align: justify;">Минеральные воды промышленного розлива</li>
	<li style="text-align: justify;">Крахмал и крахмалопаточные продукты</li>
	<li style="text-align: justify;">Продукция чайной промышленности, производства пищевых концентратов, пряности</li>
	<li style="text-align: justify;">Соль поваренная пищевая</li>
	<li style="text-align: justify;">Продукция мясной и птицеперерабатывающей промышленности (включая яйцепродукты), яйца</li>
	<li style="text-align: justify;">Продукция молочной, маслосыродельной промышленности. Молоко и сливки сырые</li>
	<li style="text-align: justify;">Продукция рыбная пищевая товарная. Улов рыбы (без китов, морского зверя, ракообразных)</li>
	<li style="text-align: justify;">Консервы и пресервы рыбные и из морепродуктов</li>
	<li style="text-align: justify;">Продукты переработки зерна(мука, крупа, побочные продукты мукомольно-крупяной промышленности)</li>
	<li style="text-align: justify;">Зерно и зернобобовые культуры</li>
	<li style="text-align: justify;">Масличные культуры</li>
	<li style="text-align: justify;">Клубнеплодные, овощные, бахчевые культуры и продукция закрытого грунта</li>
	<li style="text-align: justify;">Продукция пчеловодства</li>
	</ul>

	<p style="text-align: justify;"><u>Парфюмерно-косметическая продукция:</u></p>

	<ul>
	<li style="text-align: justify;">Изделия парфюмерные жидкие (одеконы, духи, воды туалетные)</li>
	<li style="text-align: justify;">Изделия косметические жидкие (лосьоны, тоники, средства для завивки и укладки волос, лаки и эмали маникюрные)</li>
	<li style="text-align: justify;">Кремы косметические эмульсионные жидкие (эмульсии, молочко,сливкикосметические)</li>
	<li style="text-align: justify;">Кремы косметические эмульсионны густые (маски питательные,очищающие,увлажняющие)</li>
	<li style="text-align: justify;">Изделия косметические моющие (шампуни, бальзамы, кремы для бритья, мыло жидкое)</li>
	<li style="text-align: justify;">Изделия декоративной косметики на жировой основе</li>
	<li style="text-align: justify;">Изделия декоративной косметики порошкообразные и компактные (пудра, сухие румяна, тени для век)</li>
	<li style="text-align: justify;">Мыло туалетное твердое</li>
	<li style="text-align: justify;">Средства гигиены полости рта</li>
	</ul>

	<p style="text-align: justify;"><u>Продукция текстильной и швейной промышленности</u><br />
	<br />
	<u>Бумага</u><br />
	<br />
	<u>Посуда и изделия хозяйственно-бытового назначения из пластмасс</u><br />
	<br />
	<u>Игрушки</u><br />
	<br />
	<u>Продукция общественного питания:</u></p>

	<ul>
	<li style="text-align: justify;">Полуфабрикаты мясные</li>
	<li style="text-align: justify;">Мясные кулинарные изделия</li>
	<li style="text-align: justify;">Полуфабрикаты из мяса птицы</li>
	<li style="text-align: justify;">Кулинарные изделия из птицы</li>
	<li style="text-align: justify;">Полуфабрикаты рыбные</li>
	<li style="text-align: justify;">Кулинарные изделия из рыбы</li>
	<li style="text-align: justify;">Овощные полуфабрикаты</li>
	<li style="text-align: justify;">Овощные кулинарные изделия</li>
	<li style="text-align: justify;">Творожные полуфабрикаты и кулинарные изделия</li>
	<li style="text-align: justify;">Крупяные полуфабрикаты и блюда</li>
	<li style="text-align: justify;">Холодные блюда</li>
	<li style="text-align: justify;">Мучные полуфабрикаты</li>
	<li style="text-align: justify;">Мучные кондитерские и булочные изделия (с кремом и без), изготовленные на предприятиях общественного питания</li>
	</ul>

	</div>
</div>

@endsection
