<?php
 class Post extends ActiveRecord\Model
 {
	public static $table_name='post';
    public static $primary_key='pid';
	public static $status='p_status';
	public static $u_id='u_id';
  
	public static $content='p_content';



}
 ?>