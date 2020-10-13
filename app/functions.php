<?php 

/**
*file Upload System
*/

	function fileUpload($file, $file_location = '', $file_format = ['jpg','png', 'gif'], $file_type = null){

		//file info
		$file_name = $file['name'];
		$file_name_tmp = $file['tmp_name'];

		//file name extension
		$file_array = explode('.', $file_name);
		$file_extension = strtolower(end($file_array));


		 //file type default value
		if ( ! isset($file_type['type'])) {
			$file_type['type'] = 'image';
		}

		if ( ! isset($file_type['file_name'])) {
			$file_type['file_name'] = '';
		}

		if ( ! isset($file_type['fname'])) {
			$file_type['fname'] = '';
		}

		if ( ! isset($file_type['lname'])) {
			$file_type['lname'] = '';
		}


		//file name with type
		if ($file_type['type'] == 'image') {

			//file name generate
		$file_name = md5(time().rand()) . '.' .$file_extension;

		}elseif ($file_type['type'] == 'file') {
			$file_name = date('d_m_Y_g_h_s') . '_'. $file_type['fname'] . '_' . $file_type['lname'] . '.' . $file_extension;
		}

		

		//file formtat
		$mess = '';
		if (in_array($file_extension, $file_format) == false) {
			$mess =  '<p class = "alert alert-danger mt-5 w-50 mx-auto ">File format did not match ! <button data-dismiss = "alert" class = "close">&times;</button> </p>';
		}else{


			move_uploaded_file($file_name_tmp ,$file_location .$file_name);

		}

	return [

		'mess' 			=> $mess,
		'file_name' 	=> $file_name

	];


	}

 ?>