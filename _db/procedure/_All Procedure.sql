CREATE DEFINER=`root`@`localhost` PROCEDURE `garage_api`.`combo_branch`(
		IN `v_status` VARCHAR(25), 
		IN `v_branchcode` VARCHAR(25), 
		IN `v_condition` VARCHAR(50)
)
BEGIN
	
	 IF (v_status = 'branch') THEN
	 	
	 	 SELECT  '' AS id , 
	 			'None' AS name
 		UNION
 		SELECT b.branch_code,
 			           b.name
 		FROM branches b 
 		WHERE b.active='1' AND b.subofbranch=v_condition
 		ORDER BY id ;
	 
	END IF;
END;

CREATE DEFINER=`root`@`localhost` PROCEDURE `garage_api`.`gb_get_combo`(
		IN `v_status` VARCHAR(25), 
		IN `v_branchcode` VARCHAR(25), 
		IN `v_condition` VARCHAR(50)
	)
BEGIN
	
	 IF (v_status = 'province') THEN
	 	SELECT  '0' AS id , 
	 			'None' AS name
 		UNION 
	 	SELECT p.id ,
	 		   p.name 
	 	FROM provinces p 
	 	WHERE p.active='1' ORDER BY id ;
	 
	  ELSEIF (v_status = 'profile') THEN
	  	SELECT  '' AS id , 
	 			'None' AS name
 		UNION 
	  	SELECT p.id ,
	  		   p.profile 
	  	FROM profiles p  WHERE p.active='1' ORDER BY id ;
	 ELSEIF (v_status = 'branch') THEN
	 	
	 	SELECT  '0' AS id , 
	 			'None' AS name
 		UNION
 		SELECT b.branch_code,
 			   b.name
 		FROM branches b 
 		WHERE b.active='1' AND b.subofbranch=v_condition
 		ORDER BY id ;
 	ELSEIF (v_status = 'main_menu') THEN
	  
 	
	 	SELECT  '0' AS id , 
	 			'None' AS name
 		UNION
	  	SELECT m.id ,
	  		   m.title as name
	  	FROM menus m 
	  	WHERE m.parent_id IS NULL ;
	  
	 END IF;
END;

CREATE DEFINER=`root`@`localhost` PROCEDURE `garage_api`.`gb_next_id`(IN `v_con_name` VARCHAR(255), IN `v_type` VARCHAR(20), OUT `v_number` VARCHAR(255))
BEGIN


  DECLARE select_var varchar(20);
  DECLARE v_len int;
  SET v_len = 4;


  	IF EXISTS ( SELECT v_con_name FROM gb_sys_contants gsc WHERE gsc.con_name = v_con_name) THEN

    	SET select_var = IFNULL(( SELECT MAX(con_values) + 1 FROM gb_sys_contants AS AB WHERE AB.con_name = v_con_name), 1);

		UPDATE gb_sys_contants SET con_values = select_var WHERE con_name = v_con_name;

	ELSE

		INSERT INTO gb_sys_contants (con_name, con_values, con_remake) VALUES (v_con_name, '1', v_con_name);
	END IF;


	IF (v_type = '1') THEN
	    SET select_var = RIGHT(1000000 + select_var, v_len);
	ELSEIF (v_type = '2') THEN
		SET select_var = CONCAT(LEFT(v_con_name, 3), '-', RIGHT(1000000 + select_var, v_len));
	ELSEIF (v_type = '9') THEN
		SET select_var = CONCAT(DATE_FORMAT(NOW(), '%Y%m%d'), '-', RIGHT(1000000 + select_var, v_len));
	ELSEIF (v_type = '10') THEN
		SET select_var = CONCAT(LEFT(UUID(), 7), '-', RIGHT(1000000 + select_var, v_len));
	END IF;


  	SET v_number = select_var;

END;

CREATE DEFINER=`root`@`localhost` PROCEDURE `garage_api`.`gb_sql_checking`(
	IN `v_status` 		VARCHAR(25), 
	IN `v_branchcode` 	VARCHAR(25), 
	IN `v_condition_01` 	VARCHAR(50),
	IN `v_condition_02` VARCHAR(50)
)
BEGIN
	
	 DECLARE is_existing BIT;
	
	 SET is_existing=FALSE ;
	
	 IF (v_status = 'email' AND v_condition_02<>'%') THEN
	 
	 	   SET is_existing=IFNULL((SELECT TRUE  FROM users as a WHERE a.email =v_condition_01 AND a.id <>v_condition_02 ORDER BY a.id  DESC LIMIT 1),FALSE);
	 	  
	 ELSEIF  (v_status = 'email' )THEN
	 
	   		SET is_existing=IFNULL((SELECT TRUE  FROM users as a WHERE a.email =v_condition_01  ORDER BY a.id  DESC LIMIT 1),FALSE);
	
	  END IF ;
	
	SELECT is_existing as is_existing;
	
	
