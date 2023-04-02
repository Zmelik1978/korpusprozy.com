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
					name: 'Týden v tichém domě', showInLegend: false,
					marker: { 'symbol': 'circle', fillColor: "rgba(255,0,0,0)", lineColor: "#0000FF", lineWidth: 2 }, 
					data: [[12.75, 0], [9.56, 1], [11.23, 2], [13.49, 6], [17.44, 11], [12.3, 12]] //vkládá se podle typu segmentu; číslo za čárkou značí typ segmentu: 0=průměrná délka věty v celém textu...
					},

					{
					name: 'Pan Ryšánek a pan Schlegl',showInLegend: false,
					marker: { 'symbol': 'circle', fillColor: "rgba(255,0,0,0)", lineColor: "#0000FF", lineWidth: 2  }, 
					data: [[14.15, 0], [10.0, 1], [14.5, 6]] 
					},
					{
					name: 'Přivedla žebráka na mizinu',showInLegend: false,
					marker: { 'symbol': 'circle', fillColor: "rgba(255,0,0,0)", lineColor: "#0000FF", lineWidth: 2  }, 
					data: [[11.79, 0], [8.58, 1], [12.6, 6]]
					},

					{
					name: 'O měkkém srdci paní Rusky',showInLegend: false,
					marker: { 'symbol': 'circle', fillColor: "rgba(255,0,0,0)", lineColor: "#0000FF", lineWidth: 2  }, 
					data: [[13.09, 0], [10.69,1], [14.29, 6]] 
					},

					{
					name: 'Večerní šplechty',showInLegend: false,
					marker: { 'symbol': 'circle', fillColor: "rgba(255,0,0,0)", lineColor: "#0000FF", lineWidth: 2  }, 
					data: [[10.06, 0], [9.5, 1], [9.76, 6], [10.48, 7], [5.67, 8]] 
					},

					{
					name: 'Doktor Kazisvět',showInLegend: false,
					marker: { 'symbol': 'circle', fillColor: "rgba(255,0,0,0)", lineColor: "#0000FF", lineWidth: 2  }, 
					data: [[11.9, 0], [5.13, 1], [14.21, 6]] 
					},

					{
					name: 'Hastrman',showInLegend: false,
					marker: { 'symbol': 'circle', fillColor: "rgba(255,0,0,0)", lineColor: "#0000FF", lineWidth: 2  }, 
					data: [[11.3, 0], [7.71, 1], [12.19, 6]] 
					},

					{
					name: 'Jak si nakouřil pan Vorel pěnovku',showInLegend: false,
					marker: { 'symbol': 'circle', fillColor: "rgba(255,0,0,0)", lineColor: "#0000FF", lineWidth: 2  }, 
					data: [[11.39, 0], [6.4, 1], [12.06, 4]] 
					},

					{
					name: 'U Tří lilií',showInLegend: false,
					marker: { 'symbol': 'circle', fillColor: "rgba(255,0,0,0)", lineColor: "#0000FF", lineWidth: 2  }, 
					data: [[11.39, 0], [6.4, 1], [12.06, 4]] 
					},

					{
					name: 'Svatováclavská mše',showInLegend: false,
					marker: { 'symbol': 'circle', fillColor: "rgba(255,0,0,0)", lineColor: "#0000FF", lineWidth: 2  }, 
					data: [[15.99, 0], [2.71, 1], [15.89, 4]] 
					},

					{
					name: 'Jak to přišlo...',showInLegend: false,
					marker: { 'symbol': 'circle', fillColor: "rgba(255,0,0,0)", lineColor: "#0000FF", lineWidth: 2  }, 
					data: [[11.4, 0], [6.23, 1], [12.65, 4]] 
					},

					{
					name: 'Psáno o letošních dušičkách',showInLegend: false,
					marker: { 'symbol': 'circle', fillColor: "rgba(255,0,0,0)", lineColor: "#0000FF", lineWidth: 2  }, 
					data: [[12.29, 0], [9.93, 1], [13.29, 6], [13.32, 11]] 
					},

					{
					name: 'Figurky',showInLegend: false,
					marker: { 'symbol': 'circle', fillColor: "rgba(255,0,0,0)", lineColor: "#0000FF", lineWidth: 2  }, 
					data: [[8.69, 0], [7.6, 1], [4.0, 2], [8.79, 4], [9.66, 11]] 
					}

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
            'Týden v tichém domě',
            'Pan Ryšánek a pan Schlegl',
            'Přivedla žebráka na mizinu',
            'O měkkém srdci paní Rusky',
            'Večerní šplechty',
			'Doktor Kazisvět',
			'Hastrman',
			'Jak si nakouřil pan Vorel pěnovku',
			'U Tří lilií',
			'Svatováclavská mše',
			'Jak to přišlo...',
			'Psáno o letošních dušičkách',
			'Figurky'
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
        data: [283462.03, 61310.1, 164658.63, 272286.23, 431575.74, 116902.83, 167237.44, 78807.95, 49306.63, 5077.5, 123509.2, 308653.26, 274124.72] //pořadí určuje pořadí děl

    }, {
        name: 'přímá řeč jako vnitřní monolog',
        data: [31991.17, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 387.94]

    }, {
        name: 'personální vypravěč',
        data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0]

    }, {
        name: 'vypravěč postava',
        data: [0, 0, 0, 0, 0, 0, 0, 0, 947611.71, 989577.77, 859510.81, 0, 717486.18]

    }, {
        name: 'nadosobní vypravěč',
        data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0]

    }, {
        name: 'rétorický vypravěč',
        data: [476098.55, 930945.47, 826416.78, 719223.77, 321243.52, 870445.34, 820776.26, 911920.53, 0, 0, 0, 647775.75, 0]

    }, {
        name: 'vložené vyprávění 1. stupně',
        data: [0, 0, 0, 0, 207558.67, 0, 0, 0, 0, 0, 0, 0, 0]

    }, {
        name: 'přímá řeč ve vloženém vyprávění 1. stupně',
        data: [0, 0, 0, 0, 10362.69, 0, 0, 0, 0, 0, 0, 0, 0]

    }, {
        name: 'vložené vyprávění 2. stupně',
        data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0]

    }, {
        name: 'přímá řeč ve vloženém vyprávění 2. stupně',
        data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0]

    }, {
        name: 'vložený text',
        data: [188407.8, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 150213.28, 13577.73]

    }, {
        name: 'přímá řeč ve vloženém textu',
        data: [18661.52, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0]

    }]
});
</script>
<br>

