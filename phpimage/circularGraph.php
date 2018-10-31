<?php // content="text/plain; charset=utf-8"
    // $Id: balloonex1.php,v 1.5 2002/12/15 16:08:51 aditus Exp $
//jpgraph->src->Examples->balloonex1.php
    require_once ('jpgraph/src/jpgraph.php');
    require_once ('jpgraph/src/jpgraph_scatter.php');

    // Some data，两组要表现在的数据
    $datax = array(1,2,3,4,5,6,7,8);   //x轴上的数据
    $datay = array(12,23,95,18,65,28,86,44);
    // Callback for markers
    // Must return array(width,color,fill_color)
    // If any of the returned values are "" then the
    // default value for that parameter will be used.
    function FCallback($aVal) {   //不同数值范围内的图像颜色表现
        // This callback will adjust the fill color and size of
        // the datapoint according to the data value according to
        if( $aVal < 30 ) $c = "yellow";
        elseif( $aVal < 70 ) $c = "green";
        else $c="red";
        return array(floor($aVal/3),"",$c);
    }

    // Setup a basic graph
    $graph = new Graph(400,300,'auto');
    $graph->clearTheme();
    $graph->SetScale("linlin");  //生成刻度
    $graph->img->SetMargin(40,100,40,40);  //图像的边框
    $graph->SetShadow();
    $graph->title->Set("Example of ballon scatter plot");
    // Use a lot of grace to get large scales
    $graph->yaxis->scale->SetGrace(50,10);

    // Make sure X-axis as at the bottom of the graph
    $graph->xaxis->SetPos('min');    //设置x轴为初始值

    // Create the scatter plot
    $sp1 = new ScatterPlot($datay,$datax);   //生成数据表示图
    $sp1->mark->SetType(MARK_FILLEDCIRCLE);

    // Uncomment the following two lines to display the values
    $sp1->value->Show();   //展示数据表示图
    $sp1->value->SetFont(FF_FONT1,FS_BOLD);

    // Specify the callback
    $sp1->mark->SetCallback("FCallback");

    // Setup the legend for plot
    $sp1->SetLegend('Year 2002');  //设置标题

    // Add the scatter plot to the graph
    $graph->Add($sp1);

    // ... and send to browser
    $graph->Stroke();

?>