END;

CREATE DEFINER=`root`@`localhost` PROCEDURE `garage_api`.`gb_sql_get`(
		IN `v_status` VARCHAR(25), 
		IN `v_branchcode` VARCHAR(25), 
		IN `v_condition` VARCHAR(50)
	)
BEGIN
	 IF (v_status = 'all_branch') THEN
	 
	 	SELECT b.branch_code ,
	 		          b.main_branch ,
	 		          b.subofbranch ,
	 		          b.name ,
	 		          b.short_name ,
	 		          b.active ,
	 		          b.slogan ,
	 		          b.phone ,
	 		          b.address ,
	 		          b.active ,
	 		          b.inputter 
	 	FROM branches b 
	 	WHERE b.subofbranch=v_branchcode ORDER BY b.branch_code  ;
	 ELSEIF (v_status = 'get_branch') THEN
	 	 	SELECT b.branch_code ,
	 		          b.main_branch ,
	 		          b.subofbranch ,
	 		          b.name as branch_name,
	 		          b.short_name ,
	 		          b.active ,
	 		          b.slogan ,
	 		          b.phone ,
	 		          b.address ,
	 		          b.active ,
	 		          b.inputter 
	 	FROM branches b 
	 	WHERE b.subofbranch=v_branchcode AND b.branch_code =v_condition;
	 ELSEIF (v_status = 'get_users') THEN
	 	SELECT u.id,
	 		   u.name ,
	 		   u.email ,
	 		   u.profile_id ,
	 		   u.active ,
	 		   IFNULL(p.profile,'N/A' ) as profile,
	 		   b.branch_code ,
	 		   b.subofbranch ,
	 		   b.name ,
	 		   b.short_name 
	 	FROM users u 
	 	LEFT JOIN profiles p ON u.profile_id =p.id  
	 	INNER JOIN branches b on u.branch_code =b.branch_code 
	 	WHERE b.subofbranch =v_branchcode
	 	
	 	ORDER BY u.id,u.branch_code ;
	 ELSEIF (v_status = 'get_user_by_id') THEN
	 	 	SELECT u.id,
	 		   u.name as username,
	 		   u.email ,
	 		   u.profile_id ,
	 		   u.active ,
	 		   IFNULL(p.profile,'N/A' ) as profile,
	 		   b.branch_code ,
	 		   b.name as branch_name,
	 		   b.short_name ,
	 		   a.fullname ,
	 		   a.phone 
	 	FROM users u 
	 	LEFT JOIN profiles p ON u.profile_id =p.profile 
	 	LEFT  JOIN userinformations a ON u.sysdoc=a.sysdoc 
	 	INNER JOIN branches b on u.branch_code =b.branch_code 
	 	WHERE b.subofbranch =v_branchcode AND u.id =v_condition
	 	
	 	ORDER BY u.id,u.branch_code ;
	 ELSEIF (v_status = 'left_menu_list') THEN
	 		
	 	SELECT m.id,
	 		   m.icon ,
	 		   m.pagename,
	 		   m.title ,
	 		   m.parent_id ,
	 		   m.active ,
	 		   m.`ignore`,
	 		   m.`ordering`,
	 		   IFNULL(n.title,'Main') as parent_name
	 	FROM  menus m 
	 	left join menus n on m.parent_id =n.id 
	 	
	 	ORDER BY m.`ordering`,m.parent_id ;
	 	
	  ELSEIF (v_status = 'get_menu_by_id') THEN
	  
	  	 	SELECT m.id,
	 		   m.icon ,
	 		   m.pagename,
	 		   m.title ,
	 		   IFNULL(m.parent_id,'0') AS  parent_id,
	 		   m.active ,
	 		   m.`ignore`,
	 		   m.`ordering`,
	 		    IFNULL(n.title,'Main') as parent_name
	 	FROM  menus m 
	 	left join menus n on m.parent_id =n.id 
	 	WHERE m.id =v_condition
	 	ORDER BY m.`ordering`,m.parent_id ;
	 
	 END IF ;
	
END;