<!--TEXTOVÉ SEGMENTY PRO JEDNOTLIVÉ TEXTY-->
<p style="margin-left: 60px; font-family:Verdana, Geneva, Tahoma, sans-serif; font-size: 15px;">Z nabídky níže lze vybírat jednotlivá díla a zobrazit grafy rozložení textových segmentů pro každé dílo samostatně.</p>

<form name="form" action="text-segment.php" method="post">
    <select name="select" style="margin-left: 60px; margin-top: 30px;">
        <option>-- vybrat --</option>
        <option value="tydenvtichemdome">Týden v tichém domě</option>
        <option value="panrysanekapanschlegl">Pan Ryšánek a pan Schlegl</option>
        <option value="privedlazebrakanamizinu">Přivedla žebráka na mizinu</option>
        <option value="omekkemsrdcipanirusky">O měkkém srdci paní Rusky</option>
        <option value="vecernisplechty">Večerní šplechty</option>
		<option value="doktorkazisvet">Doktor Kazisvět</option>
		<option value="hastrman">Hastrman</option>
		<option value="jaksinakourilpanvorelpenovku">VJak si nakouřil pan Vorel pěnovku</option>
		<option value="utrililii">U Tří lilií</option>
		<option value="svatovaclavskamse">Svatováclavská mše</option>
		<option value="jaktoprislo">Jak to přišlo...</option>
		<option value="psanooletosnichdusickach">Psáno o letošních dušičkách</option>
		<option value="figurky">Figurky</option>
    </select>
    <input type="submit" name="submit">
</form>

