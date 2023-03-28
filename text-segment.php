<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="javachart/code/highcharts.js"></script>
	<script src="https://code.highcharts.com/highcharts.js"></script>
	<script src="https://code.highcharts.com/modules/exporting.js"></script>
	<script src="https://code.highcharts.com/modules/export-data.js"></script>
	<script src="https://code.highcharts.com/modules/accessibility.js"></script>
    <title>Frekvence segmentů textu, délka vět</title>
</head>
<body>
<style>
.highcharts-figure,
.highcharts-data-table table {
    min-width: 310px;
    max-width: 1020px;
    margin: left;

}

#container {
    height: 500px;
}

.highcharts-data-table table {
    font-family: Verdana, sans-serif;
    border-collapse: collapse;
    border: 1px solid #ebebeb;
    margin: 10px auto;
    text-align: center;
    width: 100%;
    max-width: 500px;
}

.highcharts-data-table caption {
    padding: 1em 0;
    font-size: 1.2em;
    color: #555;
}

.highcharts-data-table th {
    font-weight: 600;
    padding: 0.5em;
}

.highcharts-data-table td,
.highcharts-data-table th,
.highcharts-data-table caption {
    padding: 0.5em;
}

.highcharts-data-table thead tr,
.highcharts-data-table tr:nth-child(even) {
    background: #f8f8f8;
}

.highcharts-data-table tr:hover {
    background: #f1f7ff;
}
</style>

<h2 style="color: #990099; font-family:Verdana, Geneva, Tahoma, sans-serif;">▐ Frekvence segmentů textu, délka vět</h2>
<p style="margin-bottom: 50px; width: 1040px; text-align: justify; font-family:Verdana, Geneva, Tahoma, sans-serif; font-size: 15px; margin-left: 10px;">V této části se nachází informace týkající textových segmentů, které byly analyzovány. Jejich výpis je na ose y prvního grafu, který ukazuje průměrné délky vět jak jednotlivých segmentů v závislosti na konkrétním textu, tak v celém autorském koprusu. Pod grafem se nachází přehled distribuce vět dle jejich délky na počet slov v jednotlivých prózách; k zobrazení slouží boxploty. Na konci stránky jsou vysouvací menu pro výběr konkrétních próz a pro zobrazení frekvenčního vytížení jednotlivých textových segmentů a pro zobrazení rytmu narativních segmentů.</p> 


<!--GRAFY PRŮMĚRNÝCH DÉLEK VĚT-->
<h3 style="margin-left: 60px; color: blue; font-family:Verdana, Geneva, Tahoma, sans-serif; font-size: 16px;">Distribuce délek vět v jednotlivých segmentech</h3>

<div id="container1" style="width: 1000px; height: 500px; margin-left: 45px"></div>

