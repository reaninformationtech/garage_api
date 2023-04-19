CREATE DEFINER=`root`@`localhost` PROCEDURE `garage_api`.`gb_get_combo`(IN `v_status` VARCHAR(25), IN `v_branchcode` VARCHAR(25), IN `v_condition` VARCHAR(50))
BEGIN
	 IF (v_status = 'main_menu') THEN
	 	
	 	SELECT 0 as id,
	 		   'None' as name,
	 		    TRUE  as active
	 	UNION 
	 	SELECT a.id,
	 		   a.title as name,
	 		   a.active
	 	FROM menus  as a WHERE parent_id is NULL 
	 	ORDER BY id;
	 
	 END IF ;
END