<?php
if(isset($_POST["submit"])){
	if(!empty($_POST["select"])){
		$select = $_POST["select"];
		switch ($select){
			case "tydenvtichemdome":
				echo "<a href='textsegments-graphs/tydenvtichemdome.png' target='_blank'><img src='textsegments-graphs/tydenvtichemdome.png' style='width: 1200px; height: 500px; margin-left: -30px;'></a><br>";
				echo "
				<table style='float: left; margin-left: 120px; margin-top: 20px; font-family: Courier;'>
				<tr><td style='border: 1px solid black; padding: 2px; font-weight: bold; background-color: #B2BABB;'>Textový segment</td><td style='border: 1px solid black; padding: 2px; font-weight: bold; background-color: #B2BABB;'>Rf</td></tr>
				<tr><td style='border: 1px solid black; padding: 2px;'>přímá řeč</td><td style='border: 1px solid black; padding: 2px;'>283462.03</td></tr>
				<tr><td style='border: 1px solid black; padding: 2px;'>přímá řeč jako vnitřní monolog</td><td style='border: 1px solid black; padding: 2px;'>31991.176</td></tr>
				<tr><td style='border: 1px solid black; padding: 2px;'>personální vypravěč</td><td style='border: 1px solid black; padding: 2px;'>0</td></tr>
				<tr><td style='border: 1px solid black; padding: 2px;'>vypravěč postava</td><td style='border: 1px solid black; padding: 2px;'>0</td></tr>
				<tr><td style='border: 1px solid black; padding: 2px;'>vypravěč nadosobní</td><td style='border: 1px solid black; padding: 2px;'>0</td></tr>
				<tr><td style='border: 1px solid black; padding: 2px;'>rétorický vypravěč</td><td style='border: 1px solid black; padding: 2px;'>476098.55</td></tr>
				<tr><td style='border: 1px solid black; padding: 2px;'>vložené vyprávění 1. stupně</td><td style='border: 1px solid black; padding: 2px;'>0</td></tr>
				<tr><td style='border: 1px solid black; padding: 2px;'>přímá řeč ve vloženém vyprávění 1. stupně</td><td style='border: 1px solid black; padding: 2px;'>0</td></tr>
				<tr><td style='border: 1px solid black; padding: 2px;'>vložené vyprávění 2. stupně</td><td style='border: 1px solid black; padding: 2px;'>0</td></tr>
				<tr><td style='border: 1px solid black; padding: 2px;'>přímá řeč ve vloženém vyprávění 2. stupně</td><td style='border: 1px solid black; padding: 2px;'>0</td></tr>
				<tr><td style='border: 1px solid black; padding: 2px;'>vložený text</td><td style='border: 1px solid black; padding: 2px;'>188407.8</td></tr>
				<tr><td style='border: 1px solid black; padding: 2px;'>přímá řeč ve vloženém textu</td><td style='border: 1px solid black; padding: 2px;'>18661.52</td></tr>
				<tr><td style='border: 0px solid black; padding: 2px; color: red; font-weight: bold;'>podrobná tabulka <a href='textsegments-txt/tydenvtichemdome.txt' target='_blank'><img src='ikony/txt.png' style='width: 20px; height: 20px;'></a></td></tr>
				</table>";
				echo "<br><a href='SlovniDruhy/tydenvtichemdome.svg' target='_blank'><img src='SlovniDruhy/tydenvtichemdome.svg' style='width: 600px; height: 300px;'></a><br><br>";
				break;
			case "panrysanekapanschlegl":
				echo "<a href='textsegments-graphs/panrysanekapanschlegl.png' target='_blank'><img src='textsegments-graphs/panrysanekapanschlegl.png' style='width: 1200px; height: 500px; margin-left: -30px;'></a>";
				echo "
				<table style='float: left; margin-left: 120px; margin-top: 20px; font-family: Courier;'>
				<tr><td style='border: 1px solid black; padding: 2px; font-weight: bold; background-color: #B2BABB;'>Textový segment</td><td style='border: 1px solid black; padding: 2px; font-weight: bold; background-color: #B2BABB;'>Rf</td></tr>
				<tr><td style='border: 1px solid black; padding: 2px;'>přímá řeč</td><td style='border: 1px solid black; padding: 2px;'>2186.42</td></tr>
				<tr><td style='border: 1px solid black; padding: 2px;'>přímá řeč jako vnitřní monolog</td><td style='border: 1px solid black; padding: 2px;'>0</td></tr>
				<tr><td style='border: 1px solid black; padding: 2px;'>personální vypravěč</td><td style='border: 1px solid black; padding: 2px;'>0</td></tr>
				<tr><td style='border: 1px solid black; padding: 2px;'>vypravěč postava</td><td style='border: 1px solid black; padding: 2px;'>0</td></tr>
				<tr><td style='border: 1px solid black; padding: 2px;'>vypravěč nadosobní</td><td style='border: 1px solid black; padding: 2px;'>0</td></tr>
				<tr><td style='border: 1px solid black; padding: 2px;'>rétorický vypravěč</td><td style='border: 1px solid black; padding: 2px;'>930945.47</td></tr>
				<tr><td style='border: 1px solid black; padding: 2px;'>vložené vyprávění 1. stupně</td><td style='border: 1px solid black; padding: 2px;'>0</td></tr>
				<tr><td style='border: 1px solid black; padding: 2px;'>přímá řeč ve vloženém vyprávění 1. stupně</td><td style='border: 1px solid black; padding: 2px;'>0</td></tr>
				<tr><td style='border: 1px solid black; padding: 2px;'>vložené vyprávění 2. stupně</td><td style='border: 1px solid black; padding: 2px;'>0</td></tr>
				<tr><td style='border: 1px solid black; padding: 2px;'>přímá řeč ve vloženém vyprávění 2. stupně</td><td style='border: 1px solid black; padding: 2px;'>0</td></tr>
				<tr><td style='border: 1px solid black; padding: 2px;'>vložený text</td><td style='border: 1px solid black; padding: 2px;'>0</td></tr>
				<tr><td style='border: 1px solid black; padding: 2px;'>přímá řeč ve vloženém textu</td><td style='border: 1px solid black; padding: 2px;'>0</td></tr>
				<tr><td style='border: 0px solid black; padding: 2px; color: red; font-weight: bold;'>podrobná tabulka <a href='textsegments-txt/panrysanekapanschlegl.txt' target='_blank'><img src='ikony/txt.png' style='width: 20px; height: 20px;'></a></td></tr>
				</table>";
				echo "<br><a href='SlovniDruhy/panrysanekapanschlegl.png' target='_blank'><img src='SlovniDruhy/panrysanekapanschlegl.png' style='width: 600px; height: 300px'></a><br><br>";
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