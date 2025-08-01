CREATE DEFINER=`root`@`localhost` PROCEDURE `CRUD_PARTE_EDITAVEL`(IN jsonData JSON)
BEGIN
    DECLARE ACAO CHAR;
    DECLARE ID_PARTE_EDITAVEL VARCHAR(100);
    DECLARE INPUT_SIMPLES VARCHAR(100);
    DECLARE TEXTAREA VARCHAR(100);
    DECLARE CAMINHO_IMAGEM VARCHAR(100);
    
    SET ACAO = JSON_UNQUOTE(JSON_EXTRACT(jsonData, '$.ACAO'));
    SET ID_PARTE_EDITAVEL = CAST(JSON_UNQUOTE(JSON_EXTRACT(jsonData, '$.ID_PARTE_EDITAVEL')) AS UNSIGNED);
    SET INPUT_SIMPLES = JSON_UNQUOTE(JSON_EXTRACT(jsonData, '$.INPUT_SIMPLES'));
    SET TEXTAREA = JSON_UNQUOTE(JSON_EXTRACT(jsonData, '$.TEXTAREA'));
    SET CAMINHO_IMAGEM = JSON_UNQUOTE(JSON_EXTRACT(jsonData, '$.CAMINHO_IMAGEM'));

    IF ACAO = 'C' THEN 
        INSERT INTO PARTE_EDITAVEL(INPUT_SIMPLES, TEXTAREA, CAMINHO_IMAGEM)
        VALUES (INPUT_SIMPLES, TEXTAREA, CAMINHO_IMAGEM);
    ELSEIF ACAO = 'U' THEN 
        UPDATE PARTE_EDITAVEL SET 
            INPUT_SIMPLES = INPUT_SIMPLES,
            TEXTAREA = TEXTAREA,
            CAMINHO_IMAGEM
        WHERE ID_PARTE_EDITAVEL = ID_PARTE_EDITAVEL;
	ELSEIF ACAO = 'D' THEN
		DELETE FROM PARTE_EDITAVEL WHERE ID_PARTE_EDITAVEL = ID_PARTE_EDITAVEL;
	ELSEIF ACAO = 'R' THEN
		SELECT * FROM PARTE_EDITAVEL WHERE ID_PARTE_EDITAVEL = ID_PARTE_EDITAVEL;
	ELSEIF ACAO = 'S' THEN
		SELECT * FROM PARTE_EDITAVEL;
	END IF;
END