<script>
$(function () {
    Highcharts.chart('container1', {
        chart: { type: 'scatter' },
        title: { text: '' },

        xAxis: { title: { text: 'průměrná délka věty na počet slov' }, min: 0, max: 25,
					gridLineWidth: 0,
					plotLines: [					
					{ color: "#A9A9A9", value: 5, width: 0.7, },
					{ color: "#A9A9A9", value: 10, width: 0.7, },
					{ color: "#A9A9A9", value: 15, width: 0.7, },
					{ color: "#A9A9A9", value: 20, width: 0.7, },					
					],
			   },		
		
        yAxis: { title: { text: 'segmenty textu' }, min: 0, max: 12, categories: 
        ['PRŮMĚRNÁ DÉLKA VĚTY V CELÉM TEXTU',         // 0
        'přímá řeč',                                  // 1
        'přímá řeč jako vnitřní monolog',             // 2
        'vypravěč personální',                        // 3
        'vypravěč-postava',                           // 4
        'vševědoucí vypravěč (nadosobní)',            // 5
        'rétorický vypravěč',                         // 6
        'vložené vyp. 1. stupně',                     // 7
        'přímá řeč ve vlož. vyp. 1. st.',             // 8
        'vložené vyp. 2. stupně',                     // 9
        'přímá řeč ve vlož. vyp. 2. st.',             // 10
        'vložený text',                               // 11
        'přímá řeč ve vloženém textu'                 // 12
        ], 
					gridLineWidth: 0,
					plotLines: [
						{ color: "#000000", value: 0.5, width: 1 }, 
						{ color: "#000000", value: 1.5, width: 1 }, 
						{ color: "#000000", value: 2.5, width: 1 },
						{ color: "#000000", value: 3.5, width: 1 },
						{ color: "#000000", value: 4.5, width: 1 },
						{ color: "#000000", value: 5.5, width: 1 },
						{ color: "#000000", value: 6.5, width: 1 },
						{ color: "#000000", value: 7.5, width: 1 },
						{ color: "#000000", value: 8.5, width: 1 },
						{ color: "#000000", value: 9.5, width: 1 },
						{ color: "#000000", value: 10.5, width: 1 },
						{ color: "#000000", value: 11.5, width: 1 },
						{ color: "#000000", value: 12.5, width: 1 }, 
						],				
				},
        legend: { enabled: true },
        credits: { enabled: false },
	      series: [

					{
					name: 'Arbes: Ďábel na skřipci', showInLegend: false,
					marker: { 'symbol': 'circle', fillColor: "rgba(255,0,0,0)", lineColor: "#0000FF", lineWidth: 2 }, 
					data: [[12.44, 0], [10.76, 1], [7.3, 2], [13.61, 4], [10.69, 7], [6.0, 8], [18.24, 11]] //vkládá se podle typu segmentu; číslo za čárkou značí typ segmentu: 0=průměrná délka věty v celém textu...
					},

					{
					name: 'Arbes: Elegie o černých očích',showInLegend: false,
					marker: { 'symbol': 'circle', fillColor: "rgba(255,0,0,0)", lineColor: "#0000FF", lineWidth: 2  }, 
					data: [[15.18, 0], [9.45, 1], [18.76, 4], [20.14, 11]] 
					},
					{
					name: 'Arbes: Svatý Xaverius',showInLegend: false,
					marker: { 'symbol': 'circle', fillColor: "rgba(255,0,0,0)", lineColor: "#0000FF", lineWidth: 2  }, 
					data: [[18.68, 0], [14.22, 1], [19.14, 4], [24.28, 7], [7.78, 8], [15.85, 9], [15.85, 10], [15.67, 11]]
					},

					{
					name: 'Arbes: Sivooký démon',showInLegend: false,
					marker: { 'symbol': 'circle', fillColor: "rgba(255,0,0,0)", lineColor: "#0000FF", lineWidth: 2  }, 
					data: [[15.06, 0], [9.43, 1], [4.2, 2], [23.93, 3], [16.99, 4], [16.89, 7], [9.4, 8], [20.79, 11]] 
					},

					{
					name: 'Arbes: Zázračná madona',showInLegend: false,
					marker: { 'symbol': 'circle', fillColor: "rgba(255,0,0,0)", lineColor: "#0000FF", lineWidth: 2  }, 
					data: [[16.34, 0], [10.59, 1], [15.82, 3], [17.76, 4], [18.76, 7], [7.88, 8], [15.25, 11]] 
					},

				
				]
 		}); 
});
</script>

<!--MULTIPLE BOXPLOTS-->
<div style="margin-left: 60px; font-family:Verdana, Geneva, Tahoma, sans-serif; font-size: 16px;color: grey;">
	<p>Pod tímto odkazem <a href="boxploty.html" target="_blank"><img src="ikony/box-plot.png" style="width: 20px; height: 20px;"></a> jsou k dipozici boxploty délek vět pro jednotlivá díla.
</div>	

<br>

<h3 style="margin-left: 60px; color: blue; font-family:Verdana, Geneva, Tahoma, sans-serif; font-size: 16x;">Kvantitativní distribuce textových segmentů</h3>
<br>
<!--CELKOVÝ GRAF DISTRIBUCE SEGMENTŮ TEXTU-->
<figure class="highcharts-figure">
    <div id="container"></div>
</figure>

