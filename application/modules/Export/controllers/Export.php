<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Export extends MY_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->library('pdf');
    $this->load->library('excel');
    $this->load->helper(array('url','file','download'));
        
  }

   public function create_excel($excel_data=NUll) {
        
 //check if the excel data has been set if not exit the excel generation    
     
     if(count($excel_data)>0):
        
        $objPHPExcel = new PHPExcel();
        $objPHPExcel -> getProperties() -> setCreator("SokoHewani Limited");
        $objPHPExcel -> getProperties() -> setLastModifiedBy($excel_data['doc_creator']);
        $objPHPExcel -> getProperties() -> setTitle($excel_data['doc_title']);
        $objPHPExcel -> getProperties() -> setSubject($excel_data['doc_title']);
        $objPHPExcel -> getProperties() -> setDescription("");

        $objPHPExcel -> setActiveSheetIndex(0);

        $rowExec = 1;

        //Looping through the cells
        $column = 0;

        foreach ($excel_data['column_data'] as $column_data) {
            $objPHPExcel -> getActiveSheet() -> setCellValueByColumnAndRow($column, $rowExec, $column_data);
            $objPHPExcel -> getActiveSheet() -> getColumnDimension(PHPExcel_Cell::stringFromColumnIndex($column)) -> setAutoSize(true);
            //$objPHPExcel->getActiveSheet()->getStyle($column, $rowExec)->getFont()->setBold(true);
            $objPHPExcel->getActiveSheet()->getStyleByColumnAndRow($column, $rowExec)->getFont()->setBold(true);
            $column++;
        }       
        $rowExec = 2;
                
        foreach ($excel_data['row_data'] as $row_data) {
        $column = 0;
        foreach($row_data as $cell){
         //Looping through the cells per facility
        $objPHPExcel -> getActiveSheet() -> setCellValueByColumnAndRow($column, $rowExec, $cell);
                
        $column++;  
         }
        $rowExec++;
        }

        $objPHPExcel -> getActiveSheet() -> setTitle($excel_data['excel_topic']);

        // Save Excel 2007 file
        //echo date('H:i:s') . " Write to Excel2007 format\n";
        $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');

            // We'll be outputting an excel file
    if(isset($excel_data['report_type'])){

       $objWriter->save("./print_docs/excel/excel_files/".$excel_data['file_name'].'.xls');
    } else{
    
        // We'll be outputting an excel file
        header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
        header("Cache-Control: no-store, no-cache, must-revalidate");
        header('Content-Type: application/vnd.ms-excel');
        header("Cache-Control: post-check=0, pre-check=0", false);
        header("Pragma: no-cache");
        // It will be called file.xls
        header("Content-Disposition: attachment; filename=".$excel_data['file_name'].'.xls');
        // Write file to the browser
        $objWriter -> save('php://output');
       $objPHPExcel -> disconnectWorksheets();
       unset($objPHPExcel);
   }
        
endif;
}


function create_pdf($html, $data){
    $pdf = $this->pdf->load();

    $pdf->AddPage("P");

    $stylesheet = file_get_contents('./assets/dashboard/css/pdf.css');

    $pdf->WriteHTML($stylesheet, 1);
    $pdf->WriteHTML($html, 2);


    $pdf->SetHTMLHeader('<div style="text-align: right; font-weight: bold;">'.$data["pdf_title"].'</div>');

    $pdf->SetHTMLFooter('

    <table class="exports" width="100%" style="vertical-align: bottom; font-family: serif; font-size: 8pt; color: #000000; font-weight: bold;"><tr>

    <td width="33%"><span style="font-weight: bold; font-style: italic;">Exported on: {DATE j-m-Y H:i:s}</span></td>

    <td width="33%" align="center" style="font-weight: bold; font-style: italic;">Page {PAGENO} of {nbpg}</td>

    <td width="33%" style="text-align: right; ">'.$data["pdf_title"].'</td>

    </tr></table>

    ');

    $pdf->output($data["pdf_title"],'D');


}




       public function create_high_chart_graph($graph_data=null)
  {
    //$graph_color = array();
    //$col_array=array();
    $high_chart='';
    if(isset($graph_data)):
        $graph_id=$graph_data['graph_id'];
        $graph_title=$graph_data['graph_title'];
        $graph_color=$graph_data['graph_color'];
         //echo '<pre>';print_r($graph_data);echo "</pre>";
        
        
       //
        $graph_type=$graph_data['graph_type'];
        $stacking=isset($graph_data['stacking']) ? $graph_data['stacking'] : null;
        $graph_categories=json_encode(array_map('utf8_encode',$graph_data['graph_categories'])); 
        //echo json_encode($graph_data['graph_categories']);
        $graph_yaxis_title=$graph_data['graph_yaxis_title'];
        $graph_series_data=$graph_data['series_data'];
        //echo '<pre>';print_r($graph_series_data);echo "</pre>";
        
        $array_size=sizeof($graph_data['series_data'][key($graph_data['series_data'])]);            
        $height=$array_size<12? null :$array_size*30;
        $height=isset($height) ? ", height:$height" : null;
        //set up the graph here
        if($graph_type=="bar"){
        $data_=" series: {
                    stacking: '$stacking',
                    dataLabels: {
                        enabled: true,
                        color: (Highcharts.theme && Highcharts.theme.dataLabelsColor) || 'white'
                    }
                }"; 
        }else{
            $data_="column: {
                    stacking: '$stacking',
                    dataLabels: {
                        enabled: true,
                        color: (Highcharts.theme && Highcharts.theme.dataLabelsColor) || 'white'
                    }
                }"; 
        }
        $high_chart .="
        $('#$graph_id').highcharts({
            chart: { zoomType:'x', type: '$graph_type' $height },
            credits: { enabled:false},
            title: {text: '$graph_title'},
            yAxis: { min: 0, title: {text: '$graph_yaxis_title'}},
            subtitle: {text: 'Source: HCMP', x: -20 },
            xAxis: { categories: $graph_categories},
            tooltip: { crosshairs: [true,true] },
               scrollbar: {
               enabled: true
               }, ";

             if(isset($graph_color) && $graph_id == 'logged-graph'){
                $high_chart .= "colors: ".$graph_color=json_encode(array_map('utf8_encode',$graph_data['graph_color'])) .",";
                $graph_color = str_replace('"', "'", $graph_color); 
                //echo '<pre>';print_r($graph_color);echo "</pre>";
             }
             
             $high_chart .="plotOptions: {
                 series: {";
                 if(isset($graph_color) && $graph_id == 'logged-graph'){
             $high_chart .="colorByPoint: true, ";
                 }
             $high_chart .="
                     
                     //colors: $graph_color,
                     pointWidth: 18,
                     stacking: '$stacking',
                    dataLabels: {
                        enabled: false,
                        rotation: -45,
                        color: (Highcharts.theme && Highcharts.theme.dataLabelsColor) || 'black'
                    }
                }
            },
            series: [";          
            foreach($graph_series_data as $key=>$raw_data):
                    $temp_array=array();
                //$col_array=array();
                    $high_chart .="{ name: '$key', data:";                   
                      foreach($raw_data as $key_data):
                        is_int($key_data)? $temp_array=array_merge($temp_array,array((int)$key_data)) :
                        $temp_array=array_merge($temp_array,array($key_data));                      
                        endforeach;     
                            
                            
                      $high_chart .= json_encode($temp_array)."}";  

                      //echo '<pre>';print_r($temp_array);echo "</pre>";
                   endforeach;
         $high_chart .="]  })";

    endif;

    return $high_chart;     
  }

}



