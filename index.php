Route::post('/facbook/downloadexcelformate','FacbookLeadController@downloadExcelFormate');

public function downloadExcelFormate(){
  $arr[] = [
				"Name"=>'Test',
				"Email"=>'test@gmail.com',
				"Mobile"=>'1234567891',
				"Source"=>'Croma',
				"Course"=>'PHP',
				"Sub-Course"=>'Java Script',						
				"Status"=>'New Lead',
				"Expected_Date_Time"=>'m/d/yyyy', 
				"Remarks"=>'Interested',
				 
				 
			];			 
		 
	
	date_default_timezone_set('Asia/Kolkata'); 
	$excel = \App::make('excel');
	 
	Excel::create('add_facbook_leads_'.date('Y-m-d H:i a'), function($excel) use($arr) {
		$excel->sheet('Sheet 1', function($sheet) use($arr) {
			$sheet->fromArray($arr);
		});
	})->export('xls');
  
}





<form  method="POST"  action="{{ url('/facbook/downloadexcelformate') }}">
		{{ csrf_field() }}
		 
		<div class="form-group">						 

		<button type="submit" class="btn-success  btn-block download-excel-formate">Download Excel Format</button>
				
		 
		</div>
</form>
