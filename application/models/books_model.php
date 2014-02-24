<?
class books_model extends CI_Model{
	
	
  function general(){
	 					   
	$data['title']	 	= 'Title';
	$data['author']	 	= 'Author';
	$data['publisher']	= 'Publisher';				
	$data['year']	 	= 'Year';
	$data['years']	 	= array('2007'=>'2007',
	                            '2008'=>'2008',
								'2009'=>'2009');	
	$data['available']	= 'Available';	
	$data['summary']	= 'Summary';
	
	$data['ftitle']		= array('name'=>'title',
	                            'size'=>30
						  );
	$data['fauthor']	= array('name'=>'author',
	                            'size'=>30
						  );
	$data['fpublisher']	= array('name'=>'publisher',
	                            'size'=>30
						  );
        $data['favailable']	= array('name'=>'available',
	                            'value'=>'yes',
								'checked'=>TRUE
						  );
	$data['fsummary']	= array('name'=>'summary',
	                            'rows'=>5,
								'cols'=>30
						  );
    return $data;	
  }
}
?>