CREATE DEFINER=`root`@`localhost` PROCEDURE `garage_api`.`proc_add_branch`(
	IN `v_status` 				VARCHAR(25), 
	IN `v_branchcode` 	VARCHAR(20),
	IN `v_subofbranch` 	VARCHAR(20),
	IN `v_branch_name` 	VARCHAR(255),
	IN `v_short_name` 	VARCHAR(255),
	IN `v_slogan`				VARCHAR(255),
	IN `v_phone`				VARCHAR(255),
	IN `v_address`			VARCHAR(255),
	IN `v_system`				VARCHAR(255),
	IN `v_comments`		VARCHAR(255),
	IN `v_active`				VARCHAR(255),
	IN `v_inputter`			VARCHAR(255)
)
BEGIN
	
	 DECLARE vtran_id varchar(50);
	 IF (v_status = 'i') THEN
	 	CALL gb_next_id('branchcode', '1', vtran_id);
	 
	 		INSERT INTO branches
									(branch_code, subofbranch, main_branch, name, short_name, slogan, phone, address, system_id, comment, active, inputter)
					
									VALUES(vtran_id, v_subofbranch, 0, v_branch_name, v_short_name, v_slogan, v_phone, v_address, v_system,v_comments, v_active, v_inputter);
		
			SET v_branchcode =vtran_id;
	 
	 ELSEIF (v_status = 'u') THEN
	 			UPDATE branches set
	 						   active=v_active,
	 						   name =v_branch_name,
	 						   short_name =v_short_name,
	 						   phone =v_phone,
	 						   address =v_address,
	 						   slogan =v_slogan
	 			WHERE branch_code =v_branchcode;
	 END IF;
	
	SELECT v_branchcode AS trancode;
END;

CREATE DEFINER=`root`@`localhost` PROCEDURE `garage_api`.`proc_add_left_menu`(
	IN `v_status` 		VARCHAR(25), 
	IN `v_id` 			VARCHAR(25), 
	IN `v_parent_id` 	VARCHAR(20),
	IN `v_icon` 		VARCHAR(255),
	IN `v_page_name` 	VARCHAR(255),
	IN `v_title`		VARCHAR(255),
	IN `v_active`		VARCHAR(255),
	IN `v_inputter`		VARCHAR(255)
	)
BEGIN
	
	IF (v_status = 'i') THEN
		
		INSERT INTO menus
				(icon, pagename, title, parent_id, active, `ordering`, created_at,`ignore`)
				VALUES(v_icon, v_page_name, v_title, v_parent_id, v_active, 0,NOW(),0);
	ELSEIF (v_status = 'u') THEN
		
		IF (v_parent_id='0' or v_parent_id='')THEN 
			SET v_parent_id=NULL ;
		END IF ;
		UPDATE menus as m 
			   set 
			   m.icon =v_icon,
			   m.pagename =v_page_name,
			   m.title =v_title,
			   m.parent_id =v_parent_id,
			   m.active =v_active
		WHERE m.id =v_id;
		
	END IF ;
	
	SELECT IFNULL(v_id,'N/A') AS Trancode ;
END;

CREATE DEFINER=`root`@`localhost` PROCEDURE `garage_api`.`proc_create_user`(
	IN `v_status` 				VARCHAR(25), 
	IN `v_id` 					VARCHAR(25), 
	IN `v_branchcode` 	VARCHAR(20),
	IN `v_full_name` 		VARCHAR(255),
	IN `v_email` 				VARCHAR(255),
	IN `v_phone`				VARCHAR(255),
	IN `v_password`			VARCHAR(255),
	IN `v_profile`				VARCHAR(255),
	IN `v_active`				VARCHAR(255),
	IN `v_inputter`			VARCHAR(255)
)
BEGIN
	
	 DECLARE vsysdoc varchar(50);
	
	 IF v_status = 'i' THEN
	 
	 	CALL gb_next_id('sysdocnum', '1', vsysdoc);

	 		INSERT INTO users (branch_code,name,email,password,profile_id,active,sysdoc,inputter,created_at, updated_at)
	 					   values (v_branchcode,v_full_name,v_email,v_password,v_profile,v_active,vsysdoc,v_inputter,NOW(),NOW());
	
	 		INSERT INTO userinformations
									(branch_code, fullname, phone, sysdoc, created_at, updated_at)
								VALUES(v_branchcode, v_full_name,v_phone,vsysdoc,NOW(),NOW());
		
			set v_id= vsysdoc;
		
	  ELSEIF (v_status = 'u') THEN
	  
	  		IF NOT EXISTS (SELECT  u.id  FROM users u   INNER JOIN userinformations  AS i ON  u.sysdoc =i.sysdoc  WHERE u.id=v_id) THEN 
	  			CALL gb_next_id('sysdocnum', '1', vsysdoc);
	  		
	  				UPDATE users u  set sysdoc =vsysdoc WHERE id =v_id;
	  			
	  				 		INSERT INTO userinformations
									(branch_code, fullname, phone, sysdoc, created_at, updated_at)
								VALUES(v_branchcode, v_full_name,v_phone,vsysdoc,NOW(),NOW());
	  		
	  			
	  		END IF ;
	  
	  		UPDATE users u   LEFT JOIN userinformations  AS i ON  u.sysdoc =i.sysdoc  
	  		set 
	  						u.name=v_full_name,
	  						u.profile_id=v_profile,
	  						u.active=v_active,
	  						u.updated_at=NOW() ,
	  						i.fullname =v_full_name,
	  						i.phone =v_phone,
	  						u.password=v_password
	  		where u.branch_code =v_branchcode AND  u.id = v_id;
	  	
	  	
	  	
	 END IF ;
	
	SELECT v_id as trancode;
END;