<script>
	Highcharts.chart('container', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Celková distribuce textových segmentů'
    },
    xAxis: {
        categories: [
            'Ďábel na skřipci',
            'Elegie o černých očích',
            'Svatý Xaverius',
            'Sivooký démon',
            'Zázračná madona',
        ],
        crosshair: true
    },
    yAxis: {
        title: {
            useHTML: true,
            text: 'i.p.m.'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:.1f}</b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: [{
        name: 'přímá řeč',
        data: [291392.65, 252380.95, 196315.31, 185698.91, 108462.27] //pořadí určuje pořadí děl

    }, {
        name: 'přímá řeč jako vnitřní monolog',
        data: [7059.96, 0, 0, 627.77, 0]

    }, {
        name: 'personální vypravěč',
        data: [0, 0, 0, 116584.96, 199544.74]

    }, {
        name: 'vypravěč postava',
        data: [618665.38, 744444.44, 467359.88, 532165.49, 479159.62]

    }, {
        name: 'nadosobní vypravěč',
        data: [0, 0, 0, 0, 0]

    }, {
        name: 'rétorický vypravěč',
        data: [0, 0, 0, 0, 0]

    }, {
        name: 'vložené vyprávění 1. stupně',
        data: [43423.6, 0, 293351.17, 151949.06, 139622.87]

    }, {
        name: 'přímá řeč ve vloženém vyprávění 1. stupně',
        data: [1035.67, 0, 3149.67, 14887.0, 1937.92]

    }, {
        name: 'vložené vyprávění 2. stupně',
        data: [0, 0, 27354.71, 0, 0]

    }, {
        name: 'přímá řeč ve vloženém vyprávění 2. stupně',
        data: [0, 0, 14583.42, 0, 0]

    }, {
        name: 'vložený text',
        data: [2876.87, 74603.17, 6083.62, 8699.03, 18764.03]

    }, {
        name: 'přímá řeč ve vloženém textu',
        data: [0, 0, 0, 0, 0]

    }]
});
</script>
<br>

<!--TEXTOVÉ SEGMENTY PRO JEDNOTLIVÉ TEXTY-->
<p style="margin-left: 60px; font-family:Verdana, Geneva, Tahoma, sans-serif; font-size: 15px;">Z nabídky níže lze vybírat jednotlivá díla a zobrazit grafy rozložení textových segmentů pro každé dílo samostatně.</p>

<form name="form" action="text-segment.php" method="post">
    <select name="select" style="margin-left: 60px; margin-top: 30px;">
        <option>-- vybrat --</option>
        <option value="dabel">Ďábel na skřipci</option>
        <option value="elegie">Elegie o černých očích</option>
        <option value="xaverius">Svatý Xaverius</option>
        <option value="demon">Sivooký démon</option>
        <option value="madona">Zázračná madona</option>
    </select>
    <input type="submit" name="submit">
</form>

