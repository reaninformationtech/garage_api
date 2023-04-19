CREATE DEFINER=`root`@`localhost` PROCEDURE `garage_api`.`proc_add_left_menu`(
		IN `v_status` 	VARCHAR(25), 
		IN `v_menuid` 	VARCHAR(25), 
		IN `parent_id` 	VARCHAR(255),
		IN `v_icon` 	VARCHAR(255),
		IN `v_page_name` VARCHAR(255),
		IN `v_title` 	VARCHAR(255),
		IN `v_active` VARCHAR(255), 
		IN `v_inputer` VARCHAR(255))
BEGIN
	
	 DECLARE vsubm_id varchar(50);
	IF (v_status = 'i') THEN
	
		CALL gb_modify_next_id('main_menu', '1', vsubm_id);

		SELECT vsubm_id  as id ;
		
	ELSEIF (v_status = 'U') THEN
		select '';


	END IF;
	
	
END