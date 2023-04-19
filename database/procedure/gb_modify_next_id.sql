CREATE DEFINER=`root`@`localhost` PROCEDURE `garage_api`.`gb_modify_next_id`(IN `v_con_name` VARCHAR(255), IN `v_type` VARCHAR(20), OUT `v_number` VARCHAR(255))
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
	
END