<?php
if(isset($_POST["submit"])){
	if(!empty($_POST["select"])){
		$select = $_POST["select"];
		switch ($select){
			case "dabel":
				echo "<a href='textsegments-graphs/Dabel na skripci bar.svg' target='_blank'><img src='textsegments-graphs/Dabel na skripci bar.png' style='width: 1200px; height: 500px; margin-left: -30px;'></a><br>";
				echo "
				<table style='float: left; margin-left: 120px; margin-top: 20px; font-family: Courier;'>
				<tr><td style='border: 1px solid black; padding: 2px; font-weight: bold; background-color: #B2BABB;'>Textový segment</td><td style='border: 1px solid black; padding: 2px; font-weight: bold; background-color: #B2BABB;'>Rf</td></tr>
				<tr><td style='border: 1px solid black; padding: 2px;'>přímá řeč</td><td style='border: 1px solid black; padding: 2px;'>291392.65</td></tr>
				<tr><td style='border: 1px solid black; padding: 2px;'>přímá řeč jako vnitřní monolog</td><td style='border: 1px solid black; padding: 2px;'>7059.96</td></tr>
				<tr><td style='border: 1px solid black; padding: 2px;'>personální vypravěč</td><td style='border: 1px solid black; padding: 2px;'>0</td></tr>
				<tr><td style='border: 1px solid black; padding: 2px;'>vypravěč postava</td><td style='border: 1px solid black; padding: 2px;'>618665.38</td></tr>
				<tr><td style='border: 1px solid black; padding: 2px;'>vypravěč nadosobní</td><td style='border: 1px solid black; padding: 2px;'>0</td></tr>
				<tr><td style='border: 1px solid black; padding: 2px;'>rétorický vypravěč</td><td style='border: 1px solid black; padding: 2px;'>0</td></tr>
				<tr><td style='border: 1px solid black; padding: 2px;'>vložené vyprávění 1. stupně</td><td style='border: 1px solid black; padding: 2px;'>43423.60</td></tr>
				<tr><td style='border: 1px solid black; padding: 2px;'>přímá řeč ve vloženém vyprávění 1. stupně</td><td style='border: 1px solid black; padding: 2px;'>5222.44</td></tr>
				<tr><td style='border: 1px solid black; padding: 2px;'>vložené vyprávění 2. stupně</td><td style='border: 1px solid black; padding: 2px;'>0</td></tr>
				<tr><td style='border: 1px solid black; padding: 2px;'>přímá řeč ve vloženém vyprávění 2. stupně</td><td style='border: 1px solid black; padding: 2px;'>0</td></tr>
				<tr><td style='border: 1px solid black; padding: 2px;'>vložený text</td><td style='border: 1px solid black; padding: 2px;'>44100.58</td></tr>
				<tr><td style='border: 1px solid black; padding: 2px;'>přímá řeč ve vloženém textu</td><td style='border: 1px solid black; padding: 2px;'>0</td></tr>
				<tr><td style='border: 0px solid black; padding: 2px; color: red; font-weight: bold;'>podrobná tabulka <a href='textsegments-txt/dabelnaskripci.txt' target='_blank'><img src='ikony/txt.png' style='width: 20px; height: 20px;'></a></td></tr>
				</table>";
				echo "<br><a href='textsegments-graphs/Dabel na skripci pie.svg' target='_blank'><img src='textsegments-graphs/Dabel na skripci pie.png' style='width: 600px; height: 300px;'></a><br><br>";
				break;
			case "elegie":
				echo "<a href='textsegments-graphs/Elegie o cernych ocich bar.svg' target='_blank'><img src='textsegments-graphs/Elegie o cernych ocich bar.png' style='width: 1200px; height: 500px; margin-left: -30px;'></a>";
				echo "
				<table style='float: left; margin-left: 120px; margin-top: 20px; font-family: Courier;'>
				<tr><td style='border: 1px solid black; padding: 2px; font-weight: bold; background-color: #B2BABB;'>Textový segment</td><td style='border: 1px solid black; padding: 2px; font-weight: bold; background-color: #B2BABB;'>Rf</td></tr>
				<tr><td style='border: 1px solid black; padding: 2px;'>přímá řeč</td><td style='border: 1px solid black; padding: 2px;'>252380.95</td></tr>
				<tr><td style='border: 1px solid black; padding: 2px;'>přímá řeč jako vnitřní monolog</td><td style='border: 1px solid black; padding: 2px;'>0</td></tr>
				<tr><td style='border: 1px solid black; padding: 2px;'>personální vypravěč</td><td style='border: 1px solid black; padding: 2px;'>0</td></tr>
				<tr><td style='border: 1px solid black; padding: 2px;'>vypravěč postava</td><td style='border: 1px solid black; padding: 2px;'>744444.44</td></tr>
				<tr><td style='border: 1px solid black; padding: 2px;'>vypravěč nadosobní</td><td style='border: 1px solid black; padding: 2px;'>0</td></tr>
				<tr><td style='border: 1px solid black; padding: 2px;'>rétorický vypravěč</td><td style='border: 1px solid black; padding: 2px;'>0</td></tr>
				<tr><td style='border: 1px solid black; padding: 2px;'>vložené vyprávění 1. stupně</td><td style='border: 1px solid black; padding: 2px;'>0</td></tr>
				<tr><td style='border: 1px solid black; padding: 2px;'>přímá řeč ve vloženém vyprávění 1. stupně</td><td style='border: 1px solid black; padding: 2px;'>0</td></tr>
				<tr><td style='border: 1px solid black; padding: 2px;'>vložené vyprávění 2. stupně</td><td style='border: 1px solid black; padding: 2px;'>0</td></tr>
				<tr><td style='border: 1px solid black; padding: 2px;'>přímá řeč ve vloženém vyprávění 2. stupně</td><td style='border: 1px solid black; padding: 2px;'>0</td></tr>
				<tr><td style='border: 1px solid black; padding: 2px;'>vložený text</td><td style='border: 1px solid black; padding: 2px;'>74603.17</td></tr>
				<tr><td style='border: 1px solid black; padding: 2px;'>přímá řeč ve vloženém textu</td><td style='border: 1px solid black; padding: 2px;'>0</td></tr>
				<tr><td style='border: 0px solid black; padding: 2px; color: red; font-weight: bold;'>podrobná tabulka <a href='textsegments-txt/elegieocernychocich.txt' target='_blank'><img src='ikony/txt.png' style='width: 20px; height: 20px;'></a></td></tr>
				</table>";
				echo "<br><a href='textsegments-graphs/Elegie o cernych ocich pie.svg' target='_blank'><img src='textsegments-graphs/Elegie o cernych ocich pie.png' style='width: 600px; height: 300px'></a><br><br>";
				break;
			case "xaverius":
				echo "<a href='textsegments-graphs/Svaty Xaverius bar.svg' target='_blank'><img src='textsegments-graphs/Svaty Xaverius bar.png' style='width: 1200px; height: 500px; margin-left: -30px;'></a>";
				echo "
				<table style='float: left; margin-left: 120px; margin-top: 20px; font-family: Courier;'>
				<tr><td style='border: 1px solid black; padding: 2px; font-weight: bold; background-color: #B2BABB;'>Textový segment</td><td style='border: 1px solid black; padding: 2px; font-weight: bold; background-color: #B2BABB;'>Rf</td></tr>
				<tr><td style='border: 1px solid black; padding: 2px;'>přímá řeč</td><td style='border: 1px solid black; padding: 2px;'>196315.31</td></tr>
				<tr><td style='border: 1px solid black; padding: 2px;'>přímá řeč jako vnitřní monolog</td><td style='border: 1px solid black; padding: 2px;'>0</td></tr>
				<tr><td style='border: 1px solid black; padding: 2px;'>personální vypravěč</td><td style='border: 1px solid black; padding: 2px;'>0</td></tr>
				<tr><td style='border: 1px solid black; padding: 2px;'>vypravěč postava</td><td style='border: 1px solid black; padding: 2px;'>467359.88</td></tr>
				<tr><td style='border: 1px solid black; padding: 2px;'>vypravěč nadosobní</td><td style='border: 1px solid black; padding: 2px;'>0</td></tr>
				<tr><td style='border: 1px solid black; padding: 2px;'>rétorický vypravěč</td><td style='border: 1px solid black; padding: 2px;'>0</td></tr>
				<tr><td style='border: 1px solid black; padding: 2px;'>vložené vyprávění 1. stupně</td><td style='border: 1px solid black; padding: 2px;'>293351.17</td></tr>
				<tr><td style='border: 1px solid black; padding: 2px;'>přímá řeč ve vloženém vyprávění 1. stupně</td><td style='border: 1px solid black; padding: 2px;'>3020.24</td></tr>
				<tr><td style='border: 1px solid black; padding: 2px;'>vložené vyprávění 2. stupně</td><td style='border: 1px solid black; padding: 2px;'>27354.71</td></tr>
				<tr><td style='border: 1px solid black; padding: 2px;'>přímá řeč ve vloženém vyprávění 2. stupně</td><td style='border: 1px solid black; padding: 2px;'>14583.42</td></tr>
				<tr><td style='border: 1px solid black; padding: 2px;'>vložený text</td><td style='border: 1px solid black; padding: 2px;'>6083.62</td></tr>
				<tr><td style='border: 1px solid black; padding: 2px;'>přímá řeč ve vloženém textu</td><td style='border: 1px solid black; padding: 2px;'>0</td></tr>
				<tr><td style='border: 0px solid black; padding: 2px; color: red; font-weight: bold;'>podrobná tabulka <a href='textsegments-txt/svatyxaverius.txt' target='_blank'><img src='ikony/txt.png' style='width: 20px; height: 20px;'></a></td></tr>
				</table>";
				echo "<br><a href='textsegments-graphs/Svaty Xaverius pie.svg' target='_blank'><img src='textsegments-graphs/Svaty Xaverius pie.png' style='width: 600px; height: 300px'></a><br><br>";
				break;
			case "demon":
				echo "<a href='textsegments-graphs/Sivooky demon bar.svg' target='_blank'><img src='textsegments-graphs/Sivooky demon bar.png' style='width: 1200px; height: 500px; margin-left: -30px;'></a>";
				echo "
				<table style='float: left; margin-left: 120px; margin-top: 20px; font-family: Courier;'>
				<tr><td style='border: 1px solid black; padding: 2px; font-weight: bold; background-color: #B2BABB;'>Textový segment</td><td style='border: 1px solid black; padding: 2px; font-weight: bold; background-color: #B2BABB;'>Rf</td></tr>
				<tr><td style='border: 1px solid black; padding: 2px;'>přímá řeč</td><td style='border: 1px solid black; padding: 2px;'>185698.91</td></tr>
				<tr><td style='border: 1px solid black; padding: 2px;'>přímá řeč jako vnitřní monolog</td><td style='border: 1px solid black; padding: 2px;'>627.77</td></tr>
				<tr><td style='border: 1px solid black; padding: 2px;'>personální vypravěč</td><td style='border: 1px solid black; padding: 2px;'>116584.96</td></tr>
				<tr><td style='border: 1px solid black; padding: 2px;'>vypravěč postava</td><td style='border: 1px solid black; padding: 2px;'>532165.49</td></tr>
				<tr><td style='border: 1px solid black; padding: 2px;'>vypravěč nadosobní</td><td style='border: 1px solid black; padding: 2px;'>0</td></tr>
				<tr><td style='border: 1px solid black; padding: 2px;'>rétorický vypravěč</td><td style='border: 1px solid black; padding: 2px;'>0</td></tr>
				<tr><td style='border: 1px solid black; padding: 2px;'>vložené vyprávění 1. stupně</td><td style='border: 1px solid black; padding: 2px;'>151949.06</td></tr>
				<tr><td style='border: 1px solid black; padding: 2px;'>přímá řeč ve vloženém vyprávění 1. stupně</td><td style='border: 1px solid black; padding: 2px;'>14887</td></tr>
				<tr><td style='border: 1px solid black; padding: 2px;'>vložené vyprávění 2. stupně</td><td style='border: 1px solid black; padding: 2px;'>0</td></tr>
				<tr><td style='border: 1px solid black; padding: 2px;'>přímá řeč ve vloženém vyprávění 2. stupně</td><td style='border: 1px solid black; padding: 2px;'>0</td></tr>
				<tr><td style='border: 1px solid black; padding: 2px;'>vložený text</td><td style='border: 1px solid black; padding: 2px;'>8699.03</td></tr>
				<tr><td style='border: 1px solid black; padding: 2px;'>přímá řeč ve vloženém textu</td><td style='border: 1px solid black; padding: 2px;'>0</td></tr>
				<tr><td style='border: 0px solid black; padding: 2px; color: red; font-weight: bold;'>podrobná tabulka <a href='textsegments-txt/sivookydemon.txt' target='_blank'><img src='ikony/txt.png' style='width: 20px; height: 20px;'></a></td></tr>
				</table>";
				echo "<br><a href='textsegments-graphs/Sivooky demon pie.svg' target='_blank'><img src='textsegments-graphs/Sivooky demon pie.png' style='width: 600px; height: 300px'></a><br><br>";
				break;
			case "madona":
				echo "<a href='textsegments-graphs/Zazracna madona bar.svg' target='_blank'><img src='textsegments-graphs/Zazracna madona bar.png' style='width: 1200px; height: 500px; margin-left: -30px;'></a>";
				echo "
				<table style='float: left; margin-left: 120px; margin-top: 20px; font-family: Courier;'>
				<tr><td style='border: 1px solid black; padding: 2px; font-weight: bold; background-color: #B2BABB;'>Textový segment</td><td style='border: 1px solid black; padding: 2px; font-weight: bold; background-color: #B2BABB;'>Rf</td></tr>
				<tr><td style='border: 1px solid black; padding: 2px;'>přímá řeč</td><td style='border: 1px solid black; padding: 2px;'>108462.27</td></tr>
				<tr><td style='border: 1px solid black; padding: 2px;'>přímá řeč jako vnitřní monolog</td><td style='border: 1px solid black; padding: 2px;'>0</td></tr>
				<tr><td style='border: 1px solid black; padding: 2px;'>personální vypravěč</td><td style='border: 1px solid black; padding: 2px;'>199544.74</td></tr>
				<tr><td style='border: 1px solid black; padding: 2px;'>vypravěč postava</td><td style='border: 1px solid black; padding: 2px;'>479159.62</td></tr>
				<tr><td style='border: 1px solid black; padding: 2px;'>vypravěč nadosobní</td><td style='border: 1px solid black; padding: 2px;'>0</td></tr>
				<tr><td style='border: 1px solid black; padding: 2px;'>rétorický vypravěč</td><td style='border: 1px solid black; padding: 2px;'>0</td></tr>
				<tr><td style='border: 1px solid black; padding: 2px;'>vložené vyprávění 1. stupně</td><td style='border: 1px solid black; padding: 2px;'>139622.87</td></tr>
				<tr><td style='border: 1px solid black; padding: 2px;'>přímá řeč ve vloženém vyprávění 1. stupně</td><td style='border: 1px solid black; padding: 2px;'>1937.92</td></tr>
				<tr><td style='border: 1px solid black; padding: 2px;'>vložené vyprávění 2. stupně</td><td style='border: 1px solid black; padding: 2px;'>0</td></tr>
				<tr><td style='border: 1px solid black; padding: 2px;'>přímá řeč ve vloženém vyprávění 2. stupně</td><td style='border: 1px solid black; padding: 2px;'>0</td></tr>
				<tr><td style='border: 1px solid black; padding: 2px;'>vložený text</td><td style='border: 1px solid black; padding: 2px;'>18764.03</td></tr>
				<tr><td style='border: 1px solid black; padding: 2px;'>přímá řeč ve vloženém textu</td><td style='border: 1px solid black; padding: 2px;'>0</td></tr>
				<tr><td style='border: 0px solid black; padding: 2px; color: red; font-weight: bold;'>podrobná tabulka <a href='textsegments-txt/zazracnamadona.txt' target='_blank'><img src='ikony/txt.png' style='width: 20px; height: 20px;'></a></td></tr>
				</table>";
				echo "<br><a href='textsegments-graphs/Zazracna madona pie.svg' target='_blank'><img src='textsegments-graphs/Zazracna madona pie.png' style='width: 600px; height: 300px'></a><br><br>";
				break;
		}
	}
}
?>
<br>
<br>
<br>
<!--NARATIVNÍ RYTMUS-->
<br>
<h3 style="margin-left: 60px; color: blue; font-family:Verdana, Geneva, Tahoma, sans-serif; font-size: 16px;">Rytmus narativních segmentů</h3>
<form name="form-rythm" action="text-segment.php" method="post">
    <select name="select" style="margin-left: 60px; margin-top: 30px;">
        <option>-- vybrat --</option>
        <option value="dabel-rythm">Ďábel na skřipci</option>
        <option value="elegie-rythm">Elegie o černých očích</option>
        <option value="xaverius-rythm">Svatý Xaverius</option>
        <option value="demon-rythm">Sivooký démon</option>
        <option value="madona-rythm">Zázračná madona</option>
    </select>
    <input type="submit" name="submit-rythm">
