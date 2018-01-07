/*$insert_tutors = $wpdb->get_results( "

      INSERT INTO `tutors` (`tutorid`, `firstname`, `lastname`, `patronymic`, `birthdate`, `startdate`, `finishdate`, `phone`, `adress`, `sexid`, `nationid`, `photo`, `rnn`, `rang`, `scientificdegreeid`, `academicstatusid`, `rate`, `cafedraid`, `deleted`, `icnumber`, `icdate`, `icdepartment`, `ismarried`, `length_workall`, `length_work`, `job_title`, `ftutor`, `maternity_leave`, `on_foreign_trip`) 
      VALUES
    (
    ".$tutors[$i]->tutorid.", 
    ".$tutors[$i]->firstname.", 
    ".$tutors[$i]->lastname.", 
    ".$tutors[$i]->patronymic.", 
    ".$tutors[$i]->birthdate.", 
    ".$tutors[$i]->startdate.", 
    ".$tutors[$i]->finishdate.", 
    ".$tutors[$i]->phone.", 
    ".$tutors[$i]->adress.", 

    ".$tutors[$i]->sexid.", 

    ".$tutors[$i]->nationid.", 
    "", 
    ".$tutors[$i]->rnn.", 
    ".$tutors[$i]->rang.", 

    ".$tutors[$i]->scientificdegreeid.", 
    ".$tutors[$i]->academicstatusid.", 

    ".$tutors[$i]->rate.", 

    ".$tutors[$i]->cafedraid.", 

    ".$tutors[$i]->deleted.", 
    ".$tutors[$i]->icnumber.", 
    ".$tutors[$i]->icdate.", 
    ".$tutors[$i]->icdepartment.", 
    ".$tutors[$i]->ismarried.", 
    ".$tutors[$i]->length_workall.", 
    ".$tutors[$i]->length_work.", 
    ".$tutors[$i]->job_title.", 
    ".$tutors[$i]->ftutor.", 
    ".$tutors[$i]->maternity_leave.", 
    ".$tutors[$i]->on_foreign_trip.");

      ");

      */

<?php

global $wpdb;

$tutors = $wpdb->get_results( "SELECT * FROM tutors_ref LIMIT 5");
$nationalities = $wpdb->get_results( " SELECT id, NameRU FROM nationalities");
$academicstatus = $wpdb->get_results( " SELECT id, nameru FROM academicstatus");
$cafedra = $wpdb->get_results( " SELECT cafedraid, cafedranameru FROM cafedras");

for ($i=0; $i < count($tutors); $i++) { 

    if($tutors[$i]->sexid == "женский"){
        $tutors[$i]->sexid = 1;
    }else{
        $tutors[$i]->sexid = 2;
    }

    if ($tutors[$i]->scientificdegreeid == "Без степени") {
        $tutors[$i]->scientificdegreeid = 1;
    }else if($tutors[$i]->scientificdegreeid == "Кандидат наук") {
        $tutors[$i]->scientificdegreeid = 2;
    }else if($tutors[$i]->scientificdegreeid == "Доктор наук") {
        $tutors[$i]->scientificdegreeid = 3;
    }else if($tutors[$i]->scientificdegreeid == "Магистр") {
        $tutors[$i]->scientificdegreeid = 4;
    }else if($tutors[$i]->scientificdegreeid == "Доктор PhD") {
        $tutors[$i]->scientificdegreeid = 5;
    }else{
        $tutors[$i]->scientificdegreeid = 0;
    }

    for ($a=0; $a < count($academicstatus); $a++) { 
        if ($tutors[$i]->academicstatusid == $academicstatus[$a]->nameru) {
            $tutors[$i]->academicstatusid = $academicstatus[$a]->degreeid;
        }
    }


    for ($n=0; $n < count($nationalities); $n++) {   
        if($tutors[$i]->nationid == $nationalities[$n]->NameRU){       
            $tutors[$i]->nationid = $nationalities[$n]->id;
        }

    }

    for ($c=0; $c < count($cafedra); $c++) { 
        if ($tutors[$i]->cafedraid == $cafedra[$c]->nameru) {
            $tutors[$i]->cafedraid = $cafedra[$c]->cafedraid;
        }
    }

    $difference = intval(abs(
    strtotime($tutors[$i]->length_workall) - strtotime(date('d-m-Y'))
    ));
     
    // Количество дней
    $tutors[$i]->length_workall = $difference / (3600 * 24);

    if ($tutors[$i]->ftutor == "Да") {
        $tutors[$i]->ftutor = 1;
    }else{
        $tutors[$i]->ftutor = 0;
    }

    if ($tutors[$i]->maternity_leave == "Да") {
        $tutors[$i]->maternity_leave = 1;
    }else{
        $tutors[$i]->maternity_leave = 0;
    }

    if ($tutors[$i]->on_foreign_trip == "Да") {
        $tutors[$i]->on_foreign_trip = 1;
    }else{
        $tutors[$i]->on_foreign_trip = 0;
    }

    if ($tutors[$i]->hourlyFund == "Да") {
        $tutors[$i]->hourlyFund = 1;
    }else{
        $tutors[$i]->hourlyFund = 0;
    }

    if ($tutors[$i]->hourlyFund == "Да") {
        $tutors[$i]->hourlyFund = 1;
    }else{
        $tutors[$i]->hourlyFund = 0;
    }

    if ($tutors[$i]->type == "Штатный преподаватель") {
        $tutors[$i]->type = 0;
    }else if ($tutors[$i]->type == "Внутренний совместитель") {
        $tutors[$i]->type = 1;
    }else if ($tutors[$i]->type == "Внешний совместитель") {
        $tutors[$i]->type = 2;
    }else{
        $tutors[$i]->type = "";
    }
}

print_r($tutors);

?>