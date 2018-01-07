<?php

global $wpdb;

$tutors = $wpdb->get_results( "

  SELECT * FROM tutors_ref

");

print_r($tutors);

$newtable = $wpdb->get_results( "

SELECT 
   @a := @a + 1  rowNum,
   row_name,
   total,
   Magistr,
   Kandidat_nauk,
   Doctor_PhD,
   Doctor_nauk,
   professorlar,
   docsentter,
   associirovanny_professor,
   professor_po_novoi_kvalifikacsii
  FROM
  (
SELECT
  @a := 0 ,
 'tutors_pps' AS rownum,
  l.row_id,
  l.row_name,
  SUM(CASE when t.ScientificDegreeID IN (4,2,5,3) or t.AcademicStatusID IN (3,2,4,5) THEN 1 ELSE 0 end) AS total,
  SUM(case when t.ScientificDegreeID = 4 THEN 1 ELSE 0 END ) AS Magistr,
  SUM(case when t.ScientificDegreeID = 2 THEN 1 ELSE 0 END ) AS Kandidat_nauk,
  SUM(case when t.ScientificDegreeID = 5 THEN 1 ELSE 0 END ) AS Doctor_PhD,
  SUM(case when t.ScientificDegreeID = 3 THEN 1 ELSE 0 END ) AS Doctor_nauk,
  SUM(CASE when t.AcademicStatusID = 3 THEN 1 ELSE 0 END ) AS professorlar,
  SUM(CASE when t.AcademicStatusID = 2 THEN 1 ELSE 0 END ) AS docsentter,
  SUM(CASE when t.AcademicStatusID = 4 THEN 1 ELSE 0 END ) AS associirovanny_professor,
  SUM(case when t.AcademicStatusID = 5 THEN 1 ELSE 0 END ) AS professor_po_novoi_kvalifikacsii
  FROM tutors t

  RIGHT JOIN (
  SELECT 0 row_id, 'штаттық ПОҚ / Штатный ППС' row_name, 0 start_date, 0 end_date, 0 sex_id
  UNION ALL
  SELECT 1 row_id, '30 жасқа дейін/ до 30 лет ' row_name, 0 start_date, 30 end_date, 0 sex_id
  UNION ALL
  SELECT 2 row_id, '31-40 жас/ 31-40 лет' row_name,  31 start_date, 40 end_date, 0 sex_id
  UNION ALL
  SELECT 3 row_id, '41-50 жас/ 41-50 лет' row_name,  41 start_date, 50 end_date, 0 sex_id
  UNION ALL
  SELECT 4 row_id, '51-63 жас/ 51- 63 лет' row_name,  51 start_date, 63 end_date, 0 sex_id
  UNION ALL
  SELECT 5 row_id, '64 жас және одан жоғары/ 64 лет и старше' row_name,  64 start_date, 10000 end_date, 0 sex_id
  UNION ALL
  select 6 row_id, 'оның ішінде әйелдер / в том числе женщин' row_name,  0 start_date, 0 end_date, 1 sex_id)l
  ON
  (((year(CURRENT_DATE()) - year(t.BirthDate)) BETWEEN l.start_date AND l.end_date) OR ( start_date = 0 AND l.end_date = 0  ))
  AND (l.sex_id = 0 OR l.sex_id = t.SexID)
   where t.deleted=0 
  GROUP BY l.row_id,  l.row_name
  ORDER BY l.row_id ) form5

" );

print_r($newtable);


?>