</form>
    
<?php
if(isset($_POST["submit-rythm"])){
	if(!empty($_POST["select"])){
		$select_rythm = $_POST["select"];
		switch ($select_rythm){
			case "dabel-rythm":
				echo "<img src='narrative-rythm/dabel_osobni_vypravec.svg' style='width: 500px; height: 400px; margin-left: 15px; float: left;'><img src='narrative-rythm/dabel_vlozeny_1stupne.svg' style='width: 500px; height: 400px; float: left;'>";
				break;
			case "elegie-rythm":
				echo "<img src='narrative-rythm/Elegie_vypravec_postava.svg' style='width: 500px; height: 400px; margin-left: 15px;'>";
				break;
			case "xaverius-rythm":
				echo "<img src='narrative-rythm/Xaverius_vypravec_postava.svg' style='width: 500px; height: 400px; margin-left: 15px; float: left;'><img src='narrative-rythm/Xaverius_vlozeny_1stupne.svg' style='width: 500px; height: 400px; float: left;'><div style='clear:both;'></div>";
				echo "<img src='narrative-rythm/Xaverius_vlozeny_2stupne.svg' style='width: 500px; height: 400px; margin-left: 15px;'>";
				break;
			case "demon-rythm":
				echo "<img src='narrative-rythm/Demon_osobni_vypravec.svg' style='width: 500px; height: 400px; margin-left: 15px; float: left;'><img src='narrative-rythm/Demon_personalni_vypravec.svg' style='width: 500px; height: 400px; float: left;'><div style='clear:both;'></div>";
				echo "<img src='narrative-rythm/Demon_vlozeny_1stupne.svg' style='width: 500px; height: 400px; margin-left: 15px;'>";
				break;
			case "madona-rythm":
				echo "<img src='narrative-rythm/Madona_vypravec_postava.svg' style='width: 500px; height: 400px; margin-left: 15px; float: left;'><img src='narrative-rythm/Madona_personalni_vypravec.svg' style='width: 500px; height: 400px; float: left;'><div style='clear:both;'></div>";
				echo "<img src='narrative-rythm/Madona_vlozeny_1stupne.svg' style='width: 500px; height: 400px; margin-left: 15px;'>";
				break;

			
		}
	}
}

?>
<br>
<br>
</body>
</html>