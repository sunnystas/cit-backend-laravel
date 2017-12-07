CREATE OR REPLACE FUNCTION insert_cities_and_streets() 
  RETURNS void 
  AS $$

DECLARE
  rec      record;
  i        integer;
  city_id  integer;

BEGIN
  FOR rec IN 
    SELECT DISTINCT * FROM rawcities ORDER BY city_name
  LOOP
    EXECUTE 'INSERT INTO cities(name_ua) VALUES(''' || rec.city_name || ''') ON CONFLICT(name_ua) DO UPDATE SET name_ua=''' || rec.city_name || ''' RETURNING id' INTO city_id;
    EXECUTE 'INSERT INTO streets (city_id, name_ua) VALUES (''' || city_id || ''', ''' || rec.str_name || ''') ON CONFLICT(name_ua) DO UPDATE SET name_ua=''' || rec.str_name || '''';
  END LOOP;
END;
$$ LANGUAGE plpgsql;


SELECT insert_cities_and_streets();
-- SELECT setval('cities_id_seq', 1);
-- SELECT setval('streets_id_seq', 1);
-- INSERT INTO cities(name_ua) VALUES('Ярунь') ON CONFLICT(name_ua) DO UPDATE SET name_ua='Ярунь' RETURNING id
-- INSERT INTO cities(name_ua) VALUES('Ярунь') ON CONFLICT(name_ua) DO UPDATE SET name_ua='Ярунь' RETURNING id
-- UPDATE rawcities SET str_name = replace(str_name, '''', '''''')
