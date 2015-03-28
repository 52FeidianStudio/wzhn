<?php
    class NewsModel extends RelationModel{
	   protected $_link=array(
	       'Module'=> array(  
				'mapping_type'=>BELONGS_TO,
				'foreign_key'=>'mid',
				'mapping_name'=>'mid',
				'mapping_fields'=>'mname',
				'as_fields'=>'mname',
            ),
	   );
	}
?>